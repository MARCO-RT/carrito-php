@extends('store.template.principal')
@section('content')
    <div  style="padding-top: 5rem;padding-bottom: 10rem" class="total-ads main-grid-border">
        <div class="container">
            <div style="text-align: center" class="logo col-lg-12">
                <a href="#"><span>Detalle de</span> Pedido</a>
            </div>

            <div style="text-align: center;padding-top: 2rem;padding-bottom: 3rem" class="col-lg-12">
                <div class="col-lg-12"><h2>Datos del Usuario</h2></div>
            </div>

            <table  class="table table-striped">


                <tbody>
                <tr>
                    <th scope="row">Nombre</th>
                    <td>{{Auth::user()->name." ".Auth::user()->last_name}}</td>
                </tr>
                <tr>
                    <th scope="row">User</th>
                    <td>{{Auth::user()->user}}</td>
                </tr>
                <tr>
                    <th scope="row">Correo</th>
                    <td>{{Auth::user()->email}}</td>

                </tr>
                <tr>
                    <th scope="row">Direccion</th>
                    <td>{{Auth::user()->address}}</td>
                </tr>
                </tbody>
            </table>

            <div style="text-align: center;padding-top: 2rem;padding-bottom: 3rem" class="col-lg-12">
                <div class="col-lg-12"><h2>Datos del Pedido</h2></div>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Sub-total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carrito as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{$item->quantity}}</td>
                        <td>${{number_format($item->price * $item->quantity,2)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center" class="col-lg-12">
            <div class="col-lg-12"><button type="button" class="btn btn-info">Total:${{number_format($total,2)}}</button></div>
        </div>
        <div style="text-align: center" class="col-lg-12">
            <div class="col-lg-6"><a href="{{route('carrito-show')}}" type="button" class="btn btn-success">Regresar</a></div>
            <div class="col-lg-6"><a href="{{route('payment')}}" type="button" class="btn btn-success">Pagar con PAYPAL</a></div>

        </div>
    </div>
    </div>
    @endsection