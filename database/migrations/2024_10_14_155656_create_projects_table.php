<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('Projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->foreignId('project_manager_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('coach_name_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('contact_information');
            $table->string('logo')->nullable();
            $table->string('social_media_link')->nullable();
            $table->string('location')->nullable();
            $table->foreignId('game_type_id')->nullable()->constrained('games')->onDelete('set null');
            $table->string('document')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Projects');
    }
}
