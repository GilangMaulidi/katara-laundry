@extends('layouts.public')

@section('title', 'Cara Pesan & 5 Langkah Alur Pengerjaan - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Panduan cara pesan laundry kiloan & satuan di Katara Laundry Dinoyo. 5 langkah mudah dari drop/jemput, timbang, cuci 1 mesin sendiri, pengering gas, hingga setrika uap rak.')

@section('content')
<div class="space-y-12 sm:space-y-16 lg:space-y-20 pb-12 sm:pb-16 lg:pb-20">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Cara Pesan</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-900/70 text-sky-300 text-xs font-bold uppercase tracking-wider border border-sky-700/50 shadow-xs">
                    <i class="fa-solid fa-list-check text-sky-400"></i>
                    <span>Panduan Pemesanan</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    5 Langkah Mudah Mencuci di Katara
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Seluruh proses pengerjaan tercatat rapi di sistem digital hingga cucian Anda aman tersimpan di slot rak fisik.
                </p>
            </div>
        </div>
    </section>

<section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 items-stretch">
            
<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-[16/10] w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Drop atau Jemput Cucian" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 w-8 h-8 rounded-lg bg-slate-900/90 text-white font-black text-xs flex items-center justify-center border border-white/20">
                            01
                        </span>
                        <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded bg-emerald-600 text-white text-[10px] font-bold">
                            Drop / Pickup
                        </span>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-base font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            1. Bawa ke Gerai atau Chat WhatsApp
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Bawa cucian langsung ke gerai kami di Jl. MT Haryono Dinoyo, atau kirimkan lokasi Anda via WhatsApp untuk penjemputan gratis (radius gerai).
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-[11px] text-emerald-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-truck-fast"></i> Kurir siap jemput ke lokasi
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-[16/10] w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="Timbang dan Tagging" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 w-8 h-8 rounded-lg bg-slate-900/90 text-white font-black text-xs flex items-center justify-center border border-white/20">
                            02
                        </span>
                        <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded bg-sky-600 text-white text-[10px] font-bold">
                            Timbang & Nota
                        </span>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-base font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            2. Timbang Terbuka & Cetak Nota
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Cucian ditimbang di depan Anda menggunakan timbangan digital presisi. Kasir menerbitkan nota nomor KTR dan Anda bebas memilih 1 dari 5 aroma parfum favorit.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-[11px] text-sky-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-scale-balanced"></i> Transparan & akurat
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-[16/10] w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Pencucian 1 Drum Sendiri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 w-8 h-8 rounded-lg bg-slate-900/90 text-white font-black text-xs flex items-center justify-center border border-white/20">
                            03
                        </span>
                        <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded bg-cyan-600 text-white text-[10px] font-bold">
                            1 Mesin Sendiri
                        </span>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-base font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            3. Pencucian 1 Mesin 1 Pelanggan
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pakaian Anda masuk ke drum stainless steel tersendiri tanpa dicampur cucian orang lain. Diberi deterjen enzim premium dan air filtrasi bersih.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-[11px] text-cyan-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved"></i> Bebas risiko tertukar
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-[16/10] w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Kering Gas Dryer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 w-8 h-8 rounded-lg bg-slate-900/90 text-white font-black text-xs flex items-center justify-center border border-white/20">
                            04
                        </span>
                        <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded bg-amber-600 text-white text-[10px] font-bold">
                            Gas Dryer 100%
                        </span>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-base font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            4. Pengeringan Gas Dryer Komersial
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pakaian dikeringkan tuntas dengan suhu optimal yang mematikan bakteri dan tungau. Tidak dijemur di bawah debu jalanan, bebas bau apek di musim hujan.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-[11px] text-amber-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-fire-flame-curved"></i> 100% Kering tuntas
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-[16/10] w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap dan Rak" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 w-8 h-8 rounded-lg bg-brand-600 text-white font-black text-xs flex items-center justify-center border border-white/20">
                            05
                        </span>
                        <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded bg-purple-600 text-white text-[10px] font-bold">
                            Setrika & Rak
                        </span>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="text-base font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            5. Setrika Uap Boiler & Masuk Slot Rak
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Penyetrikaan uap boiler aman serat kain, disemprot parfum pilihan, dipacking plastik kedap udara, lalu disimpan di 45 slot rak bernomor siap Anda ambil.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-[11px] text-purple-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-boxes-stacked"></i> Rapi & siap diambil
                </div>
            </div>

<div class="bg-gradient-to-br from-slate-900 to-sky-950 text-white rounded-2xl p-6 space-y-4 flex flex-col justify-between border border-sky-900/60 shadow-md">
                <div class="space-y-3">
                    <span class="px-2.5 py-1 rounded-md bg-sky-500/20 text-sky-300 text-[10px] font-bold uppercase tracking-wider border border-sky-500/30">
                        Fitur Unggulan
                    </span>
                    <h3 class="text-base font-extrabold text-white">
                        Lacak Progres Cucian Kapan Saja
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed font-normal">
                        Anda tidak perlu menebak atau bolak-balik tanya kasir. Masukkan nomor nota KTR Anda pada fitur pelacakan kami untuk melihat status tahapan pengerjaan secara real-time.
                    </p>
                </div>
                <a href="{{ route('home') }}#lacak" class="w-full py-2.5 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs transition-colors flex items-center justify-center gap-2 shadow-xs">
                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    <span>Coba Lacak Nota Anda</span>
                </a>
            </div>

        </div>

<div class="rounded-2xl bg-gradient-to-r from-sky-900 to-brand-900 text-white p-6 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="space-y-2 text-center md:text-left">
                <span class="px-3 py-1 rounded-full bg-white/10 text-sky-300 text-xs font-bold uppercase tracking-wider border border-white/10">
                    Siap Memesan?
                </span>
                <h3 class="text-xl sm:text-2xl font-black">
                    Pesan Laundry Antar-Jemput atau Antar ke Gerai Sekarang
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl">
                    Hubungi admin WhatsApp kami untuk penjemputan atau konsultasi jenis cucian Anda.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
                <a href="{{ route('public.layanan') }}" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-bold text-xs transition-colors flex items-center justify-center gap-2 shadow-sm">
                    <i class="fa-solid fa-tags text-sky-600"></i>
                    <span>Cek Daftar Tarif</span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20laundry" target="_blank" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center justify-center gap-2 shadow-md">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Chat CS WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
