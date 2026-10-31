@extends('layouts.aplikasi')

@section('title', 'Dasbor Operasional')
@section('page_title', 'Dasbor Operasional Gerai Dinoyo')

@section('content')
<div class="space-y-6">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Omset Masuk Hari Ini</p>
                <h3 class="text-2xl font-black text-slate-900 mt-1">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</h3>
                <p class="text-xs text-emerald-600 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <span>{{ $todayTransactionsCount }} Transaksi tercatat</span>
                </p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-rupiah-sign"></i>
            </div>
        </div>

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Transaksi Hari Ini</p>
                <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $todayTransactionsCount }} <span class="text-sm font-normal text-slate-400">Nota</span></h3>
                <a href="{{ route('pos.index') }}" class="text-xs text-brand-600 hover:text-brand-800 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-plus-circle"></i>
                    <span>Tambah Transaksi Kasir</span>
                </a>
            </div>
            <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-cash-register"></i>
            </div>
        </div>

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Dalam Pengerjaan</p>
                <h3 class="text-2xl font-black text-amber-600 mt-1">{{ $inProcessCount }} <span class="text-sm font-normal text-slate-400">Pesanan</span></h3>
                <p class="text-xs text-slate-500 font-medium mt-1">Cuci &bull; Kering &bull; Setrika</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-arrows-spin fa-spin text-lg" style="--fa-animation-duration: 4s;"></i>
            </div>
        </div>

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Siap Diambil di Rak</p>
                <h3 class="text-2xl font-black text-cyan-600 mt-1">{{ $readyForPickupCount }} <span class="text-sm font-normal text-slate-400">Kemasan</span></h3>
                <a href="{{ route('rak.index') }}" class="text-xs text-cyan-600 hover:text-cyan-800 font-semibold flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <span>Lihat Rak Fisik (45 Slot)</span>
                </a>
            </div>
            <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
    </div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Kapasitas Slot Rak Fisik</h3>
                    <p class="text-xs text-slate-500">Rak A, B, C Gerai Dinoyo (Total 45 Slot)</p>
                </div>
                <span class="px-2.5 py-1 text-xs font-bold rounded-lg {{ $availableRackSlots > 10 ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' }}">
                    {{ $availableRackSlots }} Slot Kosong
                </span>
            </div>

@php
                $percentage = $totalRackSlots > 0 ? round(($occupiedRackSlots / $totalRackSlots) * 100) : 0;
            @endphp
            <div class="space-y-2 mb-5">
                <div class="flex justify-between text-xs font-semibold">
                    <span class="text-slate-600">Keterisian Rak</span>
                    <span class="text-slate-900">{{ $occupiedRackSlots }} / {{ $totalRackSlots }} Slot ({{ $percentage }}%)</span>
                </div>
                <div class="w-full h-3 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full rounded-full transition-all duration-500 {{ $percentage > 80 ? 'bg-rose-500' : ($percentage > 50 ? 'bg-amber-500' : 'bg-brand-500') }}" style="width: {{ $percentage }}%"></div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2.5 text-center text-xs">
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                    <p class="text-slate-400 text-[10px] font-bold uppercase">Rak A (Kiri)</p>
                    <p class="text-sm font-bold text-slate-800 mt-0.5">15 Slot</p>
                </div>
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                    <p class="text-slate-400 text-[10px] font-bold uppercase">Rak B (Tengah)</p>
                    <p class="text-sm font-bold text-slate-800 mt-0.5">15 Slot</p>
                </div>
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                    <p class="text-slate-400 text-[10px] font-bold uppercase">Rak C (Kanan)</p>
                    <p class="text-sm font-bold text-slate-800 mt-0.5">15 Slot</p>
                </div>
            </div>

            <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs text-slate-500">Kelola tata letak pakaian</span>
                <a href="{{ route('rak.index') }}" class="text-xs font-bold text-brand-600 hover:text-brand-700 flex items-center gap-1">
                    <span>Buka Peta Rak</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>

<div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Tren Omset 7 Hari Terakhir</h3>
                    <p class="text-xs text-slate-500">Pendapatan harian yang telah terbayar (WIB)</p>
                </div>
                <a href="{{ route('reports.index') }}" class="text-xs text-brand-600 hover:text-brand-700 font-semibold">
                    Laporan Lengkap &rarr;
                </a>
            </div>

