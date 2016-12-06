@extends('admin.template.principal')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header" style="text-align: center;color:#01a185 ">
            <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
            Usuarios

            <a href="{{route('admin.user.create')}}" type="button"  class="btn btn-success"><i class="fa fa-plus-circle"></i><span> Usuarios</span></a>
        </h1>
    </div>
    <div class="col-lg-offset-1 col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                TABLA DE USUARIOS
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>CORREO</th>
                            <th>USUARIO</th>
                            <th>TIPO</th>
                            <th>ACTIVO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name.' '.$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->user}}</td>
                                <td>{{$user->type}}</td>
                                <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                                <td style="text-align: center">
                                    <a href="{{ route('admin.user.edit', $user) }}" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>

                                </td>
                                <td style="text-align: center">
                                    {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
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
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

    {{--modal crear categoria--}}
    <div class="modal fade" id="modal_crear" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel"style="color: #01a185"> <span style="color: #f3c500">Crear</span> Categoria</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group col-lg-6" >
                                    <label style="color:#01a185 ">NOMBRE</label>
                                    <input type="text" class="form-control" placeholder="ingrese el nombre">
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label style="color: #01a185">APELLIDO</label>
                                    <input type="text" class="form-control" placeholder="ingrese el nombre del icono">
                                </div>
                                <div  class="form-group col-lg-6">
                                    <label style="color: #01a185">EMAIL</label>
                                    <input type="email" class="form-control" placeholder="ingrese el nombre del icono">
                                </div>
                                <div  class="form-group col-lg-6">
                                    <label style="color: #01a185">USUARIO</label>
                                    <input type="text" class="form-control" placeholder="ingrese el nombre del icono">
                                </div>
                                <div  class="form-group col-lg-6">
                                    <label style="color: #01a185">CONTRASEÑA</label>
                                    <input type="password" class="form-control" placeholder="ingrese el nombre del icono">
                                </div>
                                <div  class="form-group col-lg-6">
                                    <label style="color: #01a185">CONFIRMAR CONTRASEÑA</label>
                                    <input type="password" class="form-control" placeholder="ingrese el nombre del icono">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label style="color: #01a185">TIPO:</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2"><span style="color: darkgrey">Admin</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3"><span style="color: darkgrey">User</span>
                                    </label>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label style="color: #01a185">ESTADO</label>
                                    <div class="checkbox-inline">
                                        <label>
                                            <input type="checkbox" value=""><span style="color:darkgrey">Activo</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12" >
                                    <label style="color:#01a185 ">DIRECCION</label>
                                    <input type="text" class="form-control" placeholder="ingrese el nombre">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
