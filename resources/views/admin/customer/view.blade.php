@extends('layouts/fixed_menu_header')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')

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
                            <span style="float: right;"><a class="btn btn-sm btn-primary adv_cust_mod_btn" data-toggle="modal" data-href="#edit_customer" href="#edit_customer">Edit <i class="fa fa-edit"></i></a></span>
                        </div>
                        <div class="card-body">
                            <div role="tabpanel" class="tab-pane fade active show" id="user">
                                <div style="margin: 10px;">
                                    <?php
                                        if($getCustomerAllDetails->logo != ''){
                                            echo '<img src="'.url($getCustomerAllDetails->logo).'" alt="admin" class="admin_img_width" style="width:200px;">';
                                        }
                                    ?>
                                </div>    
                                <table class="table" id="users">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Company Name</td>
                                            <td width="5%">-</td>
                                            <td width="75%">{{$getCustomerAllDetails->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Company Code</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->code}}</td>
                                        </tr>
                                        <tr>
                                            <td>Category</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->CustomerCategorie->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Business Registration Number</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->brc_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number(Fix)</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->contact}}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number(Mobile)</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->mobile}}</td>
                                        </tr>
                                        <tr>
                                            <td>Fax Number</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->fax}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Web Site</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->web}}</td>
                                        </tr>
                                        <tr>
                                            <td>Credit Period(Days)</td>
                                            <td>-</td>
                                            <td>{{$getCustomerAllDetails->credit_period}}</td>
                                        </tr>
                                        <tr>
                                            <td>Credit Limit</td>
                                            <td>-</td>
                                            <td>LKR {{number_format($getCustomerAllDetails->credit_limit, 2, '.', '')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-header bg-white">
                                Account Informations
                                <span style="float: right;"><a class="btn btn-sm btn-primary adv_cust_mod_btn" data-toggle="modal" data-href="#add_customer_account" href="#add_customer_account" onclick="getBankList();">Add <i class="fa fa-edit"></i></a></span>
                        </div>
                        <div class="card-body">
                            <?php //dd($getSupplierAllDetails->SupplierBankDetail); ?>
                            <div role="tabpanel" class="tab-pane fade active show" id="user">
                                <table class="table" id="users">
                                    <thead>
                                        <th>#</th>
                                        <th>Bank</th>
                                        <th>Branch</th>
                                        <th>Account Name</th>
                                        <th>Account Number</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($getCustomerAllDetails->CustomerBankDetail as $key => $bankDetail)
                                        <tr> 
                                            <td>{{++$key}}</td>
                                            <td>{{$bankDetail->Bank[0]['name']}}</td>
                                            <td>{{$bankDetail->BankBranch[0]['name']}}</td>
                                            <td>{{$bankDetail->account_name}}</td>
                                            <td>{{$bankDetail->account_no}}</td>
                                            <td><a class="btn btn-sm btn-danger" href="{{url('/customer/account/' . $getCustomerAllDetails->id .'/'. $bankDetail->id . '/delete')}}">Remove <i class="fa fa-close"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-header bg-white">
                                Contact Informations
                                <span style="float: right;"><a class="btn btn-sm btn-primary adv_cust_mod_btn" data-toggle="modal" data-href="#add_customer_contact" href="#add_customer_contact">Add <i class="fa fa-edit"></i></a></span>
                        </div>
                        <div class="card-body">
                            <?php //dd($getSupplierAllDetails->SupplierContactPersion); ?>
                            <div role="tabpanel" class="tab-pane fade active show" id="user">
                                <table class="table" id="users">
                                    <thead>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($getCustomerAllDetails->CustomerContactPersion as $key => $contactPersion)
                                        <tr> 
                                            <td>{{++$key}}</td>
                                            <td>{{$contactPersion->name}}</td>
                                            <td>{{$contactPersion->designation}}</td>
                                            <td>{{$contactPersion->contact}}</td>
                                            <td>{{$contactPersion->email}}</td>
                                            <td><a class="btn btn-sm btn-danger" href="{{url('/customer/contact/' . $getCustomerAllDetails->id .'/'. $contactPersion->id . '/delete')}}">Remove <i class="fa fa-close"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in display_none" id="edit_customer" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{url('/customer').'/'.$getCustomerAllDetails->id.'/update'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white">Edit Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                <div class="col-lg-3">
                                        <label for="code" class="col-form-label">Code</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="code" name="code" value="{{$getCustomerAllDetails->code}}" readonly placeholder="Company Code">
                                            @error('code')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <label for="name" class="col-form-label">Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$getCustomerAllDetails->name}}" required placeholder="Company Name">
                                            @error('name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="brc_no" class="col-form-label">Business Registration Number</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="brc_no" name="brc_no" value="{{$getCustomerAllDetails->brc_no}}" readonly placeholder="Business Registration Number">
                                            @error('brc_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label for="address" class="col-form-label">Address</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="address" name="address" value="{{$getCustomerAllDetails->address}}" required placeholder="Address">
                                            @error('address')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="category" class="col-form-label">Category</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="category" name="category" value="{{ old('category') }}" required>
                                                <option value="">Select Bank</option>
                                                @foreach($category_list as $category)
                                                    <?php if($category->id == $getCustomerAllDetails->category_id){ ?>
                                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    <?php }else{ ?>
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    <?php } ?>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="contact" class="col-form-label">Contact Number(Fix)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="contact" name="contact" value="{{$getCustomerAllDetails->contact}}" placeholder="Contact Number(Fix)">
                                            @error('contact')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="mobile" class="col-form-label">Contact Number(Mobile)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$getCustomerAllDetails->mobile}}" placeholder="Contact Number(Mobile)">
                                            @error('mobile')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="fax" class="col-form-label">Fax Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="fax" name="fax" value="{{$getCustomerAllDetails->fax}}" placeholder="Fax Number">
                                            @error('fax')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="email" class="col-form-label">Email</label>
                                        <div class="input-group input-group-append">
                                        <input type="email" class="form-control" id="email" name="email" value="{{$getCustomerAllDetails->email}}" required  placeholder="Email">
                                            @error('email')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="web" class="col-form-label">Web Site</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="web" name="web" value="{{$getCustomerAllDetails->web}}" required  placeholder="Web Site">
                                            @error('web')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="credit_period" class="col-form-label">Credit Period(Days)</label>
                                        <div class="input-group input-group-append">
                                        <input type="number" min="0" step="0" class="form-control" id="credit_period" name="credit_period" value="{{$getCustomerAllDetails->credit_period}}" required  placeholder="Credit Period">
                                            @error('credit_period')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <label for="credit_limit" class="col-form-label">Credit Limit</label>
                                        <div class="input-group input-group-append">
                                        <input type="number" min="0" step="0" class="form-control" id="credit_limit" name="credit_limit" value="{{number_format($getCustomerAllDetails->credit_limit, 2, '.', '')}}" required  placeholder="Credit Limit">
                                            @error('credit_limit')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-success layout_btn_prevent" style="float: right;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade in display_none" id="add_customer_account" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white">Add Customer Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{url('/customer').'/account/'.$getCustomerAllDetails->id.'/add'}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="bank" class="col-form-label">Bank</label>
                                        <div id="banlList" class="input-group input-group-append">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="branch" class="col-form-label">Branch</label>
                                        <div id="bbList" class="input-group input-group-append">
                                            <select class="custom-select form-control" id="branch" name="branch" required>
                                                <option value="">Select Branch</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="account_name" class="col-form-label">Account Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="account_no" class="col-form-label">Account Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account Number" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-success layout_btn_prevent" style="float: right;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade in display_none" id="add_customer_contact" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white">Add Customer Contact</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{url('/customer').'/contact/'.$getCustomerAllDetails->id.'/add'}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="contact_name" class="col-form-label">Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_name" name="ref_name" placeholder="Contact Person Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="designation" class="col-form-label">Designation</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="ref_contact" class="col-form-label">Contact Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_contact" name="ref_contact" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="con_email" class="col-form-label">Email</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="con_email" name="con_email" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-success layout_btn_prevent" style="float: right;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
    <script type="text/javascript">
        function getBankList(id){
            var bank_id = $("#bank_"+id).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: baseURL+'get-bank-list',
                type: "POST",
                data: {
                'bank_id':bank_id
                },
                success: function(data){
                    if(data){
                        var bankContent = '<select class="custom-select form-control" id="bank" name="bank" required onchange="getBankBranchList();">'+
                            '<option value="">Select Bank</option>';
                        for(i = 0; i < data.length; i++){
                            bankContent += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                        }

                        bankContent += '</select>';
                        $("#banlList").html(bankContent);
                    }
                }
            });
        }

        function getBankBranchList(id){
            var bank_id = $("#bank").val();
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

                        $("#bbList").html("");
                        var branchContent = '<select class="custom-select form-control" id="branch" name="branch" required>'+
                            '<option value="">Select Branch</option>';
                        for(i = 0; i < data.length; i++){
                            branchContent += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                        }

                        branchContent += '</select>';
                        $("#bbList").html(branchContent);
                    }
                }
            });
        }
    </script>
@stop
