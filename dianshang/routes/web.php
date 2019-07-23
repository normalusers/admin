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
*/


//后台登录
Route::resource('/bglogin' , 'Admin\LoginController');

Route::group(["middleware" => 'login'] , function(){
//后台主页
    Route::get('/bgindex' , 'Admin\LoginController@create');
//无限级分类模块
    Route::resource('/cates' , 'Admin\CatesController');
//角色权限管理模块
    Route::resource('/user' , 'Admin\UserController');
    //分配角色
    Route::get('/dis/{id}' , 'Admin\UserController@distr');
    Route::post('/dis' , 'Admin\UserController@distrr');
//角色管理模块
    Route::resource('/role' , 'Admin\RoleController');
//分配权限
    Route::post('/roledis' , 'Admin\RoleController@disrole');
//权限管理
    Route::resource('/distribute' , 'Admin\DistributeController');
//会员管理
    Route::resource('/member' , 'Admin\MemberController');
//公告管理
    Route::resource('article' , 'Admin\ArticleController');
    Route::get('/del' , 'Admin\ArticleController@fue');
//商品管理
    Route::resource('/shop' , 'Admin\ShopController');

});

//前端登录
 Route::resource('/userlogin' , 'Home\LoginController');

//前端无限级分类 前端主页
Route::resource('/index' , 'Home\CatesController');

 //前端注册
 Route::resource('/register' , 'Home\RegisterController');
 Route::post('/phoneregister' , 'Home\RegisterController@phoneregister');
 //邮箱激活
 Route::get('/activate' ,'Home\RegisterController@activate');
//手机号检验
 Route::get('/checkphone' ,'Home\RegisterController@checkphone');
 //用户名检验
 Route::get('/checkuser' ,'Home\RegisterController@checkuser');
//手机发送验证码
 Route::get('/sendShortMsg' ,'Home\RegisterController@sendShortMsg');
 //验证码校验
 Route::get('/checkcode' ,'Home\RegisterController@checkphonecode');




  //登录密码校验
 Route::get('/checkloginpwd' ,'Home\LoginController@checkpwd');
 //找回密码
 Route::resource('/forget' , 'Home\ForgetController');
 //手机号验证
 Route::get('/shortMsgForget' , 'Home\ForgetController@shortMsgForget');
//密码重置
 Route::get('doforget' , 'Home\ForgetController@doforget');
 //重置密码校验
 Route::get('checkpwd' , 'Home\ForgetController@checkpwd');
//重置密码
 Route::post('/doreset' , 'Home\ForgetController@doreset');
 //短信密码重置
 Route::post('/phoneforget' , 'Home\ForgetController@phoneforget');


Route::group(['middleware' => 'homelogin'] , function(){
//购物车操作
 Route::resource('/homecart' , 'Home\CartController');
 //删除
 Route::get('/delcart' , 'Home\CartController@delcart');
 //购物减
 Route::get('/reduce' , 'Home\CartController@reduce');
 //购物加
 Route::get('/add' , 'Home\CartController@add');
 //购物选择
 Route::get('blur' ,'Home\CartController@blur');
 //购物车结算
 Route::get('/cartcount' , 'Home\CartController@cartcount');
//结算页面
 Route::resource('/order' , 'Home\OrderController');
 //城市联动
 Route::get('/address' ,'Home\OrderController@address');
 //结算框
 Route::get('slectid' , 'Home\OrderController@slectid');
 //订单处理
 Route::post('/orderhandle' , 'Home\OrderController@orderhandle');

 //支付成功后返回url
 Route::get('/returnurl' , 'Home\OrderController@returnurl');
});

