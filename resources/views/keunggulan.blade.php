@extends('layouts.public')

@section('title', 'Keunggulan & SOP Standar Kebersihan - Katara Laundry Dinoyo Malang')
@section('meta_description', '6 keunggulan utama Katara Laundry Dinoyo Malang: 1 mesin 1 nota tanpa campur, setrika uap boiler industri, 45 slot rak fisik terintegrasi, dan garansi cuci ulang 100%.')

@section('content')
<div class="space-y-12 sm:space-y-16 lg:space-y-20 pb-12 sm:pb-16 lg:pb-20">

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
                    <i class="fa-solid fa-clipboard-check text-sky-400"></i>
                    <span>SOP Gerai Dinoyo Malang</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Mengapa Memilih Katara Laundry?
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Standar operasional nyata di gerai Katara Laundry Dinoyo Malang: 1 pelanggan 1 drum mesin, pengering gas suhu terukur anti jemur luar, timbangan kasir digital akurat, setrika uap boiler industri, dan sistem 45 slot rak bernomor.
                </p>
            </div>
        </div>
    </section>

    <section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Operasional Gerai Katara Laundry Dinoyo</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                6 Standar Unggulan Tanpa Kompromi
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                Semua tahapan pengerjaan pakaian dicatat dan diproses secara terstandarisasi demi kebersihan dan keamanan pakaian Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- 1. 1 Pelanggan 1 Mesin -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Mesin Cuci Front Loading Katara Laundry Dinoyo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Higienis
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            1 Pelanggan 1 Mesin
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Setiap nota dicuci mandiri dalam drum mesin terpisah meskipun hanya 1–2 kg. Menjaga privasi, mencegah risiko pakaian tertukar, luntur, atau tertular kotoran cucian lain.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Drum dibersihkan berkala</span>
                </div>
            </div>

            <!-- 2. Gas Dryer Suhu Terukur -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="Pengering Gas Dryer Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            100% Kering
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Gas Dryer Suhu Terukur
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Pengeringan menggunakan mesin gas komersial bersuhu 65–70°C. Pakaian kering tuntas, steril dari kuman dan tungau, serta bebas dari debu jalanan Dinoyo dan bau apek musim hujan.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Kering tuntas &amp; wangi awet</span>
                </div>
            </div>

            <!-- 3. Timbangan Kasir Digital -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-kiloan.jpg') }}" alt="Timbangan Digital Transparan Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Akurasi 0,01 Kg
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Timbangan Kasir Digital
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Berat pakaian ditimbang di hadapan Anda dengan timbangan digital 2 desimal. Nilai yang tertera di layar timbangan adalah nilai yang tercatat di nota fisik maupun sistem digital.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Tanpa pembulatan sepihak</span>
                </div>
            </div>

            <!-- 4. Rak Fisik & Notifikasi WA -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-delivery.jpg') }}" alt="Notifikasi WhatsApp & Slot Rak Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Rak A1 - E9
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Rak Fisik &amp; Notifikasi WA
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Pakaian yang selesai dipacking langsung disimpan di 45 slot rak bernomor. Sistem otomatis mengirim pesan WhatsApp dengan info slot rak sehingga pengambilan di gerai sangat cepat.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Tidak ditumpuk di meja kasir</span>
                </div>
            </div>

            <!-- 5. Setrika Uap Boiler Industri -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap Boiler Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Uap Murni
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Setrika Uap Boiler Industri
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Menggunakan boiler uap bertekanan tinggi. Panas merata melicinkan serat pakaian tanpa risiko gosong, mengkilap (*shiny effect*), atau merusak sablon dan bahan pakaian sensitif.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Aman untuk katun, wol &amp; jersey</span>
                </div>
            </div>

            <!-- 6. Layanan Express 6 Jam -->
            <div class="bg-white rounded-2xl border border-slate-200/90 p-5 sm:p-6 space-y-4 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                <div class="space-y-4">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="Express 6 Jam Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Jalur Prioritas
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-base sm:text-lg font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Layanan Express 6 Jam
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Untuk pakaian yang segera dipakai sidang skripsi, rapat, atau bepergian. Masuk antrean prioritas mesin cuci dan setrika, selesai dalam 6 jam dengan standar kerapian terjaga.
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Tepat waktu terkonfirmasi</span>
                </div>
            </div>

        </div>

        <div class="rounded-2xl border border-slate-200/90 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
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
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>1 drum mesin untuk 1 nota (tidak dicampur)</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Sering dicampur beberapa pelanggan sekaligus</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Proses Pengeringan &amp; Aroma</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Gas dryer suhu optimal (100% kering anti bau apek)</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Dijemur di pinggir jalan (rawan bau apek &amp; debu)</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Ketelitian Timbangan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Timbangan digital akurasi 0.01 kg di depan pelanggan</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Timbangan jarum manual / dibulatkan sepihak</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Metode Penyetrikaan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Setrika Uap Boiler Industri (aman serat kain)</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Setrika listrik biasa (rawan gosong/mengkilap)</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Sistem Penyimpanan Nota Jadi</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>45 Slot Rak Fisik tercatat di web &amp; notif WA</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Ditumpuk manual di meja / lantai</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Pelacakan Status Pesanan</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Notifikasi WhatsApp otomatis + cek web real-time</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Harus telepon / tanya manual via chat berulang kali</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Garansi Kualitas Hasil</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Garansi cuci &amp; setrika ulang 100% gratis 1x24 jam</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Tidak ada garansi / risiko ditanggung pelanggan</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Layanan Kilat (Express 6 Jam)</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Jalur mesin prioritas, selesai tepat waktu terjamin</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Sering molor tanpa kejelasan jadwal</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-semibold text-slate-900">Fasilitas Antar-Jemput</td>
                            <td class="p-3.5 sm:p-4 text-emerald-700 font-bold bg-emerald-50/30">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-check-circle text-emerald-600"></i> <span>Gratis antar-jemput radius Dinoyo &amp; kawasan kampus</span>
                                </div>
                            </td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Wajib antar dan ambil sendiri ke lokasi toko</td>
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
