<?php


 Route::get('/', function(){

	return View::make('index');

});
 Route::get('/bl', function(){

    return View::make('backlogin');

});
 Route::get('/ba', function(){

    return View::make('line');

});
 Route::get('/up', function(){

    return View::make('update');

});

Route::get('/ba',"BacklineController@backdateshow");
//Route::get('/a',"AbbController@index");//测试当前页面
//Route::get('/register',"RegisterController@registeruser");//注册
Route::post('/index',"AbbController@index");
Route::post('/backlogin',"ExampleController@userjudge");
Route::post('/backline',"BacklineController@backdateshow");//后台数据展示

Route::get('/dele','DeleteUserController@deleteuser');//删除用户数据
Route::get('/update','UpdateController@updatedate');//修改用户数据

Route::post('/updat','RegisterController@registeruser');//修改用户数据