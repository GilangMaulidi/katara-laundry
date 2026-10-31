# Laporan Analisis Mendalam & Menyeluruh: Proyek Katara Laundry

Laporan ini menyajikan hasil audit teknis, dekonstruksi arsitektur, inspeksi basis data, verifikasi alur operasional, telaah keamanan (*security review*), serta evaluasi antarmuka pada seluruh repositori sistem informasi **Katara Laundry Dinoyo Malang**.

---

## 1. Ikhtisar Eksekutif & Karakteristik Proyek

Proyek **Katara Laundry** adalah aplikasi sistem otomasi dan tata kelola gerai binatu modern berbasis web yang mengintegrasikan dua antarmuka utama:
1. **Portal Publik & Pelacakan Mandiri (*Customer-Facing Web App*)**: Fasilitas pelacakan status cucian secara *real-time* berbasis nota/WhatsApp, kalkulator estimasi tarif dan waktu pengerjaan interaktif, transparansi 7 jaminan mutu, katalog tarif kiloan & satuan, profil 5 varian aroma parfum, serta integrasi peta lokasi gerai Dinoyo Malang.
2. **Sistem Operasional Kasir & Produksi (*Backoffice / POS & Shop Floor Management*)**: Kasir Point of Sales (POS) cepat dengan tombol pintas keyboard (F2), manajemen 45 slot rak fisik (Rak A, B, C) untuk mencegah cucian tertukar, pengelolaan inventori bahan baku (deterjen, gas LPG, plastik, kertas kasir), buku pelanggan, katalog layanan, pencatatan pembayaran cicilan/DP, serta pencetakan struk termal standar printer 58mm/80mm.

