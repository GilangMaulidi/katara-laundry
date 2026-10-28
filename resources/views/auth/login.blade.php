<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk Staf Operasional - Katara Laundry Malang</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.katara.jpg') }}">

    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
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
                            500: '#0c8fe8',
                            600: '#0170c5',
                            700: '#02599f',
                            800: '#075985',
                            900: '#082f49',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html, body {
            height: 100%;
            max-height: 100vh;
            overflow: hidden !important;
            scrollbar-width: none !important;
            -ms-overflow-style: none !important;
        }
        ::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }
    </style>
</head>
<body class="h-screen max-h-screen overflow-hidden bg-slate-50 text-slate-800 font-sans antialiased flex flex-col justify-center items-center px-4 sm:px-6 py-2">

    <main class="w-full max-w-md mx-auto my-auto flex flex-col justify-center">
        
        <!-- Header: Harmonious Brand Lockup -->
        <header class="flex items-center justify-center gap-3 mb-2.5 sm:mb-3">
            <img src="{{ asset('images/logo.katara.jpg') }}" alt="Logo Katara Laundry" class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl object-contain border border-slate-200 shadow-sm shrink-0 bg-white">
            <div class="text-left">
                <h1 class="text-xl sm:text-2xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    KATARA <span class="text-brand-600">LAUNDRY</span>
                </h1>
                <p class="text-[11px] sm:text-xs font-medium text-slate-500">
                    Portal Operasional Gerai Dinoyo
                </p>
            </div>
        </header>

        <!-- Login Card -->
        <div class="bg-white py-4 sm:py-5 px-5 sm:px-7 rounded-2xl border border-slate-200/90 shadow-sm">
            
            @if(session('info'))
                <div class="mb-2.5 p-2 rounded-xl bg-sky-50 border border-sky-200 text-sky-800 text-xs flex items-center gap-2" role="status">
                    <i class="fa-solid fa-circle-info text-brand-600 text-xs shrink-0" aria-hidden="true"></i>
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-2.5 p-2 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs flex items-center gap-2" role="alert">
                    <i class="fa-solid fa-circle-exclamation text-rose-500 text-xs shrink-0" aria-hidden="true"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-2.5">
                @csrf

                <!-- Input: Nama Staf / Email -->
                <div>
                    <label for="nama" class="block text-xs font-semibold text-slate-700 mb-1">
                        Nama Staf / Email
                    </label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 group-focus-within:text-brand-600 transition-colors">
                            <i class="fa-solid fa-user text-xs" aria-hidden="true"></i>
                        </div>
                        <input 
                            id="nama" 
                            name="nama" 
                            type="text" 
                            autocomplete="username" 
                            required 
                            value="{{ old('nama', old('email')) }}" 
                            class="block w-full pl-9 pr-3 py-2 bg-slate-50/70 hover:bg-slate-50 focus:bg-white border rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-600 transition-all @error('nama') border-rose-400 bg-rose-50/30 text-rose-900 @else border-slate-300 @enderror" 
                            placeholder="Nama staf atau alamat email"
                            @error('nama') aria-invalid="true" aria-describedby="nama-error" @enderror
                        >
                    </div>
                    @error('nama')
                        <p id="nama-error" class="mt-1 text-[11px] text-rose-600 font-medium flex items-center gap-1" role="alert">
                            <i class="fa-solid fa-circle-exclamation text-[10px] shrink-0" aria-hidden="true"></i>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- Input: Kata Sandi -->
                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-700 mb-1">
                        Kata Sandi
                    </label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 group-focus-within:text-brand-600 transition-colors">
                            <i class="fa-solid fa-lock text-xs" aria-hidden="true"></i>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            value="" 
                            class="block w-full pl-9 pr-9 py-2 bg-slate-50/70 hover:bg-slate-50 focus:bg-white border rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-600 transition-all @error('password') border-rose-400 bg-rose-50/30 text-rose-900 @else border-slate-300 @enderror" 
                            placeholder="Masukkan kata sandi akun"
                            @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
                        >
                        <button 
                            type="button" 
                            id="toggle-password-btn"
                            onclick="togglePassword()" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none focus:text-brand-600 transition-colors" 
                            aria-label="Tampilkan kata sandi"
                            title="Tampilkan kata sandi"
                        >
                            <i id="eye-icon" class="fa-solid fa-eye text-xs" aria-hidden="true"></i>
                        </button>
                    </div>
                    @error('password')
                        <p id="password-error" class="mt-1 text-[11px] text-rose-600 font-medium flex items-center gap-1" role="alert">
                            <i class="fa-solid fa-circle-exclamation text-[10px] shrink-0" aria-hidden="true"></i>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between pt-0.5">
                    <label for="remember" class="flex items-center gap-2 cursor-pointer text-slate-600 select-none">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember" 
                            class="w-3.5 h-3.5 rounded text-brand-600 focus:ring-brand-500 border-slate-300 cursor-pointer"
                        >
                        <span class="text-xs font-medium text-slate-600">Ingat sesi masuk di perangkat ini</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full mt-1.5 py-2 px-4 rounded-xl bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-white text-xs sm:text-sm font-bold shadow-sm shadow-brand-600/30 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-1 transition-all flex items-center justify-center gap-2 group"
                >
                    <span>Masuk ke Sistem Kasir</span>
                    <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-0.5 transition-transform" aria-hidden="true"></i>
                </button>
            </form>

            <!-- Quick Access / Demo Login -->
            <div class="mt-3 pt-2.5 border-t border-slate-200/80">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <div class="h-px bg-slate-200 flex-1"></div>
                    <span class="text-[10px] font-semibold text-slate-400 tracking-wider uppercase">Akses Cepat Pengujian</span>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="grid grid-cols-3 gap-2">
                    <a 
                        href="{{ route('demo.login', 'owner') }}" 
                        class="group flex flex-col items-center justify-center py-1.5 px-1 rounded-xl bg-slate-50 hover:bg-sky-50 border border-slate-200 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all text-center"
                        title="Masuk sebagai Owner / Admin"
                    >
                        <div class="w-6 h-6 rounded-lg bg-sky-100 group-hover:bg-brand-600 flex items-center justify-center text-brand-600 group-hover:text-white transition-colors mb-0.5">
                            <i class="fa-solid fa-user-tie text-[10px]" aria-hidden="true"></i>
                        </div>
                        <span class="text-[11px] font-bold text-slate-800 group-hover:text-brand-700 transition-colors">Owner</span>
                        <span class="text-[9px] text-slate-500">Admin Gerai</span>
                    </a>

                    <a 
                        href="{{ route('demo.login', 'kasir') }}" 
                        class="group flex flex-col items-center justify-center py-1.5 px-1 rounded-xl bg-amber-50/50 hover:bg-amber-50 border border-amber-200/70 hover:border-amber-300 focus:outline-none focus:ring-2 focus:ring-amber-500 transition-all text-center"
                        title="Masuk sebagai Kasir Dinoyo"
                    >
                        <div class="w-6 h-6 rounded-lg bg-amber-100 group-hover:bg-amber-500 flex items-center justify-center text-amber-600 group-hover:text-white transition-colors mb-0.5">
                            <i class="fa-solid fa-cash-register text-[10px]" aria-hidden="true"></i>
                        </div>
                        <span class="text-[11px] font-bold text-slate-800 group-hover:text-amber-800 transition-colors">Kasir</span>
                        <span class="text-[9px] text-amber-700 font-semibold">Dinoyo</span>
                    </a>

                    <a 
                        href="{{ route('demo.login', 'operator') }}" 
                        class="group flex flex-col items-center justify-center py-1.5 px-1 rounded-xl bg-slate-50 hover:bg-sky-50 border border-slate-200 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all text-center"
                        title="Masuk sebagai Petugas Cuci & Setrika"
                    >
                        <div class="w-6 h-6 rounded-lg bg-slate-200 group-hover:bg-brand-600 flex items-center justify-center text-slate-700 group-hover:text-white transition-colors mb-0.5">
                            <i class="fa-solid fa-shirt text-[10px]" aria-hidden="true"></i>
                        </div>
                        <span class="text-[11px] font-bold text-slate-800 group-hover:text-brand-700 transition-colors">Petugas</span>
                        <span class="text-[9px] text-slate-500">Cuci & Setrika</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Back to Public Tracking -->
        <nav class="mt-2.5 sm:mt-3 text-center" aria-label="Navigasi kembali">
            <a 
                href="{{ route('tracking.index') }}" 
                class="inline-flex items-center gap-1.5 text-[11px] font-medium text-slate-500 hover:text-brand-600 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 rounded py-0.5 px-1.5 group"
            >
                <i class="fa-solid fa-arrow-left text-[10px] group-hover:-translate-x-0.5 transition-transform" aria-hidden="true"></i>
                <span>Kembali ke Halaman Pelacakan Publik Pelanggan</span>
            </a>
        </nav>
    </main>

    <script>
        function togglePassword() {
            const passInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            const toggleBtn = document.getElementById('toggle-password-btn');
            if (!passInput || !eyeIcon || !toggleBtn) return;

            const isPassword = passInput.type === 'password';
            passInput.type = isPassword ? 'text' : 'password';

            if (isPassword) {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
                toggleBtn.setAttribute('aria-label', 'Sembunyikan kata sandi');
                toggleBtn.setAttribute('title', 'Sembunyikan kata sandi');
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
                toggleBtn.setAttribute('aria-label', 'Tampilkan kata sandi');
                toggleBtn.setAttribute('title', 'Tampilkan kata sandi');
            }
        }
    </script>
</body>
</html>
