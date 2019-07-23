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
        Schema::create('userInfo', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('username' ,'255') -> notnull();
            $table -> string('password','255');
            $table -> string('email','255')-> notnull();
            $table -> string('phoneNum','255')-> notnull();
            $table -> string('headPic' , '255') -> notnull();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userInfo');
    }
}
