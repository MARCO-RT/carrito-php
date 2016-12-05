<?php

namespace App\Http\Controllers;

use App\Core\Order\Order;
use app\Core\Order_item\Order_item;
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
        $items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
        return json_encode($items);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $deleted = $order->delete();

        $message = $deleted ? 'Pedido eliminado correctamente!' : 'El Pedido NO pudo eliminarse!';

        return redirect()->route('admin.order.index')->with('message', $message);
    }
}
