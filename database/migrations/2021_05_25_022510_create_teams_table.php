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
            $table->unsignedBigInteger('round')->default(0);
            $table->unsignedBigInteger('g')->default(0);
            $table->unsignedBigInteger('d1')->default(0);
            $table->unsignedBigInteger('d2')->default(0);
            $table->unsignedBigInteger('m1')->default(0);
            $table->unsignedBigInteger('m2')->default(0);
            $table->unsignedBigInteger('f1')->default(0);
            $table->unsignedBigInteger('f2')->default(0);
            $table->timestamps();

            $table->foreign('round')->references('id')->on('rounds')->onDelete('cascade');
            $table->foreign('g')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('d1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('d2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('m1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('m2')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('f1')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('f2')->references('id')->on('players')->onDelete('cascade');

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
