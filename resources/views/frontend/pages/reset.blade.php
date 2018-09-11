@extends('frontend.layouts')

@section('title')
  Reset | KMIPN 2018
@endsection

@section('content')
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="col-md-12">
          <div class="col-sm-6">
            <div class="form">
                <h1 class="text-white">Reset Password</h1>

                <form role="form" action="{{ url('password/reset') }}" method="post">

                 {{ csrf_field()}}

                <input type="hidden" name="token" value="{{ $token }}">
                  <div class="form-group">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email Address">
                    @if ($errors->has('email'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pwd" placeholder="Password">
                    @if ($errors->has('password'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
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
@endsection
