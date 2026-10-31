@extends('layouts.publik')

@section('title', 'Katara Laundry Dinoyo Malang - Bersih, Higienis & Lacak Real-Time')
@section('meta_description', 'Layanan laundry kiloan & satuan modern di Dinoyo Malang. SOP 1 mesin 1 pelanggan tanpa campur, gas dryer 100% kering anti-apek, setrika uap boiler, 5 pilihan aroma parfum, dan pelacakan status nota mandiri.')

@section('content')
<div class="space-y-14 sm:space-y-20 lg:space-y-24 pb-16 sm:pb-24">

    
    
    <section class="relative bg-white text-slate-800 pt-6 sm:pt-10">
        <div class="site-container relative z-10 space-y-6 sm:space-y-8 lg:space-y-10">
            
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                
                <div class="lg:col-span-7 space-y-5 reveal-left flex flex-col">
                    
                    
                    <div class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-sky-800">
                        <span class="flex h-2 w-2 rounded-full bg-sky-500"></span>
                        <span>Laundry Pilihan Mahasiswa &amp; Warga Dinoyo Malang</span>
                    </div>

                    
                    <div class="space-y-3">
                        <h1 class="heading-hero font-extrabold tracking-tight text-slate-900 leading-[1.12]">
                            Laundry Bersih &amp; Higienis, <br class="hidden sm:inline">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-cyan-500">1 Mesin 1 Pelanggan</span> Tanpa Campur.
                        </h1>

                        <p class="body-lead text-slate-600 max-w-2xl leading-relaxed font-normal">
                            Setiap pakaian Anda dicuci terpisah dalam drum sendiri, dikeringkan mesin <strong class="text-slate-800 font-semibold">gas dryer 100% tuntas anti-apek</strong>, disetrika uap boiler presisi, dan dapat dipantau tahapan pengerjaannya secara mandiri lewat sistem pelacakan online.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-2.5 pt-1">
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20pesan%20laundry%20antar-jemput" target="_blank" class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40 active:scale-[0.99]">
                            <i class="fa-brands fa-whatsapp text-sm shrink-0 leading-none"></i>
                            <span class="leading-none">Pesan via WhatsApp</span>
                        </a>
                        <a href="#layanan" class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs leading-none transition-all shadow-xs border border-slate-700 active:scale-[0.99]">
                            <i class="fa-solid fa-list-ul text-sky-400 text-xs shrink-0 leading-none"></i>
                            <span class="leading-none">Lihat Katalog &amp; Tarif</span>
                        </a>
                    </div>

                    
                    <div class="space-y-2 pt-1">
                        <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-slate-500 font-medium">
                            <a href="#pilar-anti-bau-apek" class="flex items-center gap-1.5 hover:text-emerald-700 transition-colors"><i class="fa-solid fa-circle-check text-emerald-500 text-xs"></i> Anti Bau Apek</a>
                            <a href="#pilar-timbangan-digital" class="flex items-center gap-1.5 hover:text-sky-700 transition-colors"><i class="fa-solid fa-circle-check text-sky-500 text-xs"></i> Timbangan Digital Transparan</a>
                            <a href="#pilar-notifikasi-wa" class="flex items-center gap-1.5 hover:text-amber-700 transition-colors"><i class="fa-solid fa-circle-check text-amber-500 text-xs"></i> Notifikasi WhatsApp Otomatis</a>
                            <a href="#pilar-garansi-cuci" class="flex items-center gap-1.5 hover:text-emerald-700 transition-colors"><i class="fa-solid fa-circle-check text-emerald-500 text-xs"></i> Garansi Cuci Bersih</a>
                            <a href="#pilar-express-6-jam" class="flex items-center gap-1.5 hover:text-sky-700 transition-colors"><i class="fa-solid fa-circle-check text-sky-500 text-xs"></i> Express 6 Jam</a>
                            <a href="#pilar-1-mesin" class="flex items-center gap-1.5 hover:text-indigo-700 transition-colors"><i class="fa-solid fa-circle-check text-indigo-500 text-xs"></i> 1 Mesin 1 Pelanggan</a>
                            <a href="#pilar-antar-jemput" class="flex items-center gap-1.5 hover:text-emerald-700 transition-colors"><i class="fa-solid fa-circle-check text-emerald-500 text-xs"></i> Gratis Antar-Jemput</a>
                        </div>
                        <div>
                            <a href="#keunggulan" class="inline-flex items-center gap-1 text-[11px] font-bold text-sky-600 hover:text-sky-700 hover:underline transition-colors">
                                <span>Lihat penjelasan lengkap 7 jaminan mutu &amp; keunggulan di atas</span>
                                <i class="fa-solid fa-arrow-down text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                </div>

                
                <div class="lg:col-span-5 relative reveal-right flex flex-col gap-3.5">
                    <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-xl bg-white flex flex-col">
                        <div class="relative aspect-[4/3] sm:aspect-[16/11] w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/laundry-hero.jpg') }}" 
                                 alt="Gerai Modern Katara Laundry Dinoyo Malang" 
                                 class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
                            
                            
                            <div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-white text-emerald-700 border border-emerald-200/90 shadow-md text-[11px] font-bold flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span>Buka Hari Ini</span>
                            </div>
                        </div>

                        
                        <div class="p-4 sm:p-5 bg-white space-y-3.5 text-xs">
                            
                            
                            <div class="flex items-center justify-between gap-3 pb-3 border-b border-slate-100">
                                <div class="space-y-0.5 min-w-0">
                                    <div class="flex items-center gap-1.5 text-slate-900 font-bold text-sm">
                                        <i class="fa-solid fa-location-dot text-rose-500 text-xs shrink-0"></i>
                                        <span class="truncate">Gerai Katara Dinoyo</span>
                                    </div>
                                    <p class="text-[11px] text-slate-500 truncate pl-4">
                                        Jl. MT. Haryono, Lowokwaru Malang
                                    </p>
                                </div>
                                <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="inline-flex items-center justify-center gap-1.5 px-3 h-8.5 rounded-xl bg-sky-50 hover:bg-sky-100 text-sky-700 text-xs font-bold border border-sky-200/80 shrink-0 transition-colors shadow-2xs active:scale-[0.99]" title="Buka Petunjuk Arah Google Maps">
                                    <i class="fa-solid fa-diamond-turn-right text-sky-600 text-[11px]"></i>
                                    <span>Rute Maps</span>
                                </a>
                            </div>

                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-[11px]">
                                <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/70 text-slate-700">
                                    <i class="fa-regular fa-clock text-sky-600 text-xs shrink-0"></i>
                                    <div class="min-w-0 leading-tight">
                                        <span class="text-slate-500 block text-[10px]">Senin &ndash; Sabtu</span>
                                        <strong class="text-slate-900 font-bold">07.00 &ndash; 21.00 WIB</strong>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/70 text-slate-700">
                                    <i class="fa-regular fa-calendar-check text-amber-600 text-xs shrink-0"></i>
                                    <div class="min-w-0 leading-tight">
                                        <span class="text-slate-500 block text-[10px]">Minggu &amp; Libur</span>
                                        <strong class="text-slate-900 font-bold">08.00 &ndash; 20.00 WIB</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            
            <div id="lacak" class="scroll-mt-28 w-full rounded-2xl bg-gradient-to-br from-[#07152b] via-[#0a1e3a] to-[#08172c] border border-sky-800/70 p-5 sm:p-7 lg:p-8 shadow-xl space-y-5 text-white !mt-10 sm:!mt-14 lg:!mt-16">
                
                
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-4 border-b border-sky-900/60">
                    <div class="space-y-1">
                        <div class="flex items-center gap-2.5">
                            <h2 class="text-base sm:text-lg font-black text-white tracking-tight">
                                Lacak Status Pakaian Anda
                            </h2>
                            <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-emerald-300 bg-emerald-950/80 px-2.5 py-0.5 rounded-full border border-emerald-500/30 shrink-0 shadow-2xs">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                Live
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-300 font-normal">
                            Cukup masukkan nomor nota transaksi atau nomor WhatsApp terdaftar.
                        </p>
                    </div>

                    
                    <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 text-xs text-slate-200 shrink-0">
                        <div class="inline-flex items-center justify-center gap-1.5 px-3 h-7 rounded-lg bg-[#0b1d38] border border-sky-800/60 shadow-2xs font-semibold text-[11px] sm:text-xs leading-none">
                            <i class="fa-solid fa-clock text-sky-400 text-xs shrink-0 leading-none"></i>
                            <span class="leading-none">Status Real-Time</span>
                        </div>
                        <div class="inline-flex items-center justify-center gap-1.5 px-3 h-7 rounded-lg bg-[#0b1d38] border border-sky-800/60 shadow-2xs font-semibold text-[11px] sm:text-xs leading-none">
                            <i class="fa-solid fa-boxes-stacked text-sky-400 text-xs shrink-0 leading-none"></i>
                            <span class="leading-none">Slot Rak Terdata</span>
                        </div>
                        <div class="inline-flex items-center justify-center gap-1.5 px-3 h-7 rounded-lg bg-[#0b1d38] border border-sky-800/60 shadow-2xs font-semibold text-[11px] sm:text-xs leading-none">
                            <i class="fa-solid fa-shield-halved text-emerald-400 text-xs shrink-0 leading-none"></i>
                            <span class="leading-none">Tanpa Perlu Login</span>
                        </div>
                    </div>
                </div>

                
                <div class="space-y-3">
                    <form id="trackingForm" action="{{ route('tracking.search') }}" method="POST">
                        @csrf
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-2.5 items-stretch">
                            
                            <button type="button" 
                                    onclick="openDemoModal()" 
                                    class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-xl bg-[#0b1d38] hover:bg-sky-900 text-slate-200 hover:text-white text-xs font-bold leading-none border border-sky-800/60 hover:border-sky-600 shadow-2xs transition-all active:scale-[0.99] shrink-0">
                                <i class="fa-regular fa-circle-play text-sky-400 text-xs shrink-0 leading-none"></i>
                                <span class="leading-none">Demo Alur</span>
                            </button>

                            
                            <div class="relative flex-1 flex items-center gap-2 h-9 px-3 rounded-xl bg-[#060e1d] border border-sky-800/80 focus-within:border-sky-400 focus-within:ring-2 focus-within:ring-sky-400/25 transition-all shadow-inner">
                                <i class="fa-regular fa-file-lines text-sky-400/80 text-xs shrink-0 leading-none"></i>
                                <input type="text" 
                                       name="invoice_number" 
                                       id="invoiceInput" 
                                       value="{{ old('invoice_number') }}" 
                                       placeholder="Nomor Nota (KTR-...) atau Nomor WhatsApp" 
                                       required 
                                       class="w-full bg-transparent text-white placeholder-slate-400 text-xs font-medium focus:outline-none border-none p-0 m-0 leading-none">
                            </div>

                            
                            <button type="submit" 
                                    id="trackingSubmitBtn" 
                                    class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold leading-none transition-all shadow-md shadow-sky-600/30 shrink-0 active:scale-[0.99] border border-sky-500/50">
                                <span class="leading-none">Lacak Sekarang</span>
                                <i class="fa-solid fa-arrow-right text-[11px] shrink-0 leading-none"></i>
                            </button>
                        </div>

                        
                        <div class="flex flex-wrap items-center gap-2 pt-2.5 sm:pt-3 text-[11px] text-slate-300">
                            <span class="text-slate-400 font-medium leading-none">Contoh Cepat:</span>
                            <button type="button" 
                                    onclick="fillInvoiceInput('KTR-20260906-0001')" 
                                    class="inline-flex items-center justify-center gap-1.5 font-mono font-bold text-sky-200 bg-[#0b1d38] hover:bg-sky-900 hover:text-white px-2.5 h-6 rounded-md border border-sky-800/60 hover:border-sky-600 transition-all cursor-pointer shadow-2xs leading-none" 
                                    title="Klik untuk mengisi nota siap ambil">
                                <i class="fa-solid fa-receipt text-[10px] text-sky-400 shrink-0 leading-none"></i>
                                <span class="leading-none">KTR-20260906-0001</span>
                                <span class="text-[9px] font-sans font-bold text-emerald-300 bg-emerald-950/90 border border-emerald-500/40 px-1.5 py-0.5 rounded leading-none">Siap Ambil</span>
                            </button>
                            <button type="button" 
                                    onclick="fillInvoiceInput('081298765432')" 
                                    class="inline-flex items-center justify-center gap-1.5 font-mono font-bold text-sky-200 bg-[#0b1d38] hover:bg-sky-900 hover:text-white px-2.5 h-6 rounded-md border border-sky-800/60 hover:border-sky-600 transition-all cursor-pointer shadow-2xs leading-none" 
                                    title="Klik untuk mengisi nomor WhatsApp">
                                <i class="fa-brands fa-whatsapp text-[11px] text-emerald-400 shrink-0 leading-none"></i>
                                <span class="leading-none">081298765432</span>
                            </button>
                        </div>
                    </form>

                    @if(session('error'))
                        <div class="p-3 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-200 text-xs flex items-center justify-between gap-3">
                            <span class="font-medium">{{ session('error') }}</span>
                            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Katara,%20saya%20ingin%20tanya%20status%20cucian%20saya" target="_blank" class="shrink-0 text-[11px] font-semibold text-rose-300 hover:text-white underline">
                                Bantuan CS
                            </a>
                        </div>
                    @endif
                </div>

                
                <div class="pt-4 border-t border-sky-900/60 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-300">
                    <div class="flex items-center gap-2">
                        <div class="flex text-amber-400 text-xs gap-0.5">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <span class="font-bold text-white">Rating 4.9 / 5.0</span>
                        <span class="text-slate-400">(1.200+ Ulasan Google)</span>
                    </div>

                    <div class="flex flex-wrap items-center justify-center sm:justify-end gap-x-5 gap-y-2 text-slate-300">
                        <div class="flex items-center gap-1.5 font-medium">
                            <i class="fa-solid fa-circle-check text-sky-400 text-sm"></i>
                            <span>SOP 1 Mesin 1 Pelanggan</span>
                        </div>
                        <span class="text-sky-800 hidden sm:inline">&bull;</span>
                        <div class="flex items-center gap-1.5 font-medium">
                            <i class="fa-solid fa-motorcycle text-sky-400 text-sm"></i>
                            <span>Antar-Jemput Kawasan Kampus</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    
    <section id="keunggulan" class="site-container space-y-12 sm:space-y-16 lg:space-y-20 scroll-mt-28 !mt-2 sm:!mt-3 lg:!mt-4">
        
        
        <div class="rounded-3xl bg-slate-900 text-white p-6 sm:p-8 shadow-xl border border-slate-800 reveal-up">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 sm:gap-4 divide-y sm:divide-y-0 sm:divide-x divide-slate-800 text-center">
                
                <div class="pt-4 sm:pt-0 sm:px-2 space-y-1">
                    <div class="text-white text-xl sm:text-2xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-star text-amber-400 text-lg"></i>
                        <span>4.9 / 5.0</span>
                    </div>
                    <p class="text-xs font-bold text-amber-300">Rating Google Maps</p>
                    <p class="text-[10px] text-slate-400">1.200+ ulasan terverifikasi</p>
                </div>

                <div class="pt-4 sm:pt-0 sm:px-2 space-y-1">
                    <div class="text-white text-xl sm:text-2xl font-black">
                        <span class="counter-number text-white" data-target="5000">5.000</span>+
                    </div>
                    <p class="text-xs font-bold text-sky-400">Kg Pakaian / Bulan</p>
                    <p class="text-[10px] text-slate-400">Kapasitas mesin komersial</p>
                </div>

                <div class="pt-4 sm:pt-0 sm:px-2 space-y-1">
                    <div class="text-white text-xl sm:text-2xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-fire text-orange-400 text-lg"></i>
                        <span>100% Kering</span>
                    </div>
                    <p class="text-xs font-bold text-orange-300">Gas Dryer Suhu Optimal</p>
                    <p class="text-[10px] text-slate-400">Tuntas tanpa bau apek</p>
                </div>

                <div class="pt-4 sm:pt-0 sm:px-2 space-y-1">
                    <div class="text-white text-xl sm:text-2xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-boxes-stacked text-sky-400 text-lg"></i>
                        <span>45 Slot Rak</span>
                    </div>
                    <p class="text-xs font-bold text-indigo-300">Penyimpanan Terdata</p>
                    <p class="text-[10px] text-slate-400">Barcode rak anti-tercecer</p>
                </div>

                <div class="pt-4 sm:pt-0 sm:px-2 space-y-1 col-span-2 md:col-span-1">
                    <div class="text-emerald-400 text-xl sm:text-2xl font-black flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-motorcycle text-lg"></i>
                        <span>Antar-Jemput</span>
                    </div>
                    <p class="text-xs font-bold text-emerald-300">Radius Dinoyo &amp; Kampus</p>
                    <p class="text-[10px] text-slate-400">Kurir siap meluncur ke kos</p>
                </div>

            </div>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-stretch pt-4 sm:pt-6">
            
            
            <div class="lg:col-span-5 space-y-5 reveal-left flex flex-col justify-between h-full">
                <div class="space-y-3">
                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Mengapa Katara Laundry Menjadi Pilihan Terpercaya?
                    </h2>
                    <p class="body-lead text-slate-600 leading-relaxed font-normal">
                        Setiap cucian diproses dengan alur kerja terstandarisasi: 1 pelanggan diproses dalam 1 drum mesin sendiri, dikeringkan tuntas dengan mesin gas tanpa jemur di jalan, dan disimpan di rak bernomor terdata.
                    </p>
                </div>

                <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm relative group bg-white flex-1 min-h-[200px]">
                    <div class="w-full h-full min-h-[200px] overflow-hidden relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" 
                             alt="Deretan Mesin Cuci Komersial Katara Laundry Dinoyo" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent"></div>
                        <div class="absolute bottom-3.5 left-4 right-4 flex items-center justify-between text-xs text-white">
                            <span class="font-bold flex items-center gap-1.5 drop-shadow-sm">
                                <i class="fa-solid fa-gears text-sky-400"></i> Mesin Cuci Front Loading Komersial
                            </span>
                            <span class="text-[10px] text-emerald-300 font-bold bg-emerald-950/80 backdrop-blur-md px-2.5 py-1 rounded-full border border-emerald-500/40 shadow-xs">
                                1 Nota = 1 Drum Mesin
                            </span>
                        </div>
                    </div>
                </div>

                <div id="pilar-garansi-cuci" class="scroll-mt-28 p-5 rounded-2xl bg-slate-900 text-white border border-slate-800 shadow-sm space-y-3 shrink-0">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-amber-400 flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-halved"></i> Garansi Pengerjaan 24 Jam
                        </span>
                        <span class="text-[10px] font-semibold bg-white/10 text-slate-300 px-2.5 py-0.5 rounded-full border border-white/10">
                            Layanan Resmi Kasir
                        </span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed font-normal">
                        Bila ada noda yang terlewat atau lipatan setrika kurang rapi, sampaikan ke kasir dalam 1x24 jam sejak pengambilan. Pakaian akan dicuci atau disetrika ulang secara gratis.
                    </p>
                    <div class="pt-2.5 border-t border-slate-800 flex items-center justify-between text-[11px] text-slate-400">
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-clock text-sky-400"></i> Gerai Buka 07.00 - 21.00 WIB
                        </span>
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20tanya%20mengenai%20layanan%20laundry" target="_blank" class="text-sky-300 hover:text-white font-semibold transition-colors flex items-center gap-1">
                            <i class="fa-brands fa-whatsapp text-emerald-400"></i> Hubungi Kasir
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 auto-rows-fr reveal-right h-full">
                <div id="pilar-1-mesin" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-soap"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                Higienis
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                1 Pelanggan 1 Mesin
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Tanpa campur pakaian orang lain
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Setiap nota dicuci mandiri dalam drum terpisah meskipun hanya 1–2 kg. Menjaga privasi, mencegah risiko pakaian tertukar, luntur, atau tertular kotoran cucian lain.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Drum dibersihkan berkala</span>
                    </div>
                </div>

                <div id="pilar-anti-bau-apek" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-wind"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                100% Kering
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                Gas Dryer Suhu Terukur
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Bebas jemur di pinggir jalan
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Pengeringan menggunakan mesin gas komersial bersuhu 65–70°C. Pakaian kering tuntas, steril dari kuman dan tungau, serta bebas dari debu jalanan Dinoyo dan bau apek musim hujan.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Kering tuntas &amp; wangi awet</span>
                    </div>
                </div>

                <div id="pilar-timbangan-digital" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                Akurasi 0,01 Kg
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                Timbangan Kasir Digital
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Terbaca langsung di meja kasir
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Berat pakaian ditimbang di hadapan Anda dengan timbangan digital 2 desimal. Nilai yang tertera di layar timbangan adalah nilai yang tercatat di nota fisik maupun sistem digital.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Tanpa pembulatan sepihak</span>
                    </div>
                </div>

                <div id="pilar-setrika-uap" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-temperature-arrow-up"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                Uap Murni
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                Setrika Uap Boiler Industri
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Halus rapi tanpa merusak kain
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Menggunakan boiler uap bertekanan tinggi. Panas merata melicinkan serat pakaian tanpa risiko gosong, mengkilap (*shiny effect*), atau merusak sablon dan bahan pakaian sensitif.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Aman untuk katun, wol &amp; jersey</span>
                    </div>
                </div>

                <div id="pilar-notifikasi-wa" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                Rak A1 - E9
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                Rak Fisik &amp; Notifikasi WA
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Pengambilan cepat tanpa antre
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Pakaian yang selesai dipacking langsung disimpan di 45 slot rak bernomor. Sistem otomatis mengirim pesan WhatsApp dengan info slot rak sehingga pengambilan di gerai sangat cepat.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Tidak ditumpuk di meja kasir</span>
                    </div>
                </div>

                <div id="pilar-express-6-jam" class="scroll-mt-28 bg-white rounded-2xl p-5 sm:p-5.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between interactive-card group h-full">
                    <div class="space-y-3 flex-1 flex flex-col">
                        <div class="flex items-center justify-between">
                            <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-700 border border-sky-100 flex items-center justify-center text-base shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-slate-100 text-slate-700 border border-slate-200 shrink-0">
                                Jalur Prioritas
                            </span>
                        </div>
                        <div class="min-h-[46px] flex flex-col justify-center">
                            <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors leading-snug">
                                Layanan Express 6 Jam
                            </h3>
                            <p class="text-xs text-slate-500 font-medium mt-0.5 leading-snug">
                                Untuk kebutuhan mendadak
                            </p>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal flex-1">
                            Untuk pakaian yang segera dipakai sidang skripsi, rapat, atau bepergian. Masuk antrean prioritas mesin cuci dan setrika, selesai dalam 6 jam dengan standar kerapian terjaga.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-semibold text-slate-700 shrink-0">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                        <span>Tepat waktu terkonfirmasi</span>
                    </div>
                </div>
            </div>
        </div>


        <div id="pilar-antar-jemput" class="w-full scroll-mt-28 bg-white rounded-2xl p-5 sm:p-6 lg:p-7 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-emerald-300 transition-all flex flex-col md:flex-row items-start md:items-center justify-between gap-5 group !mt-3 sm:!mt-4 lg:!mt-5">
            <div class="flex items-center gap-4 sm:gap-5">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-emerald-50 text-emerald-700 border border-emerald-100 flex items-center justify-center text-xl sm:text-2xl shrink-0 group-hover:scale-105 transition-transform shadow-2xs my-auto">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
                <div class="space-y-1">
                    <div class="flex flex-wrap items-center gap-2 sm:gap-2.5">
                        <h3 class="font-extrabold text-slate-900 text-base sm:text-lg group-hover:text-emerald-700 transition-colors">
                            Antar-Jemput Area Dinoyo &amp; Kampus
                        </h3>
                        <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200">
                            UB &bull; UIN &bull; ITN &bull; Unisma
                        </span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Kurir kami melayani penjemputan dan pengantaran langsung ke kos, asrama, kontrakan, atau rumah tinggal. Cukup kirim alamat atau bagikan lokasi via WhatsApp.
                    </p>
                </div>
            </div>
            <div class="pt-3 md:pt-0 border-t md:border-t-0 md:border-l border-slate-100 md:pl-6 flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-emerald-700 shrink-0 w-full md:w-auto">
                <i class="fa-solid fa-circle-check text-emerald-600 text-base"></i>
                <span>Jadwal Kurir Fleksibel</span>
            </div>
        </div>
    </section>

    
    <section id="layanan" class="site-container space-y-12 sm:space-y-16 lg:space-y-20 scroll-mt-28">
            
            <div class="text-center max-w-2xl mx-auto space-y-2.5 reveal-up">
                <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                    Katalog Layanan &amp; Tarif Resmi Katara
                </h2>
                <p class="body-lead text-slate-600">
                    Tarif jujur tertera jelas per kilogram atau per satuan tanpa biaya terselubung.
                </p>

                
                <div class="inline-flex p-1 rounded-2xl bg-white border border-slate-200 shadow-xs mt-3 gap-1">
                    <button type="button" onclick="filterServices('all')" id="btn-tab-all" class="service-tab-btn active px-4 h-9 rounded-xl text-xs font-bold transition-all bg-sky-600 text-white shadow-xs inline-flex items-center justify-center">
                        Semua Layanan
                    </button>
                    <button type="button" onclick="filterServices('kiloan')" id="btn-tab-kiloan" class="service-tab-btn px-4 h-9 rounded-xl text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-slate-100 inline-flex items-center justify-center">
                        Kiloan
                    </button>
                    <button type="button" onclick="filterServices('satuan')" id="btn-tab-satuan" class="service-tab-btn px-4 h-9 rounded-xl text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-slate-100 inline-flex items-center justify-center">
                        Satuan &amp; Bedcover
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

            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-4 items-stretch !mt-4 sm:!mt-5">
                @foreach($services as $idx => $svc)
                    @php
                        $isPopular = ($svc->id == 2 || $loop->iteration == 2);
                    @endphp

                    <div class="service-card reveal-up interactive-card bg-white rounded-2xl border {{ $isPopular ? 'border-sky-400 shadow-md ring-2 ring-sky-400/20' : 'border-slate-200 shadow-sm hover:border-sky-300' }} flex flex-col justify-between overflow-hidden group" 
                         data-category="{{ $svc->category }}">
                        
                        
                        <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset($serviceImages[$svc->id] ?? 'images/service-kiloan.jpg') }}" 
                                 alt="{{ $svc->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                            
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-white/95 backdrop-blur-xs text-sky-800 border border-slate-200 shadow-xs">
                                {{ $svc->category }}
                            </div>

                            @if($isPopular)
                                <div class="absolute top-3 right-3 bg-sky-600 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-lg shadow-sm">
                                    Favorit Pelanggan
                                </div>
                            @endif

                            <div class="absolute bottom-2.5 left-3 right-3 flex items-center justify-between text-white bg-slate-900/80 backdrop-blur-xs px-3 py-1.5 rounded-lg border border-white/20">
                                <span class="flex items-center gap-1.5 text-[11px] font-medium text-slate-100">
                                    <i class="fa-regular fa-clock text-sky-300"></i>
                                    <span>{{ $svc->duration_hours }} Jam</span>
                                </span>
                                <span class="font-black text-sm text-white">
                                    Rp {{ number_format($svc->price, 0, ',', '.') }}<span class="text-[11px] text-slate-300 font-normal">/{{ $svc->unit }}</span>
                                </span>
                            </div>
                        </div>

                        
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between space-y-3.5 sm:space-y-4">
                            <div class="space-y-2">
                                <h3 class="font-extrabold text-slate-900 text-base group-hover:text-sky-600 transition-colors">
                                    {{ $svc->name }}
                                </h3>
                                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                    {{ $svc->description ?? 'Diproses higienis 1 mesin 1 pelanggan dengan deterjen premium, gas dryer, dan setrika uap boiler.' }}
                                </p>
                            </div>

                            <div class="pt-2 flex items-center justify-between text-xs text-slate-500 border-t border-slate-100">
                                <span>Min. order {{ number_format($svc->min_order, 0) }} {{ $svc->unit }}</span>
                                <span class="text-emerald-600 font-bold flex items-center gap-1 text-[11px]">
                                    <i class="fa-solid fa-check"></i> Termasuk Parfum
                                </span>
                            </div>

                            <div class="pt-1 flex items-center justify-center">
                                <button type="button" 
                                   onclick="selectServiceForCalc('{{ $svc->id }}')"
                                   class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white shadow-xs font-bold text-xs leading-none transition-colors interactive-btn">
                                    <span>Hitung di Simulator</span>
                                    <i class="fa-solid fa-calculator text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            
            <div class="rounded-3xl overflow-hidden border border-slate-200 bg-white p-6 sm:p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center shadow-sm reveal-up !mt-5 sm:!mt-6 lg:!mt-8">
                <div class="lg:col-span-5 relative rounded-2xl overflow-hidden border border-slate-200 shadow-xs group">
                    <img src="{{ asset('images/laundry-special-care.jpg') }}" 
                         alt="Spesialis Perawatan Bedcover &amp; Sepatu Katara Laundry" 
                         class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent pointer-events-none"></div>
                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-[11px] font-medium bg-slate-900/80 backdrop-blur-xs px-3 py-1.5 rounded-lg border border-white/20">
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-hand-sparkles text-sky-300"></i>
                            <span>Hand-Wash &amp; Drum Kapasitas Besar</span>
                        </span>
                        <span class="text-emerald-300 font-bold">100% Aman</span>
                    </div>
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <div class="space-y-1.5">
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 leading-snug">
                            Spesialis Cuci Bedcover Jumbo, Jas Formal &amp; Sepatu Sneakers
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                            Penanganan terstandarisasi untuk material bernilai tinggi. Dikerjakan manual dengan deterjen enzim lembut dan pengeringan terukur agar serat kain serta bentuk aslinya tetap terjaga sempurna.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 pt-1">
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-sky-300 hover:bg-sky-50/50 transition-all space-y-1">
                            <div class="flex items-center justify-between">
                                <div class="w-7 h-7 rounded-lg bg-sky-100 text-sky-700 flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-bed"></i>
                                </div>
                                <span class="text-[10px] font-bold text-slate-500">3 Hari</span>
                            </div>
                            <div class="font-extrabold text-slate-900 text-xs">Bedcover King</div>
                            <div class="text-[11px] text-slate-500">Anti-dakron gumpal</div>
                            <div class="text-xs font-black text-sky-700 pt-0.5">Rp 25.000</div>
                        </div>

                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-sky-300 hover:bg-sky-50/50 transition-all space-y-1">
                            <div class="flex items-center justify-between">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-shoe-prints"></i>
                                </div>
                                <span class="text-[10px] font-bold text-slate-500">2–3 Hari</span>
                            </div>
                            <div class="font-extrabold text-slate-900 text-xs">Sepatu Sneakers</div>
                            <div class="text-[11px] text-slate-500">Deep-clean manual</div>
                            <div class="text-xs font-black text-sky-700 pt-0.5">Rp 25.000</div>
                        </div>

                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-sky-300 hover:bg-sky-50/50 transition-all space-y-1">
                            <div class="flex items-center justify-between">
                                <div class="w-7 h-7 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                                <span class="text-[10px] font-bold text-slate-500">2 Hari</span>
                            </div>
                            <div class="font-extrabold text-slate-900 text-xs">Jas Formal Stel</div>
                            <div class="text-[11px] text-slate-500">Uap murni anti-kilap</div>
                            <div class="text-xs font-black text-sky-700 pt-0.5">Rp 30.000</div>
                        </div>
                    </div>

                    <div class="pt-1 flex flex-wrap items-center gap-3">
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20tanya%20layanan%20cuci%20khusus%20(Bedcover/Sepatu/Jas)" 
                           target="_blank" 
                           class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40 active:scale-[0.99]">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>Konsultasi Cuci Khusus</span>
                        </a>
                        <span class="text-[11px] text-slate-500 flex items-center gap-1.5">
                            <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
                            <span>Garansi cuci ulang jika noda belum tuntas</span>
                        </span>
                    </div>
                </div>
            </div>
    </section>

    
    <section id="kalkulator" class="site-container scroll-mt-28">
        <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-6 sm:p-9">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                
                <div class="lg:col-span-7 space-y-5 reveal-left">
                    <div class="space-y-1.5">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-bold uppercase tracking-wider border border-amber-200">
                            <i class="fa-solid fa-calculator text-amber-500"></i>
                            <span>Simulator Biaya Online</span>
                        </span>
                        <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                            Simulasi Perhitungan Cucian Anda
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600">
                            Ketahui estimasi total biaya dan perkiraan waktu siap ambil sebelum mengirim cucian Anda.
                        </p>
                    </div>

                    <div class="space-y-4 pt-1">
                        
                        
                        <div class="space-y-1.5">
                            <label for="calcService" class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-sky-600 text-white text-[10px] font-bold flex items-center justify-center">1</span>
                                <span>Pilih Layanan</span>
                            </label>
                            <select id="calcService" onchange="recalculateEstimate()" class="w-full px-4 py-3 min-h-[46px] rounded-xl bg-slate-50 text-slate-900 border border-slate-300 text-xs sm:text-sm font-semibold focus:outline-none focus:bg-white focus:border-sky-500 focus:ring-4 focus:ring-sky-500/15 transition-all">
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

                        
                        <div class="space-y-2.5 bg-slate-50 p-4 sm:p-5 rounded-2xl border border-slate-200">
                            <div class="flex items-center justify-between">
                                <label for="calcWeight" class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                    <span class="w-5 h-5 rounded-full bg-sky-600 text-white text-[10px] font-bold flex items-center justify-center">2</span>
                                    <span id="calcQtyLabel">Estimasi Berat Cucian</span>
                                </label>
                                <span class="text-sm font-black text-slate-900 bg-white px-3.5 py-1 rounded-xl border border-slate-200 shadow-xs" id="calcWeightLabel">
                                    3.0 kg
                                </span>
                            </div>
                            
                            <input type="range" id="calcWeight" min="1" max="25" step="0.5" value="3.0" oninput="recalculateEstimate()" class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-600 border border-slate-300">
                            
                            
                            <div class="flex flex-wrap items-center gap-2 pt-1 text-xs">
                                <span class="text-[10px] font-semibold text-slate-500">Preset Cepat:</span>
                                <button type="button" onclick="setCalcSlider(1)" class="px-2.5 py-1 rounded-lg bg-white hover:bg-sky-50 text-slate-700 hover:text-sky-700 border border-slate-200 text-[11px] font-bold shadow-xs">1 kg (~4 kemeja)</button>
                                <button type="button" onclick="setCalcSlider(3)" class="px-2.5 py-1 rounded-lg bg-white hover:bg-sky-50 text-slate-700 hover:text-sky-700 border border-slate-200 text-[11px] font-bold shadow-xs">3 kg (Standar)</button>
                                <button type="button" onclick="setCalcSlider(5)" class="px-2.5 py-1 rounded-lg bg-white hover:bg-sky-50 text-slate-700 hover:text-sky-700 border border-slate-200 text-[11px] font-bold shadow-xs">5 kg (1 Keranjang)</button>
                                <button type="button" onclick="setCalcSlider(10)" class="px-2.5 py-1 rounded-lg bg-white hover:bg-sky-50 text-slate-700 hover:text-sky-700 border border-slate-200 text-[11px] font-bold shadow-xs">10 kg (Borongan)</button>
                            </div>
                        </div>

                        
                        <div class="space-y-1.5">
                            <label for="calcPerfume" class="text-xs font-bold text-slate-700 flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-sky-600 text-white text-[10px] font-bold flex items-center justify-center">3</span>
                                <span>Pilihan Parfum Gratis</span>
                            </label>
                            <select id="calcPerfume" onchange="recalculateEstimate()" class="w-full px-4 py-3 min-h-[46px] rounded-xl bg-slate-50 text-slate-900 border border-slate-300 text-xs sm:text-sm font-semibold focus:outline-none focus:bg-white focus:border-sky-500 focus:ring-4 focus:ring-sky-500/15 transition-all">
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
                    <div class="bg-slate-900 rounded-3xl p-6 sm:p-7 text-white shadow-xl space-y-5 border border-slate-800">
                        
                        <div class="flex items-center justify-between pb-3.5 border-b border-slate-800">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-receipt text-sky-400 text-sm"></i>
                                <span class="text-xs font-bold uppercase tracking-wider text-white">Rincian Estimasi Biaya</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-md bg-slate-800 text-sky-300 border border-slate-700 text-[10px] font-bold">1 Mesin 1 Nota</span>
                        </div>

                        <div class="space-y-3 text-xs">
                            <div class="flex justify-between text-slate-300">
                                <span>Perhitungan Tarif:</span>
                                <span class="font-semibold text-white" id="calcPriceDetails">3.0 kg x Rp 7.000</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>Estimasi Pengerjaan:</span>
                                <span class="font-semibold text-white" id="calcDurationText">24 Jam (Kilat)</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>Parfum Pilihan:</span>
                                <span class="font-semibold text-sky-300" id="calcPerfumeText">Sakura Blossom</span>
                            </div>
                            <div class="flex justify-between text-slate-300 pt-2 border-t border-slate-800">
                                <span>Perkiraan Selesai:</span>
                                <span class="font-bold text-emerald-400" id="calcReadyTime">Besok, ~ 14.00 WIB</span>
                            </div>
                        </div>

                        
                        <div class="p-5 rounded-2xl bg-slate-950 border border-slate-800 space-y-1 text-center">
                            <span class="text-[11px] uppercase font-bold text-slate-400 block tracking-wider">Total Biaya Estimasi</span>
                            <div class="text-3xl sm:text-4xl font-black text-white" id="calcTotalPrice">
                                Rp 21.000
                            </div>
                            <span class="text-[10px] text-slate-400 block pt-1" id="calcMinHint">Ditimbang riil saat cucian tiba di gerai</span>
                        </div>

                        
                        <a href="#" id="calcWaBtn" target="_blank" class="w-full h-12 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-sm flex items-center justify-center gap-2 shadow-lg shadow-emerald-500/20 transition-all interactive-btn">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>Pesan via WhatsApp Sekarang</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <section id="parfum" class="site-container scroll-mt-28 space-y-12 sm:space-y-16 lg:space-y-20">
        
        <div class="text-center max-w-2xl mx-auto space-y-2.5 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-spray-can-sparkles text-sky-500"></i>
                <span>Katara Fragrance Bar</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                5 Pilihan Aroma Parfum Pakaian
            </h2>
            <p class="body-lead text-slate-600">
                Formula wangi grade premium tahan hingga 14 hari di serat pakaian tanpa meninggalkan noda minyak pada kain.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-5 rounded-3xl overflow-hidden shadow-xl border border-slate-200 bg-white reveal-left">
                <img src="{{ asset('images/laundry-fragrance.jpg') }}" 
                     alt="Koleksi Aroma Parfum Katara Laundry" 
                     class="w-full aspect-[4/3] sm:aspect-[16/10] lg:h-[440px] object-cover object-center">
                <div class="p-4 bg-slate-900 text-white text-xs">
                    <span class="font-bold text-sm block">100% Bebas Alkohol Keras</span>
                    <span class="text-slate-400 text-[11px] block">Aman untuk kulit sensitif dan pakaian anak-anak</span>
                </div>
            </div>

            
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 auto-rows-fr reveal-right h-full">
                @php
                    $perfumeNotes = [
                        1 => ['top' => 'Fresh Cherry, White Peach', 'base' => 'Soft Musk, Clean Cotton', 'tag' => 'Floral Lembut', 'accent' => 'border-rose-200 bg-rose-50/50 text-rose-700'],
                        2 => ['top' => 'Citrus Marine, Ozone', 'base' => 'Cedarwood, Amber', 'tag' => 'Segar Maskulin', 'accent' => 'border-cyan-200 bg-cyan-50/50 text-cyan-700'],
                        3 => ['top' => 'French Lavender, Bergamot', 'base' => 'Vanilla, Herbal Calming', 'tag' => 'Aromaterapi', 'accent' => 'border-purple-200 bg-purple-50/50 text-purple-700'],
                        4 => ['top' => 'Sparkling Pear, Jasmine', 'base' => 'Sandalwood, White Lily', 'tag' => 'Mewah Elegan', 'accent' => 'border-amber-200 bg-amber-50/50 text-amber-700'],
                        5 => ['top' => 'Powdery Rose, Sweet Almond', 'base' => 'Chamomile, Soft Cotton', 'tag' => 'Lembut Bayi', 'accent' => 'border-sky-200 bg-sky-50/50 text-sky-700'],
                    ];
                @endphp

                @foreach($perfumes as $idx => $pf)
                    @php
                        $notes = $perfumeNotes[$pf->id] ?? ['top' => 'Fresh Essence', 'base' => 'Soft Cotton', 'tag' => 'Pilihan Utama', 'accent' => 'border-sky-200 bg-sky-50/50 text-sky-700'];
                    @endphp
                    <div class="perfume-card-item interactive-card bg-white rounded-2xl p-5 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-400 cursor-pointer space-y-3 flex flex-col justify-between" 
                         onclick="selectPerfumeCard('{{ $pf->name }}', this)">
                        
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-full border text-[10px] font-bold {{ $notes['accent'] }}">
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

                        <div class="space-y-1.5 pt-3 border-t border-slate-100 text-[11px] text-slate-500">
                            <div><strong class="text-slate-700 font-semibold">Top:</strong> {{ $notes['top'] }}</div>
                            <div><strong class="text-slate-700 font-semibold">Base:</strong> {{ $notes['base'] }}</div>
                            <div class="flex items-center justify-between text-[11px] pt-1 text-sky-600 font-bold">
                                <span>Pilih di Kalkulator</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    
    <section id="cara-pesan" class="site-container space-y-12 sm:space-y-16 lg:space-y-20 scroll-mt-28">
            
            <div class="text-center max-w-2xl mx-auto space-y-2.5 reveal-up">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                    <i class="fa-solid fa-list-check text-sky-500"></i>
                    <span>Standar Pengerjaan Katara Laundry</span>
                </span>
                <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                    5 Langkah Mudah Mencuci di Katara
                </h2>
                <p class="body-lead text-slate-600">
                    Setiap tahapan tercatat otomatis di sistem hingga pakaian rapi tersimpan di slot rak.
                </p>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-5">
                
                
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Drop atau Penjemputan Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-black text-xs flex items-center justify-center border border-white">
                            01
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-emerald-300 bg-slate-900/80 px-2 py-0.5 rounded">Drop / Pickup</span>
                    </div>
                    <div class="p-4 space-y-1 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Drop / Pickup</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Bawa cucian kotor ke gerai Dinoyo atau chat WhatsApp untuk penjemputan ke kos/rumah Anda.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="Timbang dan Tagging Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-black text-xs flex items-center justify-center border border-white">
                            02
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-sky-300 bg-slate-900/80 px-2 py-0.5 rounded">Timbang Digital</span>
                    </div>
                    <div class="p-4 space-y-1 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Timbang &amp; Tagging</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Ditimbang terbuka digital, terbit nota resmi KTR, dan bebas pilih 1 varian parfum gratis.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Cuci 1 Mesin Sendiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-black text-xs flex items-center justify-center border border-white">
                            03
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-cyan-300 bg-slate-900/80 px-2 py-0.5 rounded">1 Mesin Sendiri</span>
                    </div>
                    <div class="p-4 space-y-1 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Cuci 1 Mesin Sendiri</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Drum front-loading terpisah tanpa campur. Deterjen enzim cair membersihkan kotoran secara optimal.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Kering Gas Dryer Bebas Apek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-slate-900 text-white font-black text-xs flex items-center justify-center border border-white">
                            04
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-amber-300 bg-slate-900/80 px-2 py-0.5 rounded">Gas Dryer 100%</span>
                    </div>
                    <div class="p-4 space-y-1 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Kering Gas Dryer</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Suhu terkontrol membasmi kuman dan tungau. Kering 100% tuntas bebas bau apek cuaca mendung.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 flex flex-col justify-between reveal-up interactive-card group">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap & Masuk Rak" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-2.5 left-2.5 w-7 h-7 rounded-lg bg-sky-600 text-white font-black text-xs flex items-center justify-center border border-white">
                            05
                        </div>
                        <span class="absolute bottom-2 left-2.5 text-[10px] font-bold text-sky-200 bg-slate-900/80 px-2 py-0.5 rounded">Setrika &amp; Rak</span>
                    </div>
                    <div class="p-4 space-y-1 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Setrika &amp; Masuk Rak</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed font-normal">
                                Setrika uap boiler halus, semprot parfum, di-packing kedap debu, dan masuk ke slot rak fisik siap diambil.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    
    <section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-9">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-5 space-y-4 reveal-left">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                        <i class="fa-solid fa-shield-halved text-sky-500"></i>
                        <span>Komitmen Bersih</span>
                    </span>
                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Standar Higienis &amp; Jaminan Bebas Khawatir
                    </h2>
                    <p class="body-lead text-slate-600 leading-relaxed font-normal">
                        Pakaian Anda diperlakukan secara higienis sejak pertama kali diterima. Jika hasil cucian dirasa kurang bersih atau kurang wangi, kami siap mencuci ulang tanpa biaya tambahan.
                    </p>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-sky-600 text-white flex items-center justify-center text-lg shrink-0">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 text-xs sm:text-sm block">Garansi 100% Cuci Ulang Gratis</span>
                            <span class="text-[11px] text-slate-500 block">Klaim mudah dalam 24 jam setelah pengambilan cucian</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3.5 text-xs reveal-right">
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">Mesin Disanitasi Berkala</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Drum mesin cuci dibersihkan dengan desinfektan antibakteri secara rutin.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">100% Tidak Pernah Dicampur</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">SOP tegas 1 mesin 1 nota tanpa toleransi kompromi.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">Area Kerja Bersih &amp; Teratur</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Pakaian ditaruh di keranjang bersih dan bebas dari paparan debu jalan.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">Kemasan Plastik Tebal</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Melindungi pakaian dari cipratan air hujan dan debu saat dibawa pulang.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">Pemeriksaan Saku Teliti</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Pengecekan teliti agar koin, kartu, atau barang berharga tidak tertinggal.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="fa-solid fa-check text-emerald-600 text-sm mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="text-slate-900 font-bold block">Timbangan Digital Tera Resmi</strong>
                            <p class="text-slate-600 mt-0.5 font-normal">Berat cucian ditimbang terbuka dan akurat di hadapan Anda.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <section id="testimoni" class="site-container scroll-mt-28 space-y-12 sm:space-y-16 lg:space-y-20">
        
        <div class="text-center max-w-2xl mx-auto space-y-2.5 reveal-up">
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
            
            
            <div class="reveal-up interactive-card bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Sebagai anak kos UB yang mager jemur baju pas musim hujan di Malang, Katara penyelamat banget! Gas dryernya beneran kering total tanpa bau apek. Wangi Sakura Blossom-nya tahan berhari-hari!"
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-dimas.jpg') }}" 
                         alt="Foto Dimas Nugroho Mahasiswa UB" 
                         class="w-12 h-12 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Dimas Nugroho</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Mahasiswa Universitas Brawijaya (UB)</p>
                    </div>
                </div>
            </div>

            
            <div class="reveal-up interactive-card bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Suka banget sama fitur lacak status cucian lewat website ini! Gak perlu bolak-balik chat kasir nanya 'baju saya sudah jadi belum'. Pas statusnya sudah di rak, langsung cus ke gerai."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-siti.jpg') }}" 
                         alt="Foto Siti Anggraini Mahasiswi Polinema" 
                         class="w-12 h-12 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Siti Anggraini</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Mahasiswi Polinema Jurusan Akuntansi</p>
                    </div>
                </div>
            </div>

            
            <div class="reveal-up interactive-card bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400 text-xs gap-1">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 italic leading-relaxed">
                        "Bedcover king size saya dicuci bersih tanpa gumpalan, wangi Snappy Luxury elegan seperti hotel bintang lima. Sistem rak fisiknya rapi banget, pakaian keluarga gak pernah tertukar."
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mt-auto">
                    <img src="{{ asset('images/avatar-rina.jpg') }}" 
                         alt="Foto Rina Puspitasari Warga Dinoyo" 
                         class="w-12 h-12 rounded-full object-cover shrink-0 border border-slate-200">
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-slate-900">Rina Puspitasari</h4>
                        <p class="text-[10px] sm:text-xs text-slate-500">Warga Perumahan Dinoyo Malang</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
    <section id="galeri" class="site-container scroll-mt-28 space-y-12 sm:space-y-16 lg:space-y-20">
        
        <div class="text-center max-w-2xl mx-auto space-y-2.5 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-camera-retro text-sky-500"></i>
                <span>Dokumentasi &amp; Fasilitas</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                Galeri Gerai & Operasional Katara Dinoyo
            </h2>
            <p class="body-lead text-slate-600">
                Lihat langsung standar kebersihan mesin, stasiun setrika uap, dan fasilitas pelayanan kami di Jl. MT. Haryono Dinoyo Malang.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-hero.jpg') }}" alt="Tampak Depan Gerai Katara Laundry Dinoyo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Front Desk Gerai
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Gerai Utama Dinoyo</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">Area penerimaan, timbangan digital terbuka, dan customer lounge.</p>
                </div>
            </div>

            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Deretan Drum Mesin Cuci Komersial" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Mesin Komersial
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Drum Cuci Front Load Stainless</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">1 mesin khusus 1 nota pelanggan, higienis disanitasi berkala.</p>
                </div>
            </div>

            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Stasiun Setrika Uap Boiler" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Finishing Presisi
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Setrika Uap Boiler Industri</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">Uap panas merata melicinkan serat kain tanpa risiko mengkilap.</p>
                </div>
            </div>

            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/service-express.jpg') }}" alt="Area Penyerahan & Tagging Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Express &amp; Tagging
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Pengemasan &amp; Siap Ambil</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">Plastik proteksi ganda dengan barcode label nota terdata rapi.</p>
                </div>
            </div>

            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/service-shoes.jpg') }}" alt="Workshop Cuci Sepatu Sneakers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Workshop Sepatu
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Spesialis Sneakers &amp; Canvas</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">Pencucian manual dengan pembersih khusus busa dan sikat halus.</p>
                </div>
            </div>

            <div class="group rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-md reveal-up interactive-card flex flex-col justify-between">
                <div class="relative aspect-[16/11] overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Armada Kurir Antar Jemput Dinoyo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-white border border-white/20 shadow-xs">
                        Armada Kurir
                    </span>
                </div>
                <div class="p-5 bg-white border-t border-slate-100 space-y-1">
                    <h4 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">Layanan Antar-Jemput Cepat</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">Siap meluncur ke kos dan perumahan di sekitar kampus Dinoyo.</p>
                </div>
            </div>

        </div>
    </section>

    
    <section id="faq" class="site-container-narrow scroll-mt-28 space-y-12 sm:space-y-16 lg:space-y-20">
        
        <div class="text-center space-y-2.5 reveal-up">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                <i class="fa-solid fa-circle-question text-sky-500"></i>
                <span>Tanya Jawab</span>
            </span>
            <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="body-lead text-slate-600">
                Punya pertanyaan sebelum mencuci? Berikut jawaban ringkas untuk kenyamanan Anda.
            </p>
        </div>

        <div class="space-y-3.5">
            
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:border-sky-300 reveal-up interactive-card">
                <button type="button" onclick="toggleFaq(1)" class="w-full p-5 min-h-[50px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false" id="faq-btn-1">
                    <span>Apakah pakaian saya dicampur dengan pakaian pelanggan lain?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-1"></i>
                </button>
                <div id="faq-content-1" class="hidden px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    <strong class="text-slate-900">Sama sekali tidak!</strong> Katara Laundry menerapkan SOP tegas <em>1 Mesin 1 Pelanggan</em>. Pakaian Anda diproses dalam drum terpisah sejak tahap pencucian, pengeringan, hingga setrika uap demi higienitas maksimal.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:border-sky-300 reveal-up interactive-card">
                <button type="button" onclick="toggleFaq(2)" class="w-full p-5 min-h-[50px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false" id="faq-btn-2">
                    <span>Berapa lama estimasi pakaian selesai dicuci?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-2"></i>
                </button>
                <div id="faq-content-2" class="hidden px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Kami menyediakan 3 pilihan kecepatan: <strong class="text-slate-900">Reguler (48 Jam)</strong>, <strong class="text-slate-900">Kilat (24 Jam)</strong>, dan <strong class="text-slate-900">Express Prioritas (6 Jam)</strong>. Anda dapat memilih paket sesuai kebutuhan waktu Anda saat penimbangan.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:border-sky-300 reveal-up interactive-card">
                <button type="button" onclick="toggleFaq(3)" class="w-full p-5 min-h-[50px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false" id="faq-btn-3">
                    <span>Bagaimana cara melacak status pakaian saya secara mandiri?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-3"></i>
                </button>
                <div id="faq-content-3" class="hidden px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Cukup masukkan nomor nota transaksi Anda (contoh: <code class="text-sky-700 bg-sky-50 px-2 py-0.5 rounded border border-sky-200">KTR-20260906-0001</code>) atau nomor WhatsApp yang terdaftar pada form pelacakan di beranda website ini. Anda akan melihat tahapan pengerjaan (cuci, kering, setrika, rak penyimpanan) secara real-time.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:border-sky-300 reveal-up interactive-card">
                <button type="button" onclick="toggleFaq(4)" class="w-full p-5 min-h-[50px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false" id="faq-btn-4">
                    <span>Apakah ada layanan antar-jemput cucian di kawasan Dinoyo?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-4"></i>
                </button>
                <div id="faq-content-4" class="hidden px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Ya, kami melayani antar-jemput pakaian di kawasan Dinoyo, Sigura-gura, Sumbersari, Soekarno-Hatta (Suhat), Tlogomas, dan sekitarnya. Hubungi hotline WhatsApp kami untuk penjadwalan kurir.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:border-sky-300 reveal-up interactive-card">
                <button type="button" onclick="toggleFaq(5)" class="w-full p-5 min-h-[50px] text-left font-bold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false" id="faq-btn-5">
                    <span>Apakah ada garansi jika hasil cucian kurang bersih?</span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-5"></i>
                </button>
                <div id="faq-content-5" class="hidden px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Tentu saja! Jika ada pakaian yang dirasa kurang rapi atau aroma parfum kurang semerbak, Anda berhak mengajukan <strong class="text-slate-900">garansi cuci ulang gratis 100%</strong> maksimal dalam waktu 24 jam setelah pakaian diambil.
                </div>
            </div>

        </div>
    </section>

    
    <section id="lokasi" class="site-container scroll-mt-28">
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-9">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                
                <div class="space-y-4 reveal-left">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                            <i class="fa-solid fa-location-dot text-sky-500"></i>
                            <span>Lokasi Strategis</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-[11px] font-bold border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>Buka Setiap Hari</span>
                        </span>
                    </div>

                    <h2 class="heading-section font-extrabold text-slate-900 tracking-tight">
                        Kunjungi Gerai Katara Dinoyo Malang
                    </h2>
                    <p class="body-lead text-slate-600 leading-relaxed font-normal">
                        Terletak strategis di kawasan Dinoyo Lowokwaru. Sangat mudah dijangkau dari gerbang UB Dinoyo, Kampus UM, Polinema, dan UIN Malang.
                    </p>

                    <div class="space-y-3 text-xs">
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3.5">
                            <div class="w-9 h-9 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center shrink-0 border border-rose-200 text-sm">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-xs">Alamat Gerai:</h4>
                                <p class="text-slate-600 mt-0.5 leading-relaxed font-normal">
                                    Jl. MT. Haryono / Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144.
                                </p>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3.5">
                            <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-200 text-sm">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-xs">Jam Operasional:</h4>
                                <p class="text-slate-600 mt-0.5 font-normal">
                                    Senin &ndash; Sabtu: <strong class="text-slate-900">07.00 - 21.00 WIB</strong><br>
                                    Minggu / Hari Libur: <strong class="text-slate-900">08.00 - 20.00 WIB</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="inline-flex items-center justify-center gap-2 h-11 px-5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold transition-all shadow-xs interactive-btn border border-slate-700">
                            <i class="fa-solid fa-diamond-turn-right text-sky-400"></i>
                            <span>Buka di Google Maps</span>
                        </a>
                    </div>
                </div>

                
                <div class="bg-slate-50 rounded-3xl p-6 sm:p-7 text-slate-800 space-y-4 border border-slate-200 reveal-right">
                    <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm relative group">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" 
                             alt="Kurir Antar-Jemput Katara Laundry di Kawasan Dinoyo Malang" 
                             class="w-full aspect-[16/9] object-cover">
                        <div class="p-3 bg-slate-900 text-white flex items-center justify-between text-xs">
                            <span class="font-semibold text-xs flex items-center gap-2">
                                <i class="fa-solid fa-motorcycle text-emerald-400"></i>
                                <span>Kurir Antar-Jemput Dinoyo</span>
                            </span>
                            <span class="text-[10px] text-slate-300 font-semibold bg-slate-800 px-2 py-0.5 rounded">Radius 3 - 5 KM</span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Kami melayani penjemputan &amp; pengantaran cucian untuk kos-kosan dan perumahan sekitar kampus:
                    </p>

                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Dinoyo &amp; MT Haryono</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Sigura-gura &amp; Bendungan</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Sumbersari &amp; Gajayana</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Soekarno-Hatta (Suhat)</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Tlogomas &amp; Landungsari</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                            <span>Ketawanggede / UB</span>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2 text-slate-600">
                            <i class="fa-solid fa-circle-info text-sky-500"></i>
                            <span>Layanan jemput cucian berlaku setiap hari operasional.</span>
                        </div>
                        <span class="text-[11px] font-bold text-emerald-600">Radius 3-5 KM</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <section class="site-container">
        <div class="bg-gradient-to-br from-slate-900 via-[#0a1e38] to-[#071325] rounded-3xl p-8 sm:p-12 text-white border border-sky-800/60 shadow-2xl reveal-up">
            <div class="relative z-10 max-w-2xl mx-auto text-center space-y-5">
                <span class="px-3.5 py-1.5 rounded-full bg-sky-900/80 text-sky-300 text-xs font-bold uppercase tracking-wider inline-block border border-sky-700/60">
                    Layanan Laundry Dinoyo Malang
                </span>
                <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    Pakaian Bersih, Rapi &amp; Harum Semerbak Tanpa Repot
                </h2>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto leading-relaxed font-normal">
                    Serahkan cucian Anda pada Katara Laundry Dinoyo. Cukup hubungi WhatsApp untuk jadwal kurir jemput atau drop-off langsung ke gerai kami.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                    <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20saya%20mau%20order%20laundry%20sekarang" target="_blank" class="inline-flex items-center justify-center gap-2.5 h-12 px-6 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-xs sm:text-sm shadow-lg shadow-emerald-500/25 transition-all interactive-btn border border-emerald-400/50">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>Pesan via WhatsApp</span>
                    </a>
                    <a href="#lacak" class="inline-flex items-center justify-center gap-2 h-12 px-6 rounded-xl bg-sky-950 hover:bg-sky-900 border border-sky-700/70 text-sky-200 font-bold text-xs sm:text-sm transition-all interactive-btn shadow-xs">
                        <i class="fa-solid fa-magnifying-glass text-sky-400 text-xs sm:text-sm"></i>
                        <span>Lacak Status Nota</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>


