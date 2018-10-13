@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>indikator</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('ecodeeepis/indikator') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="indikator">Kriteria</label>
                            <input type="text" class="form-control" value="{{old('kriteria')}}" name="kriteria" id="kriteria" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label for="indikator">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="5">{{old('deskripsi')}}</textarea>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('ecodeeepis/indikator') }}" class="btn btn-warning">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
