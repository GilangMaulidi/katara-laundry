<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Katara Laundry Dinoyo Malang - Layanan laundry kiloan & satuan modern, higienis 1 mesin 1 pelanggan, gas dryer anti-apek, setrika uap boiler, 5 parfum pilihan, dan pelacakan status cucian real-time.">

    <title>@yield('title', 'Katara Laundry Malang - Bersih, Higienis & Lacak Real-Time')</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
        :root {
            --container-max: 1280px;
            --container-padding: clamp(1rem, 3vw, 2rem);
            --section-space: clamp(2rem, 3.5vw, 3.5rem);
            --space-xs: clamp(0.5rem, 1vw, 0.75rem);
            --space-sm: clamp(0.75rem, 1.5vw, 1rem);
            --space-md: clamp(1rem, 2vw, 1.5rem);
            --space-lg: clamp(1.5rem, 3vw, 2.25rem);
            --space-xl: clamp(2rem, 4vw, 3rem);
            --space-2xl: clamp(3rem, 6vw, 4.5rem);
            --radius-sm: 0.75rem;
            --radius-md: 1rem;
            --radius-lg: 1.5rem;
            --radius-xl: 2rem;
            --shadow-xs: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.07), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.18);
            --ease-modern: cubic-bezier(0.16, 1, 0.3, 1);
            --ease-soft: cubic-bezier(0.25, 1, 0.5, 1);
            --transition-fast: 280ms var(--ease-soft);
            --transition-normal: 450ms var(--ease-soft);
            --transition-reveal: 950ms var(--ease-modern);
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
        }

.site-container {
            width: min(100% - 2rem, var(--container-max));
            margin-inline: auto;
        }
        .site-container-narrow {
            width: min(100% - 2rem, 1024px);
            margin-inline: auto;
        }

.heading-hero {
            font-size: clamp(2rem, 3.2vw + 0.5rem, 3.25rem);
            line-height: 1.15;
            letter-spacing: -0.025em;
        }
        .heading-section {
            font-size: clamp(1.625rem, 3vw + 0.25rem, 2.5rem);
            line-height: 1.2;
            letter-spacing: -0.02em;
        }
        .heading-card {
            font-size: clamp(1.05rem, 1.5vw, 1.25rem);
            line-height: 1.35;
        }
        .body-lead {
            font-size: clamp(0.875rem, 1.2vw, 1.0625rem);
            line-height: 1.6;
        }

section[id] {
            scroll-margin-top: clamp(4.5rem, 7vw, 6rem);
        }

::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }
        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94A3B8;
        }

.glass-card {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.75);
        }
        .glass-card-dark {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.14);
        }

@keyframes float-bubble {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.04);
            }
        }
        .animate-float-slow {
            animation: float-bubble 7s ease-in-out infinite;
        }
        .animate-float-delayed {
            animation: float-bubble 9s ease-in-out infinite 2s;
        }
        .animate-float-fast {
            animation: float-bubble 5s ease-in-out infinite 1s;
        }

.bg-grid-slate {
            background-image: radial-gradient(rgba(148, 163, 184, 0.18) 1.2px, transparent 1.2px);
            background-size: 24px 24px;
        }
        .bg-grid-white {
            background-image: radial-gradient(rgba(255, 255, 255, 0.12) 1.2px, transparent 1.2px);
            background-size: 24px 24px;
        }

