<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorroborateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corroborate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('corroborate_by')->unsigned();
            $table->integer('corroborate_for')->unsigned();
            $table->date('date');
            $table->integer('need_id')->unsigned();
            $table->timestamps();
              $table->softDeletes();
            $table->foreign('corroborate_by')->references('id')->on('users');
            $table->foreign('corroborate_for')->references('id')->on('users');

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
        Schema::dropIfExists('corroborate');
    }
}
