<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arr = $request -> input('arr');
        $carts = session('cart');
        $orders = session('order');
        $arrs = [];
        $data['id'] = 0;
        $data['num'] = 0;
        foreach ($carts as $key => $value) {
            foreach ($arr as $k => $val) {
                if($val == $value['id']){
                    $data['id'] = $val;
                    $data['num'] = $value['num'];
                    $arrs[] = $data;
                }
            }
        }
        $request -> session() -> pull('order');
        $request -> session() -> push('order' , $arrs);
        $str = session('order');
        return $str?? '';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //结算页面
    public function create(Request $request)
    {
        $orders = session('order');
        foreach ($orders[0] as $key => $value) {
             $res = DB::table('shop') -> where('id' , $value['id']) -> first();
             $arr['name'] = $res -> name;
             $arr['pic'] = $res -> pic;
             $arr['descr'] = $res -> descr;
             $arr['price'] = $res -> price;
             $arr['num'] = $value['num'];
             $data[] = $arr;
        }
        $da = DB::table('member') -> where('username' ,session('homeloginuser')) -> first();
        $address = DB::table('rece_address') -> where('user_id' ,$da -> id ) -> get();
        $addresss = DB::table('rece_address') -> where('user_id' ,$da -> id ) -> first();
        (count($address) == 0) ? $a='' : $a = $address;
        $countprice = 0;
        foreach ($data as $key => $value) {
            $countprice += $value['num'] * $value['price'] +10;
        }

        return view('Home.order.index' , ['address' => $address , 'shop' => $data , 'countprice' => $countprice  , 'addresss' => $a]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //城市联动
    public function address(Request $request){
        $res = DB::table('district') -> where('upid' , $request ->input('upid')) -> get();
        return json_encode($res);
    }
    public function store(Request $request)
    {
        $res = $request -> except(['_token']);
        $data = DB::table('member') -> where('username' ,session('homeloginuser')) -> first();
        $res['user_id'] = $data -> id;
        if(DB::table('rece_address') -> insert($res)){
            return back();
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
    public function slectid(Request $request){
        $id = $request -> input('selectid');
        $countprice = $request -> input('countprice');
        $res = DB::table('rece_address') -> where('id',$id) -> first();
        return view('Home.order.ajaxpage' , ['res' => $res , 'countprice' => $countprice]);
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
    //订单处理
    public function orderhandle(Request $request){
        $data['address_id'] = $request -> input('address_id');
        $data['order_code'] = time();
        $data['user_id'] = session('user_id');
        $data['status'] = 1;//默认订单未支付
        $orders = session('order');
        $tot = 0;
        foreach ($orders[0] as $key => $value) {
            $res = DB::table('shop') -> where('id' , $value['id']) -> first();
            $tot += $res ->price * $value['num'];
        }
        $data['tot'] = $tot;
        $id = DB::table('order') -> insertGetId($data);
        if($id != 0){
            foreach ($orders[0] as $key => $value) {
                $res = DB::table('shop') -> where('id' , $value['id']) -> first();
                $datails['order_id'] = $id;
                $datails['detail_id'] = $value['id'];
                $datails['num'] = $value['num'];
                $datails['price'] = $res -> price;
                $datails['name'] = $res -> name;
                $arr[] = $datails;
            }
            session(['payorder_id' => $id]);
           if(DB::table('order_detail') -> insert($arr)){
                $Ordernumber = date("Y-m-d H:i:s");
                pays($Ordernumber, 'shangpin' , '0.01' , 'shangpin');
           }
        }

    }
    public function returnurl(Request $request){
        $payorderid = session('payorder_id');
        $res = Order::find($payorderid);
        $res -> status = 0;
        $res -> save();
        $data['receiver'] = $res -> address['receiver'];
        $data['phone'] = $res -> address['phone'];
        $data['detailaddr'] = $res -> address['detailaddr'];
        $data['tot'] = $res -> tot;
        return view('Home.order.paysuccess' , ['res' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('rece_address') -> where('id' , $id) -> delete()){
            return back();
        }
    }
}
