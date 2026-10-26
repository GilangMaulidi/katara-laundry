<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Perfume;
use App\Models\RackSlot;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosTransactionTest extends TestCase
{
    use RefreshDatabase;

    protected User $kasir;

    protected Customer $customer;

    protected Service $serviceKiloan;

    protected Perfume $perfume;

    protected RackSlot $rackSlot;

    protected function setUp(): void
    {
        parent::setUp();

        $this->kasir = User::factory()->create([
            'peran' => 'kasir',
            'aktif' => true,
        ]);

        $this->customer = Customer::create([
            'nama' => 'Budi Santoso',
            'nomor_telepon' => '08123456789',
            'alamat' => 'Dinoyo Asri',
        ]);

        $this->serviceKiloan = Service::create([
            'nama' => 'Cuci Kering Setrika',
            'kategori' => 'kiloan',
            'satuan' => 'kg',
            'harga' => 7000,
            'durasi_jam' => 48,
            'minimal_order' => 1.0,
            'aktif' => true,
        ]);

        $this->perfume = Perfume::create([
            'nama' => 'Sakura Blossom',
            'karakter_aroma' => 'Floral',
            'aktif' => true,
        ]);

        $this->rackSlot = RackSlot::create([
            'kode_rak' => 'A',
            'nomor_slot' => 1,
            'kode' => 'A-01',
            'status' => 'tersedia',
        ]);
    }

    /**
     * Uji pembuatan transaksi kasir POS baru.
     */
    public function test_kasir_dapat_membuat_transaksi_baru(): void
    {
        $response = $this->actingAs($this->kasir)->post('/kasir/transaksi', [
            'customer_id' => $this->customer->id,
            'perfume_id' => $this->perfume->id,
            'payment_status' => 'lunas',
            'payment_method' => 'tunai',
            'amount_paid' => 35000,
            'discount' => 0,
            'send_whatsapp' => 1,
            'items' => [
                [
                    'service_id' => $this->serviceKiloan->id,
                    'quantity' => 5.0,
                ],
            ],
        ]);

        $this->assertDatabaseHas('transaksi', [
            'pelanggan_id' => $this->customer->id,
            'total_harga' => 35000,
            'status_pembayaran' => 'lunas',
            'status' => 'menunggu_diproses',
        ]);

        $tx = Transaction::where('pelanggan_id', $this->customer->id)->first();
        $this->assertNotNull($tx);
        $this->assertStringStartsWith('KTR-', $tx->nomor_nota);

        $response->assertRedirect(route('transactions.receipt', $tx->id));
    }

    /**
     * Uji pembaruan status cucian menjadi siap diambil dan penempatan ke slot rak.
     */
    public function test_pembaruan_status_ke_siap_diambil_mengisi_slot_rak(): void
    {
        $tx = Transaction::create([
            'nomor_nota' => 'KTR-TEST-RACK',
            'pelanggan_id' => $this->customer->id,
            'pengguna_id' => $this->kasir->id,
            'status' => 'sedang_disetrika',
            'status_pembayaran' => 'lunas',
            'total_harga' => 21000,
            'jumlah_dibayar' => 21000,
            'tanggal_masuk' => now(),
        ]);

        $response = $this->actingAs($this->kasir)->patch("/transaksi/{$tx->id}/status", [
            'status' => 'siap_diambil',
            'rack_slot_id' => $this->rackSlot->id,
            'send_whatsapp' => 1,
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('transaksi', [
            'id' => $tx->id,
            'status' => 'siap_diambil',
            'slot_rak_id' => $this->rackSlot->id,
        ]);

        $this->assertDatabaseHas('slot_rak', [
            'id' => $this->rackSlot->id,
            'status' => 'terisi',
        ]);
    }

    /**
     * Uji pelepasan slot rak saat cucian diserahkan ke pelanggan (status selesai).
     */
    public function test_pelepasan_slot_rak_berhasil(): void
    {
        $this->rackSlot->update(['status' => 'terisi']);

        $tx = Transaction::create([
            'nomor_nota' => 'KTR-TEST-RELEASE',
            'pelanggan_id' => $this->customer->id,
            'pengguna_id' => $this->kasir->id,
            'slot_rak_id' => $this->rackSlot->id,
            'status' => 'siap_diambil',
            'status_pembayaran' => 'lunas',
            'total_harga' => 21000,
            'jumlah_dibayar' => 21000,
            'tanggal_masuk' => now(),
        ]);

        $response = $this->actingAs($this->kasir)->post("/rak/{$this->rackSlot->id}/release");

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('slot_rak', [
            'id' => $this->rackSlot->id,
            'status' => 'tersedia',
        ]);

        $this->assertDatabaseHas('transaksi', [
            'id' => $tx->id,
            'status' => 'selesai',
        ]);
    }
}
