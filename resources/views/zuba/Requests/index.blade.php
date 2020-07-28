@extends('layout.zuba')
@section('content')
    <div class="container-fluid">
        <!-- your content here -->
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-dumpster"></i>
                        </div>
                        <p class="card-category">Bins-Request Received Today</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/bins')}}">Show all bin request issued today</a>
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
                        <p class="card-category"> Home Pick Request</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/tricycles')}}">Show All Home Pick Request issued</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <p class="card-category">Pending Request</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="javascript:;">Show All Pending Request</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="card-category">Resolved Requests</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="javascript:;">Show All Resolved Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-info theme">
                        <h4 class="card-title mt-0"> List of all Active  requests</h4>
                        <p class="card-category"> Last four request that have been recieved.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <th>
                                    <!-- Nothing goes here -->
                                </th>
                                <th>
                                    Serial Number
                                </th>
                                <th>
                                    Region
                                </th>
                                <th>
                                    City
                                </th>
                                <th>
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                <!-- ------------------------------------------------------------------------ -->
                                <tr>
                                    <td>
                                        <i class="fas fa-exclamation-circle error"></i>
                                    </td>
                                    <td>
                                        GHR-2343-A
                                    </td>
                                    <td>
                                        Central
                                    </td>
                                    <td>
                                        Kotokoraba
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
                                            <i class="fas fa-lg fa-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- ------------------------------------------------------------------------ -->
                                <tr>
                                    <td>
                                        <i class="fas fa-check-circle success"></i>
                                    </td>
                                    <td>
                                        GHR-9375-S
                                    </td>
                                    <td>
                                        Central
                                    </td>
                                    <td>
                                        Abura
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
                                            <i class="fas fa-lg fa-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- ------------------------------------------------------------------------ -->
                                <tr>
                                    <td>
                                        <i class="fas fa-check-circle success"></i>
                                    </td>
                                    <td>
                                        GHR-5321-S
                                    </td>
                                    <td>
                                        Central
                                    </td>
                                    <td>
                                        Abura
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
                                            <i class="fas fa-lg fa-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- ------------------------------------------------------------------------ -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="map"></div>
        </div>
    </div>
@endsection