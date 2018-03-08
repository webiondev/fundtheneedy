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
            $table->integer('need_id')->unsigned();
            $table->date('date');
            $table->float('amount');
            $table->integer('quantity');
            $table->string('file', 1024);
              $table->softDeletes();
            $table->timestamps();

            $table->foreign('donated_by')->references('id')->on('users');
            $table->foreign('donated_for')->references('id')->on('users');
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
        Schema::dropIfExists('donation');
    }
}
