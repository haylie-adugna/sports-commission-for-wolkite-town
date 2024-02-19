<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballLineupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_lineups', function (Blueprint $table) {
            $table->id();
            $table->integer('jersey_number');
            $table->string('player_name');
            $table->string('position');
            $table->boolean('captain')->default(false);
            $table->string('reason_for_substitution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('football_lineups');
    }
}
