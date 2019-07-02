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
            $table -> Increments('id');
            $table -> string('username',20);
            $table -> string('password' , 99) -> notNull();
            $table -> string('eamil' , 99) -> notNull();
            $table -> tinyInteger('status') -> notNull() -> default('0');
            $table -> string('token' , 10) -> notNull();
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
