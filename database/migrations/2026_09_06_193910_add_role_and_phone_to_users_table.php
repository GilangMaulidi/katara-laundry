<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->enum('peran', ['administrator', 'kasir', 'operator'])->default('kasir')->after('email');
            $table->string('nomor_telepon', 20)->nullable()->after('peran');
            $table->boolean('aktif')->default(true)->after('nomor_telepon');
        });
    }

public function down(): void
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->dropColumn(['peran', 'nomor_telepon', 'aktif']);
        });
    }
};
