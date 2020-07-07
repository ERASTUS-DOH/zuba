@extends('layout.zuba')
@section('content')
    <a href="/tricycles" class="btn btn-link">
        <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-left "></i>
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
                            <div class="topCaption">
                                <h4 class="card-title mt-0"> Registeration Number: GHR-2343-A</h4>
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
                                        Column
                                    </th>
                                    <th>
                                        Value
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Registeration Number
                                        </td>
                                        <td>
                                            {{$cycle->regNumber}}
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            Colour
                                        </td>
                                        <td>
                                            {{$cycle->colour}}
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            Brand
                                        </td>
                                        <td>
                                            {{$cycle->brand}}
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                           Maximum Capacity
                                        </td>
                                        <td>
                                            {{$cycle->max_capacity}}
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            Owner
                                        </td>
                                        <td>

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
                    <a href="/tricycles/{{$cycle->id}}/edit" class="btn  btn-link btn-wd ">
                        <button class="btn  text-center c" type="submit"><i class="fas fa-pen-square "></i>
                            {{ __('edit') }}
                        </button>
                    </a>
                </div>
{{--                <div class="col-md-3">--}}
{{--                    <a href="{{route('bins')}}" class="btn btn-link btn-wd  text-center">--}}
{{--                        <button class="btn btn-danger text-center" type="submit"><i class="fas fa-arrow-right "></i>--}}
{{--                            {{ __('delete') }}--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
