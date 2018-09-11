@extends('frontend.layouts')

@section('title', 'Keamanan Jaringan | KMIPN 2018')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Keamanan Jaringan</h2>
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
                    <img class="img-fluid" src="img/jaringan.png" alt="" width="250">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        <p>Lomba keamanan jaringan adalah lomba untuk menguji kemampuan mengamankan sistem komputer beserta jaringannya. Peserta akan berkompetisi dengan peserta lain dalam kemampuan mengkonfigurasi sistem yang aman dan melakukan identifikasi potensi celah keamanan dari sistem komputer yang ada kemudian memberikan solusi keamanannya.</p>
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
                    <p>1.  Tes Online Teori
                        <br/>
                        <br/>Peserta menjawab pertanyaan atau menyelesaikan kasus yang terkait dengan keamanan komputer. Tingkatan soal sejumlah sepuluh level.
                        <br/>
                        <br/>Durasi          : 100 menit
                        <br/>Jumlah Soal     : 100
                        <br/>Penilaian       : Nilai Tertinggi
                        <br/>
                        <br/>2.  Tes Online Praktik
                        <br/>Peserta diuji kemampuannya dalam mengidentifikasi potensi celah keamanan dari system komputer yang disediakan kemudian memberikan solusi keamanannya. Panitia akan menyediakan server yang akan diidentifikasi oleh peserta.
                        <br/>Nilai yang didapat peserta berdasarkan poin hasil identifikasi potensi celah keamanan dari sistem komputer yang disediakan dan poin dari solusi keamanan yang disarankan. Peserta juga mempunyai misi untuk mendapatkan informasi penting di dalam skenario keamanan yang nanti diberikan.
                        <br/>
                        <br/>Durasi          : 3 jam
                        <br/>Jumlah soal     : -
                        <br/>Penilaian       : Nilai tertinggi dari hasil akumulasi point setiap soal
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Final</h3>
                    <p>Peserta membangun server dan membangun service dengan aspek keamanan. Peserta yang bisa menemukan celah sebanyak mungkin dari server peserta lain akan menjadi pemenang.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Penilaian Penyisihan</h3>
                    <p>Pengetahuan umum di bidang keamanan jaringan dan sistem komputer:
                        <br/>1.  Peserta akan diberikan soal tentang keamanan jaringan dengan jumlah dan level tertentu
                        <br/>2.  Peserta diharuskan menyelesaikan soal tersebut dalam kurun waktu yang ditentukan panitia
                        <br/>3.  Peserta harus memastikan proses pengerjaan dan submit hasil termasuk koneksi internet untuk mengakses soal.
                        <br/>
                        <br/>Kemampuan melakukan identifikasi potensi celah keamanan dan memberikan solusi:
                        <br/>1.  Peserta akan dihadapkan pada kasus keamanan jaringan;
                        <br/>2.  Peserta diminta untuk melakukan analisis untuk mengidentifikasi potensi celah keamanan;
                        <br/>3.  Peserta memberikan solusi keamanan dari hasil identifikasi;
                        <br/>4.  Peserta kemudian mengumpulkan laporan identifikasi celah keamanan dan solusinya melalui mekanisme yang ditentukan panitia.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Penilaian Babak Final</h3>
                    <p>Kemampuan mengkonfigurasi sistem yang aman
                        <br/>
                        <br/>1.  Peserta akan diminta untuk mengkonfigurasi masing-masing node network yang dimiliki dengan tingkat keamanan yang cukup
                        <br/>2.  Peserta diminta untuk mengamankan satu aset di lokasi masing-masing dalam bentuk file atau yang lainnya
                        <br/>3.  Masing-masing finalis akan diberi waktu tertentu untuk mengimplementasi poin 1
                        <br/>4.  Kemudian masing-masing kelompok diminta untuk melakukan identifikasi untuk menemukan celah keamanan;
                        <br/>5.  Peserta yang dari sisi kecepatan, hasil identifikasi celah & solusi, dan perolehan aset dari tim lain akan mendapatkan poin.
                    </p>
                </div>
            </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Penilaian</h3>
                    <p>1.   Penilaian Babak Penyisihan Test Online dilaksanakan sebagai berikut :
                        <br/>a.  Jawaban untuk setiap soal pada tahap seleksi ini bernilai 1 (benar) atau 0 (salah).
                        <br/>b.  Level soal tertentu yang berhasil diselesaikan.
                        <br/>c.  Peringkat   pertama   ditentukan   berdasarkan   akumulasi   jumlah   nilai   yang dikumpulkan dan waktu yang digunakan untuk menyelesaikan soal.
                        <br/>
                        <br/>2.  Penilaian Babak Penyisihan Praktik Keamanan.
                        <br/>Dilaksanakan sebagai berikut :
                        <br/>
                        <br/>a.  Aspek-aspek penilaikan program sistem yang diidentifikasi pada tahap seleksi ini :
                        <br/>I.  Banyaknya kasus yang dapat dipecahkan.
                        <br/>II. Waktu yang digunakan untuk menyelesaikan kasus.
                        <br/>
                        <br/>b.  Peringkat akan ditentukan berdasarkan semua aspek menurut prioritas i dan ii.
                        <br/>
                        <br/>3.  Sejumlah  minimum  10  tim  peserta  akan  ditentukan  sebagai  finalis  Lomba  Keamanan Jaringan berdasarkan hasil Babak Penyisihan.
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