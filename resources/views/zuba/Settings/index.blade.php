@extends('layout.zuba')
@section('content')
<div class="container-fluid">
    <!-- your content here -->
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="card-category">Assign Bins</p>
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{route('assignBin')}}"> Assign A Bin</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <p class="card-category"> Assign Tricycles</p>
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="">Asign A Tricycles</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <p class="card-category">Payments</p>
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="javascript:;"> All Riders</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <p class="card-category">Rubbish Dumps</p>
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="javascript:;">Show All Bin-Owners</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
