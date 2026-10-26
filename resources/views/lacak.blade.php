@extends('layouts.public')

@section('title', 'Lacak Status Nota Cucian & Slot Rak Fisik - Katara Laundry Dinoyo Malang')
@section('meta_description', 'Pantau status pengerjaan laundry kiloan & satuan Anda secara real-time di Katara Laundry Dinoyo Malang. Cek nomor nota atau nomor WhatsApp sekarang.')

@section('content')
<div class="space-y-12 sm:space-y-16 pb-20">

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
                <span class="text-white font-semibold">Lacak Nota</span>
            </nav>

            <div class="space-y-3">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-900/70 text-sky-300 text-xs font-bold uppercase tracking-wider border border-sky-700/50 shadow-xs">
                    <i class="fa-solid fa-magnifying-glass text-sky-400"></i>
                    <span>Pelacakan Mandiri Gerai Dinoyo</span>
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight">
                    Lacak Status Cucian & Nomor Rak Anda
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal max-w-2xl mx-auto">
                    Masukkan nomor nota transaksi Anda atau nomor WhatsApp terdaftar untuk memantau progress pengerjaan dari pencucian hingga posisi slot rak penyimpanan pakaian.
                </p>
            </div>
        </div>
    </section>

<section class="site-container -mt-6 sm:-mt-10 relative z-20">
        <div class="max-w-3xl mx-auto bg-[#08152b] rounded-3xl border border-sky-800/80 p-6 sm:p-8 shadow-2xl space-y-6">
            
            <div class="flex items-center justify-between pb-2 border-b border-sky-900/60">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-sky-600 text-white flex items-center justify-center text-sm shadow-md shadow-sky-600/30">
                        <i class="fa-solid fa-qrcode text-base"></i>
                    </div>
                    <div>
                        <h2 class="text-base sm:text-lg font-extrabold text-white leading-tight">Cek Nota Cucian Real-Time</h2>
                        <p class="text-xs text-slate-400">Pencarian terintegrasi nomor nota (KTR-...) atau nomor WhatsApp</p>
                    </div>
                </div>
                <span class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 text-emerald-300 text-xs font-bold border border-emerald-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Sistem Aktif</span>
                </span>
            </div>

@if(session('error'))
                <div class="p-4 rounded-2xl bg-rose-500/20 border border-rose-500/40 text-rose-200 text-xs sm:text-sm flex items-start gap-3 animate-shake">
                    <i class="fa-solid fa-circle-exclamation text-rose-400 shrink-0 text-base mt-0.5"></i>
                    <div class="space-y-1">
                        <p class="font-bold text-rose-100">Pencarian Tidak Ditemukan</p>
                        <p class="text-xs text-rose-200/90 leading-relaxed">{{ session('error') }}</p>
                    </div>
                </div>
            @endif

<form action="{{ route('tracking.search') }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-sky-400">
                            <i class="fa-solid fa-barcode text-sm"></i>
                        </div>
                        <input type="text" 
                               name="invoice_number" 
                               id="invoiceInputPage" 
                               value="{{ old('invoice_number') }}" 
                               placeholder="Contoh: KTR-202609-001 atau 081234567890" 
                               required 
                               autofocus
                               class="w-full pl-11 pr-4 py-3.5 min-h-[50px] rounded-2xl bg-[#060e1d] text-white placeholder-slate-500 text-sm font-medium border border-sky-800/80 focus:outline-none focus:border-sky-400 focus:ring-2 focus:ring-sky-400/30 transition-all">
                    </div>
                    <button type="submit" class="px-7 py-3.5 min-h-[50px] rounded-2xl bg-sky-600 hover:bg-sky-500 text-white font-extrabold text-sm transition-all flex items-center justify-center gap-2 shadow-lg shadow-sky-600/30 shrink-0 interactive-btn">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                        <span>Lacak Sekarang</span>
                    </button>
                </div>

<div class="pt-2 flex flex-wrap items-center gap-2 text-xs">
                    <span class="text-slate-400 font-medium">Coba Nota Demo:</span>
                    <button type="button" onclick="fillInvoice('KTR-202609-001')" class="px-2.5 py-1 rounded-lg bg-sky-950/80 hover:bg-sky-900 text-sky-300 border border-sky-800/60 font-mono text-[11px] font-bold transition-colors">
                        KTR-202609-001 (Selesai)
                    </button>
                    <button type="button" onclick="fillInvoice('KTR-202609-002')" class="px-2.5 py-1 rounded-lg bg-sky-950/80 hover:bg-sky-900 text-sky-300 border border-sky-800/60 font-mono text-[11px] font-bold transition-colors">
                        KTR-202609-002 (Proses)
                    </button>
                    <button type="button" onclick="fillInvoice('081234567890')" class="px-2.5 py-1 rounded-lg bg-emerald-950/80 hover:bg-emerald-900 text-emerald-300 border border-emerald-800/60 font-mono text-[11px] font-bold transition-colors">
                        081234567890 (No. WA)
                    </button>
                </div>
            </form>

            <div class="pt-2 border-t border-sky-900/60 grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs text-slate-400">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Status Tiap Fase Transparan</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Informasi Slot Rak Fisik</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-circle-check text-emerald-400 text-xs"></i>
                    <span>Tanpa Perlu Login / Akun</span>
                </div>
            </div>

        </div>
    </section>

