@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">All Details</h4>
                                <hr class="border-top-grey">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class
                                        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor
                                        consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut.
                                        Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at
                                        purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                                        pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et
                                        hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci
                                        pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu
                                        euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit
                                        vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class
                                        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor
                                        consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut.
                                        Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at
                                        purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                                        pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et
                                        hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci
                                        pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu
                                        euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit
                                        vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-section">
                                <h6 class="card-title m-b-15">Project details</h6>
                                <hr class="border-top-grey">
                                <div class="card-body">
                                    <table class="table table-striped table-border">
                                        <tbody>
                                            <tr>
                                                <td>Project Type:</td>
                                                <td class="text-right">{{ $projects->project_type }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Manager:</td>
                                                <td class="text-right">{{ $projects->project_manager }}</td>
                                            </tr>
                                            <tr>
                                                <td>Projects Name:</td>
                                                <td class="text-right">{{ $projects->project_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Value:</td>
                                                <td class="text-right">{{ $projects->project_value }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td class="text-right">{{ $projects->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile:</td>
                                                <td class="text-right">{{ $projects->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Location:</td>
                                                <td class="text-right">{{ $projects->project_location }}</td>
                                            </tr>
                                            <tr>
                                                <td>Office Landline:</td>
                                                <td class="text-right">{{ $projects->office_landline }}</td>
                                            </tr>
                                            <tr>
                                                <td>Office Location:</td>
                                                <td class="text-right">{{ $projects->office_location }}</td>
                                            </tr>
                                            <tr>
                                                <td>Remarks</td>
                                                <td class="text-right">{{ $projects->remarks }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Name:</td>
                                                <td class="text-right">{{ $projects->company_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Location:</td>
                                                <td class="text-right">{{ $projects->company_location }}</td>
                                            </tr>
                                            <tr>
                                                <td>Description:</td>
                                                <td class="text-right">{{ $projects->description }}</td>
                                            </tr>
                                            <tr>
                                                <td>Created Date:</td>
                                                <td class="text-right"><a href="#">{{ $projects->created_at->format('d M Y') }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
