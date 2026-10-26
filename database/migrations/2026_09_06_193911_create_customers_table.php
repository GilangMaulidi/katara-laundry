<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('nomor_telepon', 25)->index();
            $table->text('alamat')->nullable();
            $table->text('catatan')->nullable();
            $table->unsignedInteger('total_pesanan')->default(0);
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
