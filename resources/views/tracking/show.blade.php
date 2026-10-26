@extends('layouts.public')

@section('title', 'Status Cucian Nota #' . $transaction->invoice_number)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 py-10 space-y-6">

<div class="flex items-center justify-between gap-3">
        <a href="{{ route('tracking.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-300 hover:text-white bg-[#0b1d3a] px-3.5 py-2 rounded-xl border border-sky-800/60 shadow-xs transition-colors">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Lacak Nota Lain</span>
        </a>

        <div class="flex items-center gap-2">
            <span class="text-xs text-slate-400">Pembaruan Terakhir:</span>
            <span class="font-mono text-xs font-bold text-sky-300 bg-[#0b1d3a] px-2.5 py-1 rounded-lg border border-sky-800/60">
                {{ now('Asia/Jakarta')->format('H:i:s') }} WIB
            </span>
        </div>
    </div>

<div class="bg-[#0b1d3a] rounded-3xl border border-sky-900/60 shadow-xl p-6 sm:p-8 space-y-8 text-white">
        
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-sky-900/60 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Nota Transaksi</span>
                <h2 class="text-2xl sm:text-3xl font-black font-mono text-white mt-0.5">{{ $transaction->invoice_number }}</h2>
                <p class="text-xs text-slate-300 mt-1">
                    Atas Nama: <strong class="text-white">{{ $transaction->customer->name }}</strong> &bull; Masuk: {{ $transaction->order_date->translatedFormat('d M Y, H:i') }} WIB
                </p>
            </div>

<div class="sm:text-right">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Status Pengerjaan Saat Ini</span>
                <span class="inline-block px-3.5 py-1.5 rounded-xl border text-xs sm:text-sm font-black {{ $transaction->status === 'siap_diambil' ? 'bg-emerald-950 text-emerald-300 border-emerald-800/60 ring-2 ring-emerald-400/20' : 'bg-sky-950 text-sky-300 border-sky-800/60' }}">
                    {{ $transaction->status_label }}
                </span>
                @if($transaction->rackSlot)
                    <div class="mt-2 text-xs font-bold text-sky-300 bg-[#071326] border border-sky-800/60 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <i class="fa-solid fa-cubes-stacked text-sky-400"></i>
                        <span>Posisi Rak: <strong class="text-white">{{ $transaction->rackSlot->code }}</strong></span>
                    </div>
                @endif
            </div>
        </div>

<div>
            <h3 class="font-bold text-white text-sm mb-6">Tahapan Pengerjaan Pakaian:</h3>

            @php
                $steps = [
                    'menunggu_diproses' => ['icon' => 'fa-clipboard-check', 'title' => 'Nota Masuk', 'desc' => 'Pakaian ditimbang & disortir'],
                    'sedang_dicuci' => ['icon' => 'fa-soap', 'title' => 'Pencucian', 'desc' => 'Mesin front loading higienis'],
                    'sedang_dikeringkan' => ['icon' => 'fa-wind', 'title' => 'Pengeringan', 'desc' => 'Gas dryer suhu optimal'],
                    'sedang_disetrika' => ['icon' => 'fa-shirt', 'title' => 'Setrika Uap', 'desc' => 'Boiler uap rapi & halus'],
                    'sedang_dikemas' => ['icon' => 'fa-boxes-packing', 'title' => 'Pengemasan', 'desc' => 'Plastik jinjing & parfum'],
                    'siap_diambil' => ['icon' => 'fa-circle-check', 'title' => 'Siap Diambil', 'desc' => 'Tertata di slot rak gerai'],
                ];

                $statusOrder = [
                    'menunggu_diproses' => 1,
                    'sedang_dicuci' => 2,
                    'sedang_dikeringkan' => 3,
                    'sedang_disetrika' => 4,
                    'sedang_dikemas' => 5,
                    'siap_diambil' => 6,
                    'selesai' => 7,
                ];

                $currentStepNum = $statusOrder[$transaction->status] ?? 1;
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                @php $stepIndex = 1; @endphp
                @foreach($steps as $key => $step)
                    @php
                        $isPassed = $currentStepNum >= $stepIndex;
                        $isCurrent = ($currentStepNum === $stepIndex) || ($transaction->status === 'selesai' && $stepIndex === 6);
                        $stepIndex++;
                    @endphp
                    <div class="p-3.5 rounded-2xl border transition-all text-center flex flex-col items-center justify-between {{ $isCurrent ? 'bg-sky-950/60 border-sky-400 shadow-md ring-1 ring-sky-400/30' : ($isPassed ? 'bg-[#071326] border-sky-800/60 text-slate-200' : 'bg-[#071326]/40 border-sky-950 text-slate-500 opacity-60') }}">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold mb-2 {{ $isCurrent ? 'bg-brand-600 text-white shadow-xs' : ($isPassed ? 'bg-emerald-600 text-white' : 'bg-[#071326] text-slate-500 border border-sky-900/40') }}">
                            @if($isPassed && !$isCurrent)
                                <i class="fa-solid fa-check"></i>
                            @else
                                <i class="fa-solid {{ $step['icon'] }}"></i>
                            @endif
                        </div>
                        <h4 class="font-bold text-xs {{ $isCurrent ? 'text-sky-300' : ($isPassed ? 'text-white' : 'text-slate-400') }}">{{ $step['title'] }}</h4>
                        <p class="text-[10px] text-slate-400 mt-0.5 leading-tight">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-sky-900/60 text-xs">
