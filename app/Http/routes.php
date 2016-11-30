<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::bind('product', function($slug){
//    return App\Core\Product\Product::where('slug', $slug)->first();
//});
//
//// Category dependency injection
//Route::bind('category', function($category){
//    return App\Core\Category\Category::find($category);
//});

// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});


// Authentication routes...


Route::get('auth/login',[
    'as'=>'login-get',
    'uses'=>'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
    'as'=>'login-post',
    'uses'=>'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
    'as'=>'logout',
    'uses'=>'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
    'as'=>'register-get',
    'uses'=>'Auth\AuthController@getRegister'
]);
Route::post('auth/register',[
    'as'=>'register-post',
    'uses'=>'Auth\AuthController@postRegister'
] );

//-------route page-------//

Route::get('/',[
    'as'=>'home',
    'uses'=>'CategoriaController@index'
]);

Route::get('producto/{slug}',[
        'as'=>'producto-detalle',
        'uses'=>'ProductoController@show'
]);
Route::get('catalogo/{slug}',[
    'as'=>'catalogo-producto',
    'uses'=>'ProductoController@categories'
]);
Route::get('detalle-pedido',[
    'middleware'=>'auth',
    'as'=>'detalle-pedido',
    'uses'=>'CarritoController@detallePedido'
]);

//Carrito-----------------

    Route::bind('product',function ($slug){
        return App\Core\Product\Product::where('slug',$slug)->first();

    });



    Route::get('carrito/show',[
        'as'=>'carrito-show',
        'uses'=>'CarritoController@show'
    ]);

    Route::get('carrito/add/{product}',[
        'as'=>'carrito-add',
        'uses'=>'CarritoController@add'
    ]);

    Route::get('carrito/delete/{product}',[
    'as'=>'carrito-delete',
    'uses'=>'CarritoController@deleted'
    ]);

    Route::get('carrito/trash',[
        'as'=>'carrito-trash',
        'uses'=>'CarritoController@trash'
    ]);

    Route::get('carrito/update/{product}/{quantity}',[
        'as'=>'carrito-update',
        'uses'=>'CarritoController@update'
    ]);

    // Paypal

    // Enviamos nuestro pedido a PayPal
    Route::get('payment', array(
        'as' => 'payment',
        'uses' => 'PaypalController@postPayment',
    ));

    // Después de realizar el pago Paypal redirecciona a esta ruta
    Route::get('payment/status', array(
        'as' => 'payment.status',
        'uses' => 'PaypalController@getPaymentStatus',
    ));

    Route::get('categoria/index', array(
        'as' => 'index-category',
        'uses' => 'CategoryAdminController@index',
    ));

    Route::group(['prefix' => 'admin'], function() {
        // Resource Controller
        Route::resource('category', 'CategoryAdminController');
        Route::resource('user', 'UserAdminController');
        Route::resource('product', 'ProductAdminController');
    });





