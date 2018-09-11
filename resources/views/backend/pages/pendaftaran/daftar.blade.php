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
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->users->fullname }}</td>
                            <td>{{ $item->politeknik->politeknik }}</td>
                            <td>@if($item->file_proposal) <a href="{{ url('proposal/'.$item->file_proposal) }}">{{ $item->file_proposal }}</a>@endif</td>
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
                                    @if($item->status_approved == 1) <a onclick="verifikasi({{$item->id}})" class="btn btn-info btn-sm"><i class="fa fa-check"></i> </a> @endif
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
        location.href='{{url("/")}}/ecodeeepis/pendaftaran/daftar?politeknik='+politeknik+'&status='+status;
    }

    function verifikasi(id) {
        var t = confirm('Anda yakin ingin memverifikasi data peserta ? Data yang sudah diverifikasi tidak dapat dibatalkan.');
        if (t) {
            location.href='{{url("/")}}/ecodeeepis/verifikasi/'+id;
        }
    }
</script>
@endsection
