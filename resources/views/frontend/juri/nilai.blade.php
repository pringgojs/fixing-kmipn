@extends('frontend.juri.layout')
@section('content')
<div class="main-panel">
    <div class="content">
        <a class="navbar-brand" href="#">Welcome, {{ session('name') }}</a>
        <form action="{{url('juri/nilai')}}" method="post">
            {{ csrf_field() }}

            <input type="hidden" value="{{$penilaian->id}}" readonly name="penilaian_id">
            <input type="hidden" value="{{$penilaian->tim->id}}" readonly name="tim_id">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12">
                        <h4 class="title">Berikan nilai untuk tim {{ucwords(strtolower($penilaian->tim->nama_tim))}} </h4><br/>
                        File proposal : @if($penilaian->tim->file_proposal) <a href="{{ asset('proposal/'.$penilaian->tim->file_proposal) }}">{{ $penilaian->tim->file_proposal }}</a>@endif <br>
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{(session('error'))}}
                        </div>
                        @endif
                        
                        <div class="card">
                            <table class="table table-responsive table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Indikator</th>
                                        <th>Deskripsi</th>
                                        <th style="width:300px" class="text-center">Skor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_indikator as $row => $indikator)
                                    <?php
                                    $detail = \App\PenilaianDetail::where('penilaian_id', $penilaian->id)->where('indikator_id', $indikator->id)->first();
                                    if ($indikator->ref) {
                                        if ($penilaian->tim->kategori_id != 2) {
                                            continue;
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td>{{++$row}}</td>
                                        <td>{{$indikator->kriteria}}</td>
                                        <td>{{$indikator->deskripsi}}</td>
                                        <td class="text-center">
                                            @for($i=5; $i<10; $i++)
                                            <input type="radio" @if($detail) @if($detail->skor == $i) checked  @endif @endif value="{{$i}}" name="value_{{$indikator->id}}"> {{$i}} &nbsp;
                                            @endfor
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <p>Saran dan catatan :</p>
                        <textarea name="saran" class="form-control" cols="30" rows="5">@if($penilaian) {{trim($penilaian->saran)}} @endif</textarea> <br>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan Nilai</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection