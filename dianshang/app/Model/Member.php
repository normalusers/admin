<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    public $timestamps = true;
    public $fillable = ['username' , 'password' , 'email' , 'phone' , 'created_at' , 'updated_at' , 'status' , 'token'];
    public function getStatusAttribute($value){
        ($value == 0) ? $str ='激活' : $str ='未激活';
        return $str;
    }
}
