<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('log_whatsapp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->nullable()->constrained('transaksi')->nullOnDelete();
            $table->foreignId('pelanggan_id')->nullable()->constrained('pelanggan')->nullOnDelete();
            $table->string('nomor_telepon', 25);
            $table->enum('jenis_pesan', ['nota_baru', 'siap_ambil', 'pengingat_ambil', 'kustom'])->default('nota_baru');
            $table->text('pesan');
            $table->enum('status', ['antrean', 'terkirim', 'gagal'])->default('antrean');
            $table->timestamp('dikirim_pada')->nullable();
            $table->text('payload_respons')->nullable();
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('log_whatsapp');
    }
};
