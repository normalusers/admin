<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    //属性必须要写 否则无法插入数据
    protected $fillable = ['username' , 'password' , 'email' , 'status' , '_token' , 'phone'];
    //对完成数据做自动处理
   public function getStatusAttribute($value){
        $status = [1 =>"禁用" , 2 => "开启"];
        return $status[$value];
    }
    public function userDetails(){
        return $this -> hasMany('App\Model\UserDeatails' , 'users_id' , 'id');
    }
}
