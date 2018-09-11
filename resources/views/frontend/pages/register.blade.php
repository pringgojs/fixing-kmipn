@extends('frontend.layouts')

@section('title', 'Daftar | KMIPN 2018')

@section('content')
  <!--================Home Banner Area =================-->
  <section class="home_banner_area" id="home">
    <div class="banner_inner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-sm-2"></div>
          <div class="col-sm-8">
            <div class="">
              <form role="form" action="{{ url('auth/register') }}" method="POST">

                {{ csrf_field() }}

              <div class="form">
                <h1 class="text-white text-xl-center">REGISTRASI KMIPN</h1>
                <div class="is-divider is-white"></div>
                <br>
                <div class="form-group">
                  <div class="form-select">
                    <select name="kategori_id" title="kategori_lomba" id="" required>
                      <option disabled selected>Pilih bidang lomba</option>
                      @foreach($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <input name="nama_tim" type="text" id="nama_tim" class="form-control" placeholder="Nama Tim" required>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group control">
                        <select class="select2" name="politeknik_id" required>
                          <option disabled selected>Asal Politeknik</option>
                          @foreach($politeknik as $item)
                            <option id="hapus" value="{{ $item->id }}">{{ $item->politeknik }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="is-divider is-white"></div>
                <h3 class="text-white text-lg-center text-uppercase">Data Ketua Tim</h3>
                <br>
                <div class="form-group">
                  <input type="text" name="fullname" class="form-control" placeholder="Nama Ketua" required>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="no_mahasiswa" class="form-control" placeholder="NIM / NRP" required>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group text-white">
                  <div class="form-check-inline">
                    <label class="form-check-label" for="laki_laki">
                      <input type="radio" class="form-check-input" id="laki_laki" name="jenis_kelamin" value="Laki-laki" checked required>Laki-Laki
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label" for="perempuan">
                      <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan" required>Perempuan
                    </label>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="no_telp" class="form-control" placeholder="No. Telfon" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="alamat" class="single-textarea" placeholder="Alamat lengkap" required></textarea>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required data-toggle="popover" title="Password Strength" data-content="Enter Password...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm Password" required>
                  </div>
                </div>
                <input type="submit" name="register" id="register" value="Register" class="genric-btn primary radius pull-right">
              </div>
              </form>
            </div>
          </div>
          <div class="col col-sm-2"></div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
  @endsection