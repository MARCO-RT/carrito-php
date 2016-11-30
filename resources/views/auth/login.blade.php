@extends('store.template.principal')
@section('content')
    <!-- resources/views/auth/login.blade.php -->
            <div  style="padding-top: 5rem;padding-bottom: 10rem" class="total-ads main-grid-border">
                     <div class="container">
                        <div style="text-align: center;padding-bottom: 2rem" class="logo col-lg-12">
                            <a href="#"><span>Lo</span>gin</a>
                        </div>

                        <div class="row">
                            <div class="col-md-offset-2 col-lg-8">
                                @include('store.partials.errors')
                                <form method="POST" action="/auth/login">
                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                    </div>

                                    <div class="form-group">
                                        <input  type="checkbox" name="remember"> Remember Me
                                    </div>

                                    <div class="form-group">
                                        <button class="btn-info btn btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>

    @endsection