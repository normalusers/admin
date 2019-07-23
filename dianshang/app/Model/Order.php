<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $fillable = ['order_code' , 'user_id' , 'address_id' , 'tot' , 'status'];
    public $timestamps = false;
    public function getStatusAttribute($value){
        if($value == 1){
            $str = '未支付';
        }elseif ($value == 0) {
            $str = '支付成功';
        }
        return $str;
    }
    public function address(){
        return $this -> hasOne('App\Model\Address', 'id' , 'address_id');
    }
}
