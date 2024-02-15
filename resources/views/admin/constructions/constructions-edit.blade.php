@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Edit Service</h4>
                                <hr class="m-0 border-top-grey">
                                <form action="{{ route('construction/update', $projects->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">1. Project Type</h5>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <input readonly type="text" name="project_type" class="form-control"
                                                    value="Construction">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Manager</label>
                                                <input type="text" class="form-control" name="project_manager"
                                                    value="{{ $projects->project_manager }}">
                                                @error('project_manager')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="manager_email"
                                                    value="{{ $projects->manager_email }}">
                                                @error('manager_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" name="Manager_mobile"
                                                    onkeypress="return /[0-9]/i.test(event.key)" maxlength="10"
                                                    value="{{ $projects->Manager_mobile }}">
                                                @error('Manager_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Landline </label>
                                                <input type="text" name="Manager_landline" class="form-control"
                                                    value="{{ $projects->Manager_landline }}" onkeypress="return /[0-9]/i.test(event.key)"> 
                                                @error('Manager_landline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input class="form-control" type="text" name="manager_remarks"
                                                    value="{{ $projects->manager_remarks }}">
                                                @error('manager_remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">2. Company Details</h5>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Name </label>
                                                <input type="text" name="company_name" class="form-control"
                                                    value="{{ $projects->company_name }}">
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name </label>
                                                <input type="text" name="company_project_name" class="form-control"
                                                    value="{{ $projects->company_project_name }}">
                                                @error('company_project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="email" name="company_email" class="form-control"
                                                    value="{{ $projects->company_email }}" >
                                                @error('company_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile </label>
                                                <input type="text" name="company_mobile" class="form-control"
                                                    value="{{ $projects->company_mobile }}" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10">
                                                @error('company_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Landline </label>
                                                <input type="text" name="company_landline" class="form-control"
                                                    value="{{ $projects->company_landline }}" onkeypress="return /[0-9]/i.test(event.key)">
                                                @error('company_landline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Location </label>
                                                <input type="text" name="company_location" class="form-control"
                                                    value="{{ $projects->company_location }}">
                                                @error('company_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country </label>
                                                <input readonly type="text" name="company_country" class="form-control"
                                                    value="Kuwait">
                                                @error('company_country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website URL </label>
                                                <input type="text" name="company_website" class="form-control"
                                                    value="{{ $projects->company_website }}">
                                                @error('company_website')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks </label>
                                                <input type="text" name="company_remarks" class="form-control"
                                                    value="{{ $projects->company_remarks }}">
                                                @error('company_remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">3. Project Details</h5>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name </label>
                                                <input type="text" name="project_name" class="form-control" value="{{ $projects->project_name }}">
                                                @error('project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Project </label>
                                                <input type="text" name="company_project" class="form-control" value="{{ $projects->company_project }}">
                                                @error('company_project')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="email" name="project_email" class="form-control" value="{{ $projects->project_email }}">
                                                @error('project_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile </label>
                                                <input type="text" name="project_mobile" class="form-control" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" value="{{ $projects->project_mobile }}">
                                                @error('project_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Location </label>
                                                <input type="text" name="project_location" class="form-control" value="{{ $projects->project_location }}">
                                                @error('project_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Value</label>
                                                <input type="text" name="project_value" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" value="{{ $projects->project_value }}">
                                                @error('project_value')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input readonly type="text" name="project_country" class="form-control" value="Kuwait">
                                                @error('project_country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input type="text" name="project_remarks" class="form-control" value="{{ $projects->project_remarks }}">
                                                @error('project_remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <button type="submit" class="btn btn-create btn-lg mt-5">UPDATE</button>
                                    <!-- </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
    <!-- metisMenu JS
                            ============================================ -->
    <script src="{{ asset('assets/admin/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- float JS
                                                                ============================================ -->
    <script src="{{ asset('assets/admin/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/admin/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/admin/js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
                                                                ============================================ -->
    <script src="{{ asset('assets/admin/js/plugins.js') }}"></script>
    <!-- main JS
                                                            ============================================ -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endsection
