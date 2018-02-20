<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('city');
            $table->string('country');
            $table->enum('type', ['seeker','giver']);
            $table->string('occupation');
            $table->string('file', 1024);
            //$table->binary('file'); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');

   

    }

  
}
