@extends('frontend.layouts')

@section('title', 'Masuk Juri | KMIPN 2018')

@section('content')
<section class="home_banner_area" id="home">
    <form role="form" action="{{ url('juri/login') }}" method="POST">
        {{ csrf_field() }}
        <div class="banner_inner">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form">
                            <h1 class="text-white">Login Juri</h1>
                            <br>
                            <div class="form-group">
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            @if (session('error'))
                            <p class="text-warning">{{session('error')}}</p>
                            @endif
                            <div class="col text-right">
                                <button type="submit" class="genric-btn primary circle">MASUK</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection