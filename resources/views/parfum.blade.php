@extends('layouts.publik')

@section('title', 'Pilihan Aroma Parfum Premium Pakaian - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Koleksi aroma parfum premium Katara Laundry Dinoyo: Sakura Blossom, Ocean Fresh, Lavender Breeze, Snappy Luxury, dan Baby Cuddle. Tahan 14 hari tanpa noda minyak.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

    <section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Aroma Parfum</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Pilihan Aroma Parfum Premium
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Formula wangi mikro-enkapsulasi yang meresap ke serat kain hingga 14 hari di lemari pakaian, 100% bebas alkohol keras, dan aman untuk kulit sensitif.
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
                    Koleksi Karakter Aroma Eksklusif
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Pilih aroma favorit Anda secara gratis di setiap nota cucian. Diracik khusus dengan ketahanan wangi segar hingga 14 hari.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-3.5 sm:gap-4 lg:gap-5 items-start !mt-3.5 sm:!mt-5">
                <div class="lg:col-span-5 rounded-2xl overflow-hidden shadow-sm border border-slate-200/90 bg-white lg:sticky lg:top-24">
                    <div class="aspect-video sm:aspect-[16/10] lg:aspect-[4/3] w-full overflow-hidden bg-slate-100 relative group">
                        <img src="{{ asset('images/laundry-fragrance.jpg') }}" 
                             alt="Koleksi Aroma Parfum Katara Laundry" 
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm flex items-center gap-1.5">
                            <i class="fa-solid fa-award text-amber-400"></i> <span>Grade Premium</span>
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 bg-gradient-to-br from-slate-900 via-sky-950 to-[#08152b] text-white space-y-2.5">
                        <div class="flex items-center justify-between">
                            <span class="px-2 py-0.5 rounded-md bg-purple-500/20 text-purple-300 border border-purple-500/30 text-[10px] font-bold uppercase tracking-wider flex items-center gap-1">
                                <i class="fa-solid fa-droplet-slash text-[9px]"></i> 100% Bebas Alkohol Keras
                            </span>
                            <span class="text-[10px] text-emerald-400 font-bold flex items-center gap-1">
                                <i class="fa-solid fa-shield-check text-xs"></i> Aman Kain
                            </span>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-extrabold text-sm sm:text-base text-white">
                                Anti Noda &amp; Ramah Serat Pakaian
                            </h3>
                            <p class="text-slate-300 text-xs leading-relaxed font-normal">
                                Parfum berbahan dasar air dan konsentrat wangi murni yang tidak meninggalkan bercak minyak kuning pada pakaian putih Anda.
                            </p>
                        </div>
                        <div class="pt-2 border-t border-sky-900/60 flex items-center justify-between text-[11px] text-slate-300">
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400 text-xs"></i> <span>Gratis tiap order</span></span>
                            <span class="flex items-center gap-1.5"><i class="fa-solid fa-check text-emerald-400 text-xs"></i> <span>Tahan 14 hari</span></span>
                        </div>
                    </div>
                </div>

                @php
                    $perfumeData = [
                        1 => ['top' => 'Fresh Cherry, White Peach', 'base' => 'Soft Musk, Clean Cotton', 'tag' => 'Floral Lembut', 'bg' => 'bg-rose-50 text-rose-700 border-rose-200/80', 'icon' => 'fa-seedling'],
                        2 => ['top' => 'Citrus Marine, Ozone', 'base' => 'Cedarwood, Amber', 'tag' => 'Segar Maskulin', 'bg' => 'bg-sky-50 text-sky-700 border-sky-200/80', 'icon' => 'fa-water'],
                        3 => ['top' => 'French Lavender, Bergamot', 'base' => 'Vanilla, Herbal Calming', 'tag' => 'Aromaterapi', 'bg' => 'bg-purple-50 text-purple-700 border-purple-200/80', 'icon' => 'fa-moon'],
                        4 => ['top' => 'Sparkling Pear, Jasmine', 'base' => 'Sandalwood, White Lily', 'tag' => 'Mewah Elegan', 'bg' => 'bg-amber-50 text-amber-700 border-amber-200/80', 'icon' => 'fa-crown'],
                        5 => ['top' => 'Powdery Rose, Sweet Almond', 'base' => 'Chamomile, Soft Cotton', 'tag' => 'Lembut Bayi', 'bg' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80', 'icon' => 'fa-heart'],
                    ];
                @endphp

                <div class="lg:col-span-7 space-y-3 sm:space-y-3.5">
                    @foreach($perfumes as $idx => $pf)
                        @php
                            $meta = $perfumeData[$pf->id] ?? ['top' => 'Fresh Citrus', 'base' => 'White Musk', 'tag' => 'Favorit', 'bg' => 'bg-sky-50 text-sky-700 border-sky-200/80', 'icon' => 'fa-spray-can'];
                        @endphp
                        <div class="bg-white rounded-2xl p-3.5 sm:p-4 border border-slate-200/90 shadow-sm hover:shadow-md hover:border-sky-300 transition-all space-y-2.5 group">
                            <div class="flex items-center justify-between gap-2">
                                <div class="flex items-center gap-2.5 min-w-0">
                                    <span class="w-9 h-9 rounded-xl {{ $meta['bg'] }} border flex items-center justify-center text-xs shrink-0 shadow-2xs">
                                        <i class="fa-solid {{ $meta['icon'] }}"></i>
                                    </span>
                                    <div class="min-w-0">
                                        <h3 class="font-extrabold text-slate-900 text-sm sm:text-base group-hover:text-sky-700 transition-colors truncate">
                                            {{ $pf->name }}
                                        </h3>
                                        <span class="text-xs text-slate-500 leading-tight block">{{ $pf->description }}</span>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-md {{ $meta['bg'] }} border text-[10px] font-bold uppercase tracking-wider shrink-0">
                                    {{ $meta['tag'] }}
                                </span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs pt-2 border-t border-slate-100 text-slate-600">
                                <div><strong class="text-slate-800">Top Notes:</strong> {{ $meta['top'] }}</div>
                                <div><strong class="text-slate-800">Base Notes:</strong> {{ $meta['base'] }}</div>
                            </div>

                            <div class="pt-1.5 flex items-center justify-between text-xs border-t border-slate-100/70">
                                <span class="text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5">
                                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Tersedia gratis di kasir</span>
                                </span>
                                <a href="{{ route('public.kalkulator') }}" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1.5 transition-colors">
                                    <span>Simulasi di Kalkulator</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="space-y-4 sm:space-y-5">
            <div class="text-center max-w-2xl mx-auto space-y-1.5 sm:space-y-2">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                    Standar Higienitas Katara Fragrance
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Formulasi khusus ramah serat kain dan higienis untuk menjaga keharuman serta kenyamanan pakaian Anda setiap hari.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 sm:gap-4 items-stretch !mt-3.5 sm:!mt-5">
                <div class="bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                    <div class="space-y-2">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center text-base shadow-2xs">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                                Aman Kulit Sensitif
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Formulasi hypoallergenic yang tidak menimbulkan gatal atau iritasi, sangat aman untuk pakaian balita dan penderita alergi kulit.
                            </p>
                        </div>
                    </div>
                    <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Hypoallergenic &amp; ramah balita</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                    <div class="space-y-2">
                        <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-base shadow-2xs">
                            <i class="fa-solid fa-droplet-slash"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                                Anti Bercak Minyak
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Bebas minyak hewani atau residu lengket sehingga kemeja putih, kain sutra, dan katun premium Anda tetap bersih tanpa noda samar.
                            </p>
                        </div>
                    </div>
                    <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>0% residu minyak kekuningan</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full">
                    <div class="space-y-2">
                        <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 border border-purple-100 flex items-center justify-center text-base shadow-2xs">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                                Tahan Hingga 14 Hari
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-normal">
                                Molekul aroma terikat pada serat kain saat proses penyetrikaan uap boiler, menjaga aroma tetap harum segar saat Anda kenakan.
                            </p>
                        </div>
                    </div>
                    <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Mikro-enkapsulasi uap boiler</span>
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
