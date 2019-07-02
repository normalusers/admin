<?php

use Illuminate\Support\Facades\View;

class BacklineController extends BaseController {


    public function backdateshow()
    {
        $username = Input::get('username');
        $paginate = DB::table('record')->orderBy('id')->paginate(2);
        $datecounts = DB::table('record')->get();

        foreach ($paginate as $value) {
            if($value->q1 == 1){$value->q2 = "满意";}
            else    {$value->q2 = "不满意";}
            if($value->q3 == 1){ $value->q3 = '√';}
            else{ $value->q3 = '×'; }

            if($value->q4 == 1){ $value->q4 = '√';}
            else{ $value->q4 = '×'; }

            if($value->q5 == 1){ $value->q5 = '√';}
            else{ $value->q5 = '×'; }

            if($value->q7 == 1){ $value->q7 = '√';}
            else{ $value->q7 = '×'; }

            if($value->q6 == 1){ $value->q6 = '√';}
            else{ $value->q6 = '×'; }
        }
        return view::make('line',compact('datecounts','username','paginate'));



    }

}
