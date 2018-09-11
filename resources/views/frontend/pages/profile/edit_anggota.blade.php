@extends('frontend.playouts')

@section('title', 'Edit Anggota | KMIPN 2018')

@section('content')

  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome, {{ $anggota[0]->fullname }}</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p class="hidden-lg hidden-md">Welcome, {{ $anggota[0]->fullname }}</p>
              </a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="{{ url('auth/logout') }}">
                <p>Log out</p>
              </a>
            </li>
            <li class="separator hidden-lg"></li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="header">
              <h4 class="title">Tambah Anggota Baru</h4>
            </div>
            <div class="content">
              <form class="form-vertical" enctype="multipart/form-data" action="{{ url('/profile/submit_edit_anggota/'.$data->id) }}" method="post" >

                {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>NIM / NRP</label>
                      <input name="no_mahasiswa" type="text" class="form-control" placeholder="Nomor Induk" value="{{ $data->no_mahasiswa }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>Nama Mahasiswa</label>
                      <input name="fullname" type="text" class="form-control" placeholder="Nama Anggota" value="{{ $data->fullname }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>E-mail Aktif</label>
                      <input name="email" type="text" class="form-control" placeholder="Email" value="{{ $data->email }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>Jurusan / Program Studi</label>
                      <input name="jurusan" type="text" class="form-control" placeholder="Asal Jurusan" value="{{ $data->jurusan }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input name="tempat_lahir" type="text" class="form-control" placeholder="Kota / Kabupaten Kelahiran" value="{{ $data->tempat_lahir }}">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input name="tgl_lahir" type="Date" class="form-control" placeholder="Here can be your description" value="{{ $data->tgl_lahir }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label for="" class="has-text-black">Jenis Kelamin</label>
                      <div class="checkbox">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                          <option disabled>Pilih Salah Satu</option>
                          @if($data->jenis_kelamin == 'Laki-laki')
                            <option value="Laki-laki" selected>Laki-laki</option>
                          @else
                            <option value="Laki-laki">Laki-laki</option>
                          @endif

                          @if($data->jenis_kelamin == 'Perempuan')
                            <option value="Perempuan" selected>Perempuan</option>
                          @else
                            <option value="Perempuan">Perempuan</option>
                          @endif
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input name="alamat" type="text" class="form-control" placeholder="Alamat Asal" value="{{ $data->alamat }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-11">
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input name="no_telp" type="text" class="form-control" placeholder="Nomor Telepon" value="{{ $data->no_telp }}">
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="user-photo">
                    <label for="" class="has-text-black">Upload Foto KTM</label>
                    <input type="file" name="image" accept="image/*" id="image" style="opacity:1">
                    <input class="file-input" type="hidden" name="photo" id="photo">
                    <div class="has-text-black"> Photo (Max File Size: 1MB)</div>
                    <div class="upload">
                      <div class="upload-content">
                        @if (empty($data->photo))
                          <img src="{{ url('img/default.jpg') }}" id="preview-image" width="500">
                        @else
                          @if (file_exists(public_path('ktm/'.$data->photo)))
                            <img src="{{ url('ktm/'.$data->photo) }}" id="preview-image">
                          @else
                            <img src="{{ url('img/default.jpg') }}" id="preview-image" width="500">
                          @endif
                        @endif
                      </div><br><br><br>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
      $('#image').on('change', function() {

          if(this.files[0].size > 1024000){
              alert('File tidak boleh lebih dari 1 MB');
              $('#image').val('');
              return false;
          }

      });

  </script>
@endsection