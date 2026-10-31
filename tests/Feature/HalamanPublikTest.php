<?php

namespace Tests\Feature;

use App\Models\Pelanggan;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class HalamanPublikTest extends TestCase
{
    use RefreshDatabase;

    public function test_halaman_beranda_publik_berhasil_diakses(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('KATARA LAUNDRY');
        $response->assertSee('Lacak Status Pakaian Anda');
        $response->assertSee('Mengapa Katara Laundry Menjadi Pilihan Terpercaya?');
        $response->assertSee('Standar Pengerjaan Katara Laundry');
        $response->assertSee('5 Pilihan Aroma Parfum Pakaian');
        $response->assertSee('Dipercaya Mahasiswa & Warga Dinoyo', false);
        $response->assertSee('Galeri Gerai & Operasional Katara Dinoyo', false);
        $response->assertSee('Pertanyaan yang Sering Diajukan');
        $response->assertSee('Aksi Cepat Mobile');
    }

    public function test_halaman_login_staf_berhasil_diakses(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Masuk ke Sistem Kasir');
    }

    public function test_demo_login_kasir_berfungsi(): void
    {
        Pengguna::create([
            'nama' => 'Kasir Demo',
            'email' => 'kasir@kataralaundry.com',
            'password' => bcrypt('password'),
            'peran' => 'kasir',
            'aktif' => true,
        ]);

        $response = $this->get('/demo-login/kasir');

        $response->assertRedirect('/dasbor');
        $this->assertAuthenticated();
    }

    public function test_demo_login_diblokir_pada_lingkungan_produksi(): void
    {
        $this->app['env'] = 'production';

        $response = $this->get('/demo-login/kasir');

        $response->assertStatus(403);
        $this->assertGuest();
    }

    public function test_login_wajib_memasukkan_nama_dan_password(): void
    {
        $response = $this->post('/login', [
            'nama' => '',
            'password' => '',
        ]);

        $response->assertSessionHasErrors(['nama', 'password']);
        $this->assertGuest();
    }

    public function test_login_berhasil_dengan_nama_staf_dan_password(): void
    {
        $user = Pengguna::create([
            'nama' => 'Budi Kasir Dinoyo',
            'email' => 'budi@kataralaundry.com',
            'password' => Hash::make('rahasia123'),
            'peran' => 'kasir',
            'aktif' => true,
        ]);

        $response = $this->post('/login', [
            'nama' => 'Budi Kasir Dinoyo',
            'password' => 'rahasia123',
        ]);

        $response->assertRedirect('/dasbor');
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_berhasil_dengan_email_dan_password(): void
    {
        $user = Pengguna::create([
            'nama' => 'Siti Kasir',
            'email' => 'siti@kataralaundry.com',
            'password' => Hash::make('rahasia123'),
            'peran' => 'kasir',
            'aktif' => true,
        ]);

        $response = $this->post('/login', [
            'nama' => 'siti@kataralaundry.com',
            'password' => 'rahasia123',
        ]);

        $response->assertRedirect('/dasbor');
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_gagal_jika_password_salah(): void
    {
        Pengguna::create([
            'nama' => 'Agus Operator',
            'email' => 'agus@kataralaundry.com',
            'password' => Hash::make('rahasia123'),
            'peran' => 'operator',
            'aktif' => true,
        ]);

        $response = $this->post('/login', [
            'nama' => 'Agus Operator',
            'password' => 'passwordsalah',
        ]);

        $response->assertSessionHasErrors(['nama']);
        $this->assertGuest();
    }

    public function test_pelacakan_publik_dengan_nomor_nota(): void
    {
        $cust = Pelanggan::create([
            'nama' => 'Fauzi Test',
            'nomor_telepon' => '08123456789',
        ]);

        $tx = Transaksi::create([
            'nomor_nota' => 'KTR-TEST-0001',
            'pelanggan_id' => $cust->id,
            'status' => 'sedang_dicuci',
            'status_pembayaran' => 'lunas',
            'metode_pembayaran' => 'qris',
            'total_harga' => 35000,
            'jumlah_dibayar' => 35000,
            'tanggal_masuk' => now(),
        ]);

        $response = $this->get('/lacak/KTR-TEST-0001');

        $response->assertStatus(200);
        $response->assertSee('KTR-TEST-0001');
        $response->assertSee('Fauzi Test');
        $response->assertSee('Sedang Dicuci');
    }

    public function test_pelacakan_publik_via_api_json_pop_up(): void
    {
        $cust = Pelanggan::create([
            'nama' => 'Rina PopUp',
            'nomor_telepon' => '089988776655',
        ]);

        Transaksi::create([
            'nomor_nota' => 'KTR-POP-0001',
            'pelanggan_id' => $cust->id,
            'status' => 'siap_diambil',
            'status_pembayaran' => 'lunas',
            'metode_pembayaran' => 'tunai',
            'total_harga' => 25000,
            'jumlah_dibayar' => 25000,
            'tanggal_masuk' => now(),
        ]);

        $responseNota = $this->postJson('/lacak/cari', [
            'invoice_number' => 'KTR-POP-0001',
        ]);

        $responseNota->assertStatus(200);
        $responseNota->assertJson([
            'success' => true,
            'data' => [
                'invoice_number' => 'KTR-POP-0001',
                'customer_name' => 'Rina PopUp',
                'status' => 'siap_diambil',
                'is_paid' => true,
            ],
        ]);

        $responseWa = $this->postJson('/lacak/cari', [
            'invoice_number' => '089988776655',
        ]);

        $responseWa->assertStatus(200);
        $responseWa->assertJson([
            'success' => true,
            'data' => [
                'invoice_number' => 'KTR-POP-0001',
            ],
        ]);

        $responseNotFound = $this->postJson('/lacak/cari', [
            'invoice_number' => 'KTR-NOT-FOUND-999',
        ]);

        $responseNotFound->assertStatus(404);
        $responseNotFound->assertJson([
            'success' => false,
        ]);
    }

    public function test_halaman_mandiri_layanan_dan_tarif_berhasil_diakses(): void
    {
        $response = $this->get('/layanan-tarif');
        $response->assertStatus(200);
        $response->assertSee('Katalog Layanan & Tarif Transparan', false);
        $response->assertSee('Pilihan Paket Cuci & Perawatan', false);

        $aliasResponse = $this->get('/layanan');
        $aliasResponse->assertStatus(200);
    }

    public function test_halaman_mandiri_kalkulator_berhasil_diakses(): void
    {
        $response = $this->get('/kalkulator');
        $response->assertStatus(200);
        $response->assertSee('Kalkulator Estimasi Biaya & Waktu');
        $response->assertSee('Konfigurasi Pilihan Cucian');
    }

    public function test_halaman_mandiri_keunggulan_berhasil_diakses(): void
    {
        $response = $this->get('/keunggulan');
        $response->assertStatus(200);
        $response->assertSee('Mengapa Memilih Katara Laundry?');
        $response->assertSee('6 Standar Unggulan Tanpa Kompromi');
    }

    public function test_halaman_mandiri_galeri_berhasil_diakses(): void
    {
        $response = $this->get('/galeri');
        $response->assertStatus(200);
        $response->assertSee('Fasilitas Produksi');
        $response->assertSee('Fasilitas & Suasana Gerai', false);
    }

    public function test_halaman_mandiri_cara_pesan_berhasil_diakses(): void
    {
        $response = $this->get('/cara-pesan');
        $response->assertStatus(200);
        $response->assertSee('5 Langkah Mudah Mencuci di Katara');
        $response->assertSee('Drop / Pickup');
    }

    public function test_halaman_mandiri_parfum_berhasil_diakses(): void
    {
        $response = $this->get('/parfum');
        $response->assertStatus(200);
        $response->assertSee('5 Pilihan Aroma Parfum Premium');

        $aliasResponse = $this->get('/aroma-parfum');
        $aliasResponse->assertStatus(200);
    }

    public function test_halaman_mandiri_faq_berhasil_diakses(): void
    {
        $response = $this->get('/faq');
        $response->assertStatus(200);
        $response->assertSee('Pertanyaan yang Sering Diajukan');

        $aliasResponse = $this->get('/tanya-jawab');
        $aliasResponse->assertStatus(200);
    }

    public function test_halaman_mandiri_lokasi_berhasil_diakses(): void
    {
        $response = $this->get('/lokasi');
        $response->assertStatus(200);
        $response->assertSee('Lokasi Gerai & Jam Operasional', false);
        $response->assertSee('Katara Laundry — Gerai Dinoyo Malang', false);

        $aliasResponse = $this->get('/lokasi-kontak');
        $aliasResponse->assertStatus(200);
    }
}

