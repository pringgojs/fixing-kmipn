@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Pengguna yang daftar</h2>
</div>
@include('backend.pages.pendaftaran._filter')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <input type="hidden" id="link" value="{{$ctype}}" readonly>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Ketua</th>
                            <th>Asal PT</th>
                            <th>Proposal</th>
                            <th>Kategori</th>
                            <th>Status Pendaftaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td id="tim-{{$item->id}}">{{ $item->nama_tim }}</td>
                            <td>{{ $item->users->fullname }}</td>
                            <td>{{ $item->politeknik->politeknik }}</td>
                            <td>@if($item->file_proposal) <a href="{{ asset('proposal/'.$item->file_proposal) }}">{{ $item->file_proposal }}</a>@endif</td>
                            <td>{{ $item->kategori->kategori }}</td>
                            <td>
                                <span class="badge">Status lomba : <strong>{{ $item->status }}</strong></span> <br>
                                <span class="badge"> Status approval :<strong>
                                @if($item->status_approved == 1)
                                    <b style="color:orange">Menunggu verifikasi oleh admin</b>
                                @elseif($item->status_approved == 2)
                                    <b style="color:green">Terverifikasi</b>
                                @else
                                    <b style="color:red">Belum mengajukan verifikasi</b>
                                @endif
                                </strong>
                                </span>
                            </td>
                            <td width="153">
                                <div class="row">
                                    <form action="{{ url('/ecodeeepis/pendaftaran/'.$item->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </button> &nbsp;
                                    </form>
                                    <a href="{{url('ecodeeepis/pendaftaran/'.$item->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a> &nbsp;&nbsp;
                                    @if($item->status_approved == 1) <a onclick="verifikasi({{$item->id}})" class="btn btn-info btn-sm"><i class="fa fa-check"></i> </a> &nbsp;&nbsp; @endif
                                    @if($item->status_approved == 2) <a onclick="openModal({{$item->id}})"  data-toggle="modal" data-target="#openModal" class="btn btn-primary btn-sm mt-10"> <i class="fa fa-send"></i> Terbitkan Kelulusan </a> @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Ketua</th>
                            <th>Asal PT</th>
                            <th>Proposal</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
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
                <input type="hidden" name="tim_id" id="tim-id">
                <div class="form-group">
                    <label for="status">Nama Tim</label> <br>
                    <strong id="nama-tim"></strong>
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
@endsection

@section('js')
@parent
<script type="text/javascript">
$(document).ready(function(){
    $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });

    
});

    function pilih() {
        var status =  $('#status :selected').val();
        var politeknik =  $('#politeknik :selected').val();
        var status_daftar =  $('#status-pendaftaran :selected').val();
        var kategori =  $('#kategori :selected').val();
        var link = $('#link').val();
        location.href='{{url("/")}}/ecodeeepis/pendaftaran/'+status_daftar+'?politeknik='+politeknik+'&status='+status+'&kategori='+kategori;;
    }

    function verifikasi(id) {
        var t = confirm('Anda yakin ingin memverifikasi data peserta ? Data yang sudah diverifikasi tidak dapat dibatalkan.');
        if (t) {
            location.href='{{url("/")}}/ecodeeepis/verifikasi/'+id;
        }
    }

    function openModal(id) {
        var tim = $('#tim-'+id).html();
        $('#nama-tim').html(tim);
        $('#tim-id').val(id);
    }

    function terbitkanKelulusan() {
        var t = confirm('Anda yakin ingin terhadap status kelulusan peserta ? Data yang sudah disimpan tidak dapat dibatalkan.');
        var id = $('#tim-id').val();
        var status =  $('#status-lulus :selected').val();
        
        if (t) {
            location.href='{{url("/")}}/ecodeeepis/set-lulus/'+id+'/?status='+status;
        }
    }
</script>
@endsection
