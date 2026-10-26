<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Perfume;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\WhatsappLog;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PosController extends Controller
{
public function index(): View
    {
        $services = Service::where('is_active', true)->get();
        $perfumes = Perfume::where('is_active', true)->get();
        $customers = Customer::orderBy('name')->get();

        return view('pos.index', compact('services', 'perfumes', 'customers'));
    }

public function store(Request $request): RedirectResponse|JsonResponse
    {
        $customerId = $request->input('pelanggan_id', $request->input('customer_id'));
        $perfumeId = $request->input('parfum_id', $request->input('perfume_id'));
        $paymentStatus = $request->input('status_pembayaran', $request->input('payment_status'));
        $paymentMethod = $request->input('metode_pembayaran', $request->input('payment_method'));
        $amountPaid = $request->input('jumlah_dibayar', $request->input('amount_paid'));
        $discount = $request->input('diskon', $request->input('discount', 0));
        $notes = $request->input('catatan', $request->input('notes'));

        $request->merge([
            'customer_id' => $customerId,
            'pelanggan_id' => $customerId,
            'perfume_id' => $perfumeId,
            'parfum_id' => $perfumeId,
            'payment_status' => $paymentStatus,
            'status_pembayaran' => $paymentStatus,
            'payment_method' => $paymentMethod,
            'metode_pembayaran' => $paymentMethod,
            'amount_paid' => $amountPaid,
            'jumlah_dibayar' => $amountPaid,
            'discount' => $discount,
            'diskon' => $discount,
            'notes' => $notes,
            'catatan' => $notes,
        ]);

        $validated = $request->validate([
            'customer_id' => ['required', 'exists:pelanggan,id'],
            'perfume_id' => ['nullable', 'exists:parfum,id'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.service_id' => ['required', 'exists:layanan,id'],
            'items.*.quantity' => ['required', 'numeric', 'min:0.1'],
            'items.*.notes' => ['nullable', 'string', 'max:255'],
            'payment_status' => ['required', 'in:belum_bayar,uang_muka,lunas'],
            'payment_method' => ['required', 'in:tunai,qris,transfer'],
            'amount_paid' => ['required', 'numeric', 'min:0'],
            'discount' => ['nullable', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'send_whatsapp' => ['nullable', 'boolean'],
        ], [
            'customer_id.required' => 'Pelanggan wajib dipilih.',
            'items.required' => 'Tambahkan minimal satu layanan laundry ke keranjang kasir.',
            'items.min' => 'Tambahkan minimal satu layanan laundry ke keranjang kasir.',
            'amount_paid.required' => 'Nominal pembayaran wajib diisi.',
        ]);

        return DB::transaction(function () use ($validated, $request) {
            $customer = Customer::findOrFail($validated['customer_id']);

            $datePrefix = Carbon::now('Asia/Jakarta')->format('Ymd');
            $todayCount = Transaction::whereDate('created_at', Carbon::today('Asia/Jakarta'))->count() + 1;
            $sequence = str_pad((string) $todayCount, 4, '0', STR_PAD_LEFT);
            $invoiceNumber = "KTR-{$datePrefix}-{$sequence}";

            $totalPrice = 0;
            $maxDurationHours = 48; // default 48 jam
            $parsedItems = [];

            foreach ($validated['items'] as $itemData) {
                $service = Service::findOrFail($itemData['service_id']);
                $qty = (float) $itemData['quantity'];
                $unitPrice = (float) $service->price;
                $subtotal = round($qty * $unitPrice, 2);

                $totalPrice += $subtotal;
                if ($service->duration_hours > $maxDurationHours) {
                    $maxDurationHours = $service->duration_hours;
                }

                $parsedItems[] = [
                    'service_id' => $service->id,
                    'quantity' => $qty,
                    'unit_price' => $unitPrice,
                    'subtotal' => $subtotal,
                    'notes' => $itemData['notes'] ?? null,
                ];
            }

            $discount = (float) ($validated['discount'] ?? 0);
            $finalTotal = max(0, $totalPrice - $discount);
            $amountPaid = (float) $validated['amount_paid'];
            $remainingBalance = max(0, $finalTotal - $amountPaid);

            $paymentStatus = $validated['payment_status'];
            if ($amountPaid >= $finalTotal && $finalTotal > 0) {
                $paymentStatus = 'lunas';
                $remainingBalance = 0;
            } elseif ($amountPaid > 0 && $amountPaid < $finalTotal) {
                $paymentStatus = 'uang_muka';
            } elseif ($amountPaid <= 0) {
                $paymentStatus = 'belum_bayar';
            }

            $estimatedCompletion = Carbon::now('Asia/Jakarta')->addHours($maxDurationHours);

            $transaction = Transaction::create([
                'invoice_number' => $invoiceNumber,
                'customer_id' => $customer->id,
                'user_id' => Auth::id(),
                'perfume_id' => $validated['perfume_id'] ?? null,
                'status' => 'menunggu_diproses',
                'payment_status' => $paymentStatus,
                'payment_method' => $validated['payment_method'],
                'total_price' => $finalTotal,
                'amount_paid' => $amountPaid,
                'discount' => $discount,
                'remaining_balance' => $remainingBalance,
                'notes' => $validated['notes'] ?? null,
                'order_date' => Carbon::now('Asia/Jakarta'),
                'estimated_completion_date' => $estimatedCompletion,
                'is_wa_entry_sent' => ! empty($validated['send_whatsapp']),
            ]);

            foreach ($parsedItems as $item) {
                $transaction->items()->create($item);
            }

            $customer->increment('total_pesanan');

            if (! empty($validated['send_whatsapp'])) {
                $trackingUrl = route('tracking.show', $transaction->nomor_nota);
                $waMessage = "Halo Kak {$customer->nama}! 👋\n\n"
                    ."Terima kasih telah mencuci di *Katara Laundry Dinoyo Malang*.\n"
                    ."Nota transaksi Anda telah dibuat:\n\n"
                    ."📄 *No. Nota:* {$transaction->nomor_nota}\n"
                    .'🧺 *Total Tagihan:* Rp '.number_format($transaction->total_harga, 0, ',', '.')."\n"
                    .'💵 *Dibayar:* Rp '.number_format($transaction->jumlah_dibayar, 0, ',', '.')."\n"
                    .'📌 *Status Bayar:* '.strtoupper($transaction->payment_status_label)."\n"
                    .'⏰ *Estimasi Selesai:* '.$transaction->estimasi_selesai->translatedFormat('l, d M Y - H:i')." WIB\n\n"
                    ."🔍 Pantau progres cucian Anda secara langsung melalui tautan resmi:\n"
                    ."{$trackingUrl}\n\n"
                    .'Kami akan mengirimkan pesan otomatis saat pakaian Anda sudah selesai dan tertata rapi di rak. 🙏';

                WhatsappLog::create([
                    'transaksi_id' => $transaction->id,
                    'pelanggan_id' => $customer->id,
                    'nomor_telepon' => $customer->nomor_telepon,
                    'jenis_pesan' => 'nota_baru',
                    'pesan' => $waMessage,
                    'status' => 'terkirim',
                    'dikirim_pada' => Carbon::now('Asia/Jakarta'),
                ]);
            }

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'invoice_number' => $transaction->nomor_nota,
                    'nomor_nota' => $transaction->nomor_nota,
                    'receipt_url' => route('transactions.receipt', $transaction->id),
                    'message' => 'Transaksi berhasil disimpan!',
                ]);
            }

            return redirect()->route('transactions.receipt', $transaction->id)
                ->with('success', "Transaksi {$transaction->nomor_nota} berhasil diproses!");
        });
    }

public function quickStoreCustomer(Request $request): JsonResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $telepon = $request->input('nomor_telepon', $request->input('phone_number'));
        $alamat = $request->input('alamat', $request->input('address'));
        $catatan = $request->input('catatan', $request->input('notes'));

        $request->merge([
            'nama' => $nama,
            'nomor_telepon' => $telepon,
            'alamat' => $alamat,
            'catatan' => $catatan,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'nomor_telepon' => ['required', 'string', 'max:25'],
            'alamat' => ['nullable', 'string'],
            'catatan' => ['nullable', 'string'],
        ], [
            'nama.required' => 'Nama pelanggan wajib diisi.',
            'nomor_telepon.required' => 'Nomor WhatsApp / telepon wajib diisi.',
        ]);

        $customer = Customer::create($validated);

        return response()->json([
            'success' => true,
            'customer' => $customer,
            'message' => 'Pelanggan baru berhasil ditambahkan.',
        ]);
    }
}
