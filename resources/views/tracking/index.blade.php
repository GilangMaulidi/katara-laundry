@extends('layouts.public')

@section('title', 'Katara Laundry Dinoyo Malang - Bersih, Higienis & Lacak Real-Time')

@section('content')
<div class="space-y-8 sm:space-y-10 pb-8 sm:pb-10">

<section class="relative bg-white text-slate-800 pt-4 pb-8 sm:pt-6 sm:pb-10 border-b border-slate-200">
        <div class="site-container relative z-10 space-y-6 sm:space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
                
<div class="lg:col-span-7 space-y-4 sm:space-y-5 reveal-left flex flex-col">

<h1 class="heading-hero font-extrabold tracking-tight text-slate-800 leading-tight">
                        Laundry Bersih &amp; Higienis, <br class="hidden sm:inline">
                        <span class="text-sky-500">1 Mesin 1 Pelanggan</span> Tanpa Campur.
                    </h1>

<p class="body-lead text-slate-600 max-w-2xl leading-relaxed font-normal">
                        Solusi cuci pakaian terpercaya untuk mahasiswa dan warga Dinoyo. Setiap nota diproses di drum mesin sendiri, dikeringkan mesin gas dryer 100% tuntas bebas bau apek di segala cuaca, disetrika uap boiler presisi, dan dapat Anda pantau statusnya hingga masuk rak secara mandiri.
                    </p>

<div class="flex flex-wrap items-center justify-center gap-2 pt-1.5">
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20saya%20ingin%20pants%20laundry%20antar-jemput" target="_blank" class="inline-flex items-center justify-center gap-2 h-10 sm:h-11 min-w-[180px] px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm shadow-sm transition-all interactive-btn border border-emerald-500/40">
                            <i class="fa-brands fa-whatsapp text-sm sm:text-base"></i>
                            <span>Pesan via WhatsApp</span>
                        </a>
                        <a href="#layanan" class="inline-flex items-center justify-center gap-2 h-10 sm:h-11 min-w-[180px] px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs sm:text-sm transition-all interactive-btn shadow-sm border border-slate-700">
                            <i class="fa-solid fa-list-ul text-sky-400 text-xs sm:text-sm"></i>
                            <span>Lihat Katalog &amp; Tarif</span>
                        </a>
                    </div>
                    <div class="border-t border-slate-200"></div>

<div id="lacak" class="scroll-mt-28 relative rounded-2xl sm:rounded-3xl transition-all duration-300 space-y-0 overflow-hidden">
<div class="relative z-10 flex flex-wrap items-center justify-between gap-1 border-b border-slate-100 py-0 px-1">
                            <div class="flex items-center gap-1">
                                <div>
                                    <div class="flex items-center gap-1">
                                        <span class="hidden sm:inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-1 py-0.5 rounded-full border border-emerald-200 leading-none">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            Live Tracking
                                        </span>
                                    </div>
                                    <h2 class="text-base sm:text-lg font-black text-slate-900 tracking-tight leading-snug">
                                        Lacak Status Pakaian Anda
                                    </h2>
                                </div>
                            </div>

<button type="button" 
                                    onclick="openDemoModal()" 
                                    class="group inline-flex items-center gap-1 px-2 sm:px-2.5 py-0.5 rounded-md bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 text-[10px] sm:text-[11px] font-bold transition-all shadow-sm active:scale-95 shrink-0"
                                    title="Lihat simulasi visual alur pengerjaan pakaian">
                                <span class="w-3.5 h-3.5 rounded-full bg-sky-600 text-white flex items-center justify-center text-[8px] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-play ml-0.5 text-[7px]"></i>
                                </span>
                                <span>Demo Alur</span>
                            </button>
                        </div>

<form action="{{ route('tracking.search') }}" method="POST" class="relative z-10 space-y-2">
                            @csrf
                            <div class="flex flex-col sm:flex-row gap-2 items-stretch">
                                <div class="relative flex-1 group">
                                    <div class="absolute left-3.5 top-1/2 -translate-y-1/2 flex items-center gap-1.5 text-slate-400 group-focus-within:text-brand-600 transition-colors pointer-events-none">
                                        <i class="fa-solid fa-magnifying-glass text-xs sm:text-sm"></i>
                                    </div>
                                    <input type="text" 
                                           name="invoice_number" 
                                           id="invoiceInput"
                                           value="{{ old('invoice_number') }}" 
                                           placeholder="Nomor Nota (KTR-...) atau Nomor WhatsApp" 
                                           required 
                                           class="w-full pl-10 pr-20 sm:pr-24 h-11 sm:h-11 rounded-xl bg-white text-slate-900 placeholder-slate-400 text-xs sm:text-sm font-semibold border-2 border-slate-200 focus:outline-none focus:bg-white focus:border-brand-500 focus:ring-4 focus:ring-brand-500/15 transition-all shadow-sm">
                                    <div class="absolute right-2.5 top-1/2 -translate-y-1/2 flex items-center text-[10px] font-bold text-slate-500 bg-slate-100 px-2 py-1 rounded-md border border-slate-200 pointer-events-none">
                                        <i class="fa-solid fa-barcode text-slate-400 mr-1 hidden sm:inline"></i>
                                        <i class="fa-brands fa-whatsapp text-emerald-600 mr-1"></i> Nota / WA
                                    </div>
                                </div>
                                <button type="submit" 
                                        class="h-10 sm:h-11 min-w-[180px] px-4 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-xs sm:text-sm font-extrabold tracking-wide transition-all duration-200 flex items-center justify-center gap-2 shrink-0 shadow-md hover:shadow-lg active:scale-[0.98] group">
                                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                                    <span>Lacak Sekarang</span>
                                    <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                </button>
                            </div>

<div class="flex flex-wrap items-center gap-8 pt-1 pb-3">
                                <span class="text-[11px] font-bold text-slate-500 flex items-center gap-1 shrink-0">
                                    <i class="fa-regular fa-lightbulb text-amber-500"></i> Contoh Cepat:
                                </span>
                                <button type="button" 
                                        onclick="fillInvoiceInput('KTR-20260906-0001')" 
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-white hover:bg-brand-50 hover:text-brand-700 hover:border-brand-300 text-slate-700 text-[11px] font-mono font-bold border border-slate-200 shadow-xs transition-all cursor-pointer"
                                        title="Klik untuk mengisi nomor nota contoh">
                                    <span>KTR-20260906-0001</span>
                                    <span class="text-[9px] font-sans font-semibold text-emerald-700 bg-emerald-50 px-1.5 py-0.5 rounded border border-emerald-200">Siap Ambil</span>
                                </button>
                                <button type="button" 
                                        onclick="fillInvoiceInput('081298765432')" 
                                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-white hover:bg-brand-50 hover:text-brand-700 hover:border-brand-300 text-slate-700 text-[11px] font-mono font-bold border border-slate-200 shadow-xs transition-all cursor-pointer"
                                        title="Klik untuk mengisi nomor WhatsApp pelanggan contoh">
                                    <i class="fa-brands fa-whatsapp text-emerald-600 text-xs"></i>
                                    <span>081298765432</span>
                                </button>
                            </div>
                        </form>

                        @if(session('error'))
                            <div class="relative z-10 p-3 sm:p-3.5 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs flex items-start sm:items-center justify-between gap-3 shadow-xs">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-6 h-6 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 text-xs">
                                        <i class="fa-solid fa-circle-exclamation"></i>
                                    </div>
                                    <span class="font-medium leading-relaxed">{{ session('error') }}</span>
                                </div>
                                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Katara,%20saya%20ingin%20tanya%20status%20cucian%20saya" target="_blank" class="shrink-0 text-[11px] font-bold text-rose-700 hover:text-rose-900 underline flex items-center gap-1">
                                    <i class="fa-brands fa-whatsapp"></i> Bantuan CS
                                </a>
                            </div>
                        @endif

