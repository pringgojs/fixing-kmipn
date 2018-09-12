@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Lomba</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <a href="{{ url('/ecodeeepis/lomba/create') }}" class="btn btn-success pull-right">Create New</a>
                <div class="clearfix"></div>
                <br>
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Total Peserta</th>
                            <th>Total Peserta Belum Unggah Proposal</th>
                            <th>Total Peserta Menunggu verifikasi </th>
                            <th>Total Peserta Terverifikasi </th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kategori->kategori }}</td>
                            <td class="text-center">{{ $item->getTotal() }}</td>
                            <td class="text-center">{{ $item->getTotalBelumUnggah() }}</td>
                            <td class="text-center">{{ $item->getTotalPendingVerifikasi() }}</td>
                            <td class="text-center">{{ $item->getTotalTerverifikasi() }}</td>
                            <td width="153">
                                <form action="{{ url('/ecodeeepis/lomba/'.$item->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/ecodeeepis/lomba/'.$item->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Total Peserta Belum Unggah Proposal</th>
                            <th>Total Peserta Menunggu verifikasi </th>
                            <th>Total Peserta Terverifikasi </th>
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
</script>
@endsection
