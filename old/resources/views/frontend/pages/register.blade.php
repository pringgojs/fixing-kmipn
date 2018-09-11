@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body"></div>
</section>

@section('title')
  Registrasi Peserta Lomba | KMIPN 2018
@endsection

{{--@section('content')--}}
  {{--<div class="container-fluid bg-container">--}}
    {{--<div class="col-sm-offset-2 col-sm-8 col-xs-12">--}}
        {{--<div class="panel panel-default panel-custom">--}}
            {{--<div class="panel-heading custom-heading">--}}
              {{--<center>--}}
                {{--<i class="fa fa-user"></i>--}}
                {{--<br>--}}
                {{--KMIPN | TEAM REGISTER--}}
              {{--</center>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
              {{--<form role="form" action="{{ url('auth/register') }}" method="post">--}}
                {{--{{ csrf_field()}}--}}
                {{--<div class="form-group">--}}
                  {{--<label>Kategori Lomba</label>--}}
                  {{--<select class="form-control" name="kategori_id" required>--}}
                    {{--<option disabled selected>Pilih Bidang Lomba</option>--}}
                    {{--@foreach($kategori as $item)--}}
                      {{--<option value="{{ $item->id }}">{{ $item->kategori }}</option>--}}
                    {{--@endforeach--}}
                  {{--</select>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label>Nama TIM</label>--}}
                  {{--<input type="text" name="nama_tim" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Asal Politeknik</label>--}}
                  {{--<select class="form-control select2" name="politeknik_id" required>--}}
                    {{--<option disabled selected>Pilih Politeknik</option>--}}
                    {{--@foreach($politeknik as $item)--}}
                      {{--<option value="{{ $item->id }}">{{ $item->politeknik }}</option>--}}
                    {{--@endforeach--}}
                  {{--</select>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Jurusan</label>--}}
                  {{--<input type="text" name="jurusan" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">NIM Ketua</label>--}}
                  {{--<input type="text" name="no_mahasiswa" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Nama Ketua</label>--}}
                  {{--<input type="text" name="fullname" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">E-mail</label>--}}
                  {{--<input type="email" name="email" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Password</label>--}}
                  {{--<input type="password" name="password" required class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">No. Telepon</label>--}}
                  {{--<div class="input-group">--}}
                    {{--<span class="input-group-addon">+62</span>--}}
                    {{--<input type="number" name="no_telp" required class="form-control">--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Jenis Kelamin</label>--}}
                  {{--<div class="checkbox">--}}
                    {{--<label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>--}}
                    {{--<label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                  {{--<div class="form-group col-md-7">--}}
                    {{--<label for="">Tempat Lahir</label>--}}
                    {{--<input type="text" name="tempat_lahir" required class="form-control">--}}
                  {{--</div>--}}
                  {{--<div class="form-group col-md-5">--}}
                    {{--<label for="">Tanggal Lahir</label>--}}
                    {{--<input type="date" name="tgl_lahir" required class="form-control">--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                  {{--<label for="">Alamat</label>--}}
                  {{--<textarea name="alamat" rows="4" class="form-control" required></textarea>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<button type="submit" class="form-control btn btn-default">Submit</button>--}}
              {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--@endsection--}}

{{-- ------------------------------------------------------- --}}


<section class="hero tengah is-fullheight is-transparent is-fullwidth">
  <div class="hero-body">
    <div class="container">
      <div class="column is-6 is-offset-3">
        <div class="has-text-centered">
          <h3 class="title has-text-white is-3 is-uppercase">Registrasi KMIPN</h3>
        </div>
        <hr>
        <div class="">
          <form role="form" action="{{ url('auth/register') }}" method="POST">

            {{ csrf_field() }}

            <div class="field">
              <label class="label has-text-white-bis">Kategori Lomba</label>
              <div class="select is-danger is-medium is-fullwidth">
                <select name="kategori_id" required>
                  <option disabled selected>Pilih Bidang Lomba</option>
                  @foreach($kategori as $item)
                    <option class="has-text-black" value="{{ $item->id }}">{{ $item->kategori }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Nama Tim</label>
                  <div class="control">
                    <input name="nama_tim" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="Nama Tim" autofocus="">
                  </div>
                </div>
              </div>
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Asal Politeknik</label>
                  <div class="control form-group">
                    <div class="select is-danger is-medium">
                      <select class="select2" name="politeknik_id">
                        <option disabled selected>Pilih Politeknik</option>
                        @foreach($politeknik as $item)
                          <option class="has-text-black" value="{{ $item->id }}">{{ $item->politeknik }}</option>
                        @endforeach
                      </select>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="field">
              <label class="label has-text-white-bis">Nama Ketua</label>
              <div class="control">
                <input name="fullname" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="Nama Ketua">
              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">NIM</label>
                  <div class="control">
                    <input name="no_mahasiswa" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="NIM Ketua">
                  </div>
                </div>
              </div>
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Jurusan</label>
                  <div class="control">
                    <input name="jurusan" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="Jurusan Ketua">
                  </div>
                </div>
              </div>
            </div>
            <div class="field">
              <label class="label has-text-white-bis">Jenis Kelamin</label>
              <div class="control">
                <label class="radio" style="margin-right: 20px; margin-left: 17px">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki">
                  Laki Laki
                </label>
                <label class="radio">
                  <input type="radio" name="jenis_kelamin" value="Perempuan">
                  Perempuan
                </label>
              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Email</label>
                  <div class="control">
                    <input name="email" class="input is-medium has-text-weight-bold is-danger" type="email" placeholder="email">
                  </div>
                </div>
              </div>
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">No Telpon</label>
                  <div class="control">
                    <input name="no_telp" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="no telpon">
                  </div>
                </div>
              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Tempat Lahir</label>
                  <div class="control">
                    <input name="tempat_lahir" class="input is-medium has-text-weight-bold is-danger" type="text" placeholder="Tempat Lahir" autofocus="">
                  </div>
                </div>
              </div>
              <div class="column is-6">
                <div class="field">
                  <label class="label has-text-white-bis">Tanggal Lahir</label>
                  <div class="control">
                    <input name="tgl_lahir" class="input is-medium has-text-weight-bold" type="date" placeholder="Tanggal Lahir">
                  </div>
                </div>
              </div>
            </div>
            <div class="field">
              <label class="label has-text-white-bis">Alamat</label>
              <div class="control">
                <textarea name="alamat" class="textarea is-danger" type="text" placeholder="Alamat Lengkap"></textarea>
              </div>
            </div>
            <div class="field">
              <label class="label has-text-white-bis">Password</label>
              <div class="control">
                <input name="password" class="input is-medium has-text-weight-bold is-danger" type="password" placeholder="Password">
              </div>
            </div>

            <div class="columns">
              <div class="column is-6">
                <p>Sudah Punya akun, masuk <a href="{{ url('login') }}">disini.</a></p>
              </div>
              <div class="column is-6">
                <div class="field is-grouped is-grouped-right">
                  <div class="control">
                    <button type="submit" class="button is-white">Registrasi</button>
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