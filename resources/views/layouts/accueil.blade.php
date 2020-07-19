<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/ico"/>
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    @yield('header')

    <!-- Custom Theme Style -->
    <link href=" {{asset('build/css/custom.min.css')}} " rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('home')}}" class="site_title"><i class="fa fa-hard-of-hearing"></i> <span>DPM</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                @guest
                    <ul class="nav side-menu">
                        <li>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('login') }}/#signup">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </ul>
                @else
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
            @endguest
            <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Dashboard2</a></li>
                                    <li><a href="#">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span
                                            class="fa fa-chevron-down"></span></a>
                            </li>
                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li class="">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="nav-link" href="{{ route('login') }}/#signup">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    <li>
                                        <a href="javascript:void(0) ">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:void(0)">Help</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

        @yield('content')
        {{--<footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>--}}
        <!-- /footer content -->
        </div>
    </div>
</div>

<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>
@yield('script')

</body>
</html>
