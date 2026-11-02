@extends('layouts.publik')

@section('title', 'Lokasi Gerai Dinoyo & Jam Buka - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Alamat lengkap gerai Katara Laundry di Jl. MT Haryono Dinoyo Malang. Jam buka operasional Senin-Minggu, nomor WhatsApp, peta Google Maps, dan area kurir antar-jemput.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

    <section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Lokasi & Jam Buka</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Lokasi Gerai & Jam Operasional
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Kunjungi gerai fisik kami di kawasan Dinoyo Malang atau gunakan layanan antar-jemput kurir kami langsung dari kos atau rumah Anda.
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
        <div class="space-y-4 sm:space-y-5">
            <div class="text-center max-w-2xl mx-auto space-y-1.5 sm:space-y-2">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                    Kunjungi Gerai atau Pesan Antar-Jemput
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Kami siap melayani kebutuhan cuci pakaian Anda di gerai fisik Dinoyo maupun via layanan kurir jemput ke lokasi.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-3.5 sm:gap-4 lg:gap-5 items-stretch !mt-3.5 sm:!mt-5">
                
                <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 lg:p-6 space-y-3.5 sm:space-y-4 shadow-sm flex flex-col justify-between h-full">
                    <div class="space-y-3">
                        <div class="space-y-1.5 border-b border-slate-100 pb-3">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-0.5 rounded-md bg-sky-50 text-sky-700 text-[10px] font-bold uppercase tracking-wider border border-sky-200/80">
                                    Pusat Operasional
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-emerald-50 text-emerald-700 text-[10px] font-bold border border-emerald-200/80">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>Buka Hari Ini</span>
                                </span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 leading-snug">
                                Katara Laundry — Gerai Dinoyo Malang
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Terletak strategis di kawasan Dinoyo Lowokwaru. Sangat mudah dijangkau dari gerbang UB Dinoyo, Kampus UM, Polinema, UIN Malang, dan area kos mahasiswa.
                            </p>
                        </div>

                        <div class="space-y-2.5 text-xs sm:text-sm">
                            <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/70 border border-slate-200/70 flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-rose-50 text-rose-600 border border-rose-100 flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="space-y-0.5 min-w-0">
                                    <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Alamat Lengkap:</h4>
                                    <p class="text-slate-700 leading-relaxed font-medium text-xs sm:text-sm">
                                        Jl. MT. Haryono / Kawasan Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144.
                                    </p>
                                    <span class="text-[11px] text-slate-500 block">Patokan: Dekat persimpangan Dinoyo &amp; gerbang kampus UB.</span>
                                </div>
                            </div>

                            <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/70 border border-slate-200/70 flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 border border-amber-100 flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="space-y-1 min-w-0 w-full">
                                    <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Jam Buka Gerai:</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs pt-0.5">
                                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700">
                                            <strong class="text-slate-900 block font-semibold text-[11px]">Senin - Sabtu:</strong>
                                            <span class="font-mono text-emerald-700 font-bold text-xs sm:text-sm">07.00 - 21.00 WIB</span>
                                        </div>
                                        <div class="p-2.5 rounded-lg bg-white border border-slate-200 text-slate-700">
                                            <strong class="text-slate-900 block font-semibold text-[11px]">Minggu / Libur:</strong>
                                            <span class="font-mono text-amber-700 font-bold text-xs sm:text-sm">08.00 - 20.00 WIB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3 sm:p-3.5 rounded-xl bg-slate-50/70 border border-slate-200/70 flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center shrink-0 text-sm shadow-2xs">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                                <div class="space-y-0.5 min-w-0">
                                    <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Customer Service &amp; Hotline:</h4>
                                    <p class="font-mono font-bold text-sm sm:text-base text-emerald-700">
                                        0812-3456-7890
                                    </p>
                                    <span class="text-[11px] text-slate-500 block">Melayani request jemput pakaian, tanya rute gerai, dan cek nota.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-2 pt-2 border-t border-slate-100">
                        <a href="https://maps.google.com/?q=Dinoyo+Lowokwaru+Malang" target="_blank" class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold leading-none transition-all shadow-xs border border-slate-700 active:scale-[0.99]">
                            <i class="fa-solid fa-diamond-turn-right text-sky-400"></i>
                            <span>Buka di Google Maps</span>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20tanya%20rute%20lokasi%20gerai" target="_blank" class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 text-xs font-bold leading-none transition-all border border-emerald-200/80 active:scale-[0.99]">
                            <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                            <span>Tanya Rute Gerai via WA</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white rounded-2xl border border-sky-800/80 p-4 sm:p-5 lg:p-6 space-y-3.5 shadow-xl flex flex-col justify-between h-full">
                    <div class="space-y-3">
                        <div class="space-y-1 border-b border-sky-800/60 pb-3">
                            <span class="text-[10px] uppercase font-bold tracking-wider text-emerald-400">Layanan Kurir Gerai</span>
                            <h3 class="text-sm sm:text-base font-extrabold text-white">Area Antar-Jemput Dinoyo</h3>
                            <p class="text-xs text-slate-300 font-normal">
                                Gratis biaya penjemputan untuk radius seputar gerai Jl. MT Haryono &amp; kampus.
                            </p>
                        </div>

                        <div class="rounded-xl overflow-hidden border border-sky-800/60 relative group">
                            <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Kurir Antar Jemput Katara Laundry" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-2 bg-slate-950/90 text-white flex items-center justify-between text-xs">
                                <span class="font-semibold text-xs flex items-center gap-1.5">
                                    <i class="fa-solid fa-motorcycle text-emerald-400"></i>
                                    <span>Kurir Cepat Katara</span>
                                </span>
                                <span class="text-[10px] text-emerald-300 font-bold bg-emerald-950/80 px-2 py-0.5 rounded border border-emerald-500/40">Gratis Radius Kampus</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <span class="text-xs font-bold text-slate-300 block">Kawasan yang Dilayani Setiap Hari:</span>
                            <div class="grid grid-cols-2 gap-1.5 text-xs">
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Dinoyo &amp; MT Haryono</span>
                                </div>
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Sigura-gura &amp; Bendungan</span>
                                </div>
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Sumbersari &amp; Gajayana</span>
                                </div>
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Soekarno-Hatta (Suhat)</span>
                                </div>
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Tlogomas &amp; Landungsari</span>
                                </div>
                                <div class="p-2 rounded-lg bg-[#071326] border border-sky-900/60 text-slate-200 flex items-center gap-1.5 min-w-0">
                                    <i class="fa-solid fa-check text-emerald-400 text-xs shrink-0"></i>
                                    <span class="truncate">Ketawanggede / UB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-sky-800/60">
                        <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20request%20jemput%20cucian" target="_blank" class="w-full inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>Pesan Kurir Antar-Jemput</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-sky-900 to-brand-900 text-white p-5 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-5 shadow-xl">
            <div class="space-y-1 text-center md:text-left flex-1 min-w-0">
                <h3 class="text-base sm:text-lg font-extrabold leading-snug">
                    Rasakan Standar Baru Laundry Bersih &amp; Nyaman di Dinoyo
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
