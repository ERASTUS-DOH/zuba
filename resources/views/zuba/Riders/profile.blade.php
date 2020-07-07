@extends('layout.zuba')
@section('content')
    <div class="content">


        <div class="container-fluid">
            <a href="{{route('riders')}}" class="text-center">
                <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-left "></i>
                    {{ __('Back') }}
                </button>
            </a>


            <form action="{{url('/riders/'.$rider->id.'/edit')}}" method="GET">
                <div class="row">
                    <div class="col-md-">
                        <div class="">
                            <div class="card card-profile rounded-circle" style="width: 200px; height: 200px;
">
                                {{--                            <h4 class="card-header-myDef card-title">Ilupeju, Juliet</h4>--}}
                                <div class="card-body ">
                                    <div class="card-header-image" style="margin: 5px auto;">
                                        <div class="" style="overflow: hidden">
                                            <img class="img" src="../assets/img/faces/marc.jpg" style="max-width: 160px; border-radius: 50%">
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



                    {{--                    @foreach($owner as $owner)--}}
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-myDef">
                                <p class="card-category">Profile details of Tricycle Rider. </p>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4 pt-4">
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label class="bmd-label-floating">Mr/Mrs/Ms</label>
                                            <input type="text" name="title" id="title" class="form-control" value="{{ $rider->title }}" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="fname" class="bmd-label-floating">First Name</label>
                                            <input type="text" name="fname" id="fname" class="form-control" value="{{ $rider->fname }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="other_name" class="bmd-label-floating">Middle Name</label>
                                            <input type="text" id="other_name" name="other_name" class="form-control" value="{{ $rider->other_name }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="lname" class="bmd-label-floating">Last Name</label>
                                            <input type="text" name="lname" id="lname" class="form-control" value="{{ $rider->lname }}" readonly="">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="address" class="bmd-label-floating">Residencial Adress</label>
                                            <input type="text" class="form-control" name="address" id="address" value="{{ $rider->address }}" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="telephone" class="bmd-label-floating">Telephone</label>
                                            <input type="tel" name="telephone" id="telephone"  class="form-control" value="{{ $rider->telephone }}" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="email" class="bmd-label-floating">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ $rider->email }}" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 w-50 m-auto">
                    {{--                <a href="/binOwners/{{ $owner->id }}/edit">--}}


                    <div class="col-6">
                        {{--                        <a href="{{}}" class="button-container">--}}
                        <button type="submit" class="btn btn-block btn-myDef" onclick=""><i class="fas fa-edit"></i>
                            Edit</button>
                        {{--                        </a>--}}
                    </div>


                    <div class="col-6">
                        <button type="" class="btn btn-block btn-danger" onclick=""><i class="fas fa-trash"></i>
                            Delete</button>
                    </div>
                </div>
                <div class="clear fix"></div>
            </form>
        </div>

        <!-- Begin list of Tricycles Owned -->

        <div class="content mt-5">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> List of Tricycles Owned by {{$rider->title.' '.$rider->fname.' '.$rider->lname}}</h4>
                            <p class="card-category"> Pick a Tricycle to view more information</p>
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
                                        Nick Name
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------------------------------------ -->

                                    {{--                                @foreach($bins as $bin)--}}
                                    <tr>
                                        <td>
                                            <i class="fas fa-exclamation-circle error"></i>
                                        </td>
                                        <td>
                                            {{--                                            {{$bin->serialNumber}}--}}
                                        </td>
                                        <td>
                                            {{--                                            {{$bin->nickname}}--}}
                                        </td>
                                        <td>
                                            {{--                                            {{$bin->locationID}}--}}
                                        </td>
                                        <td>
                                            {{--                                            <a href="/bins/{{$bin->id}}}}">--}}
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='url()';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                            {{--                                            </a>--}}
                                        </td>
                                    </tr>
                                    {{--                                @endforeach--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of list of bins owned  -->
    </div>
@endsection
