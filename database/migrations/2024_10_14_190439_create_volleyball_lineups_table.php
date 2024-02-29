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
        Schema::create('volleyball_lineups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id')->nullable();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('jersey_number');
            $table->unsignedBigInteger('player_id')->nullable();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->string('position');
            $table->boolean('captain')->default(false);
            $table->string('reason_for_substitution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volleyball_lineups');
    }
};
