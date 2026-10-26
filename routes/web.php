<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrackingController::class, 'index'])->name('home');
Route::get('/lacak', [TrackingController::class, 'lacak'])->name('tracking.index');
Route::get('/lacak-nota', [TrackingController::class, 'lacak'])->name('public.lacak');
Route::post('/lacak/cari', [TrackingController::class, 'search'])->name('tracking.search');
Route::get('/lacak/{invoice}', [TrackingController::class, 'show'])->name('tracking.show');

Route::get('/layanan-tarif', [TrackingController::class, 'layanan'])->name('public.layanan');
Route::get('/layanan', [TrackingController::class, 'layanan']);
Route::get('/tarif', [TrackingController::class, 'layanan']);
Route::get('/kalkulator', [TrackingController::class, 'kalkulator'])->name('public.kalkulator');
Route::get('/estimasi-kalkulator', [TrackingController::class, 'kalkulator']);
Route::get('/keunggulan', [TrackingController::class, 'keunggulan'])->name('public.keunggulan');
Route::get('/galeri', [TrackingController::class, 'galeri'])->name('public.galeri');
Route::get('/galeri-gerai', [TrackingController::class, 'galeri']);
Route::get('/cara-pesan', [TrackingController::class, 'caraPesan'])->name('public.cara_pesan');
Route::get('/parfum', [TrackingController::class, 'parfum'])->name('public.parfum');
Route::get('/aroma-parfum', [TrackingController::class, 'parfum']);
Route::get('/faq', [TrackingController::class, 'faq'])->name('public.faq');
Route::get('/tanya-jawab', [TrackingController::class, 'faq']);
Route::get('/lokasi', [TrackingController::class, 'lokasi'])->name('public.lokasi');
Route::get('/lokasi-kontak', [TrackingController::class, 'lokasi']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
    Route::get('/demo-login/{role}', [AuthController::class, 'demoLogin'])->name('demo.login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kasir', [PosController::class, 'index'])->name('pos.index');
    Route::post('/kasir/transaksi', [PosController::class, 'store'])->name('pos.store');
    Route::post('/kasir/pelanggan-cepat', [PosController::class, 'quickStoreCustomer'])->name('pos.customer.quick');

    Route::get('/transaksi', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transaksi/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::patch('/transaksi/{transaction}/status', [TransactionController::class, 'updateStatus'])->name('transactions.status');
    Route::post('/transaksi/{transaction}/bayar', [TransactionController::class, 'settlePayment'])->name('transactions.settle');
    Route::get('/transaksi/{transaction}/cetak', [TransactionController::class, 'receipt'])->name('transactions.receipt');

    Route::get('/rak', [RackController::class, 'index'])->name('racks.index');
    Route::post('/rak/assign', [RackController::class, 'assign'])->name('racks.assign');
    Route::post('/rak/{rackSlot}/release', [RackController::class, 'release'])->name('racks.release');

    Route::get('/pelanggan', [CustomerController::class, 'index'])->name('customers.index');
    Route::post('/pelanggan', [CustomerController::class, 'store'])->name('customers.store');
    Route::put('/pelanggan/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/pelanggan/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

    Route::get('/kelola-layanan', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/layanan', [ServiceController::class, 'store'])->name('services.store');
    Route::put('/layanan/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::post('/layanan/parfum', [ServiceController::class, 'storePerfume'])->name('services.perfume.store');

    Route::get('/inventori', [InventoryController::class, 'index'])->name('inventory.index');
    Route::post('/inventori', [InventoryController::class, 'store'])->name('inventory.store');
    Route::put('/inventori/{inventory}', [InventoryController::class, 'update'])->name('inventory.update');

    Route::get('/laporan', [ReportController::class, 'index'])->name('reports.index');
});
