<?php

namespace App\Http\Controllers;

use App\Models\SlotRak;
use App\Models\Transaksi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RakController extends Controller
{
    public function index(): View
    {
        $rackSlots = SlotRak::with(['transaksi' => function ($q) {
            $q->where('status', 'siap_diambil')->with('pelanggan');
        }])->orderBy('kode')->get();

        $rackA = $rackSlots->filter(fn ($s) => ($s->kode_rak ?? $s->rack_code) === 'A');
        $rackB = $rackSlots->filter(fn ($s) => ($s->kode_rak ?? $s->rack_code) === 'B');
        $rackC = $rackSlots->filter(fn ($s) => ($s->kode_rak ?? $s->rack_code) === 'C');

        $occupiedCount = $rackSlots->where('status', 'terisi')->count();
        $availableCount = $rackSlots->where('status', 'tersedia')->count();

        $unassignedTransactions = Transaksi::where('status', 'siap_diambil')
            ->whereNull('slot_rak_id')
            ->with('pelanggan')
            ->get();

        return view('rak.index', compact(
            'rackA',
            'rackB',
            'rackC',
            'occupiedCount',
            'availableCount',
            'unassignedTransactions'
        ));
    }

    public function assign(Request $request): RedirectResponse
    {
        $trxId = $request->input('transaksi_id', $request->input('transaction_id'));
        $slotId = $request->input('slot_rak_id', $request->input('rack_slot_id'));

        $request->merge([
            'transaksi_id' => $trxId,
            'slot_rak_id' => $slotId,
        ]);

        $validated = $request->validate([
            'transaksi_id' => ['required', 'exists:transaksi,id'],
            'slot_rak_id' => ['required', 'exists:slot_rak,id'],
        ]);

        $slot = SlotRak::findOrFail($validated['slot_rak_id']);
        $transaction = Transaksi::findOrFail($validated['transaksi_id']);

        if ($slot->status === 'terisi') {
            return back()->with('error', "Slot rak {$slot->kode} saat ini sudah terisi cucian lain.");
        }

        if ($transaction->slot_rak_id) {
            SlotRak::where('id', $transaction->slot_rak_id)->update(['status' => 'tersedia']);
        }

        $transaction->slot_rak_id = $slot->id;
        $transaction->status = 'siap_diambil';
        $transaction->save();

        $slot->status = 'terisi';
        $slot->save();

        return back()->with('success', "Cucian {$transaction->nomor_nota} berhasil ditempatkan pada Slot {$slot->kode}.");
    }

    public function release(SlotRak $rackSlot): RedirectResponse
    {
        Transaksi::where('slot_rak_id', $rackSlot->id)
            ->where('status', 'siap_diambil')
            ->update([
                'status' => 'selesai',
                'tanggal_ambil' => now('Asia/Jakarta'),
            ]);

        $rackSlot->status = 'tersedia';
        $rackSlot->save();

        return back()->with('success', "Slot rak {$rackSlot->kode} berhasil dikosongkan.");
    }
}

