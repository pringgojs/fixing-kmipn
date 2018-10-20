@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Detail Pendaftar</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="pull-right">
                @if($data->status_approved == 1) <a onclick="verifikasi({{$data->id}})" class="btn btn-info btn-sm"><i class="fa fa-check"></i> Verifikasi data peserta</a> &nbsp;&nbsp; @endif
                @if($data->status_approved == 2) <a onclick="openModal({{$data->id}})"  data-toggle="modal" data-target="#openModal" class="btn btn-primary btn-sm mt-10"> <i class="fa fa-send"></i> Terbitkan Kelulusan </a> @endif
                </div>
                
                <h3>Identitas Tim</h3>

                <table class="table table-bordered mt-10">
                    <tr>
                        <td>Nama Tim</td>
                        <td>{{$data->nama_tim}}</td>
                    </tr>
                    <tr>
                        <td>Asal Politeknik</td>
                        <td>{{$data->politeknik->politeknik}}</td>
                    </tr>
                    <tr>
                        <td>Status Perlombaan</td>
                        <td>
                             @if($data->status == "Daftar")
                                <i class="label label-warning">Daftar</i>
                            @elseif($data->status == "Tahap Seleksi")
                                <i class="label label-info">Tahap Seleksi</i>
                            @elseif($data->status == "Lolos")
                                <i class="label label-success">Lolos</i>
                            @elseif($data->status == "Tidak Lolos")
                                <i class="label label-danger">Tidak Lolos</i>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Status verifikasi data</td>
                        <td>
                            @if($data->status_approved == 1)
                                <b style="color:orange">Menunggu verifikasi oleh admin</b>
                            @elseif($data->status_approved == 2)
                                <b style="color:green">Terverifikasi</b>
                            @else
                                <b style="color:red">Belum mengajukan verifikasi</b>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>File Proposal</td>
                        <td><a href="{{ asset('proposal/'.$data->file_proposal) }}">{{ $data->file_proposal }}</a></td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-default">
                {{$data->users->fullname}} <span class="badge badge-success pull-right">Ketua</span>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="card-wrapper" data-jp-card-initialized="true">
                        <div class="jp-card-container" style="text-align:center">
                             @if (empty($data->users->photo))
                                <h1 class="h1 alert-warning">Belum upload Foto KTM</h1>
                            @else 
                                @if (file_exists(public_path('ktm/'.$data->users->photo)))
                                    <img src="{{ url('ktm/'.$data->users->photo) }}" class="img-fluid rounded" id="preview-image" style="padding-bottom:20px">
                                @endif 
                            @endif
                        </div>
                        <form role="form" id="card-master">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input readonly type="tel" name="number" value="{{ $data->users->no_mahasiswa }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input readonly type="tel" name="number" value="{{ $data->users->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input readonly type="tel" name="number" value="{{ $data->users->jenis_kelamin }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input readonly type="tel" name="number" value="{{ $data->users->jurusan }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat, Tgl Lahir</label>
                                <input readonly type="tel" name="number" value="{{ $data->users->tempat_lahir }}, {{ date('d-m-Y',strtotime($data->users->tgl_lahir)) }}" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($anggota as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-default">
                {{$item->fullname}} <span class="badge badge-info pull-right">Anggota</span>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="card-wrapper" data-jp-card-initialized="true">
                        <div class="jp-card-container" style="text-align:center">
                             @if (empty($item->photo))
                                <h1 class="h1 alert-warning">Belum upload Foto KTM</h1>
                            @else 
                                @if (file_exists(public_path('ktm/'.$item->photo)))
                                    <img src="{{ url('ktm/'.$item->photo) }}" class="img-fluid rounded" id="preview-image" style="padding-bottom:20px">
                                @endif 
                            @endif
                        </div>
                        <form role="form" id="card-master">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input readonly type="tel" name="number" value="{{ $item->no_mahasiswa }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input readonly type="tel" name="number" value="{{ $item->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input readonly type="tel" name="number" value="{{ $item->jenis_kelamin }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input readonly type="tel" name="number" value="{{ $item->jurusan }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat, Tgl Lahir</label>
                                <input readonly type="tel" name="number" value="{{ $item->tempat_lahir }}, {{ date('d-m-Y',strtotime($item->tgl_lahir)) }}" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="openModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
        <h5 class="modal-title" id="exampleModalLabel">Seleksi Peserta</h5>
        </div>
        <div class="modal-body">
            <form role="form">
                <input type="hidden" name="tim_id" id="tim-id" value="{{$data->id}}">
                <div class="form-group">
                    <label for="status">Nama Tim</label> <br>
                    <strong id="nama-tim">{{$data->nama_tim}}</strong>
                </div>
                <div class="form-group">
                    <label for="status">Pilih status kelolosan</label>
                    <select name="status" id="status-lulus" class="form-control">
                        <option value="1">Lolos</option>
                        <option value="0">Tidak Lolos</option>
                    </select>
                </div>
                <div class="clearfix">
                    <button type="button" class="btn  btn-primary float-right" onclick="terbitkanKelulusan()">Simpan</button>
                </div>
            </form>
            <hr>
        </div>
    </div>
    </div>
</div>
<script>
    function verifikasi(id) {
        var t = confirm('Anda yakin ingin memverifikasi data peserta ? Data yang sudah diverifikasi tidak dapat dibatalkan.');
        if (t) {
            location.href='{{url("/")}}/ecodeeepis/verifikasi/'+id+'/?from=detail';
        }
    }
    
    function terbitkanKelulusan() {
        var t = confirm('Anda yakin ingin terhadap status kelulusan peserta ? Data yang sudah disimpan tidak dapat dibatalkan.');
        var id = $('#tim-id').val();
        var status =  $('#status-lulus :selected').val();
        
        if (t) {
            location.href='{{url("/")}}/ecodeeepis/set-lulus/'+id+'&status='+status+'&from=detail';
        }
    }
</script>
@stop