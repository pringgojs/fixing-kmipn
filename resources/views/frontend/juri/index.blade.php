@extends('frontend.juri.layout')
@section('content')
<div class="main-panel">
    <div class="content">
        <a class="navbar-brand" href="#">Welcome, {{ session('name') }}</a>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Daftar tim yang menunggu untuk dinilai</h4><br/>
                    <div class="card">
                        @if(session('success'))
                        <div class="alert alert-info" role="alert">
                            {{(session('success'))}}
                        </div>
                        @endif
                        <br>
                        <table class="table table-responsive table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tim</th>
                                    <th>Kategori</th>
                                    <th>Proposal</th>
                                    <th>Skor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_penilaian as $row => $penilaian)
                                    
                                <tr>
                                    <td>{{++$row}}</td>
                                    <td>{{$penilaian->tim->nama_tim}}</td>
                                    <td>{{$penilaian->tim->kategori->kategori}}</td>
                                    <td>@if($penilaian->tim->file_proposal) <a href="{{ asset('proposal/'.$penilaian->tim->file_proposal) }}">{{ $penilaian->tim->file_proposal }}</a>@endif</td>
                                    <td class="text-center">{{$penilaian->total}}</td>
                                    <td><a href="{{url('juri/'.$penilaian->id)}}"><button class="btn btn-sm btn-primary"><i class="pe-7s-note2"></i> Nilai</button></a></td>
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