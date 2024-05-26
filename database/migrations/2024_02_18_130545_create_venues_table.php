<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->integer('capacity')->nullable();
            $table->json('facilities')->nullable();
            $table->string('availability')->nullable();
            $table->string('contact_information')->nullable();
            $table->json('accessibility')->nullable();
            $table->string('layout')->nullable(); // Assuming it's a string, change if necessary
            $table->decimal('cost', 10, 2)->nullable(); // Adjust precision and scale as needed
            $table->string('booking')->nullable();
            $table->text('technical_specifications')->nullable();
            $table->text('rules_and_regulations')->nullable();
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
        Schema::dropIfExists('venues');
    }
}
