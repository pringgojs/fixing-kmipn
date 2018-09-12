@extends('backend.master')

@section('content')
    @if($total_menunggu_verifikasi)
    <div class="row w-no-padding margin-b-30">
        <div class="col-md-12">
            <div class="widget bg-success">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5"><b>Pengumuman</b> </h2><br> 
                        <p>Ada peserta yang menunggu untuk di verifikasi. <br>
                            <a href="{{url('ecodeeepis/pendaftaran/daftar?politeknik=0&status=1')}}" class="btn btn-sm btn-danger"> klik untuk melihat detail</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="page-header">
        <h2>Jumlah Tim Terdaftar</h2>
    </div>

    <div class="row w-no-padding margin-b-30">
			
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Keseluruhan Tim</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-primary widget-r-m">{{$total_tim}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Belum Upload Proposal</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-indigo widget-r-m">{{$total_belum_upload_proposal}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Pending Verifikasi</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-success widget-r-m">{{$total_menunggu_verifikasi}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Terverfikasi</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-warning widget-r-m">{{$total_ter_verifikasi}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header">
        <h2>Jumlah Tim Terdaftar Per Kategori</h2>
    </div>
    <div class="row w-no-padding margin-b-30">
        @foreach($list_kategori as $kategori)
        <div class="col-md-3">
            <div class="widget bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">{{$kategori->kategori}}</h2>
                        <p class="text-muted">Total Peserta</p>
                        <span class="float-right text-primary widget-r-m">{{$kategori->getTotal()}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="page-header">
        <h2>Jumlah Tim Per Tanggal</h2>
    </div>

    <div class="row w-no-padding margin-b-30">
			
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Hari Ini</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-primary widget-r-m">{{$total_hari_ini}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Kemarin</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-indigo widget-r-m">{{$total_kemarin}}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Bulan Ini</h2>
                        <p class="text-muted">Total Tim</p>
                        <span class="float-right text-success widget-r-m">{{$total_bulan_ini}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
