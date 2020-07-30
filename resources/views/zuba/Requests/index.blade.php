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
                        <p class="card-category">Bins-Request</p>
                        <h3 class="card-title"> {{ $pickup_requests->count() }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('showAllBinsRequest') }}">Show all bin request issued today</a>
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
                        <h3 class="card-title">0</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('showAllPickupRequest') }}">Show All Home Pick Request issued</a>
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
                        <h3 class="card-title">{{$pending_requests->count()}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('showAllPendingRequest') }}">Show All Pending Request</a>
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
                        <h3 class="card-title">{{$resolved_requests->count()}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('showAllResolvedRequest') }}">Show All Resolved Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-info theme">
                        <h4 class="card-title mt-0"> List of all Most Recent Request</h4>
{{--                        <p class="card-category"> Last four request that have been recieved.</p>--}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Date Sent
                                </th>
                                <th>
                                    Time Sent
                                </th>
                                <th>
                                    Bin Nick-Name
                                </th>
                                <th>
                                    State
                                </th>
                                <th>
                                    More-Info
                                </th>
                                </thead>
                                <tbody>

                                <!-- ------------------------------------------------------------------------ -->
                                @php
                                    $count = 1;
                                @endphp
                               @foreach( $pending_requests as $pending)

                                <tr>
                                    <td>
                                        {{$count}}
                                    </td>
                                    <td>
                                        @php
                                            $count++;
                                            $creat_date = explode(' ',$pending->created_at);
                                        @endphp
                                        {{ $creat_date[0] }}
                                    </td>
                                    <td>
                                        {{ $creat_date[1]  }}
                                    </td>
                                    <td>
                                        @php
                                        if(App\Bins::find($pending->bin_id)){
                                           $bin = App\Bins::find($pending->bin_id);
                                           }
                                        @endphp
                                        {{$bin->nickname}}
                                    </td>
                                    <td>
                                        @php
                                        $state = "";
                                        if($pending->request_state == "1"){
                                            $state = "Pending";
                                        }else{
                                            $state = "Resolved";
                                        }
                                        @endphp
                                        @if($state == "Pending")
                                            <button class="btn btn-warning btn-fab-mini btn-round table-bt"
                                                    rel="tooltip" data-original-title="Request Pending">
                                                <i class="fas fa-lg fa-clock"></i>
                                                {{$state}}
                                            </button>
                                        @elseif($state == "Resolved")
                                            <button class="btn btn-success btn-fab-mini btn-round table-btn">
                                                <i class="fas fa-lg fa-arrow-right"> </i>
                                                {{$state}}
                                            </button>
                                        @endif


                                    </td>
                                    <td>
                                        <a href="{{route('showRequestDetails',['id' =>$pending->id])}}">
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    rel="tooltip" data-original-title="More Info About Request">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                               @endforeach
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
    </div>
@endsection
