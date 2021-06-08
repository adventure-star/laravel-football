<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playerid');
            $table->integer('playing')->default(0)->nullable();
            $table->integer('60min')->default(0)->nullable();
            $table->integer('goal')->default(0)->nullable();
            $table->integer('assist')->default(0)->nullable();
            $table->integer('decisivegoal')->default(0)->nullable();
            $table->integer('owngoal')->default(0)->nullable();
            $table->integer('sot')->default(0)->nullable();
            $table->integer('penaltywon')->default(0)->nullable();
            $table->integer('penaltycommitted')->default(0)->nullable();
            $table->integer('penaltysaved')->default(0)->nullable();
            $table->integer('penaltymissed')->default(0)->nullable();
            $table->integer('bigchancemissed')->default(0)->nullable();
            $table->integer('blockedshots')->default(0)->nullable();
            $table->integer('saves')->default(0)->nullable();
            $table->integer('goalagainst')->default(0)->nullable();
            $table->integer('yellow')->default(0)->nullable();
            $table->integer('directred')->default(0)->nullable();
            $table->integer('mom')->default(0)->nullable();
            $table->integer('pointtot')->default(0)->nullable();
            $table->timestamps();

            $table->foreign('playerid')->references('id')->on('players')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
