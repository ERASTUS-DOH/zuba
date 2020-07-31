@extends('layout.zuba')
@section('content')
    <div class="container-fluid">
        <a href="{{route('requests')}}" class="btn-link">
            <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-left "></i>
                {{ __('Back') }}
            </button>
        </a>

        {{--start of delete modal--}}

        <div class="modal fade pt-5" id="deleteModal" tabindex="-1" role="dialog"
             aria-labelledby="" aria-hidden="true">
            <div class=" modal-dialog" role="document">
                <div class="modal-content card" style="background-color: #f3f3f3;">
                    <div class="modal-header card-header card-header-danger">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" method="POST">
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

        <div class="content">
            <div class="container-fluid">
                <!-- your content here -->

                    <div class="col-md-9 col-lg-9 m-auto">
                        <div class="card card-plain">
                            <div class="card-header card-header-info">
                                <div class="topCaption">
                                    <h4 class="card-title mt-0"> REQUEST DETAILS </h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="">
                                        <th>
                                            Component
                                        </th>
                                        <th>
                                            Value
                                        </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Bin - Owner
                                            </td>
                                            <td>
                                                {{ $owner->fname.'  '.$owner->lname }}
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                               Bin - Nickname
                                            </td>
                                            <td>
                                                {{ $bin->nickname }}
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                Date Sent
                                            </td>
                                            <td>
                                                @php
                                                   $data = explode(' ',$request->created_at);

                                                @endphp
                                                {{ $data[0] }}
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                Time Sent
                                            </td>
                                            <td>
                                                {{ $data[1] }}
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                Date Resolved
                                            </td>
                                            <td>
                                                @php
                                                    $default = '';
                                                    $data = explode(' ',$request->updated_at);

                                                    if($request->request_state == 1){
                                                        $default = 'Still Pending';
                                                    }elseif($request->request_state = 2){
                                                        $default = $data[0];
                                                    }
                                                @endphp

                                                {{ $default }}

                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                Time Resolved
                                            </td>
                                            <td>
                                                {{ $default }}
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------- -->
                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                State
                                            </td>
                                            <td>
                                                @php
                                                    $state = "";
                                                    if($request->request_state == "1"){
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
                                        </tr>
                                        <!-- ------------------------------------------------- -->

                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
                                                Request Type
                                            </td>
                                            <td>@if($request->request_state)
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
                                        </tr>

                                        <!-- ------------------------------------------------- -->
                                        <tr>
                                            <td>
{{--                                                <div class="col-md-3">--}}
{{--                                                    <a href="/bins/{{15}}/edit" class="btn  btn-link btn-wd g text-center">--}}
{{--                                                        <button class="btn btn-primary text-center" type="submit"><i class="fas fa-pen-square "></i>--}}
{{--                                                            {{ __('edit') }}--}}
{{--                                                        </button>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                            </td>
                                            <td>
                                                <div class="col-md-3">
                                                    <button class="btn btn-danger text-center" data-original-title="Delete Bin"
                                                            data-toggle="modal" data-target="@if(!$request->request_state){{'#deleteModal'}}@else{{'#noticeModal'}}@endif"
                                                    ><i class="fas fa-times"></i>
                                                        {{ __('delete') }}
                                                    </button>
                                                </div>

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


                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
@endsection