<div class="space-y-3">
                <h4 class="font-bold text-white text-sm">Rincian Layanan Cucian</h4>
                <div class="bg-[#071326] rounded-2xl p-4 border border-sky-900/60 space-y-2.5">
                    @foreach($transaction->items as $item)
                        <div class="flex justify-between items-center pb-2 border-b border-sky-900/40 last:border-none last:pb-0">
                            <div>
                                <span class="font-bold text-white block">{{ $item->service->name }}</span>
                                <span class="text-[11px] text-slate-400 font-medium">
                                    {{ (float) $item->quantity }} {{ $item->service->unit }} @ Rp {{ number_format($item->unit_price, 0, ',', '.') }}
                                </span>
                            </div>
                            <span class="font-black text-sky-300">
                                Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                            </span>
                        </div>
                    @endforeach

                    @if($transaction->perfume)
                        <div class="pt-2 border-t border-sky-900/60 flex items-center justify-between text-[11px]">
                            <span class="text-slate-400 font-medium">Aroma Parfum:</span>
                            <strong class="text-purple-300 bg-purple-950/80 px-2.5 py-0.5 rounded border border-purple-800/60">
                                <i class="fa-solid fa-spray-can text-[10px] mr-1 text-purple-400"></i>
                                {{ $transaction->perfume->name }}
                            </strong>
                        </div>
                    @endif
                </div>
            </div>

<div class="space-y-3">
                <h4 class="font-bold text-white text-sm">Rincian Pembayaran & Jadwal</h4>
                <div class="bg-[#071326] rounded-2xl p-4 border border-sky-900/60 space-y-2">
                    <div class="flex justify-between">
                        <span class="text-slate-400">Total Tagihan:</span>
                        <strong class="text-white font-bold">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</strong>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Telah Dibayar:</span>
                        <span class="text-emerald-400 font-semibold">Rp {{ number_format($transaction->amount_paid, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between pt-1 border-t border-sky-900/60">
                        <span class="font-bold text-slate-300">Status Pembayaran:</span>
                        @if($transaction->payment_status === 'lunas')
                            <span class="font-bold text-emerald-300 bg-emerald-950 border border-emerald-800/60 px-2 py-0.5 rounded">LUNAS ✅</span>
                        @else
                            <span class="font-bold text-rose-300 bg-rose-950 border border-rose-800/60 px-2 py-0.5 rounded">
                                Sisa Bayar: Rp {{ number_format($transaction->remaining_balance, 0, ',', '.') }}
                            </span>
                        @endif
                    </div>
                    <div class="flex justify-between pt-2 border-t border-sky-900/60 text-slate-400">
                        <span>Estimasi Pakaian Selesai:</span>
                        <strong class="text-white">
                            {{ $transaction->estimated_completion_date ? $transaction->estimated_completion_date->translatedFormat('l, d M Y - H:i') . ' WIB' : '-' }}
                        </strong>
                    </div>
                </div>
            </div>
        </div>

<div class="p-4 rounded-2xl bg-[#071326] border border-sky-900/60 text-white flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-lg shrink-0 shadow-sm">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                    <h5 class="font-bold text-sm text-white">Butuh Bantuan Mengenai Cucian Ini?</h5>
                    <p class="text-slate-300 text-xs">Hubungi kasir gerai Dinoyo langsung dengan melampirkan nomor nota ini.</p>
                </div>
            </div>
            <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20konfirmasi%20mengenai%20cucian%20saya%20dengan%20no%20nota%20*{{ $transaction->invoice_number }}*" target="_blank" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-xs transition-colors flex items-center justify-center gap-2 shrink-0">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Hubungi Kasir Dinoyo</span>
            </a>
        </div>

    </div>

</div>
@endsection