<div class="relative z-10 grid grid-cols-1 sm:grid-cols-3 gap-1 pt-0 border-t border-slate-100">
                            <div class="flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                                <div class="w-6 h-6 rounded-md bg-emerald-50 text-emerald-600 flex items-center justify-center text-[10px] shrink-0 border border-emerald-100">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </div>
                                <div class="leading-[1.05]">
                                    <span class="text-[10px] font-bold text-slate-800 block leading-[1.15]">Status Real-Time</span>
                                    <span class="text-[9px] text-slate-500 font-medium leading-[1.15] block">Update tiap fase pengerjaan</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                                <div class="w-6 h-6 rounded-md bg-sky-50 text-sky-600 flex items-center justify-center text-[10px] shrink-0 border border-sky-100">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div class="leading-[1.05]">
                                    <span class="text-[10px] font-bold text-slate-800 block leading-[1.15]">Nomor Rak Khusus</span>
                                    <span class="text-[9px] text-slate-500 font-medium leading-[1.15] block">Pengambilan cepat tanpa cari</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                                <div class="w-6 h-6 rounded-md bg-amber-50 text-amber-600 flex items-center justify-center text-[10px] shrink-0 border border-amber-100">
                                    <i class="fa-solid fa-bolt-lightning"></i>
                                </div>
                                <div class="leading-[1.05]">
                                    <span class="text-[10px] font-bold text-slate-800 block leading-[1.15]">Langsung Tanpa Akun</span>
                                    <span class="text-[9px] text-slate-500 font-medium leading-[1.15] block">Cukup nomor nota atau WA</span>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-1.5 text-xs text-slate-600 pt-2">
                        <div class="flex items-center gap-1.5">
                            <div class="flex text-amber-500 text-xs">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <span class="font-bold text-slate-900">4.9/5</span>
                            <span class="text-slate-500 font-medium">(1.200+ Ulasan Google)</span>
                        </div>
                        <span class="text-slate-300 hidden sm:inline">&bull;</span>
                        <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                            <i class="fa-solid fa-shield text-sky-600"></i>
                            <span>SOP 1 Mesin 1 Pelanggan</span>
                        </div>
                        <span class="text-slate-300 hidden sm:inline">&bull;</span>
                        <div class="flex items-center gap-1.5 text-slate-700 font-medium">
                            <i class="fa-solid fa-truck text-emerald-600"></i>
                            <span>Antar-Jemput Dinoyo</span>
                        </div>
                    </div>
                </div>

<div class="lg:col-span-5 relative reveal-right flex flex-col">
                    <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-xl bg-white flex flex-col h-full">
                        <div class="relative flex-1">
                            <img src="{{ asset('images/laundry-hero.jpg') }}" 
                                 alt="Gerai Modern Katara Laundry Dinoyo Malang" 
                                 class="w-full h-full object-cover object-center">
                            
<div class="absolute top-3.5 left-3.5 right-3.5 sm:right-auto px-3 py-1.5 rounded-lg bg-slate-800 border border-slate-700 text-white text-[10.5px] sm:text-[11px] shadow-md flex items-center gap-1.5 whitespace-nowrap overflow-hidden text-ellipsis">
                                <i class="fa-solid fa-location-dot text-rose-400 shrink-0 text-[11px]"></i>
                                <span class="font-bold text-white">Katara Laundry Dinoyo</span>
                                <span class="text-slate-400">&bull;</span>
                                <span class="text-slate-300 font-normal">Jl. MT. Haryono, Lowokwaru, Kota Malang</span>
                            </div>
                        </div>

<div class="p-3 sm:p-4 bg-white border-t border-slate-200 text-slate-800 flex flex-col sm:flex-row items-center justify-between gap-2.5 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-bold text-slate-500 uppercase">Buka:</span>
                                <span class="text-[11px] font-medium text-slate-700">Senin - Sabtu: 07.00 - 21.00 WIB</span>
                                <span class="text-slate-300">&bull;</span>
                                <span class="text-[11px] font-medium text-slate-700">Minggu: 08.00 - 20.00 WIB</span>
                            </div>
                            <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="inline-flex items-center justify-center gap-1.5 px-3 py-1.5 rounded-lg bg-sky-50 hover:bg-sky-100 text-sky-700 text-[11px] font-bold border border-sky-200 shrink-0 transition-colors">
                                <i class="fa-solid fa-map-location-dot text-sky-600 text-xs"></i>
                                <span>Lokasi</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="site-container -mt-4 sm:-mt-6 relative z-20">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3 sm:gap-3 divide-y sm:divide-y-0 sm:divide-x divide-slate-200 text-center reveal-up">

                <div class="pt-2 sm:pt-0 sm:px-1 space-y-0.5">
                    <div class="text-slate-900 text-lg sm:text-xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-star text-amber-500 text-sm sm:text-base"></i>
                        <span>4.9 / 5.0</span>
                    </div>
                    <p class="text-[11px] font-bold text-amber-700">Rating Google Maps</p>
                    <p class="text-[10px] text-slate-500 font-medium">1.200+ ulasan terverifikasi</p>
                </div>

                <div class="pt-2 sm:pt-0 sm:px-1 space-y-0.5">
                    <div class="text-slate-900 text-lg sm:text-xl font-black">
                        <span class="counter-number text-slate-900" data-target="5000">5.000</span>+
                    </div>
                    <p class="text-[11px] font-bold text-sky-700">Pakaian Bersih / Bulan</p>
                    <p class="text-[10px] text-slate-500 font-medium">Kapasitas mesin industri</p>
                </div>

                <div class="pt-2 sm:pt-0 sm:px-1 space-y-0.5">
                    <div class="text-slate-900 text-lg sm:text-xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-fire text-orange-500 text-sm sm:text-base"></i>
                        <span>100% Kering</span>
                    </div>
                    <p class="text-[11px] font-bold text-orange-700">Gas Dryer Suhu Optimal</p>
                    <p class="text-[10px] text-slate-500 font-medium">Bebas apek di musim hujan</p>
                </div>

                <div class="pt-2 sm:pt-0 sm:px-1 space-y-0.5">
                    <div class="text-slate-900 text-lg sm:text-xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-boxes-stacked text-sky-600 text-sm sm:text-base"></i>
                        <span>45 Slot Rak</span>
                    </div>
                    <p class="text-[11px] font-bold text-indigo-700">Penyimpanan Terdata</p>
                    <p class="text-[10px] text-slate-500 font-medium">Sistem rak fisik transparan</p>
                </div>

                <div class="pt-2 sm:pt-0 sm:px-1 space-y-0.5 col-span-2 md:col-span-1">
                    <div class="text-emerald-600 text-lg sm:text-xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-truck text-sm sm:text-base"></i>
                        <span>Antar-Jemput</span>
                    </div>
                    <p class="text-[11px] font-bold text-emerald-700">Kawasan Dinoyo</p>
                    <p class="text-[10px] text-slate-500 font-medium">Kos & perumahan sekitar</p>
                </div>
            </div>
        </div>
    </div>

<section class="site-container space-y-6 sm:space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-5 space-y-4 reveal-left">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 border border-sky-200 text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-shield-halved text-sky-500"></i>
                    <span>SOP & Standar Kebersihan</span>
                </span>
                <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                    Mengapa Katara Laundry Menjadi Pilihan Terpercaya?
                </h2>
                <p class="body-lead text-slate-600 leading-relaxed font-normal">
                    Banyak laundry mencampur cucian dari beberapa pelanggan dalam satu drum untuk menghemat deterjen dan listrik. Di Katara, kami mengutamakan kebersihan dan kenyamanan Anda dengan SOP ketat yang jelas.
                </p>

<div class="rounded-2xl overflow-hidden border border-slate-200 shadow-md relative group bg-white">
                    <img src="{{ asset('images/laundry-washers.jpg') }}" 
                         alt="Deretan Mesin Cuci Komersial Katara Laundry Dinoyo" 
                         class="w-full aspect-[16/10] object-cover">
                    <div class="p-3 bg-slate-900 text-white flex items-center justify-between text-xs">
                        <span class="font-semibold text-xs">Drum Stainless Steel Komersial</span>
                        <span class="text-[10px] text-emerald-400 font-bold bg-emerald-500/20 px-2 py-0.5 rounded border border-emerald-500/30">1 Mesin 1 Pelanggan</span>
                    </div>
                </div>
                
                <div class="space-y-2.5 pt-1 text-xs">
                    <div class="flex items-center gap-3 p-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 shadow-xs">
                        <i class="fa-solid fa-shield-check text-emerald-600 text-base shrink-0"></i>
                        <span class="font-semibold">Garansi Cuci Ulang 100% Gratis Jika Kurang Bersih / Kurang Rapi</span>
                    </div>
                    <div class="flex items-center gap-3 p-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 shadow-xs">
                        <i class="fa-solid fa-clock-rotate-left text-sky-600 text-base shrink-0"></i>
                        <span class="font-semibold">Estimasi Selesai Tepat Waktu dengan Notifikasi WhatsApp Otomatis</span>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="https://wa.me/6281234567890?text=Halo%20Katara,%20saya%20mau%20konsultasi%20paket%20laundry%20saya" target="_blank" class="inline-flex items-center justify-center gap-2 h-9 sm:h-10 px-4 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-bold text-xs transition-colors interactive-btn shadow-sm shadow-brand-500/20">
                        <span>Konsultasi Cucian</span>
                        <i class="fa-solid fa-arrow-right text-xs text-sky-200"></i>
                    </a>
                </div>
            </div>

