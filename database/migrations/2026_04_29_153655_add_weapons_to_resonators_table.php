<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('resonators', function (Blueprint $table) {
        // Menambahkan kolom JSON untuk menyimpan daftar senjata
        $table->json('recommended_weapons')->nullable()->after('substats');
    });
}

public function down(): void
{
    Schema::table('resonators', function (Blueprint $table) {
        $table->dropColumn('recommended_weapons');
    });
}
};
