<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('slot_rak', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rak', 10);
            $table->unsignedInteger('nomor_slot');
            $table->string('kode', 20)->unique();
            $table->enum('status', ['tersedia', 'terisi'])->default('tersedia');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('slot_rak');
    }
};
