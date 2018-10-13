@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Data indikator</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/ecodeeepis/indikator/'.$indikator->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="indikator">Kriteria</label>
                            <input type="text" class="form-control" value="{{$indikator->kriteria}}" name="kriteria" id="kriteria" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label for="indikator">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="5">{{$indikator->deskripsi}}</textarea>
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
