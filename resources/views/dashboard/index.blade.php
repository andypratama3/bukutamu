@extends('layouts.dashboard.dashboard')
@section('title','Dashboard')
@section('content')
{{-- <div class="page-header flex-wrap">
    <div class="header-left">
        <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
        <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
        <div class="d-flex align-items-center">
            <a href="#">
                <p class="m-0 pr-3">Dashboard</p>
            </a>
            <a class="pl-3 mr-4" href="#">
                <p class="m-0">ADE-00234</p>
            </a>
        </div>
        <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
            <i class="mdi mdi-plus-circle"></i> Add Prodcut </button>
    </div>
</div> --}}

<!-- last row starts here -->
<div class="row">
    <div class="col-sm-4  grid-margin">
        <div class="card">
        <div class="card-body">
            <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                    <div class="hex-mid hexagon-warning">
                        <i class="mdi mdi-clock-outline"></i>
                    </div>
                </div>
                <div class="pl-4">
                    <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                    <h6 class="text-muted">Schedule Meeting</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4  grid-margin">
        <div class="card">
        <div class="card-body">
            <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                    <div class="hex-mid hexagon-warning">
                        <i class="mdi mdi-clock-outline"></i>
                    </div>
                </div>
                <div class="pl-4">
                    <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                    <h6 class="text-muted">Schedule Meeting</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4  grid-margin">
        <div class="card">
        <div class="card-body">
            <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                    <div class="hex-mid hexagon-warning">
                        <i class="mdi mdi-clock-outline"></i>
                    </div>
                </div>
                <div class="pl-4">
                    <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                    <h6 class="text-muted">Schedule Meeting</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">

                <div class="d-flex border-bottom mb-4 pb-2">
                    <div class="hexagon">
                        <div class="hex-mid hexagon-danger">
                            <i class="mdi mdi-account-outline"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                        <h6 class="text-muted">Profile visits</h6>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-4 pb-2">
                    <div class="hexagon">
                        <div class="hex-mid hexagon-success">
                            <i class="mdi mdi-laptop-chromebook"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                        <h6 class="text-muted">Bounce Rate</h6>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-4 pb-2">
                    <div class="hexagon">
                        <div class="hex-mid hexagon-info">
                            <i class="mdi mdi-clock-outline"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                        <h6 class="text-muted">Schedule Meeting</h6>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="hexagon">
                        <div class="hex-mid hexagon-primary">
                            <i class="mdi mdi-timer-sand"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                        <h6 class="text-muted mb-0">Browser Usage</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
