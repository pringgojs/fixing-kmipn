@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Tim Yang Tidak Lolos</h2>
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
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Ketua</th>
                            <th>Asal PT</th>
                            <th>Proposal</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->users->fullname }}</td>
                            <td>
                                @foreach($politeknik as $item2)
                                    @if($item2->id == $item->politeknik_id)
                                        {{ $item2->politeknik }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $item->file_proposal }}</td>
                            <td>{{ $item->kategori->kategori }}</td>
                            <td>{{ $item->status }}</td>
                            <td width="153">
                                <form action="{{ url('/ecodeeepis/pendaftaran/'.$item->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ url('/ecodeeepis/pendaftaran/'.$item->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Detail</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
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
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
@endsection
