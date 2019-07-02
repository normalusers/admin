<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

/*Route::get('t' , function(){
    echo '这是后天模块';
})->middleware('login');

Route::group(["middleware" => 'login'] , function(){
    Route::get("/us" , function(){
        echo '这是后台商品';
    });
    Route::get("user/order" , function(){
        echo '这是后台订单';
    });
});*/
Route::get('a' , 'Admin\TestController@user');

Route::get('login' , function(){
    return view('Admin.UserLogin');
});
Route::post('login' , 'Admin\UserController@login');

Route::group(['middleware' => 'login'] , function(){

    Route::resource('/userMag' , 'Admin\UserController');
    Route::get('/users' , 'Admin\UserController@userline');
    Route::get('/showline' , 'Admin\UserController@index');
});