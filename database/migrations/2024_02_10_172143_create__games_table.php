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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game_type');
            $table->text('description')->nullable();
            $table->string('game_category')->nullable();
            $table->text('rules')->nullable();
            $table->string('duration')->nullable();
            $table->string('player')->nullable();
            $table->string('venue')->nullable();
            $table->text('equipment')->nullable();
            $table->string('season')->nullable();
            $table->string('governing_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
