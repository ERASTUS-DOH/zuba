@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <form action="{{ route('updateOwner',[$owner->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-">
                        <div class="">
                            <div class="card card-profile rounded-circle" style="width: 200px; height: 200px;
">
                                {{--                            <h4 class="card-header-myDef card-title">Ilupeju, Juliet</h4>--}}
                                <div class="card-body ">
                                    <div class="card-header-image" style="margin: 5px auto;">
                                        <div class="" style="overflow: hidden">
                                            <img class="img" src="../../assets/img/faces/marc.jpg" style="max-width: 160px; border-radius: 50%">
                                        </div>

                                        {{--                                    <i class="fas fa-user-circle fa-8x" style="color:grey;"></i>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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


                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-myDef">
                                <p class="card-category">Profile details of the Bin Owner. </p>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4 pt-4">
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label class="bmd-label-floating">Mr/Mrs/Ms</label>
                                            <input type="text" name="title" id="title" class="form-control" value="{{ $owner->title }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="fname" class="bmd-label-floating">First Name</label>
                                            <input type="text" name="fname" id="fname" class="form-control" value="{{ $owner->fname }}" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="other_name" class="bmd-label-floating">Middle Name</label>
                                            <input type="text" id="other_name" name="other_name" class="form-control" value="{{ $owner->other_name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="lname" class="bmd-label-floating">Last Name</label>
                                            <input type="text" name="lname" id="lname" class="form-control" value="{{ $owner->lname }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="address" class="bmd-label-floating">Residencial Adress</label>
                                            <input type="text" class="form-control" name="address" id="address" value="{{ $owner->address }}" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="telephone" class="bmd-label-floating">Telephone</label>
                                            <input type="tel" name="telephone" id="telephone"  class="form-control" value="{{ $owner->telephone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="email" class="bmd-label-floating">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ $owner->email }}" >
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

