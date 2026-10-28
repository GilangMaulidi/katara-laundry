@extends('layouts.public')

@section('title', 'Kalkulator Estimasi Biaya & Waktu Laundry - Katara Laundry Dinoyo')
@section('meta_description', 'Hitung estimasi biaya cucian kiloan dan satuan secara online dan instan di Katara Laundry Dinoyo Malang. Pilih parfum gratis dan dapatkan rincian biaya transparan.')

@section('content')
<div class="space-y-12 sm:space-y-16 lg:space-y-20 pb-12 sm:pb-16 lg:pb-20">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
<nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Estimasi Kalkulator</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold uppercase tracking-wider border border-amber-500/30 shadow-xs">
                    <i class="fa-solid fa-calculator text-amber-400"></i>
                    <span>Simulator Biaya Online</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Kalkulator Estimasi Biaya & Waktu
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Hitung perkiraan total tarif cuci kiloan atau satuan secara akurat sebelum diantar ke gerai atau dijemput ke kos/rumah Anda.
                </p>
            </div>
        </div>
    </section>

<section class="site-container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
<div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 space-y-6 shadow-sm">
                <div class="border-b border-slate-100 pb-4">
                    <h2 class="text-lg sm:text-xl font-extrabold text-slate-900 flex items-center gap-2">
                        <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-sm font-bold">1</span>
                        <span>Konfigurasi Pilihan Cucian</span>
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Pilih jenis layanan, tentukan perkiraan berat atau jumlah satuan, dan aroma parfum favorit Anda.
                    </p>
                </div>

<div class="space-y-2">
                    <label for="calcService" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                        Jenis Layanan Laundry <span class="text-rose-500">*</span>
                    </label>
                    <select id="calcService" onchange="updateServiceDetails()" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all">
                        @foreach($services as $svc)
                            <option value="{{ $svc->id }}" 
                                    data-price="{{ $svc->price }}" 
                                    data-unit="{{ $svc->unit }}" 
                                    data-hours="{{ $svc->duration_hours }}" 
                                    data-min="{{ $svc->min_order }}"
                                    data-name="{{ $svc->name }}"
                                    {{ request('service') == $svc->id ? 'selected' : ($svc->id == 2 ? 'selected' : '') }}>
                                {{ $svc->name }} — Rp {{ number_format($svc->price, 0, ',', '.') }}/{{ $svc->unit }} ({{ $svc->duration_hours }} Jam)
                            </option>
                        @endforeach
                    </select>
                </div>

<div class="space-y-3 bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200/80">
                    <div class="flex items-center justify-between">
                        <label for="calcQtyInput" class="text-xs font-bold text-slate-700 uppercase tracking-wider">
                            Perkiraan Kuantitas (<span id="unitLabel">kg</span>)
                        </label>
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-slate-500">Jumlah:</span>
                            <div class="flex items-center bg-white rounded-xl border border-slate-200 px-2 py-1 shadow-2xs">
                                <input type="number" id="calcQtyInput" min="1" max="100" step="0.5" value="3" oninput="syncFromInput(this.value)" class="w-16 text-center font-extrabold text-sm text-slate-900 focus:outline-none">
                                <span id="unitInputSuffix" class="text-xs text-slate-500 font-semibold pr-1">kg</span>
                            </div>
                        </div>
                    </div>

<input type="range" id="calcRangeSlider" min="1" max="30" step="0.5" value="3" oninput="syncFromSlider(this.value)" class="w-full accent-sky-600 h-2 bg-slate-200 rounded-lg cursor-pointer">
                    
                    <div class="flex justify-between text-[11px] text-slate-400 font-medium">
                        <span>Min. <span id="minOrderText">1</span> <span class="unitText">kg</span></span>
                        <span>Biasa: 3 - 6 <span class="unitText">kg</span></span>
                        <span>Besar: 10+ <span class="unitText">kg</span></span>
                    </div>
                </div>

<div class="space-y-2.5">
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                        Pilih Aroma Parfum Premium (Gratis Termasuk Paket)
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5" id="perfumeSelector">
                        @foreach($perfumes as $pf)
                            <label class="perfume-radio-card flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-white hover:border-sky-300 hover:bg-sky-50/30 cursor-pointer transition-all {{ $loop->first ? 'ring-2 ring-sky-500 border-sky-500 bg-sky-50/20' : '' }}">
                                <input type="radio" name="selectedPerfume" value="{{ $pf->name }}" {{ $loop->first ? 'checked' : '' }} onchange="selectPerfume('{{ $pf->name }}', this)" class="sr-only">
                                <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 border border-purple-100 flex items-center justify-center text-xs shrink-0">
                                    <i class="fa-solid fa-spray-can"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <span class="block text-xs font-bold text-slate-900 truncate">{{ $pf->name }}</span>
                                    <span class="block text-[11px] text-slate-500 truncate">{{ $pf->scent_notes ?? 'Aroma segar tahan lama' }}</span>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

