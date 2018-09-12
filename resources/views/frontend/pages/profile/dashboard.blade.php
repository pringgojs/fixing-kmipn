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
                                @if(session('status') == '1')
                                <div class="alert alert-success" role="alert">
                                    <p style="color:#000"> <b>Anda behasil memverifikasi data</b>. <br>Verifikasi oleh admin biasanya dalam waktu 2x24 jam. </p>
                                </div>
                                @elseif(session('status') == '2')
                                <div class="alert alert-danger" role="alert">
                                    <p style="color:#000"> <b>Anda gagal memverifikasi data</b>. <br>Pastikan Anda sudah mengunggah file proposal. </p>
                                </div>
                                @elseif(session('status') == '3')
                                <div class="alert alert-danger" role="alert">
                                    <p style="color:#000"> <b>Anda gagal memverifikasi data</b>. <br>Pastikan Anda sudah melengkapi daftar anggota. </p>
                                </div>
                                @endif
                                
                                <h3><strong>Selamat Datang</strong></h3><br/>
                                <h5>Ini adalah halaman utama Anda. Berikut ini informasi tim Anda.</h5>
                                <p>Nama Tim: <b>{{$tim->nama_tim}}</b></p>
                                <p>Kategori Lomba : <strong>{{ $tim->kategori->kategori }}</strong></p>
                                <p>Asal Politeknik : <strong>{{ $tim->politeknik->politeknik }}</strong></p>
                                <p>Jumlah Anggota: <b>{{\App\Tim::jumlahAnggota($tim)}} </b> &nbsp;&nbsp;&nbsp;<a href="{{url('profile/anggota')}}"><i class="fa fa-eye"></i> Lihat Anggota</a></p>
                                <p>Status Proposal: <b>{{$tim->file_proposal ? 'Sudah Unggah' : ' Belum Unggah'}} </b></p>
                                {{-- Status Lomba :
                                1. Daftar
                                2. Menunggu verifikasi
                                3. Terverifikasi / Tahap Seleksi
                                4. Lolos
                                5. Tidak Lolos --}}

                                <p> Status Lomba :
                                    @if($tim->status == "Daftar")
                                        <i class="label label-warning">Daftar</i>
                                    @elseif($tim->status == "Tahap Seleksi")
                                        <i class="label label-info">Tahap Seleksi</i>
                                    @elseif($tim->status == "Lolos")
                                        <i class="label label-success">Lolos</i>
                                    @elseif($tim->status == "Tidak Lolos")
                                        <i class="label label-danger">Tidak Lolos</i>
                                    @endif
                                </p>
                                <p> Status Data : 
                                    @if($tim->status_approved == 1)
                                        <b style="color:orange">Menunggu verifikasi oleh admin</b>
                                    @elseif($tim->status_approved == 2)
                                        <b style="color:green">Terverifikasi</b>
                                    @else
                                        <b style="color:red">Belum mengajukan verifikasi</b>
                                    @endif
                                </p>

                                <div class="alert alert-info">
                                    <span>
                                        <strong>Pengumuman</strong><br/>
                                        Pastikan email yang Anda gunakan mendaftar adalah email yang sebenarnya dan dapat dihubungi karena apabila ada informasi terkait administrasi dan kompetisi akan dikirimkan ke email tersebut. Informasi Tim hanya dapat diubah ketika data belum <strong>diapprove/diverifikasi</strong> oleh panitia, untuk menghindari kecurangan
                                    </span> 
                                </div>
                            </div>
                            @if($tim->status_approved == 0 )
                            <div class="col-md-6"><a onclick="verifikasi()" class="btn btn-primary pull-right">Verifikasi Data Anda</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        function verifikasi() {
            var t = confirm('Anda yakin ingin memverifikasi semua informasi dan juga proposal ? ketika data Anda sudah diverifikasi, Anda tidak bisa mengubah data dan juga proposal Anda!');
            if (t) {
                location.href='{{url("profile/verifikasi")}}';
                return true;
            }
        }
        </script>
@endsection