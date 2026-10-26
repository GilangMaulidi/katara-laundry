<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use App\Models\RackSlot;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
public function index(): View
    {
        $today = Carbon::today('Asia/Jakarta');

        $todayRevenue = Transaction::whereDate('tanggal_masuk', $today)
            ->where('status', '!=', 'dibatalkan')
            ->sum('jumlah_dibayar');

        $todayTransactionsCount = Transaction::whereDate('tanggal_masuk', $today)->count();

        $inProcessCount = Transaction::whereIn('status', [
            'menunggu_diproses',
            'sedang_dicuci',
            'sedang_dikeringkan',
            'sedang_disetrika',
            'sedang_dikemas',
        ])->count();

        $readyForPickupCount = Transaction::where('status', 'siap_diambil')->count();

        $totalRackSlots = RackSlot::count();
        $occupiedRackSlots = RackSlot::where('status', 'terisi')->count();
        $availableRackSlots = $totalRackSlots - $occupiedRackSlots;

        $lowStockItems = InventoryItem::whereColumn('stok', '<=', 'stok_minimal')->get();

        $recentTransactions = Transaction::with(['customer', 'perfume', 'rackSlot', 'items.service'])
            ->latest('tanggal_masuk')
            ->take(8)
            ->get();

        $sevenDaysChart = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today('Asia/Jakarta')->subDays($i);
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

            $omset = Transaction::whereDate('tanggal_masuk', $date)
                ->where('status', '!=', 'dibatalkan')
                ->sum('jumlah_dibayar');

            $count = Transaction::whereDate('tanggal_masuk', $date)->count();

            $sevenDaysChart[] = [
                'date' => $date->format('d/m'),
                'day' => $dayName,
                'omset' => (float) $omset,
                'count' => $count,
            ];
        }

        return view('dashboard.index', compact(
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
