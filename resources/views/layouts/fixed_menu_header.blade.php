<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Connect DMS') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/layouts.css')}}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>

    <link rel="stylesheet" href="{{asset('css/pages/widgets.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('vendors/c3/css/c3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/toastr/css/toastr.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/switchery/css/switchery.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/new_dashboard.css')}}"/> -->

    <!-- @livewireStyles -->

    <!-- end of global styles-->
    <style>
        .active-link a{
            background-color:#8084ff !important;
        }
    </style>
    @yield('header_styles')
</head>

<body class="fixedMenu_header fixed_header">
<?php
                    //dd(Auth::user());
                    ?>
<!--</div>-->
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="" id="wrap">
    <div id="top" class="fixed">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index">
                    <h4 class="text-white"> GreenHouse</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <!-- <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="badge badge-warning">1</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">You have 1 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="badge badge-danger">1</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-header">You have 1 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Meeting</strong> With Sales Manager
                                                <br>
                                                <small class="primary_txt">10.30 AM</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn text-white" data-toggle="dropdown">
                                <img src="<?php echo asset('img/admin.jpg'); ?>" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>{{Auth::user()->name}}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admire Admin</div>
                                <a class="dropdown-item" href="edit_user"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i> User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox"><i class="fa fa-envelope"></i>
                                    Inbox</a>
                                <a class="dropdown-item" href="lockscreen"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper fixedNav_top">
        <div id="left" class="fixed">
            <div class="menu_scroll left_scrolled">
                <div class="media user-media dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                 src="<?php echo asset('img/admin.jpg'); ?>">
                            <p class="text-white user-info">Welcome {{Auth::user()->name}}</p></a>

                        <!-- <div class="search_bar col-lg-12">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="search">
                                <span class="input-group-append">
                                <button class="btn without_border input-group-text border-left-0" type="button"><span class="fa fa-search">
                                </span></button>
                            </span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu" class="bg-blue dker">
                    <li class="{{isset($slug) && $slug == 'dashboard' ? 'active' : ''}}">
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Master Data
                                    <span class="fa arrow"></span>
                                </a>
                        <ul class="sub-menu sub-submenu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Customer
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Location
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp; Edge Divices
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Product
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Mesure Types
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Reports
                                    <span class="fa arrow"></span>
                                </a>
                        <ul class="sub-menu sub-submenu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Report 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Report 2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Report 3
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i> &nbsp;Report 4
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
        <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-sm-5 col-lg skin_txt">
                            @if (isset($sub_page))
                            <h4 class="nav_top_align">
                                <i class="fa fa-pencil"></i>
                                {{ $sub_page }}
                            </h4>
                            @endif
                        </div>
                        <div class="col-sm-7 col-lg">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                        Dashboard
                                    </a>
                                </li>
                                @if (isset($title) && $title != $sub_page)
                                <li class="breadcrumb-item">
                                    <a href="#">{{ $title }}</a>
                                </li>
                                @endif
                                @if (isset($sub_page) && $title != $sub_page)
                                <li class="active breadcrumb-item">
                                    {{ $sub_page }}
                                </li>
                                @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Content -->
            @include('admin.flash-message')
            @yield('content')
            <!-- Content end -->
        </div>


    </div>
    @include('layouts.right_sidebar')
    <!-- # right side -->
</div>

<!-- global scripts-->
<script>
    var baseURL = '{{env('BASE_URL')}}';
</script>

<script type="text/javascript" src="{{asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/fixed_menu.js')}}"></script>

<!-- <script src="{{asset('vendors/raphael/js/raphael.min.js')}}"></script>
<script src="{{asset('vendors/d3/js/d3.min.js')}}"></script>
<script src="{{asset('vendors/c3/js/c3.min.js')}}"></script>
<script src="{{asset('vendors/toastr/js/toastr.min.js')}}"></script>
<script src="{{asset('vendors/switchery/js/switchery.min.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('vendors/jquery_newsTicker/js/newsTicker.js')}}"></script>
<script src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script> -->

<!--end of plugin scripts-->
<!-- <script src="{{asset('js/pages/new_dashboard.js')}}"></script> -->

{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> --}}
<!-- end of global scripts-->

@livewireScripts

<!-- page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>
