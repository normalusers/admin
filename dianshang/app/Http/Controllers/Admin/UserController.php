<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = DB::table('user') -> paginate(2);
        return view('Admin.User.Line' , ['res' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.User.Add');
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
        $data['password'] = Hash::make($data['password']);
        if(DB::table('user') -> insert($data)){
            return back() -> with('success' , '添加管理员成功');
        }else{
            return back() -> with('success' , '添加管理员失败');
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

    }
    public function distr($id){
        $user = DB::table('user') -> where('id',$id) -> first();
        $userMag = DB::table('user_role') ->select('rid') ->  where('uid' , $id) -> get();
        $res = [];
        if(count($userMag)){
            foreach ($userMag as $key => $value) {
                $res[] = $value -> rid;
            }
        }
        $disrole = DB::table('role') -> get();
        return view('Admin.User.Distribute' , ['user' => $user , 'disrole' => $disrole , 'res' => $res]);
    }
    public function distrr(Request $request){
        $rid = $_POST['rids'];
        $uid = $request -> input(['adminuser']);
        $ur = DB::table('user_role');
        $ur -> where('uid' ,$uid) -> delete();
        foreach ($rid as $key => $value) {
            $data['uid'] = $uid;
            $data['rid'] = $value;
            $ur -> insert($data);
        }
        return back() -> with('success' , '分配角色成功!');
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

    }
}
