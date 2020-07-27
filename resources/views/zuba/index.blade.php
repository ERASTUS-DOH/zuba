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
                        <p class="card-category">Bins Deployed</p>
                        <h3 class="card-title">{{ $data['bins']->count() }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/bins')}}"> Show all bins</a>
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
                        <p class="card-category"> Tricycles</p>
                        <h3 class="card-title">{{ $data['tricycles']->count() }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/tricycles')}}">Show All Tricycles</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <p class="card-category">Riders</p>
                        <h3 class="card-title">{{ $data['riders']->count() }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="javascript:;">Show All Riders</a>
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
                        <p class="card-category">Number of Bin Request</p>
                        <h3 class="card-title">{{ $data['bin_requests']->count() }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="javascript:;">Show All Bin-Owners</a>
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
