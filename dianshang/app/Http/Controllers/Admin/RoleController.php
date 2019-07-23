<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('role') -> get();
        return view('Admin.Role.Line' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['userMag'] = $request -> input('rolename');
        $data['status'] = 0;
        $count = DB::table('role') -> where('userMag' , $data['userMag']) -> count();
        if($count){
            return back() -> with('error' , '该系统角色已经存在,请重新添加');
        }else{
            if(DB::table('role') -> insert($data)){
                return back() -> with('success' , '添加系统角色成功');
            }else{
                return back() -> with('error' , '添加系统角色失败');
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
        $res = DB::table('node') -> get();
        $data = DB::table('role') -> where('id',$id) -> first();
        $re = DB::table('role_node') -> where('rid',$id) -> get();
        $arr = [];
        foreach ($re as $key => $value) {
            $arr[] = $value -> nid;
        }
        return view('Admin.Role.disinfo' , ['res' => $res , 'data' => $data , 'arr' => $arr ]);
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
    public function disrole(Request $request){
        $data = $request -> except(['_token']);
        $rid = $data['adminuser'];
        DB::table('role_node') -> where('rid',$rid) -> delete();
        foreach ($data['rids'] as $key => $value) {
            $arr['rid'] = $rid;
            $arr['nid'] = $value;
            DB::table('role_node') -> insert($arr);
        }
        return back() -> with('success' , '分配权限成功,请登出重试');
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
