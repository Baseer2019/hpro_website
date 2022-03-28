<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.ico')}}"> --}}
    <title>HPRO-Health Protection And Research Organization</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="" class="logo">
                    <img src="{{ asset('backend/assets/img/logo.png') }}" width="35" height="35" alt="">
                    <span>HPRO</span>
                </a>
            </div>
 <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('backend/assets/img/user/'.Auth::user()->profile_photo_path)}}" width="24"
                                alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>{{ Auth::user()->first_name }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('user.show', Auth::user()->id) }}">My Profile</a>
                        {{-- <!-- <a class="dropdown-item" href="{{route('logout')}}">Logout</a> --> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                             this.closest('form').submit();">Log Out</a>
                        </form>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('user.show', Auth::user()->id) }}">My Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                         this.closest('form').submit();">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="">
                            <a href="{{ url('Admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}"><i class="fa fa-user-md"></i> <span>Staffs</span></a>
                        </li>
                        <li>
                            <a href="{{ route('donor.index') }}"><i class="fa fa-user"></i>
                                <span>Donors</span></a>
                        </li>
                        <li>
                            <a href="{{ route('project.index') }}"><i class="fa fa-file"></i>
                                <span>Projects</span></a>
                        </li>
                        <li>
                            <a href="{{ route('positions.index') }}"><i class="fa fa-user"></i>
                                <span>Positions</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content">
                @if (session('message'))
                <div class="row">
                    <div class="col-md-12 alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss='alert'>x</button>
                        <strong>{{ session('message') }}!</strong>
                    </div>
                </div>
                @endif
                @yield('content')
            </div>
        </div>


    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>
</html>
