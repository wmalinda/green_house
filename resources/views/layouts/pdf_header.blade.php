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
    @yield('header_styles')
</head>

<body style="background-color: #fff;">
<!--</div>-->

<div class="" id="wrap">
    <div class="wrapper fixedNav_top">
        <div id="content" class="bg-container" style="background-color: #fff;">
            @yield('content')
        </div>


    </div>
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