@media (min-width: 1024px) {
            .timeline-connector {
                position: absolute;
                top: 36px;
                left: 8%;
                right: 8%;
                height: 2px;
                background: linear-gradient(90deg, #0c8fe8 0%, #38bdf8 50%, #10b981 100%);
                z-index: 0;
            }
        }

.border-beam-card {
            position: relative;
        }
        .border-beam-card::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(135deg, rgba(56, 189, 248, 0.6), rgba(129, 140, 248, 0.25), rgba(16, 185, 129, 0.5));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

.reveal,
        .reveal-left,
        .reveal-right,
        .reveal-up,
        .reveal-down,
        .reveal,
        .reveal-left,
        .reveal-right,
        .reveal-up,
        .reveal-down,
        .reveal-scale,
        .reveal-on-scroll {
            opacity: 0;
            transition: opacity 900ms cubic-bezier(0.25, 1, 0.5, 1), 
                        transform 900ms cubic-bezier(0.25, 1, 0.5, 1), 
                        box-shadow 500ms cubic-bezier(0.25, 1, 0.5, 1), 
                        border-color 350ms ease !important;
            will-change: opacity, transform;
        }

.reveal-left {
            transform: translateX(-36px);
        }

.reveal-right {
            transform: translateX(36px);
        }

.reveal-up,
        .reveal-on-scroll,
        .reveal {
            transform: translateY(24px);
        }

        .reveal-down {
            transform: translateY(-24px);
        }

        .reveal-scale {
            transform: scale(0.96) translateY(14px);
        }

        @media (max-width: 640px) {
            .reveal-left {
                transform: translateX(-20px);
            }
            .reveal-right {
                transform: translateX(20px);
            }
        }

.reveal.is-visible,
        .reveal-left.is-visible,
        .reveal-right.is-visible,
        .reveal-up.is-visible,
        .reveal-down.is-visible,
        .reveal-scale.is-visible,
        .reveal-on-scroll.is-visible {
            opacity: 1 !important;
            transform: translate(0, 0) scale(1) !important;
        }

.stagger-1 { transition-delay: 80ms; }
        .stagger-2 { transition-delay: 160ms; }
        .stagger-3 { transition-delay: 240ms; }
        .stagger-4 { transition-delay: 320ms; }
        .stagger-5 { transition-delay: 400ms; }

.interactive-card,
        .tilt-card {
            transition: transform 500ms cubic-bezier(0.25, 1, 0.5, 1), box-shadow 500ms cubic-bezier(0.25, 1, 0.5, 1), border-color 350ms ease;
        }
        .interactive-card:hover,
        .tilt-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 16px 28px -6px rgba(0, 0, 0, 0.08), 0 6px 10px -4px rgba(0, 0, 0, 0.04) !important;
        }
        .interactive-btn {
            transition: transform 0.35s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.35s cubic-bezier(0.25, 1, 0.5, 1), background-color 0.3s ease, color 0.3s ease;
        }
        .interactive-btn:hover {
            transform: translateY(-2px);
        }
        :focus-visible {
            outline: 2px solid #0c8fe8;
            outline-offset: 2px;
        }

img {
            max-width: 100%;
            height: auto;
        }

