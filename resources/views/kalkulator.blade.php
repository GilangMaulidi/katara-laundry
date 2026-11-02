@extends('layouts.publik')

@section('title', 'Kalkulator Estimasi Biaya & Waktu Laundry - Katara Laundry Dinoyo')
@section('meta_description', 'Hitung estimasi biaya cucian kiloan dan satuan secara online dan instan di Katara Laundry Dinoyo Malang. Pilih parfum gratis dan dapatkan rincian biaya transparan.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
<nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Estimasi Kalkulator</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Kalkulator Estimasi Biaya & Waktu
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Hitung perkiraan total tarif cuci kiloan atau satuan secara akurat sebelum diantar ke gerai atau dijemput ke kos/rumah Anda.
                </p>
            </div>
            <div class="pt-1.5 grid grid-cols-2 sm:flex sm:flex-wrap items-center justify-center gap-2 sm:gap-2.5 text-xs">
                <div class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-shield-check text-emerald-400"></i>
                    <span>1 Mesin 1 Pelanggan</span>
                </div>
                <div class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-spray-can text-purple-300"></i>
                    <span>Gratis Pilihan Parfum</span>
                </div>
                <div class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-bolt text-amber-400"></i>
                    <span>Express 6 Jam Siap</span>
                </div>
                <div class="flex items-center justify-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-rotate-left text-sky-300"></i>
                    <span>Garansi Cuci Ulang 100%</span>
                </div>
            </div>
        </div>
    </section>

<section class="site-container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-6 items-start">
            
<div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 space-y-4 shadow-sm">
                <div class="border-b border-slate-100 pb-3">
                    <h2 class="text-lg sm:text-xl font-extrabold text-slate-900">
                        Konfigurasi Pilihan Cucian
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">
                        Pilih jenis layanan, tentukan perkiraan berat atau jumlah satuan, dan aroma parfum favorit Anda.
                    </p>
                </div>

<div class="space-y-2">
                    <label for="calcService" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                        Jenis Layanan Laundry <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative" id="customServiceDropdown">
                        <select id="calcService" onchange="updateServiceDetails()" class="sr-only">
                            <optgroup label="🧺 Paket Cuci Kiloan">
                                @foreach($services->where('unit', 'kg') as $svc)
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
                            </optgroup>
                            <optgroup label="✨ Paket Satuan &amp; Spesialis">
                                @foreach($services->where('unit', '!=', 'kg') as $svc)
                                    <option value="{{ $svc->id }}" 
                                            data-price="{{ $svc->price }}" 
                                            data-unit="{{ $svc->unit }}" 
                                            data-hours="{{ $svc->duration_hours }}" 
                                            data-min="{{ $svc->min_order }}"
                                            data-name="{{ $svc->name }}"
                                            {{ request('service') == $svc->id ? 'selected' : '' }}>
                                        {{ $svc->name }} — Rp {{ number_format($svc->price, 0, ',', '.') }}/{{ $svc->unit }} ({{ $svc->duration_hours }} Jam)
                                    </option>
                                @endforeach
                            </optgroup>
                        </select>

                        <button type="button" 
                                id="customServiceBtn" 
                                onclick="toggleServiceDropdown()" 
                                class="w-full h-9 pl-3 pr-8 rounded-xl border border-slate-200 bg-slate-50 hover:bg-white text-slate-800 text-xs font-semibold flex items-center justify-between transition-all leading-none focus:outline-none focus:ring-2 focus:ring-sky-500 text-left">
                            <span id="customServiceLabel" class="truncate">Cuci Kering Setrika Express — Rp 15.000/kg (6 Jam)</span>
                        </button>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500">
                            <i class="fa-solid fa-chevron-down text-[10px] leading-none transition-transform duration-200" id="customServiceChevron"></i>
                        </div>

                        <div id="customServiceMenu" class="hidden absolute top-full left-0 right-0 mt-1.5 z-50 bg-white rounded-2xl border border-slate-200 shadow-2xl p-2 max-h-72 overflow-y-auto space-y-2">
                            <div class="space-y-1">
                                <div class="bg-sky-600 text-white font-bold text-xs px-3 py-1.5 rounded-lg flex items-center gap-1.5 shadow-2xs">
                                    <span class="text-xs">🧺</span>
                                    <span>Paket Cuci Kiloan</span>
                                </div>
                                <div class="space-y-0.5 pt-0.5">
                                    @foreach($services->where('unit', 'kg') as $svc)
                                        <div class="custom-service-option px-3 py-2 rounded-xl text-xs font-medium cursor-pointer transition-colors flex items-center justify-between {{ (request('service') == $svc->id || (!request('service') && $svc->id == 2)) ? 'bg-sky-50 text-sky-800 font-bold' : 'text-slate-800 hover:bg-slate-50' }}"
                                             data-id="{{ $svc->id }}"
                                             onclick="selectCustomService('{{ $svc->id }}')">
                                            <div class="truncate pr-2">
                                                <span>{{ $svc->name }}</span>
                                                <span class="text-slate-500 font-normal">&bull; {{ $svc->duration_hours }} Jam</span>
                                            </div>
                                            <span class="font-bold text-sky-700 whitespace-nowrap">Rp {{ number_format($svc->price, 0, ',', '.') }}/{{ $svc->unit }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="space-y-1 pt-1 border-t border-slate-100">
                                <div class="bg-sky-600 text-white font-bold text-xs px-3 py-1.5 rounded-lg flex items-center gap-1.5 shadow-2xs">
                                    <span class="text-xs">✨</span>
                                    <span>Paket Satuan &amp; Spesialis</span>
                                </div>
                                <div class="space-y-0.5 pt-0.5">
                                    @foreach($services->where('unit', '!=', 'kg') as $svc)
                                        <div class="custom-service-option px-3 py-2 rounded-xl text-xs font-medium cursor-pointer transition-colors flex items-center justify-between {{ request('service') == $svc->id ? 'bg-sky-50 text-sky-800 font-bold' : 'text-slate-800 hover:bg-slate-50' }}"
                                             data-id="{{ $svc->id }}"
                                             onclick="selectCustomService('{{ $svc->id }}')">
                                            <div class="truncate pr-2">
                                                <span>{{ $svc->name }}</span>
                                                <span class="text-slate-500 font-normal">&bull; {{ $svc->duration_hours }} Jam</span>
                                            </div>
                                            <span class="font-bold text-sky-700 whitespace-nowrap">Rp {{ number_format($svc->price, 0, ',', '.') }}/{{ $svc->unit }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div class="space-y-2.5 bg-slate-50 p-3.5 sm:p-4 rounded-xl border border-slate-200/80">
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

<div class="space-y-2">
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                        Pilih Aroma Parfum Premium (Gratis Termasuk Paket)
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2" id="perfumeSelector">
                        @foreach($perfumes as $pf)
                            <label class="perfume-radio-card flex items-center gap-2.5 p-2.5 sm:p-3 rounded-xl border border-slate-200 bg-white hover:border-sky-300 hover:bg-sky-50/30 cursor-pointer transition-all {{ $loop->first ? 'ring-2 ring-sky-500 border-sky-500 bg-sky-50/20' : '' }}">
                                <input type="radio" name="selectedPerfume" value="{{ $pf->name }}" {{ $loop->first ? 'checked' : '' }} onchange="selectPerfume('{{ $pf->name }}', this)" class="sr-only">
                                <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 border border-purple-100 flex items-center justify-center text-xs shrink-0">
                                    <i class="fa-solid fa-spray-can"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <span class="block text-xs font-bold text-slate-900 truncate">{{ $pf->name }}</span>
                                    <span class="block text-[11px] text-slate-500 truncate">{{ $pf->aroma_character ?? $pf->karakter_aroma ?? 'Aroma segar tahan lama' }}</span>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

<div class="pt-1.5 border-t border-slate-100">
                    <label class="flex items-center gap-2.5 p-3 rounded-xl border border-emerald-200/70 bg-emerald-50/40 hover:bg-emerald-50/70 cursor-pointer transition-colors">
                        <input type="checkbox" id="pickupDeliveryToggle" onchange="recalculateTotal()" class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500 border-emerald-300">
                        <div class="flex-1">
                            <span class="text-xs font-bold text-slate-900 block">
                                Butuh Antar-Jemput ke Lokasi Anda?
                            </span>
                            <span class="text-[11px] text-slate-600 block mt-0.5">
                                Gratis untuk area Dinoyo & sekitarnya (Radius gerai Jl. MT Haryono).
                            </span>
                        </div>
                    </label>
                </div>
            </div>

<div class="lg:col-span-5 space-y-4 lg:sticky lg:top-24">
                <div class="bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white rounded-2xl border border-sky-800/60 p-5 sm:p-6 space-y-4 shadow-xl relative overflow-hidden">
                    <div class="absolute -top-16 -right-16 w-48 h-48 bg-sky-500/10 rounded-full blur-2xl pointer-events-none"></div>

<div class="flex items-center justify-between border-b border-sky-800/60 pb-3">
                        <div class="space-y-0.5">
                            <span class="text-[10px] uppercase font-bold tracking-wider text-sky-400">Ringkasan Simulasi</span>
                            <h3 class="text-base font-extrabold text-white">Estimasi Tagihan Anda</h3>
                        </div>
                        <span class="px-2.5 py-1 rounded-md bg-emerald-500/20 text-emerald-300 font-bold text-[10px] border border-emerald-500/30 flex items-center gap-1">
                            <i class="fa-solid fa-check"></i> Transparan
                        </span>
                    </div>

<div class="space-y-2 text-xs">
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
                            <span id="summaryPerfume" class="font-semibold text-purple-300">{{ $perfumes->first()->name ?? 'Sakura Blossom' }}</span>
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

<div class="p-3 sm:p-3.5 rounded-xl bg-sky-900/40 border border-sky-700/50 space-y-0.5">
                        <span class="text-[11px] text-slate-300 block">Perkiraan Total Biaya:</span>
                        <div class="text-2xl sm:text-3xl font-black text-emerald-400 font-mono" id="summaryTotalPrice">
                            Rp 30.000
                        </div>
                        <span class="text-[10px] text-slate-400 block">*Biaya final dipastikan saat timbangan fisik di gerai atau saat penjemputan.</span>
                    </div>

<div class="space-y-2 pt-1 flex flex-col w-full">
                        <a id="waOrderButton" 
                           href="#" 
                           target="_blank" 
                           class="w-full inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40 active:scale-[0.99] interactive-btn">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>Pesan via WhatsApp Sekarang</span>
                        </a>
                        <p class="text-[11px] text-center text-slate-400">
                            Rincian simulasi ini akan otomatis terisi di pesan WhatsApp Anda.
                        </p>
                    </div>
                </div>

<div class="p-3.5 sm:p-4 rounded-xl bg-white border border-slate-200/80 space-y-1 text-xs text-slate-600 shadow-sm">
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

<div class="mt-6 sm:mt-8 lg:mt-10 rounded-2xl border border-slate-200/80 bg-white p-5 sm:p-6 space-y-4 shadow-sm">
            <div class="space-y-1">
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                    Panduan Memperkirakan Berat Cucian Kiloan
                </h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    Gunakan panduan rata-rata berat per potong pakaian berikut jika Anda belum memiliki timbangan di rumah atau kamar kos:
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3.5 text-xs">
                <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-sky-300/80 hover:bg-sky-50/20 transition-all duration-200 space-y-1.5">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-lg bg-sky-100/80 text-sky-600 flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <span class="font-bold text-slate-900 truncate">Kaos / T-Shirt</span>
                    </div>
                    <div class="space-y-0.5">
                        <span class="text-sky-700 font-mono font-bold block text-xs">± 150 - 200 gram</span>
                        <span class="text-[11px] text-slate-600 block leading-tight">1 kg muat sekitar 5 - 6 potong</span>
                    </div>
                </div>

                <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-sky-300/80 hover:bg-sky-50/20 transition-all duration-200 space-y-1.5">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-lg bg-blue-100/80 text-blue-600 flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <span class="font-bold text-slate-900 truncate">Celana Jeans</span>
                    </div>
                    <div class="space-y-0.5">
                        <span class="text-sky-700 font-mono font-bold block text-xs">± 500 - 700 gram</span>
                        <span class="text-[11px] text-slate-600 block leading-tight">1 kg muat sekitar 1 - 2 potong</span>
                    </div>
                </div>

                <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-sky-300/80 hover:bg-sky-50/20 transition-all duration-200 space-y-1.5">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-lg bg-indigo-100/80 text-indigo-600 flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <span class="font-bold text-slate-900 truncate">Kemeja / Blus</span>
                    </div>
                    <div class="space-y-0.5">
                        <span class="text-sky-700 font-mono font-bold block text-xs">± 200 - 250 gram</span>
                        <span class="text-[11px] text-slate-600 block leading-tight">1 kg muat sekitar 4 - 5 potong</span>
                    </div>
                </div>

                <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/80 border border-slate-200/80 hover:border-sky-300/80 hover:bg-sky-50/20 transition-all duration-200 space-y-1.5">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-lg bg-amber-100/80 text-amber-600 flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-vest"></i>
                        </div>
                        <span class="font-bold text-slate-900 truncate">Jaket / Hoodie</span>
                    </div>
                    <div class="space-y-0.5">
                        <span class="text-sky-700 font-mono font-bold block text-xs">± 400 - 600 gram</span>
                        <span class="text-[11px] text-slate-600 block leading-tight">1 kg muat sekitar 2 potong</span>
                    </div>
                </div>
            </div>

            <div class="pt-2 border-t border-slate-100 flex items-center gap-2 text-[11px] text-slate-500">
                <i class="fa-solid fa-circle-info text-sky-500 shrink-0"></i>
                <span>Estimasi berat di atas merupakan patokan rata-rata. Penimbangan resmi dihitung presisi dengan timbangan digital saat penjemputan atau di gerai.</span>
            </div>
        </div>
    </section>

</div>

@push('scripts')
<script>
    let currentPerfume = '{{ $perfumes->first()->name ?? "Sakura Blossom" }}';

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

    function closeServiceDropdown() {
        const menu = document.getElementById('customServiceMenu');
        const chevron = document.getElementById('customServiceChevron');
        if (menu) menu.classList.add('hidden');
        if (chevron) chevron.classList.remove('rotate-180');
    }

    function toggleServiceDropdown() {
        const menu = document.getElementById('customServiceMenu');
        const chevron = document.getElementById('customServiceChevron');
        if (!menu) return;
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            if (chevron) chevron.classList.add('rotate-180');
        } else {
            menu.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }
    }

    function selectCustomService(serviceId) {
        const select = document.getElementById('calcService');
        if (select) {
            select.value = serviceId;
            updateServiceDetails();
        }
        syncCustomServiceDropdown();
        closeServiceDropdown();
    }

    function syncCustomServiceDropdown() {
        const select = document.getElementById('calcService');
        const label = document.getElementById('customServiceLabel');
        if (!select || !label) return;
        const opt = select.options[select.selectedIndex];
        if (opt) {
            label.innerHTML = opt.text;
        }
        document.querySelectorAll('.custom-service-option').forEach(el => {
            if (el.getAttribute('data-id') === select.value) {
                el.className = 'custom-service-option px-3 py-2 rounded-xl text-xs font-bold cursor-pointer transition-colors flex items-center justify-between bg-sky-50 text-sky-800';
            } else {
                el.className = 'custom-service-option px-3 py-2 rounded-xl text-xs font-medium cursor-pointer transition-colors flex items-center justify-between text-slate-800 hover:bg-slate-50';
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateServiceDetails();
        syncCustomServiceDropdown();

        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('customServiceDropdown');
            if (dropdown && !dropdown.contains(e.target)) {
                closeServiceDropdown();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeServiceDropdown();
            }
        });
    });
</script>
@endpush
@endsection
