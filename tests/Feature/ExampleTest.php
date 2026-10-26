<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Uji halaman beranda / pelacakan publik dapat diakses dengan sukses.
     */
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

    /**
     * Uji halaman login staf kasir dapat diakses.
     */
    public function test_halaman_login_staf_berhasil_diakses(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Masuk ke Sistem Kasir');
    }

    /**
     * Uji alur demo login cepat untuk kasir.
     */
    public function test_demo_login_kasir_berfungsi(): void
    {
        User::factory()->create([
            'email' => 'kasir@kataralaundry.com',
            'role' => 'kasir',
            'is_active' => true,
        ]);

        $response = $this->get('/demo-login/kasir');

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
    }

    /**
     * Uji pelacakan publik dengan nomor nota.
     */
    public function test_pelacakan_publik_dengan_nomor_nota(): void
    {
        $cust = Customer::create([
            'nama' => 'Fauzi Test',
            'nomor_telepon' => '08123456789',
        ]);

        $tx = Transaction::create([
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

    /**
     * Uji halaman mandiri Layanan & Tarif dapat diakses publik.
     */
    public function test_halaman_mandiri_layanan_dan_tarif_berhasil_diakses(): void
    {
        $response = $this->get('/layanan-tarif');
        $response->assertStatus(200);
        $response->assertSee('Katalog Layanan & Tarif Transparan', false);
        $response->assertSee('Pilihan Paket Cuci & Perawatan', false);

        $aliasResponse = $this->get('/layanan');
        $aliasResponse->assertStatus(200);
    }

    /**
     * Uji halaman mandiri Estimasi Kalkulator dapat diakses publik.
     */
    public function test_halaman_mandiri_kalkulator_berhasil_diakses(): void
    {
        $response = $this->get('/kalkulator');
        $response->assertStatus(200);
        $response->assertSee('Kalkulator Estimasi Biaya & Waktu');
        $response->assertSee('Konfigurasi Pilihan Cucian');
    }

    /**
     * Uji halaman mandiri Keunggulan dapat diakses publik.
     */
    public function test_halaman_mandiri_keunggulan_berhasil_diakses(): void
    {
        $response = $this->get('/keunggulan');
        $response->assertStatus(200);
        $response->assertSee('Mengapa Memilih Katara Laundry?');
        $response->assertSee('6 Standar Unggulan Tanpa Kompromi');
    }

    /**
     * Uji halaman mandiri Galeri Gerai dapat diakses publik.
     */
    public function test_halaman_mandiri_galeri_berhasil_diakses(): void
    {
        $response = $this->get('/galeri');
        $response->assertStatus(200);
        $response->assertSee('Fasilitas Produksi');
        $response->assertSee('Fasilitas & Suasana Gerai', false);
    }

    /**
     * Uji halaman mandiri Cara Pesan dapat diakses publik.
     */
    public function test_halaman_mandiri_cara_pesan_berhasil_diakses(): void
    {
        $response = $this->get('/cara-pesan');
        $response->assertStatus(200);
        $response->assertSee('5 Langkah Mudah Mencuci di Katara');
        $response->assertSee('Drop / Pickup');
    }

    /**
     * Uji halaman mandiri Aroma Parfum dapat diakses publik.
     */
    public function test_halaman_mandiri_parfum_berhasil_diakses(): void
    {
        $response = $this->get('/parfum');
        $response->assertStatus(200);
        $response->assertSee('5 Pilihan Aroma Parfum Premium');

        $aliasResponse = $this->get('/aroma-parfum');
        $aliasResponse->assertStatus(200);
    }

    /**
     * Uji halaman mandiri FAQ dapat diakses publik.
     */
    public function test_halaman_mandiri_faq_berhasil_diakses(): void
    {
        $response = $this->get('/faq');
        $response->assertStatus(200);
        $response->assertSee('Pertanyaan yang Sering Diajukan');

        $aliasResponse = $this->get('/tanya-jawab');
        $aliasResponse->assertStatus(200);
    }

    /**
     * Uji halaman mandiri Lokasi Gerai dapat diakses publik.
     */
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
