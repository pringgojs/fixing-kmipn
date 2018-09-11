@extends('frontend.layouts')

@section('title', 'Masuk | KMIPN 2018')

@section('content')
  <!--================Home Banner Area =================-->
  <section class="home_banner_area" id="home">
    <form role="form" action="{{ url('auth/login') }}" method="POST">

      {{ csrf_field() }}

      <div class="banner_inner">
        <div class="container">
          <div class="col-sm-12">
            <div class="col-sm-6">
              <div class="form">
                <h1 class="text-white">MASUK</h1>
                <br>
                <div class="form-group">
                  <!--
                                              <label for="login_email" class="text-white"></label>
                  -->
                  <input name="email" type="email" id="login_email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your email">
                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong class="text-white">{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <!--
                                              <label for="login_pass" class="text-white">Your password</label>
                  -->
                  <input name="password" type="password" id="login_pass" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Your password">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="row">
                  <div class="col col-sm-auto">
                    <p class="text-white">Belum punya akun? <a href="{{ url('register') }}">Daftar sekarang</a><br>
                    Atau <a href="{{ url('forgot') }}">lupa password</a></p>
                  </div>
                  <div class="col text-right">
                    <button type="submit" class="genric-btn primary circle">MASUK</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!--================End Home Banner Area =================-->
  @endsection