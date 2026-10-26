@extends('layouts.public')

@section('title', 'Keunggulan & SOP Standar Kebersihan - Katara Laundry Dinoyo Malang')
@section('meta_description', '6 keunggulan utama Katara Laundry Dinoyo Malang: 1 mesin 1 nota tanpa campur, setrika uap boiler industri, 45 slot rak fisik terintegrasi, dan garansi cuci ulang 100%.')

@section('content')
<div class="space-y-12 sm:space-y-16 pb-16">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
<nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Keunggulan</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-900/70 text-sky-300 text-xs font-bold uppercase tracking-wider border border-sky-700/50 shadow-xs">
                    <i class="fa-solid fa-shield-halved text-sky-400"></i>
                    <span>Standar Mutu & Higienitas</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Mengapa Memilih Katara Laundry?
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Banyak laundry mencampur cucian dari beberapa pelanggan demi menekan biaya. Di Katara Laundry Dinoyo, kami menerapkan SOP ketat dengan prinsip <strong class="text-white">1 Mesin 1 Nota</strong> demi kebersihan, kenyamanan, dan rasa tenang Anda.
                </p>
            </div>
        </div>
    </section>

<section class="site-container space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Komitmen Pelayanan</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                6 Standar Unggulan Tanpa Kompromi
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                Setiap helai pakaian Anda kami perlakukan layaknya pakaian kami sendiri.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="1 Mesin 1 Pelanggan Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-emerald-600 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            SOP Inti
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            1 Drum Mesin 1 Pelanggan
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Cucian Anda tidak pernah dicampur dengan pakaian orang lain meski hanya 1 kg. Menjamin privasi, higienitas maksimal, dan mencegah risiko pakaian tertukar atau hilang.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-emerald-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> 100% Anti Campur
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap Boiler Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-sky-600 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Aman Serat
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            Setrika Uap Boiler Industri
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Menggunakan uap bertekanan tinggi dari boiler komersial. Pakaian menjadi licin sempurna tanpa risiko kain terbakar, mengkilap, atau melar seperti menggunakan setrika listrik konvensional.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-sky-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> Bebas Risiko Mengkilap
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="45 Slot Rak Fisik Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-purple-600 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Tertata Rapi
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            45 Slot Rak Fisik Bernomor
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Pakaian yang sudah selesai disetrika dan dipacking langsung ditempatkan di rak berkode (A-01 s/d E-09). Posisi rak tercatat di sistem POS kasir dan web pelacakan nota.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-purple-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> Cepat Ditemukan Saat Ambil
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            Air Multi-Filtrasi & Deterjen Enzim
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Air pencucian melewati filter penyaring endapan zat kapur dan karat sehingga pakaian putih tetap cerah. Deterjen cair formula enzim ampuh mengangkat noda membandel tanpa merusak tekstur serat baju.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-sky-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> Pakaian Putih Tidak Menguning
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 border border-purple-100 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-spray-can"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            5 Pilihan Parfum Grade Premium
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Bebas pilih varian aroma sesuai selera: Selera Segar, Sakura Blossom, Ocean Fresh, Lavender Relax, atau Baby Sweet. Wangi awet hingga berminggu-minggu saat tersimpan di lemari.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-purple-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> Gratis Termasuk Paket
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-600 transition-colors">
                            Garansi Cuci Ulang 100% Gratis
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Jika pakaian yang Anda terima dirasa masih ada noda yang terlewat atau setrikaan kurang rapi, hubungi kami dalam 1x24 jam. Kami cuci ulang seketika tanpa dipungut biaya tambahan.
                        </p>
                    </div>
                </div>
                <div class="pt-3 border-t border-slate-100 text-xs font-bold text-emerald-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-check-circle"></i> Jaminan Kepuasan Pelanggan
                </div>
            </div>

        </div>

<div class="rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="text-center max-w-xl mx-auto space-y-1">
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                    Perbandingan Layanan: Katara vs Laundry Biasa
                </h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    Lihat perbedaan mendasar bagaimana pakaian Anda dirawat dan diproses.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200 text-slate-500 font-semibold text-xs uppercase tracking-wider bg-slate-50">
                            <th class="p-3.5 sm:p-4 rounded-l-xl">Standar Pengerjaan</th>
                            <th class="p-3.5 sm:p-4 text-emerald-700 bg-emerald-50/50 font-bold">Katara Laundry Dinoyo</th>
                            <th class="p-3.5 sm:p-4 text-slate-400 rounded-r-xl">Laundry Kiloan Biasa</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Pemisahan Cucian Pelanggan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30 flex items-center gap-1.5">
                                <i class="fa-solid fa-check-circle text-emerald-600"></i> 1 drum mesin untuk 1 nota (tidak dicampur)
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Sering dicampur beberapa pelanggan sekaligus</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Metode Penyetrikaan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <i class="fa-solid fa-check-circle text-emerald-600"></i> Setrika Uap Boiler Industri (aman serat)
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Setrika listrik biasa (rawan gosong/mengkilap)</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Sistem Penyimpanan Nota Jadi</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <i class="fa-solid fa-check-circle text-emerald-600"></i> 45 Slot Rak Fisik tercatat di web sistem
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Ditumpuk manual di meja / lantai</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Pilihan Varian Parfum</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <i class="fa-solid fa-check-circle text-emerald-600"></i> Bebas pilih 5 aroma parfum premium gratis
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Aroma seragam / opsi parfum berbayar</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Pelacakan Status Pesanan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <i class="fa-solid fa-check-circle text-emerald-600"></i> Cek mandiri online real-time via nomor nota / WA
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Harus telepon / tanya manual via chat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<div class="rounded-2xl bg-gradient-to-r from-sky-900 to-brand-900 text-white p-6 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="space-y-2 text-center md:text-left">
                <span class="px-3 py-1 rounded-full bg-white/10 text-sky-300 text-xs font-bold uppercase tracking-wider border border-white/10">
                    Buktikan Bedanya
                </span>
                <h3 class="text-xl sm:text-2xl font-black">
                    Rasakan Standar Baru Laundry Bersih & Nyaman di Dinoyo
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl">
                    Kunjungi gerai kami di Jl. MT Haryono Dinoyo Malang atau pesan layanan antar-jemput sekarang juga.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
                <a href="{{ route('public.layanan') }}" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-bold text-xs transition-colors flex items-center justify-center gap-2 shadow-sm">
                    <i class="fa-solid fa-tags text-sky-600"></i>
                    <span>Lihat Daftar Tarif</span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20laundry" target="_blank" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center justify-center gap-2 shadow-md">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Order via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
