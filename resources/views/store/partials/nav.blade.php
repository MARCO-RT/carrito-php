<div class="header">
    <nav style="margin: 0" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:#01a185;font-size: 3.5rem " class="navbar-brand" href="{{route('home')}}"><span style="color: #f3c500">JHO</span>NATAN</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('carrito-show')}}" style="font-size: 2.5rem;color: #01a185"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="{{route('home')}}"style="color: #01a185;font-size: 1.7rem">Home</a></li>
                    <li><a href="#"style="color: #01a185;font-size: 1.7rem">Contacto</a></li>
                    @include('store.partials.menu-user')
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>