@php
                $maxOmset = max(array_column($sevenDaysChart, 'omset'));
                $maxOmset = $maxOmset > 0 ? $maxOmset : 100000;
            @endphp
            <div class="h-44 flex items-end justify-between gap-3 pt-4 border-b border-slate-100">
                @foreach($sevenDaysChart as $day)
                    @php
                        $barHeight = round(($day['omset'] / $maxOmset) * 100);
                        $barHeight = max(8, min(100, $barHeight));
                    @endphp
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <span class="text-[10px] font-semibold text-slate-500 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                            Rp {{ number_format($day['omset'] / 1000, 0) }}k
                        </span>
                        <div class="w-full max-w-[40px] bg-brand-100 group-hover:bg-brand-500 rounded-t-lg transition-all" style="height: {{ $barHeight }}%;"></div>
                        <span class="text-xs font-bold text-slate-700 mt-1">{{ $day['day'] }}</span>
                        <span class="text-[10px] text-slate-400">{{ $day['date'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 flex items-center justify-between text-xs text-slate-500">
                <span>Rata-rata order: ~{{ round(array_sum(array_column($sevenDaysChart, 'count')) / 7, 1) }} nota/hari</span>
                <span class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-sm bg-brand-500 inline-block"></span>
                    <span>Volume Transaksi Kasir Dinoyo</span>
                </span>
            </div>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
                <h3 class="font-bold text-slate-900 text-sm">Transaksi Terkini Masuk</h3>
                <p class="text-xs text-slate-500">Daftar transaksi nota terbaru yang tercatat di kasir</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('pos.index') }}" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-brand-600 text-white text-xs font-bold hover:bg-brand-700 shadow-xs transition-colors">
                    <i class="fa-solid fa-plus"></i>
                    <span>Transaksi Baru (F2)</span>
                </a>
                <a href="{{ route('transactions.index') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-100 text-slate-700 hover:bg-slate-200 text-xs font-semibold transition-colors">
                    <span>Lihat Semua</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">No. Nota</th>
                        <th class="py-3 px-4">Pelanggan</th>
                        <th class="py-3 px-4">Layanan & Bobot</th>
                        <th class="py-3 px-4">Parfum</th>
                        <th class="py-3 px-4">Tagihan</th>
                        <th class="py-3 px-4">Bayar</th>
                        <th class="py-3 px-4">Status Cucian</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($recentTransactions as $tx)
                        <tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3.5 px-4">
                                <a href="{{ route('transactions.show', $tx->id) }}" class="font-mono font-bold text-brand-600 hover:underline">
                                    {{ $tx->invoice_number }}
                                </a>
                                <p class="text-[10px] text-slate-400 mt-0.5">{{ $tx->order_date->format('d/m/Y H:i') }} WIB</p>
                            </td>

<td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block">{{ $tx->customer->name }}</span>
                                <span class="text-[11px] text-slate-500 flex items-center gap-1 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-emerald-600 text-xs"></i>
                                    {{ $tx->customer->phone_number }}
                                </span>
                            </td>

<td class="py-3.5 px-4">
                                @foreach($tx->items as $item)
                                    <span class="block text-slate-700 font-medium">
                                        {{ $item->service->name }} ({{ (float) $item->quantity }} {{ $item->service->unit }})
                                    </span>
                                @endforeach
                            </td>

<td class="py-3.5 px-4">
                                @if($tx->perfume)
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-purple-50 text-purple-700 border border-purple-200 text-[11px] font-medium">
                                        <i class="fa-solid fa-spray-can text-[10px]"></i>
                                        {{ $tx->perfume->name }}
                                    </span>
                                @else
                                    <span class="text-slate-400 italic text-[11px]">Bawaan Standar</span>
                                @endif
                            </td>

<td class="py-3.5 px-4 font-bold text-slate-900">
                                Rp {{ number_format($tx->total_price, 0, ',', '.') }}
                            </td>

<td class="py-3.5 px-4">
                                @if($tx->payment_status === 'lunas')
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 font-bold text-[10px]">
                                        <i class="fa-solid fa-check text-[9px]"></i> Lunas
                                    </span>
                                @elseif($tx->payment_status === 'uang_muka')
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 border border-amber-200 font-bold text-[10px]">
                                        DP (Sisa Rp {{ number_format($tx->remaining_balance, 0, ',', '.') }})
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 border border-rose-200 font-bold text-[10px]">
                                        Belum Bayar
                                    </span>
                                @endif
                            </td>

<td class="py-3.5 px-4">
                                @php
                                    $badgeStyles = [
                                        'menunggu_diproses' => 'bg-amber-50 text-amber-700 border-amber-200',
                                        'sedang_dicuci' => 'bg-sky-50 text-sky-700 border-sky-200',
                                        'sedang_dikeringkan' => 'bg-orange-50 text-orange-700 border-orange-200',
                                        'sedang_disetrika' => 'bg-purple-50 text-purple-700 border-purple-200',
                                        'sedang_dikemas' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
                                        'siap_diambil' => 'bg-emerald-50 text-emerald-700 border-emerald-200 font-bold',
                                        'selesai' => 'bg-slate-100 text-slate-600 border-slate-200',
                                        'dibatalkan' => 'bg-rose-50 text-rose-700 border-rose-200',
                                    ];
                                    $style = $badgeStyles[$tx->status] ?? 'bg-slate-100 text-slate-700 border-slate-200';
                                @endphp
                                <span class="inline-block px-2.5 py-1 rounded-lg border text-[11px] font-semibold {{ $style }}">
                                    {{ $tx->status_label }}
                                </span>
                                @if($tx->rackSlot)
                                    <span class="block text-[10px] text-brand-600 font-bold mt-0.5">
                                        <i class="fa-solid fa-cubes-stacked"></i> Rak {{ $tx->rackSlot->code }}
                                    </span>
                                @endif
                            </td>

<td class="py-3.5 px-4 text-center">
                                <div class="inline-flex items-center gap-1.5">
                                    <a href="{{ route('transactions.receipt', $tx->id) }}" target="_blank" title="Cetak Nota Kasir 58mm" class="p-1.5 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-600 text-slate-600 transition-colors">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                    <a href="{{ route('transactions.show', $tx->id) }}" title="Rincian Transaksi" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition-colors">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-10 text-slate-400">
                                <i class="fa-solid fa-receipt text-3xl mb-2 block"></i>
                                <span>Belum ada transaksi hari ini. Silakan buat transaksi pertama dari menu Kasir POS.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
