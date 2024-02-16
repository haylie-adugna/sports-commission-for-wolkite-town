<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->morphs('contractable'); // Polymorphic relation to handle both players and coaches
            $table->foreignId('club_id')->constrained(); // Foreign key referencing the clubs table
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('salary');
            // Add more columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