<div id="demoModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 bg-slate-950/80 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="bg-gradient-to-br from-[#07152b] via-[#0a1e3a] to-[#08172c] rounded-2xl sm:rounded-3xl max-w-xl w-full max-h-[90vh] overflow-y-auto p-4 sm:p-5 space-y-3.5 shadow-2xl border border-sky-800/70 relative text-white">
        
        <button type="button" onclick="closeDemoModal()" class="absolute top-4 right-4 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#0b1d38] hover:bg-sky-900 text-slate-300 hover:text-white border border-sky-800/60 flex items-center justify-center text-xs transition-colors shadow-2xs" aria-label="Tutup Pratinjau Demo">
            <i class="fa-solid fa-xmark"></i>
        </button>

        
        <div class="space-y-1 pr-8">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-sky-950/90 text-sky-300 border border-sky-800/70 text-[10px] font-bold">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400 animate-pulse"></span>
                    Simulasi Pelacakan Pelanggan
                </span>
            </div>
            <h3 id="modalTitle" class="text-base sm:text-lg font-black text-white tracking-tight">Demo Transparansi Pelacakan Real-Time</h3>
            <p class="text-xs text-slate-300 leading-snug">Begini tampilan status yang Anda lihat saat memasukkan nomor nota di website Katara.</p>
        </div>

        
        <div class="p-4 sm:p-4.5 rounded-xl bg-[#060e1d]/90 border border-sky-800/60 flex flex-col sm:flex-row sm:items-center justify-between gap-4 sm:gap-6">
            <div class="space-y-1">
                <span class="text-[10px] uppercase font-bold text-sky-400/90 tracking-wider">Nomor Nota Transaksi</span>
                <div class="text-base sm:text-lg font-black text-white font-mono tracking-tight">KTR-20260906-0001</div>
                <div class="text-[11px] text-slate-300">Pelanggan: <strong class="text-white font-semibold">Rifki Pratama (UB)</strong> &bull; Layanan: <strong class="text-sky-200 font-semibold">Cuci Kering Setrika</strong></div>
            </div>
            <div class="flex flex-col sm:items-end justify-center gap-2 w-full sm:w-auto shrink-0">
                <span class="w-full sm:w-44 h-8 rounded-lg flex items-center justify-center gap-2 px-3 text-xs font-bold bg-emerald-950/90 text-emerald-300 border border-emerald-500/40 shadow-2xs">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
                    <span>Siap Diambil</span>
                </span>
                <div class="w-full sm:w-44 h-8 rounded-lg flex items-center justify-center gap-2 px-3 text-xs font-semibold text-slate-200 bg-[#0b1d38] border border-sky-800/60 shadow-2xs">
                    <i class="fa-solid fa-boxes-stacked text-sky-400 text-xs shrink-0"></i>
                    <span>Posisi Rak: <strong class="text-white font-bold">B-08</strong></span>
                </div>
            </div>
        </div>

        
        <div class="space-y-2 pt-0.5">
            <h4 class="text-xs font-bold uppercase tracking-wider text-sky-300/90">Tahapan Pengerjaan di Gerai Dinoyo:</h4>
            
            <div class="grid grid-cols-6 gap-1 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold shadow-xs border border-emerald-500 mb-1.5">
                        <i class="fa-solid fa-check text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-white block leading-snug">Nota Masuk</span>
                    <span class="text-xs text-slate-300 font-medium block leading-tight mt-0.5">Ditimbang</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold shadow-xs border border-emerald-500 mb-1.5">
                        <i class="fa-solid fa-check text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-white block leading-snug">Dicuci</span>
                    <span class="text-xs text-slate-300 font-medium block leading-tight mt-0.5">1 Mesin</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold shadow-xs border border-emerald-500 mb-1.5">
                        <i class="fa-solid fa-check text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-white block leading-snug">Kering Gas</span>
                    <span class="text-xs text-slate-300 font-medium block leading-tight mt-0.5">Anti-Apek</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold shadow-xs border border-emerald-500 mb-1.5">
                        <i class="fa-solid fa-check text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-white block leading-snug">Setrika Uap</span>
                    <span class="text-xs text-slate-300 font-medium block leading-tight mt-0.5">Boiler</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold shadow-xs border border-emerald-500 mb-1.5">
                        <i class="fa-solid fa-check text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-white block leading-snug">Pengemasan</span>
                    <span class="text-xs text-slate-300 font-medium block leading-tight mt-0.5">Parfum</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 mx-auto rounded-full bg-sky-600 text-white flex items-center justify-center text-xs font-bold shadow-md shadow-sky-600/30 border border-sky-400 mb-1.5">
                        <i class="fa-solid fa-boxes-stacked text-[11px]"></i>
                    </div>
                    <span class="font-bold text-xs sm:text-sm text-sky-300 block leading-snug">Siap Ambil</span>
                    <span class="text-xs text-emerald-400 font-bold block leading-tight mt-0.5">Di Rak</span>
                </div>
            </div>
        </div>

        
        <div class="flex items-center gap-3 p-3 rounded-xl bg-[#060e1d]/90 border border-sky-800/60">
            <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Pakaian Rapi di Slot Rak" class="w-12 h-12 rounded-lg object-cover shrink-0 border border-sky-800/70 shadow-xs">
            <div class="space-y-0.5 text-xs min-w-0">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-white text-xs truncate">Pakaian Lolos QC &amp; Siap Diambil</span>
                    <span class="px-2 py-0.5 rounded bg-sky-950/90 text-sky-300 border border-sky-800/60 font-bold text-[9px] shrink-0">Rak B-08</span>
                </div>
                <p class="text-[11px] text-slate-300 leading-snug font-normal line-clamp-2">
                    Pakaian telah disetrika halus, disemprot parfum pilihan, dikemas plastik kedap debu, dan aman tersimpan di slot rak fisik.
                </p>
            </div>
        </div>

        
        <div class="pt-4 border-t border-sky-900/60 flex flex-col sm:flex-row items-center justify-between gap-3">
            <button type="button" 
                    onclick="fillInvoiceInput('KTR-20260906-0001'); closeDemoModal(); document.getElementById('invoiceInput').focus();" 
                    class="w-full sm:w-auto px-4 h-9 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold transition-all flex items-center justify-center gap-2 shadow-sm shadow-sky-600/30 active:scale-[0.99] border border-sky-500/50">
                <span>Coba Lacak Nota Ini</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>
            <button type="button" onclick="closeDemoModal()" class="w-full sm:w-auto px-4 h-9 text-xs text-slate-200 hover:text-white font-semibold flex items-center justify-center rounded-xl bg-[#0b1d38] hover:bg-sky-900 border border-sky-800/60 transition-colors shadow-2xs">
                Tutup Pratinjau
            </button>
        </div>
    </div>
</div>


<div id="trackingResultModal" class="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4 overflow-y-auto hidden" role="dialog" aria-modal="true" aria-labelledby="popInvoiceNumber">
    <div class="relative w-full max-w-xl bg-gradient-to-br from-[#07152b] via-[#0a1e3a] to-[#08172c] rounded-2xl sm:rounded-3xl shadow-2xl border border-sky-800/70 overflow-hidden my-auto animate-fade-in text-white">
        
        
        <div class="px-4 py-2.5 sm:px-5 sm:py-3 bg-[#050d1a]/90 border-b border-sky-900/60 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-[11px] font-bold uppercase tracking-wider text-sky-300">Pelacakan Real-Time Katara Laundry</span>
            </div>
            <button type="button" onclick="closeTrackingModal()" class="w-7 h-7 rounded-full bg-[#0b1d38] hover:bg-sky-900 text-slate-300 hover:text-white transition-colors flex items-center justify-center border border-sky-800/60 shadow-2xs text-xs" title="Tutup">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="p-4 sm:p-5 space-y-3.5">
            
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 sm:gap-6 pb-4 border-b border-sky-900/60">
                <div class="space-y-1">
                    <span class="text-[10px] font-bold text-sky-400/90 uppercase tracking-wider">Nomor Nota Transaksi</span>
                    <h3 id="popInvoiceNumber" class="text-xl sm:text-2xl font-black font-mono tracking-tight text-white leading-tight">KTR-20260906-0001</h3>
                    <p class="text-[11px] text-slate-300">
                        Atas Nama: <strong id="popCustomerName" class="text-white font-semibold">-</strong> 
                        &bull; Masuk: <span id="popOrderDate" class="text-slate-300 font-medium">-</span>
                    </p>
                </div>
                <div class="flex flex-col sm:items-end justify-center gap-2 w-full sm:w-auto shrink-0">
                    <span id="popStatusBadge" class="w-full sm:w-48 h-8 rounded-lg flex items-center justify-center gap-2 px-3 text-xs font-bold bg-emerald-950/90 text-emerald-300 border border-emerald-500/40 shadow-2xs">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
                        <span id="popStatusLabel">Siap Diambil di Rak</span>
                    </span>
                    <div id="popRackWrapper" class="w-full sm:w-48 h-8 rounded-lg flex items-center justify-center gap-2 px-3 text-xs font-semibold text-slate-200 bg-[#0b1d38] border border-sky-800/60 shadow-2xs">
                        <i class="fa-solid fa-boxes-stacked text-sky-400 text-xs shrink-0"></i>
                        <span>Posisi Rak: <strong id="popRackCode" class="text-white font-bold">-</strong></span>
                    </div>
                </div>
            </div>

            
            <div class="space-y-2.5">
                <div class="flex items-center justify-between text-xs">
                    <span class="font-bold text-white text-xs sm:text-sm">Tahapan Pengerjaan Pakaian:</span>
                    <span id="popProgressPercentText" class="text-xs sm:text-sm font-bold text-emerald-400">Selesai 100% • Siap Diambil</span>
                </div>
                
                
                <div class="relative pt-2 pb-1">
                    
                    <div class="absolute top-[20px] left-[6%] right-[6%] h-1 bg-slate-800 rounded-full z-0">
                        
                        <div id="popProgressLine" class="h-full bg-emerald-500 rounded-full transition-all duration-500" style="width: 100%;"></div>
                    </div>

                    
                    <div class="relative z-10 grid grid-cols-6 text-center gap-1">
                        
                        
                        <div id="popStep-1" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Nota Masuk</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">Ditimbang</span>
                        </div>

                        
                        <div id="popStep-2" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Dicuci</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">1 Mesin</span>
                        </div>

                        
                        <div id="popStep-3" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Kering Gas</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">Anti-Apek</span>
                        </div>

                        
                        <div id="popStep-4" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Setrika Uap</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">Boiler</span>
                        </div>

                        
                        <div id="popStep-5" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Pengemasan</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">Parfum</span>
                        </div>

                        
                        <div id="popStep-6" class="step-item flex flex-col items-center">
                            <div class="step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all shadow-2xs border-2 bg-emerald-600 text-white border-emerald-500">
                                <i class="fa-solid fa-check text-[11px]"></i>
                            </div>
                            <span class="step-title font-bold text-xs sm:text-sm text-white block leading-snug">Siap Ambil</span>
                            <span class="step-sub text-xs text-slate-300 font-medium block leading-tight mt-0.5">Di Rak</span>
                        </div>

                    </div>
                </div>
            </div>

            
            <div class="rounded-xl bg-[#060e1d]/90 border border-sky-800/60 p-3 sm:p-3.5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 divide-y sm:divide-y-0 sm:divide-x divide-sky-900/60 text-xs">
                    
                    
                    <div class="space-y-1.5 sm:pr-3">
                        <span class="text-[10px] font-bold text-sky-400/90 uppercase tracking-wider block">Jadwal &amp; Aroma</span>
                        <div class="flex items-center justify-between text-[11px]">
                            <span class="text-slate-300">Estimasi Selesai:</span>
                            <strong id="popEstimatedCompletion" class="text-white font-semibold">-</strong>
                        </div>
                        <div class="flex items-center justify-between text-[11px]">
                            <span class="text-slate-300">Aroma Parfum:</span>
                            <span class="inline-flex items-center gap-1 font-semibold text-purple-300 bg-purple-950/80 px-2 py-0.5 rounded border border-purple-800/60 text-[10px]">
                                <i class="fa-solid fa-spray-can text-[9px]"></i>
                                <span id="popPerfume">-</span>
                            </span>
                        </div>
                    </div>

                    
                    <div class="space-y-1.5 pt-2 sm:pt-0 sm:pl-3">
                        <span class="text-[10px] font-bold text-sky-400/90 uppercase tracking-wider block">Rincian Pembayaran</span>
                        <div class="flex items-center justify-between text-[11px]">
                            <span class="text-slate-300">Total Biaya:</span>
                            <strong id="popTotalPrice" class="text-white font-black text-xs sm:text-sm">Rp 0</strong>
                        </div>
                        <div class="flex items-center justify-between text-[11px]">
                            <span class="text-slate-300">Status Bayar:</span>
                            <span id="popPaymentStatus" class="font-bold text-emerald-400">LUNAS ✅</span>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="pt-4 border-t border-sky-900/60 flex flex-col sm:flex-row items-center justify-between gap-3">
                <a id="popWaContactBtn" href="#" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 h-9 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none transition-all shadow-sm shadow-emerald-600/20 border border-emerald-500/40 active:scale-[0.99]">
                    <i class="fa-brands fa-whatsapp text-sm leading-none shrink-0"></i>
                    <span class="leading-none">Konfirmasi ke Kasir</span>
                </a>
                <div class="flex items-center gap-2.5 w-full sm:w-auto">
                    <a id="popDetailLink" href="#" class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 px-4 h-9 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs leading-none transition-all shadow-sm shadow-sky-600/20 border border-sky-500/40 active:scale-[0.99]">
                        <span class="leading-none">Halaman Nota Lengkap</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-white leading-none shrink-0"></i>
                    </a>
                    <button type="button" onclick="closeTrackingModal()" class="inline-flex items-center justify-center gap-2 px-4 h-9 rounded-xl bg-[#0b1d38] hover:bg-sky-900 text-slate-200 hover:text-white border border-sky-800/60 font-bold text-xs leading-none transition-all shadow-2xs active:scale-[0.99]">
                        <span class="leading-none">Tutup</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="trackingErrorModal" class="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4 overflow-y-auto hidden" role="dialog" aria-modal="true">
    <div class="relative w-full max-w-sm bg-gradient-to-br from-[#07152b] via-[#0a1e3a] to-[#08172c] rounded-2xl sm:rounded-3xl shadow-2xl border border-sky-800/70 p-5 text-center space-y-3.5 my-auto animate-fade-in text-white">
        <div class="w-12 h-12 mx-auto rounded-xl bg-rose-950/70 text-rose-400 flex items-center justify-center text-xl border border-rose-800/60 shadow-inner">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <div class="space-y-1">
            <h3 class="text-base font-bold text-white tracking-tight">Nota Tidak Ditemukan</h3>
            <p id="popErrorMessage" class="text-xs text-slate-300 leading-relaxed">
                Nomor nota atau nomor WhatsApp yang Anda masukkan tidak terdaftar di sistem.
            </p>
        </div>
        <div class="pt-3 flex flex-col sm:flex-row items-center justify-center gap-2.5">
            <button type="button" onclick="closeTrackingErrorModal()" class="w-full sm:w-auto inline-flex items-center justify-center px-4 h-9 rounded-xl bg-[#0b1d38] hover:bg-sky-900 text-slate-200 hover:text-white font-bold text-xs leading-none transition-colors border border-sky-800/60 shadow-2xs">
                <span class="leading-none">Coba Lagi</span>
            </button>
            <a href="https://wa.me/6281234567890?text=Halo%20Kasir%20Katara,%20saya%20ingin%20tanya%20status%20cucian%20saya" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 h-9 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none transition-colors shadow-xs">
                <i class="fa-brands fa-whatsapp text-sm leading-none shrink-0"></i>
                <span class="leading-none">Tanya Kasir Dinoyo</span>
            </a>
        </div>
    </div>
</div>


<div id="toastNotification" class="fixed top-6 sm:top-8 left-1/2 -translate-x-1/2 z-50 pointer-events-none transition-all duration-300 transform -translate-y-12 opacity-0 w-[90%] max-w-sm flex justify-center" role="alert" aria-live="polite">
    <div class="px-5 py-3 rounded-full bg-slate-900/95 backdrop-blur-md text-white border border-slate-700 shadow-2xl text-xs font-semibold flex items-center gap-2.5 text-center">
        <span class="w-2 h-2 rounded-full bg-emerald-400 shrink-0 animate-pulse"></span>
        <span id="toastMessage">Aroma terpilih pada simulasi kalkulator!</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function filterServices(category) {
        const cards = document.querySelectorAll('.service-card');
        const buttons = document.querySelectorAll('.service-tab-btn');

        buttons.forEach(btn => {
            btn.classList.remove('active', 'bg-sky-600', 'text-white', 'shadow-xs');
            btn.classList.add('text-slate-600');
        });

        const activeBtn = document.getElementById('btn-tab-' + category);
        if (activeBtn) {
            activeBtn.classList.add('active', 'bg-sky-600', 'text-white', 'shadow-xs');
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

    function selectServiceForCalc(serviceId) {
        const select = document.getElementById('calcService');
        if (select) {
            select.value = serviceId;
            recalculateEstimate();
        }
        const calcSection = document.getElementById('kalkulator');
        if (calcSection) {
            calcSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    function fillInvoiceInput(val) {
        const input = document.getElementById('invoiceInput');
        if (input) {
            input.value = val;
            input.focus();
            input.classList.add('ring-4', 'ring-sky-400/40', 'border-sky-500');
            setTimeout(() => input.classList.remove('ring-4', 'ring-sky-400/40', 'border-sky-500'), 1500);
        }
        executeTracking(val);
    }

    function recalculateEstimate() {
        const select = document.getElementById('calcService');
        const slider = document.getElementById('calcWeight');
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
        const sliderDisplay = document.getElementById('calcWeightLabel');

        if (qtyLabel) {
            qtyLabel.textContent = unit === 'kg' ? 'Estimasi Berat Cucian' : 'Jumlah Barang (' + unit.toUpperCase() + ')';
        }
        if (minHint) {
            minHint.textContent = 'Min. order ' + minOrder + ' ' + unit + ' • Ditimbang riil saat cucian tiba di gerai';
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
                detailsDisplay.textContent = billableQty.toFixed(1) + ' ' + unit + ' (Ketentuan Min) x Rp ' + price.toLocaleString('id-ID');
            } else {
                detailsDisplay.textContent = qty.toFixed(1) + ' ' + unit + ' x Rp ' + price.toLocaleString('id-ID');
            }
        }

        const durationDisplay = document.getElementById('calcDurationText');
        if (durationDisplay) {
            durationDisplay.textContent = hours + ' Jam (' + (hours <= 6 ? 'Express 6 Jam' : (hours <= 24 ? 'Layanan Kilat' : 'Paket Reguler')) + ')';
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
- Pilihan Parfum: ${perfumeName}
- Estimasi Biaya: Rp ${total.toLocaleString('id-ID')}
Mohon informasi jadwal penerimaan / kurir penjemputan. Terima kasih!`;
            waBtn.href = 'https://wa.me/6281234567890?text=' + encodeURIComponent(message);
        }
    }

    function setCalcSlider(val) {
        const slider = document.getElementById('calcWeight');
        if (!slider) return;
        slider.value = val;
        recalculateEstimate();
    }

    function toggleFaq(id) {
        const content = document.getElementById('faq-content-' + id);
        const icon = document.getElementById('faq-icon-' + id);
        const btn = document.getElementById('faq-btn-' + id);
        if (!content) return;

        const isHidden = content.classList.contains('hidden');
        if (isHidden) {
            content.classList.remove('hidden');
            if (icon) icon.classList.add('rotate-180');
            if (btn) btn.setAttribute('aria-expanded', 'true');
        } else {
            content.classList.add('hidden');
            if (icon) icon.classList.remove('rotate-180');
            if (btn) btn.setAttribute('aria-expanded', 'false');
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
            c.classList.remove('ring-2', 'ring-sky-500', 'border-sky-500');
        });
        if (element) {
            element.classList.add('ring-2', 'ring-sky-500', 'border-sky-500');
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
        }, 3200);
    }

    function animateCounters() {
        const counters = document.querySelectorAll('.counter-number');
        if (!window.IntersectionObserver) {
            counters.forEach(c => {
                c.innerText = (+c.getAttribute('data-target')).toLocaleString('id-ID');
            });
            return;
        }

        const observer = new IntersectionObserver((entries, obs) => {
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
                    obs.unobserve(counter);
                }
            });
        }, { threshold: 0.15 });

        counters.forEach(c => observer.observe(c));
    }

    function executeTracking(query) {
        if (!query || !query.trim()) return;

        const submitBtn = document.getElementById('trackingSubmitBtn');
        const originalBtnHtml = submitBtn ? submitBtn.innerHTML : '';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin text-xs"></i> <span>Mencari...</span>';
        }

        const formData = new FormData();
        formData.append('invoice_number', query.trim());
        const csrfToken = document.querySelector('input[name="_token"]')?.value || '{{ csrf_token() }}';
        formData.append('_token', csrfToken);

        fetch('{{ route("tracking.search") }}', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            },
            body: formData
        })
        .then(response => {
            return response.json().then(data => ({
                status: response.status,
                ok: response.ok,
                body: data
            }));
        })
        .then(({ ok, body }) => {
            if (ok && body.success) {
                renderTrackingResultModal(body.data);
            } else {
                openTrackingErrorModal(body.message || 'Nomor nota atau nomor WhatsApp tidak ditemukan di sistem.');
            }
        })
        .catch(err => {
            openTrackingErrorModal('Terjadi kendala koneksi saat menghubungi server. Silakan coba kembali.');
        })
        .finally(() => {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
            }
        });
    }

    function renderTrackingResultModal(data) {
        document.getElementById('popInvoiceNumber').textContent = data.invoice_number;
        document.getElementById('popCustomerName').textContent = data.customer_name;
        document.getElementById('popOrderDate').textContent = data.order_date;
        document.getElementById('popStatusLabel').textContent = data.status_label;
        document.getElementById('popEstimatedCompletion').textContent = data.estimated_completion;
        document.getElementById('popPerfume').textContent = data.perfume_name || 'Standar Katara';
        document.getElementById('popTotalPrice').textContent = 'Rp ' + data.total_price;
        
        const paymentElem = document.getElementById('popPaymentStatus');
        if (paymentElem) {
            if (data.is_paid) {
                paymentElem.textContent = 'LUNAS ✅';
                paymentElem.className = 'font-bold text-emerald-400';
            } else {
                paymentElem.textContent = 'Sisa: Rp ' + data.remaining_balance;
                paymentElem.className = 'font-bold text-rose-400';
            }
        }

        const rackWrapper = document.getElementById('popRackWrapper');
        const rackCode = document.getElementById('popRackCode');
        if (data.rack_code) {
            rackCode.textContent = data.rack_code;
            rackWrapper.classList.remove('hidden');
        } else {
            rackWrapper.classList.add('hidden');
        }

        const waBtn = document.getElementById('popWaContactBtn');
        if (waBtn) {
            const waMsg = `Halo Katara Laundry Dinoyo, saya ingin konfirmasi status cucian dengan Nomor Nota: *${data.invoice_number}* (a.n. ${data.customer_name}). Terima kasih!`;
            waBtn.href = 'https://wa.me/6281234567890?text=' + encodeURIComponent(waMsg);
        }

        const detailLink = document.getElementById('popDetailLink');
        if (detailLink) {
            detailLink.href = data.detail_url;
        }

        const currentStep = data.status_step || 1;
        
        const progressLine = document.getElementById('popProgressLine');
        const progressPercentText = document.getElementById('popProgressPercentText');
        
        const percentMap = {
            1: { pct: '8%', text: 'Tahap 1/6 • Nota Masuk' },
            2: { pct: '28%', text: 'Tahap 2/6 • Pencucian' },
            3: { pct: '48%', text: 'Tahap 3/6 • Pengeringan' },
            4: { pct: '68%', text: 'Tahap 4/6 • Setrika Uap' },
            5: { pct: '88%', text: 'Tahap 5/6 • Pengemasan' },
            6: { pct: '100%', text: 'Selesai 100% • Siap Diambil di Rak' },
            7: { pct: '100%', text: 'Selesai • Sudah Diambil' },
        };

        const currentMeta = percentMap[currentStep] || percentMap[1];
        if (progressLine) progressLine.style.width = currentMeta.pct;
        if (progressPercentText) progressPercentText.textContent = currentMeta.text;

        for (let i = 1; i <= 6; i++) {
            const stepEl = document.getElementById('popStep-' + i);
            if (!stepEl) continue;
            const circle = stepEl.querySelector('.step-circle');
            const title = stepEl.querySelector('.step-title');

            if (i < currentStep || (currentStep >= 6 && i <= 6)) {
                if (circle) {
                    circle.className = 'step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all bg-emerald-600 text-white border-2 border-emerald-500 shadow-2xs';
                    circle.innerHTML = '<i class="fa-solid fa-check text-[11px]"></i>';
                }
                if (title) title.className = 'step-title font-bold text-xs sm:text-sm text-white block leading-snug';
            } else if (i === currentStep) {
                if (circle) {
                    circle.className = 'step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all bg-sky-600 text-white border-2 border-sky-300 ring-2 ring-sky-400 shadow-xs animate-pulse';
                    circle.innerHTML = '<span class="w-2.5 h-2.5 rounded-full bg-white"></span>';
                }
                if (title) title.className = 'step-title font-extrabold text-xs sm:text-sm text-sky-300 block leading-snug';
            } else {
                if (circle) {
                    circle.className = 'step-circle w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center text-xs font-bold mb-1.5 transition-all bg-[#0b1d38] text-slate-400 border-2 border-sky-800/60';
                    circle.innerHTML = `<span class="text-xs text-slate-400 font-mono font-semibold">${i}</span>`;
                }
                if (title) title.className = 'step-title font-medium text-xs sm:text-sm text-slate-400 block leading-snug';
            }
        }

        const modal = document.getElementById('trackingResultModal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeTrackingModal() {
        const modal = document.getElementById('trackingResultModal');
        if (modal) modal.classList.add('hidden');
    }

    function openTrackingErrorModal(msg) {
        const modal = document.getElementById('trackingErrorModal');
        const msgElem = document.getElementById('popErrorMessage');
        if (msgElem && msg) msgElem.textContent = msg;
        if (modal) modal.classList.remove('hidden');
    }

    function closeTrackingErrorModal() {
        const modal = document.getElementById('trackingErrorModal');
        if (modal) modal.classList.add('hidden');
    }

    document.addEventListener('DOMContentLoaded', function() {
        recalculateEstimate();
        animateCounters();

        const form = document.getElementById('trackingForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const input = document.getElementById('invoiceInput');
                if (input && input.value.trim()) {
                    executeTracking(input.value.trim());
                }
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTrackingModal();
                closeTrackingErrorModal();
                closeDemoModal();
            }
        });

        ['trackingResultModal', 'trackingErrorModal', 'demoModal'].forEach(id => {
            const modalEl = document.getElementById(id);
            if (modalEl) {
                modalEl.addEventListener('click', function(e) {
                    if (e.target === modalEl) {
                        if (id === 'trackingResultModal') closeTrackingModal();
                        else if (id === 'trackingErrorModal') closeTrackingErrorModal();
                        else if (id === 'demoModal') closeDemoModal();
                    }
                });
            }
        });
    });
</script>
@endpush
