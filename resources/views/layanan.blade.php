@extends('layouts.publik')

@section('title', 'Katalog Layanan & Tarif Resmi - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Daftar harga resmi Katara Laundry Dinoyo Malang. Cuci kiloan reguler, kilat 24 jam, express 6 jam, cuci satuan bedcover, jas, sepatu sneakers. Higienis 1 mesin 1 pelanggan.')

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
                <span class="text-white font-semibold">Layanan & Tarif</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-900/70 text-sky-300 text-xs font-bold uppercase tracking-wider border border-sky-700/50 shadow-xs">
                    <i class="fa-solid fa-tags text-sky-400"></i>
                    <span>Daftar Tarif Resmi Gerai Dinoyo</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Katalog Layanan & Tarif Transparan
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Tarif jujur tertera jelas per kilogram atau per satuan tanpa biaya terselubung. Seluruh pengerjaan berprinsip <strong class="text-white">1 Mesin 1 Pelanggan</strong>, setrika uap boiler industri, dan gratis 5 varian parfum premium.
                </p>
            </div>

<div class="pt-2 flex flex-wrap items-center justify-center gap-2.5 sm:gap-3 text-xs">
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-shield-check text-emerald-400"></i>
                    <span>1 Mesin 1 Pelanggan</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-spray-can text-purple-300"></i>
                    <span>Gratis 5 Parfum Premium</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-bolt text-amber-400"></i>
                    <span>Express 6 Jam Siap</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-sky-900/50 border border-sky-800/60 text-slate-200">
                    <i class="fa-solid fa-rotate-left text-sky-300"></i>
                    <span>Garansi Cuci Ulang 100%</span>
                </div>
            </div>
        </div>
    </section>

<section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
<div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200 pb-5">
            <div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                    Pilihan Paket Cuci & Perawatan
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Pilih kategori layanan sesuai kebutuhan pakaian harian atau perlengkapan rumah Anda.
                </p>
            </div>

            <div class="inline-flex p-1 rounded-xl bg-slate-100 border border-slate-200 shadow-xs gap-1 self-start sm:self-auto">
                <button type="button" onclick="filterServices('all')" id="btn-tab-all" class="service-tab-btn active px-4 py-2 min-h-[44px] rounded-lg text-xs font-bold transition-all bg-brand-600 text-white shadow-xs">
                    Semua ({{ $services->count() }})
                </button>
                <button type="button" onclick="filterServices('kiloan')" id="btn-tab-kiloan" class="service-tab-btn px-4 py-2 min-h-[44px] rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Kiloan ({{ $services->where('category', 'kiloan')->count() }})
                </button>
                <button type="button" onclick="filterServices('satuan')" id="btn-tab-satuan" class="service-tab-btn px-4 py-2 min-h-[44px] rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Satuan & Bedcover ({{ $services->where('category', 'satuan')->count() }})
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

                <div class="service-card bg-white rounded-2xl border {{ $isPopular ? 'border-sky-400 shadow-md ring-1 ring-sky-400/30' : 'border-slate-200/80 shadow-sm hover:shadow-md hover:border-sky-300' }} flex flex-col justify-between relative overflow-hidden group transition-all" 
                     data-category="{{ $svc->category }}">
                    
<div class="relative aspect-[16/10] sm:aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset($serviceImages[$svc->id] ?? 'images/service-kiloan.jpg') }}" 
                             alt="{{ $svc->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-black/20 pointer-events-none"></div>
                        
<div class="absolute top-3 left-3 px-2.5 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-white/95 backdrop-blur-sm text-sky-700 border border-slate-200 shadow-xs">
                            {{ $svc->category }}
                        </div>

                        @if($isPopular)
                            <div class="absolute top-3 right-3 bg-brand-600 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md shadow-sm">
                                Terfavorit
                            </div>
                        @endif

                        <div class="absolute bottom-2.5 left-3 right-3 flex items-center justify-between text-white">
                            <span class="flex items-center gap-1.5 text-[11px] font-medium text-slate-100">
                                <i class="fa-regular fa-clock text-sky-300"></i>
                                <span>{{ $svc->duration_hours }} Jam</span>
                            </span>
                            <span class="font-extrabold text-base text-white drop-shadow-sm">
                                Rp {{ number_format($svc->price, 0, ',', '.') }}<span class="text-[11px] text-slate-200 font-normal">/{{ $svc->unit }}</span>
                            </span>
                        </div>
                    </div>

