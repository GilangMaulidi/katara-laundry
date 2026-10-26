<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk Staf Operasional - Katara Laundry Malang</title>

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
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f7ff',
                            500: '#0c8fe8',
                            600: '#0170c5',
                            700: '#02599f',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 antialiased min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
<div class="text-center">
            <h2 class="text-4xl font-black tracking-tight text-slate-800">KATARA LAUNDRY</h2>
            <p class="text-sm font-semibold text-sky-500 tracking-wide uppercase mt-1">Portal Operasional Gerai Dinoyo Malang</p>
        </div>

<div class="mt-6 bg-white py-8 px-6 shadow-2xl sm:rounded-2xl sm:px-10 border border-slate-200">
@if(session('info'))
                <div class="mb-5 p-3.5 rounded-xl bg-sky-50 border border-sky-200 text-sky-700 text-xs flex items-center gap-2">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-5 p-3.5 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs space-y-1">
                    @foreach($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-exclamation text-rose-500"></i>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                        Alamat Email Staf
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email', 'kasir@kataralaundry.com') }}" class="block w-full pl-10 pr-3 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400 transition-colors" placeholder="nama@kataralaundry.com">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required value="password" class="block w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400 transition-colors" placeholder="••••••••">
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600">
                            <i id="eye-icon" class="fa-solid fa-eye text-xs"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 cursor-pointer text-slate-600">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-brand-600 focus:ring-brand-500 bg-white border-slate-300">
                        <span>Ingat sesi masuk ini</span>
                    </label>
                </div>

                <button type="submit" class="w-full mt-2 py-2.5 px-4 rounded-xl bg-brand-600 text-white text-sm font-bold shadow-md hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-sky-400 transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Masuk ke Sistem Kasir</span>
                </button>
            </form>

<div class="mt-6 pt-5 border-t border-slate-200">
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 text-center mb-3">
                    Akses Cepat Pengujian (1-Klik Masuk)
                </p>
                <div class="grid grid-cols-3 gap-2">
                    <a href="{{ route('demo.login', 'owner') }}" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-slate-300 bg-slate-50 hover:border-sky-400 hover:bg-sky-50 transition-all text-center group">
                        <i class="fa-solid fa-user-tie text-sky-500 text-base mb-1 group-hover:scale-110 transition-transform"></i>
                        <span class="text-xs font-bold text-slate-700">Owner</span>
                        <span class="text-[10px] text-slate-500">Admin</span>
                    </a>

                    <a href="{{ route('demo.login', 'kasir') }}" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-amber-300 bg-amber-50 hover:border-amber-400 hover:bg-amber-100 transition-all text-center group">
                        <i class="fa-solid fa-cash-register text-amber-500 text-base mb-1 group-hover:scale-110 transition-transform"></i>
                        <span class="text-xs font-bold text-slate-700">Kasir</span>
                        <span class="text-[10px] text-amber-600 font-semibold">Dinoyo</span>
                    </a>

                    <a href="{{ route('demo.login', 'operator') }}" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-slate-300 bg-slate-50 hover:border-sky-400 hover:bg-sky-50 transition-all text-center group">
                        <i class="fa-solid fa-shirt text-sky-500 text-base mb-1 group-hover:scale-110 transition-transform"></i>
                        <span class="text-xs font-bold text-slate-700">Petugas</span>
                        <span class="text-[10px] text-slate-500">Cuci/Setrika</span>
                    </a>
                </div>
            </div>
        </div>

<div class="mt-5 text-center">
            <a href="{{ route('tracking.index') }}" class="text-xs font-semibold text-slate-500 hover:text-sky-500 transition-colors inline-flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali ke Halaman Pelacakan Publik Pelanggan</span>
            </a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
