@extends('layouts.aplikasi')

@section('title', 'Riwayat Transaksi & Alur Cucian')
@section('page_title', 'Riwayat Transaksi & Alur Produksi')

@section('content')
<div class="space-y-5">

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs space-y-4">
        <form action="{{ route('transactions.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-3">
<div class="md:col-span-4 relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                </div>
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari No. Nota, Nama, atau No. WhatsApp..." class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-300 rounded-xl text-xs focus:ring-2 focus:ring-brand-500 focus:outline-none">
            </div>

<div class="md:col-span-3">
                <select name="status" class="w-full py-2 px-3 bg-slate-50 border border-slate-300 rounded-xl text-xs font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    <option value="semua">-- Semua Status Cucian --</option>
                    <option value="menunggu_diproses" {{ request('status') === 'menunggu_diproses' ? 'selected' : '' }}>⏳ Menunggu Diproses</option>
                    <option value="sedang_dicuci" {{ request('status') === 'sedang_dicuci' ? 'selected' : '' }}>🫧 Sedang Dicuci</option>
                    <option value="sedang_dikeringkan" {{ request('status') === 'sedang_dikeringkan' ? 'selected' : '' }}>♨️ Sedang Dikeringkan</option>
                    <option value="sedang_disetrika" {{ request('status') === 'sedang_disetrika' ? 'selected' : '' }}>💨 Sedang Disetrika</option>
                    <option value="sedang_dikemas" {{ request('status') === 'sedang_dikemas' ? 'selected' : '' }}>📦 Sedang Dikemas (Packing)</option>
                    <option value="siap_diambil" {{ request('status') === 'siap_diambil' ? 'selected' : '' }}>✅ Siap Diambil di Rak</option>
                    <option value="selesai" {{ request('status') === 'selesai' ? 'selected' : '' }}>✨ Selesai / Sudah Diambil</option>
                    <option value="dibatalkan" {{ request('status') === 'dibatalkan' ? 'selected' : '' }}>❌ Dibatalkan</option>
                </select>
            </div>

<div class="md:col-span-3">
                <select name="payment_status" class="w-full py-2 px-3 bg-slate-50 border border-slate-300 rounded-xl text-xs font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    <option value="semua">-- Semua Status Pembayaran --</option>
                    <option value="lunas" {{ request('payment_status') === 'lunas' ? 'selected' : '' }}>Lunas</option>
                    <option value="uang_muka" {{ request('payment_status') === 'uang_muka' ? 'selected' : '' }}>Uang Muka (DP / Piutang)</option>
                    <option value="belum_bayar" {{ request('payment_status') === 'belum_bayar' ? 'selected' : '' }}>Belum Bayar</option>
                </select>
            </div>

<div class="md:col-span-2 flex items-center gap-2">
                <button type="submit" class="w-full py-2 px-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs shadow-xs transition-colors flex items-center justify-center gap-1.5">
                    <i class="fa-solid fa-filter"></i>
                    <span>Terapkan</span>
                </button>
                @if(request()->hasAny(['q', 'status', 'payment_status', 'date_from', 'date_to']))
                    <a href="{{ route('transactions.index') }}" title="Hapus Filter" class="p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs">
                        <i class="fa-solid fa-rotate-left"></i>
                    </a>
                @endif
            </div>
        </form>

<div class="flex items-center gap-2 overflow-x-auto pt-2 border-t border-slate-100 text-xs font-semibold">
            <span class="text-[11px] text-slate-400 uppercase font-bold shrink-0">Filter Cepat:</span>
            <a href="{{ route('transactions.index') }}" class="px-2.5 py-1 rounded-lg {{ !request('status') || request('status') === 'semua' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Semua
            </a>
            <a href="{{ route('transactions.index', ['status' => 'menunggu_diproses']) }}" class="px-2.5 py-1 rounded-lg {{ request('status') === 'menunggu_diproses' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Menunggu
            </a>
            <a href="{{ route('transactions.index', ['status' => 'sedang_dicuci']) }}" class="px-2.5 py-1 rounded-lg {{ request('status') === 'sedang_dicuci' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Dicuci
            </a>
            <a href="{{ route('transactions.index', ['status' => 'sedang_dikeringkan']) }}" class="px-2.5 py-1 rounded-lg {{ request('status') === 'sedang_dikeringkan' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Dikeringkan
            </a>
            <a href="{{ route('transactions.index', ['status' => 'sedang_disetrika']) }}" class="px-2.5 py-1 rounded-lg {{ request('status') === 'sedang_disetrika' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Disetrika
            </a>
            <a href="{{ route('transactions.index', ['status' => 'siap_diambil']) }}" class="px-2.5 py-1 rounded-lg {{ request('status') === 'siap_diambil' ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }} shrink-0">
                Siap Ambil di Rak
            </a>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3.5 px-4">No. Nota & Waktu</th>
                        <th class="py-3.5 px-4">Pelanggan</th>
                        <th class="py-3.5 px-4">Layanan & Bobot</th>
                        <th class="py-3.5 px-4">Parfum</th>
                        <th class="py-3.5 px-4">Slot Rak</th>
                        <th class="py-3.5 px-4">Tagihan & Bayar</th>
                        <th class="py-3.5 px-4">Status Cucian</th>
                        <th class="py-3.5 px-4 text-center">Aksi Cepat</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($transactions as $tx)
                        <tr class="hover:bg-slate-50/80 transition-colors">
