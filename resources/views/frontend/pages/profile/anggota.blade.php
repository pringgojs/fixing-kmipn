@extends('frontend.playouts')

@section('title', 'Anggota Tim | KMIPN 2018')

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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Data Anggota</h4><br/>
                            @if($tim->total_anggota == '0')
                            @else
                                <a href="{{ url('profile/tambah-anggota') }}"><button type="submit" class="btn btn-info btn-fill">Tambah Anggota</button></a>
                            @endif
                        </div>

                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>Foto KTM</th>
                                <th>Sebagai</th>
                                </thead>
                                <tbody>
                                    @foreach($anggota as $item)
                                        <tr>
                                            <td>{{ $item->no_mahasiswa }}</td>
                                            <td>{{ $item->fullname }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->no_telp }}</td>
                                            <td>
                                                @if($item->photo == null)
                                                    Belum Upload
                                                @else
                                                    Terupload
                                                @endif
                                            </td>
                                            <td>{{ $item->role }}</td>
                                            @if($tim->status_approved == 0)
                                            <td>
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <a href="{{ url('/profile/edit_anggota/'.$item->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                @if($item->role == 'Anggota')
                                                    <a href="{{ url('/profile/submit_delete_anggota/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                                @endif
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection