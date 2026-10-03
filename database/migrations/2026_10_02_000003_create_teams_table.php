<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name', 40);
            // Satu tim selalu berisi tepat 3 resonator yang berbeda
            $table->foreignId('member1_id')->constrained('resonators')->cascadeOnDelete();
            $table->foreignId('member2_id')->constrained('resonators')->cascadeOnDelete();
            $table->foreignId('member3_id')->constrained('resonators')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
