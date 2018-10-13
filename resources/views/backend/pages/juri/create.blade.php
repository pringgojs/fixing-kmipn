@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Juri</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('ecodeeepis/juri') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="juri">Nama Juri</label>
                            <input type="text" class="form-control" name="nama" id="nama" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Asal Politeknik</label>
                            <input type="text" class="form-control" name="asal_politeknik" id="asal_politeknik" rows="3"  required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Kategori Lomba</label>
                            <select name="kategori_id" id="" class="form-control">
                                @foreach ($list_kategori as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="juri">Username</label>
                            <input type="text" class="form-control" name="username" id="username" rows="3"  required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Password</label>
                            <input type="text" class="form-control" name="password" id="password" rows="3"  required>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('ecodeeepis/juri') }}" class="btn btn-warning">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
