<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_nota', 50)->unique();
            $table->foreignId('pelanggan_id')->constrained('pelanggan')->cascadeOnDelete();
            $table->foreignId('pengguna_id')->nullable()->constrained('pengguna')->nullOnDelete();
            $table->foreignId('parfum_id')->nullable()->constrained('parfum')->nullOnDelete();
            $table->foreignId('slot_rak_id')->nullable()->constrained('slot_rak')->nullOnDelete();

            $table->enum('status', [
                'menunggu_diproses',
                'sedang_dicuci',
                'sedang_dikeringkan',
                'sedang_disetrika',
                'sedang_dikemas',
                'siap_diambil',
                'selesai',
                'dibatalkan',
            ])->default('menunggu_diproses');

            $table->enum('status_pembayaran', ['belum_bayar', 'uang_muka', 'lunas'])->default('belum_bayar');
            $table->enum('metode_pembayaran', ['tunai', 'qris', 'transfer'])->default('tunai');
            $table->decimal('total_harga', 12, 2)->default(0);
            $table->decimal('jumlah_dibayar', 12, 2)->default(0);
            $table->decimal('diskon', 12, 2)->default(0);
            $table->decimal('sisa_tagihan', 12, 2)->default(0);

            $table->text('catatan')->nullable();
            $table->timestamp('tanggal_masuk')->useCurrent();
            $table->timestamp('estimasi_selesai')->nullable();
            $table->timestamp('tanggal_selesai')->nullable();
            $table->timestamp('tanggal_ambil')->nullable();

            $table->boolean('wa_nota_terkirim')->default(false);
            $table->boolean('wa_siap_terkirim')->default(false);
            $table->boolean('wa_pengingat_terkirim')->default(false);

            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
