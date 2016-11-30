@extends('admin.template.principal')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header" style="text-align: center;color:#01a185 ">
            <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
            Editar Categoria "{{$category->name}}"
        </h1>
    </div>
    <div style="padding-top: 3rem" class="panel-body">
        <div class="row">

            <div class="col-lg-offset-2 col-lg-8">
                {!! Form::open(['route'=>['admin.category.update',$category],'method' => 'put']) !!}
                <div class="form-group" class="form-group">
                    <label>NOMBRE</label>
                    <input autofocus type="text" name="name" class="form-control" placeholder="ingrese el nombre" value="{{$category->name}}">
                </div>
                <div class="form-group" class="form-group">
                    <label>ICONO</label>
                    <input type="text" name="icon" class="form-control" placeholder="ingrese el nombre del icono" value="{{$category->icon}}">
                </div>
                <div style="text-align: center" class="form-group" class="form-group">
                    <button type="submit" class="btn btn-success">GUARDAR</button>
                    <a href="{{ route('admin.category.index') }}" type="button" class="btn btn-danger">CANCELAR</a>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) -->
    </div>
@endsection