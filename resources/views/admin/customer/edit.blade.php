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
@stop
@section('content')
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                        Member Informations
                        </div>
                        <div class="card-body">
                            <form action="{{url('/member').'/'.$member_data->id.'/update'}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="employee_no" class="col-form-label">Employee Number</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="employee_no" name="employee_no" value="{{ $member_data->id }}" required placeholder="Employee Number" disabled="disabled">
                                            @error('employee_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="first_name" class="col-form-label">First Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $member_data->User->name }}" required placeholder="First Name" disabled="disabled">
                                            @error('first_name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" class="col-form-label">Name In Full</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $member_data->name }}" required placeholder="Name In Full" required>
                                            @error('name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="nic_no" class="col-form-label">NIC Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="nic_no" name="nic_no" value="{{ $member_data->nic_no }}" placeholder="NIC Number" required>
                                            @error('nic_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="dl_no" class="col-form-label">Driving License Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="dl_no" name="dl_no" value="{{ $member_data->MemberDetail->dl_no }}" placeholder="Driving License Number">
                                            @error('dl_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="passport_no" class="col-form-label">Passport Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="passport_no" name="passport_no" value="{{ $member_data->MemberDetail->passport_no }}" placeholder="Passport Number">
                                            @error('passport_no')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label for="address" class="col-form-label">Address</label>
                                        <div class="input-group input-group-append">
                                            <input type="text" class="form-control" id="address" name="address" value="{{ $member_data->MemberDetail->address }}" required placeholder="Address">
                                            @error('address')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="contact_mobile" class="col-form-label">Contact Number (Mobile)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="contact_mobile" name="contact_mobile" value="{{ $member_data->contact_mobile }}" required placeholder="Contact Number (Mobile)">
                                            @error('contact_mobile')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="contact_fix" class="col-form-label">Contact Number (FIx)</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="contact_fix" name="contact_fix" value="{{ $member_data->MemberDetail->contact_fix }}" placeholder="Contact Number (FIx)">
                                            @error('contact_fix')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="email" class="col-form-label">Email</label>
                                        <div class="input-group input-group-append">
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $member_data->user->email }}" required  placeholder="Email" disabled="disabled">
                                            @error('email')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="designation" class="col-form-label">Designation</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="designation" name="designation" required>
                                                <option value="">Select Designation</option>
                                                @foreach($designationList as $designation)
                                                    <?php if($designation->id == $member_data->designation){ ?>
                                                        <option value="{{ $designation->id }}" selected>{{ $designation->designation }}</option>
                                                    <?php }else{ ?>
                                                        <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                                                    <?php } ?>
                                                @endforeach
                                            </select>
                                            @error('designation')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="job_type" class="col-form-label">Job Type</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="job_type" name="job_type">
                                                <option value="">Select Job Type</option>
                                                @foreach($jobTypeList as $jobType)
                                                    <?php if($jobType->id == $member_data->MemberDetail->job_type){ ?>
                                                        <option value="{{ $jobType->id }}" selected>{{ $jobType->job_type }}</option>
                                                    <?php }else{ ?>
                                                        <option value="{{ $jobType->id }}">{{ $jobType->job_type }}</option>
                                                    <?php } ?>
                                                @endforeach
                                            </select>
                                            @error('job_type')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="gender" class="col-form-label">Gender</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="gender" name="gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="Male" <?php if($member_data->gender == 'Male'){ echo 'selected'; } ?>>Male</option>
                                                <option value="Female"<?php if($member_data->gender == 'Female'){ echo 'selected'; } ?>>Female</option>
                                                <option value="Other"<?php if($member_data->gender == 'Other'){ echo 'selected'; } ?>>Other</option>
                                            </select>
                                            @error('gender')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="marital_status" class="col-form-label">Marital Status</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="marital_status" name="marital_status">
                                            <option value="">Select Marital Status</option>
                                                <option value="Single" <?php if($member_data->MemberDetail->marital_status == 'Single'){ echo 'selected'; } ?>>Single</option>
                                                <option value="Married" <?php if($member_data->MemberDetail->marital_status == 'Married'){ echo 'selected'; } ?>>Married</option>
                                            </select>
                                            @error('marital_status')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="nationality" class="col-form-label">Nationality</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $member_data->MemberDetail->nationality }}" placeholder="Nationality">
                                            @error('nationality')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="religion" class="col-form-label">Religion</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="religion" name="religion" value="{{ $member_data->MemberDetail->religion }}" placeholder="Religion">
                                            @error('religion')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="dob" class="col-form-label">Date of Birth</label>
                                        <div class="input-group input-append  date input-group-append" id="dpYears" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input type="text" class="form-control" id="dob" name="dob" value="{{ $member_data->MemberDetail->dob }}" placeholder="yyyy-mm-dd">
                                            <span class="input-group-text add-on border-left-0 rounded-right">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            @error('dob')
                                                <span class="help-block">{{ $dob }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $refreeCount = count($member_data->MemberReferee);
                                if($refreeCount > 0){
                                    $ref['ref_one_name'] = $member_data->MemberReferee[0]->name;
                                    $ref['ref_one_address'] = (isset($member_data->MemberReferee[0]->address)) ? $member_data->MemberReferee[0]->address : '';
                                    $ref['ref_one_contact'] = (isset($member_data->MemberReferee[0]->contact)) ? $member_data->MemberReferee[0]->contact : '';
                                    if($refreeCount >1){
                                        $ref['ref_two_name'] = $member_data->MemberReferee[1]->name;
                                        $ref['ref_two_address'] = (isset($member_data->MemberReferee[1]->address)) ? $member_data->MemberReferee[1]->address : '';
                                        $ref['ref_two_contact'] = (isset($member_data->MemberReferee[1]->contact)) ? $member_data->MemberReferee[1]->contact : '';
                                    }
                                }
                                ?>

                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-12" style="font-family: 'Roboto', sans-serif; font-size: 16px;">
                                        Referee Information 01
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="ref_one_name" class="col-form-label">Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_one_name" name="ref_one_name" value="<?php if(isset($ref['ref_one_name'])){ echo $ref['ref_one_name'];} ?>" placeholder="Referee Name">
                                            @error('ref_one_name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="ref_one_address" class="col-form-label">Address</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_one_address" name="ref_one_address" value="<?php if(isset($ref['ref_one_address'])){ echo $ref['ref_one_address'];} ?>" placeholder="Address">
                                            @error('ref_one_address')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="ref_one_contact" class="col-form-label">Contact Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_one_contact" name="ref_one_contact" value="<?php if(isset($ref['ref_one_contact'])){ echo $ref['ref_one_contact'];} ?>" placeholder="Contact Number">
                                            @error('ref_one_contact')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-12" style="font-family: 'Roboto', sans-serif; font-size: 16px;">
                                        Referee Information 02
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="ref_two_name" class="col-form-label">Name</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_two_name" name="ref_two_name" value="<?php if(isset($ref['ref_two_name'])){ echo $ref['ref_two_name'];} ?>" placeholder="Referee Name">
                                            @error('ref_two_name')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="ref_two_address" class="col-form-label">Address</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_two_address" name="ref_two_address" value="<?php if(isset($ref['ref_two_address'])){ echo $ref['ref_two_address'];} ?>" placeholder="Address">
                                            @error('ref_two_address')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="ref_two_contact" class="col-form-label">Contact Number</label>
                                        <div class="input-group input-group-append">
                                        <input type="text" class="form-control" id="ref_two_contact" name="ref_two_contact" value="<?php if(isset($ref['ref_two_contact'])){ echo $ref['ref_two_contact'];} ?>" placeholder="Contact Number">
                                            @error('ref_two_contact')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-12" style="font-family: 'Roboto', sans-serif; font-size: 16px;">
                                        Proof Upload
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label" for="profile_picture">Profile Picture</label>
                                        <input class="form-control" id="profile_picture" name="profile_picture" type="file" accept="image/*" disabled="disabled">
                                        @error('profile_picture')
                                        <span id="helpBlock2" class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label" for="proof">proof</label>
                                        <input class="form-control" id="proof" name="proof[]" type="file" multiple>
                                        @error('proof')
                                        <span id="helpBlock2" class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php if(isset($member_data->User->profile_picture) && $member_data->User->profile_picture != ''){ ?>
                                            <img src="{{ asset($member_data->User->profile_picture) }}" style="width:200px;">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?php if(isset($member_data->MemberFile) && count($member_data->MemberFile) > 0){ ?>
                                            @foreach($member_data->MemberFile as $memberFile)
                                                <img src="{{ asset($memberFile->document) }}" style="width:100px;">
                                            @endforeach
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="user_role" class="col-form-label">User Role</label>
                                        <div class="input-group input-group-append">
                                            <select class="custom-select form-control" id="user_role" name="user_role" value="{{ old('user_role') }}" disabled="disabled">
                                                <option value="">Select User Role</option>
                                                @foreach($userRoleList as $userRole)
                                                <option value="{{ $userRole->id }}">{{ $userRole->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('user_role')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group radio_basic_swithes_padbott">
                                            <input class="make-switch-radio" type="checkbox" data-on-color="success" data-off-color="danger" checked>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-11">
                                        <button type="submit" class="btn btn-primary layout_btn_prevent" style="float: right;">Update</button>
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
<script type="text/javascript">
    $(document).ready(function () {
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
    })
</script>
@stop
