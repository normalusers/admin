<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = '';
        if($request){
            $keyword = $request -> input('keyword');
        }
        $data = $this -> getData($keyword);
        return view('Admin.cates.Line' ,['data' => $data , 'keyword' => $keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getData($keyword=''){
        $keyword = '%'.$keyword.'%';
        $data = DB::table('cate') -> select(DB::raw("*,concat(path , ',' , id) as paths"))  -> where('name' , 'like' ,$keyword ) ->  orderBy('paths')  -> get();
        foreach ($data as $key => $value) {
            $num = explode(',', $value -> path);
            $str = '';
            for($i=0 ; $i<count($num); $i++){
                $str = '-||'.$str;
            }
            $data[$key] -> name = $str.$value -> name;
        }
        return $data;

    }
    public function create()
    {
        $data = $this -> getData();
        return view('Admin.cates.Add' ,['data' => $data]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = DB::table('cate');
        $data = $request -> except(['_token']);
        if($data['selectname'] == 0){
            $dat['pid'] = 0;
            $dat['path'] = '0';
        }else{
            $res = $cate -> where('id','=' , $data['selectname']+1) -> first();
            $dat['pid'] = $res -> id;
            $dat['path'] = $res -> path . ',' . $res -> id;
        }
        $dat['name'] = $data['catename'];
        if($cate -> insert($dat)){
            return Redirect('cates') -> with('success' , '添加商品成功');
        }else{
            return Redirect('cates') -> with('error' , '添加商品失败');
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
        $data = DB::table('cate') -> where('id','=' , $id) -> first();
        $res = $this -> getData();
        $children = array();
        foreach ($res as $key => $value) {
            if($value -> id != $data -> id){
                $children[] = $value;
            }
        }
        return view('Admin.cates.Update' , ['data' => $data , 'res' => $children]);
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
        $cate = DB::table('cate');
        $data = $request -> except(['_token' , '_method']);
        dd($data);
        $re = $cate -> where('id','=' , $id) -> first();
        if($data['selectname'] == 0){
            $dat['pid'] = $re -> pid;
            $dat['path'] = $re -> path;
        }else{
            $res = $cate -> where('id','=' , $data['selectname']+1) -> first();
            dd($res);
            $dat['pid'] = $res -> id;
            $dat['path'] = $res -> path . ',' . $res -> id;
        }
        $dat['name'] = $data['name'];
        dd($dat);

        if($dat['name'] == $re['name'] && $dat['pid'] = $re['pid']){
            $str = '此次更改失败,数据没有发生变化!';
        }else{

        }
        dd($dat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = DB::table('cate');
        $res = $cate  ->  where('pid' , '=' , $id) -> count();
            if($res != 0){
                $str = '请先干掉孩子';
            }else{
                ($cate -> where('id', '=', $id) -> get()) ?$str = '删除成功!' :$str = '删除失败!';
            }
            return back() -> with('error' , "$str");
        }

}
