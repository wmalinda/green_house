@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/index.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/Buttons/css/buttons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/buttons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/new_dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/flot_charts.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/index.css')}}">
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

            <div class="row" style="margin-bottom: 30px;">
                <div class="col-lg-10">
                    <div class="row" style="margin-bottom: 30px;">
                    <div class="col-lg-4">
                        <div class="bg-white section_border circliful_section">
                            <div class="tab-content text-center">
                                <div  class="tab-pane active" id="fa-icons">
                                    <h3 class="p-t-30">Sales</h3>
                                    <h2 class="p-t-30">{{number_format($dailySales, 2, '.', '') }}</h2>
                                </div>
                                <div class="tab-pane" id="themify-icons">
                                    <h3 class="p-t-30">Sales</h3>
                                    <h2 class="p-t-30">{{number_format($weeklySales, 2, '.', '') }}</h2>
                                </div>
                                <div class="tab-pane" id="ionicons">
                                    <h3 class="p-t-30">Sales</h3>
                                    <h2 class="p-t-30">{{number_format($monthlySales, 2, '.', '') }}</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs m-t-35 text-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#fa-icons" data-toggle="tab">
                                        <div><i class="fa fa-pie-chart"></i></div>
                                        <span>Daily</span>
                                    </a>
                                </li>
                                <li class="nav-item" id="themify_icon">
                                    <a class="nav-link" href="#themify-icons" data-toggle="tab">
                                        <div><i class="fa fa-check-square-o"></i></div>
                                        <span>Weekly</span>
                                    </a>
                                </li>

                                <li class="nav-item" id="ionicons_tab">
                                    <a class="nav-link" href="#ionicons" data-toggle="tab">
                                        <div><i class="fa fa-pencil"></i></div>
                                        <span>Monthly</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bg-white section_border circliful_section">
                            <div class="tab-content text-center">
                                <div  class="tab-pane active" id="fa-icons1">
                                <h3 class="p-t-30">Purchase</h3>
                                    <h2 class="p-t-30">{{number_format($dailyPurchase, 2, '.', '') }}</h2>
                                </div>
                                <div class="tab-pane" id="themify-icons2">
                                <h3 class="p-t-30">Purchase</h3>
                                    <h2 class="p-t-30">{{number_format($weeklyPurchase, 2, '.', '') }}</h2>
                                </div>
                                <div class="tab-pane" id="ionicons3">
                                <h3 class="p-t-30">Purchase</h3>
                                    <h2 class="p-t-30">{{number_format($monthlyPurchase, 2, '.', '') }}</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs m-t-35 text-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#fa-icons1" data-toggle="tab">
                                        <div><i class="fa fa-pie-chart"></i></div>
                                        <span>Daily</span>
                                    </a>
                                </li>
                                <li class="nav-item" id="themify_icon">
                                    <a class="nav-link" href="#themify-icons2" data-toggle="tab">
                                        <div><i class="fa fa-check-square-o"></i></div>
                                        <span>Weekly</span>
                                    </a>
                                </li>

                                <li class="nav-item" id="ionicons_tab">
                                    <a class="nav-link" href="#ionicons3" data-toggle="tab">
                                        <div><i class="fa fa-pencil"></i></div>
                                        <span>Monthly</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bg-white section_border circliful_section">
                            <div class="tab-content text-center">
                                <div  class="tab-pane active" id="fa-icons4">
                                    <h3 class="p-t-30">Return</h3>
                                    <h4 class="p-t-10">Purchase - {{number_format($dailyPurchaseReturn, 2, '.', '') }}</h4>
                                    <h4 class="p-t-10">Sales - {{number_format($dailySalesReturn, 2, '.', '') }}</h4>
                                </div>
                                <div class="tab-pane" id="themify-icons5">
                                    <h3 class="p-t-30">Return</h3>
                                    <h4 class="p-t-10">Purchase - {{number_format($weeklyPurchaseReturn, 2, '.', '') }}</h4>
                                    <h4 class="p-t-10">Sales - {{number_format($weeklySalesReturn, 2, '.', '') }}</h4>
                                </div>
                                <div class="tab-pane" id="ionicons6">
                                    <h3 class="p-t-30">Return</h3>
                                    <h4 class="p-t-10">Purchase - {{number_format($monthlyPurchaseReturn, 2, '.', '') }}</h4>
                                    <h4 class="p-t-10">Sales - {{number_format($monthlySalesReturn, 2, '.', '') }}</h4>
                                </div>
                            </div>
                            <ul class="nav nav-tabs m-t-35 text-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#fa-icons4" data-toggle="tab">
                                        <div><i class="fa fa-pie-chart"></i></div>
                                        <span>Daily</span>
                                    </a>
                                </li>
                                <li class="nav-item" id="themify_icon">
                                    <a class="nav-link" href="#themify-icons5" data-toggle="tab">
                                        <div><i class="fa fa-check-square-o"></i></div>
                                        <span>Weekly</span>
                                    </a>
                                </li>

                                <li class="nav-item" id="ionicons_tab">
                                    <a class="nav-link" href="#ionicons6" data-toggle="tab">
                                        <div><i class="fa fa-pencil"></i></div>
                                        <span>Monthly</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 button_section_alignlist-group social_dashboard_margin_top">
                <div class="list-group social_dashboard_margin_top">
                                                       <div class="row">

                                                           <div class="col-md-12 text-white">
                                                               <a class="btn btn-block btn-social btn-bitbucket">
                                                                    <i class="fa fa-pencil"></i>
                                                                   PO
                                                               </a>
                                                               <a class="btn btn-block btn-social btn-dropbox">
                                                               <i class="fa fa-pencil"></i>
                                                                   GRN
                                                               </a>
                                                               <a class="btn btn-block btn-social btn-facebook">
                                                               <i class="fa fa-pencil"></i>
                                                                   Invoice
                                                               </a>
                                                               <a class="btn btn-block btn-social btn-flickr">
                                                               <i class="fa fa-pencil"></i>
                                                                   Payment Receipt
                                                               </a>
                                                               <a class="btn btn-block btn-social btn-github">
                                                               <i class="fa fa-pencil"></i>
                                                                   Payment Voucher
                                                               </a>
                                                               <a class="btn btn-block btn-social btn-google-plus">
                                                               <i class="fa fa-pencil"></i>
                                                                   Sales Return
                                                               </a>
                                                           </div>
                                                           
                                                       </div>
                                                   </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 30px;">
                

                <div class="col-lg-4">
                    <div class="card real_charts">
                        <div class="card-header bg-white">
                            <h4 style="padding: 15px 10px 10px 15px;">Town Wise Sales</h4>
                        </div>
                        <div class="card-body">
                            <div class="tab-content m-t-20">
                                <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
                                    <div id="donut" class="centered"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sales_section">
                                    <div id="donutxx" class="centered"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="users_section">
                                    <div id="donutxxx" class="centered"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Daily</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Monthly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4">
                    <div class="bg-white section_border circliful_section">
                        <div class="tab-content text-center">
                            <div  class="tab-pane active" id="aa">
                                <h3 class="p-t-30">Town Wise Sales</h3>
                                <div id="donut" class="centered"></div>
                            </div>
                            <div class="tab-pane" id="aaa">
                                <h3 class="p-t-30">Town Wise Sales</h3>
                                <div id="donut2" class="centered"></div>
                            </div>
                            <div class="tab-pane" id="aaaa">
                                <h3 class="p-t-30">Town Wise Sales</h3>
                                <div id="donut3" class="centered"></div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs m-t-35 text-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#aa" data-toggle="tab">
                                    <div><i class="fa fa-pie-chart"></i></div>
                                    <span>Daily</span>
                                </a>
                            </li>
                            <li class="nav-item" id="themify_icon">
                                <a class="nav-link" href="#aaa" data-toggle="tab">
                                    <div><i class="fa fa-check-square-o"></i></div>
                                    <span>Weekly</span>
                                </a>
                            </li>

                            <li class="nav-item" id="ionicons_tab">
                                <a class="nav-link" href="#aaaa" data-toggle="tab">
                                    <div><i class="fa fa-pencil"></i></div>
                                    <span>Monthly</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                        Supplier Purchases 
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend" class="flotLegend"></div>
                            <div id="line-chart" class="flotChart1"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" style="margin-bottom: 30px;">
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-white text-black">
                            Line Chart
                        </div>
                        <div class="card-body m-t-35">
                            <div id="basicFlotLegend" class="flotLegend"></div>
                            <div id="line-chart" class="flotChart1"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        




            














                    <!-- <div class="row sales_section">
                        <div class="col-xl col-sm-6 col-12">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-info"></span>
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">ORDERS</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="orders_countup">1,425</h1>
                                    <p class="sales_text">Total orders: 9,320
                                        <span class="pull-right"><i class="fa fa-caret-up text-mint font_18 m-r-5"></i>25.25%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl col-sm-6 col-12 media_max_573">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-danger"></span>
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">REVENUE</h5>
                                    <h1 class="sales_number m-t-15 text-right">$<span id="revenue_countup">600</span>
                                    </h1>
                                    <p class="sales_text">Total revenue: 8,250
                                        <span class="pull-right"><i class="fa fa-caret-down text-danger font_18 m-r-5"></i>20%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl col-sm-6 col-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-primary"></span>
                                    <i class="fa fa-cube"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">PRODUCTS</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="products_countup">2,100</h1>
                                    <p class="sales_text">Total products: 12,100
                                        <span class="pull-right"><i class="fa fa-caret-up text-primary font_18 m-r-5"></i>45%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl col-sm-6 col-12 media_max_1199">
                            <div class="card p-d-15">
                                <div class="sales_icons">
                                    <span class="bg-warning"></span>
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div>
                                    <h5 class="sales_orders text-right m-t-5">SOLD</h5>
                                    <h1 class="sales_number m-t-15 text-right" id="sold_countup">1,025</h1>
                                    <p class="sales_text">Total sold: 7,600
                                        <span class="pull-right"><i class="fa fa-caret-up text-warning font_18 m-r-5"></i>24.5%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->


            <!--top section widgets-->
            <!-- <div class="row widget_countup">
                <div class="col-12 col-sm-6 col-xl-3">

                    <div id="top_widget1">
                        <div class="front">
                            <div class="bg-primary p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="user_font">Users</div>
                                <div id="widget_countup1">3,250</div>
                                <div class="tag-white">
                                    <span id="percent_count1">85</span>%
                                </div>
                                <div class="previous_font">Yearly Users stats</div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5">
                                        <i class="fa fa-users text-primary"></i>
                                    </div>
                                    <div id="widget_countup12">3,250</div>
                                    <div>Users</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="visitsspark-chart" class="spark_line"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                    <div id="top_widget2">
                        <div class="front">
                            <div class="bg-success p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="user_font">Sales</div>
                                <div id="widget_countup2">1,140</div>
                                <div class="tag-white">
                                    <span id="percent_count2">60</span>%
                                </div>
                                <div class="previous_font">Sales per month</div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-success">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div id="widget_countup22">1,140</div>
                                    <div>Sales</div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="salesspark-chart" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                    <div id="top_widget3">
                        <div class="front">
                            <div class="bg-warning p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="user_font">Comments</div>
                                <div id="widget_countup3">85</div>
                                <div class="tag-white ">
                                    <span id="percent_count3">30</span>%
                                </div>
                                <div class="previous_font">Monthly comments</div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-warning">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div id="widget_countup32">85</div>
                                    <div>Comments</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="mousespeed" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                    <div id="top_widget4">
                        <div class="front">
                            <div class="bg-danger p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="user_font">Rating</div>
                                <div id="widget_countup4">8</div>
                                <div class="tag-white">
                                    <span id="percent_count4">80</span>%
                                </div>
                                <div class="previous_font">This month ratings </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white section_border b_r_5">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-danger">
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <div id="widget_countup42">8</div>
                                    <div>Rating</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="rating" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- <div class="row m-t-35">
                <div class="col-lg-8 col-12 m-t-25">
                    <div class="card">
                        <div class="card-header bg-white">
                            <span class="card-title">Analytics Overview</span>
                            <div class="dropdown chart_drop float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 m-t-35">
                    <div class="card">
                        <div class="card-header bg-white">
                        Sales Towns
                        </div>
                        <div class="card-body" style="padding-top: 10px;">
                            <ul class="Browser_stats_ul">
                                <li><span>Town 1</span><span class="float-right text-danger">32,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 2</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 3</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 4</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 5</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 6</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 7</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 8</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                                <li><span>Town 9</span><span class="float-right text-danger">50,000</span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> -->
            <!-- <div class="row">
                <div class="col-lg-3 m-t-35">
                    <div class="bg-white section_border circliful_section">
                        <div class="tab-content text-center">
                            <div  class="tab-pane active" id="fa-icons">
                                <h4 class="p-t-30">Design Progress</h4>
                                <div id="myStat"></div>
                            </div>
                            <div class="tab-pane" id="themify-icons">
                                <h4 class="p-t-30">Coding Progress</h4>
                                <div id="myStat2" ></div>
                            </div>
                            <div class="tab-pane" id="ionicons">
                                <h4 class="p-t-30">Doc's Progress</h4>
                                <div id="myStat3"></div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs m-t-35 text-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#fa-icons" data-toggle="tab">
                                    <div><i class="fa fa-pie-chart"></i></div>
                                    <span>Design</span>
                                </a>
                            </li>
                            <li class="nav-item" id="themify_icon">
                                <a class="nav-link" href="#themify-icons" data-toggle="tab">
                                    <div><i class="fa fa-check-square-o"></i></div>
                                    <span>Coding</span>
                                </a>
                            </li>

                            <li class="nav-item" id="ionicons_tab">
                                <a class="nav-link" href="#ionicons" data-toggle="tab">
                                    <div><i class="fa fa-pencil"></i></div>
                                    <span>Docs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card m-t-35 real_charts">
                        <div class="card-header bg-white">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Users</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="tab-content m-t-20">
                                <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
                                    <div id="order_realtime" class="flotChart1">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sales_section">
                                    <div id="sale_realtime" class="flotChart1">

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="users_section">
                                    <div id="users_realtime" class="flotChart1">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-lg-5 col-12 m-t-35">
                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <div class="lorem_background">
                                <div>
                                    <img src="{{asset('img/mailbox_imgs/2.jpg')}}" alt="lorem" class="img-fluid rounded-circle lorem_img">
                                </div>
                                <div class="text-white font_18">Stuart</div>
                                ********************************<div>stuart@gmail.com</div>
                                <div class="text-center lorem_bg m-b-0">
                                    <div class="row">
                                        <div class="col-3 lorem_font_icon">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                        <div class="col-3 lorem_font_icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <div class="col-3 lorem_font_icon">
                                            <i class="fa fa-google-plus"></i>
                                        </div>
                                        <div class="col-3">
                                            <i class="fa fa-instagram"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="list-group bg-white section_border">
                                <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                    <span class="badge badge-pill badge-primary float-right">224</span>
                                    <span class="p-l-10">Followers</span>
                                    <span class="float-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                </a>
                                <a href="#" class="lorem_group_item">
                                    <span class="badge badge-pill badge-primary float-right">14</span>
                                    <span class="p-l-10">Following</span>
                                    <span class="float-left">
                                                <i class="fa fa-users"></i>
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col m-t-35">
                            <div class="weather_img">
                                <div class="row header_align">
                                    <div class="col-sm-8 col-7 text-white info">
                                        <div class="city">City: Bangkok</div>
                                        <div class="night">Night - 21:17 PM</div>

                                        <div class="temp">4<sup>o</sup></div>
                                        <div class="wind">
                                            <span>28 km/h</span>
                                        </div>
                                    </div>
                                    <div class="icon col-5 col-sm-4">
                                        <img src="{{asset('img/weather1.png')}}" alt="weather" class="img-fluid">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="background_opacity">
                                            <div class="row header_align">
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Mon</div>
                                                        <div>
                                                            <img src="{{asset('img/w5.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">30<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Tue</div>
                                                        <div>
                                                            <img src="{{asset('img/w2.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">29<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Wed</div>
                                                        <div>
                                                            <img src="{{asset('img/w3.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">34<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Thu</div>
                                                        <div>
                                                            <img src="{{asset('img/w4.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">32<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 border_right days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Fri</div>
                                                        <div>
                                                            <img src="{{asset('img/w5.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">35<sup>o</sup></div>
                                                    </div>
                                                </div>
                                                <div class="col-2 days_margin_top">
                                                    <div class="day text-center">
                                                        <div class="day_font">Sat</div>
                                                        <div>
                                                            <img src="{{asset('img/w2.png')}}" alt="weather" class="img-fluid">
                                                        </div>
                                                        <div class="day_font">36<sup>o</sup></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card m-t-35">

                        <div class="card-body m-t-10">
                            ************************<svg id="fillgauge1"  width="100%" height="193"></svg>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Average Monthly Uploads</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="test-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <br />
                                    <span id="monthly_upload"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-t-35">
                    <div class="social-counter text-center">
                        <ul class="m-b-0">
                            <li class="facebook">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                    </div>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="google">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                    </div>
                                </a>
                            </li>

                            <li class="instagram">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
                                        <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
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

    <script type="text/javascript" src="{{asset('js/pages/index.js')}}"></script>
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
@stop
