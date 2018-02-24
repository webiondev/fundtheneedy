<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from')->unsigned();
            $table->integer('to_')->unsigned();
            $table->string('message', 1000);
            $table->date('date');
            $table->integer('message_root')->unsigned();
           $table->enum('status', ['0','1'])->default('0');
            $table->timestamps();
             $table->foreign('from')->references('id')->on('users');
            $table->foreign('to_')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
