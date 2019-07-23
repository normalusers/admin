<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use DB;
use Markdown;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('shop') -> join('cate' , 'shop.cate_id' , '=' , 'cate.id') -> select('shop.id as sid' , 'shop.name as sname' , 'cate.name as cname' , 'descr' , 'pic' , 'number' , 'price') -> get();
        return view('Admin.shop.Line' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = CatesController::getData();
        return view('Admin.shop.Add' , ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except(['_token']);
        $data['descr'] = Markdown::convertToHtml($data['descr']);
        if($request -> hasFile('pic')){
            $file = $request -> file('pic');
            $ext = $file -> getClientOriginalExtension();
            $filename = substr(str_shuffle(join('' , range(1, 100))), 0 , 8). '.'.$ext;
            $filepath = Config::get('app.img_uploade');
            $file -> move($filepath , $filename);
            $data['pic'] = $filepath.$filename;
            if(DB::table('shop') -> insert($data)){
                return back() -> with('success' , '添加商品成功');
            }else{
                return back() -> withInput() -> with('error' , '添加商品失败');
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