@media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            .reveal,
            .reveal-left,
            .reveal-right,
            .reveal-up,
            .reveal-down,
            .reveal-scale,
            .reveal-on-scroll {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>

    @stack('styles')
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col bg-white relative selection:bg-sky-500 selection:text-white">

<div id="scrollProgressBar" class="fixed top-0 left-0 h-0.5 bg-sky-400 z-50 transition-all duration-200 ease-out" style="width: 0%;"></div>

<div class="bg-[#08152b] text-slate-300 text-xs py-2 px-4 sm:px-6 lg:px-8 border-b border-sky-950/80 relative z-40">
        <div class="w-full flex flex-col md:flex-row items-center justify-between gap-2.5 md:gap-4 text-center md:text-left">
            <div class="flex items-center gap-2.5 sm:gap-3 flex-wrap justify-center md:justify-start">
<span id="storeStatusBadge" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 text-emerald-300 font-bold text-[11px] border border-emerald-500/40 shadow-xs">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span id="storeStatusText">Gerai Buka &bull; 07.00 - 21.00 WIB</span>
                </span>
                <span class="hidden md:inline text-sky-900">&bull;</span>
                <span class="text-[11px] sm:text-xs text-slate-300 flex items-center gap-1.5 font-medium">
                    <i class="fa-solid fa-location-dot text-rose-400 text-xs"></i>
                    <span>Dinoyo, Lowokwaru (Dekat Kampus UB, UM & Polinema)</span>
                </span>
                <span class="hidden xl:inline text-sky-900">&bull;</span>
                <span class="hidden xl:inline-flex items-center gap-1.5 text-[11px] text-amber-300 font-semibold bg-amber-950/40 px-2 py-0.5 rounded border border-amber-800/40">
                    <i class="fa-solid fa-bolt text-amber-400 text-xs"></i>
                    <span>Layanan Express 6 Jam Siap</span>
                </span>
            </div>

            <div class="flex items-center gap-3 sm:gap-4 text-[11px] sm:text-xs shrink-0">
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20tanya%20layanan%20laundry%20antar-jemput" target="_blank" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5 font-semibold text-slate-200">
                    <i class="fa-brands fa-whatsapp text-emerald-400 text-sm"></i>
                    <span>Hotline: 0812-3456-7890</span>
                </a>
                <span class="text-sky-900">|</span>
                <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link hover:text-sky-300 transition-colors flex items-center gap-1.5 text-sky-400 font-medium">
                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    <span>Cek Nota Online</span>
                </a>
            </div>
        </div>
    </div>

<header class="bg-[#08152b]/95 border-b border-sky-950/80 sticky top-0 z-40 transition-all shadow-lg shadow-black/20">
        <div class="w-full px-4 sm:px-6 lg:px-8 h-18 sm:h-20 flex items-center justify-between gap-3 lg:gap-4 flex-nowrap">
<a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 group shrink-0">
                <div class="shrink-0">
                    <div class="flex items-center gap-1.5 sm:gap-2">
                        <span class="font-black text-xl sm:text-2xl lg:text-3xl xl:text-4xl tracking-tight text-white leading-none">KATARA</span>
                        <span class="font-black text-xl sm:text-2xl lg:text-3xl xl:text-4xl tracking-tight text-sky-400 leading-none">LAUNDRY</span>
                    </div>
                    <p class="text-[10px] sm:text-xs text-slate-400 font-medium mt-1 flex items-center gap-1.5 whitespace-nowrap">
                        <span class="text-slate-300">Gerai Dinoyo</span>
                        <span class="w-1 h-1 rounded-full bg-sky-500/60"></span>
                        <span class="text-sky-400 font-semibold">1 Mesin 1 Nota</span>
                    </p>
                </div>
            </a>

<nav id="desktopNav" class="hidden lg:flex items-center justify-center mx-auto gap-1 xl:gap-2.5 text-xs xl:text-sm font-semibold text-slate-300 shrink-0 flex-nowrap">
                <a href="{{ route('home') }}" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all whitespace-nowrap {{ request()->routeIs('home') ? 'text-white bg-sky-950/80 font-bold' : '' }}" data-section="hero">Beranda</a>
                <a href="{{ route('public.layanan') }}" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all whitespace-nowrap {{ request()->routeIs('public.layanan') ? 'text-white bg-sky-950/80 font-bold' : '' }}" data-section="layanan">Layanan & Tarif</a>
                <a href="{{ route('public.kalkulator') }}" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all flex items-center gap-1.5 whitespace-nowrap {{ request()->routeIs('public.kalkulator') ? 'text-white bg-sky-950/80 font-bold' : '' }}" data-section="kalkulator">
                    <span>Estimasi</span>
                    <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-amber-400/20 text-amber-300 border border-amber-400/40">Kalkulator</span>
                </a>
                <a href="{{ route('public.keunggulan') }}" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all whitespace-nowrap {{ request()->routeIs('public.keunggulan') ? 'text-white bg-sky-950/80 font-bold' : '' }}" data-section="keunggulan">Keunggulan</a>
                <a href="{{ route('public.galeri') }}" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all whitespace-nowrap {{ request()->routeIs('public.galeri') ? 'text-white bg-sky-950/80 font-bold' : '' }}" data-section="galeri">Galeri Gerai</a>

<div class="relative group" id="moreDropdownContainer">
                    <button type="button" id="moreDropdownBtn" class="nav-link px-2.5 xl:px-3 py-1.5 rounded-xl hover:text-white hover:bg-sky-950/70 transition-all flex items-center gap-1 font-semibold text-slate-300 whitespace-nowrap {{ request()->routeIs(['public.cara_pesan', 'public.parfum', 'public.faq', 'public.lokasi']) ? 'text-white bg-sky-950/80 font-bold ring-1 ring-sky-700/60' : '' }}">
                        <span>Lainnya</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-sky-400 group-hover:rotate-180 transition-transform duration-300 ease-out" id="moreDropdownIcon"></i>
                    </button>
<div id="moreDropdownMenu" class="absolute top-full right-0 pt-1.5 w-56 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 ease-out z-50">
                        <div class="bg-[#0b1b36] rounded-2xl shadow-2xl border border-sky-900/80 py-1.5 divide-y divide-sky-950/60 overflow-hidden">
                            <div class="py-1">
                                <a href="{{ route('public.cara_pesan') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/60 hover:text-white transition-colors {{ request()->routeIs('public.cara_pesan') ? 'bg-sky-900/50 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-list-check text-sky-400 w-4 text-center"></i>
                                    <span>Cara Pesan</span>
                                </a>
                                <a href="{{ route('public.parfum') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/60 hover:text-white transition-colors {{ request()->routeIs('public.parfum') ? 'bg-sky-900/50 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-spray-can text-purple-400 w-4 text-center"></i>
                                    <span>Aroma Parfum</span>
                                </a>
                                <a href="{{ route('public.faq') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/60 hover:text-white transition-colors {{ request()->routeIs(['public.faq']) ? 'bg-sky-900/50 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-circle-question text-amber-400 w-4 text-center"></i>
                                    <span>Tanya Jawab (FAQ)</span>
                                </a>
                                <a href="{{ route('public.lokasi') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-sky-900/60 hover:text-white transition-colors {{ request()->routeIs('public.lokasi') ? 'bg-sky-900/50 text-white font-bold' : '' }}">
                                    <i class="fa-solid fa-map-location-dot text-rose-400 w-4 text-center"></i>
                                    <span>Lokasi & Jam Buka</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

<div class="hidden sm:flex items-center gap-2 shrink-0 flex-nowrap">
<a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" id="headerLacakBtn" class="nav-lacak-link inline-flex items-center justify-center gap-1.5 h-9 w-[120px] rounded-xl text-xs font-bold transition-all shrink-0 whitespace-nowrap shadow-xs {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'bg-sky-600 text-white shadow-md shadow-sky-600/30 ring-1 ring-sky-400/50' : 'bg-sky-950/80 text-sky-300 border border-sky-700/60 hover:bg-sky-900/70 hover:text-white' }}">
                    <i class="fa-solid fa-magnifying-glass text-sky-400 text-xs"></i>
                    <span>Lacak Nota</span>
                </a>

