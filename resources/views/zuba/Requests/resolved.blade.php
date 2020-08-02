@extends('layout.zuba')
@section('content')
    <div class="container-fluid">
        <a href="/bin_requests" class="btn-link">
            <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-left "></i>
                {{ __('Back') }}
            </button>
        </a>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-info theme">
                        <h4 class="card-title mt-0"> List of all Bin Pickup Requests</h4>
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
                                    Request Type
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
                                @foreach( $resolved_requests as $pending)

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
                                            @if($pending->request_type == 0)
                                                <button class="btn btn-primary btn-fab-mini btn-round table-btn"
                                                        rel="tooltip" data-original-title="Automatic Bin Request" style="background-color:#70b723;">
                                                    <i class="fas fa-lg fa-retweet"></i>
                                                    Automatic
                                                </button>
                                            @else
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        rel="tooltip" data-original-title="Manual Pick-up Request" style="background-color:#005967;">
                                                    <i class="fas fa-lg fa-arrows-alt"></i>
                                                    Manual
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

                                            <button class="btn btn-danger btn-round table-btn"
                                                    rel="tooltip" data-original-title="Delete Request"
                                                    data-toggle="modal" data-target="@if($pending->request_state == "2"){{'#deleteModal-'.$pending->id}}@else{{'#noticeModal'}}@endif">
                                                <i class="fas fa-lg fa-times"></i>

                                            </button>


                                            {{--start Notice modal--}}

                                            <div class="modal fade pt-5" id="noticeModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-warning">
                                                            <h5 class="modal-title" id="exampleModalLabel">Important Notice</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="" method="POST">

                                                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <p class="">The Request cannot be deleted because,<br>
                                                                            It is still in pending state</p>
                                                                    </div>
                                                                    <div class="row justify-content-center">
                                                                        <h5 class="bold"></h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer justify-content-center p-0">
                                                                <div class="col-md-5">
                                                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i
                                                                            class="fas fa-times-circle"></i> OK </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--end of Notice modal--}}


                                            {{--start of delete modal--}}

                                            <div class="modal fade pt-5" id="deleteModal-{{ $pending->id }}" tabindex="-1" role="dialog"
                                                 aria-labelledby="" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-danger">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Request</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="{{route('deleteRequest',['id'=>$pending->id])}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <p class="">Are you sure you want to delete Request ?</p>
                                                                    </div>
                                                                    <div class="row justify-content-center">
                                                                        <h5 class="bold"></h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer justify-content-center p-0">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <button type="button" class="btn btn-success" data-dismiss="modal"><i
                                                                                class="fas fa-times-circle"></i> No</button>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <button type="submit" class="btn btn-danger"><i
                                                                                class="fas fa-check-circle"></i> Yes
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--end of de-assign modal--}}

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
