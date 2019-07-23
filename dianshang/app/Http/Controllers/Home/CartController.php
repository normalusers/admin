<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = session('cart');
        $arr = [];
        if(count($res)){
            foreach ($res as $key => $value) {
               $dat = DB::table('shop') -> where('id' , $value['id']) -> first();
               $data['id'] = $value['id'];
               $data['name'] = $dat -> name;
               $data['pic'] = $dat -> pic;
               $data['num'] = $value['num'];
               $data['descr'] = $dat -> descr;
               $data['price'] = $dat -> price;
               $arr[] = $data;
            }
        }
        return view('Home.cart.index' , ['arr' => $arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $carts = session('cart');
        $arr = [];
        if($carts != ''){
            foreach ($carts as $key => $value) {
                $arr[] = $value['id'];
            }
            if(!in_array($data['id'], $arr)){
                $request -> session() -> push('cart' , $data);
            }
        }else{
            $request -> session() -> push('cart' , $data);
        }
        return Redirect('homecart');
    }
    //删除购物车
    public function delcart(Request $request){
        $res = session('cart');
        $deleid = $request -> input('deleid');
        foreach ($res as $key => $value) {
            foreach ($deleid as $k => $va) {
                if($value['id'] == $va){
                    unset($res[$key]);
                }
            }
        }
        session(['cart' => $res]);
        $arr = [];
        if(count($res)){
            foreach ($res as $key => $value) {
               $dat = DB::table('shop') -> where('id' , $value['id']) -> first();
               $data['id'] = $value['id'];
               $data['name'] = $dat -> name;
               $data['pic'] = $dat -> pic;
               $data['num'] = $value['num'];
               $data['descr'] = $dat -> descr;
               $data['price'] = $dat -> price;
               $arr[] = $data;
            }
        }
        return view('Home.cart.ajaxpage' , ['arr' => $arr]);
    }
    public function cartcount(Request $request){
        $arrid = $request -> input('arr');
        $carts = session('cart');
        $arr['count'] = 0;
        $arr['num'] = 0;
        if(!empty($arrid)){
            foreach ($arrid as $key => $value) {
                $res = DB::table('shop') -> where('id',$value) -> first();
                foreach ($carts as $k => $val) {
                    if($value == $val['id']){
                        $arr['count'] += $val['num'] * $res -> price;
                        $arr['num'] += $val['num'];
                    }
                }
            }
        }
        return $arr ?? '';

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
        $carts = session('cart');
        foreach ($carts as $key => $value) {
            if($value['id'] == $id){
                unset($carts[$key]);
            }
        }
        session(['cart' => $carts]);
        return Redirect('homecart');
    }
    public function reduce(Request $request){
        $id = $request -> input('id');
        $res = DB::table('shop') -> where('id',$id) -> first();
        $carts = session('cart');
        $data = [];
        foreach ($carts as $key => $value) {
            if($value['id'] == $id){
                if(($value['num'] <= $res -> number) && ($value['num'] > 1)){
                    $data['id'] = $id;
                    $data['num'] = $value['num']-1;
                    $carts[$key] = $data;
                }
            }

        }
        session(['cart' => $carts]);
        return $data['num']?? '';
    }
    public function add(Request $request){
        $id = $request -> input('id');
        $res = DB::table('shop') -> where('id',$id) -> first();
        $carts = session('cart');
        $data = [];
        foreach ($carts as $key => $value) {
            if($value['id'] == $id){
                if(($value['num'] < $res -> number) && ($value['num'] > 0)){
                    $data['id'] = $id;
                    $data['num'] = $value['num']+1;
                    $carts[$key] = $data;
                }
            }

        }
        session(['cart' => $carts]);
        return $data['num']?? '';
    }
    public function blur(Request $request){
        $id = $request -> input('id');
        $num = $request -> input('num');
        $res = DB::table('shop') -> where('id',$id) -> first();
        $carts = session('cart');
        $data = [];
        foreach ($carts as $key => $value) {
            if($value['id'] == $id){
                if(($num <= $res -> number) && ($num > 0)){
                    $data['id'] = $id;
                    $data['num'] = $num;
                    $carts[$key] = $data;
                }
            }

        }
        session(['cart' => $carts]);
        return $data['num']?? '';
    }
}
