@extends('layouts.aplikasi')

@section('title', 'Laporan Keuangan & Operasional')
@section('page_title', 'Laporan Finansial & Rekapitulasi Kas')

@section('content')
<div class="space-y-6">

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-4">
        <form action="{{ route('reports.index') }}" method="GET" class="flex flex-wrap items-center gap-3 text-xs">
            <div class="flex items-center gap-2">
                <label class="font-bold text-slate-700">Dari Tanggal:</label>
                <input type="date" name="start_date" value="{{ $startDate }}" class="px-3 py-1.5 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none">
            </div>

            <div class="flex items-center gap-2">
                <label class="font-bold text-slate-700">Sampai:</label>
                <input type="date" name="end_date" value="{{ $endDate }}" class="px-3 py-1.5 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none">
            </div>

            <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs transition-colors flex items-center gap-1.5">
                <i class="fa-solid fa-filter"></i>
                <span>Tampilkan Laporan</span>
            </button>
        </form>

        <button type="button" onclick="window.print()" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow-xs transition-colors">
            <i class="fa-solid fa-print"></i>
            <span>Cetak Rekap Kas</span>
        </button>
    </div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Omset Bersih (Telah Dibayar)</p>
            <h3 class="text-2xl font-black text-emerald-600 mt-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h3>
            <p class="text-[11px] text-slate-400 mt-1">Periode: {{ date('d/m/Y', strtotime($startDate)) }} - {{ date('d/m/Y', strtotime($endDate)) }}</p>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Volume Transaksi</p>
            <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $totalOrders }} <span class="text-sm font-normal text-slate-400">Nota</span></h3>
            <p class="text-[11px] text-slate-400 mt-1">Seluruh pesanan aktif yang tercatat</p>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <p class="text-xs font-bold uppercase tracking-wider text-slate-500">Sisa Piutang Belum Dilunasi</p>
            <h3 class="text-2xl font-black text-rose-600 mt-1">Rp {{ number_format($totalUnpaid, 0, ',', '.') }}</h3>
            <p class="text-[11px] text-slate-400 mt-1">Akan dilunasi saat pelanggan mengambil cucian</p>
        </div>
    </div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <h4 class="font-bold text-slate-900 text-sm mb-3">Pendapatan per Metode Pembayaran</h4>
            <div class="space-y-2.5 text-xs">
                @forelse($paymentMethods as $pm)
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="w-8 h-8 rounded-lg bg-brand-100 text-brand-700 font-bold flex items-center justify-center text-xs uppercase">
                                {{ substr($pm->payment_method, 0, 1) }}
                            </span>
                            <div>
                                <strong class="font-bold text-slate-800 uppercase">{{ $pm->payment_method }}</strong>
                                <span class="text-[10px] text-slate-400 block">{{ $pm->count }} Kali Transaksi</span>
                            </div>
                        </div>
                        <span class="font-black text-slate-900 text-sm">
                            Rp {{ number_format($pm->total, 0, ',', '.') }}
                        </span>
                    </div>
                @empty
                    <p class="text-slate-400 italic text-center py-4">Belum ada data pembayaran pada periode ini.</p>
                @endforelse
            </div>
        </div>

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <h4 class="font-bold text-slate-900 text-sm mb-3">Penjualan per Katalog Layanan</h4>
            <div class="space-y-2.5 text-xs max-h-60 overflow-y-auto pr-1">
                @forelse($serviceBreakdown as $sb)
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 flex items-center justify-between">
                        <div>
                            <strong class="font-bold text-slate-800 block">{{ $sb->service ? $sb->service->name : 'Layanan' }}</strong>
                            <span class="text-[10px] text-slate-500">Volume: {{ (float) $sb->total_qty }} {{ $sb->service ? $sb->service->unit : '' }}</span>
                        </div>
                        <span class="font-black text-slate-900 text-sm">
                            Rp {{ number_format($sb->total_amount, 0, ',', '.') }}
                        </span>
                    </div>
                @empty
                    <p class="text-slate-400 italic text-center py-4">Belum ada rincian layanan pada periode ini.</p>
                @endforelse
            </div>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-4 bg-slate-50 border-b border-slate-200 flex items-center justify-between">
            <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Rincian Nota Transaksi Masuk</h4>
            <span class="text-xs text-slate-500">{{ $transactions->total() }} Transaksi Ditemukan</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Tanggal & Nota</th>
                        <th class="py-3 px-4">Pelanggan</th>
                        <th class="py-3 px-4">Kasir</th>
                        <th class="py-3 px-4 text-right">Total Tagihan</th>
                        <th class="py-3 px-4 text-right">Nominal Masuk</th>
                        <th class="py-3 px-4 text-center">Metode</th>
                        <th class="py-3 px-4 text-center">Status Bayar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($transactions as $tx)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3 px-4">
                                <a href="{{ route('transactions.show', $tx->id) }}" class="font-mono font-bold text-brand-600 hover:underline">
                                    {{ $tx->invoice_number }}
                                </a>
                                <span class="block text-[10px] text-slate-400 mt-0.5">{{ $tx->order_date->format('d/m/Y H:i') }}</span>
                            </td>
                            <td class="py-3 px-4 font-bold text-slate-800">
                                {{ $tx->customer->name }}
                            </td>
                            <td class="py-3 px-4 text-slate-600">
                                {{ $tx->user ? $tx->user->name : 'Kasir' }}
                            </td>
                            <td class="py-3 px-4 text-right font-bold text-slate-900">
                                Rp {{ number_format($tx->total_price, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 text-right font-bold text-emerald-700">
                                Rp {{ number_format($tx->amount_paid, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 text-center uppercase font-bold text-[10px] text-slate-600">
                                {{ $tx->payment_method }}
                            </td>
                            <td class="py-3 px-4 text-center">
                                @if($tx->payment_status === 'lunas')
                                    <span class="inline-block px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">
                                        Lunas
                                    </span>
                                @elseif($tx->payment_status === 'uang_muka')
                                    <span class="inline-block px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 font-bold text-[10px]">
                                        DP
                                    </span>
                                @else
                                    <span class="inline-block px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 font-bold text-[10px]">
                                        Belum Bayar
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-slate-400">
                                Tidak ada transaksi pada rentang tanggal ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($transactions->hasPages())
            <div class="p-4 border-t border-slate-200">
                {{ $transactions->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
