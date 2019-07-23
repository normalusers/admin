<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Model\Member;
use Mail;
use Cookie;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.userReg');//短信验证注册
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.emailregister');//邮箱验证注册
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //手机注册
    public function phoneregister(Request $request){

    }
    public function store(Request $request)
    {
        if(!captcha_check($request->input('code'))){
            return back() -> withinput() ->  with('error' , '验证码有误请重新输入');
        }else{
            $data = $request -> except(['_token' , 'repassword' , 'code']);

            if(Member::where('username',$data['username']) -> count()){
                return back() -> withinput() ->  with('error' , '该用户已经存在');
            }else{
               $data['status'] = 1;
               $data['password'] = Hash::make($data['password']);
               $data['token'] = str_random(20);
               $id = Member::create($data) -> id;
               if($id){
                    Mail::send('Home.send.email' , ['id' => $id , 'token' => $data['token']] , function($msg) use ($data){
                        $msg -> to($data['email']);
                        $msg -> subject('激活用户');
                    });
               }

            }

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
    public function checkphone(Request $request){
        $phone = $request -> input('phone');
        $res = Member::pluck('phone');
        $arr = [];
        foreach ($res as $key => $value) {
            $arr[$key] = $value;
        }
        if(in_array($phone, $arr)){
            return 1;//已存在
        }else{
            return 0;//可以注册
        }

    }

    public function checkuser(Request $request){
        $phone = $request -> input('username');
        $res = Member::pluck('username');
        $arr = [];
        foreach ($res as $key => $value) {
            $arr[$key] = $value;
        }
        if(in_array($phone, $arr)){
            return 1;//已存在
        }else{
            return 0;//可以注册
        }

    }


    public function activate(Request $request){
        $res = Member::find($request -> input('id'));
        if($request -> input('token') == $res -> token){
            $res -> status = 0;
            if($res -> save()){
                return Redirect('/index') -> with('success' , '注册成功可以登陆');
            }
        }else{
            return Redirect('/register') -> with('error' , '激活用户失败');
        }

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

    public function sendShortMsg(Request $request){
        $code = substr(str_shuffle(join('' , range(1, 9))), 1 , 4);//随机生成4位验证码
        setcookie('rcode' , $code , time()+60);
        $phone = $request -> input('phone');
        $res = sendPhone($phone , $code);
        return $res;

    }
    public function checkphonecode(Request $request){
        $code = $request -> input('code');
        if(isset($_COOKIE['rcode']) && !empty($code)){
            if($code == $_COOKIE['rcode']){
                return 1;//输入验证码正确
            }else{
                return 2;//验证码有误
            }
        }else{
            return 3;//校验码过期
        }
    }
}
