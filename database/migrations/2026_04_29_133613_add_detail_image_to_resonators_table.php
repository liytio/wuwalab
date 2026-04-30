<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('resonators', function (Blueprint $table) {
            // Menambahkan kolom baru setelah kolom 'image'
            $table->string('detail_image')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resonators', function (Blueprint $table) {
            $table->dropColumn('detail_image');
        });
    }
};
