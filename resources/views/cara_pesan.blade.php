@extends('layouts.publik')

@section('title', 'Cara Pesan & 5 Langkah Alur Pengerjaan - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Panduan cara pesan laundry kiloan & satuan di Katara Laundry Dinoyo. 5 langkah mudah dari drop/jemput, timbang, cuci 1 mesin sendiri, pengering gas, hingga setrika uap rak.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

    <section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Cara Pesan</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    5 Langkah Mudah Mencuci di Katara
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Seluruh proses pengerjaan tercatat rapi di sistem digital hingga cucian Anda aman tersimpan di slot rak fisik.
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

    <section class="site-container space-y-8 sm:space-y-10 lg:space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-1.5 sm:space-y-2">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                Alur Pengerjaan Cucian di Gerai
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                Panduan langkah praktis mulai dari penjemputan/drop hingga pakaian bersih tersimpan rapi di rak.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-4 items-stretch !mt-3.5 sm:!mt-5">
            
            <div class="bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Drop atau Jemput Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <span class="text-sky-400 font-black">01</span> <span>Drop / Pickup</span>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            1. Bawa ke Gerai atau Chat WA
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Bawa cucian langsung ke gerai kami di Jl. MT Haryono Dinoyo, atau kirimkan lokasi Anda via WhatsApp untuk penjemputan gratis (radius gerai).
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Kurir gratis jemput ke lokasi</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="Timbang dan Tagging" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <span class="text-sky-400 font-black">02</span> <span>Timbang & Nota</span>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            2. Timbang Terbuka & Cetak Nota
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Cucian ditimbang di depan Anda menggunakan timbangan digital presisi. Kasir menerbitkan nota nomor KTR dan Anda bebas memilih aroma parfum favorit.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Timbangan digital transparan & akurat</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Pencucian 1 Drum Sendiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <span class="text-sky-400 font-black">03</span> <span>1 Mesin Sendiri</span>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            3. Pencucian 1 Mesin 1 Pelanggan
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Pakaian Anda masuk ke drum stainless steel tersendiri tanpa dicampur cucian orang lain. Diberi deterjen enzim premium dan air filtrasi bersih.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Bebas risiko tertukar atau luntur</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Kering Gas Dryer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <span class="text-sky-400 font-black">04</span> <span>Gas Dryer 100%</span>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            4. Pengeringan Gas Dryer Komersial
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Pakaian dikeringkan tuntas dengan suhu optimal yang mematikan bakteri dan tungau. Tidak dijemur di bawah debu jalanan, bebas bau apek di musim hujan.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>100% Kering tuntas anti apek</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap dan Rak" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <span class="text-sky-400 font-black">05</span> <span>Setrika & Rak</span>
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            5. Setrika Uap Boiler & Masuk Slot Rak
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Penyetrikaan uap boiler aman serat kain, disemprot parfum pilihan, dipacking plastik kedap udara, lalu disimpan di 45 slot rak bernomor siap Anda ambil.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Rapi terlipat & tersimpan di rak fisik</span>
                </div>
            </div>

            <div class="bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white rounded-2xl p-3.5 sm:p-4 space-y-2.5 flex flex-col justify-between border border-sky-800/60 shadow-sm h-full">
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded-md bg-sky-500/20 text-sky-300 text-[10px] font-bold uppercase tracking-wider border border-sky-500/30">
                            Fitur Unggulan
                        </span>
                        <span class="px-2.5 py-0.5 rounded-md bg-emerald-500/20 text-emerald-300 text-[10px] font-bold border border-emerald-500/30">
                            Real-Time
                        </span>
                    </div>
                    <div class="space-y-1 pt-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-white">
                            Lacak Progres Cucian Kapan Saja
                        </h3>
                        <p class="text-xs text-slate-300 leading-relaxed font-normal">
                            Anda tidak perlu menebak atau bolak-balik tanya kasir. Masukkan nomor nota KTR Anda pada fitur pelacakan kami untuk melihat status tahapan pengerjaan secara real-time.
                        </p>
                    </div>
                </div>
                <div class="pt-2 border-t border-sky-800/60">
                    <a href="{{ route('public.lacak') }}" class="w-full inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs leading-none shadow-sm transition-all border border-sky-500/40 active:scale-[0.99]">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                        <span>Coba Lacak Nota Anda</span>
                    </a>
                </div>
            </div>

        </div>

        <div class="rounded-2xl bg-gradient-to-r from-sky-900 to-brand-900 text-white p-5 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-5 shadow-xl">
            <div class="space-y-1 text-center md:text-left flex-1 min-w-0">
                <h3 class="text-base sm:text-lg font-extrabold leading-snug">
                    Rasakan Standar Baru Laundry Bersih & Nyaman di Dinoyo
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-none md:whitespace-nowrap">
                    Kunjungi gerai kami di Jl. MT Haryono Dinoyo Malang atau pesan layanan antar-jemput sekarang juga.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-2.5 shrink-0 w-full sm:w-auto">
                <a href="{{ route('public.layanan') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs leading-none transition-all shadow-sm">
                    <i class="fa-solid fa-tags text-sky-600 text-xs"></i>
                    <span>Lihat Daftar Tarif</span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20laundry" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Order via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection