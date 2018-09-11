@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Data Lomba</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/ecodeeepis/lomba/'.$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="kategori">Kategori Lomba</label>
                                            <select class="form-control" name="kategori_id" id="" required>
                                            @foreach($kategori as $item)
                                                @if($item->id == $data->kategori_id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->kategori }}</option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pengumuman">Pengumuman</label>
                                            <textarea class="form-control summernote" name="pengumuman" id="pengumuman" rows="3" placeholder="pengumuman">{{ $data->pengumuman }}</textarea>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Lomba</label>
                                            <textarea class="form-control summernote" name="deskripsi" id="deskripsi" rows="3" placeholder="deskripsi">{{ $data->deskripsi }}</textarea>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="peraturan">Peraturan Lomba</label>
                                            <textarea class="form-control summernote" name="peraturan" id="peraturan" rows="3" placeholder="peraturan">{{ $data->peraturan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/ecodeeepis/lomba') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
