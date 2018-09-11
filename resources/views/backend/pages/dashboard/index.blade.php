@extends('backend.master')

@section('content')
    <div class="page-header">
        <h2>Dashboard</h2>
    </div>

    <div class="row w-no-padding margin-b-30">
			
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Peserta</h2>
                        <p class="text-muted">Total Peserta</p>
                        <span class="float-right text-primary widget-r-m">37859</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Pending</h2>
                        <p class="text-muted">Menunggu Proposal</p>
                        <span class="float-right text-indigo widget-r-m">1758</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Orders</h2>
                        <p class="text-muted">Total Orders</p>
                        <span class="float-right text-success widget-r-m">1385</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:85%;" class="progress-bar bg-success"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">85%</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Visitors</h2>
                        <p class="text-muted">Total Visitors</p>
                        <span class="float-right text-warning widget-r-m">98421</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:38%;" class="progress-bar bg-warning"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">38%</p>
                </div>
            </div>
        </div>
    </div>
@endsection
