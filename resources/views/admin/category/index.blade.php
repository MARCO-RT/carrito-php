@extends('admin.template.principal')
    @section('content')

        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;color:#01a185 ">
                <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
                Ctegoria

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

        {{--modal crear categoria--}}
        {{--<div class="modal fade" id="modal_crear" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">--}}
            {{--<div class="modal-dialog" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                        {{--<h4 class="modal-title" id="gridSystemModalLabel"style="color: #01a185"> <span style="color: #f3c500">Crear</span> Categoria</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-offset-2 col-lg-8">--}}
                                {{--{!! Form::open(['route' => 'admin.category.store','method' => 'post']) !!}--}}
                                    {{--<div class="form-group" class="form-group">--}}
                                        {{--<label style="color:#01a185 ">NOMBRE</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="ingrese el nombre">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group" class="form-group">--}}
                                        {{--<label style="color: #01a185">ICONO</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="ingrese el nombre del icono">--}}
                                    {{--</div>--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                        {{--<button type="submit" class="btn btn-success">Guardar</button>--}}
                    {{--</div>--}}
                {{--</div><!-- /.modal-content -->--}}
            {{--</div><!-- /.modal-dialog -->--}}
        {{--</div><!-- /.modal -->--}}

        @endsection
