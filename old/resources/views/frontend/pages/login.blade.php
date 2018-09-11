@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body"></div>
</section>

@section('title')
  Login | KMIPN 2018
@endsection
{{--@section('content')--}}
  {{--<div class="container-fluid bg-container">--}}
    {{--<div class="col-sm-offset-4 col-sm-4 col-xs-12">--}}
        {{--<div class="panel panel-default panel-custom">--}}
            {{--<div class="panel-heading custom-heading">--}}
              {{--<center>--}}
                {{--<i class="fa fa-user"></i>--}}
                {{--<br>--}}
                {{--KMIPN | USER LOGIN--}}
              {{--</center>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
              {{--<form role="form" action="{{ url('auth/login') }}" method="post">--}}
                {{--{{ csrf_field()}}--}}
                {{--<div class="form-group">--}}
                  {{--<label for="email">Email address</label>--}}
                  {{--<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email">--}}
                  {{--@if ($errors->has('email'))--}}
                    {{--<span class="invalid-feedback">--}}
                      {{--<strong>{{ $errors->first('email') }}</strong>--}}
                    {{--</span>--}}
                  {{--@endif--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="pwd">Password</label>--}}
                  {{--<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pwd">--}}
                  {{--@if ($errors->has('password'))--}}
                    {{--<span class="invalid-feedback">--}}
                      {{--<strong>{{ $errors->first('password') }}</strong>--}}
                    {{--</span>--}}
                  {{--@endif--}}
                {{--</div>--}}
                {{--<div class="checkbox">--}}
                  {{--<label><input type="checkbox"> Remember me</label> |--}}
                  {{--<a href="{{ url('forgot') }}">Lupa kata sandi?</a>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<button type="submit" class="form-control btn btn-default">Sign In</button>--}}
              {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--@endsection--}}

{{-- -------------------------------------------- --}}

<section class="hero tengah is-fullheight is-transparent is-fullwidth">
  <div class="hero-body">
    <div class="container">
      <div class="column is-8 is-offset-2 has-text-centered-mobile">
        <h3 class="title has-text-white is-3 is-uppercase">Login</h3>
        <div class="">
          <form role="form" action="{{ url('auth/login') }}" method="POST">

            {{ csrf_field()}}

            <div class="field">
              <div class="control">
                <input name="email" id="email" class="input is-medium has-text-weight-bold {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" placeholder="Your Email" autofocus="">

                {{--@if ($errors->has('email'))--}}
                  {{--<span class="invalid-feedback">--}}
                    {{--<strong>{{ $errrors->first('email') }}</strong>--}}
                  {{--</span>--}}
                {{--@endif--}}

              </div>
            </div>

            <div class="field">
              <div class="control">
                <input name="password" id="pwd" class="input is-medium has-text-weight-bold {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="Your Password">

                {{--@if ($errors->has('password'))--}}
                  {{--<span class="invalid-feedback">--}}
                      {{--<strong>{{ $errors->first('password') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}

              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <p>Belum Punya akun, daftar aja <a href="{{ url('register') }}">disini.</a></p>
              </div>
              <div class="column is-6">
                <div class="field is-grouped is-grouped-right">
                  <div class="control">
                    <button class="button is-white"><a href="{{ url('forgot') }}">Forgot Password</a></button>
                  </div>
                  <div class="control">
                    <button type="submit" class="button is-white">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>