@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Data juri</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/ecodeeepis/juri/'.$juri->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="juri">Nama Juri</label>
                            <input type="text" class="form-control" value="{{$juri->nama}}" name="nama" id="nama" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Asal Politeknik</label>
                            <input type="text" class="form-control" value="{{$juri->asal_politeknik}}" name="asal_politeknik" id="asal_politeknik" rows="3"  required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Kategori Lomba</label>
                            <select name="kategori_id" id="" class="form-control">
                                @foreach ($list_kategori as $kategori)
                                <option value="{{$kategori->id}}" @if($juri->kategori_id == $kategori->id) selected @endif >{{$kategori->kategori}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="juri">Username</label>
                            <input type="text" class="form-control" value="{{$juri->username}}" name="username" id="username" rows="3"  required>
                        </div>
                        <div class="form-group">
                            <label for="juri">Password</label>
                            <input type="text" class="form-control" value="{{$juri->password}}" name="password" id="password" rows="3"  required>
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