<a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20order%20laundry%20antar-jemput" target="_blank" class="inline-flex items-center justify-center gap-1.5 h-9 w-[120px] rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 text-xs font-bold transition-all shadow-md shadow-emerald-500/25 border border-emerald-400/50 shrink-0 whitespace-nowrap">
                    <i class="fa-brands fa-whatsapp text-sm text-slate-950"></i>
                    <span>Order via WA</span>
                </a>

                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center gap-1.5 h-9 w-[120px] rounded-xl bg-sky-600 text-white text-xs font-bold hover:bg-sky-500 transition-colors shadow-xs border border-sky-500 shrink-0 whitespace-nowrap">
                        <i class="fa-solid fa-gauge-high text-xs"></i>
                        <span>Dasbor Staf</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-1.5 h-9 w-[120px] rounded-xl bg-slate-900/80 text-slate-300 border border-slate-700/70 text-xs font-bold hover:bg-slate-800 hover:text-white transition-colors shrink-0 whitespace-nowrap">
                        <i class="fa-solid fa-lock text-slate-400 text-xs"></i>
                        <span>Masuk Staf</span>
                    </a>
                @endauth
            </div>

<div class="flex items-center gap-1.5 lg:hidden shrink-0">
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry" target="_blank" class="w-10 h-10 min-w-[40px] min-h-[40px] rounded-xl bg-emerald-500 text-slate-950 hover:bg-emerald-400 transition-colors flex items-center justify-center interactive-btn shrink-0" aria-label="WhatsApp Contact">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                </a>
                <button type="button" id="mobileMenuBtn" class="w-10 h-10 min-w-[40px] min-h-[40px] rounded-xl bg-slate-900/80 text-slate-200 border border-slate-700 hover:bg-slate-800 hover:text-white focus:outline-none flex items-center justify-center interactive-btn shrink-0" aria-label="Menu Navigasi">
                    <i class="fa-solid fa-bars text-lg text-slate-200" id="mobileMenuIcon"></i>
                </button>
            </div>
        </div>

