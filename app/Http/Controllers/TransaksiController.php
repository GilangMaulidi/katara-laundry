<?php

namespace App\Http\Controllers;

use App\Models\LogWhatsapp;
use App\Models\SlotRak;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransaksiController extends Controller
{
    public function index(Request $request): View
    {
        $query = Transaksi::with(['pelanggan', 'parfum', 'slotRak', 'detailTransaksi.layanan', 'pengguna'])
            ->latest('tanggal_masuk');

        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('nomor_nota', 'like', "%{$search}%")
                    ->orWhereHas('pelanggan', function ($cq) use ($search) {
                        $cq->where('nama', 'like', "%{$search}%")
                            ->orWhere('nomor_telepon', 'like', "%{$search}%");
                    });
            });
        }

        if ($status = $request->input('status')) {
            if ($status !== 'semua') {
                $query->where('status', $status);
            }
        }

        if ($paymentStatus = $request->input('payment_status')) {
            if ($paymentStatus !== 'semua') {
                $query->where('status_pembayaran', $paymentStatus);
            }
        }

        if ($dateFrom = $request->input('date_from')) {
            $query->whereDate('tanggal_masuk', '>=', $dateFrom);
        }
        if ($dateTo = $request->input('date_to')) {
            $query->whereDate('tanggal_masuk', '<=', $dateTo);
        }

        $transactions = $query->paginate(15)->withQueryString();
        $availableRacks = SlotRak::where('status', 'tersedia')->orderBy('kode')->get();

        return view('transaksi.index', compact('transactions', 'availableRacks'));
    }

    public function show(Transaksi $transaction): View
    {
        $transaction->load(['pelanggan', 'parfum', 'slotRak', 'detailTransaksi.layanan', 'pengguna', 'logWhatsapp']);
        $availableRacks = SlotRak::where('status', 'tersedia')->orderBy('kode')->get();

        return view('transaksi.detail', compact('transaction', 'availableRacks'));
    }

    public function updateStatus(Request $request, Transaksi $transaction): RedirectResponse
    {
        $slotId = $request->input('slot_rak_id', $request->input('rack_slot_id'));
        $request->merge(['slot_rak_id' => $slotId]);

        $validated = $request->validate([
            'status' => [
                'required',
                'in:menunggu_diproses,sedang_dicuci,sedang_dikeringkan,sedang_disetrika,sedang_dikemas,siap_diambil,selesai,dibatalkan',
            ],
            'slot_rak_id' => ['nullable', 'exists:slot_rak,id'],
            'send_whatsapp' => ['nullable', 'boolean'],
        ]);

        $newStatus = $validated['status'];
        $transaction->status = $newStatus;

        if ($newStatus === 'siap_diambil') {
            $transaction->tanggal_selesai = Carbon::now('Asia/Jakarta');

            if (! empty($validated['slot_rak_id'])) {
                if ($transaction->slot_rak_id && $transaction->slot_rak_id != $validated['slot_rak_id']) {
                    SlotRak::where('id', $transaction->slot_rak_id)->update(['status' => 'tersedia']);
                }

                $transaction->slot_rak_id = $validated['slot_rak_id'];
                SlotRak::where('id', $validated['slot_rak_id'])->update(['status' => 'terisi']);
            }

            if (! empty($validated['send_whatsapp']) || ! $transaction->wa_siap_terkirim) {
                $rackCode = $transaction->slotRak ? $transaction->slotRak->kode : 'Meja Kasir';
                $trackingUrl = route('tracking.show', $transaction->nomor_nota);

                $waMessage = "Kabar gembira Kak {$transaction->pelanggan->nama}! ✨\n\n"
                    ."Pakaian Anda dengan no. nota *{$transaction->nomor_nota}* sudah *SELESAI DICUCI, DISETRIKA RAPI & DIKEMAS HIGIENIS*!\n\n"
                    ."📍 *Lokasi Rak:* *{$rackCode}*\n"
                    .'💰 *Sisa Tagihan:* '.($transaction->sisa_tagihan > 0 ? 'Rp '.number_format($transaction->sisa_tagihan, 0, ',', '.').' (Belum Lunas)' : 'LUNAS ✅')."\n\n"
                    ."Silakan ambil pakaian Anda di Gerai Dinoyo Katara Laundry pada jam operasional (07.00 - 21.00 WIB).\n"
                    ."Lihat bukti pengerjaan: {$trackingUrl}\n\n"
                    .'Terima kasih banyak! 🙏';

                LogWhatsapp::create([
                    'transaksi_id' => $transaction->id,
                    'pelanggan_id' => $transaction->pelanggan_id,
                    'nomor_telepon' => $transaction->pelanggan->nomor_telepon,
                    'jenis_pesan' => 'siap_ambil',
                    'pesan' => $waMessage,
                    'status' => 'terkirim',
                    'dikirim_pada' => Carbon::now('Asia/Jakarta'),
                ]);

                $transaction->wa_siap_terkirim = true;
            }
        }

        if ($newStatus === 'selesai') {
            $transaction->tanggal_ambil = Carbon::now('Asia/Jakarta');

            if ($transaction->slot_rak_id) {
                SlotRak::where('id', $transaction->slot_rak_id)->update(['status' => 'tersedia']);
            }
        }

        $transaction->save();

        return back()->with('success', "Status cucian berhasil diperbarui menjadi {$transaction->status_label}.");
    }

    public function settlePayment(Request $request, Transaksi $transaction): RedirectResponse
    {
        $amountPaid = $request->input('jumlah_dibayar', $request->input('amount_paid'));
        $paymentMethod = $request->input('metode_pembayaran', $request->input('payment_method'));

        $request->merge([
            'amount_paid' => $amountPaid,
            'payment_method' => $paymentMethod,
        ]);

        $validated = $request->validate([
            'amount_paid' => ['required', 'numeric', 'min:1'],
            'payment_method' => ['required', 'in:tunai,qris,transfer'],
        ]);

        $newPaid = (float) $validated['amount_paid'];
        $totalPaidNow = (float) $transaction->jumlah_dibayar + $newPaid;

        $transaction->jumlah_dibayar = $totalPaidNow;
        $transaction->sisa_tagihan = max(0, (float) $transaction->total_harga - $totalPaidNow);
        $transaction->metode_pembayaran = $validated['payment_method'];

        if ($transaction->sisa_tagihan <= 0) {
            $transaction->status_pembayaran = 'lunas';
        }

        $transaction->save();

        return back()->with('success', 'Pembayaran sebesar Rp '.number_format($newPaid, 0, ',', '.')." berhasil dicatat. Status: {$transaction->payment_status_label}.");
    }

    public function receipt(Transaksi $transaction): View
    {
        $transaction->load(['pelanggan', 'parfum', 'slotRak', 'detailTransaksi.layanan', 'pengguna']);

        return view('transaksi.struk', compact('transaction'));
    }
}

