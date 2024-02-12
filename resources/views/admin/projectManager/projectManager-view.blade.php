@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize"> Profile</h4>
                                <hr class="border-top-grey">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <a href="#"><img alt="" src="{{ asset('assets/admin/img/profile/profile.png') }}" height="100"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">{{ $projectManagers->name }}</h3>
                                                    {{-- <h6 class="text-muted">UI/UX Design Team</h6> --}}
                                                    {{-- <small class="text-muted">Web Designer</small> --}}
                                                    {{-- <div class="staff-id">Employee ID : FT-0001</div> --}}
                                                    {{-- <div class="small doj text-muted">Date of Join : 1st Jan 2013</div> --}}
                                                    {{-- <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div> --}}
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Phone:</div>
                                                        <p class="text"><a href="">{{ $projectManagers->mobile }}</a></p>
                                                    </li>
                                                    <li>
                                                        <div class="title">Email:</div>
                                                        <p class="text"><a href="">{{ $projectManagers->email }}</a></p>
                                                    </li>
                                                    {{-- <li>
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">24th July</div>
                                                    </li> --}}
                                                    <li>
                                                        <div class="title">Address:</div>
                                                        <p class="text">{{ $projectManagers->address }}</p>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <p class="text">{{ $projectManagers->gender }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                                </div>
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
