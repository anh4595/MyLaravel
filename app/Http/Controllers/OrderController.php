<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\orders;
use App\orderdetails;

class OrderController extends Controller
{
    public function getOrder()
    {
        $list_order=DB::table('orders')->paginate(20);
        return view('admin.order.order',compact('list_order'));
    }

    public function getDelete($id)
    {
        $order = orders::find($id);
        $order->delete($id);
        return redirect()->route('admin.order.order');
    }

    public function changeStatus($id)
    {
        $order=orders::find($id);
        if($order->status != 1)
        {
            $order->status = 1;
            $order->save();
        }
        else
        {
            $order->status = 0;
            $order->save();
        }
        return redirect()->route('admin.order.order');
    }
}
