{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    mycode--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <title>Smart Bin | login</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta content="width=device-width, initial-scale=1.0" name="viewport" />--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
{{--    <!--     Fonts and icons     -->--}}
{{--    <link rel="stylesheet" type="text/css"--}}
{{--          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />--}}
{{--    <link rel="stylesheet" href="{{asset('assets\fa-5.12.1\css\all.css')}}">--}}
{{--    <!-- My customs -->--}}
{{--    <link href="{{asset('assets/for_proj\css\mains.css')}}" rel="stylesheet" />--}}
{{--    <!-- Material Kit CSS -->--}}
{{--    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />--}}
{{--</head>--}}

{{--<body class="login-page sidebar-collapse">--}}
@extends('auth.app')
@section('content')
{{--    <nav class="navbar navbar-transparent">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-header">--}}
{{--            <a class="navbar-brand" href="{{url('/zuba')}}"><i class="fas fa-dumpster"></i> Zuba</a>--}}
{{--        </div>--}}
{{--        <div class="collapse navbar-collapse">--}}
{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <li class=" active ">--}}
{{--                    <a href="lock.html">--}}
{{--                        <i class="material-icons">lock_open</i>--}}
{{--                        Lock--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<div class="container">
    <style>
        body {
            background:url("{{ asset('assets/for_proj/img/lock-back.jpg')}}")  no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .row {
            margin-top: 10%;
        }

        .row i {
            background-color: transparent;
        }

        .user {
            font-size: 2rem;
            margin: 10px 0px 30px 0px;
        }
    </style>
    <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{route('login')}}">
                @csrf
                <div class="card card-profile">
                    <div class="card-avatar">
                        <i class="fas fa-user-circle fa-9x"></i>
                    </div>

                    <div class="card-body">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                            </div>
                            <input  type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror "  placeholder="{{__('Enter your Email')}} " value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                            </div>
                            <input id="password" name="password" type="password" class="form-control  @error('password') is-invalid @enderror " placeholder="{{ __('Password') }}" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="footer ">
                        <a href="" class="btn btn-primary btn-link btn-wd btn-lg text-center">
                            <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-right "></i>
                                {{ __('Login') }}
                            </button>
                        </a>

                    </div>
                </div>
            </form>
            <a href="{{route('register')}}" class="btn btn-primary btn-link btn-wd btn-lg text-center">
                <button class="btn btn-primary text-center" type="submit"><i class="fas fa-arrow-right "></i>
                    {{ __('Register') }}
                </button>
            </a>

        </div>
    </div>
</div>
    @endsection
{{--</body>--}}

{{--</html>--}}




{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
