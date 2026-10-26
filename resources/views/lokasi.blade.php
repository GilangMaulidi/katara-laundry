@extends('layouts.public')

@section('title', 'Lokasi Gerai Dinoyo & Jam Buka - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Alamat lengkap gerai Katara Laundry di Jl. MT Haryono Dinoyo Malang. Jam buka operasional Senin-Minggu, nomor WhatsApp, peta Google Maps, dan area kurir antar-jemput.')

@section('content')
<div class="space-y-12 sm:space-y-16 pb-16">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Lokasi & Jam Buka</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-900/70 text-rose-300 text-xs font-bold uppercase tracking-wider border border-rose-700/50 shadow-xs">
                    <i class="fa-solid fa-location-dot text-rose-400"></i>
                    <span>Informasi Gerai Dinoyo</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Lokasi Gerai & Jam Operasional
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Kunjungi gerai fisik kami di kawasan Dinoyo Malang atau gunakan layanan antar-jemput kurir kami langsung dari kos/rumah Anda.
                </p>
            </div>
        </div>
    </section>

<section class="site-container space-y-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
<div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 space-y-6 shadow-sm">
                <div class="space-y-2 border-b border-slate-100 pb-5">
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                            Pusat Operasional
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>Buka Hari Ini</span>
                        </span>
                    </div>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                        Katara Laundry — Gerai Dinoyo Malang
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Terletak strategis di kawasan Dinoyo Lowokwaru. Sangat mudah dijangkau dari gerbang UB Dinoyo, Kampus UM, Polinema, UIN Malang, dan area kos mahasiswa.
                    </p>
                </div>

<div class="space-y-4 text-xs sm:text-sm">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-xl bg-rose-50 text-rose-600 border border-rose-100 flex items-center justify-center shrink-0 text-base">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Alamat Lengkap:</h4>
                            <p class="text-slate-700 leading-relaxed font-medium">
                                Jl. MT. Haryono / Kawasan Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144.
                            </p>
                            <span class="text-[11px] text-slate-500 block">Patokan: Dekat persimpangan Dinoyo & gerbang kampus UB.</span>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 border border-amber-100 flex items-center justify-center shrink-0 text-base">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Jam Buka Gerai:</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs pt-1">
                                <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700">
                                    <strong class="text-slate-900 block font-semibold">Senin - Sabtu:</strong>
                                    <span class="font-mono text-emerald-700 font-bold text-sm">07.00 - 21.00 WIB</span>
                                </div>
                                <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700">
                                    <strong class="text-slate-900 block font-semibold">Minggu / Libur:</strong>
                                    <span class="font-mono text-amber-700 font-bold text-sm">08.00 - 20.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex items-start gap-3.5">
                        <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center shrink-0 text-base">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Customer Service & Hotline:</h4>
                            <p class="text-slate-700 font-mono font-bold text-base text-emerald-700">
                                0812-3456-7890
                            </p>
                            <span class="text-[11px] text-slate-500 block">Melayani request jemput pakaian, tanya rute, dan cek nota.</span>
                        </div>
                    </div>
                </div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="w-full py-3.5 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs transition-colors flex items-center justify-center gap-2 shadow-xs">
                        <i class="fa-solid fa-diamond-turn-right text-xs"></i>
                        <span>Buka Petunjuk di Google Maps</span>
                    </a>
                    <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20posisi%20gerai%20sebelah%20mana%20ya?" target="_blank" class="w-full py-3.5 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center justify-center gap-2 shadow-md">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                        <span>Tanya Rute ke Kasir WA</span>
                    </a>
                </div>
            </div>

<div class="lg:col-span-5 space-y-6">
                <div class="bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white rounded-2xl border border-sky-800/60 p-6 sm:p-7 space-y-5 shadow-xl">
                    <div class="space-y-1 border-b border-sky-800/60 pb-4">
                        <span class="text-[10px] uppercase font-bold tracking-wider text-emerald-400">Layanan Kurir Gerai</span>
                        <h3 class="text-base font-extrabold text-white">Area Antar-Jemput Dinoyo</h3>
                        <p class="text-xs text-slate-300">
                            Gratis biaya penjemputan untuk radius gerai.
                        </p>
                    </div>

                    <div class="rounded-xl overflow-hidden border border-sky-800/60 relative">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Kurir Antar Jemput Katara Laundry" class="w-full aspect-video object-cover">
                        <div class="p-2 bg-slate-950/90 text-white flex items-center justify-between text-xs">
                            <span class="font-semibold text-xs flex items-center gap-1.5">
                                <i class="fa-solid fa-motorcycle text-emerald-400"></i>
                                <span>Kurir Cepat Katara</span>
                            </span>
                            <span class="text-[10px] text-slate-300">Radius 3 - 5 KM</span>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <span class="text-xs font-bold text-slate-300 block">Kawasan yang Dilayani Setiap Hari:</span>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Dinoyo & MT Haryono</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Sigura-gura</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Sumbersari & Gajayana</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Soekarno-Hatta (Suhat)</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Tlogomas & Landungsari</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400 text-xs"></i>
                                <span>Ketawanggede / UB</span>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry,%20saya%20mau%20request%20jemput%20cucian%20di%20alamat%20saya" target="_blank" class="w-full py-3 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center justify-center gap-2 shadow-md">
                        <i class="fa-brands fa-whatsapp text-base"></i>
                        <span>Request Penjemputan Sekarang</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
