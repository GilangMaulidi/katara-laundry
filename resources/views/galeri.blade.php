@extends('layouts.public')

@section('title', 'Galeri Gerai Dinoyo & Fasilitas Produksi - Katara Laundry Malang')
@section('meta_description', 'Dokumentasi foto fasilitas gerai Katara Laundry Dinoyo Malang: deretan mesin cuci komersial, rak 45 slot, setrika uap boiler, dan hasil pengerjaan rapi.')

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
                <span class="text-white font-semibold">Galeri Gerai</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-900/70 text-sky-300 text-xs font-bold uppercase tracking-wider border border-sky-700/50 shadow-xs">
                    <i class="fa-solid fa-camera text-sky-400"></i>
                    <span>Dokumentasi Nyata Gerai</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Galeri Gerai & Fasilitas Produksi
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Kualitas bukan sekadar janji. Lihat langsung suasana gerai, kebersihan mesin drum, sistem rak penyimpanan 45 slot, dan standar hasil pengerjaan kami di Dinoyo, Malang.
                </p>
            </div>
        </div>
    </section>

<section class="site-container space-y-12 sm:space-y-16 lg:space-y-20">
        
<div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200 pb-5">
            <div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                    Fasilitas & Suasana Gerai
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Klik filter kategori di bawah untuk menyaring foto dokumentasi.
                </p>
            </div>

            <div class="inline-flex p-1 rounded-xl bg-slate-100 border border-slate-200 shadow-xs gap-1 self-start sm:self-auto flex-wrap">
                <button type="button" onclick="filterGallery('all')" id="btn-gal-all" class="gal-tab-btn active px-3.5 py-2 min-h-[40px] rounded-lg text-xs font-bold transition-all bg-brand-600 text-white shadow-xs">
                    Semua Foto
                </button>
                <button type="button" onclick="filterGallery('mesin')" id="btn-gal-mesin" class="gal-tab-btn px-3.5 py-2 min-h-[40px] rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Mesin & Produksi
                </button>
                <button type="button" onclick="filterGallery('rak')" id="btn-gal-rak" class="gal-tab-btn px-3.5 py-2 min-h-[40px] rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Rak 45 Slot
                </button>
                <button type="button" onclick="filterGallery('khusus')" id="btn-gal-khusus" class="gal-tab-btn px-3.5 py-2 min-h-[40px] rounded-lg text-xs font-bold transition-all text-slate-600 hover:text-slate-900 hover:bg-white/80">
                    Perawatan Khusus
                </button>
            </div>
        </div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 items-stretch">
            
<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="mesin">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/laundry-washers.jpg') }}" alt="Deretan Mesin Cuci Komersial Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Mesin & Produksi
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Deretan Drum Mesin Cuci Komersial
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Drum berbahan stainless steel standar industri. Setiap pelanggan mendapatkan drum eksklusif tersendiri tanpa dicampur.
                    </p>
                </div>
            </div>

<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="mesin">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/laundry-ironing.jpg') }}" alt="Setrika Uap Boiler Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Mesin & Produksi
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Setrika Uap Boiler & Meja Vakum
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Penyetrikaan bertekanan uap tinggi menghaluskan kerutan kain dengan cepat tanpa merusak kancing atau membuat kain mengkilap.
                    </p>
                </div>
            </div>

<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="rak">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/laundry-folded.jpg') }}" alt="45 Slot Rak Fisik Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Rak 45 Slot
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Area Penyimpanan Rak 45 Slot
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Cucian yang selesai dilipat dan dipacking rapi ditempatkan di rak berkode teratur agar tidak tercecer dan cepat saat diambil.
                    </p>
                </div>
            </div>

<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="khusus">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/laundry-special-care.jpg') }}" alt="Perawatan Bedcover Jumbo & Jas" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Perawatan Khusus
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Pencucian Bedcover Jumbo & Selimut
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Kapasitas drum ekstra besar memastikan dakron bedcover terbilas bersih merata dan kering sempurna tanpa bau apek.
                    </p>
                </div>
            </div>

<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="khusus">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/service-shoes.jpg') }}" alt="Cuci Sepatu Sneakers Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Perawatan Khusus
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Deep Cleaning Sepatu Sneakers
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Perawatan manual dengan sabun khusus sneaker dan pengeringan suhu terkontrol untuk menjaga lem dan material outsole.
                    </p>
                </div>
            </div>

<div class="gal-item bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group" data-category="mesin">
                <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100 relative">
                    <img src="{{ asset('images/service-kiloan.jpg') }}" alt="Area Timbangan & POS Kasir Katara Laundry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-900/80 backdrop-blur-sm text-sky-300 border border-sky-700/50">
                        Gerai & Kasir
                    </div>
                </div>
                <div class="p-5 space-y-1.5">
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-sky-600 transition-colors">
                        Area Kasir & Timbangan Digital
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Penimbangan langsung disaksikan pelanggan dengan timbangan digital akurat dan pencetakan nota sistematis secara instan.
                    </p>
                </div>
            </div>

        </div>

<div class="rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 space-y-6 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-4">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-wider border border-sky-200">
                        <i class="fa-solid fa-location-dot text-rose-500"></i>
                        <span>Kunjungi Gerai Kami</span>
                    </span>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                        Katara Laundry Gerai Dinoyo — Malang
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Berlokasi strategis di kawasan Dinoyo, memudahkan akses bagi mahasiswa UB, UM, Polinema, UIN Malang, serta warga perumahan sekitar.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs pt-2">
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 space-y-1">
                            <span class="text-slate-500 font-semibold block">Jam Operasional:</span>
                            <span class="font-bold text-slate-900 block font-mono">Senin - Sabtu: 07.00 - 21.00 WIB</span>
                            <span class="text-slate-600 block font-mono">Minggu: 08.00 - 20.00 WIB</span>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 space-y-1">
                            <span class="text-slate-500 font-semibold block">Kontak WhatsApp:</span>
                            <span class="font-bold text-emerald-700 block font-mono text-sm">0812-3456-7890</span>
                            <span class="text-[11px] text-slate-500">Siap melayani tanya jawab & jemputan</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-3">
                    <a href="https://maps.google.com/?q=Dinoyo+Malang" target="_blank" class="w-full p-4 rounded-2xl bg-sky-50 border border-sky-200 hover:bg-sky-100 hover:border-sky-300 transition-colors flex items-center justify-between group shadow-xs block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white text-rose-500 border border-rose-100 flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 text-xs block">Buka Petunjuk Arah (Google Maps)</span>
                                <span class="text-[11px] text-slate-500">Navigasi langsung ke gerai Dinoyo</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-arrow-up-right-from-square text-sky-600 group-hover:translate-x-0.5 transition-transform"></i>
                    </a>

                    <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20laundry%20antar%20jemput" target="_blank" class="w-full p-4 rounded-2xl bg-emerald-50 border border-emerald-200 hover:bg-emerald-100 hover:border-emerald-300 transition-colors flex items-center justify-between group shadow-xs block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white text-emerald-600 border border-emerald-100 flex items-center justify-center text-lg shrink-0">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 text-xs block">Hubungi Customer Service WhatsApp</span>
                                <span class="text-[11px] text-slate-500">Respon cepat & ramah</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-arrow-right text-emerald-600 group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                </div>
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
            btn.classList.remove('active', 'bg-brand-600', 'text-white', 'shadow-xs');
            btn.classList.add('text-slate-600');
        });

        const activeBtn = document.getElementById('btn-gal-' + cat);
        if (activeBtn) {
            activeBtn.classList.add('active', 'bg-brand-600', 'text-white', 'shadow-xs');
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