<div class="p-4 sm:p-5 flex-1 flex flex-col justify-between space-y-3.5 sm:space-y-4">
                        <div class="space-y-2">
                            <h3 class="font-extrabold text-slate-900 text-base group-hover:text-sky-600 transition-colors">
                                {{ $svc->name }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                {{ $svc->description ?? 'Diproses higienis 1 drum 1 pelanggan, deterjen premium enzim ramah serat, dan setrika uap presisi.' }}
                            </p>
                        </div>

                        <div class="pt-2 flex items-center justify-between text-xs text-slate-500 border-t border-slate-100">
                            <span>Min. order {{ number_format($svc->min_order, 0) }} {{ $svc->unit }}</span>
                            <span class="text-emerald-600 font-bold flex items-center gap-1 text-[11px]">
                                <i class="fa-solid fa-check"></i> Termasuk 5 Parfum
                            </span>
                        </div>

                        <div class="pt-1 flex items-center justify-center">
                            <a href="{{ route('public.kalkulator') }}?service={{ $svc->id }}" 
                               class="inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white shadow-xs font-bold text-xs leading-none transition-colors">
                                <i class="fa-solid fa-calculator text-[11px] text-white"></i>
                                <span>Hitung Estimasi Biaya</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

<div class="rounded-2xl overflow-hidden border border-slate-200/80 bg-white p-6 sm:p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center shadow-sm !mt-5 sm:!mt-6 lg:!mt-8">
            <div class="lg:col-span-5 relative rounded-xl overflow-hidden border border-slate-200 shadow-xs group">
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

<div class="rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="space-y-1">
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                    Perbandingan Waktu Pengerjaan Cuci Kiloan
                </h3>
                <p class="text-xs sm:text-sm text-slate-600">
                    Pilih kecepatan pengerjaan yang paling tepat untuk ritme aktivitas harian Anda di Malang.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200 text-slate-500 font-semibold text-xs uppercase tracking-wider bg-slate-50">
                            <th class="p-3.5 sm:p-4 rounded-l-xl">Paket Layanan</th>
                            <th class="p-3.5 sm:p-4">Durasi Selesai</th>
                            <th class="p-3.5 sm:p-4">Tarif / Kg</th>
                            <th class="p-3.5 sm:p-4">Metode Pengeringan</th>
                            <th class="p-3.5 sm:p-4 rounded-r-xl">Cocok Untuk</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                                <span>Cuci Kering Setrika Reguler</span>
                            </td>
                            <td class="p-3.5 sm:p-4 font-mono font-semibold">48 Jam (2 Hari)</td>
                            <td class="p-3.5 sm:p-4 font-bold text-sky-700">Rp 7.000</td>
                            <td class="p-3.5 sm:p-4">Gas Dryer Komersial 100% Kering</td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Pakaian harian hemat & santai</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors bg-sky-50/30">
                            <td class="p-3.5 sm:p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                <span>Cuci Kering Setrika Kilat</span>
                            </td>
                            <td class="p-3.5 sm:p-4 font-mono font-semibold">24 Jam (1 Hari)</td>
                            <td class="p-3.5 sm:p-4 font-bold text-sky-700">Rp 10.000</td>
                            <td class="p-3.5 sm:p-4">Prioritas Drum & Setrika Uap</td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Kebutuhan kerja & kuliah mendesak</td>
                        </tr>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="p-3.5 sm:p-4 font-bold text-slate-900 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                <span>Cuci Kering Setrika Express</span>
                            </td>
                            <td class="p-3.5 sm:p-4 font-mono font-semibold text-emerald-700 font-bold">6 Jam Langsung Jadi</td>
                            <td class="p-3.5 sm:p-4 font-bold text-sky-700">Rp 15.000</td>
                            <td class="p-3.5 sm:p-4">Jalur Khusus Langsung Diproses</td>
                            <td class="p-3.5 sm:p-4 text-slate-500">Wisatawan, transit, dinas mendadak</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<div class="rounded-2xl bg-gradient-to-r from-sky-900 to-brand-900 text-white p-6 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="space-y-2 text-center md:text-left">
                <span class="px-3 py-1 rounded-full bg-white/10 text-sky-300 text-xs font-bold uppercase tracking-wider border border-white/10">
                    Layanan Antar-Jemput
                </span>
                <h3 class="text-xl sm:text-2xl font-black">
                    Pakaian Menumpuk? Tim Kami Siap Jemput ke Lokasi Anda
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 max-w-xl">
                    Gratis penjemputan area Dinoyo (radius gerai). Cukup kirim alamat dan perkiraan berat via WhatsApp, kurir kami langsung meluncur.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
                <a href="{{ route('public.kalkulator') }}" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-bold text-xs transition-colors flex items-center justify-center gap-2 shadow-sm">
                    <i class="fa-solid fa-calculator text-sky-600"></i>
                    <span>Hitung Estimasi Biaya</span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20antar%20jemput" target="_blank" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center justify-center gap-2 shadow-md">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Chat CS WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

</div>

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
</script>
@endpush
@endsection
