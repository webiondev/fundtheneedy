<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donated_by')->unsigned();
            $table->integer('donated_for')->unsigned();
            $table->date('date');
            $table->float('amount');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('donated_by')->references('id')->on('users');
            $table->foreign('user_for')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation');
    }
}
