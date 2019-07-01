<?php

use Illuminate\Support\Facades\View;

class ExampleController extends BaseController {

    public function userjudge(){

        $username = Input::get('username');
        $pwd = Input::get('password');
        $db = DB::table('emailuser');

        $nowTime = date('Y-m-d h:i:s');//获取当前时间
        $result = DB::select('select * from emailuser where username=:user',["user" => $username]);
        $useremail = $username."@qq.com";
        $recordc = 0; //返回记录数
        //var_dump($result);
        if(count($result) == 0 ){
            $recordc = 1;//没注册
            $bool = $db->insert( array( 'username' => $username,'password' => $pwd,
                                'created_at' => $nowTime, 'email' => $useremail) );
            //var_dump($bool);
        }else{
            if(($result[0] ->password) == $pwd){
                $recordc = 2;//登陆成功
            }else{
                $recordc = 3;//登陆密码错误
            }
        }
       return $recordc;


    }


}
