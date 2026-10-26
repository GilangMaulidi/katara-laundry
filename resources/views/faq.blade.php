@extends('layouts.public')

@section('title', 'Tanya Jawab (FAQ) - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Pertanyaan yang sering diajukan seputar layanan Katara Laundry Dinoyo: 1 mesin 1 pelanggan tanpa campur, estimasi selesai, pelacakan nota online, dan garansi cuci ulang.')

@section('content')
<div class="space-y-12 sm:space-y-16 pb-16">

<section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-14 sm:py-20 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-6 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-700">/</span>
                <span class="text-white font-semibold">Tanya Jawab (FAQ)</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold uppercase tracking-wider border border-amber-500/30 shadow-xs">
                    <i class="fa-solid fa-circle-question text-amber-400"></i>
                    <span>Pusat Bantuan & FAQ</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Pertanyaan yang Sering Diajukan
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Temukan jawaban lengkap dan transparan seputar standar higienitas, waktu pengerjaan, pelacakan nota, dan garansi cuci ulang kami.
                </p>
            </div>
        </div>
    </section>

<section class="site-container-narrow space-y-8">
        <div class="space-y-3.5">
            
<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(1)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-shield-halved text-sky-600 text-xs"></i>
                        <span>Apakah pakaian saya dicampur dengan cucian orang lain?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-1"></i>
                </button>
                <div id="faq-content-1" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    <strong class="text-slate-900">Sama sekali tidak!</strong> Katara Laundry berpegang teguh pada prinsip <em>1 Mesin 1 Nota</em>. Berapapun jumlah pakaian Anda (bahkan hanya 1 kg), cucian Anda mendapatkan drum mesin cuci dan pengering tersendiri tanpa dicampur dengan pelanggan mana pun demi menjaga kebersihan, privasi, dan mencegah pakaian tertukar.
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(2)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-clock text-sky-600 text-xs"></i>
                        <span>Berapa lama estimasi pakaian selesai dicuci?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-2"></i>
                </button>
                <div id="faq-content-2" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Kami menyediakan 3 pilihan paket waktu:
                    <ul class="list-disc pl-5 mt-2 space-y-1">
                        <li><strong class="text-slate-900">Reguler (48 Jam / 2 Hari)</strong>: Pilihan paling hemat untuk cucian harian santai.</li>
                        <li><strong class="text-slate-900">Kilat (24 Jam / 1 Hari)</strong>: Selesai keesokan harinya di jam yang sama.</li>
                        <li><strong class="text-slate-900">Express Prioritas (6 Jam)</strong>: Masuk pagi, siang/sore sudah rapi terlipat di rak.</li>
                    </ul>
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(3)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-magnifying-glass text-sky-600 text-xs"></i>
                        <span>Bagaimana cara mengecek status pakaian secara mandiri?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-3"></i>
                </button>
                <div id="faq-content-3" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Anda dapat mengakses fitur pelacakan online di beranda website ini kapan saja. Cukup masukkan <code class="text-sky-700 bg-sky-50 px-2 py-0.5 rounded border border-sky-200">Nomor Nota (KTR)</code> atau nomor WhatsApp yang didaftarkan saat penimbangan. Sistem akan menampilkan posisi cucian (cuci, kering, setrika, atau sudah di rak nomor berapa).
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(4)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-truck-fast text-sky-600 text-xs"></i>
                        <span>Apakah ada layanan antar-jemput di area Dinoyo?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-4"></i>
                </button>
                <div id="faq-content-4" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Ya, kami menyediakan kurir antar-jemput gratis untuk area sekitar Dinoyo (radius gerai Jl. MT Haryono), serta melayani area Sigura-gura, Sumbersari, Soekarno-Hatta (Suhat), Tlogomas, dan sekitarnya. Cukup hubungi admin WhatsApp kami.
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(5)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-award text-sky-600 text-xs"></i>
                        <span>Bagaimana kebijakan garansi cuci ulang 100%?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-5"></i>
                </button>
                <div id="faq-content-5" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Kepuasan Anda adalah prioritas utama kami. Jika pakaian yang Anda ambil dirasa masih ada noda yang terlewat atau setrikaan kurang licin, hubungi kami dalam kurun waktu 1x24 jam setelah pakaian diambil. Kami akan mencuci ulang pakaian tersebut tanpa dikenakan biaya sepeser pun.
                </div>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:border-sky-300 transition-all">
                <button type="button" onclick="toggleFaq(6)" class="w-full p-5 min-h-[48px] text-left font-bold text-sm text-slate-900 flex items-center justify-between gap-3 hover:bg-slate-50 transition-colors">
                    <span class="flex items-center gap-2.5">
                        <i class="fa-solid fa-spray-can text-sky-600 text-xs"></i>
                        <span>Apakah pilihan parfum dikenakan biaya tambahan?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-sky-600 text-xs transition-transform duration-200" id="faq-icon-6"></i>
                </button>
                <div id="faq-content-6" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    <strong class="text-slate-900">Gratis!</strong> Anda bebas memilih 1 dari 5 varian aroma parfum grade premium (Selera Segar, Sakura Blossom, Ocean Fresh, Lavender Relax, atau Baby Sweet) di setiap transaksi tanpa dipungut biaya sepeser pun.
                </div>
            </div>

        </div>

<div class="rounded-2xl border border-slate-200/80 bg-white p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-5 shadow-sm">
            <div class="space-y-1 text-center sm:text-left">
                <h4 class="font-extrabold text-slate-900 text-base">
                    Masih Memiliki Pertanyaan Lain?
                </h4>
                <p class="text-xs text-slate-500">
                    Tim customer service kami siap menjawab pertanyaan seputar cucian dan penjemputan.
                </p>
            </div>
            <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20bertanya%20seputar%20layanan" target="_blank" class="px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs transition-colors flex items-center gap-2 shadow-md shrink-0">
                <i class="fa-brands fa-whatsapp text-base"></i>
                <span>Tanya CS WhatsApp</span>
            </a>
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
