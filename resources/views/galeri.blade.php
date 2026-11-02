@extends('layouts.publik')

@section('title', 'Galeri Gerai Dinoyo & Fasilitas Produksi - Katara Laundry Malang')
@section('meta_description', 'Dokumentasi foto fasilitas gerai Katara Laundry Dinoyo Malang: deretan mesin cuci komersial, rak 45 slot, setrika uap boiler, dan hasil pengerjaan rapi.')

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
                <span class="text-white font-semibold">Galeri Gerai</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Galeri Gerai & Fasilitas Produksi
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Kualitas bukan sekadar janji. Lihat langsung suasana gerai, kebersihan mesin drum, sistem rak penyimpanan 45 slot, dan standar hasil pengerjaan kami di Dinoyo, Malang.
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
        
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <div class="space-y-1">
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                    Fasilitas & Suasana Gerai
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Klik filter kategori di bawah untuk menyaring foto dokumentasi operasional.
                </p>
            </div>

            <div class="inline-flex p-1 rounded-2xl bg-slate-100 border border-slate-200/90 shadow-2xs gap-1.5 self-start sm:self-auto flex-wrap">
                <button type="button" onclick="filterGallery('all')" id="btn-gal-all" class="gal-tab-btn active h-9 px-3.5 sm:px-4 rounded-xl text-xs font-bold transition-all inline-flex items-center justify-center leading-none bg-sky-600 text-white shadow-xs">
                    Semua Foto
                </button>
                <button type="button" onclick="filterGallery('mesin')" id="btn-gal-mesin" class="gal-tab-btn h-9 px-3.5 sm:px-4 rounded-xl text-xs font-bold transition-all inline-flex items-center justify-center leading-none text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Mesin & Produksi
                </button>
                <button type="button" onclick="filterGallery('rak')" id="btn-gal-rak" class="gal-tab-btn h-9 px-3.5 sm:px-4 rounded-xl text-xs font-bold transition-all inline-flex items-center justify-center leading-none text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Rak 45 Slot
                </button>
                <button type="button" onclick="filterGallery('khusus')" id="btn-gal-khusus" class="gal-tab-btn h-9 px-3.5 sm:px-4 rounded-xl text-xs font-bold transition-all inline-flex items-center justify-center leading-none text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Perawatan Khusus
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-4 items-stretch !mt-3.5 sm:!mt-5">
            
            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="mesin">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Deretan Mesin Cuci Komersial Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Mesin & Produksi
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Deretan Drum Mesin Cuci Komersial
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Drum berbahan stainless steel standar industri. Setiap pelanggan mendapatkan drum eksklusif tersendiri tanpa dicampur.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>100% Drum stainless steel higienis</span>
                </div>
            </div>

            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="mesin">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap Boiler Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Mesin & Produksi
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Setrika Uap Boiler & Meja Vakum
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Penyetrikaan bertekanan uap tinggi menghaluskan kerutan kain dengan cepat tanpa merusak kancing atau membuat kain mengkilap.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Boiler uap industri anti gosong</span>
                </div>
            </div>

            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="rak">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-folded.jpg') }}" alt="45 Slot Rak Fisik Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Rak 45 Slot
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Area Penyimpanan Rak 45 Slot
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Cucian yang selesai dilipat dan dipacking rapi ditempatkan di rak berkode teratur agar tidak tercecer dan cepat saat diambil.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>45 Slot fisik bernomor & notif WA</span>
                </div>
            </div>

            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="khusus">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/laundry-special-care.jpg') }}" alt="Perawatan Bedcover Jumbo & Jas" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Perawatan Khusus
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Pencucian Bedcover Jumbo & Selimut
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Kapasitas drum ekstra besar memastikan dakron bedcover terbilas bersih merata dan kering sempurna tanpa bau apek.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Kapasitas drum jumbo 100% kering</span>
                </div>
            </div>

            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="khusus">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-shoes.jpg') }}" alt="Cuci Sepatu Sneakers Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Perawatan Khusus
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Deep Cleaning Sepatu Sneakers
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Perawatan manual dengan sabun khusus sneaker dan pengeringan suhu terkontrol untuk menjaga lem dan material outsole.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Treatment manual detail & wangi</span>
                </div>
            </div>

            <div class="gal-item bg-white rounded-2xl border border-slate-200/90 p-3.5 sm:p-4 space-y-2.5 shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group h-full" data-category="mesin">
                <div class="space-y-2.5">
                    <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100 relative">
                        <img src="{{ asset('images/service-kiloan.jpg') }}" alt="Area Timbangan & POS Kasir Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-md bg-slate-900/90 text-white text-[10px] font-bold uppercase tracking-wider shadow-sm">
                            Gerai & Kasir
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-slate-900 group-hover:text-sky-700 transition-colors">
                            Area Kasir & Timbangan Digital
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed font-normal">
                            Penimbangan langsung disaksikan pelanggan dengan timbangan digital akurat dan pencetakan nota sistematis secara instan.
                        </p>
                    </div>
                </div>
                <div class="mt-2.5 pt-2 border-t border-slate-100 text-[11px] font-semibold text-slate-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i> <span>Akurasi digital 2 desimal transparan</span>
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

@push('scripts')
<script>
    function filterGallery(cat) {
        const items = document.querySelectorAll('.gal-item');
        const buttons = document.querySelectorAll('.gal-tab-btn');

        buttons.forEach(btn => {
            btn.classList.remove('active', 'bg-sky-600', 'bg-brand-600', 'text-white', 'shadow-xs');
            btn.classList.add('text-slate-600');
        });

        const activeBtn = document.getElementById('btn-gal-' + cat);
        if (activeBtn) {
            activeBtn.classList.add('active', 'bg-sky-600', 'text-white', 'shadow-xs');
            activeBtn.classList.remove('text-slate-600');
        }

        items.forEach(item => {
            if (cat === 'all' || item.getAttribute('data-category') === cat) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }
</script>
@endpush
@endsection