@extends('frontend.layouts')

@section('title')
  Forgot Password | KMIPN 2018
@endsection
@section('content')

    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form">
                            <h1 class="text-white">LUPA PASSWORD</h1>
                            <br/>

                            <form role="form" action="{{ url('auth/forgot') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input name="email" type="email" id="login_email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="genric-btn primary circle">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--<div class="container">--}}
  {{--<br><br>--}}
    {{--<div class="col-sm-offset-4 col-sm-4 col-xs-12">--}}
        {{--<div class="panel panel-default panel-login">--}}
            {{--<div class="panel-heading login-heading has-text-black">--}}
                {{--<i class="fa fa-user"></i>--}}
                {{--<br>--}}
                {{--KMIPN | FORGOT PASSWORD--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
              {{--<form role="form" action="{{ url('auth/forgot') }}" method="post">--}}
                {{--{{ csrf_field()}}--}}
                {{--<div class="form-group">--}}
                  {{--<label for="email" class="has-text-black">Email address</label>--}}
                  {{--<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email">--}}
                  {{--@if ($errors->has('email'))--}}
                    {{--<span class="invalid-feedback">--}}
                      {{--<strong>{{ $errors->first('email') }}</strong>--}}
                    {{--</span>--}}
                  {{--@endif--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<button type="submit" class="form-control button">Submit</button>--}}
              {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
@endsection
