@extends('admin.template.principal')
    @section('content')

        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;color:#01a185 ">
                <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
                Categorias

                {{--<button type="button" data-toggle="modal" data-target="#modal_crear" class="btn btn-success"><i class="fa fa-plus-circle"></i><span> Categoria</span></button>--}}
                <a href="{{route('admin.category.create')}}" type="button"  class="btn btn-success"><i class="fa fa-plus-circle"></i><span> Categoria</span></a>
            </h1>
        </div>
        <div class="col-lg-offset-1 col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    TABLA DE CATEGORIAS
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>SLUG</th>
                                <th>ICONO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->icon}}</td>
                                <td style="text-align: center">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td style="text-align: center">
                                    {!! Form::open(['route' => ['admin.category.destroy', $category->id]]) !!}
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
                        <div style="text-align: center" class="col-lg-12">{!! $categories->render() !!}</div>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        @endsection
