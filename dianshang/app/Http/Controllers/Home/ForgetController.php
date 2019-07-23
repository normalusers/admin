<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Model\Member;
use Hash;
class ForgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.forget.forget');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //邮箱方式找回密码
    public function create(Request $request)
    {
        return view('Home.forget.emailforget');
    }
    //短信方式
    public function shortMsgForget(Request $request){
        return view('Home.forget.phoneforget');
    }
    //密码重置
    public function doreset(Request $request){
        $data = $request -> except(['_token' , 'repassword']);
        $data['password'] = Hash::make($data['password']);
        $data['token'] = str_random(50);
        $res = Member::find($data['id']);
        $res -> password = $data['password'];
        $res -> token = $data['token'];
        $res ->save();
        echo '修改密码成功，3秒后跳转到登录页面';
        header("refresh:3;url=http://www.onlineshop.com/userlogin");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request -> input('email');
        $res = Member::where('email' , $email) -> get();
        foreach ($res as $key => $value) {
            $id = $value -> id;
            $token = $value -> token;
        }
        Mail::send('Home.forget.reset' , ['id' => $id , 'token' => $token] , function($msg) use ($email){
            $msg -> to($email);
            $msg -> subject('重置密码');
        });
        echo '请去邮件中进行密码重置!';
    }
    //手机验证
    public function phoneforget(Request $request){
        $phone = $request -> input('phone');
        $code = substr(str_shuffle(join('' , range(0,9))), 1 , 4);
        $res = Member::where('phone' , $phone) -> get();
        foreach ($res as $key => $value) {
            $id = $value -> id;
            $token = $value -> token;
        }
        session(['phonecode' => $code]);
        sendPhone($phone , $code);
        echo '请在手机端查看验证码,3秒钟之后跳转到重置密码页面';
        $url = 'http://www.onlineshop.com/doforget?id='.$id.'&&token='.$token;
        header("refresh:3 ; url=$url ");
    }

    public function doforget(Request $request){
        $id = $request -> input('id');
        $res = Member::find($id);
        $token = $request -> input('token');
        if($token == $res['token']){
             return view('Home.forget.doreset' , ['id' => $id]);
         }else{
            echo 'token验证失败，请重新验证';
         }
    }
    public function checkpwd(Request $request){
        $res = Member::find($request -> input('id'));
        $pwd = $request -> input('pwd');
           if(Hash::check($pwd , $res['password'])){
            return 1;//密码是最近使用的密码
           }else{
            return 2;//密码可以使用
           }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
