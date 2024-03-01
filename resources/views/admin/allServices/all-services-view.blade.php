<style>
     .margin_top{
        margin-top: -50px !important;
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top mx-3">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                            <div class="form-section bg-white">
                                <h6 class="card-title m-b-15">Project Type</h6>
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
                                                <td>Manager Email:</td>
                                                <td class="text-right">{{ $projects->manager_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Manager Mobile:</td>
                                                <td class="text-right">{{ $projects->Manager_mobile }}</td>
                                            </tr>
                                            <tr>
                                                <td>Manager Landline:</td>
                                                <td class="text-right">{{ $projects->Manager_landline }}</td>
                                            </tr>
                                            <tr>
                                                <td>Remarks:</td>
                                                <td class="text-right">{{ $projects->manager_remarks }}</td>
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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-section bg-white">
                                <h6 class="card-title m-b-15">Company details</h6>
                                <hr class="border-top-grey">
                                <div class="card-body">
                                    <table class="table table-striped table-border">
                                        <tbody>
                                            <tr>
                                                <td>Company Name:</td>
                                                <td class="text-right">{{ $projects->company_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Contact Name:</td>
                                                <td class="text-right">{{ $projects->contact_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Client Email:</td>
                                                <td class="text-right">{{ $projects->client_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Client Mobile:</td>
                                                <td class="text-right">{{ $projects->client_mobile }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Landline:</td>
                                                <td class="text-right">{{ $projects->company_landline }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Location:</td>
                                                <td class="text-right">{{ $projects->company_location }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Country:</td>
                                                <td class="text-right">{{ $projects->company_country }}</td>
                                            </tr>
                                            <tr>
                                                <td>Company Website:</td>
                                                <td class="text-right"><a href="#">{{ $projects->company_website }}</a></td>
                                            </tr>
                                            <tr>
                                                <td>Company Remarks</td>
                                                <td class="text-right">{{ $projects->company_remarks }}</td>
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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-section bg-white">
                                <h6 class="card-title m-b-15">Project details</h6>
                                <hr class="border-top-grey">
                                <div class="card-body">
                                    <table class="table table-striped table-border">
                                        <tbody>
                                            <tr>
                                                <td>Project ID:</td>
                                                <td class="text-right">{{ $projects->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Name:</td>
                                                <td class="text-right">{{ $projects->project_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Email:</td>
                                                <td class="text-right">{{ $projects->project_email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Mobile:</td>
                                                <td class="text-right">{{ $projects->project_mobile }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Location:</td>
                                                <td class="text-right">{{ $projects->project_location }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Value:</td>
                                                <td class="text-right">{{ $projects->project_value }}</td>
                                            </tr>
                                            <tr>
                                                <td>Project Country:</td>
                                                <td class="text-right">{{ $projects->project_country }}</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Plan:</td>
                                                <td class="text-right">{{ $projects->payment_plan }}</td>
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