<div id="mobileMenu" class="hidden lg:hidden border-t border-sky-950/80 bg-[#08152b] text-white px-4 py-5 space-y-3 shadow-2xl">
            <nav class="grid grid-cols-2 gap-2 text-xs font-semibold text-slate-300">
                <a href="{{ route('home') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('home') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-house text-sky-400"></i> Beranda
                </a>
                <a href="{{ route('public.layanan') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.layanan') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-tags text-sky-400"></i> Layanan & Tarif
                </a>
                <a href="{{ route('public.kalkulator') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.kalkulator') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-calculator text-amber-400"></i> Hitung Biaya
                </a>
                <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'border-sky-400 text-white font-bold bg-sky-900/70' : '' }}">
                    <i class="fa-solid fa-magnifying-glass text-sky-400"></i> Lacak Nota
                </a>
                <a href="{{ route('public.keunggulan') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.keunggulan') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-award text-sky-400"></i> Keunggulan
                </a>
                <a href="{{ route('public.galeri') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.galeri') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-camera text-sky-400"></i> Galeri Gerai
                </a>
                <a href="{{ route('public.cara_pesan') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.cara_pesan') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-list-check text-sky-400"></i> Cara Pesan
                </a>
                <a href="{{ route('public.parfum') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.parfum') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-spray-can text-purple-400"></i> Varian Parfum
                </a>
                <a href="{{ route('public.faq') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.faq') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-circle-question text-amber-400"></i> FAQ
                </a>
                <a href="{{ route('public.lokasi') }}" class="p-2.5 rounded-xl bg-[#0b1b36] hover:bg-sky-950 hover:text-sky-300 transition-colors flex items-center gap-2 border border-sky-900/60 {{ request()->routeIs('public.lokasi') ? 'border-sky-400 text-white font-bold' : '' }}">
                    <i class="fa-solid fa-map-location-dot text-rose-400"></i> Lokasi Gerai
                </a>
            </nav>

            <div class="pt-3 border-t border-sky-950/80 flex flex-col gap-2">
                <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20mau%20pesan%20laundry%20antar-jemput" target="_blank" class="w-full py-2.5 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-xs flex items-center justify-center gap-2 shadow-xs">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Order via WhatsApp Dinoyo</span>
                </a>
                @auth
                    <a href="{{ route('dashboard') }}" class="w-full py-2.5 px-4 rounded-xl bg-sky-600 text-white font-bold text-xs text-center">
                        Buka Dasbor Staf Operasional
                    </a>
                @else
                    <a href="{{ route('login') }}" class="w-full py-2.5 px-4 rounded-xl bg-slate-900/90 text-slate-300 border border-slate-700 font-bold text-xs text-center hover:bg-slate-800">
                        Masuk Staf Gerai
                    </a>
                @endauth
            </div>
        </div>
    </header>

<main class="flex-1">
        @yield('content')
    </main>

<div class="fixed bottom-20 sm:bottom-6 right-4 sm:right-6 z-50 flex flex-col items-end gap-3 pointer-events-none">
<button id="backToTopBtn" type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="pointer-events-auto w-11 h-11 rounded-full bg-white text-slate-700 hover:text-sky-600 hover:bg-sky-50 shadow-xl border border-slate-200 flex items-center justify-center transition-all duration-300 opacity-0 translate-y-4 hover:shadow-sky-500/20 group cursor-pointer" title="Kembali ke atas">
            <i class="fa-solid fa-arrow-up text-xs group-hover:-translate-y-0.5 transition-transform"></i>
        </button>

<a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20bertanya%20atau%20pesan%20laundry" target="_blank" class="hidden sm:flex pointer-events-auto items-center gap-3 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold px-4.5 py-3.5 rounded-full shadow-2xl shadow-emerald-600/40 hover:scale-105 transition-all duration-200 border-2 border-white/80 cursor-pointer">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-200 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
            </span>
            <i class="fa-brands fa-whatsapp text-xl"></i>
            <div class="text-left hidden md:block leading-tight">
                <span class="text-[10px] text-emerald-100 block uppercase font-bold tracking-wider">Layanan Cepat</span>
                <span class="text-xs font-black">Chat / Antar Jemput</span>
            </div>
        </a>
    </div>

<footer class="bg-slate-50 text-slate-600 pt-10 sm:pt-12 pb-10 border-t border-slate-200 text-sm mt-6 sm:mt-8 reveal-up">
        <div class="site-container space-y-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="space-y-4">
