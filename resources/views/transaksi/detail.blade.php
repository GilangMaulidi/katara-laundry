@extends('layouts.aplikasi')

@section('title', 'Rincian Nota #' . $transaction->invoice_number)
@section('page_title', 'Rincian Transaksi #' . $transaction->invoice_number)

@section('content')
<div class="max-w-5xl mx-auto space-y-6">

<div class="flex items-center justify-between gap-3">
        <a href="{{ route('transactions.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-600 hover:text-slate-900 bg-white px-3.5 py-2 rounded-xl border border-slate-200 shadow-xs">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Daftar Transaksi</span>
        </a>

        <div class="flex items-center gap-2">
            <a href="{{ route('transactions.receipt', $transaction->id) }}" target="_blank" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold shadow-xs transition-colors">
                <i class="fa-solid fa-print"></i>
                <span>Cetak Nota Thermal</span>
            </a>
            <a href="{{ route('tracking.show', $transaction->invoice_number) }}" target="_blank" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-xs transition-colors">
                <i class="fa-solid fa-eye"></i>
                <span>Tinjau Lacak Publik</span>
            </a>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs p-6 space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-5 border-b border-slate-100 gap-4">
            <div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Nota Transaksi</span>
                <h2 class="text-2xl font-black font-mono text-slate-900 mt-0.5">{{ $transaction->invoice_number }}</h2>
                <p class="text-xs text-slate-500 mt-1">
                    Dibuat pada {{ $transaction->order_date->translatedFormat('l, d F Y - H:i') }} WIB oleh <strong>{{ $transaction->user ? $transaction->user->name : 'Kasir' }}</strong>
                </p>
            </div>

            <div class="flex items-center gap-3">
<div class="text-right">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Status Pengerjaan</span>
                    <span class="px-3 py-1.5 rounded-xl border text-xs font-bold {{ $transaction->status === 'siap_diambil' ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-brand-50 text-brand-700 border-brand-200' }}">
                        {{ $transaction->status_label }}
                    </span>
                </div>
            </div>
        </div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs">
<div class="p-4 bg-slate-50 rounded-xl border border-slate-200/80 space-y-2">
                <h4 class="font-bold text-slate-700 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-user text-brand-600"></i>
                    <span>Informasi Pelanggan</span>
                </h4>
                <div>
                    <p class="font-bold text-slate-900 text-sm">{{ $transaction->customer->name }}</p>
                    <p class="text-slate-600 mt-0.5 flex items-center gap-1">
                        <i class="fa-brands fa-whatsapp text-emerald-600"></i>
                        <a href="https://wa.me/{{ $transaction->customer->formatted_phone }}" target="_blank" class="hover:underline">
                            {{ $transaction->customer->phone_number }}
                        </a>
                    </p>
                    @if($transaction->customer->address)
                        <p class="text-slate-500 mt-1 text-[11px] leading-relaxed">{{ $transaction->customer->address }}</p>
                    @endif
                </div>
            </div>

<div class="p-4 bg-slate-50 rounded-xl border border-slate-200/80 space-y-2">
                <h4 class="font-bold text-slate-700 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-shirt text-cyan-600"></i>
                    <span>Finishing & Lokasi Rak</span>
                </h4>
                <div class="space-y-1">
                    <div class="flex justify-between">
                        <span class="text-slate-500">Aroma Parfum:</span>
                        <strong class="text-slate-900">{{ $transaction->perfume ? $transaction->perfume->name : 'Standar' }}</strong>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-500">Slot Rak Fisik:</span>
                        @if($transaction->rackSlot)
                            <strong class="text-cyan-700 bg-cyan-100/60 px-2 py-0.5 rounded font-bold">Rak {{ $transaction->rackSlot->code }}</strong>
                        @else
                            <span class="text-slate-400">Belum Ditentukan</span>
                        @endif
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-500">Estimasi Selesai:</span>
                        <span class="text-slate-800 font-semibold">{{ $transaction->estimated_completion_date ? $transaction->estimated_completion_date->format('d/m/Y H:i') : '-' }}</span>
                    </div>
                </div>
            </div>

