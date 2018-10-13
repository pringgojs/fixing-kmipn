@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>juri</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
            <a href="{{ url('ecodeeepis/juri/create') }}" class="btn btn-success pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nam</th>
                            <th>Asal Politeknik</th>
                            <th>Kategori</th>
                            <th>Username</th>
                            <th>Password </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_juri as $row => $juri)
                        <tr>
                            <td>{{ ++$row }}</td>
                            <td id="juri-{{$juri->id}}">{{ $juri->nama }}</td>
                            <td>{{ $juri->asal_politeknik }}</td>
                            <td>{{ $juri->kategori->kategori }}</td>
                            <td>{{ $juri->username }}</td>
                            <td>{{ $juri->password ? '******' : '-' }}</td>
                            <td width="153">
                                <form action="{{ url('ecodeeepis/juri/'.$juri->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('ecodeeepis/juri/'.$juri->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                    <a onclick="openModal({{$juri->id}})"  data-toggle="modal" data-target="#openModal" class="btn btn-success"><i class="fa fa-gavel"></i> Tim</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="openModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-left" id="exampleModalLabel">Penilaian Juri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
            </div>
            <div id="table-data"></div>
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

function openModal(id) {
    cekJumlah(id);
    var juri = $('#juri-'+id).html();
    $('#juri-id').val(id);
    $('#nama-juri-modal').html(juri);
}

function cekJumlah(id) {
    $.ajax({
        url: '{{url("ecodeeepis/juri/cek-jumlah")}}/'+id,
        async: true,
        success: function (res) {
            $('#table-data').html(res);
        },
        error: function (res) {
            alert('terjadi kegagalan sistem');
        }
    })
}

function random() {
    var random = $('#jumlah-random').val();
    var max = $('#max').html();
    if (random < 1) {
        alert('masukan jumlah tim yang akan dinilai untuk juri tersebut');
        return true;
    }
    
    if (random > max) {
        alert('jumlah tim tidak boleh melebih jumlah maximal');
        $('#jumlah-random').val(max);
        return true;
    }

    var juri = $('#juri-id').val();

    $.ajax({
        url: '{{url("ecodeeepis/juri/random")}}/'+juri+'/'+random,
        success: function (res) {
            if (res == 0) {
                alert('jumlah tim tidak boleh melebih jumlah maximal');
                return false;
            }
            $('#body-table').html(res);
        },
        error: function (res) {
            alert('terjadi kegagalan sistem');
        }
    })
}
</script>
@endsection
