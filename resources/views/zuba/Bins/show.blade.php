@extends('layout.zuba')
@section('content')
    <div class="content-fluid">
        <a href="{{route('bins')}}">
            <button class="btn btn-success text-center" ><i class="fas fa-arrow-left "></i>
                {{ __('Back') }}
            </button>
        </a>

    {{--start of delete modal--}}

    <div class="modal fade pt-5" id="deleteModal" tabindex="-1" role="dialog"
         aria-labelledby="" aria-hidden="true">
        <div class=" modal-dialog" role="document">
            <div class="modal-content card" style="background-color: #f3f3f3;">
                <div class="modal-header card-header card-header-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Bin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/bins/delete/{{$bin->id}}" method="delete">
                    @method('delete')
                    @csrf
                    <div class="modal-body" style="margin-bottom: 0px !important;">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <p class="">Are you sure you want to delete this bin ?</p>
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

    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <div class="topCaption">
                                <h4 class="card-title mt-0"> Serial Number: GHR-2343-A</h4>
                                <p class="topCaption ">  Owned-By : Mr Erastus</p>
                            </div>
{{--                            <h4 class="card-title mt-0"> Serial Number: GHR-2343-A</h4>--}}
                            <p class="card-category"> Location: Kotokoraba, Cape Coast</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <th>
                                        Component
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            GPS
                                        </td>
                                        <td>
                                            <a href=""><i class="fas fa-check-circle success"></i></a>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            Ultrasonic
                                        </td>
                                        <td>
                                            <a href=""><i class="fas fa-exclamation-circle error"></i></a>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            Camera
                                        </td>
                                        <td>
                                            <a href=""><i class="fas fa-exclamation-circle error"></i></a>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            GPS
                                        </td>
                                        <td>
                                            <a href=""><i class="fas fa-check-circle success"></i></a>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-trans">
                        <div class="card bin-shell">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a href="/bins/{{15}}/edit" class="btn  btn-link btn-wd g text-center">
                        <button class="btn btn-primary text-center" type="submit"><i class="fas fa-pen-square "></i>
                            {{ __('edit') }}
                        </button>
                    </a>
                </div>
                <div class="col-md-3">

                        <button class="btn btn-danger btn-link btn-wd g text-center"  data-original-title="Delete Bin"
                                data-toggle="modal" data-target="#deleteModal"
                                style="width: 35px;">
                            <i class="fas fa-times ">

                            </i>
                            {{ __('delete') }}
                        </button>

                    <button class="btn  text-center" type="submit"><i class="fas fa-times"></i>
                        {{ __('cancel') }}
                    </button>

                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
