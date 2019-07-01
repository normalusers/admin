<?php
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AbbController extends Controller{

    public  function index(){

      $dbrecord = DB::table('record');
      $useremail = Input::get('searchEmail');
      $qs = Input::get('qs');
      $nowTime = date('Y-m-d h:i:s');//获取当前时间
      $result = DB::select('select * from record where email=:em order by created_at desc',['em' => $useremail]);
      /*$result = $dbrecord->where('email',$useremail)->orderBy('created_at',desc)->get();*/

      if(count($result) != 0){//如果該用戶存在
            $newtime = $result[0]->created_at;
            $selmonth = substr($newtime,5,2);
            $nowmoth = date('m');
            $arb1 = [floor($selmonth/3),$selmonth%3];
            $arb2 = [floor($nowmoth/3),$nowmoth%3];
            if($arb1[0] == $arb2[0]){
              return "email为:$useremail 的用户 本季度已经答过，请下季度再来 当前时间为:$nowTime";
            }else{
              $bool = $dbrecord -> insert(array(  'email' => $useremail , 'q1'=> $qs[0] ,
                                  'q2' => $qs[1] ,'q3' => $qs[2] , 'q4' => $qs[3] ,
                                    'q5' => $qs[4] ,'q6' => $qs[5] ,'q7' => $qs[6] ,
                                    'created_at' => $nowTime ,  'updated_at' => $nowTime
                                  ));
             if($bool){ return "本季度调查活动参加成功!"; }
            }

      }else{
         $bool = $dbrecord -> insert(array(  'email' => $useremail , 'q1'=> $qs[0] ,
                                  'q2' => $qs[1] ,'q3' => $qs[2] , 'q4' => $qs[3] ,
                                    'q5' => $qs[4] ,'q6' => $qs[5] ,'q7' => $qs[6] ,
                                    'created_at' => $nowTime ,  'updated_at' => $nowTime
                                  ));
         if($bool){ return '首次参加该调查活动已成功!';}
      }
    }

}