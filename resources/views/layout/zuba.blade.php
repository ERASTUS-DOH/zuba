<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'SMART-BIN') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('assets\fa-5.12.1\css\all.css')}}">
    <!-- My customs -->
    <link href="{{ asset('assets/for_proj\css\mains.css') }}" rel="stylesheet" />
    <!-- Material Kit CSS -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
{{--    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />--}}
</head>

<body>
<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
        <!--
     Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
     Tip 2: you can also add an image using data-image tag
 -->
        <div class="logo">
            <a href="{{url('/home')}}" class="simple-text logo-normal">
                Zuba-Solutions
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item @if(route::is('home')){{'active'}}@endif">
                    <a class="nav-link" href="{{url('/home')}}">
                        <i class="fas fa-warehouse"></i>
                        <p>Dashboard</p>
{{--                        {{url()->current()}}--}}
{{--                        @php($location = url()->current();--}}
{{--                            $details = explode($location,'/');--}}
{{--                            echo $details;--}}

{{--            )--}}
{{--                        @endphp--}}
                    </a>
                </li>
                <li class="nav-item @if(route::is('bins')){{'active'}}@endif">
                    <a class="nav-link" href="{{url('/bins')}}">
                        <i class="fas fa-dumpster"></i>
                        <p>Bins</p>
                    </a>
                </li>
                <li class="nav-item @if(route::is('tricycles')){{'active'}}@endif">
                    <a class="nav-link" href="{{url('/tricycles')}}">
                        <i class="fas fa-truck"></i>
                        <p>Tricycles</p>
                    </a>
                </li>
                <li class="nav-item @if(route::is('binOwners')){{'active'}}@endif">
                    <a class="nav-link" href="{{url('/binOwners')}}">
                        <i class="fas fa-users"></i>
                        <p>Owners</p>
                    </a>
                </li>

                <li class="nav-item @if(route::is('riders')){{'active'}}@endif">
                    <a class="nav-link" href="{{url('/riders')}}">
                        <i class="fas fa-users"></i>
                        <p>Riders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="for_proj\pg\config.html">
                        <i class="fas fa-screwdriver"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                        <i class="fas fa-arrow-right"></i>
                        <p>{{ __('Log-Out') }}</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                <li class="nav-item active-pro ">
                    <a class="nav-link" href="www.iottech.com">
                        <i class="fas fa-globe"></i>
                        <p>IOT Technologies</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>
    <div class="main-panel">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="fas fa-lg fa-bell"></i> notifications
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-lg fa-user-circle"></i> username
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="theme dropdown-item" href="for_proj\pg\lock.html">Lock Screen</a>
                                <a class="theme dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="theme dropdown-item" href="index.html?logout=1">Log out</a>
                            </div>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="content">
            @include('layout.flash-message')
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="{{url('/zuba')}}">
                                Zuba-Waste Management
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Zuba-Solutions
                </div>
                <!-- your footer here -->
            </div>
        </footer>
    </div>
</div>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{asset('/assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
</body>

</html>
