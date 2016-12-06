@extends('store.template.principal')
@section('content')
    <!-- content-starts-here -->
    <div  style="padding-top: 5rem;padding-bottom: 10rem" class="total-ads main-grid-border">
        <div class="container">
            <div style="text-align: center" class="logo col-lg-12">
                <a href="#"><span>Carrito de</span> Compras</a>
            </div>
            @if(count($carrito))
                <div style="text-align: center" class="col-lg-12">
                    <a href="{{route('carrito-trash')}}" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> Vaciar Carrito</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub-Total</th>
                        <th>Quitar</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carrito as $item)
                        <tr>

                            <td><img  style="width: 50px;height: 50px" src="{{url('/')}}/{{$item->image}}" alt=""></td>
                            <td>{{$item->name}}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>
                                <input
                                        type="number"
                                        min="1"
                                        max="100"
                                        value="{{$item->quantity}}"
                                        id="product_{{$item->id}}"
                                >
                                <a
                                        href="" class="btn btn-warning btn-update-item"
                                        data-href="{{route('carrito-update',$item->slug)}}"
                                        data-id="{{$item->id}}"


                                >
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </td>
                            <td>${{number_format($item->price * $item->quantity,2)}}</td>
                            <td>
                                <a href="{{route('carrito-delete',$item->slug)}}" class="btn btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>
        <div style="text-align: center" class="col-lg-12">
            <div class="col-lg-12"><span style="font-size: 2rem" type="button" class="label label-info">Total: ${{number_format($total,2)}}</span></div>
        </div>

        <div style="text-align: center" class="col-lg-12">
            <div class="col-lg-6"><a href="{{route('home')}}" type="button" class="btn btn-success">Seguir comprando</a></div>
            <div class="col-lg-6"><a href="{{route('detalle-pedido')}}"><button type="button" class="btn btn-success">Continuar</button></a></div>

        </div>
        @else
            <div style="padding-top: 10rem;padding-bottom: 10rem" class="col-lg-12">
            <h3 style="text-align: center"><span class="label label-warning">No hay Productos en el Carrito :(</span></h3>
                <div style="text-align: center;margin-top: 3rem" class="col-lg-12"><a style="font-weight: bold" href="{{route('home')}}" type="button" class="btn btn-success">Agregar Productos</a></div>
            </div>
        @endif
    </div>
    @endsection