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
            $table->string('satuan', 20)->default('kg');
            $table->decimal('harga', 12, 2);
            $table->unsignedInteger('durasi_jam')->default(48);
            $table->decimal('minimal_order', 8, 2)->default(1.00);
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
