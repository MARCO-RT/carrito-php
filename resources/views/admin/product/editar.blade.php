@extends('admin.template.principal')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header" style="text-align: center;color:#01a185 ">
            <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
            Nuevo Producto
        </h1>
    </div>
    <div style="padding-top: 3rem" class="panel-body">
        <div class="row">

            <div class="col-lg-offset-2 col-lg-8">
                @if (count($errors) > 0)
                    @include('admin.partials.errors')
                @endif
                {!! Form::open(['route'=>'admin.product.update','method' => 'put']) !!}
                <div class="col-lg-10 form-group">
                    <label style="color: #01a185" class="control-label" for="category_id">Categoría</label>
                    {!! Form::select('category_id', $categories, {{}}, ['class' => 'form-control']) !!}
                </div>
                <div class="col-lg-5 form-group" class="form-group">
                    <label style="color: #01a185">CODIGO</label>
                    <input autofocus type="text" name="code" class="form-control" placeholder="ingrese el nombre">
                </div>
                <div class="col-lg-5 form-group" class="form-group">
                    <label style="color: #01a185">NOMBRE</label>
                    <input autofocus type="text" name="name" class="form-control" placeholder="ingrese el nombre">
                </div>

                <div class=" col-lg-10 form-group" class="form-group">
                    <label style="color: #01a185">IMAGEN</label>
                    <input autofocus type="text" name="image" class="form-control" placeholder="ingrese la url..">
                </div>

                <div class="col-lg-5 form-group" class="form-group">
                    <label style="color: #01a185">PRECIO</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class=" col-lg-5 form-group" class="form-group">
                    <label style="color: #01a185">STOCK</label>
                    <input type="number" name="stock" class="form-control" >
                </div>
                <div class=" col-lg-10 form-group">
                    <label style="color: #01a185">DESCRIPSION</label>
                    <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="col-lg-10 form-group">
                    <label style="color: #01a185">ESTADO</label>
                    <label class="radio-inline">
                        <input type="radio" name="estado"  value="1" checked="">ACTIVO
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="estado"  value="0">INACTIVO
                    </label>

                </div>
                <div style="text-align: center" class=" col-lg-5 form-group" class="form-group">
                    <button type="submit" class="btn btn-success">GUARDAR</button>
                </div>
                <div style="text-align: center" class=" col-lg-5 form-group" class="form-group">
                    <a href="{{ route('admin.product.index') }}" type="button" class="btn btn-danger">CANCELAR</a>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) -->
    </div>
@endsection