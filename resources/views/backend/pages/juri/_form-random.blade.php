<form id="form-set-juri" name="form_overtime">
    {!! csrf_field() !!}
    <input type="hidden" name="juri_id" value="{{$juri}}">
    <table id="table" class="table table-bordered table-hover table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tim</th>
                <th>Asal PT</th>
                <th>Kategori</th>
                <th>Proposal</th>
            </tr>
        </thead>
        <tbody>
            <?php $row = 1; ?>
            @if($random > 1) 
            @foreach($list_tim as $item)
            <input type="hidden" name="tim_id[]" value="{{$item->id}}" readonly>
            <tr>
                <td>{{ $row++ }}</td>
                <td id="tim-{{$item->id}}">{{ $item->nama_tim }}</td>
                <td>{{ $item->politeknik->politeknik }}</td>
                <td>{{ $item->kategori->kategori }}</td>
                <td>@if($item->file_proposal) <a href="{{ url('proposal/'.$item->file_proposal) }}">{{ $item->file_proposal }}</a>@endif</td>
            </tr>
            @endforeach
            @elseif($random == 1)
            <input type="hidden" name="tim_id[]" value="{{$item->id}}" readonly>
            <tr>
                <td>{{ $row++ }}</td>
                <td id="tim-{{$item->id}}">{{ $item->nama_tim }}</td>
                <td>{{ $item->politeknik->politeknik }}</td>
                <td>@if($item->file_proposal) <a href="{{ url('proposal/'.$item->file_proposal) }}">{{ $item->file_proposal }}</a>@endif</td>
                <td>{{ $item->kategori->kategori }}</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="clearfix">
        <button type="button" id="btn-simpan-posisi"  class="btn btn-sm btn-success float-left" onclick="store()">Simpan posisi</button>
    </div>
</form>