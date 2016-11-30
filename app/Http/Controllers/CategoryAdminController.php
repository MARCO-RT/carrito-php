<?php

namespace App\Http\Controllers;

use App\Core\Category\Category;
use Illuminate\Http\Request;
use App\Core\Category\CategoryRepository;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryAdminController extends Controller
{
    protected  $repoCategorias;

    public function __construct()
    {
        $this->repoCategorias = new  CategoryRepository();
    }

    public function index()
    {
        $categories = Category::orderBy('id','desc')->paginate(4);
//        dd($categorias->toArray());
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//            return $request->all();
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255',
            'icon'=>'required'
        ]);

        $category = Category::create([
            'name' => $request->get('name'),
            'slug' => str_slug($request->get('name')),
            'icon' => $request->get('icon'),
        ]);
        $message = $category ? 'Categoría agregada correctamente!' : 'La Categoría NO pudo agregarse!';

        Flash::info('La categoria ha sido creada correctamente');
        return redirect()->route('admin.category.index')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.editar',compact('category'));
//        dd($category->toArray());
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

//        dd($request->all());

        $category=Category::find($id);
        $category->name=$request->name;
        $category->icon=$request->icon;
        $category->slug = str_slug($request->get('name'));
        $category->save();
        Flash::info('La categoria ha sido actualizada correctamente');
        return redirect()->route('admin.category.index');
//        dd($category->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

//            $user = User::find($id);
//            $user->delete();
        $user = Category::find($id);
        $user->delete();

        $message = $user ? 'Categoría eliminada correctamente!' : 'La Categoría NO pudo eliminarse!';

        Flash::warning('La categoria ha sido  eliminada');
        return redirect()->route('admin.category.index')->with('message', $message);

    }
}
