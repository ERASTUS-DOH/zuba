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
    <a href="{{route('Owners')}}" class="btn btn-link text-center pl-4">
        <button class="btn btn-success text-center" type="button"><i class="fas fa-arrow-left "></i>
            {{ __('Back') }}
        </button>
    </a>

    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> Register A new Bin Owner</h4>
                            <p class="card-category"> Fill the form below and click SAVE to submit your input</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <form action="{{route('createOwner')}}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            {{--                                                <label for="title" class="bmd-label-floating">Title</label>--}}
                                                            <select name="title" id="title" class="form-control" required>
                                                                <option selected >Select Your Title</option>
                                                                <option class="form-control" value="Mr">Mr.</option>
                                                                <option class="form-control"value="Mrs">Mrs.</option>
                                                                <option class="form-control" value="Ms">Ms.</option>
                                                                <option class="form-control"value="Miss">Miss.</option>
                                                                <option class="form-control" value="Dr">Dr.</option>
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
                                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
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
