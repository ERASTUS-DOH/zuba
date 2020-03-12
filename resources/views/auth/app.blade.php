<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart Bin | login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('assets\fa-5.12.1\css\all.css')}}">
    <!-- My customs -->
    <link href="{{asset('assets/for_proj\css\mains.css')}}" rel="stylesheet" />
    <!-- Material Kit CSS -->
    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
<nav class="navbar navbar-transparent">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/zuba')}}"><i class="fas fa-dumpster"></i> Zuba</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class=" active ">
                    <a href="lock.html">
                        <i class="material-icons">lock_open</i>
                        Lock
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
</div>
</body>
@yield('content')

</html>
