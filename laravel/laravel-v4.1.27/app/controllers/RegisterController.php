<?php

use Illuminate\Support\Facades\View;

class RegisterController extends BaseController {
    public function registeruser()
    {
        $updatid = Input::get('updateid');
        $updateeamil = Input::get('updateemail');
        $qs = Input::get('qs');
        $result = DB::table('record')->where('id',$updatid)->update(array(
            'email' => $updateeamil , 'q1' => $qs[0] , 'q2' => $qs[1] ,
            'q3' => $qs[2] ,'q4' => $qs[3] ,'q5' => $qs[4] ,'q6' => $qs[5] ,'q7' => $qs[6] ) );
        $retstr = 00;
        if($result){$retstr = 03;}else{$retstr = 04;}
        setcookie("retstr",$retstr,time()+60*60*24);
}
}