<td class="py-3.5 px-4">
                                <a href="{{ route('transactions.show', $tx->id) }}" class="font-mono font-bold text-brand-600 hover:underline block text-xs">
                                    {{ $tx->invoice_number }}
                                </a>
                                <span class="text-[10px] text-slate-400 mt-0.5 block">
                                    {{ $tx->order_date->format('d/m/Y H:i') }}
                                </span>
                            </td>

<td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block text-xs">{{ $tx->customer->name }}</span>
                                <a href="https://wa.me/{{ $tx->customer->formatted_phone }}" target="_blank" class="text-[11px] text-emerald-600 hover:underline flex items-center gap-1 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-xs"></i>
                                    {{ $tx->customer->phone_number }}
                                </a>
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
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-purple-50 text-purple-700 border border-purple-200 text-[10px] font-semibold">
                                        <i class="fa-solid fa-spray-can text-[9px]"></i>
                                        {{ $tx->perfume->name }}
                                    </span>
                                @else
                                    <span class="text-slate-400 italic text-[11px]">Standar</span>
                                @endif
                            </td>

<td class="py-3.5 px-4">
                                @if($tx->rackSlot)
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-cyan-50 text-cyan-800 border border-cyan-200 text-xs font-bold">
                                        <i class="fa-solid fa-cubes-stacked text-[10px]"></i>
                                        Rak {{ $tx->rackSlot->code }}
                                    </span>
                                @else
                                    <span class="text-slate-400 text-[11px]">-</span>
                                @endif
                            </td>

<td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block">Rp {{ number_format($tx->total_price, 0, ',', '.') }}</span>
                                @if($tx->payment_status === 'lunas')
                                    <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-md bg-emerald-50 text-emerald-700 font-bold text-[10px]">
                                        <i class="fa-solid fa-check text-[9px]"></i> Lunas
                                    </span>
                                @elseif($tx->payment_status === 'uang_muka')
                                    <button type="button" onclick="openSettleModal({{ $tx->id }}, '{{ $tx->invoice_number }}', {{ $tx->remaining_balance }})" class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-md bg-amber-50 text-amber-800 border border-amber-300 font-bold text-[10px] hover:bg-amber-100">
                                        Sisa Rp {{ number_format($tx->remaining_balance, 0, ',', '.') }} (Lunaskan)
                                    </button>
                                @else
                                    <button type="button" onclick="openSettleModal({{ $tx->id }}, '{{ $tx->invoice_number }}', {{ $tx->total_price }})" class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-md bg-rose-50 text-rose-800 border border-rose-300 font-bold text-[10px] hover:bg-rose-100">
                                        Belum Bayar (Bayar)
                                    </button>
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
                                <button type="button" onclick="openStatusModal({{ $tx->id }}, '{{ $tx->invoice_number }}', '{{ $tx->status }}', '{{ $tx->rack_slot_id }}')" class="px-2.5 py-1 rounded-lg border text-[11px] font-semibold {{ $style }} hover:opacity-80 transition-opacity flex items-center gap-1.5">
                                    <span>{{ $tx->status_label }}</span>
                                    <i class="fa-solid fa-pen-to-square text-[9px]"></i>
                                </button>
                            </td>

<td class="py-3.5 px-4 text-center">
                                <div class="inline-flex items-center gap-1.5">
                                    <a href="{{ route('transactions.receipt', $tx->id) }}" target="_blank" title="Cetak Nota 58mm" class="p-1.5 rounded-lg bg-slate-100 hover:bg-brand-50 hover:text-brand-600 text-slate-600 transition-colors">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                    <a href="{{ route('transactions.show', $tx->id) }}" title="Rincian Lengkap" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition-colors">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-12 text-center text-slate-400">
                                <i class="fa-solid fa-inbox text-3xl mb-2 block"></i>
                                <span>Tidak ada transaksi yang cocok dengan kriteria filter.</span>
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

