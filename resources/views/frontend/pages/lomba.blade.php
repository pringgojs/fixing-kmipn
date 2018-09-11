@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>

@section('title')
    Lomba - KMIPN
@endsection

<section class="hero is-fullwidth tengah is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h3 class="title is-3 has-text-white">LOMBA</h3>
            <div class="content">
                <div class="columns">
                    <div class="column is-3">
                        <a data-id="1" class="modal-button">
                            <img src="{{ url('img/logo-lomba/Design_Animasi.png') }}" width="150" height="150">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="2" class="modal-button">
                            <img src="{{url('img/logo-lomba/cipta_inovasi.png')}}" width="150" height="150">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="3" class="modal-button">
                            <img src="{{url('img/logo-lomba/hackathon.png')}}" width="110" height="110">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="4" class="modal-button">
                            <img src="{{url('img/logo-lomba/IoT.png')}}" width="190">
                        </a>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-3">
                        <a data-id="5" class="modal-button">
                            <img src="{{url('img/logo-lomba/EGov.png')}}" width="150" height="150">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="6" class="modal-button">
                            <img src="{{url('img/logo-lomba/Game_Dev.png')}}" width="150" height="150">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="7" class="modal-button">
                            <img src="{{url('img/logo-lomba/Bisnis_TIK.png')}}" width="150" height="110">
                        </a>
                    </div>
                    <div class="column is-3">
                        <a data-id="8" class="modal-button">
                            <img src="{{url('img/logo-lomba/keamanan_Jaringan.png')}}" width="150" height="150">
                        </a>
                    </div>
                </div>

                {{-- Animasi --}}
                <div id="category-1" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Animasi</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Desain animasi adalah sebuah kompetisi pembuatan video animasi pendek dalam bentuk 2D/3D yang memberikan informasi dan pengenalan singkat yang unik dan menarik tentang revolusi industri di Indonesia, untuk memberikan kesadaran terhadap masyarakat luas tentang perkembangan teknologi di industri Indonesia.</p>
                                <a href="{{url('panduan/Rancangan_Desain_Animasi.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Cipta Inovasi --}}
                <div id="category-2" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Cipta Inovasi</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Lomba Cipta Inovasi KMIPN 2018 adalah wadah bagi para mahasiswa politeknik seluruh Indonesia untuk menuliskan terobosan ide kreatif mereka sebagai salah satu bentuk intellectual respons atas segala permasalahan nyata di bidang TIK (Teknologi Informasi dan Komunikasi) masyarakat Indonesia. Ide yang diajukan diharapkan bersifat unik, kreatif, visioner, futuristik dan bermanfaat.</p>
                                <a href="{{url('panduan/Cipta_Inovasi.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Hackathon --}}
                <div id="category-3" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Hackathon</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Hacking adalah pemecahan masalah yang kretif (tidak harus melibatkan teknologi). Hackathon adalah acara tentang apapun dari suatu waktu tertentu dimana orang berkumpul untuk menyelesaikan masalah. Kebanyakan hackathon yang dilakukan juga memiliki trek parallel untuk karya hackathon (banyak karya yang dihasilkan).</p>
                                <a href="{{url('panduan/Hackathon.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- IoT --}}
                <div id="category-4" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Internet of Things</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Lomba Piranti Cerdas adalah kompetisi karya rekayasa pada keilmuan teknik elektro yang bertujuan untuk mendorong yang dihasilkan karya-karya penelitian inovatif yang mengintegrasikan aspek-aspek design dari design sistem hingga perangkat, metodologi dan implementasi.</p>
                                <a href="{{url('panduan/iot.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- E-Gov --}}
                <div id="category-5" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">E-Government</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">e-Government merupakan pemanfaatan teknologi informasi berbasis internet oleh pemerintah dalam memberikan informasi dan layanan kepada masyarakat, bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya masyarakat atau bisnis dapat berinteraksi, atau memberikan informasi kepada pemerintah.</p>
                                <a href="{{url('panduan/KATEGORI_LOMBA_E-Gov.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Game Dev --}}
                <div id="category-6" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Game Development</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Game Development adalah salah satu cabang kompetisi KMIPN yang diadakan oleh PENS. Game Development KMIPN ditujukan untuk seluruh mahasiswa politeknik se- Indonesia. Game Development KMIPN tidak membatasi tema sehingga para peserta dapat berkreasi sekreatif mungkin dalam permainan mereka.</p>
                                <a href="{{url('panduan/Game_Development.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bisnis TIK --}}
                <div id="category-7" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Bisnis TIK</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Lomba Bisnis TIK adalah kompetisi pengembangan model bisnis dengan produk TIK. Lomba ini memberikan kesempatan kepada peserta yang memiliki ide bisnis, startup dan pengembangan usaha yang berorientasi pada produk TIK, berupa jasa atau produk.</p>
                                <a href="{{url('panduan/LOMBA_BISNIS_TIK.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Keamanan Jaringan--}}
                <div id="category-8" class="modal modal-category" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="has-text-grey-dark">Keamanan Jaringan</h3>
                            </div>
                            <div class="modal-body">
                                <p class="has-text-grey-dark">Lomba keamanan jaringan adalah lomba untuk menguji kemampuan mengamankan sistemkomputer beserta jaringannya. Peserta akan berkompetisi dengan peserta lain dalam kemampuan mengkongurasi sistem yang aman dan melakukan identikasi potensi celahkeamanan dari sistem komputer yang ada kemudian memberikan solusi keamanannya.</p>
                                <a href="{{url('panduan/KEAMANAN_JARINGAN_Today.pdf')}}" class="btn btn-outline btn-info">
                                    <i class="fa fa-file"></i> Panduan
                                </a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-danger" onclick="Custombox.modal.close();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="section is-transparent tengah">
    <div class="has-text-centered">
        <h3 class="title is-3 has-text-white">TIMELINE</h3>
    </div>
    <div class="section timeline is-centered container">
        <header class="timeline-header">
            <span class="tag is-medium is-danger">Start</span>
        </header>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">16 - 31 agustus 2016</p>
                <p>Pendaftaran<br> dan Pengumpulan<br> Proposal</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">14 Seltember 2018</p>
                <p>Pengumuman<br> Lolos Tahan 1</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading">14 - 28 September 2018</p>
                <p>Upload Prototype<br>Untuk Kategori Game Dev,<br>Iot, dan Animasi.</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">5 Oktober 2018</p>
                <p>Pengumuman <br>Finalis</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-info is-icon">
                <i class="fas fa-user-astronaut is-medium"></i>
            </div>
            <div class="timeline-content">
                <p class="heading">25 - 28 Oktiber 2018</p>
                <p>Grand Final</p>
            </div>
        </div>
        <header class="timeline-header">
            <span class="tag is-medium is-danger">End</span>
        </header>
    </div>
</section>

@include('frontend.partials.footer')