<div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 reveal-right">
<div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-3 interactive-card" data-delay="0">
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-base">
                        <i class="fa-solid fa-drum"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">1 Mesin 1 Pelanggan</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Pakaian Anda dicuci sendiri di mesin cuci tanpa pernah dicampur dengan cucian pelanggan lain. Higienis dan bebas dari risiko tertukar.
                    </p>
                </div>

<div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-3 interactive-card" data-delay="80">
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-base">
                        <i class="fa-solid fa-wind"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Gas Dryer 100% Kering</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Mesin pengering komersial bersuhu terkontrol membasmi kuman dan tungau. Pakaian kering tuntas tanpa perlu dijemur di pinggir jalan.
                    </p>
                </div>

<div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-3 interactive-card" data-delay="160">
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-base">
                        <i class="fa-solid fa-spray-can"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Deterjen Enzim & 5 Parfum</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Deterjen cair ramah serat kain yang menjaga warna baju tidak pudar. Bebas pilih 5 aroma parfum grade premium yang awet di lemari.
                    </p>
                </div>

<div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-3 interactive-card" data-delay="240">
                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-base">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-base">Sistem 45 Slot Rak Fisik</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Pakaian yang sudah rapi disimpan di rak bernomor (A-01 s.d. E-09). Status penempatan tercatat di web sehingga nota Anda tidak tercecer.
                    </p>
                </div>
            </div>
        </div>
    </section>

<section id="layanan" class="py-10 sm:py-12 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="site-container space-y-6 sm:space-y-8">
<div class="text-center max-w-2xl mx-auto space-y-2 reveal-up">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                    <i class="fa-solid fa-tags text-sky-500"></i>
                    <span>Daftar Harga Resmi</span>
                </span>
                <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                    Katalog Layanan & Tarif Katara Laundry
                </h2>
                <p class="body-lead text-slate-600">
                    Tarif jujur, tertera jelas per kilogram atau per satuan tanpa biaya terselubung.
                </p>

<div class="inline-flex p-1 rounded-xl bg-white border border-slate-200 shadow-xs mt-3 gap-1">
                    <button type="button" onclick="filterServices('all')" id="btn-tab-all" class="service-tab-btn active px-3.5 h-9 rounded-lg text-xs font-bold transition-all bg-brand-600 text-white shadow-xs inline-flex items-center justify-center">
                        Semua Layanan
                    </button>
                    <button type="button" onclick="filterServices('kiloan')" id="btn-tab-kiloan" class="service-tab-btn px-3.5 h-9 rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-slate-100 inline-flex items-center justify-center">
                        Kiloan
                    </button>
                    <button type="button" onclick="filterServices('satuan')" id="btn-tab-satuan" class="service-tab-btn px-3.5 h-9 rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-slate-100 inline-flex items-center justify-center">
                        Satuan & Bedcover
                    </button>
                </div>
            </div>

