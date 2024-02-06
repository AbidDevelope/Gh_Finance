@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area" style="background: #BEC0BF">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Create Beneficiary </h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('beneficiary/create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Beneficiary <span class="text-danger">*</span></label>
                                                <input type="text" name="beneficiary" value="{{ old('beneficiary') }}" class="form-control">
                                                @error('beneficiary')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input class="form-control" type="email" value="{{ old('email') }}" name="email">
                                                @error('email')
                                                  <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="{{ old('mobile') }}" name="mobile" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10">
                                                @error('mobile')
                                                  <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Beneficiary Address</label>
                                                <textarea class="form-control" rows="3" value="{{ old('beneficiary_address') }}" name="beneficiary_address"></textarea>
                                                @error('beneficiary_address')
                                                  <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">CREATE</button>
                                    </div>
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
