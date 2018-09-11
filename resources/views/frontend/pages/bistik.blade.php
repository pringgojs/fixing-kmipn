@extends('frontend.layouts')

@section('title', 'Bisnis TIK | KMIPN 2018')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Perencanaan Bisnis Bidang TIK</h2>
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
                    <img class="img-fluid" src="img/bistik.png" alt="" width="300">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        Lomba Perancangan Bisnis Bidang TIK adalah kompetisi pengembangan model bisnis dengan produk TIK. Suatu perencanaan bisnis adalah penghubung antara ide dan kenyataan artinya bagaimana ide diwujudkan menjadi kenyataan dengan mengetahui faktor-faktor yang menjadi pemicu keberhasilan dan kegaagalan suatu bisnis. Lomba ini memberikan kesempatan kepada peserta yang memiliki ide bisnis, startup dan pengembangan usaha yang berorientasi pada produk TIK, berupa jasa atau produk. Perencanaan bisnis yang baik akan membantu dalam melihat lebih jelas mengenai tipe bisnis yang akan dirintis, siapa saja yang akan menjadi pelanggan dan produk atau jasa apa yang akan di tawarkan.</p>
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
                    <h3 class="text-heading title_color">Peraturan Usulan</h3>
                    <p><br/>1.  Setiap tim hanya boleh mengajukan satu buah ide pengembangan bisnis bidang TIK.
                        <br/>2.  Ide bisnis belum pernah menjadi pemenang (juara 1,2 dan 3) di kompetisi bidang IT, business plan, dan lainnya baik lokal, nasional, maupun internasional.
                        <br/>3.  Ide tidak mengandung SARA (Suku Agama Ras dan Antar Golongan) dan Tidak melanggar aturan Undang Undang yang berlaku di Negara Kesatuan Republik Indonesia.
                        <br/>Jika ide bisnis yang diikutsertakan adalah ide bisnis yang dikembangkan dari kontes sebelumnya, peserta harus menjelaskan pada juri mengapa ide bisnis tersebut diikutsertakan dan apa yang membedakan yang sekarang dengan sebelumnya.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Penyisihan Babak 1</h3>
                    <p>1.  Peserta mengumpulkan Business Plan tentang rencana bisnisnya dengan cara mengunggah dalam bentuk .pdf ke [URL akan di umukan di web dengan melampirkan dokumen Business Model Canvas (Alexander Osterwalder & Yves Pigneur).
                        <br/>2.  Berkas Business Plan disimpan dengan format nama file: <br/>“BP_[NamaTim]_[NamaPoliteknik]_KMIPN2018_BISNIS_TIK.pdf”.
                        <br/>3.  Dokumen Business Plan maksimal 15 halaman, tidak termasuk sampul.
                        <br/>4.  Juri akan memilih maksimal 10 tim untuk lolos ke final.
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
                    <p>Pada babak final, finalis diminta untuk melakukan presentasi di hadapan juri serta demonstrasi dari piranti cerdas tersebut.
                        <br/>
                        <br/>1.  Tim yang lolos di babak Final wajib membuat poster dan akan dipamerkan pada babak Final.
                        <br/>2.  Tim yang lolos pada babak final diwajibkan untuk membawa dan menampilkan (minimal mock-up/prototype) dari produk/layanan yang merupakan obyek dari business plan yang dikembangkan.
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