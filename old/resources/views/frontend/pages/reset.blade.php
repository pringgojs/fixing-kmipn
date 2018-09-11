@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
</section>

@section('title')
  Reset | KMIPN 2018
@endsection
<section class="hero tengah is-fullheight is-transparent is-fullwidth">
<br><br>
  <div class="container">
    <div class="col-sm-offset-4 col-sm-4 col-xs-12">
        <div class="panel panel-default panel-login">
            <div class="panel-heading login-heading">
              <center class="has-text-grey">
                <i class="fa fa-user"></i>
                <br>
                KMIPN | Reset Password
              </center>
            </div>
            <div class="panel-body">
              <form role="form" action="{{ url('password/reset') }}" method="post">
               {{ csrf_field()}}
              <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                  <label for="email" class="has-text-grey">Email address</label>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email">
                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="pwd" class="has-text-grey">Password</label>
                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pwd">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <br>
                <button type="submit" class="form-control btn btn-default">Submit</button>
              </form>
            </div>
        </div>
    </div>
  </div>
</section>
