@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->

                <div class="col-md-9  col-lg-6 m-auto">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <div class="">
                            <h4 class="card-title m-auto "> Assign the selected bin to an owner</h4>
                            <p class="card-category"> Kindly select an owner from the list below.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <form action="{{route('saveAssignation')}}" method="POST">
                                            @csrf
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                            <div class="col-md-6 col-lg-12">
                                                                <div class="form-group bmd-form-group">

                                                                    <select name="owner_id" id="owner_id" class="form-control" required>
                                                                        <option selected >Click here to select the Bin Owner</option>
                                                                        @foreach($owners as $owner)
                                                                            <option class="form-control"  value="{{ $owner->id }}">{{$owner->fname.' '.$owner->lname}}</option>
                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer m-auto w-25 border-top-0">
                                                    <input type="hidden" name="bin_id" value="{{$bin_id}}"/>
                                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                                        Save
                                                    </button>

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
