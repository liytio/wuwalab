<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('build_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unsignedTinyInteger('score'); // 1 - 5
            $table->timestamps();

            // Satu user hanya boleh memberi satu rating per build
            $table->unique(['build_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('build_ratings');
    }
};