@php
                $serviceImages = [
                    1 => 'images/service-kiloan.jpg',
                    2 => 'images/service-kiloan.jpg',
                    3 => 'images/service-express.jpg',
                    4 => 'images/laundry-folded.jpg',
                    5 => 'images/laundry-ironing.jpg',
                    6 => 'images/laundry-special-care.jpg',
                    7 => 'images/laundry-special-care.jpg',
                    8 => 'images/laundry-folded.jpg',
                    9 => 'images/service-express.jpg',
                    10 => 'images/service-shoes.jpg',
                    11 => 'images/laundry-washers.jpg',
                    12 => 'images/laundry-special-care.jpg',
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                @foreach($services as $idx => $svc)
                    @php
                        $isPopular = ($svc->id == 2 || $loop->iteration == 2);
                        $direction = ($idx % 3 === 0) ? 'reveal-left' : (($idx % 3 === 1) ? 'reveal-up' : 'reveal-right');
                        $delay = ($idx % 3 === 1 ? 60 : 0);
                    @endphp

                    <div class="service-card {{ $direction }} interactive-card bg-white rounded-2xl border {{ $isPopular ? 'border-sky-400 shadow-md ring-1 ring-sky-400/30' : 'border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300' }} flex flex-col justify-between relative overflow-hidden group" 
                         data-category="{{ $svc->category }}" 
                         data-delay="{{ $delay }}">
                        
<div class="relative aspect-[16/10] sm:aspect-[16/9] w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset($serviceImages[$svc->id] ?? 'images/service-kiloan.jpg') }}" 
                                 alt="{{ $svc->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                            
                            
<div class="absolute top-3 left-3 px-2.5 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-white text-sky-700 border border-slate-200 shadow-xs">
                                {{ $svc->category }}
                            </div>

                            @if($isPopular)
                                <div class="absolute top-3 right-3 bg-brand-600 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md shadow-sm">
                                    Favorit Pelanggan
                                </div>
                            @endif

                            <div class="absolute bottom-2.5 left-3 right-3 flex items-center justify-between text-white">
                                <span class="flex items-center gap-1.5 text-[11px] font-medium text-slate-100">
                                    <i class="fa-regular fa-clock text-sky-300"></i>
                                    <span>{{ $svc->duration_hours }} Jam</span>
                                </span>
                                <span class="font-extrabold text-sm text-white drop-shadow-sm">
                                    Rp {{ number_format($svc->price, 0, ',', '.') }}<span class="text-[11px] text-slate-200 font-normal">/{{ $svc->unit }}</span>
                                </span>
                            </div>
                        </div>

<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-2">
                                <h3 class="font-extrabold text-slate-900 text-base group-hover:text-sky-600 transition-colors">
                                    {{ $svc->name }}
                                </h3>
                                <p class="text-xs text-slate-600 leading-relaxed font-normal line-clamp-2">
                                    {{ $svc->description ?? 'Diproses higienis 1 mesin 1 pelanggan dengan deterjen premium dan setrika uap boiler.' }}
                                </p>
                            </div>

                            <div class="pt-2 flex items-center justify-between text-xs text-slate-500 border-t border-slate-100">
                                <span>Min. order {{ number_format($svc->min_order, 0) }} {{ $svc->unit }}</span>
                                <span class="text-emerald-600 font-bold flex items-center gap-1 text-[11px]">
                                    <i class="fa-solid fa-check"></i> Termasuk Parfum
                                </span>
                            </div>

                            <div class="pt-1">
                                <a href="#kalkulator" 
                                   onclick="document.getElementById('calcService').value='{{ $svc->id }}'; recalculateEstimate();"
                                   class="w-full h-9 rounded-xl {{ $isPopular ? 'bg-brand-600 hover:bg-brand-700 text-white shadow-xs' : 'bg-slate-50 hover:bg-sky-50 text-slate-700 hover:text-sky-700 border border-slate-200' }} font-bold text-xs transition-colors flex items-center justify-center gap-2 interactive-btn">
                                    <span>Hitung di Simulator</span>
                                    <i class="fa-solid fa-calculator text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

<div class="rounded-2xl overflow-hidden border border-slate-200 bg-white p-5 sm:p-6 grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-center shadow-sm reveal-up">
                <div class="lg:col-span-5 rounded-xl overflow-hidden border border-slate-200 shadow-xs">
                    <img src="{{ asset('images/laundry-special-care.jpg') }}" 
                         alt="Spesialis Perawatan Bedcover & Sepatu Katara Laundry" 
                         class="w-full aspect-[4/3] object-cover">
                </div>
                <div class="lg:col-span-7 space-y-3.5">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                        <i class="fa-solid fa-sparkles text-sky-500"></i>
                        <span>Perawatan Khusus</span>
                    </span>
                    <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                        Spesialis Cuci Bedcover Jumbo, Jas Formal & Sepatu Sneakers
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Bedcover tebal dicuci tanpa membuat dakron menggumpal dan dikeringkan tuntas dengan gas dryer kapasitas besar. Sepatu sneakers dan jas formal diproses secara manual dengan sabun khusus serat agar bentuk dan warnanya tetap terjaga sempurna.
                    </p>
                    <div class="flex flex-wrap gap-2 pt-1 text-xs">
                        <span class="px-3 py-1.5 rounded-lg bg-slate-50 text-slate-700 font-semibold border border-slate-200">Bedcover King Rp 25.000</span>
                        <span class="px-3 py-1.5 rounded-lg bg-slate-50 text-slate-700 font-semibold border border-slate-200">Sepatu Sneakers Rp 25.000</span>
                        <span class="px-3 py-1.5 rounded-lg bg-slate-50 text-slate-700 font-semibold border border-slate-200">Jas Formal Stel Rp 30.000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="site-container space-y-6 sm:space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<div class="lg:col-span-5 relative reveal-left">
                <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200 bg-white">
                    <img src="{{ asset('images/laundry-ironing.jpg') }}" 
                         alt="Proses Setrika Uap Boiler Industri Katara Laundry" 
                         class="w-full aspect-[4/3] sm:aspect-[16/10] lg:h-[400px] object-cover object-center">
                    
                    <div class="p-4 bg-slate-900 text-white flex items-center justify-between text-xs">
                        <div>
                            <span class="font-bold text-sm block">Setrika Uap Boiler Industri</span>
                            <span class="text-slate-400 text-[11px] block">Panas merata tanpa risiko pakaian mengkilap / terbakar</span>
                        </div>
                        <span class="px-2.5 py-1 rounded-md bg-emerald-500/20 text-emerald-300 font-bold text-[10px] border border-emerald-500/30">
                            Presisi
                        </span>
                    </div>
                </div>
            </div>

<div class="lg:col-span-7 space-y-4 reveal-right">
                <div class="space-y-1.5">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 border border-sky-200 text-xs font-bold uppercase tracking-wider">
                        <i class="fa-solid fa-wand-magic-sparkles text-sky-500"></i>
                        <span>Dedikasi Mutu</span>
                    </span>
                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Standar Pengerjaan Katara Laundry
                    </h2>
                    <p class="body-lead text-slate-600">
                        Kami tidak mengambil jalan pintas. Setiap detail proses disiapkan agar pakaian kesayangan Anda tetap bersih, terawat, dan awet.
                    </p>
                </div>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-sm flex items-start gap-4 hover:border-sky-300 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center shrink-0 text-base font-bold border border-sky-100">
                            1
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="font-bold text-slate-900 text-sm">Air Bersih Terfiltrasi</h4>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Menggunakan sistem filter air bebas sedimen kapur. Mencegah kemeja atau kaos putih menguning akibat endapan air kotor.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-sm flex items-start gap-4 hover:border-sky-300 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center shrink-0 text-base font-bold border border-sky-100">
                            2
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="font-bold text-slate-900 text-sm">Deterjen Cair Ramah Serat Kain</h4>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Deterjen cair berkualitas tinggi dengan busa mudah dibilas tuntas, bebas butiran serbuk deterjen yang dapat memicu iritasi kulit.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-white border border-slate-200 shadow-sm flex items-start gap-4 hover:border-sky-300 transition-all">
                        <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center shrink-0 text-base font-bold border border-sky-100">
                            3
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="font-bold text-slate-900 text-sm">Setrika Uap Boiler Industri</h4>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Uap panas menembus ke dalam serat kain tanpa kontak langsung tapak besi, mencegah kain mengkilap atau berisiko gosong.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="kalkulator" class="site-container scroll-mt-24">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xl p-5 sm:p-7">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
<div class="lg:col-span-7 space-y-4 sm:space-y-5 reveal-left">
                    <div class="space-y-1.5">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-bold uppercase tracking-wider border border-amber-200">
                            <i class="fa-solid fa-calculator text-amber-500"></i>
                            <span>Simulator Biaya Online</span>
                        </span>
                        <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                            Simulasi Perhitungan Cucian Anda
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600">
                            Ketahui estimasi total biaya dan perkiraan waktu siap ambil sebelum mengirim pakaian Anda.
                        </p>
                    </div>

                    <div class="space-y-3.5">
<div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-brand-600 text-white text-[10px] font-bold flex items-center justify-center">1</span>
                                <span>Pilih Layanan</span>
                            </label>
                            <select id="calcService" onchange="recalculateEstimate()" class="w-full px-4 py-3 min-h-[44px] rounded-xl bg-slate-50 text-slate-900 border border-slate-300 text-xs sm:text-sm font-semibold focus:outline-none focus:bg-white focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 transition-all">
                                @foreach($services as $svc)
                                    <option value="{{ $svc->id }}" 
                                            data-name="{{ $svc->name }}"
                                            data-price="{{ $svc->price }}" 
                                            data-duration="{{ $svc->duration_hours }}" 
                                            data-hours="{{ $svc->duration_hours }}" 
                                            data-unit="{{ $svc->unit }}" 
                                            data-min="{{ $svc->min_order }}"
                                            {{ $loop->iteration == 2 ? 'selected' : '' }}>
                                        {{ $svc->name }} &bull; Rp {{ number_format($svc->price, 0, ',', '.') }}/{{ $svc->unit }} ({{ $svc->duration_hours }} Jam)
                                    </option>
                                @endforeach
                            </select>
                        </div>

<div class="space-y-2 bg-slate-50 p-4 rounded-xl border border-slate-200">
                            <div class="flex items-center justify-between">
                                <label class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                    <span class="w-5 h-5 rounded-full bg-brand-600 text-white text-[10px] font-bold flex items-center justify-center">2</span>
                                    <span id="calcQtyLabel">Estimasi Berat Cucian</span>
                                </label>
                                <span class="text-sm font-extrabold text-slate-900 bg-white px-3 py-1 rounded-lg border border-slate-200 shadow-2xs" id="calcWeightLabel">
                                    3.0 kg
                                </span>
                            </div>
                            <input type="range" id="calcWeight" min="1" max="25" step="0.5" value="3.0" oninput="recalculateEstimate()" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-600 border border-slate-300">
                            <div class="flex justify-between text-[10px] text-slate-500 font-medium">
                                <span>1 kg (~ 4 kemeja)</span>
                                <span>5 kg (~ 1 bakul pakaian)</span>
                                <span>15+ kg (borongan kos)</span>
                            </div>
                        </div>

<div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-brand-600 text-white text-[10px] font-bold flex items-center justify-center">3</span>
                                <span>Pilihan Parfum Gratis</span>
                            </label>
                            <select id="calcPerfume" onchange="recalculateEstimate()" class="w-full px-4 py-3 min-h-[44px] rounded-xl bg-slate-50 text-slate-900 border border-slate-300 text-xs sm:text-sm font-semibold focus:outline-none focus:bg-white focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 transition-all">
                                @foreach($perfumes as $pf)
                                    <option value="{{ $pf->name }}">
                                        {{ $pf->name }} &bull; {{ $pf->aroma_character }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

<div class="lg:col-span-5 reveal-right">
                    <div class="bg-slate-900 rounded-2xl p-6 text-white shadow-xl space-y-4 border border-slate-800">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-800">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-receipt text-sky-400"></i>
                                <span class="text-xs font-bold uppercase tracking-wider text-white">Rincian Estimasi</span>
                            </div>
                            <span class="px-2 py-0.5 rounded bg-slate-800 text-sky-300 border border-slate-700 text-[10px] font-bold">1 Mesin 1 Nota</span>
                        </div>

                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between text-slate-300">
                                <span>Perhitungan:</span>
                                <span class="font-semibold text-white" id="calcPriceDetails">3.0 kg x Rp 7.000</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>Durasi Kerja:</span>
                                <span class="font-semibold text-white" id="calcDurationText">24 Jam (Kilat)</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>Parfum Dipilih:</span>
                                <span class="font-semibold text-sky-300" id="calcPerfumeText">Sakura Blossom</span>
                            </div>
                            <div class="flex justify-between text-slate-300 pt-1 border-t border-slate-800">
                                <span>Perkiraan Selesai:</span>
                                <span class="font-bold text-emerald-400" id="calcReadyTime">Besok, ~ 14.00 WIB</span>
                            </div>
                        </div>

<div class="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-1 text-center">
                            <span class="text-[11px] uppercase font-bold text-slate-300 block">Total Biaya Estimasi</span>
                            <div class="text-2xl sm:text-3xl font-black text-white" id="calcTotalPrice">
                                Rp 21.000
                            </div>
                            <span class="text-[10px] text-slate-400 block" id="calcMinHint">Ditimbang riil saat cucian tiba di gerai</span>
                        </div>

<a href="#" id="calcWaBtn" target="_blank" class="w-full h-10 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-sm transition-all interactive-btn">
                            <i class="fa-brands fa-whatsapp text-base"></i>
                            <span>Pesan via WhatsApp Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="parfum" class="site-container scroll-mt-24 space-y-6 sm:space-y-8">
        <div class="text-center max-w-2xl mx-auto space-y-2 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-spray-can-sparkles text-sky-500"></i>
                <span>Katara Fragrance Bar</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                5 Pilihan Aroma Parfum Pakaian
            </h2>
            <p class="body-lead text-slate-600">
                Formula wangi tahan hingga 14 hari di serat pakaian tanpa meninggalkan noda minyak pada kain.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
<div class="lg:col-span-5 rounded-2xl overflow-hidden shadow-md border border-slate-200 bg-white reveal-left">
                <img src="{{ asset('images/laundry-fragrance.jpg') }}" 
                     alt="Koleksi Aroma Parfum Katara Laundry" 
                     class="w-full aspect-[4/3] sm:aspect-[16/10] lg:h-[440px] object-cover object-center">
                <div class="p-4 bg-slate-900 text-white text-xs">
                    <span class="font-bold text-sm block">100% Bebas Alkohol Keras</span>
                    <span class="text-slate-400 text-[11px] block">Aman untuk kulit sensitif dan pakaian anak-anak</span>
                </div>
            </div>

<div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3.5 reveal-right">
                @php
                    $perfumeNotes = [
                        1 => ['top' => 'Fresh Cherry, White Peach', 'base' => 'Soft Musk, Clean Cotton', 'tag' => 'Floral Lembut'],
                        2 => ['top' => 'Citrus Marine, Ozone', 'base' => 'Cedarwood, Amber', 'tag' => 'Segar Maskulin'],
                        3 => ['top' => 'French Lavender, Bergamot', 'base' => 'Vanilla, Herbal Calming', 'tag' => 'Aromaterapi'],
                        4 => ['top' => 'Sparkling Pear, Jasmine', 'base' => 'Sandalwood, White Lily', 'tag' => 'Mewah Elegan'],
                        5 => ['top' => 'Powdery Rose, Sweet Almond', 'base' => 'Chamomile, Soft Cotton', 'tag' => 'Lembut Bayi'],
                    ];
                @endphp

                @foreach($perfumes as $idx => $pf)
                    @php
                        $notes = $perfumeNotes[$pf->id] ?? ['top' => 'Fresh Essence', 'base' => 'Soft Cotton', 'tag' => 'Pilihan Utama'];
                    @endphp
                    <div class="perfume-card-item interactive-card bg-white rounded-2xl p-4 sm:p-5 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-400 cursor-pointer space-y-2.5 flex flex-col justify-between" 
                         onclick="selectPerfumeCard('{{ $pf->name }}', this)"
                         data-delay="{{ $idx * 60 }}">
                        
                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-full bg-sky-50 text-sky-700 border border-sky-100 text-[10px] font-bold">
                                    {{ $notes['tag'] }}
                                </span>
                                <i class="fa-solid fa-spray-can text-sky-500 text-xs"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm">
                                {{ $pf->name }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                {{ $pf->description }}
                            </p>
                        </div>

                        <div class="space-y-1.5 pt-2.5 border-t border-slate-100 text-[11px] text-slate-500">
                            <div><strong class="text-slate-700 font-semibold">Top:</strong> {{ $notes['top'] }}</div>
                            <div><strong class="text-slate-700 font-semibold">Base:</strong> {{ $notes['base'] }}</div>
                            <div class="flex items-center justify-between text-[11px] pt-1 text-sky-600 font-bold">
                                <span>Pilih di Kalkulator</span>
                                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<section id="cara-pesan" class="py-10 sm:py-12 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="site-container space-y-6 sm:space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-2 reveal-up">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                    <i class="fa-solid fa-list-check text-sky-500"></i>
                    <span>Alur Pengerjaan</span>
                </span>
                <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                    5 Langkah Mudah Mencuci di Katara
                </h2>
                <p class="body-lead text-slate-600">
                    Setiap tahapan tercatat di sistem hingga pakaian aman tersimpan rapi di rak.
                </p>
            </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
<div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-left interactive-card group" data-delay="0">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Drop atau Penjemputan Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-bold text-xs flex items-center justify-center border border-white">
                            01
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-emerald-300">Drop / Pickup</span>
                    </div>
                    <div class="p-4 space-y-1.5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Drop / Pickup</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Bawa cucian kotor ke gerai Dinoyo atau chat WhatsApp untuk penjemputan ke kos/rumah Anda.
                            </p>
                        </div>
                    </div>
                </div>

<div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group" data-delay="60">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="Timbang dan Tagging Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-bold text-xs flex items-center justify-center border border-white">
                            02
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-sky-300">Timbang & Nota</span>
                    </div>
                    <div class="p-4 space-y-1.5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Timbang & Tagging</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Ditimbang terbuka di depan Anda, cetak nota resmi KTR, dan bebas pilih 1 aroma parfum gratis.
                            </p>
                        </div>
                    </div>
                </div>

<div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group" data-delay="120">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Cuci 1 Mesin Sendiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-bold text-xs flex items-center justify-center border border-white">
                            03
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-cyan-300">1 Mesin Sendiri</span>
                    </div>
                    <div class="p-4 space-y-1.5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Cuci 1 Mesin Sendiri</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Dicuci dalam drum terpisah tanpa campur. Deterjen cair enzim membersihkan kotoran secara optimal.
                            </p>
                        </div>
                    </div>
                </div>

<div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group" data-delay="180">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Kering Gas Dryer Bebas Apek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-bold text-xs flex items-center justify-center border border-white">
                            04
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-amber-300">Gas Dryer 100%</span>
                    </div>
                    <div class="p-4 space-y-1.5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Kering Gas Dryer</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Suhu optimal mematikan bakteri dan tungau. Kering tuntas tanpa bau apek cuaca mendung.
                            </p>
                        </div>
                    </div>
                </div>

<div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-right interactive-card group" data-delay="240">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap & Masuk Rak" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-brand-600 text-white font-bold text-xs flex items-center justify-center border border-white">
                            05
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-sky-200">Setrika & Rak</span>
                    </div>
                    <div class="p-4 space-y-1.5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Setrika & Masuk Rak</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Setrika uap boiler presisi, semprot parfum, di-packing rapi, lalu masuk ke slot rak fisik siap diambil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="site-container space-y-6 sm:space-y-8">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 sm:p-7">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
<div class="lg:col-span-5 space-y-4 reveal-left">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                        <i class="fa-solid fa-shield-halved text-sky-500"></i>
                        <span>Komitmen Bersih</span>
                    </span>
                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Standar Kebersihan & Jaminan Bebas Khawatir
                    </h2>
                    <p class="body-lead text-slate-600 leading-relaxed font-normal">
                        Pakaian Anda diperlakukan dengan higienis sejak pertama kali diterima. Jika hasil cucian dirasa kurang bersih atau kurang wangi, kami siap mencuci ulang tanpa biaya tambahan.
                    </p>

<div class="rounded-xl overflow-hidden border border-slate-200 shadow-xs">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Pakaian Terlipat Rapi & Higienis" class="w-full aspect-[16/9] object-cover">
                    </div>

                    <div class="pt-1">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center gap-3">
                            <i class="fa-solid fa-certificate text-sky-600 text-xl shrink-0"></i>
                            <div>
                                <span class="font-bold text-slate-900 text-xs block">Garansi 100% Cuci Ulang Gratis</span>
                                <span class="text-[11px] text-slate-500 block">Klaim mudah dalam 24 jam setelah pengambilan</span>
                            </div>
                        </div>
                    </div>
                </div>

<div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs reveal-right">
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">Mesin Disanitasi Berkala</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Drum mesin cuci dibersihkan dengan desinfektan secara rutin.</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">100% Tidak Pernah Dicampur</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">SOP ketat 1 mesin 1 nota tanpa kompromi.</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">Area Kerja Bersih & Teratur</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Pakaian tidak diletakkan di lantai dan bebas dari paparan debu.</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">Kemasan Plastik Tebal</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Melindungi pakaian dari cipratan air hujan dan debu saat dibawa pulang.</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">Pemeriksaan Saku & Kancing</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Pengecekan teliti agar barang berharga tidak tertinggal di cucian.</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold">Timbangan Digital Tera Resmi</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Berat cucian ditimbang terbuka dan akurat di hadapan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="testimoni" class="site-container scroll-mt-24 space-y-6 sm:space-y-8">
        <div class="text-center max-w-2xl mx-auto space-y-2 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-comment-dots text-sky-500"></i>
                <span>Ulasan Pelanggan</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                Dipercaya Mahasiswa & Warga Dinoyo
            </h2>
            <p class="body-lead text-slate-600">
                Pengalaman nyata dari ribuan pelanggan di kawasan kampus Lowokwaru Kota Malang.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
<div class="reveal-left interactive-card bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between" data-delay="0">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Sebagai anak kos UB yang mager jemur baju pas musim hujan di Malang, Katara penyelamat banget! Gas dryernya beneran kering total tanpa bau apek. Wangi Sakura Blossom-nya tahan berhari-hari!"
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-dimas.jpg') }}" 
                         alt="Foto Dimas Nugroho Mahasiswa UB" 
                         class="w-11 h-11 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Dimas Nugroho</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Mahasiswa Universitas Brawijaya (UB)</p>
                    </div>
                </div>
            </div>

<div class="reveal-up interactive-card bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between" data-delay="80">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Suka banget sama fitur lacak status cucian lewat website ini! Gak perlu bolak-balik chat kasir nanya 'baju saya sudah jadi belum'. Pas statusnya sudah di rak, langsung cus ke gerai."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-siti.jpg') }}" 
                         alt="Foto Siti Anggraini Mahasiswi Polinema" 
                         class="w-11 h-11 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Siti Anggraini</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Mahasiswi Polinema Jurusan Akuntansi</p>
                    </div>
                </div>
            </div>

<div class="reveal-right interactive-card bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between" data-delay="160">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Bedcover king size saya dicuci bersih tanpa gumpalan, wangi Snappy Luxury elegan seperti hotel bintang lima. Sistem rak fisiknya rapi banget, pakaian keluarga gak pernah tertukar."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-rina.jpg') }}" 
                         alt="Foto Rina Puspitasari Warga Dinoyo" 
                         class="w-11 h-11 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Rina Puspitasari</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Warga Perumahan Dinoyo Malang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="galeri" class="site-container scroll-mt-24 space-y-6 sm:space-y-8">
        <div class="text-center max-w-2xl mx-auto space-y-2 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-camera-retro text-sky-500"></i>
                <span>Dokumentasi & Fasilitas</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                Galeri Gerai & Operasional Katara Dinoyo
            </h2>
            <p class="body-lead text-slate-600">
                Lihat langsung standar kebersihan mesin, stasiun setrika uap, dan fasilitas pelayanan kami di Jl. MT. Haryono Dinoyo Malang.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-left interactive-card flex flex-col justify-between" data-delay="0">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-hero.jpg') }}" alt="Tampak Depan Gerai Katara Laundry Dinoyo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Front Desk Gerai
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Gerai Utama Dinoyo</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Area penerimaan, timbangan digital terbuka, dan customer lounge.</p>
                </div>
            </div>

<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between" data-delay="60">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Deretan Drum Mesin Cuci Komersial" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Mesin Komersial
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Drum Cuci Front Load Stainless</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">1 mesin khusus 1 nota pelanggan, higienis disanitasi berkala.</p>
                </div>
            </div>

<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-right interactive-card flex flex-col justify-between" data-delay="120">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Stasiun Setrika Uap Boiler" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Finishing Presisi
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Setrika Uap Boiler Industri</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Uap panas merata melicinkan serat kain tanpa risiko mengkilap.</p>
                </div>
            </div>

<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-left interactive-card flex flex-col justify-between" data-delay="180">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/service-express.jpg') }}" alt="Area Penyerahan & Tagging Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Express & Tagging
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Pengemasan & Siap Ambil</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Plastik proteksi ganda dengan barcode label nota terdata rapi.</p>
                </div>
            </div>

<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between" data-delay="240">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/service-shoes.jpg') }}" alt="Workshop Cuci Sepatu Sneakers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Workshop Sepatu
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Spesialis Sneakers & Canvas</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Pencucian manual dengan pembersih khusus busa dan sikat halus.</p>
                </div>
            </div>

<div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-right interactive-card flex flex-col justify-between" data-delay="300">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Armada Kurir Antar Jemput Dinoyo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-white border border-white shadow-xs">
                        Armada Kurir
                    </span>
                </div>
                <div class="p-4.5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Layanan Antar-Jemput Cepat</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Siap meluncur ke kos dan perumahan di sekitar kampus Dinoyo.</p>
                </div>
            </div>
        </div>
    </section>

<section id="faq" class="site-container-narrow scroll-mt-24 space-y-6 sm:space-y-7">
        <div class="text-center space-y-2 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-circle-question text-sky-500"></i>
                <span>Tanya Jawab</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="body-lead text-slate-600">
                Punya pertanyaan sebelum mencuci? Berikut jawaban ringkas untuk kebutuhan Anda.
            </p>
        </div>

        <div class="space-y-3">
            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-sky-300 reveal-up interactive-card" data-delay="0">
                <button type="button" onclick="toggleFaq(1)" class="w-full p-4 sm:p-5 min-h-[48px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span>Apakah pakaian saya dicampur dengan pakaian pelanggan lain?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-1"></i>
                </button>
                <div id="faq-content-1" class="hidden px-4 sm:px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    <strong class="text-slate-900">Sama sekali tidak!</strong> Katara Laundry menerapkan SOP ketat <em>1 Mesin 1 Pelanggan</em>. Pakaian Anda diproses dalam drum terpisah sejak tahap pencucian, pengeringan, hingga setrika uap demi higienitas maksimal.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-sky-300 reveal-up interactive-card" data-delay="60">
                <button type="button" onclick="toggleFaq(2)" class="w-full p-4 sm:p-5 min-h-[48px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span>Berapa lama estimasi pakaian selesai dicuci?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-2"></i>
                </button>
                <div id="faq-content-2" class="hidden px-4 sm:px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Kami menyediakan 3 pilihan kecepatan: <strong class="text-slate-900">Reguler (48 Jam)</strong>, <strong class="text-slate-900">Kilat (24 Jam)</strong>, dan <strong class="text-slate-900">Express Prioritas (6 Jam)</strong>. Anda dapat memilih paket sesuai kebutuhan waktu Anda saat penimbangan.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-sky-300 reveal-up interactive-card" data-delay="120">
                <button type="button" onclick="toggleFaq(3)" class="w-full p-4 sm:p-5 min-h-[48px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span>Bagaimana cara melacak status pakaian saya secara mandiri?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-3"></i>
                </button>
                <div id="faq-content-3" class="hidden px-4 sm:px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Cukup masukkan nomor nota transaksi Anda (contoh: <code class="text-sky-700 bg-sky-50 px-1.5 py-0.5 rounded border border-sky-200">KTR-20260906-0001</code>) atau nomor WhatsApp yang terdaftar pada form pelacakan di beranda website ini. Anda akan melihat tahapan pengerjaan (cuci, kering, setrika, rak penyimpanan) secara real-time.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-sky-300 reveal-up interactive-card" data-delay="180">
                <button type="button" onclick="toggleFaq(4)" class="w-full p-4 sm:p-5 min-h-[48px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span>Apakah ada layanan antar-jemput cucian di kawasan Dinoyo?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-4"></i>
                </button>
                <div id="faq-content-4" class="hidden px-4 sm:px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Ya, kami melayani antar-jemput pakaian di kawasan Dinoyo, Sigura-gura, Sumbersari, Soekarno-Hatta (Suhat), Tlogomas, dan sekitarnya. Hubungi hotline WhatsApp kami untuk penjadwalan kurir.
                </div>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:border-sky-300 reveal-up interactive-card" data-delay="240">
                <button type="button" onclick="toggleFaq(5)" class="w-full p-4 sm:p-5 min-h-[48px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span>Apakah ada garansi jika hasil cucian kurang bersih?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-5"></i>
                </button>
                <div id="faq-content-5" class="hidden px-4 sm:px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Tentu saja! Jika ada pakaian yang dirasa kurang rapi atau aroma parfum kurang semerbak, Anda berhak mengajukan <strong class="text-slate-900">garansi cuci ulang gratis 100%</strong> maksimal dalam waktu 24 jam setelah pakaian diambil.
                </div>
            </div>
        </div>
    </section>

<section id="lokasi" class="site-container scroll-mt-24">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 sm:p-7">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-center">
<div class="space-y-4 reveal-left">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                            <i class="fa-solid fa-location-dot text-sky-500"></i>
                            <span>Lokasi Strategis</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[11px] font-bold border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>Buka Hari Ini</span>
                        </span>
                    </div>

                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Kunjungi Gerai Katara Dinoyo Malang
                    </h2>
                    <p class="body-lead text-slate-600 leading-relaxed font-normal">
                        Terletak strategis di kawasan Dinoyo Lowokwaru. Sangat mudah dijangkau dari gerbang UB Dinoyo, Kampus UM, Polinema, dan UIN Malang.
                    </p>

                    <div class="space-y-2.5 text-xs">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center shrink-0 border border-rose-200">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Alamat Gerai:</h4>
                                <p class="text-slate-600 mt-0.5 leading-relaxed font-normal">
                                    Jl. MT. Haryono / Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144.
                                </p>
                            </div>
                        </div>

                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-200">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Jam Operasional:</h4>
                                <p class="text-slate-600 mt-0.5 font-normal">
                                    Senin &ndash; Sabtu: <strong class="text-slate-900">07.00 - 21.00 WIB</strong><br>
                                    Minggu / Hari Libur: <strong class="text-slate-900">08.00 - 20.00 WIB</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-2.5 pt-1">
                        <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="inline-flex items-center justify-center gap-2 h-9 sm:h-10 min-w-[170px] px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold transition-all shadow-xs interactive-btn border border-slate-700">
                            <i class="fa-solid fa-diamond-turn-right text-sky-400"></i>
                            <span>Buka di Google Maps</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20posisi%20gerai%20sebelah%20mana%20ya?" target="_blank" class="inline-flex items-center justify-center gap-2 h-9 sm:h-10 min-w-[170px] px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-all shadow-xs interactive-btn border border-emerald-500/40">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>Tanya Rute ke Kasir</span>
                        </a>
                    </div>
                </div>

<div class="bg-slate-50 rounded-2xl p-6 sm:p-7 text-slate-800 space-y-4 border border-slate-200 reveal-right interactive-card">
<div class="rounded-xl overflow-hidden border border-slate-200 shadow-sm relative group">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" 
                             alt="Kurir Antar-Jemput Katara Laundry di Kawasan Dinoyo Malang" 
                             class="w-full aspect-[16/9] object-cover">
                        <div class="p-2.5 bg-slate-900 text-white flex items-center justify-between text-xs">
                            <span class="font-semibold text-xs flex items-center gap-1.5">
                                <i class="fa-solid fa-motorcycle text-emerald-400"></i>
                                <span>Kurir Antar-Jemput Dinoyo</span>
                            </span>
                            <span class="text-[10px] text-slate-300">Radius 3 - 5 KM</span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Kami melayani penjemputan & pengantaran pakaian untuk berbagai kawasan kos & perumahan sekitar:
                    </p>

                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Dinoyo & MT Haryono</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Sigura-gura & Bendungan</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Sumbersari & Gajayana</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Soekarno-Hatta (Suhat)</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Tlogomas & Landungsari</span>
                        </div>
                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Ketawanggede / UB</span>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-white border border-slate-200 flex items-center justify-between text-xs">
                        <div>
                            <span class="text-slate-500 text-[11px] block">Butuh jemput sekarang?</span>
                            <span class="font-bold text-slate-900">Hubungi Tim Kurir Katara</span>
                        </div>
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20saya%20mau%20request%20jemput%20cucian%20di%20lokasi%20saya" target="_blank" class="px-3.5 h-9 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition-colors flex items-center justify-center interactive-btn shadow-xs border border-emerald-500/40">
                            Request Jemput
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="site-container">
        <div class="bg-white rounded-2xl p-6 sm:p-9 text-slate-800 border border-sky-200 shadow-xl reveal-up">
            <div class="relative z-10 max-w-3xl mx-auto text-center space-y-5">
                <span class="px-3 py-1 rounded-full bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-wider inline-block border border-sky-200">
                    Layanan Laundry Dinoyo Malang
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    Pakaian Bersih, Rapi, & Harum Semerbak Tanpa Repot
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 max-w-xl mx-auto leading-relaxed font-normal">
                    Serahkan cucian Anda pada Katara Laundry Dinoyo. Cukup chat WhatsApp untuk jadwal jemput pakaian atau drop-off langsung ke gerai kami.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-2.5 pt-2">
                    <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20saya%20mau%20order%20laundry%20sekarang" target="_blank" class="inline-flex items-center justify-center gap-2 h-9 sm:h-10 min-w-[190px] px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all interactive-btn border border-emerald-500/40">
                        <i class="fa-brands fa-whatsapp text-sm sm:text-base"></i>
                        <span>Pesan via WhatsApp</span>
                    </a>
                    <a href="#lacak" class="inline-flex items-center justify-center gap-2 h-9 sm:h-10 min-w-[190px] px-4 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-700 text-white font-bold text-xs sm:text-sm transition-all interactive-btn shadow-sm">
                        <i class="fa-solid fa-magnifying-glass text-sky-400 text-xs sm:text-sm"></i>
                        <span>Lacak Status Nota</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<div id="demoModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 bg-slate-900">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-5 sm:p-7 space-y-5 shadow-2xl border border-slate-200 relative text-slate-800">
<button type="button" onclick="closeDemoModal()" class="absolute top-4 right-4 sm:top-5 sm:right-5 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-600 border border-slate-200 flex items-center justify-center text-sm transition-colors" aria-label="Tutup Modal">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="space-y-1 pr-6">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-sky-50 text-sky-700 border border-sky-200 text-[10px] font-bold">
                Simulasi Pelacakan Pelanggan
            </span>
            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Demo Tampilan Pelacakan Real-Time</h3>
            <p class="text-xs text-slate-600">Begini transparansi status yang Anda lihat saat memasukkan nomor nota di website Katara.</p>
        </div>

<div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
                <span class="text-[10px] uppercase font-bold text-slate-500">Nomor Nota Transaksi</span>
                <div class="text-base font-black text-sky-600 font-mono">KTR-20260906-0001</div>
                <div class="text-xs text-slate-600 mt-0.5">Pelanggan: <strong class="text-slate-900">Rifki Pratama (UB)</strong> &bull; Layanan: <strong class="text-slate-900">Cuci Kering Setrika</strong></div>
            </div>
            <div class="sm:text-right">
                <span class="px-3 py-1 rounded-md bg-emerald-50 text-emerald-700 border border-emerald-200 font-bold text-xs inline-block">
                    Siap Diambil
                </span>
                <div class="text-xs font-bold text-slate-700 mt-1">
                    <i class="fa-solid fa-boxes-stacked text-sky-600"></i> Rak Slot: <strong class="text-slate-900">B-08</strong>
                </div>
            </div>
        </div>

<div class="space-y-3 pt-1">
            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-700">Tahapan Pengerjaan di Gerai Dinoyo:</h4>
            
            <div class="grid grid-cols-5 gap-1 sm:gap-2 text-center text-xs">
<div class="space-y-1.5">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-[10px] sm:text-xs font-bold">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <span class="font-bold text-[10px] sm:text-[11px] text-slate-800 block">Nota Masuk</span>
                    <span class="text-[8px] sm:text-[9px] text-slate-500 block">Ditimbang</span>
                </div>
<div class="space-y-1.5">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-[10px] sm:text-xs font-bold">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <span class="font-bold text-[10px] sm:text-[11px] text-slate-800 block">Dicuci</span>
                    <span class="text-[8px] sm:text-[9px] text-slate-500 block">1 Mesin</span>
                </div>
<div class="space-y-1.5">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-[10px] sm:text-xs font-bold">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <span class="font-bold text-[10px] sm:text-[11px] text-slate-800 block">Kering Gas</span>
                    <span class="text-[8px] sm:text-[9px] text-slate-500 block">Suhu Optimal</span>
                </div>
<div class="space-y-1.5">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-[10px] sm:text-xs font-bold">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <span class="font-bold text-[10px] sm:text-[11px] text-slate-800 block">Setrika Uap</span>
                    <span class="text-[8px] sm:text-[9px] text-slate-500 block">Boiler Presisi</span>
                </div>
<div class="space-y-1.5">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-brand-600 text-white flex items-center justify-center text-[10px] sm:text-xs font-bold shadow-xs">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <span class="font-bold text-[10px] sm:text-[11px] text-sky-700 block">Di Rak B-08</span>
                    <span class="text-[8px] sm:text-[9px] text-emerald-600 font-bold block">Siap Ambil</span>
                </div>
            </div>
        </div>

<div class="flex items-center gap-3.5 p-3.5 rounded-xl bg-slate-50 border border-slate-200">
            <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Pakaian Rapi di Slot Rak" class="w-16 h-16 rounded-xl object-cover shrink-0 border border-slate-200 shadow-xs">
            <div class="space-y-0.5 text-xs">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-slate-900">Pakaian Lolos QC & Siap Diambil</span>
                    <span class="px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 border border-emerald-200 font-bold text-[10px]">Rak B-08</span>
                </div>
                <p class="text-[11px] text-slate-600 leading-relaxed font-normal">
                    Pakaian telah disetrika uap boiler halus, disemprot parfum pilihan, dikemas plastik kedap debu, dan aman tersimpan di slot rak.
                </p>
            </div>
        </div>

        <div class="pt-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-2.5">
            <button type="button" 
                    onclick="document.getElementById('invoiceInput').value='KTR-20260906-0001'; closeDemoModal(); document.getElementById('invoiceInput').focus();" 
                    class="w-full sm:w-auto px-4 h-9 sm:h-10 rounded-xl bg-brand-600 text-white text-xs font-bold hover:bg-brand-700 transition-colors flex items-center justify-center shadow-xs">
                Coba Lacak Nota Ini
            </button>
            <button type="button" onclick="closeDemoModal()" class="w-full sm:w-auto px-4 h-9 sm:h-10 text-xs text-slate-600 hover:text-slate-900 font-semibold flex items-center justify-center rounded-xl">
                Tutup Pratinjau
            </button>
        </div>
    </div>
</div>

<div id="toastNotification" class="fixed top-6 sm:top-8 left-1/2 -translate-x-1/2 z-50 pointer-events-none transition-all duration-300 transform -translate-y-12 opacity-0 w-[90%] max-w-sm flex justify-center">
    <div class="px-5 py-3 rounded-full bg-slate-900 text-white border border-slate-700 shadow-xl text-xs font-semibold flex items-center gap-2.5 text-center">
        <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0"></span>
        <span id="toastMessage">Aroma terpilih pada kalkulator!</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function filterServices(category) {
        const cards = document.querySelectorAll('.service-card');
        const buttons = document.querySelectorAll('.service-tab-btn');

        buttons.forEach(btn => {
            btn.classList.remove('active', 'bg-brand-600', 'text-white', 'shadow-xs');
            btn.classList.add('text-slate-600');
        });

        const activeBtn = document.getElementById('btn-tab-' + category);
        if (activeBtn) {
            activeBtn.classList.add('active', 'bg-brand-600', 'text-white', 'shadow-xs');
            activeBtn.classList.remove('text-slate-600');
        }

        cards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    function recalculateEstimate() {
        const select = document.getElementById('calcService');
        const slider = document.getElementById('calcWeight') || document.getElementById('calcRangeSlider');
        if (!select || !slider) return;

        const selectedOption = select.options[select.selectedIndex];
        const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;
        const unit = selectedOption.getAttribute('data-unit') || 'kg';
        const hours = parseInt(selectedOption.getAttribute('data-hours') || selectedOption.getAttribute('data-duration')) || 24;
        const minOrder = parseFloat(selectedOption.getAttribute('data-min')) || 1;
        const serviceName = selectedOption.getAttribute('data-name') || selectedOption.text.split('•')[0].trim();

        let qty = parseFloat(slider.value) || 1;

        const qtyLabel = document.getElementById('calcQtyLabel');
        const minHint = document.getElementById('calcMinHint');
        const sliderDisplay = document.getElementById('calcWeightLabel') || document.getElementById('calcSliderValueDisplay');

        if (qtyLabel) {
            qtyLabel.textContent = unit === 'kg' ? 'Estimasi Berat Cucian' : 'Jumlah Barang (' + unit.toUpperCase() + ')';
        }
        if (minHint) {
            minHint.textContent = 'Min. order ' + minOrder + ' ' + unit + ' • Ditimbang riil saat tiba di gerai';
        }
        if (sliderDisplay) {
            sliderDisplay.textContent = qty.toFixed(1) + ' ' + unit;
        }

        const billableQty = Math.max(qty, minOrder);
        const total = billableQty * price;

        const totalDisplay = document.getElementById('calcTotalPrice');
        if (totalDisplay) {
            totalDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
        }

        const detailsDisplay = document.getElementById('calcPriceDetails');
        if (detailsDisplay) {
            if (qty < minOrder) {
                detailsDisplay.textContent = billableQty.toFixed(1) + ' ' + unit + ' (Ketentuan Minimum) x Rp ' + price.toLocaleString('id-ID');
            } else {
                detailsDisplay.textContent = qty.toFixed(1) + ' ' + unit + ' x Rp ' + price.toLocaleString('id-ID');
            }
        }

        const durationDisplay = document.getElementById('calcDurationText');
        if (durationDisplay) {
            durationDisplay.textContent = hours + ' Jam (' + (hours <= 6 ? 'Express Super Cepat' : (hours <= 24 ? 'Layanan Kilat' : 'Paket Reguler')) + ')';
        }

        const readyDisplay = document.getElementById('calcReadyTime');
        if (readyDisplay) {
            const now = new Date();
            now.setHours(now.getHours() + hours);
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const dayName = days[now.getDay()];
            const timeStr = String(now.getHours()).padStart(2, '0') + ':' + String(now.getMinutes()).padStart(2, '0');
            readyDisplay.textContent = dayName + ', ~ ' + timeStr + ' WIB';
        }

        const perfumeSelect = document.getElementById('calcPerfume');
        const perfumeName = perfumeSelect ? perfumeSelect.value : 'Sakura Blossom';
        const perfumeDisplay = document.getElementById('calcPerfumeText');
        if (perfumeDisplay) {
            perfumeDisplay.textContent = perfumeName;
        }

        const waBtn = document.getElementById('calcWaBtn');
        if (waBtn) {
            const message = `Halo Katara Laundry Dinoyo, saya ingin memesan laundry:
- Layanan: ${serviceName}
- Estimasi: ${qty.toFixed(1)} ${unit}
- Parfum: ${perfumeName}
- Estimasi Biaya: Rp ${total.toLocaleString('id-ID')}
Mohon info jadwal penjemputan / penerimaan di gerai. Terima kasih!`;
            waBtn.href = 'https://wa.me/6281234567890?text=' + encodeURIComponent(message);
        }
    }

    function setCalcSlider(val) {
        const slider = document.getElementById('calcWeight') || document.getElementById('calcRangeSlider');
        if (!slider) return;
        slider.value = val;
        recalculateEstimate();
    }

    function toggleFaq(id) {
        const content = document.getElementById('faq-content-' + id);
        const icon = document.getElementById('faq-icon-' + id);
        if (!content) return;

        const isHidden = content.classList.contains('hidden');
        if (isHidden) {
            content.classList.remove('hidden');
            if (icon) icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            if (icon) icon.classList.remove('rotate-180');
        }
    }

    function openDemoModal() {
        const modal = document.getElementById('demoModal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeDemoModal() {
        const modal = document.getElementById('demoModal');
        if (modal) modal.classList.add('hidden');
    }

    function selectPerfumeCard(name, element) {
        document.querySelectorAll('.perfume-card-item').forEach(c => {
            c.classList.remove('ring-2', 'ring-brand-500', 'border-brand-500');
        });
        if (element) {
            element.classList.add('ring-2', 'ring-brand-500', 'border-brand-500');
        }

        const select = document.getElementById('calcPerfume');
        if (select) {
            select.value = name;
            recalculateEstimate();
        }

        showToast(`Aroma "${name}" terpilih pada simulasi kalkulator!`);
    }

    function showToast(message) {
        const toast = document.getElementById('toastNotification');
        const text = document.getElementById('toastMessage');
        if (!toast || !text) return;

        text.textContent = message;
        toast.classList.remove('opacity-0', '-translate-y-12', 'pointer-events-none');
        toast.classList.add('opacity-100', 'translate-y-0');

        setTimeout(() => {
            toast.classList.remove('opacity-100', 'translate-y-0');
            toast.classList.add('opacity-0', '-translate-y-12', 'pointer-events-none');
        }, 3000);
    }

    function animateCounters() {
        const counters = document.querySelectorAll('.counter-number');
        if (!window.IntersectionObserver) {
            counters.forEach(c => {
                c.innerText = (+c.getAttribute('data-target')).toLocaleString('id-ID');
            });
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const counter = entry.target;
                if (entry.isIntersecting) {
                    const target = +counter.getAttribute('data-target');
                    let count = 0;
                    const duration = 1400;
                    const steps = 40;
                    const stepTime = duration / steps;
                    const stepValue = target / steps;
                    if (counter._counterTimer) clearInterval(counter._counterTimer);
                    counter._counterTimer = setInterval(() => {
                        count += stepValue;
                        if (count >= target) {
                            counter.innerText = target.toLocaleString('id-ID');
                            clearInterval(counter._counterTimer);
                        } else {
                            counter.innerText = Math.floor(count).toLocaleString('id-ID');
                        }
                    }, stepTime);
                } else {
                    if (counter._counterTimer) clearInterval(counter._counterTimer);
                    counter.innerText = '0';
                }
            });
        }, { threshold: 0.15 });

        counters.forEach(c => observer.observe(c));
    }

    document.addEventListener('DOMContentLoaded', function() {
        const calcService = document.getElementById('calcService');
        const calcSlider = document.getElementById('calcWeight') || document.getElementById('calcRangeSlider');
        const calcPerfume = document.getElementById('calcPerfume');

        if (calcService) calcService.addEventListener('change', recalculateEstimate);
        if (calcSlider) calcSlider.addEventListener('input', recalculateEstimate);
        if (calcPerfume) calcPerfume.addEventListener('change', recalculateEstimate);

        recalculateEstimate();
        animateCounters();
    });
</script>
@endpush
