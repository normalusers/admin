<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Member;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Member::count();
        $tt = 2;//单页内个数
        $count = ceil($res/$tt);
        $page = $request -> input('page');//当前页数
        empty($page) ? 1 : $page;

        $offset = ($page-1)*$tt;//偏移量
        $data = Member::offset($offset) -> limit($tt) -> get();
        if($request -> ajax()){
            return view('Admin.Member.ajaxpage' , ['data' => $data]);
        }
        for ($i=1; $i <= $count; $i++) {
            $pp[$i] = $i;
        }
        return view('Admin.Member.Line' , ['pp' => $pp , 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Member.Add');
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
        $data['status'] = 0;
        if(DB::table('member') -> insert($data)){
            return back() -> with('success' , '添加会员成功');
        }else{
            return back() -> with('error' , '添加会员失败');
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
