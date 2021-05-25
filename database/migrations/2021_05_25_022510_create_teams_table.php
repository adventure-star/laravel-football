<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jid');
            $table->unsignedBigInteger('round');
            $table->unsignedBigInteger('g');
            $table->unsignedBigInteger('d1');
            $table->unsignedBigInteger('d2');
            $table->unsignedBigInteger('m1');
            $table->unsignedBigInteger('m2');
            $table->unsignedBigInteger('f1');
            $table->unsignedBigInteger('f2');
            $table->unsignedBigInteger('q1');
            $table->unsignedBigInteger('q2');
            $table->unsignedBigInteger('q3');
            $table->unsignedBigInteger('q4');
            $table->unsignedBigInteger('q5');
            $table->timestamps();

            $table->foreign('g')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('d1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('d2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('m1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('m2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('f1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('f2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('q1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('q2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('q3')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('q4')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('q5')->references('id')->on('players')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
