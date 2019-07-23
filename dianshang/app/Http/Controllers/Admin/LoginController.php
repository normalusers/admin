<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request -> session() -> pull('loginuser');
        $request -> session() -> pull('resa');
        return view('Admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.index');
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
         $res = DB::table('user') -> where('username' , $data['username']) -> first();
         $resa = [];
         if(!empty($res)){
            if($data['username'] == $res -> username){
                if(Hash::check($data['password'] , $res -> password)){
                    session(['loginuser' => $data['username']]);

                    $result = DB::select('select funname , ctlname , method from user_role as ur , role as r , role_node as rn , node as n where ur.rid=r.id and rn.rid = r.id and rn.nid = n.id and ur.uid =
                        '.$res ->id);
                    $resa['LoginController'][] = 'create';
                    foreach ($result as $key => $value) {
                        $resa[$value -> ctlname][] = $value -> method;
                        if($value -> method == 'create'){
                            $resa[$value -> ctlname][] = 'store';
                        }
                        if($value -> method == 'edit'){
                            $resa[$value -> ctlname][] = 'update';
                        }
                    }
                    session(['resa' => $resa]);
                    return Redirect('bgindex') -> with('success' , '登录成功!');
                }else{
                    return back() ->  withinput() -> with('error' , '密码错误');
                }
            }
         }else{
            return back() -> withinput() -> with('error' , '此用户不存在');
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
