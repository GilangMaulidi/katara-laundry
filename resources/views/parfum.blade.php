@extends('layouts.public')

@section('title', '5 Varian Aroma Parfum Premium Pakaian - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Koleksi 5 aroma parfum premium Katara Laundry Dinoyo: Selera Segar, Sakura Blossom, Ocean Fresh, Lavender Relax, dan Baby Sweet. Tahan 14 hari tanpa noda minyak.')

@section('content')
<div class="space-y-12 sm:space-y-16 lg:space-y-20 pb-12 sm:pb-16 lg:pb-20">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Aroma Parfum</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-purple-900/70 text-purple-300 text-xs font-bold uppercase tracking-wider border border-purple-700/50 shadow-xs">
                    <i class="fa-solid fa-spray-can-sparkles text-purple-400"></i>
                    <span>Katara Fragrance Bar</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    5 Pilihan Aroma Parfum Premium
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Formula wangi mikro-enkapsulasi yang meresap ke serat kain hingga 14 hari di lemari pakaian, 100% bebas alkohol keras, dan aman untuk kulit sensitif.
                </p>
            </div>
        </div>
    </section>

<section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-5 rounded-2xl overflow-hidden shadow-md border border-slate-200/80 bg-white">
                <img src="{{ asset('images/laundry-fragrance.jpg') }}" 
                     alt="Koleksi Aroma Parfum Katara Laundry" 
                     class="w-full aspect-[4/3] sm:aspect-[16/10] lg:h-[480px] object-cover object-center">
                <div class="p-5 bg-slate-900 text-white space-y-1.5 text-xs">
                    <span class="font-bold text-sm block">100% Bebas Alkohol Keras & Anti Noda</span>
                    <p class="text-slate-400 text-[11px] leading-relaxed">
                        Parfum berbahan dasar air dan konsentrat wangi murni yang tidak meninggalkan bercak minyak kuning pada pakaian putih Anda.
                    </p>
                </div>
            </div>

            @php
                $perfumeData = [
                    1 => ['top' => 'Fresh Cherry, White Peach', 'base' => 'Soft Musk, Clean Cotton', 'tag' => 'Floral Lembut', 'bg' => 'bg-rose-50 text-rose-700 border-rose-100', 'icon' => 'fa-seedling'],
                    2 => ['top' => 'Citrus Marine, Ozone', 'base' => 'Cedarwood, Amber', 'tag' => 'Segar Maskulin', 'bg' => 'bg-sky-50 text-sky-700 border-sky-100', 'icon' => 'fa-water'],
                    3 => ['top' => 'French Lavender, Bergamot', 'base' => 'Vanilla, Herbal Calming', 'tag' => 'Aromaterapi', 'bg' => 'bg-purple-50 text-purple-700 border-purple-100', 'icon' => 'fa-moon'],
                    4 => ['top' => 'Sparkling Pear, Jasmine', 'base' => 'Sandalwood, White Lily', 'tag' => 'Mewah Elegan', 'bg' => 'bg-amber-50 text-amber-700 border-amber-100', 'icon' => 'fa-crown'],
                    5 => ['top' => 'Powdery Rose, Sweet Almond', 'base' => 'Chamomile, Soft Cotton', 'tag' => 'Lembut Bayi', 'bg' => 'bg-emerald-50 text-emerald-700 border-emerald-100', 'icon' => 'fa-heart'],
                ];
            @endphp

            <div class="lg:col-span-7 space-y-4">
                @foreach($perfumes as $idx => $pf)
                    @php
                        $meta = $perfumeData[$pf->id] ?? ['top' => 'Fresh Citrus', 'base' => 'White Musk', 'tag' => 'Favorit', 'bg' => 'bg-sky-50 text-sky-700 border-sky-100', 'icon' => 'fa-spray-can'];
                    @endphp
                    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-sky-300 transition-all space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl {{ $meta['bg'] }} border flex items-center justify-center text-xs">
                                    <i class="fa-solid {{ $meta['icon'] }}"></i>
                                </span>
                                <div>
                                    <h3 class="font-extrabold text-slate-900 text-base">
                                        {{ $pf->name }}
                                    </h3>
                                    <span class="text-[11px] text-slate-500">{{ $pf->description }}</span>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full {{ $meta['bg'] }} border text-[10px] font-bold uppercase tracking-wider">
                                {{ $meta['tag'] }}
                            </span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs pt-1 border-t border-slate-100 text-slate-600">
                            <div><strong class="text-slate-800">Top Notes:</strong> {{ $meta['top'] }}</div>
                            <div><strong class="text-slate-800">Base Notes:</strong> {{ $meta['base'] }}</div>
                        </div>

                        <div class="flex justify-end pt-1">
                            <a href="{{ route('public.kalkulator') }}" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
                                <span>Pilih Varian Ini di Simulator Kalkulator</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

<div class="rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="text-center max-w-xl mx-auto space-y-1">
                <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Standard Mutu</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">
                    Standar Higienitas Katara Fragrance
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-xs">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-shield-heart"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Aman Kulit Sensitif</h4>
                    <p class="text-slate-600 leading-relaxed">
                        Formulasi hypoallergenic yang tidak menimbulkan gatal atau iritasi, sangat aman untuk pakaian balita dan penderita alergi kulit.
                    </p>
                </div>

                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-sky-50 text-sky-600 border border-sky-100 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-droplet-slash"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Anti Bercak Minyak</h4>
                    <p class="text-slate-600 leading-relaxed">
                        Bebas minyak hewani / residu lengket sehingga kemeja putih, kain sutra, dan katun premium Anda tetap bersih tanpa noda samar.
                    </p>
                </div>

                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 border border-purple-100 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 text-sm">Tahan Hingga 14 Hari</h4>
                    <p class="text-slate-600 leading-relaxed">
                        Molekul aroma terikat pada serat kain saat proses penyetrikaan uap, menjaga aroma tetap harum segar saat Anda mengenakannya.
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
