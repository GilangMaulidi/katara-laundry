<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dasbor Operasional') - {{ config('app.name', 'Katara Laundry') }}</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f7ff',
                            100: '#e0effe',
                            200: '#bae0fd',
                            300: '#7cc7fb',
                            400: '#36abf7',
                            500: '#0c8fe8',
                            600: '#0170c5',
                            700: '#02599f',
                            800: '#064b83',
                            900: '#0b3f6d',
                            950: '#072848',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FFFFFF;
        }
::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #FFFFFF;
        }
        ::-webkit-scrollbar-thumb {
            background: #E2E8F0;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #CBD5E1;
        }
    </style>

    @stack('styles')
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col bg-white">

    <div class="flex flex-1 min-h-screen">
<aside class="w-64 bg-white text-slate-800 flex flex-col shrink-0 border-r border-slate-200 z-30 shadow-sm">
<div class="p-5 border-b border-slate-200 flex items-center gap-3">
                <div class="overflow-hidden">
                    <h1 class="font-extrabold text-lg tracking-tight text-slate-800 leading-tight">KATARA LAUNDRY</h1>
                    <p class="text-xs text-brand-500 font-medium truncate flex items-center gap-1.5 mt-1">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Gerai Dinoyo Malang
                    </p>
                </div>
            </div>

<nav class="flex-1 p-3.5 space-y-1.5 overflow-y-auto text-sm">
<div class="px-3 pt-2 pb-1 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Operasional Kasir
                </div>

                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-gauge-high w-5 text-center text-base"></i>
                    <span>Dasbor Utama</span>
                </a>

                <a href="{{ route('pos.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('pos.index') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-cash-register w-5 text-center text-base text-amber-500"></i>
                    <span class="flex-1">Kasir POS Baru</span>
                    <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-amber-100 text-amber-600">F2</span>
                </a>

                <a href="{{ route('transactions.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('transactions.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-receipt w-5 text-center text-base"></i>
                    <span>Transaksi & Alur</span>
                </a>

                <a href="{{ route('racks.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('racks.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-cubes-stacked w-5 text-center text-base text-cyan-500"></i>
                    <span class="flex-1">Slot Rak Fisik (45)</span>
                    <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-cyan-100 text-cyan-600">A-C</span>
                </a>

                <a href="{{ route('customers.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('customers.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-address-book w-5 text-center text-base"></i>
                    <span>Buku Pelanggan</span>
                </a>

<div class="px-3 pt-4 pb-1 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Katalog & Bahan Baku
                </div>

                <a href="{{ route('services.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('services.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-tags w-5 text-center text-base"></i>
                    <span>Tarif & Parfum</span>
                </a>

                <a href="{{ route('inventory.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('inventory.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-boxes-packing w-5 text-center text-base"></i>
                    <span>Stok Bahan Baku</span>
                </a>

                <a href="{{ route('reports.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors {{ request()->routeIs('reports.*') ? 'bg-brand-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                    <i class="fa-solid fa-chart-line w-5 text-center text-base"></i>
                    <span>Laporan Keuangan</span>
                </a>

<div class="px-3 pt-4 pb-1 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                    Pelanggan
                </div>

                <a href="{{ route('tracking.index') }}" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg font-medium transition-colors text-slate-700 hover:bg-slate-100">
                    <i class="fa-solid fa-magnifying-glass-location w-5 text-center text-base text-emerald-500"></i>
                    <span class="flex-1">Lacak Mandiri</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs text-slate-400"></i>
                </a>
            </nav>