### Tech Stack Utama
- **Backend Framework**: [Laravel 11 / 12 (Core v13.39.0 / PHP 8.3)](file:///c:/laragon/www/katara-laundry/composer.json)
- **Database Engine**: MySQL / SQLite dengan konvensi skema bahasa Indonesia dan *attribute aliasing* dua arah.
- **Frontend Architecture**: Blade Templating Engine, Tailwind CSS, FontAwesome 6.5.1, Google Fonts (*Plus Jakarta Sans* & *Courier Prime* untuk struk).
- **Bundler & Build Tooling**: Vite 8.0, `@tailwindcss/vite`, Laravel Vite Plugin.
- **Testing Suite**: PHPUnit 12.5 dengan pengujian *Feature* dan *Unit*.

---

## 2. Struktur Direktori dan Inventarisasi File (100% Bahasa Indonesia)

Berikut adalah pemetaan struktural dari seluruh folder dan komponen inti di dalam repositori setelah standarisasi nama file ke Bahasa Indonesia:

```
katara-laundry/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AutentikasiController.php      # Otentikasi sesi, login multi-identifier, demo login
│   │   │   ├── Controller.php                 # Base controller Laravel bawaan framework
│   │   │   ├── DasborController.php           # Agregasi metrik omset harian, rak fisik, & tren 7 hari
│   │   │   ├── InventarisController.php       # Pemantauan stok bahan baku & indikator batas minimum
│   │   │   ├── KasirController.php            # Kasir POS, pembuatan nota otomatis, kalkulasi DP/lunas
│   │   │   ├── LaporanController.php          # Rekapitulasi kas, omset metode bayar, & breakdown layanan
│   │   │   ├── LayananController.php          # Tata kelola tarif layanan & katalog varian aroma parfum
│   │   │   ├── PelacakanController.php        # Endpoint pelacakan nota publik & view dinamis web
│   │   │   ├── PelangganController.php        # Manajemen buku pelanggan & proteksi integritas transaksi
│   │   │   ├── RakController.php              # Visualisasi denah 45 slot rak (A-01 s/d C-15) & penempatan
│   │   │   └── TransaksiController.php        # Siklus hidup status pengerjaan, pelunasan sisa tagihan, cetak struk
│   ├── Models/
│   │   ├── BarangInventaris.php               # Model Bahan Baku (tabel: barang_inventaris)
│   │   ├── DetailTransaksi.php                # Model Detail Transaksi (tabel: detail_transaksi)
│   │   ├── Layanan.php                        # Model Katalog Tarif (tabel: layanan)
│   │   ├── LogWhatsapp.php                    # Model Pencatatan Notifikasi WhatsApp (tabel: log_whatsapp)
│   │   ├── Parfum.php                         # Model Varian Aroma (tabel: parfum)
│   │   ├── Pelanggan.php                      # Model Pelanggan (tabel: pelanggan) + alias accessor/mutator
│   │   ├── Pengguna.php                       # Model Pengguna Sistem (tabel: pengguna)
│   │   ├── SlotRak.php                        # Model Slot Rak (tabel: slot_rak)
│   │   └── Transaksi.php                      # Model Transaksi Utama (tabel: transaksi)
│   └── Providers/
│       └── AppServiceProvider.php             # Konfigurasi bootstrap layanan aplikasi
├── bootstrap/
│   ├── app.php                                # Entry point konfigurasi routing, exception, & middleware
│   └── providers.php                          # Registrasi service provider
├── config/                                    # Berkas konfigurasi bawaan framework (app, auth, db, dsb.)
├── database/
│   ├── factories/
│   │   └── PenggunaFactory.php                # Factory untuk testing entitas Pengguna
│   ├── migrations/                            # Berkas migrasi database struktural
│   ├── seeders/
│   │   └── DatabaseSeeder.php                 # Seeder komprehensif data awal gerai Dinoyo
│   └── database.sqlite                        # Database file lokal SQLite
├── lang/
│   ├── id.json                                # Kamus lokalisasi istilah antarmuka bahasa Indonesia
│   ├── en/ & id/                              # Direktori validasi, autentikasi, & pagination bawaan
├── public/
│   ├── images/                                # Aset media foto asli gerai, logo, mesin, & avatar
│   ├── index.php                              # Web server entry point
│   └── .htaccess                              # Apache rewrite rules
├── resources/
│   ├── css/app.css                            # Konfigurasi Tailwind CSS
│   ├── js/app.js                              # Skrip JS frontend
│   └── views/
│       ├── layouts/
│       │   ├── aplikasi.blade.php             # Layout dasbor internal kasir/admin dengan sidebar & navigasi
│       │   └── publik.blade.php               # Layout beranda publik dengan header, footer, & modal bantuan
│       ├── autentikasi/
│       │   └── masuk.blade.php                # Form masuk kasir/admin dengan tombol instan demo login
│       ├── dasbor/
│       │   └── index.blade.php                # Dasbor statistik, keterisian rak, dan grafik tren omset
│       ├── kasir/
│       │   └── index.blade.php                # Antarmuka kasir POS interaktif + modal tambah pelanggan cepat
│       ├── transaksi/
│       │   ├── index.blade.php                # Daftar tabel riwayat transaksi, filter status & tanggal
│       │   ├── detail.blade.php               # Rincian nota, alur pengerjaan, tombol update status & rak
│       │   └── struk.blade.php                # Format cetak struk termal ramah printer kasir 58mm/80mm
│       ├── rak/
│       │   ├── index.blade.php                # Visualisasi grid 45 slot rak fisik (Blok A, B, C)
│       │   └── _kartu_slot.blade.php          # Komponen kartu status slot rak terisi/kosong
│       ├── pelanggan/
│       │   └── index.blade.php                # Data buku pelanggan, riwayat order, modal tambah/edit
│       ├── layanan/
│       │   └── index.blade.php                # Tabel tarif per kg/satuan & modal tambah varian parfum
│       ├── inventaris/
│       │   └── index.blade.php                # Manajemen stok deterjen, parfum, plastik & alert minimum
│       ├── laporan/
│       │   └── index.blade.php                # Rekapitulasi omset, laba, piutang, dan export data
│       ├── pelacakan/
│       │   ├── index.blade.php                # Form pelacakan publik & pencarian nomor nota
│       │   └── detail.blade.php               # Detail timeline pengerjaan nota pelanggan
│       ├── cara_pesan.blade.php               # Panduan alur laundry di gerai
│       ├── galeri.blade.php                   # Foto gerai dan fasilitas
│       ├── kalkulator.blade.php               # Kalkulator simulasi biaya laundry
│       ├── keunggulan.blade.php               # 7 Jaminan mutu Katara Laundry
│       ├── lacak.blade.php                    # Halaman pencarian nota cepat
│       ├── layanan.blade.php                  # Halaman katalog tarif publik
│       ├── lokasi.blade.php                   # Peta Google Maps dan kontak
│       ├── parfum.blade.php                   # Deskripsi 5 aroma parfum khas
│       └── tanya_jawab.blade.php              # FAQ pertanyaan seputar laundry
├── routes/
│   ├── web.php                                # Seluruh rute aplikasi (publik & staf terproteksi)
│   └── console.php                            # Perintah CLI artisan kustom
└── tests/
    ├── Feature/
    │   ├── HalamanPublikTest.php              # Pengujian aksesibilitas seluruh halaman web publik
    │   ├── TransaksiKasirTest.php             # Pengujian pembuatan transaksi kasir, kalkulasi & nota
    │   └── UjiSistemMenyeluruhTest.php        # Pengujian siklus hidup alur laundry, rak, dan laporan
    ├── Unit/
    │   └── ContohUnitTest.php                 # Pengujian unit kalkulasi logika bisnis
    └── TestCase.php                           # Base test case bawaan framework
```

---

## 3. Analisis Arsitektur Basis Data & Eloquent ORM

### Skema Tabel (Indonesian Nomenclature)
Database dirancang dengan nama tabel dan kolom bahasa Indonesia yang deskriptif:

| Nama Tabel | Deskripsi | Kolom Kunci / Relasi |
| :--- | :--- | :--- |
| `pengguna` | Pengguna internal (Admin, Kasir, Operator) | `id`, `nama`, `email`, `password`, `peran`, `aktif` |
| `pelanggan` | Data profil konsumen laundry | `id`, `nama`, `nomor_telepon` (index), `alamat`, `total_pesanan` |
| `layanan` | Katalog jenis layanan cuci | `id`, `nama`, `kategori` (`kiloan`, `satuan`), `satuan`, `harga`, `durasi_jam`, `minimal_order` |
| `parfum` | Pilihan varian aroma gratis | `id`, `nama`, `karakter_aroma`, `deskripsi`, `aktif` |
| `slot_rak` | Slot fisik penyimpanan pakaian | `id`, `kode_rak`, `nomor_slot`, `kode` (unique, misal `A-01`), `status` (`tersedia`, `terisi`) |
| `transaksi` | Entitas induk transaksi cucian | `id`, `nomor_nota` (unique), `pelanggan_id`, `pengguna_id`, `parfum_id`, `slot_rak_id`, `status`, `status_pembayaran`, `metode_pembayaran`, `total_harga`, `jumlah_dibayar`, `sisa_tagihan`, `tanggal_masuk`, `estimasi_selesai`, `tanggal_selesai`, `tanggal_ambil` |
| `detail_transaksi` | Baris item pesanan dalam transaksi | `id`, `transaksi_id`, `layanan_id`, `kuantitas`, `harga_satuan`, `subtotal` |
| `barang_inventaris` | Bahan operasional & stok | `id`, `nama`, `kategori`, `satuan`, `stok`, `stok_minimal`, `biaya_per_satuan` |
| `log_whatsapp` | Riwayat pesan gateway WhatsApp | `id`, `transaksi_id`, `pelanggan_id`, `nomor_telepon`, `jenis_pesan`, `pesan`, `status`, `dikirim_pada` |

### Pola Dual-Attribute Bridge (Accessor & Mutator)
Salah satu keunggulan arsitektur pada lapisan model ([`Customer`](file:///c:/laragon/www/katara-laundry/app/Models/Customer.php), [`Transaction`](file:///c:/laragon/www/katara-laundry/app/Models/Transaction.php), [`User`](file:///c:/laragon/www/katara-laundry/app/Models/User.php), [`RackSlot`](file:///c:/laragon/www/katara-laundry/app/Models/RackSlot.php), [`Service`](file:///c:/laragon/www/katara-laundry/app/Models/Service.php), [`TransactionItem`](file:///c:/laragon/www/katara-laundry/app/Models/TransactionItem.php), [`InventoryItem`](file:///c:/laragon/www/katara-laundry/app/Models/InventoryItem.php)) adalah penyediaan getter/setter dwibahasa:
- Kolom database: `nomor_nota` $\leftrightarrow$ alias kode: `invoice_number`
- Kolom database: `pelanggan_id` $\leftrightarrow$ alias kode: `customer_id`
- Kolom database: `total_harga` $\leftrightarrow$ alias kode: `total_price`
- Kolom database: `status_pembayaran` $\leftrightarrow$ alias kode: `payment_status`

Hal ini menjaga konsistensi database lokal berbahasa Indonesia sekaligus memfasilitasi penulisan kode controller, API JSON, dan test suite berbahasa Inggris atau standar Laravel tanpa konflik.

---

## 4. Evaluasi Alur Logika Bisnis & Pengontrol (Controllers)

### 1. [`KasirController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/KasirController.php)
- **Kalkulasi Otomatis Pembayaran**: Sistem mengevaluasi `amount_paid` terhadap `finalTotal`. Jika pembayaran sama atau melebihi tagihan, `status_pembayaran` otomatis disetel menjadi `lunas` dan `sisa_tagihan = 0`. Jika kurang dari total tagihan namun lebih dari 0, disetel sebagai `uang_muka` (DP). Jika 0, disetel `belum_bayar`.
- **Estimasi Waktu Selesai Dinamis**: Waktu estimasi selesai (`estimasi_selesai`) dihitung dari `now() + max(durasi_jam)` dari seluruh item layanan yang dimasukkan dalam keranjang kasir.
- **Transaksi Database Terisolasi**: Proses pembukuan transaksi menggunakan closure `DB::transaction(...)` guna menjamin bahwa pembuatan nota, entri item detail, peningkatan `total_pesanan` pelanggan, dan entri log WhatsApp berhasil secara atomik (*atomic transaction*).

### 2. [`TransaksiController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/TransaksiController.php) & [`RakController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/RakController.php)
- **State Machine Cucian**: Alur tahapan terdefinisi secara berurutan:
  $$\text{Menunggu Diproses} \longrightarrow \text{Sedang Dicuci} \longrightarrow \text{Sedang Dikeringkan} \longrightarrow \text{Sedang Disetrika} \longrightarrow \text{Sedang Dikemas} \longrightarrow \text{Siap Diambil} \longrightarrow \text{Selesai}$$
- **Sinkronisasi Slot Rak Fisik**:
  - Saat status diubah menjadi `siap_diambil`, operator wajib/dapat memilih slot rak kosong (misal `B-04`). Sistem otomatis menandai slot rak tersebut menjadi `terisi`.
  - Jika cucian dipindahkan ke rak lain, slot lama otomatis dikembalikan menjadi `tersedia`.
  - Saat status beralih menjadi `selesai` (atau tombol "Ambil" ditekan pada visualisasi rak), slot rak otomatis dibebaskan kembali (`tersedia`) dan tanggal penyerahan (`tanggal_ambil`) dicatat.

### 3. [`PelacakanController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/PelacakanController.php)
- **Pencarian Cerdas**: Pelanggan dapat melacak pesanannya menggunakan **Nomor Nota** (misal `KTR-20260906-0001`) maupun **Nomor WhatsApp**.
- **Dukungan Respons Ganda**: Mendukung respons halaman penuh (*Blade view redirect*) maupun respons JSON untuk widget pencarian asinkronus (AJAX) tanpa *page refresh*.

### 4. [`DasborController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/DasborController.php) & [`LaporanController`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/LaporanController.php)
- Menyajikan *real-time metric card* untuk omset masuk harian, pesanan aktif, cucian siap ambil, dan persentase keterisian 45 slot rak.
- Laporan menyediakan pemilahan kas per metode bayar (`Tunai`, `QRIS`, `Transfer`) dan rekapitulasi volume per layanan.

---

## 5. Analisis Antarmuka & Tata Letak Frontend

1. **Tata Visual Konsisten & Representatif**:
   Warna tema menggunakan palet profesional biru bahari (*Sky/Brand blue* `#0c8fe8` & `#0284c7`), abu-abu netral slate, aksen peringatan amber, serta aksen keberhasilan emerald.
2. **Desain Struk Termal Kasir ([`transaksi/struk.blade.php`](file:///c:/laragon/www/katara-laundry/resources/views/transaksi/struk.blade.php))**:
   Disesuaikan khusus untuk printer kasir termal dengan font *Courier Prime*, pemisah garis putus-putus (*dashed borders*), dan blok `@media print` yang menyembunyikan navigasi (*no-print*) serta membatasi lebar cetak otomatis ke 58mm/80mm.
3. **Ergonomi Kasir POS ([`kasir/index.blade.php`](file:///c:/laragon/www/katara-laundry/resources/views/kasir/index.blade.php))**:
   Disediakan tombol jalan pintas cepat (*shortcut*) `F2` untuk fokus ke kasir, filter tab cepat kategori (Kiloan / Satuan), modal pendaftaran pelanggan baru secara kilat (*quick store*), serta pengalihan otomatis ke cetak struk pasca-transaksi.
4. **Visualisasi Rak Fisik Gerai ([`rak/index.blade.php`](file:///c:/laragon/www/katara-laundry/resources/views/rak/index.blade.php))**:
   Meniru tata letak fisik 3 unit rak gerai (Rak Sayap Kiri A, Rak Tengah B, Rak Sayap Kanan C) masing-masing 15 baris, memberikan staf kemudahan menemukan lokasi cucian pelanggan saat proses pengambilan pakaian.

---

## 6. Uji Mutu Sistem (Testing Suite Analysis)

Pengujian perangkat lunak diatur dalam [`tests/Feature/`](file:///c:/laragon/www/katara-laundry/tests/Feature/) dengan cakupan yang sangat solid:
- [`UjiSistemMenyeluruhTest.php`](file:///c:/laragon/www/katara-laundry/tests/Feature/UjiSistemMenyeluruhTest.php): Menguji siklus hidup CRUD pelanggan, pencegahan penghapusan pelanggan yang memiliki relasi transaksi (*foreign key integrity check*), validasi alur rak, inventori, dan pemfilteran laporan.
- [`TransaksiKasirTest.php`](file:///c:/laragon/www/katara-laundry/tests/Feature/TransaksiKasirTest.php): Menguji pembuatan transaksi kasir, perhitungan subtotal layanan jam, penanganan diskon, penentuan status uang muka/lunas, serta pencatatan log notifikasi WhatsApp.
- [`HalamanPublikTest.php`](file:///c:/laragon/www/katara-laundry/tests/Feature/HalamanPublikTest.php): Memvalidasi respons HTTP 200 dan keberadaan elemen UI penting pada seluruh halaman publik dan modul autentikasi.

---

## 7. Temuan Audit Kritis & Rekomendasi Peningkatan

> [!WARNING]
> **1. Jalur Akses Bebas Sandi Demo Login ([`AutentikasiController@demoLogin`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/AutentikasiController.php#L64-L84))**
> Rute `/demo-login/{role}` memungkinkan login instan sebagai Administrator atau Kasir tanpa verifikasi kata sandi. 
> - **Dampak**: Jika sistem dideploy ke lingkungan produksi (*production*), rute ini merupakan celah *privilege escalation* kritikal.
> - **Rekomendasi**: Tambahkan pembatasan lingkungan di [`routes/web.php`](file:///c:/laragon/www/katara-laundry/routes/web.php) atau di controller:
>   ```php
>   abort_unless(app()->environment('local'), 403, 'Akses demo dinonaktifkan di server produksi.');
>   ```

> [!IMPORTANT]
> **2. Skema Penomoran Nota Rentan *Race Condition* ([`KasirController@store`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/KasirController.php#L80-L83))**
> Pembuatan nomor nota saat ini menggunakan:
> ```php
> $todayCount = Transaksi::whereDate('created_at', Carbon::today('Asia/Jakarta'))->count() + 1;
> $sequence = str_pad((string) $todayCount, 4, '0', STR_PAD_LEFT);
> $invoiceNumber = "KTR-{$datePrefix}-{$sequence}";
> ```
> - **Dampak**: Jika dua kasir memproses transaksi pada detik yang bersamaan, atau jika ada data transaksi yang dihapus, nilai `count() + 1` dapat bentrok (*duplicate key violation* pada kolom unik `nomor_nota`).
> - **Rekomendasi**: Gunakan pencarian nilai maksimum urutan hari ini (`max('id')` atau *lock-for-update*), atau tambahkan komponen angka acak / mikrodetik pendek pada akhir nota:
>   ```php
>   $latest = Transaksi::whereDate('tanggal_masuk', today())->lockForUpdate()->latest('id')->first();
>   ```

> [!NOTE]
> **3. Optimasi Kueri Dasbor 7 Hari ([`DasborController@index`](file:///c:/laragon/www/katara-laundry/app/Http/Controllers/DasborController.php#L45-L70))**
> Grafik 7 hari menjalankan perulangan *for loop* sebanyak 7 kali, mengeksekusi 1 kueri `sum()` dan 1 kueri `count()` di tiap putaran (total 14 kueri terpisah).
> - **Rekomendasi**: Ganti dengan 1 kueri agregasi tunggal memanfaatkan `groupBy(DB::raw('DATE(tanggal_masuk)'))`.

> [!TIP]
> **4. Integrasi Pemotongan Stok Bahan Baku Otomatis**
> Modul `BarangInventaris` sudah dilengkapi dengan pemantauan stok menipis (`is_low_stock`). Namun, transaksi kasir belum memotong stok deterjen/parfum/kemasan secara otomatis. Di masa mendatang, dapat ditambahkan relasi konsumsi bahan baku per transaksi agar stok berkurang secara presisi sesuai volume pakaian yang dicuci.

> [!TIP]
> **5. Pemanfaatan Bundler Vite untuk Tailwind CSS**
> Layout [`aplikasi.blade.php`](file:///c:/laragon/www/katara-laundry/resources/views/layouts/aplikasi.blade.php) dan [`publik.blade.php`](file:///c:/laragon/www/katara-laundry/resources/views/layouts/publik.blade.php) saat ini masih memuat skrip CDN `<script src="https://cdn.tailwindcss.com"></script>`. Proyek sudah memiliki dependensi `@tailwindcss/vite` dan `resources/css/app.css`. Menjalankan kompilasi aset via Vite (`npm run build`) akan mengoptimalkan kecepatan *render*, menghilangkan ketergantungan koneksi internet pihak ketiga (*offline capability*), dan memangkas ukuran halaman.

---

## 8. Ringkasan Evaluasi Matriks Kesiapan Sistem

| Dimensi | Skor (1-10) | Catatan Evaluasi |
| :--- | :---: | :--- |
| **Kelengkapan Fitur** | **9.5** | Alur dari pendaftaran pelanggan, POS, rak 45 slot, pelacakan nota, hingga struk termal sangat matang dan siap pakai. |
| **Desain & UX** | **9.5** | Desain modern, responsif untuk ponsel/tablet kasir, informatif, dan memiliki visualisasi denah rak yang sangat praktis. |
| **Struktur Kode** | **9.0** | Struktur controller dan model sangat rapi dengan dukungan dual-attribute bridge yang memudahkan ekspansi. |
| **Integritas Data** | **8.5** | Relasi antar tabel terdefinisi baik dengan `cascadeOnDelete` atau `nullOnDelete` yang tepat. Perlu mitigasi duplikasi nomor nota pada konkurensi tinggi. |
| **Keamanan (Security)** | **7.5** | Perlu membatasi jalur `/demo-login` ke lingkungan `local`, serta menambahkan otorisasi peran (*role middleware*) untuk hak akses khusus admin/owner. |
| **Kesiapan Produksi** | **8.8** | Aplikasi sangat siap digunakan di gerai fisik setelah penyempurnaan kecil pada rute demo dan kompilasi aset frontend. |
