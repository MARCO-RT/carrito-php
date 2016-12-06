@extends('store.template.principal')
@section('content')
<!-- content-starts-here -->
<div  style="padding-top: 3rem;padding-bottom: 10rem" class="total-ads main-grid-border">
    <div class="container">
        <div style="text-align: center" class="logo col-lg-12">
            <a href="#"><span>Detalle del</span> Producto</a>
        </div>

        <div  style="padding-top: 5rem" class="col-lg-12">
            <div class="row">
                <div class="col-lg-5">
                    <a href="#" class="thumbnail">
                        <img src="{{url('/')}}/{{$product->image}}" alt="..." style="width: 250px;height: 300px">
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3 style="text-align: center">{{$product->name}}</h3>
                            <p style="text-align: center">
                                {{$product->description}}
                            </p>

                            @if($product->stock > 0)

                            <p  style="text-align: center;padding-top: 2rem;padding-bottom: 2rem"><span  style="font-size: 2rem" href="#" class="label label-info" role="button">PRECIO: ${{$product->price}}</span></p>
                            <p  style="text-align: center"><a href="{{route('carrito-add',$product->slug)}}" class="btn btn-success" role="button">Comprar</a></p>

                                @else
                                <div style="text-align: center;padding-bottom: 2rem;padding-top: 1.5rem;font-size: 2.5rem" class="col-lg-12"><span class="label label-warning">producto no disponible</span></div>
                                <p  style="text-align: center;padding-top: 2rem;padding-bottom: 2rem"><span  style="font-size: 2rem" href="#" class="label label-info" role="button">PRECIO: ${{$product->price}}</span></p>
                                <p  style="text-align: center"><a href="javascript:history.back();" class="btn btn-success" role="button">Regresar</a></p>
                                @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
</div>
@endsection