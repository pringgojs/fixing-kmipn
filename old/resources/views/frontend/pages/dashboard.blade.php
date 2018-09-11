<section class="hero is-transparent is-fullwidth is-fullheight awalan">
  @include('frontend.partials.navbar')
  <div class="hero-body">
    <div class="container has-text-centered-mobile">
      <br>
      <br>
      <p data-aos="fade-right">
        <img src="{{ url('img/logoPutihHD.png') }}" alt="Logo" width="312" height="133">
      </p>
      <div class="newline"></div>
      <div class="newline"></div>
      <h1 class="title is-3 has-text-light" data-aos="fade-right" data-aos-delay="50">
        Kompetisi Mahasiswa Bidang<br/>
        Informatika Politeknik Nasional <br>
        2018
      </h1>
      <div class="newline"></div>
      <h2 class="subtitle is-5 has-text-light" data-aos="fade-right" data-aos-delay="150">
        <i>"Tantangan Tik Dalam Revolusi Industri 4.0"</i>
      </h2>
      <br>

      <p class="has-text-weight-bold">Politeknik Elektronika Negeri Surabaya</p>
      <p class="has-text-weight-bold">Surabaya 25 - 28 Oktober 2018</p>
      <br>
      <br>
    </div>
  </div>
</section>
@extends('frontend.layouts')
@section('title')
  KMIPN - Politeknik Elektronika Negeri Surabaya | Kompetisi Mahasiswa Informatika Politeknik Nasional
@endsection

<section class="hero is-fullwidth tengah is-medium">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h3 class="title is-3 has-text-white">LOMBA</h3>
      <div class="content">
        <div class="content">
          <div class="columns">
            <div class="column i">
              <img src="{{url('img/logo-lomba/Design_Animasi.png')}}" width="150" height="150">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/cipta_inovasi.png')}}" width="150" height="150">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/hackathon.png')}}" width="110" height="110">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/IoT.png')}}" width="190">
            </div>
          </div>
          <div class="columns">
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/EGov.png')}}" width="150" height="150">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/Game_Dev.png')}}" width="150" height="150">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/Bisnis_TIK.png')}}" width="150" height="110">
            </div>
            <div class="column is-3">
              <img src="{{url('img/logo-lomba/keamanan_Jaringan.png')}}" width="150" height="150">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('frontend.partials.footer')
