<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('resonator_id')->constrained()->cascadeOnDelete();
            $table->string('title', 50);
            $table->unsignedTinyInteger('level'); // 1 - 90
            $table->unsignedTinyInteger('sequence'); // 0 - 6
            $table->string('weapon_name', 100)->nullable();
            $table->json('echo_costs'); // Contoh: [4, 3, 3, 1, 1]
            $table->text('notes')->nullable();
            $table->string('status', 20)->default('draft'); // draft, published, archived
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('builds');
    }
};