<div class="flex items-center gap-2.5 text-slate-800 font-extrabold text-lg shrink-0">
                    <span>KATARA LAUNDRY</span>
                </div>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Layanan laundry kiloan & satuan modern di kawasan Dinoyo Kota Malang. Mengutamakan higienitas dengan prinsip 1 mesin 1 pelanggan, mesin pengering gas bertekanan optimal, setrika uap presisi, serta rak fisik terintegrasi notifikasi WhatsApp.
                    </p>
                    <div class="flex items-center gap-3 text-slate-500 text-sm">
                        <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="w-8 h-8 rounded-lg bg-slate-200 hover:bg-brand-500 hover:text-white flex items-center justify-center transition-colors" title="TikTok">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-8 h-8 rounded-lg bg-slate-200 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition-colors" title="WhatsApp CS">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

<div class="space-y-3">
                    <h4 class="text-slate-800 font-bold text-xs uppercase tracking-wider">Navigasi Layanan</h4>
                    <ul class="text-xs space-y-2 text-slate-500">
                        <li><a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brand-500"></i> Cuci Kering Setrika Reguler</a></li>
                        <li><a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brand-500"></i> Cuci Kilat 24 Jam & Express 6 Jam</a></li>
                        <li><a href="{{ route('public.layanan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brand-500"></i> Bedcover, Selimut & Satuan</a></li>
                        <li><a href="{{ route('public.keunggulan') }}" class="hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-brand-500"></i> Setrika Uap Boiler Aman</a></li>
                        <li><a href="{{ route('public.kalkulator') }}" class="hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-amber-500"></i> Kalkulator Estimasi Biaya</a></li>
                        <li><a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link hover:text-sky-600 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px] text-emerald-500"></i> Cek Status Nota Real-Time</a></li>
                    </ul>
                </div>

<div class="space-y-3">
                    <h4 class="text-slate-800 font-bold text-xs uppercase tracking-wider">Jam Operasional Gerai</h4>
                    <div class="p-3.5 rounded-xl bg-white border border-slate-200 text-xs space-y-2 shadow-sm">
                        <div class="flex justify-between items-center text-slate-600">
                            <span>Senin - Sabtu:</span>
                            <strong class="text-slate-800 font-mono">07.00 - 21.00 WIB</strong>
                        </div>
                        <div class="flex justify-between items-center text-slate-600">
                            <span>Minggu / Libur:</span>
                            <strong class="text-slate-800 font-mono">08.00 - 20.00 WIB</strong>
                        </div>
                        <div class="pt-2 border-t border-slate-200 text-[11px] text-emerald-600 flex items-center gap-1.5">
                            <i class="fa-solid fa-check-circle"></i>
                            <span>Pengambilan pakaian sesuai jam buka</span>
                        </div>
                    </div>
                    <div class="text-[11px] text-slate-500 flex items-center gap-2">
                        <i class="fa-solid fa-bolt text-amber-500"></i>
                        <span>Layanan Express 6 Jam siap setiap hari</span>
                    </div>
                </div>

<div class="space-y-3">
                    <h4 class="text-slate-800 font-bold text-xs uppercase tracking-wider">Lokasi Gerai Dinoyo</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <i class="fa-solid fa-location-dot text-rose-500 mr-1.5"></i>
                        Jl. MT. Haryono / Kawasan Dinoyo, Kec. Lowokwaru, Kota Malang (Dekat UB, UM, Polinema & UIN Malang).
                    </p>
                    <div class="pt-1 text-xs space-y-1.5">
                        <p class="text-slate-500"><i class="fa-brands fa-whatsapp text-emerald-500 mr-1.5"></i> WA: <strong class="text-slate-800">0812-3456-7890</strong></p>
                        <p class="text-slate-500"><i class="fa-regular fa-envelope text-brand-500 mr-1.5"></i> Email: info@kataralaundry.com</p>
                    </div>
                    <a href="https://maps.google.com/?q=Dinoyo+Malang" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-sky-50 text-sky-600 hover:bg-sky-100 hover:text-sky-800 text-xs font-semibold transition-colors mt-2 border border-sky-200 shadow-xs">
                        <i class="fa-solid fa-diamond-turn-right text-sky-500"></i>
                        <span>Buka Rute Google Maps</span>
                    </a>
                </div>
            </div>

