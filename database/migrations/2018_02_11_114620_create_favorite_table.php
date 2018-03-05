<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite', function (Blueprint $table) {
            $table->increments('id');

             $table->integer('favorite_to')->unsigned();
             $table->integer('isfavorite')->unsigned();
             $table->integer('need_id')->unsigned();
            $table->timestamps();
            $table->foreign('favorite_to')->references('id')->on('users');
            $table->foreign('isfavorite')->references('id')->on('users');
            $table->foreign('need_id')->references('id')->on('need');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite');
    }
}