<div class="pt-2 border-t border-slate-100">
                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 cursor-pointer transition-colors">
                        <input type="checkbox" id="pickupDeliveryToggle" onchange="recalculateTotal()" class="w-4 h-4 rounded text-sky-600 focus:ring-sky-500">
                        <div class="flex-1">
                            <span class="text-xs font-bold text-slate-900 flex items-center gap-1.5">
                                <i class="fa-solid fa-truck-fast text-emerald-600"></i>
                                <span>Butuh Antar-Jemput ke Lokasi Anda?</span>
                            </span>
                            <span class="text-[11px] text-slate-500 block">
                                Gratis untuk area Dinoyo & sekitarnya (Radius gerai Jl. MT Haryono).
                            </span>
                        </div>
                    </label>
                </div>
            </div>

<div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                <div class="bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white rounded-2xl border border-sky-800/60 p-6 sm:p-7 space-y-6 shadow-xl relative overflow-hidden">
                    <div class="absolute -top-16 -right-16 w-48 h-48 bg-sky-500/10 rounded-full blur-2xl pointer-events-none"></div>

<div class="flex items-center justify-between border-b border-sky-800/60 pb-4">
                        <div class="space-y-0.5">
                            <span class="text-[10px] uppercase font-bold tracking-wider text-sky-400">Ringkasan Simulasi</span>
                            <h3 class="text-base font-extrabold text-white">Estimasi Tagihan Anda</h3>
                        </div>
                        <span class="px-2.5 py-1 rounded-md bg-emerald-500/20 text-emerald-300 font-bold text-[10px] border border-emerald-500/30 flex items-center gap-1">
                            <i class="fa-solid fa-check"></i> Transparan
                        </span>
                    </div>

<div class="space-y-3 text-xs">
                        <div class="flex justify-between items-center text-slate-300">
                            <span>Layanan Terpilih:</span>
                            <span id="summaryServiceName" class="font-bold text-white text-right">Cuci Kering Setrika Kilat</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-300">
                            <span>Tarif Dasar:</span>
                            <span id="summaryServiceRate" class="font-mono text-white">Rp 10.000 / kg</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-300">
                            <span>Kuantitas Cucian:</span>
                            <span id="summaryQty" class="font-mono font-bold text-sky-300">3 kg</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-300">
                            <span>Pilihan Parfum:</span>
                            <span id="summaryPerfume" class="font-semibold text-purple-300">Selera Segar</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-300">
                            <span>Antar - Jemput:</span>
                            <span id="summaryDelivery" class="text-emerald-400 font-semibold">Diantar Sendiri ke Gerai</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-300 pt-2 border-t border-sky-900/60">
                            <span>Estimasi Selesai:</span>
                            <span id="summaryDuration" class="font-bold text-amber-300 flex items-center gap-1">
                                <i class="fa-regular fa-clock"></i> 24 Jam
                            </span>
                        </div>
                    </div>

<div class="p-4 rounded-xl bg-sky-900/40 border border-sky-700/50 space-y-1">
                        <span class="text-[11px] text-slate-300 block">Perkiraan Total Biaya:</span>
                        <div class="text-2xl sm:text-3xl font-black text-emerald-400 font-mono" id="summaryTotalPrice">
                            Rp 30.000
                        </div>
                        <span class="text-[10px] text-slate-400 block">*Biaya final dipastikan saat timbangan fisik di gerai atau saat penjemputan.</span>
                    </div>

<div class="space-y-2 pt-1">
                        <a id="waOrderButton" 
                           href="#" 
                           target="_blank" 
                           class="w-full py-3.5 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-sm transition-all flex items-center justify-center gap-2 shadow-lg shadow-emerald-500/25">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>Pesan via WhatsApp Sekarang</span>
                        </a>
                        <p class="text-[11px] text-center text-slate-400">
                            Rincian simulasi ini akan otomatis terisi di pesan WhatsApp Anda.
                        </p>
                    </div>
                </div>

<div class="p-5 rounded-2xl bg-white border border-slate-200/80 space-y-2 text-xs text-slate-600 shadow-sm">
                    <h4 class="font-bold text-slate-900 flex items-center gap-1.5">
                        <i class="fa-solid fa-scale-balanced text-sky-600"></i>
                        <span>Timbangan Digital Transparan</span>
                    </h4>
                    <p class="text-slate-500 text-[11px] leading-relaxed">
                        Di gerai Katara Dinoyo, cucian Anda ditimbang langsung dengan timbangan digital presisi hingga 2 desimal. Anda akan menerima nota fisik dan link pelacakan online secara instan.
                    </p>
                </div>
            </div>

        </div>

