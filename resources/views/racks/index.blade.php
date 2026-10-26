@extends('layouts.app')

@section('title', 'Peta 45 Slot Rak Fisik')
@section('page_title', 'Manajemen Slot Rak Fisik Gerai Dinoyo')

@section('content')
<div class="space-y-6">

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h3 class="text-base font-bold text-slate-900">Tata Letak Fisik Rak Penyimpanan (45 Slot)</h3>
            <p class="text-xs text-slate-500 mt-0.5">
                Kapasitas gerai Dinoyo: 3 Unit Rak Logam (Rak A, B, C) dengan sistem penomoran barcode A-01 s/d C-15
            </p>
        </div>

        <div class="flex items-center gap-3">
            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-bold">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                <span>{{ $availableCount }} Slot Tersedia</span>
            </div>
            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-cyan-50 text-cyan-800 border border-cyan-200 text-xs font-bold">
                <span class="w-2.5 h-2.5 rounded-full bg-cyan-600"></span>
                <span>{{ $occupiedCount }} Slot Terisi</span>
            </div>
        </div>
    </div>

@if($unassignedTransactions->count() > 0)
        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 text-xs flex flex-col md:flex-row md:items-center justify-between gap-3 shadow-xs">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation text-amber-500 text-lg"></i>
                <div>
                    <strong class="font-bold block">Terdapat {{ $unassignedTransactions->count() }} Cucian Siap Ambil Belum Diberi Slot Rak!</strong>
                    <span class="text-amber-700">Pakaian telah selesai dikemas, silakan tempatkan pada salah satu slot rak kosong di bawah ini.</span>
                </div>
            </div>
            <div class="flex items-center gap-2">
                @foreach($unassignedTransactions as $uTx)
                    <span class="px-2.5 py-1 rounded-lg bg-white border border-amber-300 font-mono font-bold text-slate-800">
                        {{ $uTx->invoice_number }} ({{ $uTx->customer->name }})
                    </span>
                @endforeach
            </div>
        </div>
    @endif

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-4 bg-slate-900 text-white flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-brand-500 text-white font-black flex items-center justify-center text-xs">A</span>
                    <div>
                        <h4 class="font-bold text-xs">RAK A (SAYAP KIRI)</h4>
                        <p class="text-[10px] text-slate-400">15 Slot Penyimpanan Pakaian</p>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-slate-400">
                    {{ $rackA->where('status', 'terisi')->count() }}/15 Terisi
                </span>
            </div>

            <div class="p-4 grid grid-cols-3 gap-2.5">
                @foreach($rackA as $slot)
                    @include('racks._slot_card', ['slot' => $slot])
                @endforeach
            </div>
        </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-4 bg-slate-900 text-white flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-brand-500 text-white font-black flex items-center justify-center text-xs">B</span>
                    <div>
                        <h4 class="font-bold text-xs">RAK B (BAGIAN TENGAH)</h4>
                        <p class="text-[10px] text-slate-400">15 Slot Penyimpanan Pakaian</p>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-slate-400">
                    {{ $rackB->where('status', 'terisi')->count() }}/15 Terisi
                </span>
            </div>

            <div class="p-4 grid grid-cols-3 gap-2.5">
                @foreach($rackB as $slot)
                    @include('racks._slot_card', ['slot' => $slot])
                @endforeach
            </div>
        </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-4 bg-slate-900 text-white flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-brand-500 text-white font-black flex items-center justify-center text-xs">C</span>
                    <div>
                        <h4 class="font-bold text-xs">RAK C (SAYAP KANAN)</h4>
                        <p class="text-[10px] text-slate-400">15 Slot Penyimpanan Pakaian</p>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-slate-400">
                    {{ $rackC->where('status', 'terisi')->count() }}/15 Terisi
                </span>
            </div>

            <div class="p-4 grid grid-cols-3 gap-2.5">
                @foreach($rackC as $slot)
                    @include('racks._slot_card', ['slot' => $slot])
                @endforeach
            </div>
        </div>

    </div>

</div>

<div id="assign-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div>
                <h3 class="font-bold text-sm text-slate-900">Tempatkan Cucian ke Rak</h3>
                <p id="assign-slot-code" class="text-xs font-bold text-cyan-700 font-mono mt-0.5"></p>
            </div>
            <button type="button" onclick="closeAssignModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form action="{{ route('racks.assign') }}" method="POST" class="mt-4 space-y-4 text-xs">
            @csrf
            <input type="hidden" name="rack_slot_id" id="assign_slot_id">

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1.5">Pilih Pesanan Siap Ambil</label>
                <select name="transaction_id" required class="w-full py-2.5 px-3 bg-slate-50 border border-slate-300 rounded-xl font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    <option value="">-- Pilih Nota Transaksi --</option>
                    @foreach($unassignedTransactions as $tx)
                        <option value="{{ $tx->id }}">{{ $tx->invoice_number }} &bull; {{ $tx->customer->name }}</option>
                    @endforeach
                </select>
                @if($unassignedTransactions->isEmpty())
                    <p class="text-[11px] text-slate-400 mt-1.5 italic">Tidak ada cucian siap ambil yang mengantre rak saat ini.</p>
                @endif
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeAssignModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" {{ $unassignedTransactions->isEmpty() ? 'disabled' : '' }} class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 disabled:bg-slate-300 text-white font-bold shadow-xs">
                    Tempatkan di Rak
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openAssignModal(slotId, slotCode) {
        document.getElementById('assign_slot_id').value = slotId;
        document.getElementById('assign-slot-code').textContent = 'Slot Rak: ' + slotCode;
        document.getElementById('assign-modal').classList.remove('hidden');
    }

    function closeAssignModal() {
        document.getElementById('assign-modal').classList.add('hidden');
    }
</script>
@endpush
