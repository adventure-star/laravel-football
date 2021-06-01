<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('round');
            $table->string('group');
            $table->unsignedBigInteger('teama');
            $table->unsignedBigInteger('teamb');
            $table->string('date');
            $table->string('cet');
            $table->timestamps();

            $table->foreign('round')->references('id')->on('rounds')->onDelete('cascade');
            $table->foreign('teama')->references('id')->on('realteams')->onDelete('cascade');
            $table->foreign('teamb')->references('id')->on('realteams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixtures');
    }
}
