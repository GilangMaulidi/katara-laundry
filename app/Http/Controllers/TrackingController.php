<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use App\Models\Service;
use App\Models\Transaction;
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

public function search(Request $request): RedirectResponse
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

        $transaction = Transaction::where('nomor_nota', $query)->first();

        if (! $transaction) {
            $cleanedPhone = preg_replace('/[^0-9]/', '', $query);
            if (strlen($cleanedPhone) >= 5) {
                $transaction = Transaction::whereHas('customer', function ($q) use ($cleanedPhone) {
                    $q->where('nomor_telepon', 'like', "%{$cleanedPhone}%");
                })->latest('tanggal_masuk')->first();
            }
        }

        if (! $transaction) {
            return redirect()->route('tracking.index')
                ->with('error', "Pesanan dengan nomor nota atau nomor WhatsApp '{$query}' tidak ditemukan. Mohon periksa kembali struk nota Anda.");
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
