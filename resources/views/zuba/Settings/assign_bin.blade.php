@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="">
                <div class="col-md-9  mt-auto">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> Assign A bin to an owner </h4>
                            <p class="card-category"> Fill the form below and click SAVE to submit your input</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <form action="{{route('saveAssigned')}}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            {{--                                                <label for="title" class="bmd-label-floating">Title</label>--}}
                                                            <select name="owner_id" id="owner_id" class="form-control" required>

                                                                <option selected >Select the Bin Owner</option>
                                                                @foreach($owners as $owner)
                                                                 <option class="form-control"  value="{{ $owner->id }}">{{$owner->fname.' '.$owner->lname}}</option>
                                                                @endforeach
                                                            </select>

                                                            {{--                                                <input type="text" name="fname" id="fname" class="form-control" required>--}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
{{--                                                            <label for="fname" class="bmd-label-floating">First Name</label>--}}

                                                            <select name="bin_id" id="bin_id" class="form-control" required>

                                                                <option selected>Select the Bin</option>
                                                                @foreach($bins as $bin)
                                                                    <option class="form-control" value="{{ $bin->id }}">{{$bin->nickname.' ****** '.$bin->serialNumber}}</option>
                                                                @endforeach
                                                            </select>
{{--                                                            <input type="text" name="fname" id="fname" class="form-control" required>--}}
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
