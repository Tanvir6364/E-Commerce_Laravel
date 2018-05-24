<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function index(){
        $orders=DB::table('orders')
            ->join('customers','orders.customerId','=','customers.id')
	        ->join('payments','orders.id','=','payments.orderId')
	        ->select('orders.*','customers.firstName','customers.lastName','payments.*')
	        ->get();
			//dd($orders);

        return view('admin.order.manageOrder',['orders'=>$orders]);
    }
}
