<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Katara Laundry Dinoyo Malang - Layanan laundry kiloan & satuan modern, higienis 1 mesin 1 pelanggan, gas dryer 100% tuntas bebas apek, setrika uap boiler, 5 pilihan aroma parfum, dan pelacakan status cucian real-time.')">

    <title>@yield('title', 'Katara Laundry Dinoyo Malang - Bersih, Higienis & Lacak Real-Time')</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.katara.jpg') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS Play CDN + FontAwesome Icons -->
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
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        navy: {
                            800: '#0f2748',
                            900: '#091e3a',
                            950: '#061325',
                        }
                    },
                    boxShadow: {
                        'premium': '0 4px 20px -2px rgba(15, 23, 42, 0.06), 0 2px 6px -1px rgba(15, 23, 42, 0.04)',
                        'premium-hover': '0 16px 32px -4px rgba(15, 23, 42, 0.1), 0 6px 12px -2px rgba(15, 23, 42, 0.05)',
                        'glow-sky': '0 0 25px -5px rgba(12, 143, 232, 0.35)',
                        'glow-emerald': '0 0 25px -5px rgba(16, 185, 129, 0.4)',
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --container-max: 1280px;
            --ease-out-expo: cubic-bezier(0.16, 1, 0.3, 1);
            --ease-soft: cubic-bezier(0.25, 1, 0.5, 1);
        }

        html, body {
            max-width: 100%;
            overflow-x: clip;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FFFFFF;
            color: #0F172A;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .site-container {
            width: min(100% - 2rem, var(--container-max));
            margin-inline: auto;
        }

        .site-container-narrow {
            width: min(100% - 2rem, 980px);
            margin-inline: auto;
        }

        .heading-hero {
            font-size: clamp(2rem, 3.4vw + 0.5rem, 3.4rem);
            line-height: 1.15;
            letter-spacing: -0.03em;
        }

        .heading-section {
            font-size: clamp(1.65rem, 2.8vw + 0.25rem, 2.5rem);
            line-height: 1.2;
            letter-spacing: -0.025em;
        }

        .body-lead {
            font-size: clamp(0.925rem, 1.2vw, 1.075rem);
            line-height: 1.65;
        }

        section[id] {
            scroll-margin-top: clamp(4.5rem, 7vw, 6rem);
        }

        /* Sembunyikan Batang Scrollbar di Sisi Kanan Layar (Scroll Halaman Tetap Aktif & Lancar) */
        html, body {
            scrollbar-width: none !important; /* Firefox */
            -ms-overflow-style: none !important; /* IE dan Edge Legacy */
        }
        ::-webkit-scrollbar,
        *::-webkit-scrollbar {
            display: none !important; /* Chrome, Safari, Edge, Opera */
            width: 0 !important;
            height: 0 !important;
        }

        /* Glass Surface Effects */
        .glass-dark {
            background: rgba(9, 30, 58, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.9);
        }

        /* Interactive Card Animations */
        .interactive-card {
            transition: transform 380ms var(--ease-soft), box-shadow 380ms var(--ease-soft), border-color 300ms ease;
        }
        .interactive-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px -6px rgba(15, 23, 42, 0.08), 0 6px 12px -3px rgba(15, 23, 42, 0.04);
            border-color: rgba(56, 189, 248, 0.5);
        }

        .interactive-btn {
            transition: transform 250ms var(--ease-soft), box-shadow 250ms var(--ease-soft), background-color 200ms ease, color 200ms ease;
        }
        .interactive-btn:hover {
            transform: translateY(-1.5px);
        }
        .interactive-btn:active {
            transform: translateY(0.5px);
        }

        /* Instant Stable View without Up/Down Scroll Shifts */
        .reveal,
        .reveal-left,
        .reveal-right,
        .reveal-up,
        .reveal-scale {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }

        /* Focus rings for Accessibility */
        :focus-visible {
            outline: 2px solid #0c8fe8;
            outline-offset: 2px;
        }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.001ms !important;
            }
            .reveal, .reveal-left, .reveal-right, .reveal-up, .reveal-scale {
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>

    @stack('styles')
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col bg-white relative selection:bg-sky-500 selection:text-white">

    <!-- Scroll Progress Indicator Bar (Efek Scroll Biru di Paling Atas Halaman) -->
    <div id="scrollProgressBar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-sky-500 via-sky-400 to-cyan-400 z-50 transition-all duration-150 ease-out shadow-xs shadow-sky-400/50" style="width: 0%;"></div>

    <!-- Top Announcement & Status Bar -->
    <div class="bg-[#061325] text-slate-300 text-xs py-2 px-4 sm:px-6 lg:px-8 border-b border-sky-950/80 relative z-40">
        <div class="site-container flex flex-col md:flex-row items-center justify-between gap-2 md:gap-4 text-center md:text-left">
            <div class="flex items-center gap-2.5 sm:gap-3 flex-wrap justify-center md:justify-start">
                <span id="storeStatusBadge" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/90 text-emerald-300 font-bold text-[11px] border border-emerald-500/40 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span id="storeStatusText">Gerai Buka &bull; 07.00 - 21.00 WIB</span>
                </span>
                <span class="hidden md:inline text-sky-900">&bull;</span>
                <a href="https://maps.google.com/?q=Dinoyo+Malang" target="_blank" class="text-[11px] sm:text-xs text-slate-300 hover:text-sky-300 flex items-center gap-1.5 font-medium transition-colors">
                    <i class="fa-solid fa-location-dot text-rose-400 text-xs"></i>
                    <span>Jl. MT Haryono, Dinoyo Malang (Dekat UB, UM, Polinema & UIN)</span>
                </a>
                <span class="hidden xl:inline text-sky-900">&bull;</span>
                <span class="hidden xl:inline-flex items-center gap-1.5 text-[11px] text-amber-300 font-semibold bg-amber-950/40 px-2 py-0.5 rounded border border-amber-800/40">
                    <i class="fa-solid fa-bolt text-amber-400 text-xs"></i>
                    <span>Express 6 Jam Siap</span>
                </span>
            </div>

            <div class="flex items-center gap-3 sm:gap-4 text-[11px] sm:text-xs shrink-0">
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20tanya%20layanan%20laundry%20antar-jemput" target="_blank" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5 font-semibold text-slate-200">
                    <i class="fa-brands fa-whatsapp text-emerald-400 text-sm"></i>
                    <span>Hotline: 0812-3456-7890</span>
                </a>
                <span class="text-sky-900">|</span>
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:text-sky-300 transition-colors flex items-center gap-1.5 text-sky-400 font-semibold">
                        <i class="fa-solid fa-gauge-high text-xs"></i>
                        <span>Dasbor</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="hover:text-sky-300 transition-colors flex items-center gap-1.5 text-slate-400 hover:text-white font-medium" title="Login Khusus Staf Gerai">
                        <i class="fa-solid fa-lock text-[10px]"></i>
                        <span>Portal Staf</span>
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Main Header Navbar -->
    <header class="bg-[#091e3a]/95 backdrop-blur-md border-b border-sky-950/80 sticky top-0 z-40 transition-all shadow-lg shadow-black/15">
        <div class="site-container h-18 sm:h-20 flex items-center justify-between gap-2 lg:gap-4 xl:gap-6 flex-nowrap">
            
            <!-- Brand Logo & Motto -->
            <a href="{{ route('home') }}" class="flex items-center group shrink-0" aria-label="Beranda Katara Laundry">
                <div class="leading-tight">
                    <div class="flex items-center gap-1 text-lg sm:text-xl font-black tracking-tight text-white group-hover:text-sky-300 transition-colors">
                        <span>KATARA</span>
                        <span class="text-sky-400">LAUNDRY</span>
                    </div>
                    <p class="text-[10px] sm:text-[11px] text-slate-400 font-semibold flex items-center gap-1.5 whitespace-nowrap mt-0.5">
                        <span class="text-slate-300">Dinoyo Malang</span>
                        <span class="text-sky-400/80">&bull;</span>
                        <span class="text-sky-400 font-bold">1 Mesin 1 Pelanggan</span>
                    </p>
                </div>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav id="desktopNav" class="hidden lg:flex items-center justify-center gap-0.5 xl:gap-1 text-xs xl:text-sm font-semibold text-slate-300 shrink-0">
                <a href="{{ route('home') }}" class="nav-link h-8 inline-flex items-center justify-center px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all whitespace-nowrap leading-none {{ request()->routeIs('home') ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" data-section="hero">
                    <span class="leading-none">Beranda</span>
                </a>
                <a href="{{ route('public.layanan') }}" class="nav-link h-8 inline-flex items-center justify-center px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all whitespace-nowrap leading-none {{ request()->routeIs('public.layanan') ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" data-section="layanan">
                    <span class="leading-none">Layanan &amp; Tarif</span>
                </a>
                <a href="{{ route('public.kalkulator') }}" class="nav-link h-8 inline-flex items-center justify-center px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all whitespace-nowrap leading-none {{ request()->routeIs('public.kalkulator') ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" data-section="kalkulator">
                    <span class="leading-none">Estimasi Biaya</span>
                </a>
                <a href="{{ route('public.keunggulan') }}" class="nav-link h-8 inline-flex items-center justify-center px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all whitespace-nowrap leading-none {{ request()->routeIs('public.keunggulan') ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" data-section="keunggulan">
                    <span class="leading-none">Keunggulan</span>
                </a>
                <a href="{{ route('public.galeri') }}" class="nav-link h-8 inline-flex items-center justify-center px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all whitespace-nowrap leading-none {{ request()->routeIs('public.galeri') ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" data-section="galeri">
                    <span class="leading-none">Galeri Gerai</span>
                </a>

                <!-- Desktop Dropdown 'Lainnya' -->
                <div class="relative" id="moreDropdownContainer">
                    <button type="button" id="moreDropdownBtn" class="nav-link h-8 inline-flex items-center justify-center gap-1.5 px-2.5 xl:px-3 rounded-lg hover:text-white hover:bg-sky-900/60 transition-all font-semibold text-slate-300 whitespace-nowrap leading-none {{ request()->routeIs(['public.cara_pesan', 'public.parfum', 'public.faq', 'public.lokasi']) ? 'text-white bg-sky-900/80 font-bold ring-1 ring-sky-700/60' : '' }}" aria-expanded="false" aria-haspopup="true">
                        <span class="leading-none">Lainnya</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-sky-400 transition-transform duration-200 shrink-0 leading-none" id="moreDropdownIcon"></i>
                    </button>
                    <div id="moreDropdownMenu" class="hidden absolute top-full right-0 pt-2 w-60 z-50">
                        <div class="bg-[#08172c] rounded-2xl shadow-2xl border border-sky-800/80 py-2 divide-y divide-sky-950/60 overflow-hidden">
                            <div class="py-1">
                                <a href="{{ route('public.cara_pesan') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/70 hover:text-white transition-colors {{ request()->routeIs('public.cara_pesan') ? 'bg-sky-900/60 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-list-check text-sky-400 w-4 text-center"></i>
                                    <div>
                                        <span class="block">Cara Pesan</span>
                                        <span class="text-[10px] text-slate-400 font-normal">5 alur pencucian di gerai</span>
                                    </div>
                                </a>
                                <a href="{{ route('public.parfum') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/70 hover:text-white transition-colors {{ request()->routeIs('public.parfum') ? 'bg-sky-900/60 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-spray-can text-purple-400 w-4 text-center"></i>
                                    <div>
                                        <span class="block">Varian Parfum</span>
                                        <span class="text-[10px] text-slate-400 font-normal">5 aroma tahan 14 hari</span>
                                    </div>
                                </a>
                                <a href="{{ route('public.faq') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/70 hover:text-white transition-colors {{ request()->routeIs(['public.faq']) ? 'bg-sky-900/60 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-circle-question text-amber-400 w-4 text-center"></i>
                                    <div>
                                        <span class="block">Tanya Jawab (FAQ)</span>
                                        <span class="text-[10px] text-slate-400 font-normal">Pertanyaan umum seputar laundry</span>
                                    </div>
                                </a>
                                <a href="{{ route('public.lokasi') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/70 hover:text-white transition-colors {{ request()->routeIs('public.lokasi') ? 'bg-sky-900/60 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-map-location-dot text-rose-400 w-4 text-center"></i>
                                    <div>
                                        <span class="block">Lokasi &amp; Jam Buka</span>
                                        <span class="text-[10px] text-slate-400 font-normal">Rute Google Maps Dinoyo</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Desktop Action Buttons (Sejajar Sempurna & Ramping) -->
            <div class="hidden sm:flex items-center gap-1.5 xl:gap-2 shrink-0">
                <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" id="headerLacakBtn" class="nav-lacak-link inline-flex items-center justify-center gap-1.5 h-8 px-3.5 rounded-lg text-xs font-bold leading-none transition-all shrink-0 whitespace-nowrap shadow-xs active:scale-[0.99] {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'bg-sky-600 hover:bg-sky-500 text-white shadow-xs border border-sky-400/50' : 'bg-sky-950 text-sky-200 border border-sky-700/70 hover:bg-sky-900 hover:text-white' }}">
                    <i class="fa-solid fa-magnifying-glass text-sky-400 text-[11px] shrink-0 leading-none"></i>
                    <span class="leading-none">Lacak Nota</span>
                </a>

                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center gap-1.5 h-8 px-3 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold leading-none transition-all shadow-xs border border-sky-500 active:scale-[0.99] shrink-0 whitespace-nowrap" title="Buka Dasbor Staf">
                        <i class="fa-solid fa-gauge-high text-[11px] shrink-0 leading-none"></i>
                        <span class="leading-none">Dasbor</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-1.5 h-8 px-3 rounded-lg bg-slate-900 hover:bg-slate-800 text-white border border-slate-700 text-xs font-bold leading-none transition-all shadow-xs active:scale-[0.99] shrink-0 whitespace-nowrap" title="Masuk Akun Staf Gerai">
                        <i class="fa-solid fa-lock text-slate-300 text-[10px] shrink-0 leading-none"></i>
                        <span class="leading-none">Staf</span>
                    </a>
                @endauth
            </div>

            <!-- Mobile Controls (Hamburger) -->
            <div class="flex items-center lg:hidden shrink-0">
                <button type="button" id="mobileMenuBtn" class="w-8.5 h-8.5 min-w-[34px] min-h-[34px] rounded-lg bg-[#08172c] text-slate-200 border border-sky-800 hover:bg-sky-900 hover:text-white focus:outline-none flex items-center justify-center interactive-btn shrink-0" aria-label="Buka Menu Navigasi" aria-expanded="false">
                    <i class="fa-solid fa-bars text-sm text-slate-200" id="mobileMenuIcon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer (Smooth & Accessible) -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-sky-950 bg-[#071529] text-white px-4 py-5 space-y-4 shadow-2xl">
            <div class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-1">
                Navigasi Utama
            </div>
            <nav class="grid grid-cols-2 gap-2 text-xs font-semibold text-slate-300">
                <a href="{{ route('home') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('home') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-house text-sky-400 text-sm"></i> Beranda
                </a>
                <a href="{{ route('public.layanan') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.layanan') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-tags text-sky-400 text-sm"></i> Layanan & Tarif
                </a>
                <a href="{{ route('public.kalkulator') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.kalkulator') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-calculator text-amber-400 text-sm"></i> Estimasi Biaya
                </a>
                <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-magnifying-glass text-sky-400 text-sm"></i> Lacak Nota
                </a>
                <a href="{{ route('public.keunggulan') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.keunggulan') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-award text-sky-400 text-sm"></i> Keunggulan SOP
                </a>
                <a href="{{ route('public.galeri') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.galeri') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-camera text-sky-400 text-sm"></i> Galeri Gerai
                </a>
                <a href="{{ route('public.cara_pesan') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.cara_pesan') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-list-check text-sky-400 text-sm"></i> Cara Pesan
                </a>
                <a href="{{ route('public.parfum') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.parfum') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-spray-can text-purple-400 text-sm"></i> Varian Parfum
                </a>
                <a href="{{ route('public.faq') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.faq') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-circle-question text-amber-400 text-sm"></i> Tanya Jawab
                </a>
                <a href="{{ route('public.lokasi') }}" class="p-3 rounded-xl bg-[#0b1d38] hover:bg-sky-900 hover:text-sky-300 transition-colors flex items-center gap-2.5 border border-sky-900/60 {{ request()->routeIs('public.lokasi') ? 'border-sky-400 text-white font-bold bg-sky-950' : '' }}">
                    <i class="fa-solid fa-map-location-dot text-rose-400 text-sm"></i> Lokasi Gerai
                </a>
            </nav>

            <div class="pt-3 border-t border-sky-950 flex flex-col gap-2">
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20pesan%20laundry%20antar-jemput" target="_blank" class="w-full h-9 px-3.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-xs border border-emerald-500/40 transition-all active:scale-[0.99]">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Pesan Laundry via WhatsApp</span>
                </a>
                @auth
                    <a href="{{ route('dashboard') }}" class="w-full h-9 px-3.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs text-center flex items-center justify-center gap-2 border border-sky-500/60 shadow-xs active:scale-[0.99]">
                        <i class="fa-solid fa-gauge-high text-xs"></i>
                        <span>Buka Dasbor Staf Operasional</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="w-full h-9 px-3.5 rounded-lg bg-slate-900 hover:bg-slate-800 text-white border border-slate-700 font-bold text-xs text-center flex items-center justify-center gap-2 shadow-xs active:scale-[0.99]">
                        <i class="fa-solid fa-lock text-slate-300 text-[11px]"></i>
                        <span>Masuk Staf Gerai</span>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 pb-16 sm:pb-0">
        @yield('content')
    </main>

    <!-- Floating Trigger Controls (Back to Top) -->
    <div class="fixed bottom-20 sm:bottom-6 right-4 sm:right-6 z-40 flex flex-col items-end gap-2.5 pointer-events-none">
        <button id="backToTopBtn" type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="pointer-events-auto w-9.5 h-9.5 rounded-full bg-white text-slate-700 hover:text-sky-600 hover:bg-sky-50 shadow-lg border border-slate-200 flex items-center justify-center transition-all duration-300 opacity-0 translate-y-4 hover:shadow-sky-500/20 group cursor-pointer" title="Kembali ke atas" aria-label="Kembali ke atas">
            <i class="fa-solid fa-arrow-up text-xs group-hover:-translate-y-0.5 transition-transform"></i>
        </button>
    </div>

    <!-- Global Professional Footer -->
    <footer class="bg-white text-slate-600 pt-12 sm:pt-16 lg:pt-20 pb-14 border-t border-slate-200 text-sm mt-12 sm:mt-16 lg:mt-20">
        <div class="site-container space-y-12">
            
            <!-- 4 Column Main Footer Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Col 1: Brand & Identity -->
                <div class="space-y-4">
                    <div class="flex items-center gap-2.5 text-slate-900 font-extrabold text-lg">
                        <img src="{{ asset('images/logo.katara.jpg') }}" alt="Katara Laundry Logo" class="w-9 h-9 rounded-none object-cover border border-slate-200 shadow-xs">
                        <span class="tracking-tight font-black">KATARA LAUNDRY</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">
                        Layanan laundry kiloan & satuan modern di Dinoyo, Lowokwaru, Malang. Menerapkan SOP ketat 1 mesin 1 pelanggan, pengering gas dryer anti-apek, setrika uap presisi, serta rak fisik 45 slot terintegrasi pelacakan nota online.
                    </p>
                    <div class="flex items-center gap-2.5 text-slate-500 text-sm pt-1">
                        <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:bg-sky-600 hover:text-white hover:border-sky-600 flex items-center justify-center transition-all shadow-xs" title="Instagram Katara Laundry">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:bg-sky-600 hover:text-white hover:border-sky-600 flex items-center justify-center transition-all shadow-xs" title="TikTok Katara Laundry">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-9 h-9 rounded-xl bg-white border border-slate-200 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 flex items-center justify-center transition-all shadow-xs" title="WhatsApp Customer Service">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Fast Navigation -->
                <div class="space-y-3">
                    <h4 class="text-slate-900 font-bold text-xs uppercase tracking-wider">Layanan & Fasilitas</h4>
                    <ul class="text-xs space-y-2.5 text-slate-500 font-medium">
                        <li>
                            <a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-sky-500"></i>
                                <span>Cuci Kering Setrika Reguler</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-sky-500"></i>
                                <span>Cuci Kilat 24 Jam & Express 6 Jam</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-sky-500"></i>
                                <span>Bedcover, Sepatu & Satuan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('public.kalkulator') }}" class="hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-amber-500"></i>
                                <span>Simulator Estimasi Biaya</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-emerald-500"></i>
                                <span>Cek Status Nota Real-Time</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('public.faq') }}" class="hover:text-sky-600 transition-colors flex items-center gap-2">
                                <i class="fa-solid fa-angle-right text-[10px] text-sky-500"></i>
                                <span>Tanya Jawab & Garansi Cuci</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Operating Hours -->
                <div class="space-y-3">
                    <h4 class="text-slate-900 font-bold text-xs uppercase tracking-wider">Jam Buka Gerai</h4>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200 text-xs space-y-2.5 shadow-xs">
                        <div class="flex justify-between items-center text-slate-600">
                            <span>Senin &ndash; Sabtu:</span>
                            <strong class="text-slate-900 font-mono">07.00 - 21.00 WIB</strong>
                        </div>
                        <div class="flex justify-between items-center text-slate-600">
                            <span>Minggu / Libur:</span>
                            <strong class="text-slate-900 font-mono">08.00 - 20.00 WIB</strong>
                        </div>
                        <div class="pt-2 border-t border-slate-100 text-[11px] text-emerald-600 flex items-center gap-1.5 font-semibold">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Buka setiap hari &bull; Siap melayani Anda</span>
                        </div>
                    </div>
                    <div class="text-[11px] text-slate-500 flex items-center gap-2">
                        <i class="fa-solid fa-bolt text-amber-500"></i>
                        <span>Layanan Express 6 Jam siap setiap hari</span>
                    </div>
                </div>

                <!-- Col 4: Store Location & Contact -->
                <div class="space-y-3">
                    <h4 class="text-slate-900 font-bold text-xs uppercase tracking-wider">Lokasi Dinoyo Malang</h4>
                    <p class="text-xs text-slate-500 leading-relaxed font-normal">
                        <i class="fa-solid fa-location-dot text-rose-500 mr-1.5"></i>
                        Jl. MT. Haryono / Dinoyo, Kec. Lowokwaru, Kota Malang (Sangat dekat gerbang UB, UM, Polinema & UIN).
                    </p>
                    <div class="text-xs space-y-1.5 text-slate-500">
                        <p><i class="fa-brands fa-whatsapp text-emerald-500 mr-1.5"></i> WhatsApp: <strong class="text-slate-800 font-semibold">0812-3456-7890</strong></p>
                        <p><i class="fa-regular fa-envelope text-sky-500 mr-1.5"></i> Email: info@kataralaundry.com</p>
                    </div>
                    <a href="https://maps.google.com/?q=Dinoyo+Malang" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-sky-50 hover:bg-sky-100 text-sky-700 text-xs font-bold transition-colors border border-sky-200 shadow-xs">
                        <i class="fa-solid fa-diamond-turn-right text-sky-600"></i>
                        <span>Buka Rute Google Maps</span>
                    </a>
                </div>
            </div>

            <!-- 4 Hygiene & Trust Highlights -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-6 border-y border-slate-200 text-center text-xs">
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-shield-halved text-emerald-500 text-xl"></i>
                    <p class="font-bold text-slate-900">1 Mesin 1 Pelanggan</p>
                    <p class="text-[11px] text-slate-500">Higienis & tidak dicampur</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-fire text-orange-500 text-xl"></i>
                    <p class="font-bold text-slate-900">Gas Dryer 100% Kering</p>
                    <p class="text-[11px] text-slate-500">Bebas bau apek di segala cuaca</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-rotate-left text-sky-500 text-xl"></i>
                    <p class="font-bold text-slate-900">Garansi Cuci Bersih</p>
                    <p class="text-[11px] text-slate-500">Cuci ulang gratis jika kurang rapi</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-cubes-stacked text-purple-500 text-xl"></i>
                    <p class="font-bold text-slate-900">45 Slot Rak Fisik</p>
                    <p class="text-[11px] text-slate-500">Pakaian aman & terdata barcode</p>
                </div>
            </div>

            <!-- Bottom Copyright & System Info -->
            <div class="flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-3">
                <p>&copy; {{ date('Y') }} Katara Laundry Malang. Seluruh hak cipta dilindungi.</p>
                <p class="text-slate-400">Sistem Manajemen Laundry & Pelacakan Mandiri Gerai Dinoyo.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Quick-Action Bar (Fixed Bottom on screens < 640px) -->
    <aside aria-label="Aksi Cepat Mobile" class="sm:hidden fixed bottom-0 left-0 right-0 z-40 bg-[#071529]/95 backdrop-blur-md border-t border-sky-950 p-2.5 shadow-2xl">
        <div class="flex items-center gap-2">
            <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link flex-1 py-2.5 min-h-[44px] rounded-xl bg-sky-950 text-sky-200 border border-sky-700/70 font-bold text-xs flex items-center justify-center gap-2 shadow-xs transition-colors {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'border-sky-400 text-white font-black bg-sky-900' : '' }}">
                <i class="fa-solid fa-magnifying-glass text-sky-400 text-xs"></i>
                <span>Lacak Nota</span>
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20order%20laundry%20antar-jemput" target="_blank" class="flex-1 py-2.5 min-h-[44px] rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs flex items-center justify-center gap-2 shadow-sm transition-colors border border-emerald-400/50">
                <i class="fa-brands fa-whatsapp text-sm text-slate-950"></i>
                <span>Order via WA</span>
            </a>
        </div>
    </aside>

    <!-- Global Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dynamic Store Open/Close Indicator
            function updateStoreStatus() {
                const now = new Date();
                const currentHour = now.getHours();
                const currentDay = now.getDay(); // 0 = Sunday
                const isSunday = currentDay === 0;

                const openHour = isSunday ? 8 : 7;
                const closeHour = isSunday ? 20 : 21;

                const badge = document.getElementById('storeStatusBadge');
                if (badge) {
                    if (currentHour >= openHour && currentHour < closeHour) {
                        badge.className = 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/90 text-emerald-300 font-bold text-[11px] border border-emerald-500/40 shadow-xs';
                        badge.innerHTML = `<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span><span id="storeStatusText">Gerai Buka &bull; ${openHour}.00 - ${closeHour}.00 WIB</span>`;
                    } else {
                        badge.className = 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-rose-950/90 text-rose-300 font-bold text-[11px] border border-rose-500/40 shadow-xs';
                        badge.innerHTML = `<span class="w-2 h-2 rounded-full bg-rose-400"></span><span id="storeStatusText">Gerai Tutup &bull; Buka Besok Pukul 0${openHour}.00 WIB</span>`;
                    }
                }
            }
            updateStoreStatus();

            // Mobile Navigation Toggle
            const menuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('mobileMenuIcon');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isHidden = mobileMenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        menuIcon.classList.remove('fa-bars');
                        menuIcon.classList.add('fa-xmark');
                        menuBtn.setAttribute('aria-expanded', 'true');
                    } else {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('fa-xmark');
                        menuIcon.classList.add('fa-bars');
                        menuBtn.setAttribute('aria-expanded', 'false');
                    }
                });

                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        if (menuIcon) {
                            menuIcon.classList.remove('fa-xmark');
                            menuIcon.classList.add('fa-bars');
                        }
                        if (menuBtn) menuBtn.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            // Desktop 'Lainnya' Dropdown
            const moreDropdownBtn = document.getElementById('moreDropdownBtn');
            const moreDropdownMenu = document.getElementById('moreDropdownMenu');
            const moreDropdownIcon = document.getElementById('moreDropdownIcon');
            const moreDropdownContainer = document.getElementById('moreDropdownContainer');

            if (moreDropdownBtn && moreDropdownMenu) {
                moreDropdownBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isHidden = moreDropdownMenu.classList.contains('hidden');
                    if (isHidden) {
                        moreDropdownMenu.classList.remove('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.add('rotate-180');
                        moreDropdownBtn.setAttribute('aria-expanded', 'true');
                    } else {
                        moreDropdownMenu.classList.add('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.remove('rotate-180');
                        moreDropdownBtn.setAttribute('aria-expanded', 'false');
                    }
                });

                if (moreDropdownContainer) {
                    moreDropdownContainer.addEventListener('mouseenter', function() {
                        moreDropdownMenu.classList.remove('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.add('rotate-180');
                        moreDropdownBtn.setAttribute('aria-expanded', 'true');
                    });
                    moreDropdownContainer.addEventListener('mouseleave', function() {
                        moreDropdownMenu.classList.add('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.remove('rotate-180');
                        moreDropdownBtn.setAttribute('aria-expanded', 'false');
                    });
                }

                document.addEventListener('click', function(e) {
                    if (!moreDropdownMenu.contains(e.target) && !moreDropdownBtn.contains(e.target)) {
                        moreDropdownMenu.classList.add('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.remove('rotate-180');
                        moreDropdownBtn.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Direct Scroll for Track Nota Links
            document.querySelectorAll('.nav-lacak-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const lacakEl = document.getElementById('lacak');
                    if (lacakEl) {
                        e.preventDefault();
                        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                            if (menuIcon) {
                                menuIcon.classList.remove('fa-xmark');
                                menuIcon.classList.add('fa-bars');
                            }
                        }
                        lacakEl.scrollIntoView();
                        setTimeout(() => {
                            const input = document.getElementById('invoiceInput');
                            if (input) {
                                input.focus();
                                input.classList.add('ring-4', 'ring-sky-400/40', 'border-sky-500');
                                setTimeout(() => input.classList.remove('ring-4', 'ring-sky-400/40', 'border-sky-500'), 2500);
                            }
                        }, 100);
                    }
                });
            });

            if (window.location.hash === '#lacak') {
                setTimeout(() => {
                    const lacakEl = document.getElementById('lacak');
                    if (lacakEl) {
                        lacakEl.scrollIntoView();
                        const input = document.getElementById('invoiceInput');
                        if (input) {
                            input.focus();
                            input.classList.add('ring-4', 'ring-sky-400/40', 'border-sky-500');
                            setTimeout(() => input.classList.remove('ring-4', 'ring-sky-400/40', 'border-sky-500'), 2500);
                        }
                    }
                }, 100);
            }

            // Scroll Progress Indicator Bar & Back to Top Button
            const progressBar = document.getElementById('scrollProgressBar');
            const backToTopBtn = document.getElementById('backToTopBtn');

            window.addEventListener('scroll', function() {
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                if (progressBar) {
                    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
                    progressBar.style.width = scrollPercent + '%';
                }

                if (backToTopBtn) {
                    if (scrollTop > 300) {
                        backToTopBtn.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                        backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                    } else {
                        backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                        backToTopBtn.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                    }
                }
            }, { passive: true });
        });
    </script>

    @stack('scripts')
</body>
</html>
