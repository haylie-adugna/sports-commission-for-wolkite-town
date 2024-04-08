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
        Schema::create('match_recoreds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matchs')->onDelete('cascade');
            $table->integer('team1_goal');
            $table->integer('team2_goal');
            $table->foreignId('team1_player')->constrained('players')->onDelete('cascade');
            $table->foreignId('team2_player')->constrained('players')->onDelete('cascade');
            $table->foreignId('team1_assistant')->constrained('users')->onDelete('cascade');
            $table->foreignId('team2_assistant')->constrained('users')->onDelete('cascade');
            $table->time('team1_time');
            $table->time('team2_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matchs_recoreds');
    }
};
