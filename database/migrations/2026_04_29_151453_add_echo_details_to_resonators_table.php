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
            $table->string('sonata_effect')->nullable()->after('best_echoes');
            $table->string('echo_cost')->nullable()->after('sonata_effect');
            $table->string('main_stats')->nullable()->after('echo_cost');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resonators', function (Blueprint $table) {
            $table->dropColumn(['sonata_effect', 'echo_cost', 'main_stats']);
        });
    }
};
