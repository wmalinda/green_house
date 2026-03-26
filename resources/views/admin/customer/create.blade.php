@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{asset('vendors/datepicker/css/bootstrap-datepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/chosen/css/chosen.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/switchery/css/switchery.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/checkbox_css/css/checkbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/pages/radio_checkbox.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages/sweet_alert.css')}}"/>
    <style>
        .tf-err{
            border-color: red; !important;
        }
    </style>
@stop
@section('content')
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            @if (isset($page_title))
                                {{ $page_title }}
                            @endif
                        </div>
                        <div class="card-body">
                            <form id="customerCreateForm" action="{{ route('customer-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="code" class="col-form-label">Code</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" required placeholder="Code">
                                            @error('code')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" class="col-form-label">Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Name">
                                            @error('name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="brc_no" class="col-form-label">Business Registration Number</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="brc_no" name="brc_no" value="{{ old('brc_no') }}" placeholder="Business Registration Number">
                                            @error('brc_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="category" class="col-form-label">Category</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="category" name="category" value="{{ old('category') }}" required>
                                                <option value="">Select Bank</option>
                                                @foreach($category_list as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label for="address" class="col-form-label">Address</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required placeholder="Address">
                                            @error('address')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="contact" class="col-form-label">Contact Number(Fix)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" required placeholder="Contact Number(Fix)">
                                            @error('contact')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="mobile" class="col-form-label">Contact Number(Mobile)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Contact Number(Mobile)">
                                            @error('mobile')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="fax" class="col-form-label">Fax Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="fax" name="fax" value="{{ old('fax') }}" placeholder="Fax Number">
                                            @error('fax')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="email" class="col-form-label">Email</label>
                                        <div class="input-group input-group-append">
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"  placeholder="Email">
                                            @error('email')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="web" class="col-form-label">Web Site</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="web" name="web" value="{{ old('web') }}"  placeholder="Web Site">
                                            @error('web')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="credit_period" class="col-form-label">Credit Period(Days)</label>
                                        <div class="input-group input-group-append">
                                            <input type="number" min="0" step="0" class="form-control" id="credit_period" name="credit_period" value="{{ old('credit_period') }}" required  placeholder="Credit Period">
                                            @error('credit_period')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="credit_limit" class="col-form-label">Credit Limit</label>
                                        <div class="input-group input-group-append">
                                            <input type="number" min="0" step="0" class="form-control" id="credit_limit" name="credit_limit" value="{{ old('credit_limit') }}" required  placeholder="Credit Limit">
                                            @error('credit_limit')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="location" class="col-form-label">Handle By</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="location" name="location" value="{{ old('location') }}" required>
                                                <option value="">Select Handle Location</option>
                                                @foreach($locationList as $location)
                                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('location')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-12" style="font-family: 'Roboto', sans-serif; font-size: 16px;">
                                        Account Information
                                        <hr>
                                    </div>
                                </div>
                                <div id="accInfo">
                                
                                </div>
                                <div id="contactInfo">
                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label class="control-label" for="logo">Logo Image</label>
                                        <input class="form-control" id="logo" name="logo" type="file" accept="image/*">
                                        @error('logo')
                                        <span id="helpBlock2" class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group radio_basic_swithes_padbott">
                                            <input class="make-switch-radio" type="checkbox" id="status" name="status" data-on-color="success" data-off-color="danger" checked>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-11">
                                        <button type="submit" id="customerSubmitBtn" class="btn btn-primary layout_btn_prevent">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
<script src="{{asset('vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('vendors/switchery/js/switchery.min.js')}}"></script>
<script src="{{asset('js/pages/radio_checkbox.js')}}"></script>
<script src="{{asset('js/pages/form_elements.js')}}"></script>
<script src="{{asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script src="{{asset('js/pages/sweet_alerts.js')}}"></script>
<script type="text/javascript">
    var blistId = 0;
    var cdiListId = 0;
    var emailVerify = true;

    $(document).ready(function () {
        loadAccInfoSection();
        addContactInfo();
        
        $('#dpYears').datepicker({
            todayHighlight: true,
            autoclose: true,
            orientation:"bottom"
        });

        $('.make-switch-radio').bootstrapSwitch({
            onText: $(this).data('onText'),
            offText: $(this).data('offText'),
            onColor: $(this).data('onColor'),
            offColor: $(this).data('offColor'),
            size: $(this).data('size'),
            labelText: $(this).data('labelText')
        });

        $("#email").focusin(function(){
            $("#customerSubmitBtn").attr("disabled","disabled");
            emailVerify = false;
        });

        $("#email").focusout(function(){
            if($("#email").val() != ''){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: baseURL+'check-customer-email-exsist',
                    type: "POST",
                    data: {
                        'email':$("#email").val()
                    },
                    success: function(data){
                        if(data){
                            emailVerify = false;
                            $("#email").addClass("tf-err");
                            swal({
                                title: 'Email alredy exsist',
                                confirmButtonColor: '#00c0ef'
                            }).done();
                        }else{
                            $("#customerSubmitBtn").prop("disabled", false);
                            emailVerify = true;
                            $("#email").removeClass("tf-err");
                        }
                    }
                });
            }else{
                $("#customerSubmitBtn").prop("disabled", false);
                emailVerify = true;
                $("#email").removeClass("tf-err");
            }
        });

        $("#account_name_1").focusout(function(){
            if($("#account_name_1").val() != ''){
                $('#bank_1').attr('required', true);
                $('#account_no_1').attr('required', true);
                if($("#bank_1").val() != ''){
                    $('#branch_1').attr('required', true);
                }
            }else{
                if($("#bank_1").val() == '' && $("#account_no_1").val() == ''){
                    $('#bank_1').attr('required', false);
                    $('#account_name_1').attr('required', false);
                    $('#account_no_1').attr('required', false);
                }else{
                    if($("#bank_1").val() != ''){
                        $('#account_name_1').attr('required', true);
                        $('#account_no_1').attr('required', true);
                    }else if($("#account_no_1").val() != ''){
                        $('#bank_1').attr('required', true);
                        $('#account_name_1').attr('required', true);
                    }
                }
            }
        });

        $("#account_no_1").focusout(function(){
            if($("#account_no_1").val() != ''){
                $('#bank_1').attr('required', true);
                $('#account_name_1').attr('required', true);
                if($("#bank_1").val() != ''){
                    $('#branch_1').attr('required', true);
                }
            }else{
                if($("#bank_1").val() == '' && $("#account_name_1").val() == ''){
                    $('#bank_1').attr('required', false);
                    $('#account_name_1').attr('required', false);
                    $('#account_no_1').attr('required', false);
                }else{
                    if($("#bank_1").val() != ''){
                        $('#account_name_1').attr('required', true);
                        $('#account_no_1').attr('required', true);
                    }else if($("#account_name_1").val() != ''){
                        $('#bank_1').attr('required', true);
                        $('#account_no_1').attr('required', true);
                    }

                }
            }
        });

        $(".cust-ref-name").focusout(function(e){
            var elimentId = e.currentTarget.id;
            var eidArr = elimentId.split("_");
            var id = eidArr[2];

            if($("#ref_name_"+id).val() != ''){
                $('#ref_contact_'+id).attr('required', true);
            }else{
                if($("#designation_"+id).val() == '' && $("#ref_contact_"+id).val() == '' && $("#con_email_"+id).val() == ''){
                    $('#ref_name_'+id).attr('required', false);
                    $('#designation_'+id).attr('required', false);
                    $('#ref_contact_'+id).attr('required', false);
                    $('#con_email_'+id).attr('required', false);
                }else{
                    if($("#ref_contact_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#con_email_'+id).attr('required', false);
                    }

                    if($("#designation_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#con_email_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }

                    if($("#con_email_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }
                }
            }
        });

        $(".cust-ref-cont").focusout(function(e){
            var elimentId = e.currentTarget.id;
            var eidArr = elimentId.split("_");
            var id = eidArr[2];

            if($("#ref_contact_"+id).val() != ''){
                $('#ref_name_'+id).attr('required', true);
            }else{
                if($("#ref_name_"+id).val() == '' && $("#designation_"+id).val() == '' && $("#con_email_"+id).val() == ''){
                    $('#ref_name_'+id).attr('required', false);
                    $('#designation_'+id).attr('required', false);
                    $('#ref_contact_'+id).attr('required', false);
                    $('#con_email_'+id).attr('required', false);
                }else{
                    if($("#ref_name_"+id).val() != ''){
                        $('#ref_contact_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#con_email_'+id).attr('required', false);
                    }

                    if($("#designation_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#con_email_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }

                    if($("#con_email_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }
                }
            }
        });

        $(".cust-ref-desig").focusout(function(e){
            console.log('asasas');
            var elimentId = e.currentTarget.id;
            var eidArr = elimentId.split("_");
            var id = eidArr[1];
            
            if($("#designation_"+id).val() != ''){
                $('#ref_name_'+id).attr('required', true);
                $('#ref_contact_'+id).attr('required', true);
            }else{
                if($("#ref_name_"+id).val() == '' && $("#ref_contact_"+id).val() == '' && $("#con_email_"+id).val() == ''){
                    $('#ref_name_'+id).attr('required', false);
                    $('#designation_'+id).attr('required', false);
                    $('#ref_contact_'+id).attr('required', false);
                    $('#con_email_'+id).attr('required', false);
                }else{
                    if($("#ref_name_"+id).val() != ''){
                        $('#ref_contact_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#con_email_'+id).attr('required', false);
                    }

                    if($("#ref_contact_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#con_email_'+id).attr('required', false);
                        $('#designation_'+id).attr('required', false);
                    }

                    if($("#con_email_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }
                }
            }
        });

        $(".cust-ref-email").focusout(function(e){
            var elimentId = e.currentTarget.id;
            var eidArr = elimentId.split("_");
            var id = eidArr[2];

            if($("#con_email_"+id).val() != ''){
                $('#ref_name_'+id).attr('required', true);
                $('#ref_contact_'+id).attr('required', true);
            }else{
                if($("#ref_name_"+id).val() == '' && $("#ref_contact_"+id).val() == '' && $("#designation_"+id).val() == ''){
                    $('#ref_name_'+id).attr('required', false);
                    $('#designation_'+id).attr('required', false);
                    $('#ref_contact_'+id).attr('required', false);
                    $('#con_email_'+id).attr('required', false);
                }else{
                    if($("#ref_name_"+id).val() != ''){
                        $('#ref_contact_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#con_email_'+id).attr('required', false);
                    }

                    if($("#ref_contact_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#con_email_'+id).attr('required', false);
                        $('#designation_'+id).attr('required', false);
                    }

                    if($("#designation_"+id).val() != ''){
                        $('#ref_name_'+id).attr('required', true);
                        $('#designation_'+id).attr('required', false);
                        $('#ref_contact_'+id).attr('required', true);
                    }
                }
            }
        });
    })

    function loadAccInfoSection(){
        blistId++;

        if(blistId != 1){
            var option = '<button type="button" class="btn btn-success" onclick="addAccInfo()">+</button>'+
                            '<button type="button" class="btn btn-danger" style="margin-left: 10px;" onclick="removeAccInfo('+blistId+')">-</button>';
        }else{
            var option = '<button type="button" class="btn btn-success" onclick="addAccInfo()">+</button>';
        }

        var content = '<div id="accData_'+blistId+'" class="form-group row">'+
                        '<div class="col-lg-2">'+
                            '<label for="bank" class="col-form-label">Bank</label>'+
                            '<div class="input-group input-group-append bList_'+blistId+'">'+
                                '<select class="custom-select form-control" id="bank_'+blistId+'" name="bank['+blistId+']" required>'+
                                    '<option value="">Select Bank</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-lg-2">'+
                            '<label for="branch" class="col-form-label">Branch</label>'+
                            '<div class="input-group input-group-append bbList_'+blistId+'">'+
                                '<select class="custom-select form-control" id="branch_'+blistId+'" name="branch['+blistId+']">'+
                                    '<option value="">Select Branch</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-lg-2">'+
                            '<label for="account_name" class="col-form-label">Account Name</label>'+
                            '<div class="input-group input-group-append">'+
                            '<input type="text" class="form-control" id="account_name_'+blistId+'" name="account_name['+blistId+']" placeholder="Account Name">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-lg-2">'+
                            '<label for="account_no" class="col-form-label">Account Number</label>'+
                            '<div class="input-group input-group-append">'+
                            '<input type="text" class="form-control" id="account_no_'+blistId+'" name="account_no['+blistId+']" placeholder="Account Number">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-lg-2" style="margin-top: 36px;">'+option+
                            // '<button type="button" class="btn btn-success" onclick="addAccInfo()">+</button>'+
                            // '<button type="button" class="btn btn-danger" style="margin-left: 10px;" onclick="removeAccInfo('+blistId+')">-</button>'+
                        '</div>'+
                    '</div>';

        $("#accInfo").append(content);
        if(blistId != 1){ 
            $('#account_name_'+blistId).attr('required', true); 
            $('#account_no_'+blistId).attr('required', true); 
        }

        getBankList(blistId);
    }

    function getBankList(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseURL+'get-bank-list',
            type: "POST",
            data: {
            
            },
            success: function(data){
                if(data){
                    addBankList(id, data);
                }
            }
        });
    }

    function getBankBranchList(id){
        if(id == 1){
            if($("#bank_1").val() != ''){
                $('#account_name_1').attr('required', true);
                $('#account_no_1').attr('required', true);
            }else{
                if($("#account_name_1").val() == '' && $("#account_no_1").val() == ''){
                    $('#bank_1').attr('required', false);
                    $('#account_name_1').attr('required', false);
                    $('#account_no_1').attr('required', false);
                }else{
                    if($("#account_name_1").val() != ''){
                        $('#bank_1').attr('required', true);
                        $('#account_no_1').attr('required', true);
                    }else if($("#account_no_1").val() != ''){
                        $('#bank_1').attr('required', true);
                        $('#account_name_1').attr('required', true);
                    }
                }
            }
        }
        
        var bank_id = $("#bank_"+id).val();
        if(bank_id != ''){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: baseURL+'get-branch-list-by-bank-id',
                type: "POST",
                data: {
                'bank_id':bank_id
                },
                success: function(data){
                    if(data){
                        addBracnhList(id, data);
                    }
                }
            });
        }else{
            var branchContent = '<select class="custom-select form-control" id="branch_'+id+'" name="branch['+id+']">'+
                '<option value="">Select Branch</option></select>';
            $(".bbList_"+id).html(branchContent);
        }
    }

    function addBankList(id, data){
        $(".bList").html("");

        var bankContent = '<select class="custom-select form-control" id="bank_'+id+'" name="bank['+id+']" onchange="getBankBranchList('+id+');">'+
            '<option value="">Select Bank</option>';
        for(i = 0; i < data.length; i++){
            bankContent += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
        }

        bankContent += '</select>';
        $(".bList_"+id).html(bankContent);
        if(id != 1){
            $('#bank_'+id).attr('required', true);
        }
    }

    function addBracnhList(id, data){
        $(".bbList").html("");
        var branchContent = '<select class="custom-select form-control" id="branch_'+id+'" name="branch['+id+']" required>'+
            '<option value="">Select Branch</option>';
        for(i = 0; i < data.length; i++){
            branchContent += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
        }

        branchContent += '</select>';
        $(".bbList_"+id).html(branchContent);
        // if(id != 1){
        //     $('#branch_'+id).attr('required', true);
        // }
    }

    function addAccInfo(){
        loadAccInfoSection();
    }

    function removeAccInfo(id){
        $("#accData_"+id).remove();
    }

    function addContactInfo(){
        cdiListId++;
        if(cdiListId != 1){
            var option = '<button type="button" class="btn btn-success" onclick="addContactInfo()">+</button>'+
                        '<button type="button" class="btn btn-danger" style="margin-left: 10px;" onclick="removeContactInfo('+cdiListId+')">-</button>';
        }else{
            var option = '<button type="button" class="btn btn-success" onclick="addContactInfo()">+</button>';
        }

        var contInfoContent = '<div id="cpsection_'+cdiListId+'">'+
                '<div class="row" style="margin-top: 30px;">'+
                    '<div class="col-md-12" style="font-family: Roboto, sans-serif; font-size: 16px;">'+
                        'Contact Person '+cdiListId+
                        '<hr>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<div class="col-lg-6">'+
                        '<label for="contact_name_'+cdiListId+'" class="col-form-label">Name</label>'+
                        '<div class="input-group input-group-append">'+
                        '<input type="text" class="form-control cust-ref-name" id="ref_name_'+cdiListId+'" name="ref_name['+cdiListId+']" placeholder="Contact Person Name">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="designation_'+cdiListId+'" class="col-form-label">Designation</label>'+
                        '<div class="input-group input-group-append">'+
                        '<input type="text" class="form-control cust-ref-desig" id="designation_'+cdiListId+'" name="designation['+cdiListId+']" placeholder="Designation">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-lg-2" style="margin-top: 36px;">'+option+
                        // '<button type="button" class="btn btn-success" onclick="addContactInfo()">+</button>'+
                        // '<button type="button" class="btn btn-danger" style="margin-left: 10px;" onclick="removeContactInfo('+cdiListId+')">-</button>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group row">'+
                    '<div class="col-lg-3">'+
                        '<label for="ref_contact_'+cdiListId+'" class="col-form-label">Contact Number</label>'+
                        '<div class="input-group input-group-append">'+
                        '<input type="text" class="form-control cust-ref-cont" id="ref_contact_'+cdiListId+'" name="ref_contact['+cdiListId+']" placeholder="Contact Number">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="con_email_'+cdiListId+'" class="col-form-label">Email</label>'+
                        '<div class="input-group input-group-append">'+
                        '<input type="text" class="form-control cust-ref-email" id="con_email_'+cdiListId+'" name="con_email['+cdiListId+']" placeholder="Email">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
        $("#contactInfo").append(contInfoContent);
    }

    function removeContactInfo(id){
        $("#cpsection_"+id).remove();
    }
</script>
@stop