<section class="site-container space-y-8">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Tahapan Pengerjaan</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Alur Produksi yang Anda Pantau</h2>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Setiap pakaian yang masuk dipindai secara digital pada setiap pergantian pos kerja operasional.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-sky-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-sm flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    01
                </div>
                <h3 class="font-extrabold text-xs text-slate-900">Nota Masuk</h3>
                <p class="text-[11px] text-slate-500 leading-tight">Ditimbang & disortir sesuai jenis bahan</p>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-sky-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-sm flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    02
                </div>
                <h3 class="font-extrabold text-xs text-slate-900">Pencucian</h3>
                <p class="text-[11px] text-slate-500 leading-tight">1 drum mesin khusus 1 pelanggan</p>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-sky-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-orange-50 text-orange-600 font-black text-sm flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    03
                </div>
                <h3 class="font-extrabold text-xs text-slate-900">Pengeringan Gas</h3>
                <p class="text-[11px] text-slate-500 leading-tight">100% tuntas bebas bau apek</p>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-sky-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-sky-50 text-sky-600 font-black text-sm flex items-center justify-center group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    04
                </div>
                <h3 class="font-extrabold text-xs text-slate-900">Setrika Uap</h3>
                <p class="text-[11px] text-slate-500 leading-tight">Boiler uap rapi, serat kain aman</p>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-sky-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-purple-50 text-purple-600 font-black text-sm flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    05
                </div>
                <h3 class="font-extrabold text-xs text-slate-900">Pengemasan</h3>
                <p class="text-[11px] text-slate-500 leading-tight">Plastik rapat & parfum pilihan</p>
            </div>

<div class="bg-white rounded-2xl border border-slate-200/90 p-4 text-center space-y-2 shadow-xs hover:border-emerald-400 transition-colors group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-emerald-50 text-emerald-600 font-black text-sm flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    06
                </div>
                <h3 class="font-extrabold text-xs text-emerald-700">Slot Rak Fisik</h3>
                <p class="text-[11px] text-slate-500 leading-tight">Siap diambil di gerai Dinoyo</p>
            </div>
        </div>
    </section>

<section class="site-container space-y-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 items-start">
            
<div class="bg-gradient-to-br from-sky-950 to-[#0b1d3a] text-white rounded-3xl p-6 sm:p-7 space-y-4 border border-sky-800/80 shadow-xl">
                <div class="w-11 h-11 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl border border-emerald-500/30">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="space-y-1.5">
                    <h3 class="text-lg font-black text-white">Struk Hilang atau Lupa Nomor?</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Tidak perlu khawatir. Tim kasir kami siap membantu mencarikan nota cucian Anda berdasarkan nama pelanggan atau nomor HP yang terdaftar.
                    </p>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20struk%20saya%20hilang/lupa%20nomor%20nota.%20Boleh%20bantu%20cek%20status%20cucian%20saya?" target="_blank" class="w-full py-3 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs flex items-center justify-center gap-2 shadow-md shadow-emerald-500/25 transition-all">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Tanya Kasir via WhatsApp</span>
                </a>
            </div>

<div class="lg:col-span-2 bg-white rounded-3xl border border-slate-200/90 p-6 sm:p-8 space-y-5 shadow-xs">
                <div class="flex items-center gap-2.5 pb-3 border-b border-slate-100">
                    <i class="fa-solid fa-circle-question text-sky-600 text-lg"></i>
                    <h3 class="text-base sm:text-lg font-black text-slate-900">Seputar Pelacakan Nota Katara</h3>
                </div>

                <div class="space-y-3.5 text-xs">
                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Format nomor nota apa yang harus saya masukkan?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4">
                            Masukkan format lengkap nomor nota seperti tercetak di struk (contoh: <strong class="font-mono text-slate-800">KTR-202609-001</strong>). Anda juga bisa langsung memasukkan nomor WhatsApp yang digunakan saat order.
                        </p>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Kapan status pakaian dinyatakan siap diambil?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4">
                            Pakaian siap diambil setelah status berubah menjadi <strong class="text-emerald-700">"Siap Diambil"</strong> dan nomor slot rak fisik (misalnya: Rak A-03) telah terbit di sistem. Anda juga akan otomatis menerima pesan WhatsApp konfirmasi.
                        </p>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/70 space-y-1">
                        <h4 class="font-bold text-slate-900 flex items-center gap-2">
                            <i class="fa-solid fa-angle-right text-sky-600 text-[10px]"></i>
                            Apakah pelacakan ini diperbarui secara otomatis?
                        </h4>
                        <p class="text-slate-600 leading-relaxed pl-4">
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
