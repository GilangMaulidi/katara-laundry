<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->enum('kategori', ['kiloan', 'satuan'])->default('kiloan');
            $table->string('satuan', 20)->default('kg'); // kg, pcs, pasang, set
            $table->decimal('harga', 12, 2);
            $table->unsignedInteger('durasi_jam')->default(48); // misal 48 jam reguler, 24 jam kilat, 6 jam express
            $table->decimal('minimal_order', 8, 2)->default(1.00); // misal 3 kg
            $table->text('deskripsi')->nullable();
            $table->boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