<div class="p-3.5 border-t border-slate-200 bg-slate-50">
                <div class="flex items-center justify-between gap-3">
                    <div class="flex items-center gap-2.5 overflow-hidden">
                        <div class="w-9 h-9 rounded-lg bg-brand-500 text-white font-bold flex items-center justify-center text-sm shrink-0">
                            {{ substr(Auth::user()->name ?? 'K', 0, 1) }}
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs font-bold text-slate-800 truncate">{{ Auth::user()->name ?? 'Staf Gerai' }}</p>
                            <p class="text-[11px] text-slate-500 uppercase tracking-wide truncate">
                                {{ Auth::user()->role ?? 'Kasir' }}
                            </p>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="shrink-0">
                        @csrf
                        <button type="submit" title="Keluar dari Sistem" class="p-2 text-slate-400 hover:text-rose-500 hover:bg-slate-200 rounded-lg transition-colors">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

<div class="flex-1 flex flex-col overflow-x-hidden">
<header class="h-16 bg-white border-b border-slate-200 px-6 flex items-center justify-between z-10 sticky top-0 shadow-sm">
                <div class="flex items-center gap-3">
                    <h2 class="text-lg font-bold text-slate-800">@yield('page_title', 'Dasbor')</h2>
                    <span class="text-slate-300">|</span>
                    <span class="text-xs text-slate-500 font-medium">Sistem Operasional Katara Laundry Dinoyo</span>
                </div>

<div class="flex items-center gap-4 text-xs font-medium text-slate-600">
                    <div class="hidden md:flex items-center gap-2 bg-slate-100 px-3 py-1.5 rounded-lg border border-slate-200">
                        <i class="fa-solid fa-print text-emerald-600"></i>
                        <span>Printer Thermal: <strong class="text-emerald-700 font-semibold">Siap (58/80mm)</strong></span>
                    </div>

                    <div class="hidden lg:flex items-center gap-2 bg-slate-100 px-3 py-1.5 rounded-lg border border-slate-200">
                        <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                        <span>Gateway WA: <strong class="text-emerald-700 font-semibold">Aktif</strong></span>
                    </div>

                    <div class="flex items-center gap-2 text-slate-700 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">
                        <i class="fa-regular fa-clock text-slate-400"></i>
                        <span id="live-clock" class="font-mono font-semibold">{{ now('Asia/Jakarta')->format('d M Y - H:i') }} WIB</span>
                    </div>
                </div>
            </header>

@if(session('success'))
                <div class="mx-6 mt-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-center justify-between gap-3 shadow-xs">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-lg"></i>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 p-1">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if(session('error'))
                <div class="mx-6 mt-4 p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-sm flex items-center justify-between gap-3 shadow-xs">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-exclamation text-rose-500 text-lg"></i>
                        <span class="font-medium">{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-rose-600 hover:text-rose-900 p-1">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if(session('info'))
                <div class="mx-6 mt-4 p-4 rounded-xl bg-blue-50 border border-blue-200 text-blue-800 text-sm flex items-center justify-between gap-3 shadow-xs">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-info text-blue-500 text-lg"></i>
                        <span class="font-medium">{{ session('info') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-blue-600 hover:text-blue-900 p-1">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

<main class="flex-1 p-6">
                @yield('content')
            </main>

<footer class="py-4 px-6 border-t border-slate-200 text-xs text-slate-500 flex flex-col md:flex-row items-center justify-between gap-2 bg-white">
                <p>&copy; {{ date('Y') }} <strong>Katara Laundry Malang</strong>. Sistem Operasional Gerai Dinoyo (Kapasitas: 5 Mesin Cuci, 4 Dryer, 45 Slot Rak).</p>
                <p class="font-mono text-slate-400">Versi Sistem: 1.0-ID | PHP 8.3 &bull; Laravel 13</p>
            </footer>
        </div>
    </div>

<script>
        function updateClock() {
            const now = new Date();
            const options = { 
                day: '2-digit', 
                month: 'short', 
                year: 'numeric', 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                timeZone: 'Asia/Jakarta'
            };
            const clockEl = document.getElementById('live-clock');
            if (clockEl) {
                clockEl.textContent = now.toLocaleDateString('id-ID', options) + ' WIB';
            }
        }
        setInterval(updateClock, 1000);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'F2') {
                e.preventDefault();
                window.location.href = "{{ route('pos.index') }}";
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
