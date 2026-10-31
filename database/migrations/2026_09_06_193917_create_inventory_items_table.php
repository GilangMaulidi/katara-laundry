<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('barang_inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->enum('kategori', ['deterjen', 'parfum', 'packaging', 'gas', 'lainnya'])->default('deterjen');
            $table->string('satuan', 30)->default('liter');
            $table->decimal('stok', 10, 2)->default(0);
            $table->decimal('stok_minimal', 10, 2)->default(5);
            $table->decimal('biaya_per_satuan', 12, 2)->default(0);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('barang_inventaris');
    }
};
