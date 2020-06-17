@extends('layout.zuba')
@section('content')
    <a href="{{route('bins')}}" class="btn btn-success btn-link btn-wd btn-lg text-center">
        <button class="btn  text-center" type="submit"><i class="fas fa-arrow-left "></i>
            {{ __('Back') }}
        </button>
    </a>
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <div class="row topCaption">
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
                    <a href="/bins/{{15}}/edit" class="btn btn-primary btn-link btn-wd btn-lg text-center">
                        <button class="btn  text-center" type="submit"><i class="fas fa-pen-square "></i>
                            {{ __('edit') }}
                        </button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('bins')}}" class="btn btn- btn-link btn-wd btn-lg text-center">
                        <button class="btn  text-center" type="submit"><i class="fas fa-arrow-right "></i>
                            {{ __('delete') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
