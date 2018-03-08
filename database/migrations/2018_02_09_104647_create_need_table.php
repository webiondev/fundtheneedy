<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('need', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 1000);
            $table->string('category');
            $table->date('deadline');
            $table->enum('verify', ['I can verify my claim','I cannot verify my claim']);
             $table->enum('medium', ['money','goods']);
             $table->float('amount');
             $table->integer('goods');
            $table->string('file', 10000);
            $table->timestamps();
              $table->softDeletes();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('need');
    }
}
