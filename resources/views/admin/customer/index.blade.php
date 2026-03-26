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
@stop
@section('content')
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Bootstrap Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-35">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th>
                                            <i class="fa fa-briefcase"></i> Customer Name
                                        </th>
                                        <th class="hidden-xs">
                                            <i class="fa fa-user"></i> Contact Number
                                        </th>
                                        <th>
                                            <i class="fa fa-shopping-cart"></i> Contact Person
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="highlight">
                                            <span class="success"></span>
                                            <a href="#">Customer 1</a>
                                        </td>
                                        <td class="hidden-xs">0777123456</td>
                                        <td>Contact person 1</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="info"></span>
                                            <a href="#">Customer 2</a>
                                        </td>
                                        <td class="hidden-xs">0777123456</td>
                                        <td>Contact person 2</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlight">
                                            <span class="success"></span>
                                            <a href="#">Customer 3</a>
                                        </td>
                                        <td class="hidden-xs">0777123456</td>
                                        <td>Contact person 3</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="warning"></span>
                                            <a href="#">Customer 4</a>
                                        </td>
                                        <td class="hidden-xs">0777123456</td>
                                        <td>Contact person 4</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs purple">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
<script src="{{asset('js/components.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/pages/sweet_alerts.js')}}"></script> -->
    <script type="text/javascript">

    </script>
@stop
