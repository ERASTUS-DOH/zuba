@extends('layout.zuba')
@section('content')
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


{{--##############################################################--}}

<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        <div class="row justify-content-start">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <button class="btn btn-block btn-success" onclick="" data-toggle="modal"
                        data-target="#exampleModal">
                    <i class="fas fa-plus"></i> Add New Bin
                </button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <button class="btn btn-block btn-dark" onclick="">
                    <i class="fas fa-minus"></i> Some Button
                </button>
            </div>
        </div>


        <!-- Modal.Add -->
        <div class="modal fade pt-5" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class=" modal-dialog" role="document">
                <div class="modal-content card" style="background-color: #f3f3f3;">
                    <div class="modal-header card-header card-header-da nger theme-gradient">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Bin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" method="GET">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Phone Number</label>
                                            <input type="tel" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Location</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bin Serial Number</label>
                                            <input type="text" class="form-control" required>
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

        <!-- Modal.Delete -->
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

                    <form action="" method="GET">
                        <div class="modal-body" style="margin-bottom: 0px !important;">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <p class="">Are you sure you want to delete this user?</p>
                                </div>
                                <div class="row justify-content-center">
                                    <h5 class="bold">Something LastName</h5>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-center p-0">
                            <div class="row">
                                <div class="col-md-5">
                                    <button type="button" class="btn btn-danger"><i
                                            class="fas fa-times-circle"></i> No</button>
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
    </div>
</div>



{{--##############################################################--}}

        <div class="content">
            <div class="container-fluid">
                <!-- your content here -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-info">
                                <h4 class="card-title mt-0"> List of bins deployed</h4>
                                <p class="card-category"> Pick a bin to view more information</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="">
                                        <th>
                                            <!-- Nothing goes here -->
                                        </th>
                                        <th>
                                            Serial Number
                                        </th>
                                        <th>
                                            Region
                                        </th>
                                        <th>
                                            City
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                        </thead>
                                        <tbody>
                                        <!-- ------------------------------------------------------------------------ -->

                                        @foreach($bins as $bin)

                                        <tr>
                                            <td>
                                                <i class="fas fa-exclamation-circle error"></i>
                                            </td>
                                            <td>
                                                {{$bin->serialNumber}}
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Kotokoraba
                                            </td>
                                            <td>
                                                <a href="/bins/{{$bin->id}}">
                                                    <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                            onclick="window.location.href='url()';">
                                                        <i class="fas fa-lg fa-arrow-right"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!-- ------------------------------------------------------------------------ -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <footer class="footer">--}}
{{--            <div class="container-fluid">--}}
{{--                <nav class="float-left">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                IoT Technologies--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--                <div class="copyright float-right">--}}
{{--                    &copy;--}}
{{--                    <script>--}}
{{--                        document.write(new Date().getFullYear())--}}
{{--                    </script>, IoT Technologies--}}
{{--                </div>--}}
{{--                <!-- your footer here -->--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--    </div>--}}
@endsection()
