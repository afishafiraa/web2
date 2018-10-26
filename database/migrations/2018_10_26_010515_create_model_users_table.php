<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id'); 	//membuat kolom id auto increment
			$table->string('nama');		//membuat kolom nama
			$table->string('email');	//membuat kolom email
			$table->string('username');		//membuat kolom no hp
			$table->string('password');		//membuat kolom alamat dengan tipe text
            $table->timestamps();		//membuat kolom created_at dan update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
