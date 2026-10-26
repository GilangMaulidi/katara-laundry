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
            $table->string('kode_rak', 10); // A, B, C
            $table->unsignedInteger('nomor_slot'); // 1 s/d 15
            $table->string('kode', 20)->unique(); // A-01, A-02, s/d C-15
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
