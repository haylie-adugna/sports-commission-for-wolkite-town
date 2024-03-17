<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubCoachTable extends Migration
{
    public function up()
    {
        Schema::create('club_coach', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('coach_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('club_coach');
    }
}
