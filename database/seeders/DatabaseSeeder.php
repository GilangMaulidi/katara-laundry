<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\InventoryItem;
use App\Models\Perfume;
use App\Models\RackSlot;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@kataralaundry.com'],
            [
                'nama' => 'Owner Katara Laundry',
                'password' => Hash::make('password'),
                'peran' => 'administrator',
                'nomor_telepon' => '081234567890',
                'aktif' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'kasir@kataralaundry.com'],
            [
                'nama' => 'Kasir Gerai Dinoyo',
                'password' => Hash::make('password'),
                'peran' => 'kasir',
                'nomor_telepon' => '081234567891',
                'aktif' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'operator@kataralaundry.com'],
            [
                'nama' => 'Petugas Cuci & Setrika',
                'password' => Hash::make('password'),
                'peran' => 'operator',
                'nomor_telepon' => '081234567892',
                'aktif' => true,
            ]
        );

        $perfumes = [
            [
                'nama' => 'Sakura Blossom',
                'karakter_aroma' => 'Floral Lembut & Feminin',
                'deskripsi' => 'Aroma bunga sakura segar nan lembut, sangat diminati pelanggan mahasiswi.',
                'aktif' => true,
            ],
            [
                'nama' => 'Ocean Fresh',
                'karakter_aroma' => 'Segar Dingin & Maskulin',
                'deskripsi' => 'Kesegaran udara laut yang energik, wangi tahan lama pada pakaian olahraga.',
                'aktif' => true,
            ],
            [
                'nama' => 'Lavender Breeze',
                'karakter_aroma' => 'Aromaterapi Menenangkan',
                'deskripsi' => 'Aroma lavender alami yang menenangkan dan anti-apek pada serat kain tebal.',
                'aktif' => true,
            ],
            [
                'nama' => 'Snappy Luxury',
                'karakter_aroma' => 'Elegan Semerbak Hotel Berbintang',
                'deskripsi' => 'Wangi mewah berkarakter khas cucian hotel bintang lima.',
                'aktif' => true,
            ],
            [
                'nama' => 'Baby Cuddle',
                'karakter_aroma' => 'Lembut Seperti Bedak Bayi',
                'deskripsi' => 'Kelembutan aroma bedak bayi yang bersih, ramah untuk pakaian kulit sensitif.',
                'aktif' => true,
            ],
        ];

        foreach ($perfumes as $perfume) {
            Perfume::firstOrCreate(['nama' => $perfume['nama']], $perfume);
        }

        $racks = ['A' => 'Rak Sayap Kiri', 'B' => 'Rak Bagian Tengah', 'C' => 'Rak Sayap Kanan'];
        foreach ($racks as $rackCode => $rackDescription) {
            for ($slot = 1; $slot <= 15; $slot++) {
                $formattedSlot = str_pad((string) $slot, 2, '0', STR_PAD_LEFT);
                RackSlot::firstOrCreate(
                    ['kode' => "{$rackCode}-{$formattedSlot}"],
                    [
                        'kode_rak' => $rackCode,
                        'nomor_slot' => $slot,
                        'status' => 'tersedia',
                        'catatan' => "{$rackDescription}, Kolom Baris #{$formattedSlot}",
                    ]
                );
            }
        }

        $services = [
            [
                'nama' => 'Cuci Kering Setrika Reguler (48 Jam)',
                'kategori' => 'kiloan',
                'satuan' => 'kg',
                'harga' => 7000,
                'durasi_jam' => 48,
                'minimal_order' => 3.00,
                'deskripsi' => 'Paket lengkap cuci bersih, pengeringan mesin gas, dan setrika uap rapi bergaransi.',
                'aktif' => true,
            ],
            [
                'nama' => 'Cuci Kering Setrika Kilat (24 Jam)',
                'kategori' => 'kiloan',
                'satuan' => 'kg',
                'harga' => 10000,
                'durasi_jam' => 24,
                'minimal_order' => 3.00,
                'deskripsi' => 'Paket prioritas 24 jam selesai, cocok untuk kebutuhan mendesak.',
                'aktif' => true,
            ],
            [
                'nama' => 'Cuci Kering Setrika Express (6 Jam)',
                'kategori' => 'kiloan',
                'satuan' => 'kg',
                'harga' => 15000,
                'durasi_jam' => 6,
                'minimal_order' => 3.00,
                'deskripsi' => 'Layanan super cepat 6 jam langsung jadi dengan penanganan khusus.',
                'aktif' => true,
            ],
            [
                'nama' => 'Cuci Kering Lipat (Non-Setrika)',
                'kategori' => 'kiloan',
                'satuan' => 'kg',
                'harga' => 5000,
                'durasi_jam' => 48,
                'minimal_order' => 3.00,
                'deskripsi' => 'Pakaian dicuci higienis, dikeringkan mesin, lalu dilipat rapi tanpa setrika.',
                'aktif' => true,
            ],
            [
                'nama' => 'Setrika Uap Saja (Pakaian Sudah Bersih)',
                'kategori' => 'kiloan',
                'satuan' => 'kg',
                'harga' => 5000,
                'durasi_jam' => 24,
                'minimal_order' => 2.00,
                'deskripsi' => 'Jasa setrika boiler uap presisi untuk pakaian yang sudah dicuci dari rumah.',
                'aktif' => true,
            ],

            [
                'nama' => 'Bedcover Jumbo / King Size',
                'kategori' => 'satuan',
                'satuan' => 'pcs',
                'harga' => 25000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Pencucian bedcover ukuran 200x200 cm dengan putaran tabung khusus dan parfum tahan lama.',
                'aktif' => true,
            ],
            [
                'nama' => 'Bedcover Single / Sedang',
                'kategori' => 'satuan',
                'satuan' => 'pcs',
                'harga' => 20000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Pencucian bedcover ukuran 120-160 cm bebas noda dan serat kain terjaga.',
                'aktif' => true,
            ],
            [
                'nama' => 'Selimut Bulu / Fleece Tebal',
                'kategori' => 'satuan',
                'satuan' => 'pcs',
                'harga' => 15000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Pencucian lembut selimut bulu agar tetap lembut dan tidak menggumpal.',
                'aktif' => true,
            ],
            [
                'nama' => 'Jas / Blazer Formal (Stel Lengkap)',
                'kategori' => 'satuan',
                'satuan' => 'set',
                'harga' => 30000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Dry clean & setrika uap vertikal untuk jas wisuda, seminar, atau kerja.',
                'aktif' => true,
            ],
            [
                'nama' => 'Sepatu Sneakers / Canvas',
                'kategori' => 'satuan',
                'satuan' => 'pasang',
                'harga' => 25000,
                'durasi_jam' => 72,
                'minimal_order' => 1.00,
                'deskripsi' => 'Deep cleaning sepatu luar dan dalam dengan cairan khusus anti-yellowing.',
                'aktif' => true,
            ],
            [
                'nama' => 'Helm Half / Full Face',
                'kategori' => 'satuan',
                'satuan' => 'pcs',
                'harga' => 25000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Cuci busa dalam helm higienis, pengeringan UV anti-bakteri dan wangi segar.',
                'aktif' => true,
            ],
            [
                'nama' => 'Boneka Ukuran Sedang',
                'kategori' => 'satuan',
                'satuan' => 'pcs',
                'harga' => 15000,
                'durasi_jam' => 48,
                'minimal_order' => 1.00,
                'deskripsi' => 'Pencucian higienis boneka anak dan mahasiswa bebas debu dan tungau.',
                'aktif' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['nama' => $service['nama']], $service);
        }

        $inventories = [
            [
                'nama' => 'Deterjen Cair Konsentrat Rendah Busa',
                'kategori' => 'deterjen',
                'satuan' => 'liter',
                'stok' => 60.00,
                'stok_minimal' => 15.00,
                'biaya_per_satuan' => 14000,
                'catatan' => 'Khusus mesin cuci front loading hemat air gerai Dinoyo',
            ],
            [
                'nama' => 'Pewangi & Pelembut Pakaian (Softener)',
                'kategori' => 'parfum',
                'satuan' => 'liter',
                'stok' => 45.00,
                'stok_minimal' => 10.00,
                'biaya_per_satuan' => 16000,
                'catatan' => 'Bahan perendam serat kain sebelum tahap pemerasan sentrifugal',
            ],
            [
                'nama' => 'Pelicin Setrika Uap Boiler',
                'kategori' => 'parfum',
                'satuan' => 'liter',
                'stok' => 35.00,
                'stok_minimal' => 10.00,
                'biaya_per_satuan' => 12000,
                'catatan' => 'Cairan pelicin setrika uap anti-kerut',
            ],
            [
                'nama' => 'Plastik Kemasan Jinjing 5 Kg Berlogo Katara',
                'kategori' => 'packaging',
                'satuan' => 'lembar',
                'stok' => 650.00,
                'stok_minimal' => 150.00,
                'biaya_per_satuan' => 650,
                'catatan' => 'Plastik packaging bening tebal 0.4 mm anti-robek',
            ],
            [
                'nama' => 'Plastik Kemasan Jumbo 10 Kg',
                'kategori' => 'packaging',
                'satuan' => 'lembar',
                'stok' => 300.00,
                'stok_minimal' => 80.00,
                'biaya_per_satuan' => 950,
                'catatan' => 'Khusus pesanan bedcover atau cucian kiloan partai besar',
            ],
            [
                'nama' => 'Tabung Gas LPG 12 Kg (Untuk Dryer)',
                'kategori' => 'gas',
                'satuan' => 'tabung',
                'stok' => 4.00,
                'stok_minimal' => 1.00,
                'biaya_per_satuan' => 215000,
                'catatan' => 'Bahan bakar 4 unit mesin pengering gas dryer',
            ],
            [
                'nama' => 'Kertas Thermal Struk Nota 58mm',
                'kategori' => 'packaging',
                'satuan' => 'pack',
                'stok' => 25.00,
                'stok_minimal' => 5.00,
                'biaya_per_satuan' => 7500,
                'catatan' => 'Roll kertas kasir thermal printer 58x40 mm',
            ],
        ];

        foreach ($inventories as $inv) {
            InventoryItem::firstOrCreate(['nama' => $inv['nama']], $inv);
        }

        $customers = [
            [
                'nama' => 'Ahmad Fauzi (Mahasiswa UB)',
                'nomor_telepon' => '081298765432',
                'alamat' => 'Kost Dinoyo Asri No. 12, Lowokwaru, Malang',
                'catatan' => 'Pelanggan mingguan tetap, preferensi aroma Sakura Blossom, minta dilipat padat.',
                'total_pesanan' => 5,
            ],
            [
                'nama' => 'Nabila Putri (Mahasiswi Polinema)',
                'nomor_telepon' => '085712345678',
                'alamat' => 'Jl. MT Haryono Gg. 9 No. 4, Dinoyo, Malang',
                'catatan' => 'Baju hijab sensitif, minta setrika uap sedang dan aroma Baby Cuddle.',
                'total_pesanan' => 3,
            ],
            [
                'nama' => 'Bagas Prasetyo (Mahasiswa UM)',
                'nomor_telepon' => '082187654321',
                'alamat' => 'Kost Griya Dinoyo Indah Kav. 3, Malang',
                'catatan' => 'Sering laundry pakaian futsal dan jaket, aroma Ocean Fresh.',
                'total_pesanan' => 8,
            ],
            [
                'nama' => 'Ibu Ratna Dewi (Warga Dinoyo)',
                'nomor_telepon' => '081333444555',
                'alamat' => 'Jl. Gajayana No. 45B, Dinoyo, Malang',
                'catatan' => 'Rutin cuci bedcover bulanan dan pakaian keluarga.',
                'total_pesanan' => 12,
            ],
        ];

        foreach ($customers as $cust) {
            Customer::firstOrCreate(['nomor_telepon' => $cust['nomor_telepon']], $cust);
        }

        $kasir = User::where('peran', 'kasir')->first() ?? User::where('role', 'kasir')->first();
        $sakura = Perfume::where('nama', 'Sakura Blossom')->first() ?? Perfume::where('name', 'Sakura Blossom')->first();
        $ocean = Perfume::where('nama', 'Ocean Fresh')->first() ?? Perfume::where('name', 'Ocean Fresh')->first();
        $baby = Perfume::where('nama', 'Baby Cuddle')->first() ?? Perfume::where('name', 'Baby Cuddle')->first();
        $snappy = Perfume::where('nama', 'Snappy Luxury')->first() ?? Perfume::where('name', 'Snappy Luxury')->first();
        $lavender = Perfume::where('nama', 'Lavender Breeze')->first() ?? Perfume::where('name', 'Lavender Breeze')->first();

        $slotA1 = RackSlot::where('kode', 'A-01')->first() ?? RackSlot::where('code', 'A-01')->first();
        $slotB4 = RackSlot::where('kode', 'B-04')->first() ?? RackSlot::where('code', 'B-04')->first();
        $slotC9 = RackSlot::where('kode', 'C-09')->first() ?? RackSlot::where('code', 'C-09')->first();

        $svcCuciSetrika = Service::where('nama', 'like', '%Cuci Kering Setrika Reguler%')->first() ?? Service::where('name', 'like', '%Cuci Kering Setrika Reguler%')->first();
        $svcKilat = Service::where('nama', 'like', '%Cuci Kering Setrika Kilat%')->first() ?? Service::where('name', 'like', '%Cuci Kering Setrika Kilat%')->first();
        $svcLipat = Service::where('nama', 'like', '%Cuci Kering Lipat%')->first() ?? Service::where('name', 'like', '%Cuci Kering Lipat%')->first();
        $svcSepatu = Service::where('nama', 'like', '%Sepatu%')->first() ?? Service::where('name', 'like', '%Sepatu%')->first();
        $svcBedcover = Service::where('nama', 'like', '%Bedcover Jumbo%')->first() ?? Service::where('name', 'like', '%Bedcover Jumbo%')->first();
        $svcJas = Service::where('nama', 'like', '%Jas%')->first() ?? Service::where('name', 'like', '%Jas%')->first();

        $cust1 = Customer::where('nama', 'like', '%Ahmad Fauzi%')->first() ?? Customer::where('name', 'like', '%Ahmad Fauzi%')->first();
        $t1 = Transaction::firstOrCreate(
            ['nomor_nota' => 'KTR-20260906-0001'],
            [
                'pelanggan_id' => $cust1->id,
                'pengguna_id' => $kasir->id,
                'parfum_id' => $sakura->id,
                'slot_rak_id' => $slotA1->id,
                'status' => 'siap_diambil',
                'status_pembayaran' => 'lunas',
                'metode_pembayaran' => 'qris',
                'total_harga' => 31500,
                'jumlah_dibayar' => 31500,
                'diskon' => 0,
                'sisa_tagihan' => 0,
                'catatan' => 'Minta dilipat padat rapi untuk lemari kost.',
                'tanggal_masuk' => now('Asia/Jakarta')->subHours(26),
                'estimasi_selesai' => now('Asia/Jakarta')->addHours(22),
                'tanggal_selesai' => now('Asia/Jakarta')->subHours(2),
                'wa_nota_terkirim' => true,
                'wa_siap_terkirim' => true,
            ]
        );
        if ($t1->wasRecentlyCreated) {
            $t1->items()->create([
                'layanan_id' => $svcCuciSetrika->id,
                'kuantitas' => 4.5,
                'harga_satuan' => 7000,
                'subtotal' => 31500,
            ]);
        }
        $slotA1->update(['status' => 'terisi']);

        $cust2 = Customer::where('nama', 'like', '%Nabila Putri%')->first() ?? Customer::where('name', 'like', '%Nabila Putri%')->first();
        $t2 = Transaction::firstOrCreate(
            ['nomor_nota' => 'KTR-20260906-0002'],
            [
                'pelanggan_id' => $cust2->id,
                'pengguna_id' => $kasir->id,
                'parfum_id' => $baby->id,
                'status' => 'sedang_disetrika',
                'status_pembayaran' => 'lunas',
                'metode_pembayaran' => 'tunai',
                'total_harga' => 30000,
                'jumlah_dibayar' => 50000,
                'diskon' => 0,
                'sisa_tagihan' => 0,
                'catatan' => 'Bahan hijab sensitif, suhu uap jangan terlalu panas.',
                'tanggal_masuk' => now('Asia/Jakarta')->subHours(10),
                'estimasi_selesai' => now('Asia/Jakarta')->addHours(14),
                'wa_nota_terkirim' => true,
            ]
        );
        if ($t2->wasRecentlyCreated) {
            $t2->items()->create([
                'layanan_id' => $svcKilat->id,
                'kuantitas' => 3.0,
                'harga_satuan' => 10000,
                'subtotal' => 30000,
            ]);
        }

        $cust3 = Customer::where('nama', 'like', '%Bagas Prasetyo%')->first() ?? Customer::where('name', 'like', '%Bagas Prasetyo%')->first();
        $t3 = Transaction::firstOrCreate(
            ['nomor_nota' => 'KTR-20260906-0003'],
            [
                'pelanggan_id' => $cust3->id,
                'pengguna_id' => $kasir->id,
                'parfum_id' => $ocean->id,
                'slot_rak_id' => $slotB4->id,
                'status' => 'siap_diambil',
                'status_pembayaran' => 'uang_muka',
                'metode_pembayaran' => 'tunai',
                'total_harga' => 55000,
                'jumlah_dibayar' => 30000,
                'diskon' => 0,
                'sisa_tagihan' => 25000,
                'catatan' => 'Cuci lipat kaos futsal dan 1 pasang sepatu canvas.',
                'tanggal_masuk' => now('Asia/Jakarta')->subHours(30),
                'estimasi_selesai' => now('Asia/Jakarta')->addHours(18),
                'tanggal_selesai' => now('Asia/Jakarta')->subHours(1),
                'wa_nota_terkirim' => true,
                'wa_siap_terkirim' => true,
            ]
        );
        if ($t3->wasRecentlyCreated) {
            $t3->items()->create([
                'layanan_id' => $svcLipat->id,
                'kuantitas' => 6.0,
                'harga_satuan' => 5000,
                'subtotal' => 30000,
            ]);
            $t3->items()->create([
                'layanan_id' => $svcSepatu->id,
                'kuantitas' => 1.0,
                'harga_satuan' => 25000,
                'subtotal' => 25000,
            ]);
        }
        $slotB4->update(['status' => 'terisi']);

        $cust4 = Customer::where('nama', 'like', '%Ratna Dewi%')->first() ?? Customer::where('name', 'like', '%Ratna Dewi%')->first();
        $t4 = Transaction::firstOrCreate(
            ['nomor_nota' => 'KTR-20260906-0004'],
            [
                'pelanggan_id' => $cust4->id,
                'pengguna_id' => $kasir->id,
                'parfum_id' => $snappy->id,
                'status' => 'sedang_dicuci',
                'status_pembayaran' => 'lunas',
                'metode_pembayaran' => 'transfer',
                'total_harga' => 60000,
                'jumlah_dibayar' => 60000,
                'diskon' => 0,
                'sisa_tagihan' => 0,
                'catatan' => 'Bedcover king size dan pakaian harian keluarga.',
                'tanggal_masuk' => now('Asia/Jakarta')->subHours(4),
                'estimasi_selesai' => now('Asia/Jakarta')->addHours(44),
                'wa_nota_terkirim' => true,
            ]
        );
        if ($t4->wasRecentlyCreated) {
            $t4->items()->create([
                'layanan_id' => $svcBedcover->id,
                'kuantitas' => 1.0,
                'harga_satuan' => 25000,
                'subtotal' => 25000,
            ]);
            $t4->items()->create([
                'layanan_id' => $svcCuciSetrika->id,
                'kuantitas' => 5.0,
                'harga_satuan' => 7000,
                'subtotal' => 35000,
            ]);
        }

        $t5 = Transaction::firstOrCreate(
            ['nomor_nota' => 'KTR-20260906-0005'],
            [
                'pelanggan_id' => $cust1->id,
                'pengguna_id' => $kasir->id,
                'parfum_id' => $lavender->id,
                'slot_rak_id' => $slotC9->id,
                'status' => 'siap_diambil',
                'status_pembayaran' => 'lunas',
                'metode_pembayaran' => 'qris',
                'total_harga' => 30000,
                'jumlah_dibayar' => 30000,
                'diskon' => 0,
                'sisa_tagihan' => 0,
                'catatan' => 'Jas wisuda UB, digantung dengan hanger kawat dan plastik cover jas.',
                'tanggal_masuk' => now('Asia/Jakarta')->subHours(40),
                'estimasi_selesai' => now('Asia/Jakarta')->addHours(8),
                'tanggal_selesai' => now('Asia/Jakarta')->subHours(3),
                'wa_nota_terkirim' => true,
                'wa_siap_terkirim' => true,
            ]
        );
        if ($t5->wasRecentlyCreated) {
            $t5->items()->create([
                'layanan_id' => $svcJas->id,
                'kuantitas' => 1.0,
                'harga_satuan' => 30000,
                'subtotal' => 30000,
            ]);
        }
        $slotC9->update(['status' => 'terisi']);
    }
}
