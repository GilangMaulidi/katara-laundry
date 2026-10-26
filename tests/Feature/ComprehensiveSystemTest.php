<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\InventoryItem;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComprehensiveSystemTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $kasir;

    protected Customer $customer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::factory()->create([
            'nama' => 'Pemilik Gerai',
            'email' => 'admin@kataralaundry.com',
            'peran' => 'administrator',
            'aktif' => true,
        ]);

        $this->kasir = User::factory()->create([
            'nama' => 'Staf Kasir Dinoyo',
            'email' => 'kasir@kataralaundry.com',
            'peran' => 'kasir',
            'aktif' => true,
        ]);

        $this->customer = Customer::create([
            'nama' => 'Dimas Maulana',
            'nomor_telepon' => '082199887766',
            'alamat' => 'Jl. MT Haryono No. 12 Malang',
        ]);
    }

    /**
     * Uji alur CRUD Pelanggan (Tambah, Ubah, Hapus).
     */
    public function test_alur_crud_pelanggan(): void
    {
        // 1. Tambah Pelanggan Baru
        $response = $this->actingAs($this->kasir)->post('/pelanggan', [
            'nama' => 'Rina Wijaya',
            'nomor_telepon' => '085711223344',
            'alamat' => 'Kost Putri Dinoyo Kav. 8',
            'catatan' => 'Pisahkan hijab bahan sutra',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('pelanggan', [
            'nama' => 'Rina Wijaya',
            'nomor_telepon' => '085711223344',
        ]);

        $newCust = Customer::where('nomor_telepon', '085711223344')->first();

        // 2. Ubah Data Pelanggan
        $updateResponse = $this->actingAs($this->kasir)->put("/pelanggan/{$newCust->id}", [
            'nama' => 'Rina Wijaya S.Kom',
            'nomor_telepon' => '085711223344',
            'alamat' => 'Kost Putri Dinoyo Kav. 9 (Pindah)',
            'catatan' => 'Gunakan parfum Sakura',
        ]);

        $updateResponse->assertSessionHas('success');
        $this->assertDatabaseHas('pelanggan', [
            'id' => $newCust->id,
            'nama' => 'Rina Wijaya S.Kom',
        ]);

        // 3. Hapus Pelanggan yang Belum Memiliki Transaksi
        $deleteResponse = $this->actingAs($this->kasir)->delete("/pelanggan/{$newCust->id}");
        $deleteResponse->assertSessionHas('success');
        $this->assertDatabaseMissing('pelanggan', [
            'id' => $newCust->id,
        ]);
    }

    /**
     * Uji proteksi integritas: pelanggan tidak bisa dihapus jika memiliki transaksi.
     */
    public function test_pelanggan_dengan_transaksi_tidak_dapat_dihapus(): void
    {
        Transaction::create([
            'nomor_nota' => 'KTR-LOCK-001',
            'pelanggan_id' => $this->customer->id,
            'pengguna_id' => $this->kasir->id,
            'status' => 'menunggu_diproses',
            'status_pembayaran' => 'lunas',
            'total_harga' => 20000,
            'jumlah_dibayar' => 20000,
            'tanggal_masuk' => now(),
        ]);

        $deleteResponse = $this->actingAs($this->kasir)->delete("/pelanggan/{$this->customer->id}");
        $deleteResponse->assertSessionHas('error');

        $this->assertDatabaseHas('pelanggan', [
            'id' => $this->customer->id,
        ]);
    }

    /**
     * Uji manajemen layanan dan varian aroma parfum.
     */
    public function test_manajemen_layanan_dan_parfum(): void
    {
        // 1. Tambah Layanan
        $resSvc = $this->actingAs($this->admin)->post('/layanan', [
            'nama' => 'Cuci Selimut Tebal',
            'kategori' => 'satuan',
            'satuan' => 'pcs',
            'harga' => 25000,
            'durasi_jam' => 24,
            'minimal_order' => 1,
            'deskripsi' => 'Khusus selimut wol dan bulu tebal',
        ]);

        $resSvc->assertSessionHas('success');
        $this->assertDatabaseHas('layanan', [
            'nama' => 'Cuci Selimut Tebal',
            'harga' => 25000,
        ]);

        $service = Service::where('nama', 'Cuci Selimut Tebal')->first();

        // 2. Ubah Tarif Layanan
        $resUpdateSvc = $this->actingAs($this->admin)->put("/layanan/{$service->id}", [
            'nama' => 'Cuci Selimut Tebal Premium',
            'kategori' => 'satuan',
            'satuan' => 'pcs',
            'harga' => 30000,
            'durasi_jam' => 24,
            'minimal_order' => 1,
            'deskripsi' => 'Disetrika uap ekstra lembut',
        ]);

        $resUpdateSvc->assertSessionHas('success');
        $this->assertDatabaseHas('layanan', [
            'id' => $service->id,
            'harga' => 30000,
        ]);

        // 3. Tambah Varian Aroma Parfum
        $resPf = $this->actingAs($this->admin)->post('/layanan/parfum', [
            'nama' => 'Snappy Luxury',
            'karakter_aroma' => 'Mewah, Elegan & Segar Tahan Lama',
            'deskripsi' => 'Ketahanan hingga 14 hari dalam lemari',
        ]);

        $resPf->assertSessionHas('success');
        $this->assertDatabaseHas('parfum', [
            'nama' => 'Snappy Luxury',
        ]);
    }

    /**
     * Uji manajemen stok bahan baku operasional laundry.
     */
    public function test_manajemen_stok_inventori(): void
    {
        // 1. Tambah Bahan Baku
        $res = $this->actingAs($this->admin)->post('/inventori', [
            'nama' => 'Deterjen Cair Anti Noda 20L',
            'kategori' => 'deterjen',
            'satuan' => 'jerigen',
            'stok' => 10,
            'stok_minimal' => 3,
            'biaya_per_satuan' => 150000,
            'catatan' => 'Pemasok Utama Dinoyo',
        ]);

        $res->assertSessionHas('success');
        $this->assertDatabaseHas('barang_inventaris', [
            'nama' => 'Deterjen Cair Anti Noda 20L',
            'stok' => 10,
        ]);

        $item = InventoryItem::where('nama', 'Deterjen Cair Anti Noda 20L')->first();

        // 2. Perbarui Stok (Pemakaian Harian)
        $updateRes = $this->actingAs($this->admin)->put("/inventori/{$item->id}", [
            'nama' => 'Deterjen Cair Anti Noda 20L',
            'kategori' => 'deterjen',
            'satuan' => 'jerigen',
            'stok' => 2, // Stok menipis di bawah minimum 3
            'stok_minimal' => 3,
            'biaya_per_satuan' => 150000,
            'catatan' => 'Harus reorder segera',
        ]);

        $updateRes->assertSessionHas('success');
        $this->assertDatabaseHas('barang_inventaris', [
            'id' => $item->id,
            'stok' => 2,
        ]);

        $item->refresh();
        $this->assertTrue($item->is_low_stock);
    }

    /**
     * Uji pelunasan pembayaran piutang / sisa tagihan (DP ke Lunas).
     */
    public function test_pelunasan_pembayaran_transaksi(): void
    {
        $tx = Transaction::create([
            'nomor_nota' => 'KTR-DP-001',
            'pelanggan_id' => $this->customer->id,
            'pengguna_id' => $this->kasir->id,
            'status' => 'siap_diambil',
            'status_pembayaran' => 'uang_muka',
            'metode_pembayaran' => 'tunai',
            'total_harga' => 50000,
            'jumlah_dibayar' => 20000,
            'sisa_tagihan' => 30000,
            'tanggal_masuk' => now(),
        ]);

        $response = $this->actingAs($this->kasir)->post("/transaksi/{$tx->id}/bayar", [
            'amount_paid' => 30000,
            'payment_method' => 'qris',
        ]);

        $response->assertSessionHas('success');

        $tx->refresh();
        $this->assertEquals(50000, (float) $tx->jumlah_dibayar);
        $this->assertEquals(0, (float) $tx->sisa_tagihan);
        $this->assertEquals('lunas', $tx->status_pembayaran);
        $this->assertEquals('qris', $tx->metode_pembayaran);
    }

    /**
     * Uji pencarian nomor nota atau WhatsApp pada portal lacak mandiri publik.
     */
    public function test_pencarian_portal_lacak_mandiri(): void
    {
        $tx = Transaction::create([
            'nomor_nota' => 'KTR-SEARCH-001',
            'pelanggan_id' => $this->customer->id,
            'status' => 'sedang_dikeringkan',
            'status_pembayaran' => 'lunas',
            'total_harga' => 28000,
            'jumlah_dibayar' => 28000,
            'tanggal_masuk' => now(),
        ]);

        // 1. Cari via Nomor Nota
        $searchNota = $this->post('/lacak/cari', [
            'invoice_number' => 'KTR-SEARCH-001',
        ]);
        $searchNota->assertRedirect(route('tracking.show', 'KTR-SEARCH-001'));

        // 2. Cari via Nomor WhatsApp
        $searchWa = $this->post('/lacak/cari', [
            'invoice_number' => '082199887766',
        ]);
        $searchWa->assertRedirect(route('tracking.show', 'KTR-SEARCH-001'));

        // 3. Cari Nota Palsu / Tidak Ditemukan
        $searchFake = $this->post('/lacak/cari', [
            'invoice_number' => 'KTR-TIDAK-ADA',
        ]);
        $searchFake->assertRedirect(route('tracking.index'));
        $searchFake->assertSessionHas('error');
    }

    /**
     * Uji laporan keuangan dapat dimuat dengan filter tanggal.
     */
    public function test_halaman_laporan_keuangan_berhasil_dimuat(): void
    {
        $response = $this->actingAs($this->admin)->get('/laporan?start_date='.now()->startOfMonth()->toDateString().'&end_date='.now()->toDateString());

        $response->assertStatus(200);
        $response->assertSee('Laporan Finansial & Rekapitulasi Kas');
        $response->assertSee('Total Omset Bersih');
    }
}
