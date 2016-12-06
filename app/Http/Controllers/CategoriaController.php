<?php

namespace App\Http\Controllers;

use App\Core\Category\CategoryRepository;
use App\Core\Product\ProductRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    protected  $repoCategorias;
    protected  $repoProducto;


    public function __construct()
    {
        $this->repoCategorias = new  CategoryRepository();
        $this->repoProducto   = new ProductRepository();

    }

    public function index()
    {
        $favoritos =  $this->repoProducto->ProductosFavoritos();
        $favoritos2 =  $this->repoProducto->ProductosFavoritos2();
        $categorias = $this->repoCategorias->all();
//        dd($categorias->toArray());
        return view('home', compact('categorias','favoritos','favoritos2'));
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
        //
    }
}
