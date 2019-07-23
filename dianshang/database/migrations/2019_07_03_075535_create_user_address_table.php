<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_address', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('username' ,'255') -> notnull();
            $table -> tinyInteger('users_id');
            $table -> string('address','255')-> notnull();
            $table -> string('phoneNum','255')-> notnull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_address');
    }
}
