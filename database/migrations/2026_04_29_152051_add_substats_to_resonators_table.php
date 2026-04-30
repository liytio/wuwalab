<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('resonators', function (Blueprint $table) {
        $table->string('substats')->nullable()->after('main_stats');
    });
}

public function down(): void
{
    Schema::table('resonators', function (Blueprint $table) {
        $table->dropColumn('substats');
    });
}
};
