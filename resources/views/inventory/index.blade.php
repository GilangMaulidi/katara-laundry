@extends('layouts.app')

@section('title', 'Stok Bahan Baku')
@section('page_title', 'Stok Bahan Baku & Operasional Mesin')

@section('content')
<div class="space-y-6">

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h3 class="text-sm font-bold text-slate-900">Manajemen Stok Bahan Operasional</h3>
            <p class="text-xs text-slate-500 mt-0.5">
                Pemantauan deterjen, softener, plastik jinjing, tabung gas LPG dryer, dan kertas thermal kasir
            </p>
        </div>

        <div class="flex items-center gap-3">
            @if($lowStockCount > 0)
                <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-rose-50 text-rose-700 border border-rose-200 text-xs font-bold">
                    <i class="fa-solid fa-triangle-exclamation text-rose-500"></i>
                    <span>{{ $lowStockCount }} Bahan Menipis</span>
                </div>
            @endif
            <button type="button" onclick="openInventoryModal()" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs shadow-xs transition-colors">
                <i class="fa-solid fa-plus"></i>
                <span>Tambah Bahan Baku</span>
            </button>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Nama Bahan Baku</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4 text-center">Stok Saat Ini</th>
                        <th class="py-3 px-4 text-center">Batas Minimum</th>
                        <th class="py-3 px-4">Biaya Satuan</th>
                        <th class="py-3 px-4 text-center">Status Stok</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($items as $item)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3.5 px-4 font-bold text-slate-900">
                                {{ $item->name }}
                                @if($item->notes)
                                    <span class="block text-[11px] font-normal text-slate-500 mt-0.5">{{ $item->notes }}</span>
                                @endif
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase bg-slate-100 text-slate-700 border border-slate-200">
                                    {{ $item->category }}
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center font-black text-sm text-slate-900">
                                {{ (float) $item->stock }} <span class="text-xs font-normal text-slate-500">{{ $item->unit }}</span>
                            </td>
                            <td class="py-3.5 px-4 text-center text-slate-600 font-semibold">
                                {{ (float) $item->minimum_stock }} {{ $item->unit }}
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-800">
                                Rp {{ number_format($item->cost_per_unit, 0, ',', '.') }} / {{ $item->unit }}
                            </td>
                            <td class="py-3.5 px-4 text-center">
                                @if($item->is_low_stock)
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 border border-rose-200 font-bold text-[10px]">
                                        <i class="fa-solid fa-circle text-[6px] text-rose-500"></i> Menipis
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">
                                        <i class="fa-solid fa-circle text-[6px] text-emerald-500"></i> Aman
                                    </span>
                                @endif
                            </td>
                            <td class="py-3.5 px-4 text-center">
                                <button type="button" onclick="openEditInventoryModal({{ $item->id }}, '{{ addslashes($item->name) }}', '{{ $item->category }}', '{{ $item->unit }}', {{ (float) $item->stock }}, {{ (float) $item->minimum_stock }}, {{ (float) $item->cost_per_unit }}, '{{ addslashes($item->notes ?? '') }}')" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition-colors" title="Perbarui Stok">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<div id="inv-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Tambah Bahan Baku Baru</h3>
            <button type="button" onclick="closeInventoryModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form action="{{ route('inventory.store') }}" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Bahan Baku <span class="text-rose-500">*</span></label>
                <input type="text" name="name" required placeholder="Contoh: Plastik Klip Sedang" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Kategori</label>
                    <select name="category" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl font-semibold focus:outline-none">
                        <option value="deterjen">Deterjen</option>
                        <option value="parfum">Parfum & Softener</option>
                        <option value="packaging">Kemasan Plastik</option>
                        <option value="gas">Gas LPG Dryer</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Satuan Unit</label>
                    <input type="text" name="unit" required value="liter" placeholder="liter, kg, pack..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Jumlah Stok</label>
                    <input type="number" step="0.1" name="stock" required value="10" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none font-bold">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Batas Minimal</label>
                    <input type="number" step="0.1" name="minimum_stock" required value="5" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Harga Beli</label>
                    <input type="number" name="cost_per_unit" required value="0" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Catatan Tambahan</label>
                <textarea name="notes" rows="2" placeholder="Keterangan pemasok/lokasi simpan..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeInventoryModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Bahan Baku
                </button>
            </div>
        </form>
    </div>
</div>

<div id="edit-inv-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Perbarui Stok Bahan Baku</h3>
            <button type="button" onclick="closeEditInventoryModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="edit-inv-form" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Bahan Baku</label>
                <input type="text" name="name" id="edit_inv_name" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Kategori</label>
                    <select name="category" id="edit_inv_cat" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl font-semibold focus:outline-none">
                        <option value="deterjen">Deterjen</option>
                        <option value="parfum">Parfum & Softener</option>
                        <option value="packaging">Kemasan Plastik</option>
                        <option value="gas">Gas LPG Dryer</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Satuan Unit</label>
                    <input type="text" name="unit" id="edit_inv_unit" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Stok Sekarang</label>
                    <input type="number" step="0.1" name="stock" id="edit_inv_stock" required class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none font-bold text-slate-900">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Batas Minimal</label>
                    <input type="number" step="0.1" name="minimum_stock" id="edit_inv_min" required class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Harga Beli</label>
                    <input type="number" name="cost_per_unit" id="edit_inv_cost" required class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Catatan</label>
                <textarea name="notes" id="edit_inv_notes" rows="2" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeEditInventoryModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openInventoryModal() {
        document.getElementById('inv-modal').classList.remove('hidden');
    }
    function closeInventoryModal() {
        document.getElementById('inv-modal').classList.add('hidden');
    }

    function openEditInventoryModal(id, name, cat, unit, stock, min, cost, notes) {
        document.getElementById('edit_inv_name').value = name;
        document.getElementById('edit_inv_cat').value = cat;
        document.getElementById('edit_inv_unit').value = unit;
        document.getElementById('edit_inv_stock').value = stock;
        document.getElementById('edit_inv_min').value = min;
        document.getElementById('edit_inv_cost').value = cost;
        document.getElementById('edit_inv_notes').value = notes;
        document.getElementById('edit-inv-form').action = '/inventori/' + id;
        document.getElementById('edit-inv-modal').classList.remove('hidden');
    }
    function closeEditInventoryModal() {
        document.getElementById('edit-inv-modal').classList.add('hidden');
    }
</script>
@endpush
