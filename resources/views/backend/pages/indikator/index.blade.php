@extends('backend.master')

@section('content')
<style>
.hidden {
    display: none;
}
</style>
<div class="page-header">
    <h2>indikator</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
            <a href="{{ url('ecodeeepis/indikator/create') }}" class="btn btn-success pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kriteria</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_indikator as $row => $indikator)
                        <tr>
                            <td>{{ ++$row }}</td>
                            <td>{{ $indikator->kriteria }}</td>
                            <td>{{ $indikator->deskripsi }}</td>
                            <td width="153">
                                <form action="{{ url('ecodeeepis/indikator/'.$indikator->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('ecodeeepis/indikator/'.$indikator->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
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
</script>
@endsection
