<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('video');
            $table->string('miniature');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('imgPicto');
            $table->string('imgSurvol');
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
        Schema::drop('contenus');
    }
}
