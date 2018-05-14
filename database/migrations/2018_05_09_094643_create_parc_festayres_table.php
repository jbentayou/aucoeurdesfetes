<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcFestayresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parc_festayres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ordre');
            $table->unsignedInteger('video')->nullable();
            $table->foreign('video')->references('id')->on('contenus');
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
        Schema::drop('parc_festayres');
    }
}
