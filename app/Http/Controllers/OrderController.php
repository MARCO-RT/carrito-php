<?php

namespace App\Http\Controllers;

use App\Core\Order\Order;
use App\Core\Order_item\Order_item;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->paginate(5);
        //dd($orders);
        return view('admin.order.index', compact('orders'));
    }


    public function getItems(Request $request)
    {
        $items =Order_item::with('product')->where('order_id', $request->get('order_id'))->get();
        return json_encode($items);
    }
}
