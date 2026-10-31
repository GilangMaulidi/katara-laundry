<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AutentikasiController extends Controller
{
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('dasbor');
        }

        return view('autentikasi.masuk');
    }

    public function login(Request $request): RedirectResponse
    {
        $identifier = trim((string) ($request->input('nama') ?? $request->input('email')));
        $password = (string) $request->input('password');

        $request->merge(['nama' => $identifier]);

        $request->validate([
            'nama' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'nama.required' => 'Nama staf atau alamat email wajib diisi.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $remember = $request->boolean('remember');

        $user = Pengguna::where('nama', $identifier)
            ->orWhere('email', $identifier)
            ->orWhere('peran', strtolower($identifier))
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            if (! $user->is_active) {
                return back()->withErrors([
                    'nama' => 'Akun Anda sedang dinonaktifkan oleh Administrator. Hubungi pengelola gerai.',
                ])->withInput($request->only('nama', 'email'));
            }

            Auth::login($user, $remember);
            $request->session()->regenerate();

            return redirect()->intended(route('dasbor'))
                ->with('success', 'Selamat datang kembali, '.$user->name.'! Sesi operasional aktif.');
        }

        return back()->withErrors([
            'nama' => 'Nama staf/email atau kata sandi yang Anda masukkan tidak sesuai.',
        ])->withInput($request->only('nama', 'email'));
    }

    public function demoLogin(string $role): RedirectResponse
    {
        abort_unless(
            app()->environment(['local', 'testing']),
            403,
            'Akses demo login instan dinonaktifkan di luar lingkungan pengembangan lokal demi keamanan gerai.'
        );

        $email = match ($role) {
            'admin', 'owner' => 'admin@kataralaundry.com',
            'kasir' => 'kasir@kataralaundry.com',
            'operator' => 'operator@kataralaundry.com',
            default => 'kasir@kataralaundry.com',
        };

        $user = Pengguna::where('email', $email)->first();

        if ($user) {
            Auth::login($user);
            if (request()->hasSession()) {
                request()->session()->regenerate();
            }

            return redirect()->route('dasbor')
                ->with('success', 'Masuk sebagai '.$user->name.' ('.ucfirst($user->role).').');
        }

        return redirect()->route('login')->with('error', 'Akun demo tidak ditemukan.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('info', 'Anda telah berhasil keluar dari sistem.');
    }
}