<div class="mt-12 sm:mt-16 lg:mt-20 rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="space-y-1">
                <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Tips Pelanggan</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                    Panduan Memperkirakan Berat Cucian Kiloan
                </h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    Gunakan panduan rata-rata berat per potong pakaian berikut jika Anda belum memiliki timbangan di rumah atau kamar kos:
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1">
                    <span class="font-bold text-slate-900 block">Kaos / T-Shirt</span>
                    <span class="text-sky-700 font-mono font-semibold block">± 150 - 200 gram</span>
                    <span class="text-[11px] text-slate-500">1 kg muat sekitar 5 - 6 potong</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1">
                    <span class="font-bold text-slate-900 block">Celana Jeans Tebal</span>
                    <span class="text-sky-700 font-mono font-semibold block">± 500 - 700 gram</span>
                    <span class="text-[11px] text-slate-500">1 kg muat sekitar 1 - 2 potong</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1">
                    <span class="font-bold text-slate-900 block">Kemeja / Blus</span>
                    <span class="text-sky-700 font-mono font-semibold block">± 200 - 250 gram</span>
                    <span class="text-[11px] text-slate-500">1 kg muat sekitar 4 - 5 potong</span>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1">
                    <span class="font-bold text-slate-900 block">Jaket Hoodie / Sweater</span>
                    <span class="text-sky-700 font-mono font-semibold block">± 400 - 600 gram</span>
                    <span class="text-[11px] text-slate-500">1 kg muat sekitar 2 potong</span>
                </div>
            </div>
        </div>
    </section>

</div>

@push('scripts')
<script>
    let currentPerfume = '{{ $perfumes->first()->name ?? "Selera Segar" }}';

    function updateServiceDetails() {
        const select = document.getElementById('calcService');
        const selectedOption = select.options[select.selectedIndex];
        const unit = selectedOption.getAttribute('data-unit') || 'kg';
        const min = parseFloat(selectedOption.getAttribute('data-min')) || 1;

        document.getElementById('unitLabel').textContent = unit;
        document.getElementById('unitInputSuffix').textContent = unit;
        document.querySelectorAll('.unitText').forEach(el => el.textContent = unit);
        document.getElementById('minOrderText').textContent = min;

        const slider = document.getElementById('calcRangeSlider');
        const qtyInput = document.getElementById('calcQtyInput');
        slider.min = min;
        qtyInput.min = min;

        if (parseFloat(qtyInput.value) < min) {
            qtyInput.value = min;
            slider.value = min;
        }

        recalculateTotal();
    }

    function syncFromSlider(val) {
        document.getElementById('calcQtyInput').value = val;
        recalculateTotal();
    }

    function syncFromInput(val) {
        document.getElementById('calcRangeSlider').value = val;
        recalculateTotal();
    }

    function selectPerfume(name, element) {
        currentPerfume = name;
        document.querySelectorAll('.perfume-radio-card').forEach(card => {
            card.classList.remove('ring-2', 'ring-sky-500', 'border-sky-500', 'bg-sky-50/20');
        });
        element.closest('.perfume-radio-card').classList.add('ring-2', 'ring-sky-500', 'border-sky-500', 'bg-sky-50/20');
        recalculateTotal();
    }

    function recalculateTotal() {
        const select = document.getElementById('calcService');
        const selectedOption = select.options[select.selectedIndex];
        const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;
        const unit = selectedOption.getAttribute('data-unit') || 'kg';
        const hours = parseInt(selectedOption.getAttribute('data-hours')) || 24;
        const minOrder = parseFloat(selectedOption.getAttribute('data-min')) || 1;
        const serviceName = selectedOption.getAttribute('data-name') || selectedOption.text.split('—')[0].trim();

        let qty = parseFloat(document.getElementById('calcQtyInput').value) || minOrder;
        if (qty < minOrder) qty = minOrder;

        const isDelivery = document.getElementById('pickupDeliveryToggle').checked;
        const totalPrice = Math.round(qty * price);

        document.getElementById('summaryServiceName').textContent = serviceName;
        document.getElementById('summaryServiceRate').textContent = `Rp ${price.toLocaleString('id-ID')} / ${unit}`;
        document.getElementById('summaryQty').textContent = `${qty} ${unit}`;
        document.getElementById('summaryPerfume').textContent = currentPerfume;
        document.getElementById('summaryDelivery').textContent = isDelivery ? 'Antar-Jemput Dinoyo (Gratis)' : 'Diantar Sendiri ke Gerai';
        
        const durationText = hours >= 24 ? `${hours} Jam (${Math.round(hours / 24)} Hari)` : `${hours} Jam`;
        document.getElementById('summaryDuration').innerHTML = `<i class="fa-regular fa-clock"></i> ${durationText}`;
        document.getElementById('summaryTotalPrice').textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;

        const deliveryText = isDelivery ? 'Iya (Antar-Jemput)' : 'Tidak (Diantar ke Gerai)';
        const waMessage = `Halo Katara Laundry Dinoyo,\nSaya ingin order laundry dengan rincian kalkulator:\n- Layanan: ${serviceName}\n- Estimasi Kuantitas: ${qty} ${unit}\n- Pilihan Parfum: ${currentPerfume}\n- Butuh Antar-Jemput: ${deliveryText}\n- Estimasi Biaya: Rp ${totalPrice.toLocaleString('id-ID')}\n\nMohon info proses selanjutnya. Terima kasih!`;
        
        document.getElementById('waOrderButton').href = `https://wa.me/6281234567890?text=${encodeURIComponent(waMessage)}`;
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateServiceDetails();
    });
</script>
@endpush
@endsection
