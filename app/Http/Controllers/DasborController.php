<?php

namespace App\Http\Controllers;

use App\Models\BarangInventaris;
use App\Models\SlotRak;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\View\View;

class DasborController extends Controller
{
    public function index(): View
    {
        $today = Carbon::today('Asia/Jakarta');

        $todayRevenue = Transaksi::whereDate('tanggal_masuk', $today)
            ->where('status', '!=', 'dibatalkan')
            ->sum('jumlah_dibayar');

        $todayTransactionsCount = Transaksi::whereDate('tanggal_masuk', $today)->count();

        $inProcessCount = Transaksi::whereIn('status', [
            'menunggu_diproses',
            'sedang_dicuci',
            'sedang_dikeringkan',
            'sedang_disetrika',
            'sedang_dikemas',
        ])->count();

        $readyForPickupCount = Transaksi::where('status', 'siap_diambil')->count();

        $totalRackSlots = SlotRak::count();
        $occupiedRackSlots = SlotRak::where('status', 'terisi')->count();
        $availableRackSlots = $totalRackSlots - $occupiedRackSlots;

        $lowStockItems = BarangInventaris::whereColumn('stok', '<=', 'stok_minimal')->get();

        $recentTransactions = Transaksi::with(['pelanggan', 'parfum', 'slotRak', 'detailTransaksi.layanan'])
            ->latest('tanggal_masuk')
            ->take(8)
            ->get();

        $startDate = Carbon::today('Asia/Jakarta')->subDays(6)->startOfDay();
        $endDate = Carbon::today('Asia/Jakarta')->endOfDay();

        // Optimasi 1 kueri agregasi tunggal untuk tren 7 hari (menggantikan 14 kueri perulangan)
        $statsQuery = Transaksi::whereBetween('tanggal_masuk', [$startDate, $endDate])
            ->where('status', '!=', 'dibatalkan')
            ->selectRaw('DATE(tanggal_masuk) as tgl, SUM(jumlah_dibayar) as total_omset, COUNT(*) as total_transaksi')
            ->groupByRaw('DATE(tanggal_masuk)')
            ->get()
            ->keyBy('tgl');

        $sevenDaysChart = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today('Asia/Jakarta')->subDays($i);
            $dateKey = $date->toDateString();
            $stat = $statsQuery->get($dateKey);

            $dayName = match ($date->dayOfWeek) {
                0 => 'Min',
                1 => 'Sen',
                2 => 'Sel',
                3 => 'Rab',
                4 => 'Kam',
                5 => 'Jum',
                6 => 'Sab',
                default => $date->format('D'),
            };

            $sevenDaysChart[] = [
                'date' => $date->format('d/m'),
                'day' => $dayName,
                'omset' => (float) ($stat?->total_omset ?? 0),
                'count' => (int) ($stat?->total_transaksi ?? 0),
            ];
        }

        return view('dasbor.index', compact(
            'todayRevenue',
            'todayTransactionsCount',
            'inProcessCount',
            'readyForPickupCount',
            'totalRackSlots',
            'occupiedRackSlots',
            'availableRackSlots',
            'lowStockItems',
            'recentTransactions',
            'sevenDaysChart'
        ));
    }
}

