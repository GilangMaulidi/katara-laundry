<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PelangganController extends Controller
{
    public function index(Request $request): View
    {
        $query = Pelanggan::withCount('transaksi')->latest();

        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nomor_telepon', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%");
            });
        }

        $customers = $query->paginate(15)->withQueryString();

        return view('pelanggan.index', compact('customers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $telepon = $request->input('nomor_telepon', $request->input('phone_number'));
        $alamat = $request->input('alamat', $request->input('address'));
        $catatan = $request->input('catatan', $request->input('notes'));

        $request->merge([
            'nama' => $nama,
            'nomor_telepon' => $telepon,
            'alamat' => $alamat,
            'catatan' => $catatan,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'nomor_telepon' => ['required', 'string', 'max:25'],
            'alamat' => ['nullable', 'string'],
            'catatan' => ['nullable', 'string'],
        ], [
            'nama.required' => 'Nama pelanggan wajib diisi.',
            'nomor_telepon.required' => 'Nomor WhatsApp / telepon wajib diisi.',
        ]);

        Pelanggan::create($validated);

        return back()->with('success', 'Data pelanggan baru berhasil ditambahkan.');
    }

    public function update(Request $request, Pelanggan $customer): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $telepon = $request->input('nomor_telepon', $request->input('phone_number'));
        $alamat = $request->input('alamat', $request->input('address'));
        $catatan = $request->input('catatan', $request->input('notes'));

        $request->merge([
            'nama' => $nama,
            'nomor_telepon' => $telepon,
            'alamat' => $alamat,
            'catatan' => $catatan,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'nomor_telepon' => ['required', 'string', 'max:25'],
            'alamat' => ['nullable', 'string'],
            'catatan' => ['nullable', 'string'],
        ]);

        $customer->update($validated);

        return back()->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    public function destroy(Pelanggan $customer): RedirectResponse
    {
        if ($customer->transaksi()->exists()) {
            return back()->with('error', 'Pelanggan tidak dapat dihapus karena memiliki riwayat transaksi.');
        }

        $customer->delete();

        return back()->with('success', 'Data pelanggan berhasil dihapus.');
    }
}

