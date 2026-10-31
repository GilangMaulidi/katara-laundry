@php
    $tx = $slot->transactions->first();
@endphp

@if($slot->status === 'terisi' && $tx)
<div class="p-2.5 rounded-xl bg-cyan-50 border border-cyan-300 flex flex-col justify-between h-28 text-left transition-all hover:shadow-sm">
        <div>
            <div class="flex items-center justify-between">
                <span class="font-mono font-black text-xs text-cyan-950">{{ $slot->code }}</span>
                <span class="w-2 h-2 rounded-full bg-cyan-600"></span>
            </div>
            <p class="font-bold text-slate-900 text-[11px] truncate mt-1">{{ $tx->customer->name }}</p>
            <p class="font-mono text-[9px] text-slate-500 truncate">{{ $tx->invoice_number }}</p>
        </div>

        <div class="pt-1 border-t border-cyan-200/60 flex items-center justify-between">
            <a href="{{ route('transactions.show', $tx->id) }}" title="Lihat Transaksi" class="text-[10px] text-brand-700 hover:underline">
                Rincian
            </a>
            <form action="{{ route('rak.release', $slot->id) }}" method="POST" onsubmit="return confirm('Keluarkan cucian dan serahkan ke pelanggan?');">
                @csrf
                <button type="submit" title="Keluarkan & Selesaikan" class="px-1.5 py-0.5 rounded bg-cyan-700 hover:bg-cyan-800 text-white font-bold text-[9px]">
                    Ambil
                </button>
            </form>
        </div>
    </div>
@else
<button type="button" onclick="openAssignModal({{ $slot->id }}, '{{ $slot->code }}')" class="p-2.5 rounded-xl border border-dashed border-slate-300 hover:border-emerald-500 hover:bg-emerald-50/50 flex flex-col justify-between h-28 text-left transition-all group">
        <div class="flex items-center justify-between w-full">
            <span class="font-mono font-bold text-xs text-slate-400 group-hover:text-emerald-700">{{ $slot->code }}</span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-300 group-hover:bg-emerald-500"></span>
        </div>
        <div class="text-center w-full">
            <i class="fa-solid fa-plus text-slate-300 group-hover:text-emerald-500 text-xs mb-0.5"></i>
            <span class="block text-[10px] text-slate-400 group-hover:text-emerald-700 font-medium">Kosong</span>
        </div>
        <span class="text-[9px] text-slate-300 group-hover:text-emerald-600 block text-center w-full">Klik isi</span>
    </button>
@endif
