@extends('frontend.playouts')

@section('title', 'Proposal | KMIPN 2018')

@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome, {{ $anggota[0]->fullname }}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p class="hidden-lg hidden-md">Welcome, {{ $anggota[0]->fullname }}</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('auth/logout') }}">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Proposal</h4><br/>
                            <p class="category"> Status Proposal :
                            @if($nullProposal)
                                <i class="label label-danger">Anda belum mengunggah proposal, silahkan unggah dibawah ini</i>
                            @else
                                <i class="label label-success">Anda sudah mengunggah proposal</i>
                            @endif
                            </p>
                            <br>
                            @if($tim->file_proposal)
                            <p class="category">File Proposal : 
                                <a href="{{ url('proposal/'.$tim->file_proposal) }}">{{ $tim->file_proposal }}</a>
                            </p>
                            @endif
                        </div>
                        <div class="content" style="float: none; margin: 0 auto;">
                            @if($tim->status_approved == 0)
                            <a class="btn btn-info" href="{{ url('profile/info-tim') }}">INFO TEAM</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection