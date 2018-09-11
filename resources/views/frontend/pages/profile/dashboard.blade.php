@extends('frontend.playouts')

@section('title', 'Dashboard | KMIPN 2018')

@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome, {{ $anggota[0]->fullname }}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p class="hidden-lg hidden-md">Welcome, {{ $anggota[0]->fullname }}</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('auth/logout') }}">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><strong>Selamat Datang</strong></h3><br/>
                                <h5>Anda mendaftar sebagai ketua tim</h5>

                                <h5> Status Lomba :
                                @if($tim->status == "Daftar")
                                    <i class="label label-warning">Daftar</i>
                                @elseif($tim->status == "Tahap Seleksi")
                                    <i class="label label-info">Tahap Seleksi</i>
                                @elseif($tim->status == "Lolos")
                                    <i class="label label-success">Lolos</i>
                                @elseif($tim->status == "Tidak Lolos")
                                    <i class="label label-danger">Tidak Lolos</i>
                                @endif
                                </h5>
                                <h5>Kategori Lomba : <strong>{{ $tim->kategori->kategori }}</strong></h5><br/>
                                <div class="alert alert-info">
                                <span><strong>Pengumuman</strong><br/>

        Pastikan email yang Anda gunakan mendaftar adalah email yang sebenarnya dan dapat dihubungi karena apabila ada informasi terkait administrasi dan kompetisi akan dikirimkan ke email tersebut. Informasi Tim hanya dapat diubah ketika data belum <strong>diapprove/diverifikasi</strong> oleh panitia, untuk menghindari kecurangan


        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection