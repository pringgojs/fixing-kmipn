@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body"></div>
</section>

@section('title') Edit Anggota Tim | KMIPN 2018 @endsection
<section class="hero tengah is-transparent is-fullwidth">
<div class="container default-container">
  <div class="panel panel-default panel-custom">
    <div class="panel-heading">
      <h4>Edit Anggota</h4>
    </div>
    <div class="panel-body">
      <form class="form-vertical" enctype="multipart/form-data" action="{{ url('/profile/submit_edit_anggota/'.$data->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="has-text-black">NIM</label>
          <input type="text" name="no_mahasiswa" class="form-control" value="{{ $data->no_mahasiswa }}" required placeholder="Nomor Induk Mahasiswa">
        </div>
        <div class="form-group">
          <label class="has-text-black">Nama Mahasiswa</label>
          <input type="text" name="fullname" class="form-control" value="{{ $data->fullname }}" required placeholder="Nama Lengkap">
        </div>
        @if($data->role == "Ketua")
        <div class="form-group">
          <label class="has-text-black">Kata Sandi
            <small>(optional)</small>
          </label>
          <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
        </div>
        @endif
        <div class="form-group">
          <label for="" class="has-text-black">E-mail</label>
          <input type="email" name="email" class="form-control" value="{{ $data->email }}" required placeholder="Email Aktif">
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Jurusan</label>
          <input type="text" name="jurusan" class="form-control" value="{{ $data->jurusan }}" required placeholder="Bidang Studi">
        </div>
        <div class="row">
          <div class="form-group col-md-7">
            <label for="" class="has-text-black">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" required class="form-control" value="{{ $data->tempat_lahir }}" placeholder="Tempat Lahir">
          </div>
          <div class="form-group col-md-5">
            <label for="" class="has-text-black">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Jenis Kelamin</label>
          <div class="checkbox">
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
              @if ($data->jenis_kelamin == 'Laki-laki')
              <option value="Laki-laki" selected>Laki-laki</option>
              @else
              <option value="Laki-laki">Laki-laki</option>
              @endif @if ($data->jenis_kelamin == 'Perempuan')
              <option value="Perempuan" selected>Perempuan</option>
              @else
              <option value="Perempuan">Perempuan</option>
              @endif
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">Alamat</label>
          <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat lengkap">{{ $data->alamat }}</textarea>
        </div>
        <div class="form-group">
          <label for="" class="has-text-black">No. Telepon</label>
          <div class="input-group">
            <span class="input-group-addon">+62</span>
            <input type="number" name="no_telp" value="{{ $data->no_telp }}" required class="form-control">
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
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
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
</section>
{{--@endsection--}}