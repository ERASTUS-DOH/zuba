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
                                            {{$cycle->id}}

                                            {{--Assign Track to Rider--}}
                                            <button class="btn btn-success btn-fab-mini btn-round table-btn"
                                                    rel="tooltip" data-original-title="Assign Tricycle"
                                                    data-toggle="modal" data-target="#assignModal-{{ $cycle->id }}"
                                                    style="width: 35px;"
                                                    onclick="">
                                                <i class="fas fa-lg fa-tags"></i>
                                            </button>
                                            {{--End of Assign Tricycles--}}

                                        <!-- Assign Bin Modal -->
                                            <div class="modal fade pt-5" id="assignModal-{{ $cycle->id }}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-da nger theme-gradient">
                                                            <h5 class="modal-title" id="exampleModalLabel">Select the Rider
                                                                </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <b></b>
                                                        <form action="{{route('assignCycle')}}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="mb-4">
                                                                        <div class="col-md-12 col-lg-12">
                                                                            <div class="form-group bmd-form-group">
                                                                                <select name="rider_id" id="rider_id" class="form-control" required>
                                                                                    <option selected >Click here to select the Tricyle Rider</option>
                                                                                    @foreach($riders as $rider)
                                                                                        <option class="form-control"  value="{{ $rider->id }}">{{ $rider->fname.' '.$rider->lname }}</option>
                                                                                    @endforeach
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="cycle_id" id="cycle_id" value="{{ $cycle->id }}">
                                                            <div class="modal-footer m-auto w-25 border-top-0">
                                                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                                                    Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--End of Assign modal--}}

                                            {{--start of de-assign modal--}}

                                            <div class="modal fade pt-5" id="deAssignModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-warning">
                                                            <h5 class="modal-title" id="exampleModalLabel">De-Assign Bin</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="" method="get">
                                                            @method('get')
                                                            @csrf
                                                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <p class="">Are you sure you want to de-assign this bin ?</p>
                                                                    </div>
                                                                    <div class="row justify-content-center">
                                                                        <h5 class="bold"></h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer justify-content-center p-0">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                                                                class="fas fa-times-circle"></i> No</button>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <button type="submit" class="btn btn-success"><i
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

                                            {{--Start of view Details--}}
                                            <a href="/tricycles/{{$cycle->id}}">
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        rel="tooltip" data-original-title="More - Info"
                                                        onclick="window.location.href='url()';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </a>
                                            {{--End of View Details--}}


                                            {{--Start of Delete Button--}}
                                            <button class="btn btn-danger btn-fab-mini btn-round table-btn"
                                                    rel="tooltip" data-original-title="Delete Tricycle"
                                                    data-toggle="modal" data-target="#deleteModal-{{ $cycle->id }}"
                                                    style="width: 35px;"
                                                    onclick="">
                                                <i class="fas fa-lg fa-times"></i>
                                            </button>
                                            {{--End of Delete Button--}}

                                            {{--start of delete modal--}}

                                            <div class="modal fade pt-5" id="deleteModal-{{ $cycle->id }}" tabindex="-1" role="dialog"
                                                 aria-labelledby="" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-danger">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Tricycle {{$cycle->id}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="{{route('deleteCycle',['id' => $cycle->id])}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <p class="">Are you sure you want to <b>Delete</b>{{$cycle->id}} this Tricycle?</p>
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
                                                                                class="fas fa-check"></i> Yes
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
        </div>
    </div>

    @endsection
