@extends('layouts.aplikasi')

@section('title', 'Katalog Layanan & Aroma Parfum')
@section('page_title', 'Katalog Tarif Layanan & Varian Parfum')

@section('content')
<div class="space-y-8">

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
                <h3 class="font-bold text-slate-900 text-sm">Daftar Tarif Layanan Laundry</h3>
                <p class="text-xs text-slate-500">Katalog layanan kiloan & satuan beserta durasi pengerjaan gerai Dinoyo</p>
            </div>
            <button type="button" onclick="openServiceModal()" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs shadow-xs transition-colors">
                <i class="fa-solid fa-plus"></i>
                <span>Tambah Layanan Baru</span>
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Nama Layanan</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4">Tarif Harga</th>
                        <th class="py-3 px-4">Durasi Selesai</th>
                        <th class="py-3 px-4">Min. Order</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($services as $svc)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3 px-4 font-bold text-slate-900">
                                {{ $svc->name }}
                                @if($svc->description)
                                    <span class="block text-[11px] font-normal text-slate-500 mt-0.5">{{ $svc->description }}</span>
                                @endif
                            </td>
                            <td class="py-3 px-4">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase {{ $svc->category === 'kiloan' ? 'bg-amber-50 text-amber-700 border border-amber-200' : 'bg-blue-50 text-blue-700 border border-blue-200' }}">
                                    {{ $svc->category }}
                                </span>
                            </td>
                            <td class="py-3 px-4 font-black text-slate-900 text-sm">
                                Rp {{ number_format($svc->price, 0, ',', '.') }}
                                <span class="text-xs font-normal text-slate-400">/ {{ $svc->unit }}</span>
                            </td>
                            <td class="py-3 px-4 font-semibold text-slate-700">
                                <i class="fa-regular fa-clock text-slate-400 mr-1"></i>
                                {{ $svc->duration_hours }} Jam
                            </td>
                            <td class="py-3 px-4 text-slate-700">
                                {{ (float) $svc->min_order }} {{ $svc->unit }}
                            </td>
                            <td class="py-3 px-4 text-center">
                                @if($svc->is_active)
                                    <span class="inline-block px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">
                                        Aktif
                                    </span>
                                @else
                                    <span class="inline-block px-2 py-0.5 rounded-full bg-slate-100 text-slate-400 font-bold text-[10px]">
                                        Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-4 text-center">
                                <button type="button" onclick="openEditServiceModal({{ $svc->id }}, '{{ addslashes($svc->name) }}', '{{ $svc->category }}', '{{ $svc->unit }}', {{ (float) $svc->price }}, {{ $svc->duration_hours }}, {{ (float) $svc->min_order }}, '{{ addslashes($svc->description ?? '') }}', {{ $svc->is_active ? 'true' : 'false' }})" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition-colors" title="Ubah Tarif">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs p-6 space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-3">
            <div>
                <h3 class="font-bold text-slate-900 text-sm">Pilihan Varian Aroma Parfum Laundry</h3>
                <p class="text-xs text-slate-500">5 Pilihan aroma parfum finishing standar gerai Dinoyo yang disukai pelanggan</p>
            </div>
            <button type="button" onclick="openPerfumeModal()" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold text-xs shadow-xs transition-colors">
                <i class="fa-solid fa-spray-can"></i>
                <span>Tambah Aroma Baru</span>
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($perfumes as $pf)
                <div class="p-4 bg-slate-50 rounded-xl border border-slate-200/80 flex items-start gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center shrink-0 text-base shadow-xs">
                        <i class="fa-solid fa-spray-can"></i>
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="font-bold text-slate-900 text-xs truncate">{{ $pf->name }}</h4>
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        </div>
                        <p class="text-[11px] font-semibold text-purple-700 mt-0.5">{{ $pf->aroma_character }}</p>
                        <p class="text-[10px] text-slate-500 mt-1 leading-relaxed">{{ $pf->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

<div id="service-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Tambah Layanan Baru</h3>
            <button type="button" onclick="closeServiceModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form action="{{ route('services.store') }}" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Layanan <span class="text-rose-500">*</span></label>
                <input type="text" name="name" required placeholder="Contoh: Cuci Kering Setrika Express 3 Jam" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Kategori</label>
                    <select name="category" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl font-semibold focus:outline-none">
                        <option value="kiloan">Kiloan</option>
                        <option value="satuan">Satuan</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Satuan Unit</label>
                    <input type="text" name="unit" required value="kg" placeholder="kg, pcs, stel..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Tarif (Rp)</label>
                    <input type="number" name="price" required min="0" placeholder="10000" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none font-bold">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Durasi (Jam)</label>
                    <input type="number" name="duration_hours" required min="1" value="24" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Min. Order</label>
                    <input type="number" step="0.1" name="min_order" required value="1" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Keterangan Layanan</label>
                <textarea name="description" rows="2" placeholder="Deskripsi perlakuan cucian..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeServiceModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Layanan
                </button>
            </div>
        </form>
    </div>
</div>

<div id="edit-service-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Ubah Tarif Layanan</h3>
            <button type="button" onclick="closeEditServiceModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="edit-service-form" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Layanan</label>
                <input type="text" name="name" id="edit_svc_name" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Kategori</label>
                    <select name="category" id="edit_svc_category" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl font-semibold focus:outline-none">
                        <option value="kiloan">Kiloan</option>
                        <option value="satuan">Satuan</option>
                    </select>
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Satuan Unit</label>
                    <input type="text" name="unit" id="edit_svc_unit" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Tarif (Rp)</label>
                    <input type="number" name="price" id="edit_svc_price" required min="0" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none font-bold">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Durasi (Jam)</label>
                    <input type="number" name="duration_hours" id="edit_svc_duration" required min="1" class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Min. Order</label>
                    <input type="number" step="0.1" name="min_order" id="edit_svc_min" required class="w-full px-2 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Keterangan Layanan</label>
                <textarea name="description" id="edit_svc_desc" rows="2" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeEditServiceModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<div id="perfume-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Tambah Varian Aroma Parfum</h3>
            <button type="button" onclick="closePerfumeModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form action="{{ route('services.perfume.store') }}" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Varian Aroma <span class="text-rose-500">*</span></label>
                <input type="text" name="name" required placeholder="Contoh: Green Tea Zen" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Karakter Aroma</label>
                <input type="text" name="aroma_character" placeholder="Contoh: Segar Alami & Menenangkan Pikiran" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Deskripsi Tambahan</label>
                <textarea name="description" rows="2" placeholder="Catatan daya tahan aroma..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none"></textarea>
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closePerfumeModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold shadow-xs">
                    Simpan Varian Parfum
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openServiceModal() {
        document.getElementById('service-modal').classList.remove('hidden');
    }
    function closeServiceModal() {
        document.getElementById('service-modal').classList.add('hidden');
    }

    function openEditServiceModal(id, name, cat, unit, price, duration, minOrder, desc, active) {
        document.getElementById('edit_svc_name').value = name;
        document.getElementById('edit_svc_category').value = cat;
        document.getElementById('edit_svc_unit').value = unit;
        document.getElementById('edit_svc_price').value = price;
        document.getElementById('edit_svc_duration').value = duration;
        document.getElementById('edit_svc_min').value = minOrder;
        document.getElementById('edit_svc_desc').value = desc;
        document.getElementById('edit-service-form').action = '/layanan/' + id;
        document.getElementById('edit-service-modal').classList.remove('hidden');
    }
    function closeEditServiceModal() {
        document.getElementById('edit-service-modal').classList.add('hidden');
    }

    function openPerfumeModal() {
        document.getElementById('perfume-modal').classList.remove('hidden');
    }
    function closePerfumeModal() {
        document.getElementById('perfume-modal').classList.add('hidden');
    }
</script>
@endpush
