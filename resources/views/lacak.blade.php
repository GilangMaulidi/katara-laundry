@extends('layouts.publik')

@section('title', 'Lacak Status Nota Cucian & Slot Rak Fisik - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Pantau status pengerjaan laundry kiloan & satuan Anda secara real-time di Katara Laundry Dinoyo Malang. Cek nomor nota atau nomor WhatsApp sekarang.')

@section('content')
<div class="space-y-8 sm:space-y-10 lg:space-y-12 pb-12 sm:pb-16">

    <section class="relative bg-gradient-to-b from-sky-950 via-[#0a1b38] to-[#08152b] text-white py-10 sm:py-12 border-b border-sky-900/60 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="site-container relative z-10 space-y-4 sm:space-y-5 text-center max-w-3xl mx-auto">
            <nav class="flex items-center justify-center gap-2 text-xs text-sky-300/80 font-medium">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-[11px]"></i>
                    <span>Beranda</span>
                </a>
                <span class="text-sky-500/60">/</span>
                <span class="text-white font-semibold">Lacak Nota</span>
            </nav>

            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white leading-tight">
                    Lacak Status Cucian &amp; Nomor Rak Anda
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Masukkan nomor nota transaksi Anda atau nomor WhatsApp terdaftar untuk memantau progress pengerjaan dari pencucian hingga posisi slot rak penyimpanan pakaian.
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

    <section class="site-container -mt-6 sm:-mt-8 relative z-20">
        <div class="w-full bg-[#08152b] rounded-2xl border border-sky-800/80 p-4 sm:p-6 lg:p-7 shadow-xl space-y-3.5 sm:space-y-4">
            
            <div class="flex items-center justify-between pb-3 border-b border-sky-900/60">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-sky-600 text-white flex items-center justify-center text-sm shadow-md shadow-sky-600/30">
                        <i class="fa-solid fa-qrcode text-sm"></i>
                    </div>
                    <div>
                        <h2 class="text-sm sm:text-base font-extrabold text-white leading-tight">Cek Nota Cucian Real-Time</h2>
                        <p class="text-xs text-slate-400">Pencarian terintegrasi nomor nota (KTR-...) atau nomor WhatsApp</p>
                    </div>
                </div>
                <span class="hidden sm:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/80 text-emerald-300 text-[11px] font-bold border border-emerald-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Sistem Aktif</span>
                </span>
            </div>

            @if(session('error'))
                <div class="p-3.5 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-200 text-xs flex items-start gap-2.5 animate-shake">
                    <i class="fa-solid fa-circle-exclamation text-rose-400 shrink-0 text-base mt-0.5"></i>
                    <div class="space-y-0.5">
                        <p class="font-bold text-rose-100">Pencarian Tidak Ditemukan</p>
                        <p class="text-xs text-rose-200/90 leading-relaxed">{{ session('error') }}</p>
                    </div>
                </div>
            @endif

            <form action="{{ route('tracking.search') }}" method="POST" class="space-y-3">
                @csrf
                <div class="flex flex-col sm:flex-row gap-2.5">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-sky-400">
                            <i class="fa-solid fa-barcode text-sm"></i>
                        </div>
                        <input type="text" 
                               name="invoice_number" 
                               id="invoiceInputPage" 
                               value="{{ old('invoice_number') }}" 
                               placeholder="Contoh: KTR-202609-001 atau 081234567890" 
                               required 
                               autofocus
                               class="w-full pl-10 pr-4 py-2.5 min-h-[44px] rounded-xl bg-[#060e1d] text-white placeholder-slate-500 text-xs sm:text-sm font-medium border border-sky-800/80 focus:outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-400/30 transition-all">
                    </div>
                    <button type="submit" class="h-11 px-5 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs sm:text-sm transition-all flex items-center justify-center gap-2 shadow-md shadow-sky-600/30 shrink-0 interactive-btn leading-none">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                        <span>Lacak Sekarang</span>
                    </button>
                </div>

                <div class="pt-1 flex flex-wrap items-center gap-2 text-xs">
                    <span class="text-slate-400 font-medium text-[11px]">Coba Nota Demo:</span>
                    <button type="button" onclick="fillInvoice('KTR-202609-001')" class="h-6 px-2.5 rounded-lg bg-sky-950/80 hover:bg-sky-900 text-sky-300 border border-sky-800/60 font-mono text-[11px] font-bold transition-colors">
                        KTR-202609-001 (Selesai)
                    </button>
                    <button type="button" onclick="fillInvoice('KTR-202609-002')" class="h-6 px-2.5 rounded-lg bg-sky-950/80 hover:bg-sky-900 text-sky-300 border border-sky-800/60 font-mono text-[11px] font-bold transition-colors">
                        KTR-202609-002 (Proses)
                    </button>
                    <button type="button" onclick="fillInvoice('081234567890')" class="h-6 px-2.5 rounded-lg bg-emerald-950/80 hover:bg-emerald-900 text-emerald-300 border border-emerald-800/60 font-mono text-[11px] font-bold transition-colors">
                        081234567890 (No. WA)
                    </button>
                </div>
            </form>

            <div class="pt-2.5 border-t border-sky-900/60 grid grid-cols-1 sm:grid-cols-3 gap-2 text-[11px] sm:text-xs text-slate-300">
                <div class="flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Status Tiap Fase Transparan</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Informasi Slot Rak Fisik</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Tanpa Perlu Login / Akun</span>
                </div>
            </div>

        </div>
    </section>

    <section class="site-container space-y-8 sm:space-y-10 lg:space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-1.5 sm:space-y-2">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                Alur Produksi yang Anda Pantau
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Setiap pakaian yang masuk dipindai secara digital pada setiap pergantian pos kerja operasional demi transparansi total.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-3.5 items-stretch !mt-3.5 sm:!mt-5">
            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-sky-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-xs flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors shadow-2xs">
                    01
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-slate-900 group-hover:text-sky-700 transition-colors">Nota Masuk</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">Ditimbang &amp; disortir sesuai jenis bahan</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-sky-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-xs flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors shadow-2xs">
                    02
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-slate-900 group-hover:text-sky-700 transition-colors">Pencucian</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">1 drum mesin khusus 1 pelanggan</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-amber-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-amber-50 text-amber-600 font-black text-xs flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors shadow-2xs">
                    03
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-slate-900 group-hover:text-amber-700 transition-colors">Pengeringan Gas</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">100% tuntas bebas bau apek</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-sky-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-xs flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors shadow-2xs">
                    04
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-slate-900 group-hover:text-sky-700 transition-colors">Setrika Uap</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">Boiler uap rapi, serat kain aman</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-purple-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-purple-50 text-purple-600 font-black text-xs flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors shadow-2xs">
                    05
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-slate-900 group-hover:text-purple-700 transition-colors">Pengemasan</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">Plastik rapat &amp; parfum pilihan</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/90 p-3 sm:p-3.5 text-center space-y-2 shadow-xs hover:border-emerald-400 hover:shadow-sm transition-all group flex flex-col justify-between h-full">
                <div class="w-9 h-9 mx-auto rounded-xl bg-emerald-50 text-emerald-600 font-black text-xs flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors shadow-2xs">
                    06
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-xs text-emerald-700 group-hover:text-emerald-800 transition-colors">Slot Rak Fisik</h3>
                    <p class="text-[11px] text-slate-500 leading-tight">Siap diambil di gerai Dinoyo</p>
                </div>
            </div>
        </div>
    </section>

    <section class="site-container space-y-8 sm:space-y-10 lg:space-y-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3.5 sm:gap-4 lg:gap-5 items-stretch">
            
            <div class="bg-gradient-to-br from-sky-950 to-[#0b1d3a] text-white rounded-2xl p-4 sm:p-5 space-y-3.5 border border-sky-800/80 shadow-md flex flex-col justify-between h-full">
                <div class="space-y-2.5">
                    <div class="w-9 h-9 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-lg border border-emerald-500/30">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-sm sm:text-base font-extrabold text-white">Struk Hilang atau Lupa Nomor?</h3>
                        <p class="text-xs text-slate-300 leading-relaxed font-normal">
                            Tidak perlu khawatir. Tim kasir kami siap membantu mencarikan nota cucian Anda berdasarkan nama pelanggan atau nomor HP yang terdaftar.
                        </p>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20struk%20saya%20hilang/lupa%20nomor%20nota.%20Boleh%20bantu%20cek%20status%20cucian%20saya?" target="_blank" class="w-full inline-flex items-center justify-center gap-1.5 h-9 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs leading-none shadow-sm shadow-emerald-600/20 transition-all border border-emerald-500/40">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Tanya Kasir via WhatsApp</span>
                </a>
            </div>

            <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 space-y-3 shadow-sm flex flex-col justify-between h-full">
                <div class="flex items-center gap-2 pb-2.5 border-b border-slate-100">
                    <i class="fa-solid fa-circle-question text-sky-600 text-base"></i>
                    <h3 class="text-sm sm:text-base font-extrabold text-slate-900">Seputar Pelacakan Nota Katara</h3>
                </div>

                <div class="space-y-2.5 text-xs">
                    <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Format nomor nota apa yang harus saya masukkan?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4 font-normal">
                            Masukkan format lengkap nomor nota seperti tercetak di struk (contoh: <strong class="font-mono text-slate-800">KTR-202609-001</strong>). Anda juga bisa langsung memasukkan nomor WhatsApp yang digunakan saat order.
                        </p>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Kapan status pakaian dinyatakan siap diambil?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4 font-normal">
                            Pakaian siap diambil setelah status berubah menjadi <strong class="text-emerald-700">"Siap Diambil"</strong> dan nomor slot rak fisik (misalnya: Rak A-03) telah terbit di sistem. Anda juga akan otomatis menerima pesan WhatsApp konfirmasi.
                        </p>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Apakah pelacakan ini diperbarui secara otomatis?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4 font-normal">
                            Ya, operator kami melakukan pemindaian barcode langsung di setiap stasiun kerja (cuci, pengering, setrika, rak) sehingga status yang Anda lihat adalah posisi pengerjaan terkini.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<script>
    function fillInvoice(val) {
        const input = document.getElementById('invoiceInputPage');
        if (input) {
            input.value = val;
            input.focus();
            input.classList.add('ring-2', 'ring-sky-400');
            setTimeout(() => input.classList.remove('ring-2', 'ring-sky-400'), 1500);
        }
    }
</script>
@endsection
