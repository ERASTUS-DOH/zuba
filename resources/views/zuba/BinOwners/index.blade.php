@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row justify-content-start">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{route('createBinOwner')}}">
                        <button class="btn btn-block btn-success" onclick="" data-toggle="modal"
                                data-target="exampleModal">
                            <i class="fas fa-plus"></i> Add New Owner
                        </button>
                    </a>
                </div>
{{--                <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--                    <button class="btn btn-block btn-dark" onclick="">--}}
{{--                        <i class="fas fa-minus"></i> Some Button--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain" style="margin-top: 0;">
                        <div class="card-body" style="padding-top: 10px;">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="card-header card-header-info">
                                    <!-- <th style="margin-left: 15px !important;">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </th> -->
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Bin Serial Number
                                    </th>
                                    <th colspan="3">
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <!-- <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td> -->
                                        @foreach($owners as $owner)
                                        <td>
                                            {{$owner->id}}
                                        </td>
                                        <td>
                                            {{$owner->fname. " ".$owner->lname}}
                                        </td>
                                        <td>
                                            {{$owner->telephone}}
                                        </td>
                                        <td>
                                            {{$owner->email}}
                                        </td>
                                        <td>
                                            {{$owner->address}}
                                        </td>
                                        <td>
                                            GHR-2343-A
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-fab-mini btn-round table-btn"
                                                    data-toggle="modal" data-target="#exampleModal2"
                                                    rel="tooltip" data-original-title="Delete"
                                                    style="width: 35px;">
                                                <i class="fas fa-lg fa-times"></i>
                                            </button>

{{--                                            START OF DELETE MODAL--}}

                                            <div class="modal fade pt-5" id="exampleModal2" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class=" modal-dialog" role="document">
                                                    <div class="modal-content card" style="background-color: #f3f3f3;">
                                                        <div class="modal-header card-header card-header-danger">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="/binOwners/{{$owner->id}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body" style="margin-bottom: 0px !important;">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <p class="">Are you sure you want to delete Bin-Owner: <b>{{$owner->fname.' '.$owner->lname}}</b>?</p>

                                                                    </div>
                                                                    <div class="row justify-content-center">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer justify-content-center p-0">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <a href="{{route('Owners')}}" class="btn btn-danger">
                                                                            <i class="fas fa-times-circle"></i> No
                                                                        </a>
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
{{--                                                END OF DELETE MODAL--}}

                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-fab-mini btn-round table-btn"
                                                    rel="tooltip" data-original-title="Track Bin"
                                                    style="width: 35px;">
                                                <i class="fas fa-lg fa-map-marker-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{url('binOwners/'.$owner->id.'/')}}">
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        rel="tooltip" data-original-title="More" onclick="">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal.Add -->
            <div class="modal fade pt-5" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class=" modal-dialog" role="document">
                    <div class="modal-content card" style="background-color: #f3f3f3;">
                        <div class="modal-header card-header card-header-da nger theme-gradient">
                            <h5 class="modal-title" id="exampleModalLabel">Register New Owner</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
{{--                                                <label for="title" class="bmd-label-floating">Title</label>--}}
                                                <select name="title" id="title" class="form-control" required>
                                                    <option selected >Select Your Title</option>
                                                    <option class="form-control" value="Mr.">Mr.</option>
                                                    <option class="form-control"value="Mrs.">Mrs.</option>
                                                    <option class="form-control" value="Ms.">Ms.</option>
                                                    <option class="form-control"value="Miss.">Miss.</option>
                                                    <option class="form-control" value="Dr.">Dr.</option>
                                                </select>
{{--                                                <input type="text" name="fname" id="fname" class="form-control" required>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="fname" class="bmd-label-floating">First Name</label>
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="lname" class="bmd-label-floating">Last Name</label>
                                                <input type="text" name="lname" id="lname" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="other_name" class="bmd-label-floating">Other Name</label>
                                                <input type="text" name="other_name" id="other_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="telephone" class="bmd-label-floating">Telephone</label>
                                                <input type="tel" name="telephone" id="telephone" class="form-control" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="address" class="bmd-label-floating">Address</label>
                                                <input type="text" id="address" name="address" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="email" class="bmd-label-floating">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="password" class="bmd-label-floating">Password</label>
                                                <input type="password" id="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="con-password" class="bmd-label-floating">Confirm Password</label>
                                                <input type="password" name="password-confirmation" id="password-confirmation" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer m-auto w-25 border-top-0">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
{{--            @if($owner)--}}
{{--                <!-- Modal.Delete -->--}}
{{--                    --}}
{{--            @else--}}

{{--                @endif--}}
        </div>
    </div>


@endsection
