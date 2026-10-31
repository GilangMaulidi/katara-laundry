@extends('layouts.aplikasi')

@section('title', 'Buku Pelanggan')
@section('page_title', 'Buku Kontak Pelanggan Dinoyo')

@section('content')
<div class="space-y-5">

<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <form action="{{ route('customers.index') }}" method="GET" class="relative flex-1 max-w-md">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                <i class="fa-solid fa-magnifying-glass text-xs"></i>
            </div>
            <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari nama pelanggan, nomor WhatsApp, atau alamat..." class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-300 rounded-xl text-xs focus:ring-2 focus:ring-brand-500 focus:outline-none">
        </form>

        <button type="button" onclick="openCustomerModal()" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs shadow-xs transition-colors">
            <i class="fa-solid fa-user-plus"></i>
            <span>Tambah Pelanggan Baru</span>
        </button>
    </div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Nama Pelanggan</th>
                        <th class="py-3 px-4">WhatsApp / Telepon</th>
                        <th class="py-3 px-4">Alamat Domisili / Kost</th>
                        <th class="py-3 px-4 text-center">Total Order</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($customers as $cust)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3.5 px-4 font-bold text-slate-900">
                                {{ $cust->name }}
                                @if($cust->notes)
                                    <span class="block text-[11px] font-normal text-slate-400 mt-0.5">{{ $cust->notes }}</span>
                                @endif
                            </td>

                            <td class="py-3.5 px-4">
                                <a href="https://wa.me/{{ $cust->formatted_phone }}" target="_blank" class="inline-flex items-center gap-1.5 text-emerald-600 font-semibold hover:underline">
                                    <i class="fa-brands fa-whatsapp text-sm"></i>
                                    <span>{{ $cust->phone_number }}</span>
                                </a>
                            </td>

                            <td class="py-3.5 px-4 text-slate-600 max-w-xs truncate">
                                {{ $cust->address ?? '-' }}
                            </td>

                            <td class="py-3.5 px-4 text-center">
                                <span class="inline-block px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-700 font-bold text-xs">
                                    {{ $cust->transactions_count }} Nota
                                </span>
                            </td>

                            <td class="py-3.5 px-4 text-center">
                                <div class="inline-flex items-center gap-1.5">
                                    <button type="button" onclick="openEditModal({{ $cust->id }}, '{{ addslashes($cust->name) }}', '{{ $cust->phone_number }}', '{{ addslashes($cust->address ?? '') }}', '{{ addslashes($cust->notes ?? '') }}')" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 transition-colors" title="Ubah">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <form action="{{ route('customers.destroy', $cust->id) }}" method="POST" onsubmit="return confirm('Hapus pelanggan {{ $cust->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-lg bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 transition-colors" title="Hapus">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-slate-400">
                                <i class="fa-solid fa-address-book text-3xl mb-2 block"></i>
                                <span>Belum ada data pelanggan yang terdaftar.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($customers->hasPages())
            <div class="p-4 border-t border-slate-200">
                {{ $customers->links() }}
            </div>
        @endif
    </div>

</div>

<div id="customer-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-user-plus text-brand-600"></i>
                <span>Tambah Pelanggan Baru</span>
            </h3>
            <button type="button" onclick="closeCustomerModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form action="{{ route('customers.store') }}" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Lengkap <span class="text-rose-500">*</span></label>
                <input type="text" name="name" required placeholder="Contoh: Rian Pratama (Mahasiswa UB)" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nomor WhatsApp / Telepon <span class="text-rose-500">*</span></label>
                <input type="tel" name="phone_number" required placeholder="08xxxxxxxxxx" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs font-mono">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Alamat / Kost di Dinoyo</label>
                <textarea name="address" rows="2" placeholder="Kost Putri Dinoyo Jl MT Haryono No..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs"></textarea>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Catatan Preferensi</label>
                <input type="text" name="notes" placeholder="Contoh: Selalu minta dipisah celana jeans..." class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs">
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeCustomerModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-xs">
                    Simpan Pelanggan
                </button>
            </div>
        </form>
    </div>
</div>

<div id="edit-modal" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="font-bold text-sm text-slate-900">Ubah Data Pelanggan</h3>
            <button type="button" onclick="closeEditModal()" class="text-slate-400 hover:text-slate-600 p-1">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <form id="edit-form" method="POST" class="mt-4 space-y-3.5 text-xs">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" id="edit_name" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Nomor WhatsApp / Telepon</label>
                <input type="tel" name="phone_number" id="edit_phone" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs font-mono">
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Alamat / Kost di Dinoyo</label>
                <textarea name="address" id="edit_address" rows="2" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs"></textarea>
            </div>

            <div>
                <label class="block font-bold uppercase tracking-wider text-slate-700 mb-1">Catatan Preferensi</label>
                <input type="text" name="notes" id="edit_notes" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:outline-none text-xs">
            </div>

            <div class="pt-2 flex items-center justify-end gap-2">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold">
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
    function openCustomerModal() {
        document.getElementById('customer-modal').classList.remove('hidden');
    }
    function closeCustomerModal() {
        document.getElementById('customer-modal').classList.add('hidden');
    }

    function openEditModal(id, name, phone, address, notes) {
        document.getElementById('edit_name').value = name;
        document.getElementById('edit_phone').value = phone;
        document.getElementById('edit_address').value = address;
        document.getElementById('edit_notes').value = notes;
        document.getElementById('edit-form').action = '/pelanggan/' + id;
        document.getElementById('edit-modal').classList.remove('hidden');
    }
    function closeEditModal() {
        document.getElementById('edit-modal').classList.add('hidden');
    }
</script>
@endpush
