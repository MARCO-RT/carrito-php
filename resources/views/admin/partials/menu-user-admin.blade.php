@if(Auth::check())
    @if(Auth::user()->type == "admin")
        {{--<li><a href="{{url('/')}}/admin/orders"></a> </li>--}}
        <li class="dropdown">
            <a style="font-size: 2rem ;color: #01a185" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user">  {{Auth::user()->user}}</i> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('logout')}}">Finalizar Sesion</a></li>
            </ul>
        </li>
  @else
        <li class="dropdown">
            <a style="font-size: 2rem ;color: #01a185" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user">  {{Auth::user()->user}}</i> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('logout')}}">Finalizar Sesion</a></li>
            </ul>
        </li>
        @endif

@else

    <li class="dropdown">
        <a style="font-size: 2rem ;color: #01a185" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user">  Login</i> <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{route('login-get')}}">Iniciar Sesion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('register-get') }}">Registrarse</a></li>
        </ul>
    </li>
@endif
