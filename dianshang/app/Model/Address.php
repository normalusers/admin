<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'rece_address';
    public $fillable = ['id' , 'receiver' , 'user_id' , 'address' , 'detailaddr' , 'phone'];
}
