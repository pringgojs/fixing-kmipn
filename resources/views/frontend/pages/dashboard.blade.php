@extends('frontend.layouts')

@section('title', 'KMIPN 2018 | Politeknik ELektronika Negeri Surabaya')

@section('content')

  <!--================Home Banner Area =================-->
  <section class="home_banner_area" id="home">
    <div class="banner_inner">
      <div class="container">
        <div class="row banner_content">
          <div class="col-lg-9">
            <h2><font size="10">Kompetisi Mahasiswa <br />bidang Informatika Politeknik Nasional 2018</font></h2>
            <h3>Politeknik Elektronika Negeri Surabaya, 7 - 10 November 2018</h3>
            <br /><a target="_blank" class="banner_btn" href="https://drive.google.com/file/d/1_b7pqVZMO_CDUVzp54mKbaiLvU9-XpLj/view?usp=sharing">Unduh Panduan</a>
          </div>
          <div class="col-lg-3">
            <div class="banner_map_img">
              <img class="img-fluid" src="{{ url('img/banner/tugu.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
  <!--================Interior Area =================-->
  <section class="interior_area" id="tentang">
    <div class="container">
      <div class="interior_inner row">
        <div class="col-lg-6" style="display: flex; align-items: center; flex-wrap: wrap;">
          <img class="img-fluid" src="{{ url('img/kmipn.png') }}" alt="" width="500">
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="interior_text">
            <h4>Tentang KMIPN</h4>
            <p>KMIPN atau Kompetisi Mahasiswa Informatika Politeknik Nasional Tahun 2018, merupakan program Bakorma Politeknik se - Indonesia, sebagai upaya untuk meningkatkan kualitas peserta didik sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia. KMIPN diselenggarakan sebagai upaya pemerintah melalui Kemenristekdikti untuk peningkatan mutu perguruan tinggi khusunya politeknik. Kegiatan ini diharapkan menjadi ajang untuk menyalurkan kreativitas mahasiswa dalam pengembangan Teknologi Informasi dan Komunikasi di tingkat nasional. Untuk pertama kalinya KMIPN akan diselenggarakan pada Tahun 2018 dengan tema <br /><strong>“Tantangan TIK dalam Era Revolusi Industri 4.0”</strong></p>
            <button class="main_btn" data-toggle="modal" data-target=".tl">Lihat Timeline</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Interior Area =================-->

  {{-- Timeline --}}
  <div class="modal fade tl" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header home_content">
          {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
          <h4 class="modal-title" id="myModal">Timeline Lomba</h4>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="table-responsive-lg">
              <table class="table table-hover">
                <thead class="thead" align="center">
                  <tr>
                    <th>Kategori</th>
                    <th>Batas Pendaftaran</th>
                    <th>Batas Babak Penyisihan 1</th>
                    <th>Pengumuman Lolos ke Babak Penyisihan 2</th>
                    <th>Batas Babak Penyisihan 2</th>
                    <th>Pengumuman Lolos ke Babak Final</th>
                    <th>Babak Final</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Internet of Things</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td>7 Oktober 2018</td>
                    <td>7 - 21 Oktober 2018</td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Bisnis TIK</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td> - </td>
                    <td> - </td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Hackathon</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td> - </td>
                    <td> - </td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Desain Animasi</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td>7 Oktober 2018</td>
                    <td>7 - 21 Oktober 2018</td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Game Development</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td>7 Oktober 2018</td>
                    <td>7 - 21 Oktober 2018</td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>e-Government</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td>7 Oktober 2018</td>
                    <td>7 - 21 Oktober 2018</td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Keamanan Jaringan</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td> - </td>
                    <td> - </td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                  <tr>
                    <td>Cipta Inovasi</td>
                    <td>1 - 30 September 2018</td>
                    <td>30 September 2018</td>
                    <td> - </td>
                    <td> - </td>
                    <td>24 Oktober 2018</td>
                    <td>8 - 10 November</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <button class="basic_close btn main_btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {
        $('#basic').popup();
    });
  </script>

  <!--================Feature Area =================-->
  <section class="feature_area p_120" id="feature">
    <div class="container">
      <div class="main_title">
        <h2>Lomba</h2>
      </div>
      <div class="feature_inner row">
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('iot') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/iot.png" alt="" width="180">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('bistik') }}">
            <div class="feature_item" >
              <div class="text-center">
                <img src="img/bistik.png" alt="" width="136">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('hackathon') }}">
            <div class="feature_item">
              <div class="text-center">
                <img src="img/hackathon.png" alt="" width="95">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('anim') }}">
            <div class="feature_item">
              <div class="text-center">
                <img src="img/anim.png" alt="" width="147">
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="feature_inner row">
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('game') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/game.png" alt="" width="160">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('egov') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/egov.png" alt="" width="150">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('jaringan') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/jaringan.png" alt="" width="158">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('cipta') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/cipta.png" alt="" width="149">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--================End Feature Area =================-->

  <!--================Price Area =================-->
  {{--<section class="price_area p_120" id="price">--}}
    {{--<div class="container">--}}
      {{--<div class="main_title">--}}
        {{--<h2>Informasi Terbaru</h2>--}}
      {{--</div>--}}
      {{--<div class="latest_news_inner row">--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="l_news_item">--}}
            {{--<a class="date" href="">10 April, 2018</a>--}}
            {{--<a href=""><h4>Benjamin Franklin Method Of Habit Formation</h4></a>--}}
            {{--<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>--}}
            {{--<div class="post_view">--}}
              {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>--}}
              {{--<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>--}}
              {{--<a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="l_news_item">--}}
            {{--<a class="date" href="#">10 April, 2018</a>--}}
            {{--<a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>--}}
            {{--<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>--}}
            {{--<div class="post_view">--}}
              {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>--}}
              {{--<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>--}}
              {{--<a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="l_news_item">--}}
            {{--<a class="date" href="#">10 April, 2018</a>--}}
            {{--<a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>--}}
            {{--<p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>--}}
            {{--<div class="post_view">--}}
              {{--<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>--}}
              {{--<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>--}}
              {{--<a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}
  <!--================End Price Area =================-->


  <section class="price_area p_120" id="price">
    <div class="container">
      <div class="main_title">
        <h2>Informasi Terbaru</h2>
      </div>
      <div class="latest_news_inner row">

        @foreach($artikel as $item)
        <div class="col-lg-4">
          <div class="l_news_item">
            <a class="date" href="{{ url('artikel/'.$item->slug) }}">{{ $item->created_at }}</a>
            <a href="{{ url('artikel/'.$item->slug) }}"><h4>{{ $item->title }}</h4></a>
            <img src="artikel/{{ $item->photo }}" width="150">
            {{--<p>{{ $item->slug }}</p>--}}
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>
@endsection