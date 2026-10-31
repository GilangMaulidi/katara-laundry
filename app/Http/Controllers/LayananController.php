<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Parfum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LayananController extends Controller
{
    public function index(): View
    {
        $services = Layanan::orderBy('kategori')->orderBy('harga')->get();
        $perfumes = Parfum::orderBy('nama')->get();

        return view('layanan.index', compact('services', 'perfumes'));
    }

    public function store(Request $request): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $kategori = $request->input('kategori', $request->input('category', 'kiloan'));
        $satuan = $request->input('satuan', $request->input('unit', 'kg'));
        $harga = $request->input('harga', $request->input('price'));
        $durasi = $request->input('durasi_jam', $request->input('duration_hours', 48));
        $minOrder = $request->input('minimal_order', $request->input('min_order', 1));
        $deskripsi = $request->input('deskripsi', $request->input('description'));
        $aktif = $request->boolean('aktif', $request->boolean('is_active', true));

        $request->merge([
            'nama' => $nama,
            'kategori' => $kategori,
            'satuan' => $satuan,
            'harga' => $harga,
            'durasi_jam' => $durasi,
            'minimal_order' => $minOrder,
            'deskripsi' => $deskripsi,
            'aktif' => $aktif,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'in:kiloan,satuan'],
            'satuan' => ['required', 'string', 'max:20'],
            'harga' => ['required', 'numeric', 'min:0'],
            'durasi_jam' => ['required', 'integer', 'min:1'],
            'minimal_order' => ['required', 'numeric', 'min:0.1'],
            'deskripsi' => ['nullable', 'string'],
        ], [
            'nama.required' => 'Nama layanan wajib diisi.',
            'harga.required' => 'Tarif layanan wajib diisi.',
        ]);

        $validated['aktif'] = $aktif;

        Layanan::create($validated);

        return back()->with('success', 'Layanan laundry baru berhasil ditambahkan.');
    }

    public function update(Request $request, Layanan $service): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name', $service->nama));
        $kategori = $request->input('kategori', $request->input('category', $service->kategori));
        $satuan = $request->input('satuan', $request->input('unit', $service->satuan));
        $harga = $request->input('harga', $request->input('price', $service->harga));
        $durasi = $request->input('durasi_jam', $request->input('duration_hours', $service->durasi_jam));
        $minOrder = $request->input('minimal_order', $request->input('min_order', $service->minimal_order));
        $deskripsi = $request->input('deskripsi', $request->input('description', $service->deskripsi));
        $aktif = $request->boolean('aktif', $request->boolean('is_active', $service->aktif));

        $request->merge([
            'nama' => $nama,
            'kategori' => $kategori,
            'satuan' => $satuan,
            'harga' => $harga,
            'durasi_jam' => $durasi,
            'minimal_order' => $minOrder,
            'deskripsi' => $deskripsi,
            'aktif' => $aktif,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'in:kiloan,satuan'],
            'satuan' => ['required', 'string', 'max:20'],
            'harga' => ['required', 'numeric', 'min:0'],
            'durasi_jam' => ['required', 'integer', 'min:1'],
            'minimal_order' => ['required', 'numeric', 'min:0.1'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        $validated['aktif'] = $aktif;

        $service->update($validated);

        return back()->with('success', "Tarif layanan {$service->nama} berhasil diperbarui.");
    }

    public function storePerfume(Request $request): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $aroma = $request->input('karakter_aroma', $request->input('aroma_character'));
        $deskripsi = $request->input('deskripsi', $request->input('description'));
        $aktif = $request->boolean('aktif', $request->boolean('is_active', true));

        $request->merge([
            'nama' => $nama,
            'karakter_aroma' => $aroma,
            'deskripsi' => $deskripsi,
            'aktif' => $aktif,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'karakter_aroma' => ['nullable', 'string', 'max:150'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        $validated['aktif'] = $aktif;

        Parfum::create($validated);

        return back()->with('success', 'Varian aroma parfum baru berhasil ditambahkan.');
    }
}

