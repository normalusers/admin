<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserInsertRequest;
use DB;
use Hash;
use App\Model\Users;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(UserInsertRequest $request){
        echo '123';
    }
    public function index(Request $request)
    {
        ($lineNum = $request -> input('lineNum')) ? $lineNum: $lineNum = 2;
        if($keyWord = $request -> input('searchName')){

            $data = Users :: where('username' , 'like' , "%$keyWord%") ->  orderBy('id','desc') -> paginate($lineNum);
            return view("Admin.UserLine",['data'=>$data,'request'=>$request->all() , 'lineNum' => $lineNum , 'keyWord' => $keyWord]);
        }else{
            $data = Users :: orderBy('id','desc') -> paginate($lineNum);
            return view("Admin.UserLine",['data'=>$data,'request'=>$request->all() , 'lineNum' => $lineNum]);
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.UserAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInsertRequest $request)
    {
        $data = $request -> all();
        if($data['repassword'] != $data['password']){
            return back() -> withInput() -> with('error' , '密码与确认密码不一致');
        }else{
            $data = $request -> except(['repassword']);
            $data['password'] = Hash::make($data['password']);
            if(DB::table('users') -> insert($data)){
                return Redirect('/userMag/create')  -> with('success' , '添加用户成功');
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
        if(DB::table('users') -> where('id','=',$id) -> delete()){
            return Redirect('userMag') -> with('success' , '删除用户成功!');
        }else{
            return back() -> with('error' , '删除用户失败!');
        }
    }
    public function userline(){
        return view('Admin.UserIndex');

    }
    public function showline(){

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('users') -> where('id','=' , $id) -> first();
        return view('Admin.UserEdit' , ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserInsertRequest $request, $id)
    {
        $data = $request -> except(['_method' , 'repassword']);
        if(Users::create($data)){
            return Redirect('/userMag') -> with('success' , '更改用户信息成功!');
        }else{
            return back() -> with('error' , '更改用户信息失败!');
        }

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
