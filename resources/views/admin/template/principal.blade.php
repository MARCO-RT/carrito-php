<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JHONATAN ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('/')}}/newstyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('/')}}/newstyle/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/newstyle/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('/')}}/newstyle/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('flash::message')
<div id="wrapper">

    <!-- Navigation -->
    <nav  class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" style="color:#01a185;font-size: 3rem "><span style="color:#f3c500 ">JHO</span>NATAN</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            @include('admin.partials.menu-user-admin')
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav " id="side-menu">
                    <li class="sidebar-search">

                        <!-- /input-group -->
                    </li>
                    <li>
                        <a style="color: #01a185;font-weight: bold" href="{{route('admin.category.index')}}"><i class="fa fa-check-circle fa-fw"></i> CATEGORIAS</a>
                    </li>
                    <li>
                        <a style="color: #01a185;font-weight: bold" href="{{route('admin.product.index')}}"><i class="fa fa-check-circle"></i> PRODUCTOS</a>
                    </li>
                    <li>
                        <a style="color: #01a185;font-weight: bold" href="{{route('admin.user.index')}}"><i class="fa fa-check-circle"></i> USUARIOS</a>
                    </li>
                    <li>
                        <a style="color: #01a185;font-weight: bold"  href="{{route('admin.order.index')}}"><i class="fa fa-check-circle"></i> PEDIDOS</a>
                    </li>
                    <li>
                        <a style="color: #01a185;font-weight: bold"  href="{{route('home')}}"><i class="fa fa-check-circle"></i> MI TIENDA</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div style="padding-bottom: 2rem" id="page-wrapper">


                @yield('content')

                <!-- /.col-lg-12 -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{url('/')}}/newstyle/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('/')}}/newstyle/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{url('/')}}/newstyle/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{url('/')}}/newstyle/dist/js/sb-admin-2.js"></script>
<script src="{{url('/')}}/admin/js/main.js"></script>
</body>

</html>
