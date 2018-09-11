@extends('frontend.layouts')

@section('title', 'e-Government')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>E-Government</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- Start Sample Area -->
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6" style="display: flex; align-items: center; flex-wrap: wrap;">
                    <img class="img-fluid" src="img/egov.png" alt="" width="300">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        <p>Lomba aplikasi e-Government merupakan lomba aplikasi yang memanfaatkan teknologi informasi berbasis internet oleh pemerintah dalam memberikan informasi dan layanan kepada masyarakat, bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya masyarakat atau bisnis dapat berinteraksi, atau memberikan informasi kepada pemerintah. Aplikasi e-Government dapat diimplementasikan dalam bentuk web-based, mobile-based atau kombinasi keduanya.
                            <br/>
                            <br/>Terdapat setidaknya 4 kategori e-Government, yaitu aplikasi yang digunakan untuk mendukung relasi antara: (1) Pemerintah (Government) dan Masyarakat (Citizen), atau sebaliknya (disebut G2C atau C2G); (2) Pemerintah dan Usahawan, atau sebaliknya (G2B atau B2G); (3) Pemerintah dan Pemerintah lainnya (G2G); dan (4) Pemerintah dan Pegawai pemerintah itu sendiri (G2E).</p>
                            <a class="main_btn" href="{{ url('register') }}">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sample Area -->
    <!-- Start Button -->
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Penyisihan Babak 1</h3>
                    <p>Babak penyisihan 1 dari kategori pengumpulan proposal. Proposal harus memperhatikan ketentuan berikut :
                        <br/>
                        <br/>1.  Proposal mencakup sub bidang kategori diatas yakni G2C, G2B, G2E atau G2G.
                        <br/>2.  Proposal menggunakan Bahasa Indonesia
                        <br/>3.  Proposal yang diajukan merupakan ide yang original
                        <br/>4.  Sampul proposal berisi informasi nama tim, nama anggota, nama universitas.
                        <br/>5.  Proposal dapat direalisasikan
                        <br/>6.  Proposal tidak mengandung unsur SARA.
                        <br/>
                        <br/>Proposal ditulis dalam kertas A4 menggukan font Times New Roman (12) maksimal 40 Halaman.
                        <br/>
                        <br/>Struktur proposal adalah sebagai berikut :
                        <br/>
                        <br/>i.  Judul / Nama Aplikasi e-Government
                        <br/>ii. Latar Belakang
                        <br/>iii.    Tujuan dan manfaat Aplikasi
                        <br/>iv. Batasan Aplikasi
                        <br/>v.  Implementasi
                        <br/>vi. Screenshot mockup aplikasi
                        <br/>vii.    Target Pengguna Aplikasi
                        <br/>
                        <br/>Proposal diupload dalam format .pdf dengan penamaan :
                        <br/>
                        <br/><strong>EGOV_Tahap1_KMIPN2018__[Nama tim]_[Nama Karya]_[ ASAL POLITEKNIK (TIDAK DISINGKAT )].</strong>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Final</h3>
                    <p>Pada babak final, finalis harus membawa aplikasi atau produk yang dibuat. Penjurian akan dilakukan melalui presentasi di hadapan dewan juri. Peserta menjelaskan aplikasi atau produk yang dibawa, melakukan demonstrasi, dan menjawab pertanyaan yang diajukan dewan juri.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Penilaian</h3>
                    <p>1.  Tahap 1
                        <br/>•   Permasalahan (15 %)
                        <br/>•   Pemaparan masalah yang didukung dengan data, dokumen dan mockup (10%)
                        <br/>•   Inovasi produk (20%)
                        <br/>•   Kebermanfaatan produk (20%)
                        <br/>•   Kesesuaian dengan tema (25%)
                        <br/>
                        <br/>2.  Final
                        <br/>•   Penguasaan materi (30%)
                        <br/>•   Kemampuan menjawab pertanyaan (20%)
                        <br/>•   Fungsi dan fitur (30%)
                        <br/>•   Keunikan dan kesesuaian dengan tema (20%)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Timeline</h3>
                <div class="row">
                    <div class="col-md-2 col-lg-3">
                        <div class="single-defination">
                            <h4 class="mb-20">1 - 30 September 2018</h4>
                            <p>Pendaftaran dan Penyisihan Babak 1</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">7 Oktober 2018</h4>
                            <p>Pengumuman Lolos Tahap 1</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">7 - 21 Oktober 2018</h4>
                            <p>Penyisihan Babak 2</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">24 Oktober 2018</h4>
                            <p>Pengumuman Lolos Final</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3">
                        <div class="single-defination">
                            <h4 class="mb-20">8 - 10 November 2018</h4>
                            <p>Grand Final KMIPN 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
@endsection