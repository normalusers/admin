<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use DB;
use App\member;
use App\Model\Users;
use App\Model\UserDeatails;
class TestController extends Controller
{
    public function index(Request $request)
    {
        if($request -> hasFile('upfile')){
            $file = $request -> file('upfile');
            $ext = $file -> getClientOriginalExtension();
            $newName = substr(str_shuffle(join('',range(0, 9))) , 1 , 4) . '.' . $ext;
            $newPath = './image/';
            $file -> move($newPath, $newName);
            dd($newName);
        }
        if(Cookie::has('name')){
            dd(Cookie::get('name'));
        }

       $session = $request -> session();
       session(['key' => 'value']);
       if($session -> has('key')){

        echo "当前session中的键".session('key');
        $session -> push('pwd' , '123');
        $all = $session -> all();
        echo "push后";
        dd($all);
        $session -> pull('pwd');
       }
    }
    public function user(Request $request){

       $data =  Users::find(5)-> userDetails;
       dd($data);


    }


}
