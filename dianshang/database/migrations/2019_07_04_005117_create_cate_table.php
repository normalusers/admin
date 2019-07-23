<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name' , '255') -> notnull();
            $table -> integer('pid') -> notnull() ;
            $table -> string('path' , '255') -> notnull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cate');
    }
}
