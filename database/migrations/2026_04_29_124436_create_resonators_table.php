<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('resonators', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('element'); // Contoh: Havoc, Spectro, Glacio
        $table->string('weapon_type'); // Contoh: Broadblade, Sword, Rectifier
        $table->integer('rarity'); // Bintang 4 atau 5
        $table->text('best_echoes')->nullable(); // Rekomendasi Echo
        $table->string('image')->nullable(); // Nama file gambar
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resonators');
    }
};
