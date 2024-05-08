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
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade');
            $table->unsignedBigInteger('player_id');
            $table->string('action')->nullable();
            $table->Datetime('expires_at')->nullable();
            $table->foreign('player_id')->references('user_id')->on('players')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matchs_recoreds');
    }
};