<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-6 border-y border-slate-200 text-center text-xs">
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-shield-halved text-emerald-500 text-lg"></i>
                    <p class="font-bold text-slate-800">1 Mesin 1 Pelanggan</p>
                    <p class="text-[11px] text-slate-500 font-medium">Higienis & tidak dicampur</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-fire-flame-curved text-orange-500 text-lg"></i>
                    <p class="font-bold text-slate-800">Gas Dryer 100% Kering</p>
                    <p class="text-[11px] text-slate-500 font-medium">Anti-apek di musim hujan</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-rotate-left text-sky-500 text-lg"></i>
                    <p class="font-bold text-slate-800">Garansi Cuci Bersih</p>
                    <p class="text-[11px] text-slate-500 font-medium">Cuci ulang jika kurang rapi</p>
                </div>
                <div class="p-2 space-y-1">
                    <i class="fa-solid fa-cubes-stacked text-purple-500 text-lg"></i>
                    <p class="font-bold text-slate-800">45 Slot Rak Fisik</p>
                    <p class="text-[11px] text-slate-500 font-medium">Pakaian aman & terdata</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-3">
                <p>&copy; {{ date('Y') }} Katara Laundry Malang. Seluruh hak cipta dilindungi.</p>
                <p class="text-slate-500">Sistem Manajemen Laundry & Pelacakan Mandiri Gerai Dinoyo.</p>
            </div>
    </footer>

