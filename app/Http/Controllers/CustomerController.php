<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
public function index(Request $request): View
    {
        $query = Customer::withCount('transactions')->latest();

        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nomor_telepon', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%");
            });
        }

        $customers = $query->paginate(15)->withQueryString();

        return view('customers.index', compact('customers'));
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

        Customer::create($validated);

        return back()->with('success', 'Data pelanggan baru berhasil ditambahkan.');
    }

public function update(Request $request, Customer $customer): RedirectResponse
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

public function destroy(Customer $customer): RedirectResponse
    {
        if ($customer->transactions()->exists()) {
            return back()->with('error', 'Pelanggan tidak dapat dihapus karena memiliki riwayat transaksi.');
        }

        $customer->delete();

        return back()->with('success', 'Data pelanggan berhasil dihapus.');
    }
}
