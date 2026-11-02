@extends('layouts.publik')

@section('title', 'Tanya Jawab (FAQ) - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Pertanyaan yang sering diajukan seputar layanan Katara Laundry Dinoyo: 1 mesin 1 pelanggan tanpa campur, estimasi selesai, pelacakan nota online, dan garansi cuci ulang.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

    <section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Tanya Jawab (FAQ)</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Pertanyaan yang Sering Diajukan
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Temukan jawaban lengkap dan transparan seputar standar higienitas, waktu pengerjaan, pelacakan nota, dan garansi cuci ulang kami.
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
                    Semua Jawaban untuk Pertanyaan Anda
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Informasi transparan seputar proses cuci mandiri 1 mesin, estimasi selesai, sistem rak, hingga garansi cuci ulang 100%.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5 sm:gap-4 items-start !mt-3.5 sm:!mt-5">
                
                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(1)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="leading-snug">Apakah pakaian saya dicampur dengan cucian orang lain?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-1"></i>
                    </button>
                    <div id="faq-content-1" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        <strong class="text-slate-900">Sama sekali tidak!</strong> Katara Laundry berpegang teguh pada prinsip <em>1 Mesin 1 Nota</em>. Berapapun jumlah pakaian Anda (bahkan hanya 1 kg), cucian Anda mendapatkan drum mesin cuci dan pengering tersendiri tanpa dicampur dengan pelanggan mana pun demi menjaga kebersihan, privasi, dan mencegah pakaian tertukar.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(2)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <span class="leading-snug">Berapa lama estimasi pakaian selesai dicuci?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-2"></i>
                    </button>
                    <div id="faq-content-2" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        Kami menyediakan 3 pilihan paket waktu pengerjaan:
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li><strong class="text-slate-900">Reguler (48 Jam / 2 Hari)</strong>: Pilihan paling hemat untuk cucian harian santai.</li>
                            <li><strong class="text-slate-900">Kilat (24 Jam / 1 Hari)</strong>: Selesai keesokan harinya di jam yang sama.</li>
                            <li><strong class="text-slate-900">Express Prioritas (6 Jam)</strong>: Masuk pagi, siang atau sore sudah siap rapi di slot rak.</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(3)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <span class="leading-snug">Bagaimana cara mengecek status pakaian secara mandiri?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-3"></i>
                    </button>
                    <div id="faq-content-3" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        Anda dapat mengakses fitur pelacakan online di menu <strong class="text-sky-700">Lacak Nota</strong> kapan saja. Cukup masukkan <code class="text-sky-700 bg-sky-50 px-2 py-0.5 rounded border border-sky-200">Nomor Nota (KTR)</code> atau nomor WhatsApp yang didaftarkan saat penimbangan. Sistem menampilkan status real-time serta posisi rak penyimpanan.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(4)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-truck-fast"></i>
                            </span>
                            <span class="leading-snug">Apakah ada layanan antar-jemput di area Dinoyo?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-4"></i>
                    </button>
                    <div id="faq-content-4" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        Ya, kami menyediakan kurir antar-jemput gratis untuk area sekitar Dinoyo (radius gerai Jl. MT Haryono), serta melayani area Sigura-gura, Sumbersari, Soekarno-Hatta (Suhat), Tlogomas, dan sekitarnya. Cukup hubungi admin WhatsApp kami.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(5)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-award"></i>
                            </span>
                            <span class="leading-snug">Bagaimana kebijakan garansi cuci ulang 100%?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-5"></i>
                    </button>
                    <div id="faq-content-5" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        Kepuasan Anda adalah prioritas utama kami. Jika pakaian yang Anda ambil dirasa masih ada noda yang terlewat atau setrikaan kurang licin, hubungi kami dalam kurun waktu 1x24 jam setelah pakaian diambil. Kami akan mencuci dan menyetrika ulang pakaian tersebut 100% gratis tanpa biaya tambahan.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-sm hover:shadow-md hover:border-sky-300 transition-all flex flex-col justify-between group">
                    <button type="button" onclick="toggleFaq(6)" class="w-full p-3.5 sm:p-4 text-left font-extrabold text-xs sm:text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50/80 transition-colors">
                        <span class="flex items-center gap-2.5 min-w-0">
                            <span class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                <i class="fa-solid fa-spray-can"></i>
                            </span>
                            <span class="leading-snug">Apakah pilihan parfum dikenakan biaya tambahan?</span>
                        </span>
                        <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200 shrink-0" id="faq-icon-6"></i>
                    </button>
                    <div id="faq-content-6" class="hidden px-4 sm:px-5 pb-4 pt-2.5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 bg-slate-50/30 font-normal">
                        <strong class="text-slate-900">Gratis!</strong> Anda bebas memilih 5 varian aroma parfum grade premium (seperti Sakura Blossom, Ocean Fresh, Lavender Breeze, Snappy Luxury, atau Baby Cuddle) di setiap transaksi tanpa dipungut biaya sepeser pun.
                    </div>
                </div>

            </div>
        </div>

        <div class="rounded-2xl border border-slate-200/90 bg-white p-4 sm:p-5 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
            <div class="flex items-center gap-3.5 text-center sm:text-left">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center text-lg shrink-0 border border-emerald-500/20">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="space-y-0.5">
                    <h3 class="font-extrabold text-slate-900 text-sm sm:text-base">
                        Masih Memiliki Pertanyaan Lain?
                    </h3>
                    <p class="text-xs text-slate-500">
                        Tim customer service kami siap membantu menjawab pertanyaan Anda dengan ramah dan responsif.
                    </p>
                </div>
            </div>
            <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20bertanya%20seputar%20layanan" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40 shrink-0">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Tanya CS WhatsApp</span>
            </a>
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

@push('scripts')
<script>
    function toggleFaq(index) {
        const content = document.getElementById('faq-content-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        if (!content) return;

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            if (icon) icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            if (icon) icon.classList.remove('rotate-180');
        }
    }
</script>
@endpush
@endsection