<div id="status-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div>
                <h3 class="font-bold text-sm text-slate-900">Perbarui Status Pengerjaan</h3>
                <p id="modal-invoice" class="text-xs font-mono text-brand-600 font-bold mt-0.5"></p>
            </div>
            <button type="button" onclick="closeStatusModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="status-form" method="POST" class="mt-4 space-y-4 text-xs">
            @csrf
            @method('PATCH')

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1.5">Pilih Tahapan Alur Cucian</label>
                <select name="status" id="modal-status-select" onchange="toggleRackSelect(this.value)" class="w-full py-2.5 px-3 bg-slate-50 border border-slate-300 rounded-xl font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    <option value="menunggu_diproses">⏳ Menunggu Diproses</option>
                    <option value="sedang_dicuci">🫧 Sedang Dicuci (Front Loading)</option>
                    <option value="sedang_dikeringkan">♨️ Sedang Dikeringkan (Gas Dryer)</option>
                    <option value="sedang_disetrika">💨 Sedang Disetrika (Boiler Uap)</option>
                    <option value="sedang_dikemas">📦 Sedang Dikemas (Packing)</option>
                    <option value="siap_diambil">✅ Siap Diambil di Rak Penyimpanan</option>
                    <option value="selesai">✨ Selesai (Sudah Diserahkan ke Pelanggan)</option>
                    <option value="dibatalkan">❌ Dibatalkan</option>
                </select>
            </div>

<div id="rack-selection-group" class="p-3 bg-cyan-50/60 border border-cyan-200 rounded-xl space-y-2 hidden">
                <label class="block font-bold text-cyan-950 flex items-center gap-1.5">
                    <i class="fa-solid fa-cubes-stacked text-cyan-700"></i>
                    <span>Tentukan Slot Rak Fisik Penyimpanan</span>
                </label>
                <select name="rack_slot_id" id="modal-rack-select" class="w-full py-2 px-3 bg-white border border-cyan-300 rounded-lg text-xs font-semibold focus:outline-none">
                    <option value="">-- Letakkan di Meja Kasir --</option>
                    @foreach($availableRacks as $rack)
                        <option value="{{ $rack->id }}">Rak {{ $rack->code }} ({{ $rack->notes }})</option>
                    @endforeach
                </select>
            </div>

<label class="flex items-center gap-2 p-2.5 bg-emerald-50 border border-emerald-200 rounded-xl cursor-pointer text-emerald-900 font-semibold">
                <input type="checkbox" name="send_whatsapp" value="1" checked class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500 border-emerald-300">
                <span class="flex items-center gap-1.5">
                    <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                    <span>Kirim Pesan WhatsApp Pembaruan ke Pelanggan</span>
                </span>
            </label>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeStatusModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<div id="settle-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div>
                <h3 class="font-bold text-sm text-slate-900">Pelunasan Pembayaran</h3>
                <p id="settle-invoice" class="text-xs font-mono text-brand-600 font-bold mt-0.5"></p>
            </div>
            <button type="button" onclick="closeSettleModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="settle-form" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-500 mb-1">Sisa Piutang yang Harus Dibayar</label>
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-base font-black text-rose-600" id="settle-remaining-text">
                    Rp 0
                </div>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nominal yang Diterima Kasir (Rp)</label>
                <input type="number" name="amount_paid" id="settle-amount-paid" required min="1" class="w-full py-2 px-3 bg-slate-50 border border-slate-300 rounded-xl font-bold text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-500">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Metode Pembayaran</label>
                <select name="payment_method" class="w-full py-2 px-3 bg-slate-50 border border-slate-300 rounded-xl font-semibold focus:outline-none">
                    <option value="tunai">Tunai (Cash)</option>
                    <option value="qris">QRIS Kasir</option>
                    <option value="transfer">Transfer Bank</option>
                </select>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeSettleModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold shadow-xs">
                    Catat Pelunasan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openStatusModal(txId, invoiceNumber, currentStatus, rackSlotId) {
        document.getElementById('modal-invoice').textContent = invoiceNumber;
        document.getElementById('modal-status-select').value = currentStatus;
        document.getElementById('modal-rack-select').value = rackSlotId || '';
        document.getElementById('status-form').action = '/transaksi/' + txId + '/status';
        
        toggleRackSelect(currentStatus);
        document.getElementById('status-modal').classList.remove('hidden');
    }

    function closeStatusModal() {
        document.getElementById('status-modal').classList.add('hidden');
    }

    function toggleRackSelect(status) {
        const rackGroup = document.getElementById('rack-selection-group');
        if (status === 'siap_diambil') {
            rackGroup.classList.remove('hidden');
        } else {
            rackGroup.classList.add('hidden');
        }
    }

    function openSettleModal(txId, invoiceNumber, remainingBalance) {
        document.getElementById('settle-invoice').textContent = invoiceNumber;
        document.getElementById('settle-remaining-text').textContent = 'Rp ' + remainingBalance.toLocaleString('id-ID');
        document.getElementById('settle-amount-paid').value = remainingBalance;
        document.getElementById('settle-form').action = '/transaksi/' + txId + '/bayar';
        document.getElementById('settle-modal').classList.remove('hidden');
    }

    function closeSettleModal() {
        document.getElementById('settle-modal').classList.add('hidden');
    }
</script>
@endpush
