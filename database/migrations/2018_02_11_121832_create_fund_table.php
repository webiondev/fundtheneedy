<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paidby')->unsigned();
            $table->integer('paidfor')->unsigned();
            $table->integer('need_id')->unsigned();
            $table->float('amount');
            $table->string('currency');
            $table->string('transaction_id');
            $table->datetime('date_time');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('paidby')->references('id')->on('users');
            $table->foreign('paidfor')->references('id')->on('users');
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
        Schema::dropIfExists('fund');
    }
}
