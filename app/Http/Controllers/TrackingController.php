<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TrackingController extends Controller
{
    public function index(): View
    {
        $services = Service::where('aktif', true)->orderBy('kategori')->get();
        $perfumes = Perfume::where('aktif', true)->get();
        $completedTransactionsCount = Transaction::where('status', 'selesai')->count();

        return view('tracking.index', compact('services', 'perfumes', 'completedTransactionsCount'));
    }

    public function search(Request $request): RedirectResponse|JsonResponse
    {
        $inputVal = $request->input('nomor_nota', $request->input('invoice_number'));
        $request->merge([
            'invoice_number' => $inputVal,
            'nomor_nota' => $inputVal,
        ]);

        $request->validate([
            'invoice_number' => ['required', 'string'],
        ], [
            'invoice_number.required' => 'Masukkan nomor nota atau nomor WhatsApp Anda.',
        ]);

        $query = trim((string) $inputVal);

        $transaction = Transaction::where('nomor_nota', $query)
            ->with(['customer', 'perfume', 'rackSlot', 'items.service'])
            ->first();

        if (! $transaction) {
            $cleanedPhone = preg_replace('/[^0-9]/', '', $query);
            if (strlen($cleanedPhone) >= 5) {
                $transaction = Transaction::whereHas('customer', function ($q) use ($cleanedPhone) {
                    $q->where('nomor_telepon', 'like', "%{$cleanedPhone}%");
                })->with(['customer', 'perfume', 'rackSlot', 'items.service'])
                    ->latest('tanggal_masuk')
                    ->first();
            }
        }

        if (! $transaction) {
            $errorMessage = "Pesanan dengan nomor nota atau nomor WhatsApp '{$query}' tidak ditemukan. Mohon periksa kembali struk nota Anda.";

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                ], 404);
            }

            return redirect()->route('tracking.index')
                ->with('error', $errorMessage);
        }

        if ($request->wantsJson() || $request->ajax()) {
            $statusOrderMap = [
                'menunggu_diproses' => 1,
                'sedang_dicuci' => 2,
                'sedang_dikeringkan' => 3,
                'sedang_disetrika' => 4,
                'sedang_dikemas' => 5,
                'siap_diambil' => 6,
                'selesai' => 7,
            ];

            return response()->json([
                'success' => true,
                'data' => [
                    'invoice_number' => $transaction->invoice_number,
                    'customer_name' => $transaction->customer ? $transaction->customer->name : 'Pelanggan Katara',
                    'status' => $transaction->status,
                    'status_label' => $transaction->status_label,
                    'status_step' => $statusOrderMap[$transaction->status] ?? 1,
                    'order_date' => $transaction->order_date ? $transaction->order_date->translatedFormat('d M Y, H:i').' WIB' : '-',
                    'estimated_completion' => $transaction->estimated_completion_date ? $transaction->estimated_completion_date->translatedFormat('d M Y, H:i').' WIB' : 'Hari ini',
                    'rack_code' => $transaction->rackSlot ? $transaction->rackSlot->code : null,
                    'perfume_name' => $transaction->perfume ? $transaction->perfume->name : null,
                    'total_price' => number_format((float) $transaction->total_price, 0, ',', '.'),
                    'amount_paid' => number_format((float) $transaction->amount_paid, 0, ',', '.'),
                    'remaining_balance' => number_format((float) $transaction->remaining_balance, 0, ',', '.'),
                    'payment_status' => $transaction->payment_status,
                    'is_paid' => $transaction->payment_status === 'lunas',
                    'detail_url' => route('tracking.show', $transaction->invoice_number),
                    'items' => $transaction->items->map(function ($item) {
                        return [
                            'service_name' => $item->service ? $item->service->name : 'Layanan Cuci',
                            'quantity' => (float) $item->quantity,
                            'unit' => $item->service ? $item->service->unit : 'kg',
                            'subtotal' => number_format((float) $item->subtotal, 0, ',', '.'),
                        ];
                    }),
                ],
            ]);
        }

        return redirect()->route('tracking.show', $transaction->nomor_nota);
    }

    public function show(string $invoiceNumber): View|RedirectResponse
    {
        $transaction = Transaction::where('nomor_nota', $invoiceNumber)
            ->with(['customer', 'perfume', 'rackSlot', 'items.service'])
            ->first();

        if (! $transaction) {
            return redirect()->route('tracking.index')
                ->with('error', "Nota transaksi '{$invoiceNumber}' tidak ditemukan.");
        }

        return view('tracking.show', compact('transaction'));
    }

    public function layanan(): View
    {
        $services = Service::where('aktif', true)->orderBy('kategori')->get();
        $perfumes = Perfume::where('aktif', true)->get();

        return view('layanan', compact('services', 'perfumes'));
    }

    public function kalkulator(): View
    {
        $services = Service::where('aktif', true)->orderBy('kategori')->get();
        $perfumes = Perfume::where('aktif', true)->get();

        return view('kalkulator', compact('services', 'perfumes'));
    }

    public function keunggulan(): View
    {
        return view('keunggulan');
    }

    public function galeri(): View
    {
        return view('galeri');
    }

    public function caraPesan(): View
    {
        return view('cara_pesan');
    }

    public function parfum(): View
    {
        $perfumes = Perfume::where('aktif', true)->get();

        return view('parfum', compact('perfumes'));
    }

    public function faq(): View
    {
        return view('faq');
    }

    public function lokasi(): View
    {
        return view('lokasi');
    }

    public function lacak(): View
    {
        $services = Service::where('aktif', true)->orderBy('kategori')->get();
        $perfumes = Perfume::where('aktif', true)->get();

        return view('lacak', compact('services', 'perfumes'));
    }
}