<aside aria-label="Aksi Cepat Mobile" class="sm:hidden fixed bottom-0 left-0 right-0 z-40 bg-[#08152b]/95 border-t border-sky-900/80 p-2.5 shadow-2xl transition-all">
        <div class="flex items-center gap-2">
            <a href="{{ request()->routeIs('home') ? '#lacak' : route('public.lacak') }}" class="nav-lacak-link flex-1 py-2.5 min-h-[44px] rounded-xl bg-sky-950 hover:bg-sky-900 text-sky-200 border border-sky-700/70 font-bold text-xs flex items-center justify-center gap-2 shadow-xs transition-colors {{ request()->routeIs(['public.lacak', 'tracking.index']) ? 'border-sky-400 text-white font-black bg-sky-900' : '' }}">
                <i class="fa-solid fa-magnifying-glass text-sky-400 text-xs"></i>
                <span>Lacak Nota</span>
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Katara%20Laundry%20Dinoyo,%20saya%20ingin%20order%20laundry%20antar-jemput" target="_blank" class="flex-1 py-2.5 min-h-[44px] rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs flex items-center justify-center gap-2 shadow-sm transition-colors border border-emerald-400/50">
                <i class="fa-brands fa-whatsapp text-sm text-slate-950"></i>
                <span>Order via WA</span>
            </a>
        </div>
    </aside>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            function updateStoreStatus() {
                const now = new Date();
                const currentHour = now.getHours();
                const currentDay = now.getDay(); // 0 = Sunday
                const isSunday = currentDay === 0;

                const openHour = isSunday ? 8 : 7;
                const closeHour = isSunday ? 20 : 21;

                const badge = document.getElementById('storeStatusBadge');
                const text = document.getElementById('storeStatusText');

                if (badge && text) {
                    if (currentHour >= openHour && currentHour < closeHour) {
                        badge.className = 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 text-emerald-300 font-bold text-[11px] border border-emerald-500/40 shadow-xs';
                        badge.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span><span id="storeStatusText">Gerai Buka &bull; 07.00 - 21.00 WIB</span>`;
                    } else {
                        badge.className = 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-rose-950/80 text-rose-300 font-bold text-[11px] border border-rose-500/40 shadow-xs';
                        badge.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span><span id="storeStatusText">Gerai Tutup &bull; Buka Besok Pukul ${openHour}.00 WIB</span>`;
                    }
                }
            }
            updateStoreStatus();

            const menuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('mobileMenuIcon');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        menuIcon.classList.remove('fa-bars');
                        menuIcon.classList.add('fa-xmark');
                    } else {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('fa-xmark');
                        menuIcon.classList.add('fa-bars');
                    }
                });

                const links = mobileMenu.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('fa-xmark');
                        menuIcon.classList.add('fa-bars');
                    });
                });
            }

            const moreDropdownBtn = document.getElementById('moreDropdownBtn');
            const moreDropdownMenu = document.getElementById('moreDropdownMenu');
            const moreDropdownIcon = document.getElementById('moreDropdownIcon');

            if (moreDropdownBtn && moreDropdownMenu) {
                moreDropdownBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isHidden = moreDropdownMenu.classList.contains('hidden');
                    if (isHidden) {
                        moreDropdownMenu.classList.remove('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.add('rotate-180');
                    } else {
                        moreDropdownMenu.classList.add('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.remove('rotate-180');
                    }
                });

                document.addEventListener('click', function(e) {
                    if (!moreDropdownMenu.contains(e.target) && !moreDropdownBtn.contains(e.target)) {
                        moreDropdownMenu.classList.add('hidden');
                        if (moreDropdownIcon) moreDropdownIcon.classList.remove('rotate-180');
                    }
                });
            }

            document.querySelectorAll('.nav-lacak-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const lacakEl = document.getElementById('lacak');
                    if (lacakEl) {
                        e.preventDefault();
                        const mobileMenu = document.getElementById('mobileMenu');
                        const menuIcon = document.getElementById('mobileMenuIcon');
                        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                            if (menuIcon) {
                                menuIcon.classList.remove('fa-xmark');
                                menuIcon.classList.add('fa-bars');
                            }
                        }
                        lacakEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        setTimeout(() => {
                            const input = document.getElementById('invoiceInput');
                            if (input) {
                                input.focus();
                                input.classList.add('ring-2', 'ring-sky-400');
                                setTimeout(() => input.classList.remove('ring-2', 'ring-sky-400'), 2000);
                            }
                        }, 400);
                    }
                });
            });

            if (window.location.hash === '#lacak') {
                setTimeout(() => {
                    const lacakEl = document.getElementById('lacak');
                    if (lacakEl) {
                        lacakEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        const input = document.getElementById('invoiceInput');
                        if (input) {
                            input.focus();
                            input.classList.add('ring-2', 'ring-sky-400');
                            setTimeout(() => input.classList.remove('ring-2', 'ring-sky-400'), 2000);
                        }
                    }
                }, 300);
            }

            const revealSelector = '.reveal, .reveal-left, .reveal-right, .reveal-up, .reveal-down, .reveal-scale, .reveal-on-scroll';
            const revealElements = document.querySelectorAll(revealSelector);
            if ('IntersectionObserver' in window && revealElements.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        const el = entry.target;
                        if (entry.isIntersecting) {
                            const delay = el.getAttribute('data-delay');
                            if (delay) {
                                el.style.transitionDelay = `${delay}ms`;
                            }
                            el.classList.add('is-visible');
                        } else {
                            el.style.transitionDelay = '0ms';
                            el.classList.remove('is-visible');
                        }
                    });
                }, {
                    threshold: 0.08,
                    rootMargin: '20px 0px -20px 0px'
                });

                revealElements.forEach(el => observer.observe(el));
            } else {
                revealElements.forEach(el => el.classList.add('is-visible'));
            }

            const progressBar = document.getElementById('scrollProgressBar');
            const backToTopBtn = document.getElementById('backToTopBtn');
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('#desktopNav a.nav-link');
            const parallaxBubbles = document.querySelectorAll('.parallax-bubble');

            window.addEventListener('scroll', function() {
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                
                if (progressBar) {
                    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
                    progressBar.style.width = scrollPercent + '%';
                }

                if (backToTopBtn) {
                    if (scrollTop > 320) {
                        backToTopBtn.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                        backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                    } else {
                        backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                        backToTopBtn.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                    }
                }

                let activeId = '';
                sections.forEach(section => {
                    const top = section.offsetTop - 140;
                    const height = section.offsetHeight;
                    if (scrollTop >= top && scrollTop < top + height) {
                        activeId = section.getAttribute('id');
                    }
                });

                if (activeId) {
                    navLinks.forEach(link => {
                        if (link.getAttribute('data-section') === activeId) {
                            link.classList.add('bg-sky-950', 'text-sky-300', 'font-bold', 'ring-1', 'ring-sky-700/60');
                            link.classList.remove('text-slate-300');
                        } else {
                            link.classList.remove('bg-sky-950', 'text-sky-300', 'font-bold', 'ring-1', 'ring-sky-700/60');
                            link.classList.add('text-slate-300');
                        }
                    });
                }

                parallaxBubbles.forEach((bubble, idx) => {
                    const speed = idx % 2 === 0 ? 0.09 : -0.07;
                    bubble.style.transform = `translateY(${scrollTop * speed}px)`;
                });
            }, { passive: true });
        });
    </script>

    @stack('scripts')
</body>
</html>
