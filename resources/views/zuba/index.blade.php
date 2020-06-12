@extends('layout.zuba')
@section('content')
    <div class="container-fluid">
        <!-- your content here -->
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-dumpster"></i>
                        </div>
                        <p class="card-category">Bins Deployed</p>
                        <h3 class="card-title">{{ $details['bins']->count() }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/bins')}}"> Show all bins</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <p class="card-category"> Tricycles</p>
                        <h3 class="card-title">{{$details['tricycles']->count()}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{url('/tricycles')}}">Show All Tricycles</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <p class="card-category">Bin Owners</p>
                        <h3 class="card-title">{{$details['binOwners']->count()}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="javascript:;">Follow for more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-info theme">
                        <h4 class="card-title mt-0"> List of Request sent by Bins Deployed</h4>
                        <p class="card-category"> Pick a bin to view more information</p>
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
