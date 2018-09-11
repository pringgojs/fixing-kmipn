@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body"></div>
</section>

@section('title')
  Dashboard Tim | KMIPN 2018
@endsection
{{--@section('content')--}}
<section class="hero tengah is-fullheight is-transparent is-fullwidth">
  <div class="container">
    <div class="panel panel-default panel-custom">
      <div class="panel-heading">
        <h4>Informasi Tim</h4>
      </div>
      <div class="panel-body">
        <form class="form-vertical" action="{{ url('/profile/submit_edit_tim/'.$tim->id) }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Nama Tim</label>
            <input type="text" name="nama_tim" value="{{ $tim->nama_tim }}" class="form-control input has-text-black" required>
          </div>
          <div class="form-group">
            <label>Asal Politeknik</label>
            <select class="form-control select2" name="politeknik_id" required>
              <option disabled selected>Pilih Politeknik</option>
                @foreach($politeknik as $item)
                  @if($tim->politeknik_id == $item->id)
                    <option style="color: #0a0a0a" value="{{ $item->id }}" selected>{{ $item->politeknik }}</option>
                  @else
                    <option style="color: #0a0a0a" value="{{ $item->id }}">{{ $item->politeknik }}</option>
                  @endif
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>File Proposal (Maximum File Upload 3 Mb)</label>
            <input type="file" name="file_proposal" id="file_proposal" class="form-control">
            <a href="{{ url('proposal/'.$tim->file_proposal) }}">{{ $tim->file_proposal }}</a>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $('#file_proposal').on('change', function() {

    if(this.files[0].size > 3072000){
      alert('File tidak boleh lebih dari 3 MB');
      $('#file_proposal').val('');
      return false;
    }

    });
  </script>
</section>
{{--@endsection--}}
