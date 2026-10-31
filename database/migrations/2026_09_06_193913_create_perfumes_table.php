<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('parfum', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('karakter_aroma', 150)->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

public function down(): void
    {
        Schema::dropIfExists('parfum');
    }
};
