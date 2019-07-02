<?php
use Illuminate\Support\Facades\Cookie;
class UpdateController extends BaseController{
    public function updatedate(){
        $updateid = Input::get('updateid');
        $result = DB::table('record')->where('id',$updateid)->get();
        $arrval = $result[0];
        $a = [];
        foreach ($arrval as $key => $value) {
            array_push($a, $value);
        }
        for($i = 0;$i<count($a);$i++){
            if($a[$i] == 1){
                $a[$i] = "checked";
            }
        }
        $se = implode(',',$a);
        //var_dump($se);
        $ar = setcookie("a",$se,time()+60*60*24);
        return  Redirect::to('/up');

    }

}