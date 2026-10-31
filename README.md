# KATARA LAUNDRY - SISTEM INFORMASI OPERASIONAL & KASIR POS

Sistem manajemen operasional laundry modern berbasis web untuk **Katara Laundry Dinoyo Malang**. Dibangun dengan arsitektur **Laravel 12 (PHP 8.3)**, **Tailwind CSS**, dan **Alpine.js**, sistem ini dirancang dengan seluruh nama komponen, controller, model, tampilan (views), dan rute dalam **Bahasa Indonesia**.

---

## 🌟 Fitur Utama Sistem

1. **Portal Publik & Pelacakan Mandiri (`PelacakanController`)**
   - Halaman Beranda interaktif dengan informasi gerai Dinoyo Malang.
   - Pelacakan status cucian mandiri berdasarkan nomor nota/invoice secara real-time.
   - Katalog layanan & kalkulator estimasi tarif.
   - Informasi 5 varian aroma parfum tahan lama, lokasi & jam operasional gerai, serta halaman tanya jawab (FAQ).

2. **Point of Sale (POS) & Transaksi Kasir (`KasirController` & `TransaksiController`)**
   - Transaksi cepat kasir dengan pintasan keyboard (F2).
   - Registrasi pelanggan baru instan dari modal kasir.
   - Perhitungan otomatis subtotal, diskon pelanggan reguler, dan kalkulasi kembalian.
   - Cetak struk termal ukuran standar 58mm & 80mm.
   - Dukungan pelunasan piutang/nota belum lunas (DP).

3. **Manajemen Slot Rak Fisik (`RakController`)**
   - Visualisasi tata letak 45 slot rak fisik (Blok A, Blok B, Blok C).
   - Penempatan cucian matang/siap ambil langsung ke nomor slot rak.
   - Pengosongan rak otomatis saat cucian diserahkan ke pelanggan.

4. **Buku Pelanggan (`PelangganController`)**
   - Manajemen basis data pelanggan (nama, WhatsApp, alamat, catatan khusus).
   - Penghitungan total transaksi dan loyalitas pelanggan.

5. **Katalog Layanan & Aroma Parfum (`LayananController`)**
   - Pengelolaan daftar tarif layanan (kiloan, satuan, bed cover, express).
   - Pengelolaan 5 varian parfum eksklusif.

6. **Stok & Bahan Baku Inventaris (`InventarisController`)**
   - Pencatatan stok deterjen, softener, plastik packing, gas pengering, dll.
   - Peringatan dini stok menipis (*low stock indicator*).

7. **Laporan & Analitik Keuangan (`LaporanController`)**
   - Rekap omzet harian, mingguan, dan bulanan.
   - Grafik performa layanan paling laris dan status pelunasan.

---

## 📂 Struktur Berkas Proyek (100% Bahasa Indonesia)

### 1. Model Data (`app/Models/`)
- [`Pengguna.php`](file:///c:/laragon/www/katara-laundry/app/Models/Pengguna.php) - Entitas autentikasi staf dan hak akses (pemilik/kasir).
- [`Pelanggan.php`](file:///c:/laragon/www/katara-laundry/app/Models/Pelanggan.php) - Data pelanggan dan riwayat transaksi.
- [`Layanan.php`](file:///c:/laragon/www/katara-laundry/app/Models/Layanan.php) - Katalog tarif dan jenis pengerjaan laundry.
- [`Parfum.php`](file:///c:/laragon/www/katara-laundry/app/Models/Parfum.php) - Varian wangi parfum cucian.
- [`SlotRak.php`](file:///c:/laragon/www/katara-laundry/app/Models/SlotRak.php) - Posisi penyimpanan fisik pakaian jadi (45 slot).
- [`Transaksi.php`](file:///c:/laragon/www/katara-laundry/app/Models/Transaksi.php) - Header nota transaksi dan alur status pengerjaan.
- [`DetailTransaksi.php`](file:///c:/laragon/www/katara-laundry/app/Models/DetailTransaksi.php) - Rincian item cucian pada nota.
- [`BarangInventaris.php`](file:///c:/laragon/www/katara-laundry/app/Models/BarangInventaris.php) - Bahan baku operasional gerai.
- [`LogWhatsapp.php`](file:///c:/laragon/www/katara-laundry/app/Models/LogWhatsapp.php) - Riwayat pesan notifikasi WhatsApp.

### 2. Pengendali / Controller (`app/Http/Controllers/`)
- [`AutentikasiController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/AutentikasiController.php) - Log masuk, keluar, dan akun demo staf.
- [`DasborController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/DasborController.php) - Rangkuman metrik dasbor utama staf.
- [`KasirController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/KasirController.php) - Operasional POS kasir baru.
- [`TransaksiController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/TransaksiController.php) - Riwayat alur pengerjaan, status nota, dan cetak struk.
- [`RakController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/RakController.php) - Manajemen penempatan slot rak.
- [`PelangganController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/PelangganController.php) - Manajemen buku pelanggan gerai.
- [`LayananController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/LayananController.php) - Tarif layanan & varian aroma.
- [`InventarisController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/InventarisController.php) - Manajemen stok bahan operasional.
- [`LaporanController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/LaporanController.php) - Laporan rekap omzet & keuangan.
- [`PelacakanController.php`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/PelacakanController.php) - Halaman publik dan pelacakan mandiri.

### 3. Tampilan Blade (`resources/views/`)
- `layouts/aplikasi.blade.php` - Tata letak dasbor staf internal.
- `layouts/publik.blade.php` - Tata letak portal pelanggan umum.
- `autentikasi/masuk.blade.php` - Halaman login staf.
- `dasbor/index.blade.php` - Dasbor utama operasional.
- `kasir/index.blade.php` - Tampilan Point of Sale (POS) kasir.
- `transaksi/` (`index.blade.php`, `detail.blade.php`, `struk.blade.php`) - Pengelolaan transaksi dan cetak nota.
- `rak/` (`index.blade.php`, `_kartu_slot.blade.php`) - Visualisasi rak penyimpanan 45 slot.
- `pelanggan/index.blade.php` - Manajemen buku pelanggan.
- `layanan/index.blade.php` - Katalog tarif layanan.
- `inventaris/index.blade.php` - Pemantauan stok bahan baku.
- `laporan/index.blade.php` - Rekap dan grafik laporan keuangan.
- `pelacakan/` (`index.blade.php`, `detail.blade.php`) - Hasil pelacakan nota publik.
- Halaman Publik Lainnya: `cara_pesan.blade.php`, `galeri.blade.php`, `kalkulator.blade.php`, `keunggulan.blade.php`, `lacak.blade.php`, `layanan.blade.php`, `lokasi.blade.php`, `parfum.blade.php`, `tanya_jawab.blade.php`.

---

## 🚀 Panduan Menjalankan Aplikasi di Laragon

1. Buka **Laragon**, pastikan layanan **Apache/Nginx** dan **MySQL** aktif.
2. Buka terminal proyek (`c:\laragon\www\katara-laundry`).
3. Jalankan migrasi dan seeder awal jika diperlukan:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
4. Verifikasi seluruh rute aktif:
   ```bash
   php artisan route:list
   ```
5. Akses sistem melalui peramban:
   - **Portal Publik**: `http://katara-laundry.test/` atau `http://localhost:8000/`
   - **Login Staf**: `http://katara-laundry.test/masuk` atau `http://katara-laundry.test/login`
     - Kasir: `kasir@kataralaundry.id` / `password`
     - Pemilik: `owner@kataralaundry.id` / `password`
