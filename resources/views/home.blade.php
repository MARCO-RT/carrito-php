@extends('store.template.principal')
@section('content')
    <div class="main-banner banner text-center">
        <div class="container">
            <h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            {{--<a href="post-ad.html">Ver mas</a>--}}
        </div>
    </div>
    <div class="content">
        <div class="categories">
            <div class="container">
                @foreach($categorias as $categoria)
                    <div class="col-md-2 focus-grid">
                        <a href="{{route('catalogo-producto',$categoria->slug)}}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="{{$categoria->icon}}"></i></div>
                                    <h4 class="clrchg">{{$categoria->name}}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>


        </div>
    </div>

    <div class="trending-ads">
        <div class="container">
            <!-- slider -->
            <div class="trend-ads">
                <h2>Top 8 Productos mas Vendidos</h2>
                <ul id="flexiselDemo3">

                    <li>
                        @foreach($favoritos as $favorito)
                        <div class="col-md-3 biseller-column">
                            <a href="{{route('producto-detalle',$favorito->slug)}}">
                                <img style="width: 200px;height: 200px" src="{{url('/')}}/{{$favorito->image}}"/>
                                <span class="price">{{$favorito->price}}</span>
                            </a>
                            <div class="ad-info">
                                <h5>{{$favorito->name}}</h5>
                                {{--<span>3 hour ago</span>--}}
                            </div>
                        </div>
                        @endforeach
                    </li>
                    <li>
                        @foreach($favoritos2 as $favorito2)
                            <div class="col-md-3 biseller-column">
                                <a href="{{route('producto-detalle',$favorito2->slug)}}">
                                    <img style="width: 200px;height: 200px" src="{{url('/')}}/{{$favorito2->image}}"/>
                                    <span class="price">{{$favorito2->price}}</span>
                                </a>
                                <div class="ad-info">
                                    <h5>{{$favorito2->name}}</h5>
                                    {{--<span>3 hour ago</span>--}}
                                </div>
                            </div>
                        @endforeach
                    </li>

                </ul>
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo3").flexisel({
                            visibleItems:1,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 5000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems:1
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems:1
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems:1
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="{{url('/')}}/js/jquery.flexisel.js"></script>
            </div>
        </div>
        <!-- //slider -->
    </div>

    @endsection

