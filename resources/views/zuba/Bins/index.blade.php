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
                                        <tr>
                                            <td>
                                                <i class="fas fa-exclamation-circle error"></i>
                                            </td>
                                            <td>
                                                GHR-2343-A
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Kotokoraba
                                            </td>
                                            <td>
                                                <a href="/bins/{{15}}">
                                                    <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                            onclick="window.location.href='url()';">
                                                        <i class="fas fa-lg fa-arrow-right"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-check-circle success"></i>
                                            </td>
                                            <td>
                                                GHR-9375-J
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-check-circle success"></i>
                                            </td>
                                            <td>
                                                GHR-5321-S
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-exclamation-circle error"></i>
                                            </td>
                                            <td>
                                                GHR-9375-T
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-exclamation-circle error"></i>
                                            </td>
                                            <td>
                                                GHR-5321-X
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-check-circle success"></i>
                                            </td>
                                            <td>
                                                GHR-9375-D
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- ------------------------------------------------------------------------ -->
                                        <tr>
                                            <td>
                                                <i class="fas fa-check-circle success"></i>
                                            </td>
                                            <td>
                                                GHR-5321-U
                                            </td>
                                            <td>
                                                Central
                                            </td>
                                            <td>
                                                Abura
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='bin.html';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </td>
                                        </tr>
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
