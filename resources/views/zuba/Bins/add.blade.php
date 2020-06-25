

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
<a href="{{route('bins')}}" class="btn btn-link text-center pl-4">
    <button class="btn btn-success text-center" type="button"><i class="fas fa-arrow-left "></i>
        {{ __('Back') }}
    </button>
</a>

    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="mx-auto col-md-9">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> Register A new Bin</h4>
                            <p class="card-category"> Fill the form below and click SAVE to submit your input</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <form action="{{url('/bins/store')}}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="nickName" class="bmd-label-floating">Nick Name</label>
                                                            <input type="text" name="nickName" id="nickName" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="serialNumber" class="bmd-label-floating">Serial Number</label>
                                                            <input type="text" name="serialNumber" id="serialNumber" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="maxLevel" class="bmd-label-floating">Maximum Level</label>
                                                            <input type="number" min="" max="" name="maxLevel" id="maxLevel" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                             <label for="maxWeight" class="bmd-label-floating">Maximum Weight</label>
                                                                <input type="number" id="maxWeight" name="maxWeight" min="1" max="30" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <div class="form-group bmd-form-group">
                                                                <label for="nickName" class="bmd-label-floating">Smoke Notification</label>
                                                                <input type="text" name="smoke_noti" id="smoke_noti" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group bmd-form-group">
                                                                <label for="serialNumber" class="bmd-label-floating">Location ID</label>
                                                                <input type="text" name="locationID" id="locationID" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div/>
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group bmd-form-group">--}}
{{--                                                            <label class="bmd-label-floating">Max. Capacity (kg)</label>--}}
{{--                                                            <!-- Please adjust the min and max values based on the real deal -->--}}
{{--                                                            <input type="number" class="form-control" min="300" max="6000" multiple required>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
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
