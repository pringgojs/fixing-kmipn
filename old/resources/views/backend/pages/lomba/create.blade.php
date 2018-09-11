@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Lomba</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('/ecodeeepis/lomba') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="kategori">Kategori Lomba</label>
                                    <select class="form-control select2" name="kategori_id" id="" required>
                                    @foreach($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="pengumuman">Pengumuman</label>
                                    <textarea class="form-control summernote" name="pengumuman" id="pengumuman" rows="3" placeholder="pengumuman"></textarea>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Lomba</label>
                                    <textarea class="form-control summernote" name="deskripsi" id="deskripsi" rows="3" placeholder="deskripsi"></textarea>
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="peraturan">Peraturan Lomba</label>
                                    <textarea class="form-control summernote" name="peraturan" id="peraturan" rows="3" placeholder="peraturan"></textarea>
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
