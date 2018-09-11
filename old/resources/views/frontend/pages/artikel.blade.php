@extends('frontend.layouts')
@section('title')
{{$artikel->title}}
@endsection
@section('content')
    <div class="default-container">
        <div class="container">
            <br>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{$artikel->title}}</h2>
                    Pada {{$artikel->created_at}}
                </div>
                <div class="panel-body">
                    @if($artikel->photo != null)
                        <div align="center">
                        <img src="{{url('artikel/'.$artikel->photo)}}" class="img-responsive">
                        </div>
                    @endif
                    <br>
                    <p><?= $artikel->content?></p>
                </div>
            </div>
        </div>
    </div>
@endsection