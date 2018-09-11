@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body"></div>
</section>

@section('title') Tambah Anggota Tim | KMIPN 2018 @endsection
{{--@section('content')--}}
<section class="hero tengah is-transparent is-fullwidth">
<div class="container default-container">
  <div class="panel panel-default panel-custom">
    <div class="panel-heading">
      <h4 class="has-text-black">Tambah Anggota Baru</h4>
    </div>
    <div class="panel-body">
      <form class="form-vertical" enctype="multipart/form-data" action="{{ url('/profile/submit_add_anggota/') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="has-text-black">NIM</label>
          <input type="text" name="no_mahasiswa" class="form-control" required placeholder="Nomor Induk Mahasiswa">
        </div>
        <div class="form-group">
          <label class="has-text-black">Nama Mahasiswa</label>
          <input type="text" name="fullname" class="form-control" required placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">E-mail</label>
          <input type="email" name="email" class="form-control" required placeholder="Email Aktif">
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Jurusan</label>
          <input type="text" name="jurusan" class="form-control" required placeholder="Bidang Studi">
        </div>
        <div class="row">
          <div class="form-group col-md-7">
            <label for="" class="has-text-black">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" required class="form-control" placeholder="Tempat Lahir">
          </div>
          <div class="form-group col-md-5">
            <label for="" class="has-text-black">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" required class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Jenis Kelamin</label>
          <div class="checkbox">
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Alamat</label>
          <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat lengkap"></textarea>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">No. Telepon</label>
          <div class="input-group">
            <span class="input-group-addon">+62</span>
            <input type="number" name="no_telp" required class="form-control">
          </div>
        </div>
        <div class="col-md-12">
          <div class="user-photo">
            <div class="file">
              <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label has-text-black">
                    Choose a file…
                  </span>
                </span>
                          </label>
                        </div>
            <input class="file-input" type="file" name="image" accept="image/*"  id="image" style="opacity:0">
            <input type="hidden" name="photo" id="photo">
            <div class="has-text-black"> Photo (Max File Size: 1MB)</div>
            <div class="upload">
              <div class="upload-content">
                <img src="{{ url('/img/default.jpg') }}" id="preview-image" width="500">
              </div><br><br><br>
            </div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
{{--@endsection--}}