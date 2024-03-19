@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Create Project</h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('projects/create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <select name="project_type" class="form-control" id="">
                                                    <option value="" disabled selected>Select Type</option>
                                                    <option value="Design">Design</option>
                                                    <option value="Construction">Construction</option>
                                                    <option value="Design_and_Construction">Design & Construction</option>
                                                </select>
                                                @error('project_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Manager</label>
                                                <input type="text" class="form-control" name="project_manager" value="{{ old('project_manager') }}">
                                                @error('project_manager')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" class="form-control" name="project_name" value="{{ old('project_name') }}">
                                                @error('project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Location </label>
                                                 <input type="text" name="project_location" class="form-control" value="{{ old('project_location') }}">                                               
                                                @error('project_location')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Value</label>
                                                <input type="text" class="form-control" name="project_value" value="{{ old('project_value') }}">
                                                @error('project_value')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input class="form-control" type="text" name="mobile" value="{{ old('mobile') }}">
                                                @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Office Landline</label>
                                                <input class="form-control" type="text" name="office_landline" onkeypress="return /[0-9,.]/i.test(event.key)" value="{{ old('office_landline') }}">
                                                @error('office_landline')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Office Location </label>
                                                 <input type="text" name="office_location" class="form-control" value="{{ old('office_location') }}">                                               
                                                @error('office_location')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks </label>
                                                 <input type="text" name="remarks" class="form-control" value="{{ old('remarks') }}">                                               
                                                @error('remarks')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Name </label>
                                                 <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">                                               
                                                @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Location </label>
                                                 <input type="text" name="company_location" class="form-control" value="{{ old('company_location') }}">                                               
                                                @error('company_location')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description </label>
                                                 <textarea name="description" class="form-control" value="{{ old('description') }}"></textarea>                                               
                                                @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <button type="submit" class="btn btn-create btn-lg mt-5">CREATE</button>
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
    {{-- Data table JS --}}
     <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
