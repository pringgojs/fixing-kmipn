@extends('frontend.layouts')

@section('title', 'Internet of Things | KMIPN 2018')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Internet of Things</h2>
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
                    <img class="img-fluid" src="img/iot.png" alt="" width="300">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        Internet of Things (IoT) / Piranti Cerdas merupakan suatu lomba yang memanfaatkan konsep dari suatu objek yang memiliki kemapuan untuk mentransfer data melalui jaringan tanpa memerlukan interaksi antara manusia dengan manusia atau manusia dengan komputer.</p>
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
                    <h3 class="text-heading title_color">Kriteria Peserta dan Usulan Proposal</h3>
                    <p>1.	Jumlah anggota kelompok pengusul berjumlah 1- 3 orang.
                        <br/>2.	Kesempatan bagi seluruh mahasiswa politeknik yang memiliki ide yang kreatif dan inovatif.
                        <br/>3.	Bidang usulan tidak diharuskan sesuai dengan bidang ilmu pengusul, guna memberikan.
                        <br/>
                        <br/>Proposal yang di upload harus memperhatikan ketentuan berikut :
                        <br/>
                        <br/>1.	Menggunakan penulisan Bahasa Indonesia sesuai dengan Ejaan Yang Disempurnakan.
                        <br/>2.	Ide piranti cerdas yang diajukan merupakan ide yang dapat dipertanggungjawabkan keorisinilannya.
                        <br/>3.	Penulisan proposal dan ide yang diajukan tidak diperbolehkan mengandung unsur SARA, ujaran kebencian ataupun yang tidak sesuai dengan norma kesopanan/kesusilaan.
                        <br/>4.	Kandungan tulisan dalam proposal tidak bersifat ofensif ke pihak tertentu.
                        <br/>5.	Penulisan disusun secara logis dan sistematis (proposan karya yang sistematis secara umum mengandung unsur identifikasi, analisis dan kesimpulan).
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Sistematika Penulisan Proposal</h3>
                    <p>Proposal Internet Of Thing (IoT) KMIPN 2018 harus ditulis sesuai petunjuk berikut :
                        <br/>
                        <br/>1.	Ditulis menggunakan huruf Times New Roman ukuran 12 pt, dengan jarak baris 1,15, ukuran A4, maksimal 25 halaman.
                        <br/>2.	Sampul proposal memuat informasi nama tim, nama anggota, judul usulan, asal politeknik dan logo KMIPN 2018 yang keseluruhan dapat dibaca dengan jelas.
                        <br/>3.	Mengikuti struktur sebagai berikut :
                        <br/>a.	Cover Proposal
                        <br/>i.	Judul / Nama Piranti Cerdas
                        <br/>ii.	Nama Tim dan Anggota
                        <br/>iii.	Logo KMIPN 2018 di pojok kiri atas dan logo universitas di pojok kanan atas
                        <br/>b.	Latar Belakang
                        <br/>c.	Tujuan dan Manfaat
                        <br/>d.	Metode
                        <br/>e.	Analisis
                        <br/>f.	Implementasi
                        <br/>g.	Desain Mock-Up dan dokumentasi
                        <br/>h.	Daftar Pustaka
                        <br/>
                        <br/>Proposal maksimal berukuran 5 MB diupload dengan format .pdf dengan pola nama file :
                        <br/><strong>IOT_KMIPN2018_[NAMA TIM]_[ ASAL POLITEKNIK (TIDAK DISINGKAT )]
                        </strong></p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Penyisihan 1</h3>
                    <p>Seleksi akan dilakukan oleh tim juri KMIPN 2018 yang sangat kompeten pada bidangnya.
                        <br/>Kriteria penilaian usulan yang diajukan adalah sebagai berikut :
                        <br/>
                        <br/>1. Aspek kreatif, futuristik dan Inovatif gagasan.
                        <br/>2. Logis dan Implementatif
                        <br/>3. Kesesuaian dengan Tema
                        <br/>4. Kebermanfaatan gagasan
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Penyisihan 2</h3>
                    <p>Pada tahap ini, peserta yang lolos tahap I diminta untuk membuat video dan laporan progress dengan ketentuan berikut:
                        <br/>
                        <br/>1.	Video di unggah ke Youtube dan di beri judul : KMIPN 2018 - IoT - [Nama Kelompok] - [Nama Karya].
                        <br/>2.	Video harus menjelaskan gambaran umum dari piranti cerdas.
                        <br/>3.	Video harus berekstensi MP4 dengan ukuran 720p dan durasi maksimal 5 menit.
                        <br/>
                        <br/>Laporan disusun mengikuti struktur dokumen sebagai berikut:
                        <br/>1.	Cover Laporan
                        <br/>o	Judul / Nama Piranti Cerdas IoT
                        <br/>o	Nama Tim dan Anggota
                        <br/>o	Logo KMIPN 2018 di pojok kiri atas dan logo universitas di pojok kanan atas
                        <br/>2.	Desain Perangkat Keras
                        <br/>o	Sumber daya (power source)
                        <br/>o	Spesifikasi penggunaan sensor
                        <br/>o	Skema rangkaian alat
                        <br/>o	Desain 3D alat
                        <br/>
                        <br/>3.	Perkembangan Pengerjaan
                        <br/>o	Yang telah dikerjakan
                        <br/>o	Yang akan dikerjakan
                        <br/>4.	Desain mockup terbaru dan dokumentasi
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Final</h3>
                    <p>Pada babak final, finalis harus membawa piranti cerdas yang dibuat. Penjurian akan
                        dilakukan melalui presentasi di hadapan dewan juri. Peserta menjelaskan piranti cerdas yang dibawa, melakukan demonstrasi alat, dan menjawab pertanyaan yang diajukan dewan juri.</p>
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