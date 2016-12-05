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
                            <th>ACTIVO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
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
                                    <a href="{{ route('admin.product.edit',$product->slug)}}" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td style="text-align: center">
                                    {!! Form::open(['route' => ['admin.product.destroy', $product->slug]]) !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                    {!! Form::close() !!}
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
