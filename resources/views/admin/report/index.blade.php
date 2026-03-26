@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{asset('css/pages/tables.css')}}" />
    <!-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/sweet_alert.css')}}"/> -->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/index.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/Buttons/css/buttons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/buttons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/new_dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/flot_charts.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard_calender/dashboard_calender_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard_calender/dashboard_calender_theme.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/daterangepicker/css/daterangepicker.css')}}"/>
@stop
@section('content')
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="col-lg m-t-35">
                            <div class="card">
                                <div class="card-header bg-white text-black">
                                    Monthly Manufacturing summary(2025)
                                </div>
                                <div class="card-body m-t-35">
                                    <div id="basicFlotLegend" class="flotLegend"></div>
                                    <div id="line-chart" class="flotChart1"></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
<script src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/circliful/js/jquery.circliful.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.js')}}" ></script> -->
    <!-- <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script> -->
    <!--end of plugin scripts-->

    <!-- <script type="text/javascript" src="{{asset('js/pages/index.js')}}"></script> -->
    <!-- <script src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script> -->
    <script src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script src="{{asset('js/pages/sales_dashboard.js')}}"></script>
    <script src="{{asset('vendors/toastr/js/toastr.min.js')}}"></script>
<script src="{{asset('vendors/flotchart/js/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/dashboard_calender/calendar.min.js')}}"></script>
    <script src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
    <script src="{{asset('vendors/daterangepicker/js/daterangepicker.js')}}"></script>
    <script src="{{asset('vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/components.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/pages/flot_charts.js')}}"></script>
    <script src="{{asset('vendors/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('js/pages/chartist.js')}}"></script>
<!-- <script src="{{asset('js/components.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/pages/sweet_alerts.js')}}"></script> -->
    <script type="text/javascript">

    </script>
@stop
