<?php
use Illuminate\Support\Facades\View;
class DeleteUserController extends BaseController{
    public function deleteuser(){
        $deleid = Input::get('deleid');
        $bool = DB::table('record')->where('id',$deleid)->delete();
        $retstr = "00";
        if($bool){ $retstr = "01";} else{ $retstr = "02";}
        setcookie("retstr",$retstr,time()+60*60*24);
         return Redirect::to('/ba');

    }
}
