@extends('frontend.layouts')
<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>
@section('title')
    Tentang - KMIPN
@endsection

<section class="hero bawah is-fullwidth is-transparent is-large">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <h1 class="title is-3 has-text-light" data-aos="fade-up-right">About KMIPN</h1>
                    <div class="content" data-aos="fade-up-right" data-aos-delay="120">
                        <p class="has-text-left-desktop">KMIPN atau Kompetisi Mahasiswa Informatika Politeknik Nasional Tahun 2018, merupakan program Bakorma Politeknik se - Indonesia, sebagai upaya untuk meningkatkan kualitas peserta didik sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia. KMIPN diselenggarakan sebagai upaya pemerintah melalui Kemenristekdikti untuk peningkatan mutu perguruan tinggi khusunya politeknik. Kegiatan ini diharapkan menjadi ajang untuk menyalurkan kreativitas mahasiswa dalam pengembangan Teknologi Informasi dan Komunikasi di tingkat nasional. Mahasiswa sebagai pilar penting dalam pembangunan negara diharapkan dapat meningkatkan kemampuan dalam penguasaan TIK, dan dapat mengembangkan potensinya sebagai agen perubahan melalui pengembangan IPTEK di masa kini dan masa akan datang. Untuk pertama kalinya KMIPN akan diselenggarakan pada Tahun 2018 dengan tema “Tantangan TIK dalam Era Revolusi Industri 4.0”. Kegiatan KMIPN 2018 ini terdiri dari perlombaan di bidang TIK yang akan memunculkan inovasi - inovasi yang diharapkan berdampak besar baik di bidang TIK maupun sektor-sektor lainnya secara umum di Indonesia, pameran hasil karya peserta dan finalis KMIPN serta produk TIK dari sponsor untuk memperkenalkan perkembangan TIK kepada masyarakat luas, serta seminar tentang topik-topik terkini di bidang TIK.</p>
                    </div>
                </div>
                <div class="column is-6 has-text-centered container">
                    <p style="padding-top: 105px" data-aos="fade-up-left" data-aos-delay="200">
                        <img src="{{url('img/logoPutihHD.png')}}"/>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.footer')