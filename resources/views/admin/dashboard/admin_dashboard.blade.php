@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
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
    <style>
        /* #plotarea
{
    max-width: none;
    height: 400px;
}
#pie 
{
    max-width: none;
    height: 400px;
}
#barmonth 
{
    max-width: none;
    height: 400px;
}
#baryear 
{
    max-width: none;
    height: 400px;
} */
    </style>
@stop
@section('content')

    <!-- <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header> -->
    <div class="outer">
        <div class="inner bg-container">

            <h3 class="effects_heading_top_align">Weekly summary report</h3>

            <div class="row">
                <div class="col-lg-3 col-12 m-t-25 md_align_section">
                    <div class="card">
                        <div class="card-header bg-white">
                            Location 1
                        </div>
                        <div class="card-body p-0">
                            <div class="task-item">

                                Danger
                                <span class="float-right text-muted progress-info">3%</span>
                                <div id="progress-bar">
                                    <!--<progress class="progress progress-danger" value="52"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 3%" aria-valuenow="3" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Worning
                                <span class="float-right text-muted progress-primary">4%</span>
                                <div id="progress-bar1">
                                    <!--<progress class="progress progress-warning" value="80"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 4%" aria-valuenow="4" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Confortable
                                <span class="float-right text-muted progress-warning">85%</span>
                                <div id="progress-bar21">
                                    <!--<progress class="progress progress-success" value="25"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress" id="progress-bar2">
                                        <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Ok
                                <span class="float-right text-muted progress-primary">8%</span>
                                <div id="progress-bar5">
                                    <!--<progress class="progress progress-primary" value="93" max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 m-t-25 md_align_section">
                    <div class="card">
                        <div class="card-header bg-white">
                            Location 2
                        </div>
                        <div class="card-body p-0">
                            <div class="task-item">

                                Danger
                                <span class="float-right text-muted progress-info">6%</span>
                                <div id="progress-bar">
                                    <!--<progress class="progress progress-danger" value="52"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 6%" aria-valuenow="6" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Worning
                                <span class="float-right text-muted progress-primary">12%</span>
                                <div id="progress-bar1">
                                    <!--<progress class="progress progress-warning" value="80"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Confortable
                                <span class="float-right text-muted progress-warning">72%</span>
                                <div id="progress-bar21">
                                    <!--<progress class="progress progress-success" value="25"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress" id="progress-bar2">
                                        <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 72%" aria-valuenow="872" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Ok
                                <span class="float-right text-muted progress-primary">10%</span>
                                <div id="progress-bar5">
                                    <!--<progress class="progress progress-primary" value="93" max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 8%" aria-valuenow="10" aria-valuemin="10"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 m-t-25 md_align_section">
                    <div class="card">
                        <div class="card-header bg-white">
                            Location 3
                        </div>
                        <div class="card-body p-0">
                            <div class="task-item">

                                Danger
                                <span class="float-right text-muted progress-info">3%</span>
                                <div id="progress-bar">
                                    <!--<progress class="progress progress-danger" value="52"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 3%" aria-valuenow="3" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Worning
                                <span class="float-right text-muted progress-primary">4%</span>
                                <div id="progress-bar1">
                                    <!--<progress class="progress progress-warning" value="80"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 4%" aria-valuenow="4" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Confortable
                                <span class="float-right text-muted progress-warning">85%</span>
                                <div id="progress-bar21">
                                    <!--<progress class="progress progress-success" value="25"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress" id="progress-bar2">
                                        <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Ok
                                <span class="float-right text-muted progress-primary">8%</span>
                                <div id="progress-bar5">
                                    <!--<progress class="progress progress-primary" value="93" max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 m-t-25 md_align_section">
                    <div class="card">
                        <div class="card-header bg-white">
                            Location 4
                        </div>
                        <div class="card-body p-0">
                            <div class="task-item">

                                Danger
                                <span class="float-right text-muted progress-info">3%</span>
                                <div id="progress-bar">
                                    <!--<progress class="progress progress-danger" value="52"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 3%" aria-valuenow="3" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Worning
                                <span class="float-right text-muted progress-primary">4%</span>
                                <div id="progress-bar1">
                                    <!--<progress class="progress progress-warning" value="80"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 4%" aria-valuenow="4" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Confortable
                                <span class="float-right text-muted progress-warning">85%</span>
                                <div id="progress-bar21">
                                    <!--<progress class="progress progress-success" value="25"-->
                                    <!--max="100"></progress>-->
                                    <div class="progress" id="progress-bar2">
                                        <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-item">
                                Ok
                                <span class="float-right text-muted progress-primary">8%</span>
                                <div id="progress-bar5">
                                    <!--<progress class="progress progress-primary" value="93" max="100"></progress>-->
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="effects_heading_top_align mt-5">Daily summary report</h3>
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="bg-success m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date">19 March 2026 <br> Thursday</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right ">23:21:42</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="bg-primary m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date">19 March 2026 <br> Thursday</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right ">23:21:42</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="bg-warning m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date">19 March 2026 <br> Thursday</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right ">23:21:42</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="bg-danger m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date">19 March 2026 <br> Thursday</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right ">23:21:42</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            
            <h3 class="effects_heading_top_align mt-5">Weather Forcasr</h3>

            <div class="row">

                    <div class="col-12 stat_align">
                                        <div class="card weather_section md_align_section">
                                            <div class="card-body">
                                                <div class="row margin_align">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="icon sun-shower">
                                                                    <div class="cloud"></div>
                                                                    <div class="sun">
                                                                        <div class="rays"></div>
                                                                    </div>
                                                                    <div class="rain"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="weather-value">
            <span class=" text-white"><span class="degree">25&deg;</span>
            </span>
                                                                </div>
                                                                <div class="weather_location">
                                                                    <span class="text-white"><i class="fa fa-map-marker"></i> London</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row weekly_report">
                                                            <div class="col-3">
                                                                <span>Mon</span>
                                                                <br/>
                                                                <img src="img/w1.png" alt="weather">
                                                                <p>27&deg;</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <span>Tue</span>
                                                                <br/>
                                                                <img src="img/w2.png" alt="weather">
                                                                <p>23&deg;</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <span>Wed</span>
                                                                <br/>
                                                                <img src="img/w3.png" alt="weather">
                                                                <p>19&deg;</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <span>Thu</span>
                                                                <br/>
                                                                <img src="img/w4.png" alt="weather">
                                                                <p>38&deg;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                



            <!-- <div class="row" style="">
                <div class="col-lg-10">
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            <label for="name3" class="col-form-label">Date Range</label>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group input-group-prepend">
                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" id="reportrange" name="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy" onchange="generateReport();">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group radio_basic_swithes_padbott">
                        Privacy <input class="make-switch-radio" type="checkbox" id="privacyStatus" name="privacy_tatus" data-id="privacyStatus" data-on-color="success" data-off-color="danger">
                    </div>
                </div>
            </div> -->

            <!-- <div class="row" style="margin-bottom: 30px;">
                <div class="col-lg-12">
                    <div id="Reportvalues" class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-3 col-12">
                            <div class="bg-primary top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-lg-3 col-3 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm" style="font-size: 20px; padding: 0;">
                                            <i class="fa fa-circle fa-stack-2x" style="top: 20%;"></i>
                                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover" style="top: 20%;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-9 icon_padd_right" style="padding-right: 10px !important;">
                                        <div class="float-right cards_content" style="padding: 0;">
                                            <span class="number_val" id="sales_count" style="font-size: 20px;">123</span>
                                            <br>
                                            <span class="card_description" style="font-size: 15px;">Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="bg-success top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-lg-3  col-3 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm" style="font-size: 20px; padding: 0;">
                                            <i class="fa fa-circle fa-stack-2x" style="top: 20%;"></i>
                                            <i class="fa  fa-credit-card fa-stack-1x fa-inverse text-success visit_icon" style="top: 20%;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-9 icon_padd_right" style="padding-right: 10px !important;">
                                        <div class="float-right cards_content" style="padding: 0;">
                                            <span class="number_val" id="paid_count" style="font-size: 20px;">123</span>
                                            <br>
                                            <span class="card_description" style="font-size: 15px;">Paid</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="bg-warning top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-lg-3 col-3 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm" style="font-size: 20px; padding: 0;">
                                            <i class="fa fa-circle fa-stack-2x" style="top: 20%;"></i>
                                            <i class="fa fa-suitcase fa-stack-1x fa-inverse text-warning revenue_icon" style="top: 20%;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-9 icon_padd_right" style="padding-right: 10px !important;">
                                        <div class="float-right cards_content" style="padding: 0;">
                                            <span class="number_val" id="due_count" style="font-size: 20px;">1213</span>
                                            <br>
                                            <span class="card_description" style="font-size: 15px;">Due</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="bg-danger top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-lg-3 col-3 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm" style="font-size: 20px; padding: 0;">
                                            <i class="fa fa-circle fa-stack-2x" style="top: 20%;"></i>
                                            <i class="fa  fa-briefcase fa-stack-1x fa-inverse text-danger sales_hover" style="top: 20%;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-9 icon_padd_right" style="padding-right: 10px !important;">
                                        <div class="float-right cards_content" style="padding: 0;">
                                            <span class="number_val" id="chq_in_count" style="font-size: 20px;">323</span>
                                            <br>
                                            <span class="card_description" style="font-size: 15px;">Chequees In</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
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
    <script type="text/javascript">
        // $(document).ready(function () {
        //     $('.make-switch-radio').bootstrapSwitch({
        //         onText: $(this).data('onText'),
        //         offText: $(this).data('offText'),
        //         onColor: $(this).data('onColor'),
        //         offColor: $(this).data('offColor'),
        //         size: $(this).data('size'),
        //         labelText: $(this).data('labelText'),
        //         onSwitchChange: function (event, state){
        //             if(state != false){
        //                 $("#Reportvalues").hide();
        //             }else{
        //                 $("#Reportvalues").show();
        //             }
        //         }
        //     });
            
        //     function cb(start, end) {
        //         console.log(start, end);
        //         // $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //     }
            
        //     cb(moment().subtract(29, 'days'), moment());

        //     $('#reportrange').daterangepicker({
        //         startDate: moment().startOf('month'),
        //         endDate: moment().endOf('month'),
        //         ranges: {
        //             'Today': [moment(), moment()],
        //             'Yesterday': [moment().subtract(1, 'days'), moment()],
        //             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        //             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //             'This Month': [moment().startOf('month'), moment().endOf('month')],
        //             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //         }
        //     }, cb);
        // })

        // var config = `
        // function selectDate(date) {
        //     $('#calendar-wrapper').updateCalendarOptions({
        //         date: date
        //     });
        //     console.log(calendar.getSelectedDate());
        // }

        // var defaultConfig = {
        //     weekDayLength: 1,
        //     date: new Date(),
        //     onClickDate: selectDate,
        //     showYearDropdown: true,
        //     startOnMonday: true,
        // };

        // var calendar = $('#calendar-wrapper').calendar(defaultConfig);
        // console.log(calendar.getSelectedDate());
        // `;

        // eval(config);
        // const flask = new CodeFlask('#editor', { 
        //     language: 'js', 
        //     lineNumbers: true 
        // });
        // flask.updateCode(config);
        // flask.onUpdate((code) => {
        //     try {
        //         eval(code);
        //     } catch(e) {

        //     }
        // });

        // function generateReport(){
        //     var reportrange = $("#reportrange").val();
        //     if(reportrange != ''){
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });

        //         $.ajax({
        //             url: baseURL+'generate-report-by-date-range',
        //             type: "POST",
        //             data: {
        //             'reportrange':reportrange
        //             },
        //             success: function(data){
        //                 $("#sales_count").html(Number(data.totalSaleInDateRange).toFixed(2));
        //                 $("#paid_count").html(Number(data.totalPurchaseInDateRange).toFixed(2));
        //                 $("#due_count").html(Number(data.totalSaleInDateRange - data.totalPurchaseInDateRange).toFixed(2));
        //                 $("#chq_in_count").html(Number(data.chq_in).toFixed(2));


        //             },
        //             error: function(err) {
                        
        //             }
        //         });
        //     }
        // }
    </script>
@stop
