<?php

namespace App\Http\Controllers;

use App\Models\BarangInventaris;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InventarisController extends Controller
{
    public function index(): View
    {
        $items = BarangInventaris::orderBy('kategori')->orderBy('nama')->get();

        $totalItems = $items->count();
        $lowStockCount = $items->where('is_low_stock', true)->count();

        return view('inventaris.index', compact('items', 'totalItems', 'lowStockCount'));
    }

    public function store(Request $request): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name'));
        $kategori = $request->input('kategori', $request->input('category', 'deterjen'));
        $satuan = $request->input('satuan', $request->input('unit', 'liter'));
        $stok = $request->input('stok', $request->input('stock', 0));
        $stokMinimal = $request->input('stok_minimal', $request->input('minimum_stock', 5));
        $biaya = $request->input('biaya_per_satuan', $request->input('cost_per_unit', 0));
        $catatan = $request->input('catatan', $request->input('notes'));

        $request->merge([
            'nama' => $nama,
            'kategori' => $kategori,
            'satuan' => $satuan,
            'stok' => $stok,
            'stok_minimal' => $stokMinimal,
            'biaya_per_satuan' => $biaya,
            'catatan' => $catatan,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'in:deterjen,parfum,packaging,gas,lainnya'],
            'satuan' => ['required', 'string', 'max:30'],
            'stok' => ['required', 'numeric', 'min:0'],
            'stok_minimal' => ['required', 'numeric', 'min:0'],
            'biaya_per_satuan' => ['required', 'numeric', 'min:0'],
            'catatan' => ['nullable', 'string'],
        ]);

        BarangInventaris::create($validated);

        return back()->with('success', 'Bahan baku baru berhasil ditambahkan ke inventori.');
    }

    public function update(Request $request, BarangInventaris $inventory): RedirectResponse
    {
        $nama = $request->input('nama', $request->input('name', $inventory->nama));
        $kategori = $request->input('kategori', $request->input('category', $inventory->kategori));
        $satuan = $request->input('satuan', $request->input('unit', $inventory->satuan));
        $stok = $request->input('stok', $request->input('stock', $inventory->stok));
        $stokMinimal = $request->input('stok_minimal', $request->input('minimum_stock', $inventory->stok_minimal));
        $biaya = $request->input('biaya_per_satuan', $request->input('cost_per_unit', $inventory->biaya_per_satuan));
        $catatan = $request->input('catatan', $request->input('notes', $inventory->catatan));

        $request->merge([
            'nama' => $nama,
            'kategori' => $kategori,
            'satuan' => $satuan,
            'stok' => $stok,
            'stok_minimal' => $stokMinimal,
            'biaya_per_satuan' => $biaya,
            'catatan' => $catatan,
        ]);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'in:deterjen,parfum,packaging,gas,lainnya'],
            'satuan' => ['required', 'string', 'max:30'],
            'stok' => ['required', 'numeric', 'min:0'],
            'stok_minimal' => ['required', 'numeric', 'min:0'],
            'biaya_per_satuan' => ['required', 'numeric', 'min:0'],
            'catatan' => ['nullable', 'string'],
        ]);

        $inventory->update($validated);

        return back()->with('success', "Stok bahan baku {$inventory->nama} berhasil diperbarui.");
    }
}

