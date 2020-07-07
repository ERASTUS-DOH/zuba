@extends('layout.zuba')
@section('content')


    {{--    @if (count($errors) > 0)--}}
    {{--        <div class="alert alert-danger col-lg-9 mx-auto">--}}
    {{--            <ul>--}}
    {{--                @foreach ($errors->all() as $error)--}}
    {{--                    <li>{{ $error }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}

    {{--    <div class="main-panel">--}}

    <!-- Navbar -->
    {{--        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <div class="navbar-wrapper">--}}
    {{--                    <a class="navbar-brand" href="..\..\index.html"><i class="fas fa-arrow-left"> </i> Bins</a>--}}
    {{--                </div>--}}
    {{--                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"--}}
    {{--                        aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                    <span class="sr-only">Toggle navigation</span>--}}
    {{--                    <span class="navbar-toggler-icon icon-bar"></span>--}}
    {{--                    <span class="navbar-toggler-icon icon-bar"></span>--}}
    {{--                    <span class="navbar-toggler-icon icon-bar"></span>--}}
    {{--                </button>--}}
    {{--                <div class="collapse navbar-collapse justify-content-end">--}}
    {{--                    <ul class="navbar-nav">--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="javascript:;">--}}
    {{--                                <i class="fas fa-lg fa-bell"></i> notifications--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link" href="javascript:;">--}}
    {{--                                <i class="fas fa-lg fa-sign-out-alt"></i> logout--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <!-- your navbar here -->--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </nav>--}}
    {{--        <!-- End Navbar -->--}}
    <a href="{{route('cycles')}}" class="btn btn-link text-center pl-4">
        <button class="btn btn-success text-center" type="button"><i class="fas fa-arrow-left "></i>
            {{ __('Back') }}
        </button>
    </a>

    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="card card-plain">
                        <div class="card-header card-header-info col-md-8">
                            <h4 class="card-title mt-0"> Register A Cycle</h4>
                            <p class="card-category"> Fill the form below and click SAVE to submit your input</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <form action="{{url('/tricycles/store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">

                                                <div class="row mb-4">
                                                    <div class="col-md-8">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="reg_number" class="bmd-label-floating">Registeration Number</label>
                                                            <input type="text" name="reg_number" id="reg_number" class="form-control" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-8">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="brand" class="bmd-label-floating">Brand</label>
                                                            <input type="text" name="brand" id="brand" class="form-control" required>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="color" class="bmd-label-floating">Color</label>
                                                            <input type="text" id="color" name="color" class="form-control" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="max_capacity" class="bmd-label-floating">Maximum Capacity</label>
                                                            <input type="number" id="max_capacity" name="max_capacity" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer  w-25 border-top-0">
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
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="">
                            IoT Technologies
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, IoT Technologies
            </div>
            <!-- your footer here -->
        </div>
    </footer>
    </div>
@endsection()

