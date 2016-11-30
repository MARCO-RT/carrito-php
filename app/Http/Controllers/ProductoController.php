<?php

namespace App\Http\Controllers;

use App\Core\Product\Product;
use App\Core\Product\ProductRepository;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected  $repoProductos;

    public function __construct()
    {
        $this->repoProductos = new  ProductRepository();
    }

    public function index()
    {
        $products = Product::orderBy('id','ASC')->paginate(6);
        return view('store.catalogo.catalogo', compact('products'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product=Product::where('slug',$slug)->first();
//        dd($product->toArray());
      return view('store.detalle-producto.detalle-producto',compact( 'product'));

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

    public function categories($slug)
    {
//        $total_categories = $this->repoCategory->getCountProductByCategory();
        $products = $this->repoProductos->getProductsByCategoryId($slug);
        return view('store.catalogo.catalogo', compact('slug', 'products'));
//        dd($products->toArray());
    }




}
