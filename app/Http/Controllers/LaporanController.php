<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LaporanController extends Controller
{
    public function index(Request $request): View
    {
        $startDate = $request->input('start_date', Carbon::today('Asia/Jakarta')->startOfMonth()->toDateString());
        $endDate = $request->input('end_date', Carbon::today('Asia/Jakarta')->toDateString());

        $transactionsQuery = Transaksi::with(['pelanggan', 'detailTransaksi.layanan', 'pengguna'])
            ->whereDate('tanggal_masuk', '>=', $startDate)
            ->whereDate('tanggal_masuk', '<=', $endDate)
            ->where('status', '!=', 'dibatalkan');

        $totalRevenue = (clone $transactionsQuery)->sum('jumlah_dibayar');
        $totalOrders = (clone $transactionsQuery)->count();
        $totalUnpaid = (clone $transactionsQuery)->sum('sisa_tagihan');

        $paymentMethods = (clone $transactionsQuery)
            ->selectRaw('metode_pembayaran, SUM(jumlah_dibayar) as total, COUNT(*) as count')
            ->groupBy('metode_pembayaran')
            ->get();

        $serviceBreakdown = DetailTransaksi::whereHas('transaksi', function ($q) use ($startDate, $endDate) {
            $q->whereDate('tanggal_masuk', '>=', $startDate)
                ->whereDate('tanggal_masuk', '<=', $endDate)
                ->where('status', '!=', 'dibatalkan');
        })->with('layanan')
            ->selectRaw('layanan_id, SUM(kuantitas) as total_qty, SUM(subtotal) as total_amount')
            ->groupBy('layanan_id')
            ->get();

        $transactions = (clone $transactionsQuery)->latest('tanggal_masuk')->paginate(20)->withQueryString();

        return view('laporan.index', compact(
            'startDate',
            'endDate',
            'totalRevenue',
            'totalOrders',
            'totalUnpaid',
            'paymentMethods',
            'serviceBreakdown',
            'transactions'
        ));
    }
}

