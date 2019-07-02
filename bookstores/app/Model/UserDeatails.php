<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDeatails extends Model
{
    protected $table = 'user_details';
    public $timestamp = true;
    protected $fillable = ['address' , 'hobby' , 'sex' ,'status'];
    public function  getStatusAttribute($value){
        $status = [ 1 => "禁用" , 2 => "开启"];
        return $status[$value];
    }
    public function Users(){
       return $this -> belongsTo('App\Model\Users');
    }

}
