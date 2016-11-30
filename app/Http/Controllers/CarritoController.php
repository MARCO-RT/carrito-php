<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\Product\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarritoController extends Controller
{

    //------Construcctor de la Variable de Secion-----//
    public function __construct()
    {
        if (!\Session::has('carrito')) \Session::put('carrito',array());
    }

    //-----------Método mostrar Carrito------------------//
    public function show()
    {
        $carrito=\Session::get('carrito');
        $total= $this->total();
        return view('store.productos.carrito',compact('carrito','total'));
    }

    //-----------Añadir Producto al Carrito------------------//
    public function add(Product $product)
    {
        $carrito=\Session::get('carrito');
        $product->quantity=1;
        $carrito[$product->slug]=$product;
        \Session::put('carrito',$carrito);
        return redirect()->route('carrito-show');

    }

    //-----------Eliminar porducto------------------//
    public function deleted(Product $product)
    {
        $carrito=\Session::get('carrito');
        unset($carrito[$product->slug]);
        \Session::put('carrito',$carrito);
        return redirect()->route('carrito-show');
    }

    //-----------Vaciar porducto------------------//
    public function trash()
    {
        \Session::forget('carrito');
        return redirect()->route('carrito-show');
    }

    //-----------Actualizar carrito------------------//
    public function update(Product $product,$quantity)
    {
        $carrito=\Session::get('carrito');
        $carrito[$product->slug]->quantity=$quantity;

        \Session::put('carrito',$carrito);

        return redirect()->route('carrito-show');
    }

//------------- Total---------//

    private function total()
    {
        $carrito=\Session::get('carrito');
        $total=0;
        foreach ($carrito as $item){
            $total+=$item->price * $item->quantity;
        }
        return $total;

    }

    public function  detallePedido(){

        if (count(\Session::get('carrito'))<=0) return redirect()->route('home');
        $carrito=\Session::get('carrito');
        $total=$this->total();
        return view('.store.detalle-pedido.detalle-pedido',compact('carrito','total'));
//        dd(count($carrito));
    }
}

