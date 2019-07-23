<?php

namespace App\Http\Controllers\Home;

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
    public function getData($pid){
        $cate = DB::table('cate');
        $data = $cate ->  where('pid' , '=' , $pid) -> get();
        $children = array();
        foreach ($data as $key => $value) {
            $value -> children = $this -> getData($value -> id);
            $children[] = $value;
        }
        return $children;

    }
    public function index()
    {
        $res = $this -> getData(0);
        $cate = DB::table('cate') -> where('pid',0) -> get();
        $arr = [];
        foreach ($cate as $key => $value) {
            $arr[$value -> name] = DB::table('shop') -> join('cate' , 'shop.cate_id' , '=' , 'cate.id') -> select('shop.id as sid' , 'shop.name as sname' , 'cate.name as cname' , 'pic' , 'descr' , 'number' , 'price') -> where('shop.cate_id' , $value -> id) -> get();
        }

        return view('Home.index' , ['data' => $res , 'arr' => $arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //二级信息获取
    public function create(Request $request)
    {
        $secondid = $request -> input('secondTitle');
        $cate = DB::table('cate') -> where('id',$secondid) -> get();
        $arr = [];
        foreach ($cate as $key => $value) {
            $arr[$value -> name] = DB::table('shop') -> join('cate' , 'shop.cate_id' , '=' , 'cate.id') -> select('shop.id as sid' , 'shop.name as sname' , 'cate.name as cname' , 'pic' , 'descr' , 'number' , 'price') -> where('shop.cate_id' , $value -> id) -> get();
        }
        $res = $this -> getData(0);
        return view('Home.cate.ajaxpage' , ['data' => $res , 'arr' => $arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = DB::table('shop') -> where('id' , $id) -> first();
        return view('Home.info' , ['info' => $res]);
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
