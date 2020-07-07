@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <form action="{{route('updateCycle',[$cycle->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
{{--                    <div class="col-md-2">--}}
{{--                        <div class="">--}}
{{--                            <div class="card card-profile rounded-circle" style="width: 200px; height: 200px;--}}
{{--">--}}
{{--                                                            <h4 class="card-header-myDef card-title">Ilupeju, Juliet</h4>--}}
{{--                                <div class="card-body ">--}}
{{--                                    <div class="card-header-image" style="margin: 5px auto;">--}}
{{--                                        <div class="" style="overflow: hidden">--}}
{{--                                            <img class="img" src="../../assets/img/faces/marc.jpg" style="max-width: 160px; border-radius: 50%">--}}
{{--                                        </div>--}}

{{--                                                                            <i class="fas fa-user-circle fa-8x" style="color:grey;"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    {{--                    <div class="">--}}
                    {{--                        <div class="card card-profile">--}}
                    {{--                            <div class="card-header-myDef">Fingerprint data</div>--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <div class="img-shell p-0">--}}
                    {{--                                    <a href="#" onclick="" class="btn active btn-secondary"><i class="fas fa-fingerprint fa-5x"></i><div class="ripple-container"></div></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    <div class="col-md-7 m-auto">
                        <div class="card">
                            <div class="card-header card-header-myDef">
                                <p class="card-category">Profile Details of the Selected Tricycle </p>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4 pt-4">
                                    <div class="col-md-8 m-auto">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="regNumber" class="bmd-label-floating">Registeration Number</label>
                                            <input type="text" name="regNumber" id="regNumber" class="form-control" value="{{$cycle->regNumber}}" readonly >
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-8 m-auto">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="owner" class="bmd-label-floating">Owner</label>
                                            <input type="text" id="owner" name="owner" class="form-control" value="" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-8 m-auto">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="brand" class="bmd-label-floating">Brand</label>
                                            <input type="text" name="brand" id="brand" class="form-control" value="{{$cycle->brand}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-8 m-auto">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="color" class="bmd-label-floating">Color</label>
                                            <input type="text" id="color" name="color" class="form-control" value="{{$cycle->colour}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-8 m-auto">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="max_capacity" class="bmd-label-floating">Maximum-Capacity</label>
                                            <input type="number" name="max_capacity" id="max_capacity" class="form-control" value="{{ $cycle->max_capacity }}" >
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 w-50 m-auto">

                    <div class="col-6">
                        <button type="submit" class="btn btn-block btn-success" onclick=""><i class="fas fa-check"></i>
                            update</button>
                    </div>

                    <div class="col-6">
                        <a href="{{route('Owners')}}" class="">
                            <button class="btn btn-block btn-danger " type="button"><i class="fas fa-times "></i>
                                {{ __('Cancel') }}
                            </button>
                        </a>
                    </div>

                    {{--                        <a href="{{ route('Owners') }}" class="">--}}
                    {{--                        <button type="" class="btn btn-block btn-danger" onclick="" >--}}
                    {{--                            <i class="fas fa-times"></i>--}}
                    {{--                            Save</button>--}}
                    {{--                        </a>--}}

                </div>
                <div class="clear fix"></div>
            </form>

            <!-- Modal.Delete -->
            <div class="modal fade pt-5" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class=" modal-dialog" role="document">
                    <div class="modal-content card" style="background-color: #f3f3f3;">
                        <div class="modal-header card-header card-header-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="" method="GET">
                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <p class="">Are you sure you want to delete this user?</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <h5 class="bold">Something LastName</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer justify-content-center p-0">
                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="button" class="btn btn-danger"><i
                                                class="fas fa-times-circle"></i> No</button>
                                    </div>
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-success"><i
                                                class="fas fa-check-circle"></i> Yes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
