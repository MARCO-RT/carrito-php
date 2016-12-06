@extends('admin.template.principal')
@section('content')

    <div class="col-lg-12">
        <h1 class="page-header" style="text-align: center;color:#01a185 ">
            <i style="color:#f3c500 " class="fa fa-shopping-cart"></i>
            Registro de Pedidos
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                TABLA DE REGISTROS
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Ver Detalle</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Subtotal</th>
                            <th>Envio</th>
                            <th>Total</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td style="text-align: center">
                                    <a
                                            href="#"
                                            class="btn btn-primary btn-detalle-pedido"
                                            data-id="{{ $order->id }}"
                                            data-path="{{ route('admin.order.getItems') }}"
                                            data-toggle="modal"
                                            data-target="#myModal"
                                            data-token="{{ csrf_token() }}"
                                    >
                                        <i class="fa fa-external-link"></i>
                                    </a>
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->name . " " . $order->user->last_name }}</td>
                                <td>${{ number_format($order->subtotal,2) }}</td>
                                <td>${{ number_format($order->shipping,2) }}</td>
                                <td>${{ number_format($order->subtotal + $order->shipping,2) }}</td>
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

    @include('admin.partials.modal-detalle-pedido')

@endsection