<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelacakanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PelacakanController::class, 'index'])->name('home');
Route::get('/beranda', [PelacakanController::class, 'index'])->name('beranda');

Route::get('/lacak', [PelacakanController::class, 'lacak'])->name('tracking.index');
Route::get('/pelacakan', [PelacakanController::class, 'lacak'])->name('pelacakan.index');
Route::get('/lacak-nota', [PelacakanController::class, 'lacak'])->name('public.lacak');
Route::post('/lacak/cari', [PelacakanController::class, 'search'])->name('tracking.search');
Route::post('/pelacakan/cari', [PelacakanController::class, 'search'])->name('pelacakan.search');
Route::get('/lacak/{invoice}', [PelacakanController::class, 'show'])->name('tracking.show');
Route::get('/pelacakan/{invoice}', [PelacakanController::class, 'show'])->name('pelacakan.show');

Route::get('/layanan-tarif', [PelacakanController::class, 'layanan'])->name('public.layanan');
Route::get('/layanan', [PelacakanController::class, 'layanan']);
Route::get('/tarif', [PelacakanController::class, 'layanan']);
Route::get('/kalkulator', [PelacakanController::class, 'kalkulator'])->name('public.kalkulator');
Route::get('/estimasi-kalkulator', [PelacakanController::class, 'kalkulator']);
Route::get('/keunggulan', [PelacakanController::class, 'keunggulan'])->name('public.keunggulan');
Route::get('/galeri', [PelacakanController::class, 'galeri'])->name('public.galeri');
Route::get('/galeri-gerai', [PelacakanController::class, 'galeri']);
Route::get('/cara-pesan', [PelacakanController::class, 'caraPesan'])->name('public.cara_pesan');
Route::get('/parfum', [PelacakanController::class, 'parfum'])->name('public.parfum');
Route::get('/aroma-parfum', [PelacakanController::class, 'parfum']);
Route::get('/faq', [PelacakanController::class, 'faq'])->name('public.faq');
Route::get('/tanya-jawab', [PelacakanController::class, 'faq'])->name('public.tanya_jawab');
Route::get('/lokasi', [PelacakanController::class, 'lokasi'])->name('public.lokasi');
Route::get('/lokasi-kontak', [PelacakanController::class, 'lokasi']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [AutentikasiController::class, 'showLoginForm'])->name('login');
    Route::get('/masuk', [AutentikasiController::class, 'showLoginForm'])->name('masuk');
    Route::post('/login', [AutentikasiController::class, 'login'])->name('login.attempt');
    Route::post('/masuk', [AutentikasiController::class, 'login'])->name('masuk.aksi');
    Route::get('/demo-login/{role}', [AutentikasiController::class, 'demoLogin'])->name('demo.login');
});

Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/keluar', [AutentikasiController::class, 'logout'])->name('keluar')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DasborController::class, 'index'])->name('dashboard');
    Route::get('/dasbor', [DasborController::class, 'index'])->name('dasbor');

    Route::get('/kasir', [KasirController::class, 'index'])->name('pos.index');
    Route::get('/pos', [KasirController::class, 'index'])->name('kasir.index');
    Route::get('/kasir/cari-pelanggan', [KasirController::class, 'searchCustomers'])->name('kasir.customer.search');
    Route::get('/pos/cari-pelanggan', [KasirController::class, 'searchCustomers'])->name('pos.customer.search');
    Route::post('/kasir/transaksi', [KasirController::class, 'store'])->name('pos.store');
    Route::post('/kasir/buat-transaksi', [KasirController::class, 'store'])->name('kasir.store');
    Route::post('/kasir/pelanggan-cepat', [KasirController::class, 'quickStoreCustomer'])->name('pos.customer.quick');
    Route::post('/kasir/tambah-pelanggan-cepat', [KasirController::class, 'quickStoreCustomer'])->name('kasir.customer.quick');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transactions.index');
    Route::get('/riwayat-transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/{transaction}', [TransaksiController::class, 'show'])->name('transactions.show');
    Route::get('/transaksi/{transaction}/detail', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::patch('/transaksi/{transaction}/status', [TransaksiController::class, 'updateStatus'])->name('transactions.status');
    Route::patch('/transaksi/{transaction}/perbarui-status', [TransaksiController::class, 'updateStatus'])->name('transaksi.status');
    Route::post('/transaksi/{transaction}/bayar', [TransaksiController::class, 'settlePayment'])->name('transactions.settle');
    Route::post('/transaksi/{transaction}/pelunasan', [TransaksiController::class, 'settlePayment'])->name('transaksi.settle');
    Route::get('/transaksi/{transaction}/cetak', [TransaksiController::class, 'receipt'])->name('transactions.receipt');
    Route::get('/transaksi/{transaction}/struk', [TransaksiController::class, 'receipt'])->name('transaksi.receipt');

    Route::get('/rak', [RakController::class, 'index'])->name('racks.index');
    Route::get('/slot-rak', [RakController::class, 'index'])->name('rak.index');
    Route::post('/rak/assign', [RakController::class, 'assign'])->name('racks.assign');
    Route::post('/rak/tempatkan', [RakController::class, 'assign'])->name('rak.assign');
    Route::post('/rak/{rackSlot}/release', [RakController::class, 'release'])->name('racks.release');
    Route::post('/rak/{rackSlot}/kosongkan', [RakController::class, 'release'])->name('rak.release');

    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('customers.index');
    Route::get('/data-pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::post('/pelanggan', [PelangganController::class, 'store'])->name('customers.store');
    Route::post('/pelanggan/simpan', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::put('/pelanggan/{customer}', [PelangganController::class, 'update'])->name('customers.update');
    Route::put('/pelanggan/{customer}/perbarui', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('/pelanggan/{customer}', [PelangganController::class, 'destroy'])->name('customers.destroy');
    Route::delete('/pelanggan/{customer}/hapus', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

    Route::get('/kelola-layanan', [LayananController::class, 'index'])->name('services.index');
    Route::get('/katalog-layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::post('/layanan', [LayananController::class, 'store'])->name('services.store');
    Route::post('/layanan/simpan', [LayananController::class, 'store'])->name('layanan.store');
    Route::put('/layanan/{service}', [LayananController::class, 'update'])->name('services.update');
    Route::put('/layanan/{service}/perbarui', [LayananController::class, 'update'])->name('layanan.update');
    Route::post('/layanan/parfum', [LayananController::class, 'storePerfume'])->name('services.perfume.store');
    Route::post('/layanan/parfum/simpan', [LayananController::class, 'storePerfume'])->name('layanan.parfum.store');

    Route::get('/inventori', [InventarisController::class, 'index'])->name('inventory.index');
    Route::get('/inventaris', [InventarisController::class, 'index'])->name('inventaris.index');
    Route::post('/inventori', [InventarisController::class, 'store'])->name('inventory.store');
    Route::post('/inventaris/simpan', [InventarisController::class, 'store'])->name('inventaris.store');
    Route::put('/inventori/{inventory}', [InventarisController::class, 'update'])->name('inventory.update');
    Route::put('/inventaris/{inventory}/perbarui', [InventarisController::class, 'update'])->name('inventaris.update');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('reports.index');
    Route::get('/laporan-keuangan', [LaporanController::class, 'index'])->name('laporan.index');
});
