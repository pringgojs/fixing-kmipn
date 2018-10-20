@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Penjurian</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <?php $fl_kategori = \Input::get('kategori')?>
                    <?php $fl_politeknik = \Input::get('politeknik')?>
                    <?php $fl_juri = \Input::get('juri')?>
                    <div class="col-sm-3 pull-right">
                        <label for="kategori">Filter Kategori</label>
                        <select name="" class="form-control" id="kategori" onchange="pilih()">
                            <option value="0">Semua Kategori</option>
                            @foreach($list_kategori as $kategori)
                            <option value="{{$kategori->id}}" @if($fl_kategori == $kategori->id) selected @endif>{{$kategori->kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <label for="juri">Filter Juri</label>
                        <select name="" class="form-control" id="juri" onchange="pilih()">
                            <option value="0">Semua juri</option>
                            @foreach($list_juri as $juri)
                            <option value="{{$juri->id}}" @if($fl_juri == $juri->id) selected @endif>{{$juri->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <label for="politeknik">Filter politeknik</label>
                        <select name="" class="form-control" id="politeknik" onchange="pilih()">
                            <option value="0">Semua Politeknik</option>
                            @foreach($list_politeknik as $politeknik)
                            <option value="{{$politeknik->id}}" @if($fl_politeknik == $politeknik->id) selected @endif>{{$politeknik->politeknik}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tim</th>
                            <th>Asal PT</th>
                            <th>Proposal</th>
                            <th>Kategori</th>
                            <th>Juri</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_penilaian as $row => $penilaian)
                        <tr>
                            <td>{{ ++$row}}</td>
                            <td id="tim-{{$penilaian->tim->id}}">{{ $penilaian->tim->nama_tim }}</td>
                            <td>{{ $penilaian->tim->politeknik->politeknik }}</td>
                            <td>@if($penilaian->tim->file_proposal) <a href="{{ asset('proposal/'.$penilaian->tim->file_proposal) }}">{{ $penilaian->tim->file_proposal }}</a>@endif</td>
                            <td>{{ $penilaian->tim->kategori->kategori }}</td>
                            <td>{{$penilaian->juri->nama}}</td>
                            <td>{{$penilaian->total}}</td>
                            <td>{{$penilaian->tim->status}}</td>
                            <td width="153">
                                <div class="row">
                                    <a href="{{url('ecodeeepis/pendaftaran/'.$penilaian->tim->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a> &nbsp;&nbsp;
                                    @if($penilaian->tim->status_approved == 2) <a onclick="openModal({{$penilaian->tim->id}})"  data-toggle="modal" data-target="#openModal" class="btn btn-primary btn-sm mt-10"> <i class="fa fa-send"></i> Terbitkan Kelulusan </a> @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Tim</th>
                            <th>Asal PT</th>
                            <th>Proposal</th>
                            <th>Kategori</th>
                            <th>Juri</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
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
                <input type="text" name="tim_id" id="tim-id">
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
        var kategori =  $('#kategori :selected').val();
        var politeknik =  $('#politeknik :selected').val();
        var juri =  $('#juri :selected').val();
        location.href='{{url("/")}}/ecodeeepis/penjurian/?politeknik='+politeknik+'&kategori='+kategori+'&juri='+juri;;
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
            location.href='{{url("/")}}/ecodeeepis/set-lulus/'+id+'/?status='+status+'&redirect=penjurian';
        }
    }
</script>
@endsection
