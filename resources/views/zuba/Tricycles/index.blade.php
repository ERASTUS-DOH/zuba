@extends('layout.zuba')
@section('content')
    <div class="container row ">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a href="{{route('createCycle')}}">
                <button class="btn btn-block btn-success" onclick="" data-toggle="modal"
                        data-target="Add-New-Bin-Modal">

                    <i class="fas fa-plus"> </i> Register - Cycle
                </button>
            </a>
        </div>
        {{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
        {{--            <button class="btn btn-block btn-dark" onclick="">--}}
        {{--                <i class="fas fa-minus"></i> Some Button--}}
        {{--            </button>--}}
        {{--        </div>--}}
    </div>
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> List of Tricycles deployed</h4>
                            <p class="card-category"> Pick a tricycle to view more information</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <th>
                                        <!-- Nothing goes here -->
                                    </th>
                                    <th>
                                        Registration Number
                                    </th>
                                    <th>
                                        Maximum Capacity
                                    </th>
                                    <th>
                                        Brand
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------------------------------------ -->
                                    @foreach($cycles as $cycle)
                                    <tr>
                                        <td>
                                            <i class="fas fa-exclamation-circle error"></i>
                                        </td>
                                        <td>
                                            {{$cycle->regNumber}}
                                        </td>
                                        <td>
                                            {{$cycle->max_capacity}}
                                        </td>
                                        <td>
                                            {{$cycle->brand}}
                                        </td>
                                        <td>
                                            <a href="/tricycles/{{$cycle->id}}">
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='url()';">
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
        </div>
    </div>

    @endsection
