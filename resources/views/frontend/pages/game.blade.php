@extends('frontend.layouts')

@section('title', 'Game Development | KMIPN 2018')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pengembangan Aplikasi Permainan</h2>
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
                    <img class="img-fluid" src="img/game.png" alt="" width="300">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        Game Development adalah salah satu cabang kompetisi KMIPN yang diadakan oleh PENS. Game Development KMIPN ditujukan untuk seluruh mahasiswa politeknik se-Indonesia. Game Development KMIPN tidak membatasi tema sehingga para peserta dapat berkreasi sekreatif mungkin dalam permainan mereka.</p>
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
                    <h3 class="text-heading title_color">Ketentuan Kompetisi</h3>
                    <p>1.  Setiap peserta harus mematuhi semua peraturan kompetisi Game Development KMIPN dan ketentuan umum Game Development KMIPN.
                        <br/>2.  Peserta adalah mahasiswa yang tercantum pada Politeknik yang bersangkutan.
                        <br/>3.  Peserta yang sudah terdaftar tidak bisa digantikan oleh orang lain.
                        <br/>4.  Setiap tim hanya diperbolehkan mengumpulkan satu buah game.
                        <br/>5.  Game yang diikutsertakan tidak boleh mengandung unsur SARA
                        <br/>6.  Game yang diikutsertakan adalah karya orisinil peserta.
                        <br/>7.  Tidak ada tema khusus untuk game yang dikompetisikan.
                        <br/>8.  Game yang diikutsertakan belum pernah dipublikasikan dan belum pernah menjuarai kompetisi yang serupa.
                        <br/>9.  Platform dibatasi untuk PC Windows dan Android.
                        <br/>10. Peserta diperbolehkan menggunakan library dan engine apapun.
                        <br/>11. Asset yang digunakan dalam game harus merupakan karya orisinil peserta atau berlisensi bebas.
                        <br/>12. Apabila asset yang digunakan berlisensi, maka harus dicantumkan lisensinya.
                        <br/>Jika peserta menggunakan asset berlisensi tanpa mencantumkan lisensinya, panitia berhak memberikan sanksi kepada peserta.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Tema dan Subtema</h3>
                    <p>Kompetisi ini memiliki tema “Peran TIK dalam Revolusi Industri 4.0” dengan subtema sebagai berikut :
                        <br/>
                        <br/>1.  Pendidikan
                        <br/>2.  Ekonomi dan Bisnis
                        <br/>3.  Pembangunan
                        <br/>4.  Kesehatan
                        <br/>5.  Kebudayaan
                        <br/>6.  Lingkungan
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Penyisihan Babak 1 (Seleksi Proposal)</h3>
                    <p>Struktur proposal adalah sebagai berikut :
                        <br/>i.  Judul dan Subtema
                        <br/>ii. Latar Belakang
                        <br/>iii.    Tujuan
                        <br/>iv. Luaran yang Diharapkan
                        <br/>v.  Deskripsi Game
                        <br/>a.  Konsep dasar dari permainan yang akan dibuat.
                        <br/>b.  Story atau cerita dari permainan.
                        <br/>c.  Gameplay dan Mechanics atau bagaimana cara bermain pada permainan, dan aturan serta prosedur yang ada pada permainan.
                        <br/>d.  Genre dari permainan (RPG, Indie, RTS, FPS, Action, Puzzle, Adventure, Dll).
                        <br/>e.  Level atau level – level yang ada pada permainan.
                        <br/>f.  Target Audience atau target pemasaran dari permainan yang dikembangkan.
                        <br/>g.  Perlu ditambahkan gambar – gambar untuk Storyboard, Screenshot, Wireframe, maupun ilustrasi dari permainan.
                        <br/>h.  Informasi – informasi lain yang membantu menjelaskan permainan.
                        <br/>i.  Teknologi dan Sumber Daya yang Digunakan
                        <br/>
                        <br/>Pada tahap ini, diseleksi hingga mendapatkan 20 tim terbaik yang akan lolos ke tahap berikutnya.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Penyisihan Babak 2 (Realisasi Game)</h3>
                    <p>Sebanyak 20 tim yang lolos dari tahap 1 akan melaju menuju tahap 2. Pada tahap ini, peserta diharapkan telah menyelesaikan pengembangan aplikasi permainan. Aplikasi permainan yang telah dikembangkan tidak perlu jadi 100%, namun diharapkan sudah bisa menunjukkan bahwa aplikasi permainan sudah dapat dimainkan oleh pengguna.
                        <br/>
                        <br/>Pada tahap ini, terdapat 2 hal yang harus dikumpulkan, yaitu :
                        <br/>1.  Video demo/trailer dari aplikasi permainan yang telah dikembangkan. Video tersebut diunggah melalui YouTube dengan pranala(link) disertakan.
                        <br/>2.  Karya yang dihasilkan, yaitu:
                        <br/>
                        <br/>a.  Aplikasi permainan yang siap Install, dimainkan, dan dinilai oleh dewan juri (executable file atau sejenisnya)
                        <br/>b.  Dokumen teknis yang berisi cara instalasi dan petunjuk memainkan permainan. Peserta tidak perlu menyertakan kode sumber.
                        <br/>
                        <br/>Ketentuan video
                        <br/>
                        <br/>Video demo yang akan ditunjukkan harus memperhatikan ketentuan berikut :
                        <br/>1.  Video menyampaikan deskripsi singkat dari aplikasi permainan yang mencakup latar belakang, cerita, dan fitur yang terdapat dalam permainan, serta aturan dan prosedur yang ada pada permainan.
                        <br/>2.  Video memperlihatkan permainan sedang dimainkan oleh pemain di berbagai level. Ini merupakan bagian inti dari video demo.
                        <br/>3.  Durasi video maksimal 10 menit.
                        <br/>4.  Kualitas dari video harus bagus (480p atau 720p).
                        <br/>5.  Video harus mencantumkan logo KMIPN 2018.
                        <br/>6.  Video harus mencantumkan nama dan logo tim.
                        <br/>7.  Video diunggah di YouTube dengan format : KMIPN GD [Nama Tim] [Nama Permainan.
                        <br/>
                        <br/>Ketentuan Karya Aplikasi Permainan
                        <br/>
                        <br/>Aplikasi permainan yang akan dikirim perlu memperhatikan hal berikut :
                        <br/>1.  Pastikan file yang dikirimkan mudah di-install dan dimainkan oleh dewan juri. Artinya, dewan juri tidak mengalami kesulitan dalam menginstall dan memainkan permainan yang dikembangkan.
                        <br/>2.  Jika peserta menggunakan perangkat keras tambahan (VR Headset, alat pendukung AR, Dll) dalam memainkan permainan yang dikembangkan, mohon hubungi panitia secepatnya untuk proses lebih lanjut.
                        <br/>3.  Dokumen teknis tidak perlu terlalu panjang. Inti dari dokumen teknis hanyalah walkthrough atau penjelasan agar pengguna bisa menginstall dan memainkan permainan yang dikembangkan.
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
                    <p>Di tahap ini, sepuluh tim terbaik akan mempresentasikan hasil karyanya di depan dewan juri.
                        <br/>
                        <br/>Kegiatan yang dilakukan pada tahap ini adalah sebagai berikut :
                        <br/>
                        <br/>1.  Presentasi tentang aplikasi permainan yang dikembangkan kepada dewan juri.
                        <br/>2.  Demo aplikasi permainan yang dikembangkan.
                        <br/>3.  Menjawab pertanyaan yang disampaikan oleh dewan juri.
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