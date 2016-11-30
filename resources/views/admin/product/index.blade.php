@extends('admin.template.principal')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header" style="text-align: center;color:#01a185 ">
            <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
            Productos

            <a href="{{route('admin.product.create')}}" type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i><span> Producto</span></a>
        </h1>
    </div>
    <div class=" col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                TABLA DE PRODUCTOS
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>IMAGEN</th>
                            <th>NOMBRE</th>
                            <th>CATEGORIA</th>
                            {{--<th>DESCRIPSION</th>--}}
                            <th>PRECIO</th>
                            <th>STOCK</th>
                            <th>ESTADO</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{url('/')}}/{{$product->image}}" width="40"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                {{--<td>{{ $product->description }}</td>--}}
                                <td>${{ number_format($product->price,2) }}</td>
                                <td>{{ $product->stock }} unidades</td>
                                <td>{{ $product->estado == 1 ? "Si" : "No" }}</td>
                                <td style="text-align: center">
                                    {{--<div> <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></div>--}}
                                    {{--<div style="padding-top: 1rem"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></div>--}}
                                    <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="text-align: center" class="col-lg-12">{!! $products->render() !!}</div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
@endsection
