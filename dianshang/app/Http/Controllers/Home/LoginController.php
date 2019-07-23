<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Model\Member;
use Mail;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.Userlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $request -> session() -> pull('homeloginuser');
       return view('Home.Userlogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!captcha_check($request->input('code'))){
            return back() -> withinput() ->  with('error' , '验证码有误请重新输入');
        }else{
            $username = $request -> input('username');
            $res = Member::where('username' , $username) -> get();
            foreach ($res as $key => $value) {
                if($value -> status == '激活'){//激活
                    session(['homeloginuser' => $username]);
                    session(['user_id' => $value -> id]);
                    return Redirect('index');
                }elseif($value -> status == '未激活'){//未激活
                    $email = $value -> email;
                    $id = $value -> id;
                    $token = $value -> token;
                    Mail::send('Home.send.email' , ['id' => $id , 'token' => $token] , function($msg) use ($email){
                        $msg -> to($email);
                        $msg -> subject('激活用户');
                    });
                    return back()  ->  with('error' , '请先去邮箱激活后再登录!');
                }
            }

        }
    }
    public function checkpwd(Request $request){
        $pwd = $request -> input('pwd');
        $username = $request -> input('username');
        $res = Member::where('username' ,'=', $username) -> get();
        (Hash::check($pwd , $res[0] -> password)) ? $str=1 : $str = 2;
        return $str;

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