<div class="p-4 bg-slate-50 rounded-xl border border-slate-200/80 space-y-2">
                <h4 class="font-bold text-slate-700 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-wallet text-emerald-600"></i>
                    <span>Status Pembayaran</span>
                </h4>
                <div class="space-y-1">
                    <div class="flex justify-between">
                        <span class="text-slate-500">Total Tagihan:</span>
                        <strong class="text-slate-900 font-bold">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</strong>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-500">Telah Dibayar:</span>
                        <span class="text-emerald-700 font-semibold">Rp {{ number_format($transaction->amount_paid, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between font-bold text-xs pt-1 border-t border-slate-200">
                        <span>Sisa Tagihan:</span>
                        <span class="{{ $transaction->remaining_balance > 0 ? 'text-rose-600' : 'text-emerald-700' }}">
                            {{ $transaction->remaining_balance > 0 ? 'Rp ' . number_format($transaction->remaining_balance, 0, ',', '.') : 'Lunas' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

<div class="pt-4 border-t border-slate-100">
            <h4 class="font-bold text-slate-900 text-sm mb-3">Item Layanan yang Dicuci</h4>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                        <tr>
                            <th class="py-2.5 px-4">Nama Layanan</th>
                            <th class="py-2.5 px-4">Kategori</th>
                            <th class="py-2.5 px-4 text-right">Tarif</th>
                            <th class="py-2.5 px-4 text-right">Kuantitas / Bobot</th>
                            <th class="py-2.5 px-4 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($transaction->items as $item)
                            <tr>
                                <td class="py-3 px-4 font-bold text-slate-800">
                                    {{ $item->service->name }}
                                    @if($item->notes)
                                        <span class="block text-[11px] font-normal text-slate-400 mt-0.5">Catatan: {{ $item->notes }}</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 uppercase text-[10px] font-bold text-slate-500">
                                    {{ $item->service->category }}
                                </td>
                                <td class="py-3 px-4 text-right text-slate-700">
                                    Rp {{ number_format($item->unit_price, 0, ',', '.') }} / {{ $item->service->unit }}
                                </td>
                                <td class="py-3 px-4 text-right font-semibold text-slate-900">
                                    {{ (float) $item->quantity }} {{ $item->service->unit }}
                                </td>
                                <td class="py-3 px-4 text-right font-black text-slate-900">
                                    Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="bg-slate-50/50 font-bold border-t border-slate-200 text-xs">
                        <tr>
                            <td colspan="4" class="py-2.5 px-4 text-right">Total Akhir:</td>
                            <td class="py-2.5 px-4 text-right text-brand-600 font-black text-sm">
                                Rp {{ number_format($transaction->total_price, 0, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

<div class="pt-4 border-t border-slate-100">
            <h4 class="font-bold text-slate-900 text-sm mb-3 flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-emerald-600"></i>
                <span>Riwayat Notifikasi WhatsApp Otomatis</span>
            </h4>

            @if($transaction->whatsappLogs->count() > 0)
                <div class="space-y-2.5">
                    @foreach($transaction->whatsappLogs as $log)
                        <div class="p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs space-y-1">
                            <div class="flex items-center justify-between text-[11px]">
                                <span class="font-bold text-slate-800">{{ $log->type_label }} &bull; {{ $log->phone_number }}</span>
                                <span class="text-slate-400 font-mono">{{ $log->sent_at ? $log->sent_at->format('d/m/Y H:i') : '' }} WIB</span>
                            </div>
                            <p class="text-slate-600 whitespace-pre-line font-sans leading-relaxed bg-white p-2.5 rounded-lg border border-slate-200 mt-1">
                                {{ $log->message }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-xs text-slate-400 italic">Belum ada log pengiriman WhatsApp untuk transaksi ini.</p>
            @endif
        </div>
    </div>

</div>
@endsection
