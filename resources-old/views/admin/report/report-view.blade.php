<style>
    .margin_top {
        margin-top:  !important;
    }
    /* .margin_bottom {
        padding-top: 130px !important;
    } */
    #dataTable th.sr-no-header {
    min-width: 40px !important; /* Adjust the width as needed */
    width: 60px !important; /* Adjust the width as needed */
}
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                            <div class="">
                                <table id="dataTable">
                                    <thead>
                                        <tr role="row">
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Project Type</th>
                                            <th style="border-radius: 0 !important;">Project Name</th>
                                            <th style="border-radius: 0 !important;">Revenue</th>
                                            <th style="border-radius: 0 !important;">Expenses</th>
                                            <th style="border-radius: 0 !important;">Receivables</th>
                                            <th style="border-radius: 0 !important;">Pending Receivables</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">21/2/2024</td>
                                            <td style="border-radius: 0 !important;">design</td>
                                            <td style="border-radius: 0 !important;">Kuwait metro</td>
                                            <td style="border-radius: 0 !important;">5000.000 KWD</td>
                                            <td style="border-radius: 0 !important;">1600.000 KWD</td>
                                            <td style="border-radius: 0 !important;">3000.000 KWD</td>
                                            <td style="border-radius: 0 !important;">2000.000 KWD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-5">
                                {{-- <h6 class="">Payroll</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>
                                            <th class="text-center" colspan="5" style="border-radius: 0 !important;">
                                                Payroll</th>
                                        </tr> --}}
                                        <tr >
                                            <th  class="sr-no-header" style=" border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Month</th>
                                            <th style="border-radius: 0 !important;">Employee Name</th>
                                            <th style="border-radius: 0 !important;">Payroll</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">March</td>
                                            <td style="border-radius: 0 !important;">Mr. Faheem</td>
                                            <td style="border-radius: 0 !important;">15.000 KWD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right" style="border-radius: 0 !important;">Total
                                                Payroll</td>
                                            <td style="border-radius: 0 !important;">15.000 KWD</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                {{-- <h6 class="">Miscellaneous</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>

                                            <th class="text-center" colspan="5" style="border-radius: 0 !important;">
                                                Miscellaneous</th>

                                        </tr> --}}
                                        <tr role="row">
                                            <th class="sr-no-header" style="  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Month</th>
                                            <th style="border-radius: 0 !important;">Description</th>
                                            <th style="border-radius: 0 !important;">Miscellaneous Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">March</td>
                                            <td style="border-radius: 0 !important;">Food</td>
                                            <td style="border-radius: 0 !important;">10.000 KWD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right" style="border-radius: 0 !important;">Total Miscellaneous
                                                Amount</td>
                                            <td style="border-radius: 0 !important;">10.000 KWD</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                {{-- <h6 class="">Rent</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>
                                            <th class="text-center " colspan="5" style="border-radius: 0 !important;">Rent
                                            </th>
                                        </tr> --}}
                                        <tr role="row">
                                            <th class="sr-no-header" style="  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Month</th>
                                            <th style="border-radius: 0 !important;">Used By</th>
                                            <th style="border-radius: 0 !important;">Rent Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">March</td>
                                            <td style="border-radius: 0 !important;">Mr. Hamid</td>
                                            <td style="border-radius: 0 !important;">5.000 KWD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right" style="border-radius: 0 !important;">Total
                                                Rent</td>
                                            <td style="border-radius: 0 !important;">5.000 KWD</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                {{-- <h6 class="">Miscellaneous</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>

                                            <th class="text-center" colspan="5" style="border-radius: 0 !important;">
                                                Electricity</th>

                                        </tr> --}}
                                        <tr role="row">
                                            <th class="sr-no-header" style="  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Month</th>
                                            <th style="border-radius: 0 !important;">Consumption Unit</th>
                                            <th style="border-radius: 0 !important;">Bill Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">March</td>
                                            <td style="border-radius: 0 !important;">100.000</td>
                                            <td style="border-radius: 0 !important;">1500.000 KWD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right" style="border-radius: 0 !important;">Total
                                                Bill Amount</td>
                                            <td style="border-radius: 0 !important;">1500.000 KWD</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                {{-- <h6 class="">Miscellaneous</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>

                                            <th class="text-center" colspan="6" style="border-radius: 0 !important;">
                                                Petty Cash</th>

                                        </tr> --}}
                                        <tr role="row">
                                            <th class="sr-no-header" style="  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Recp No. / Cheque No.</th>
                                            <th style="border-radius: 0 !important;">Amout Deposited</th>
                                            <th style="border-radius: 0 !important;">Amount Withdrawn</th>
                                            <th style="border-radius: 0 !important;">Remaining Petty Cash</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">4233</td>
                                            <td style="border-radius: 0 !important;">10.000 KWD</td>
                                            <td style="border-radius: 0 !important;">5.000 KWD</td>
                                            <td style="border-radius: 0 !important;">5.000 KWD</td>
                                        </tr>
                                        {{-- <tr>
                                            <td colspan="5" class="text-right" style="border-radius: 0 !important;">Total Bill Amount</td>
                                            <td style="border-radius: 0 !important;">123243546</td>

                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="my-4">
                                {{-- <h6 class="">Miscellaneous</h6> --}}
                                <table id="dataTable">
                                    <thead>
                                        {{-- <tr>
                                            <th class="text-center" colspan="5" style="border-radius: 0 !important;">
                                                Reimburse</th>
                                        </tr> --}}
                                        <tr role="row">
                                            <th class="sr-no-header" style="  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Description</th>
                                            <th style="border-radius: 0 !important;">Employee Name</th>
                                            <th style="border-radius: 0 !important;">Reimburse Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;">1</td>
                                            <td style="border-radius: 0 !important;">21/03/2024</td>
                                            <td style="border-radius: 0 !important;">100.000 KWD given to abc</td>
                                            <td style="border-radius: 0 !important;">abc</td>
                                            <td style="border-radius: 0 !important;">100.000 KWD</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right" style="border-radius: 0 !important;">
                                                Total Reimburse Amount</td>
                                            <td style="border-radius: 0 !important;">100.000 KWD</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-section bg-white">
                                <h6 class="card-title m-b-15">Client details</h6>
                                <hr class="border-top-grey">
                                <div class="card-body">
                                    <table class="table table-striped table-border">
                                        <tbody>
                                            <tr>
                                                <td>Company Name:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Project:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Email:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Mobile:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Landline:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Location:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Country:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Company Website:</td>
                                                <td class="text-right"><a href="#"></a></td>
                                            </tr>
                                            <tr>
                                                <td>Company Remarks</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Created Date:</td>
                                                <td class="text-right"><a href="#"></a></td>
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
                                                <td>Project Name:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Email:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Mobile:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Location:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Value:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Revenue:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Expenses:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Country:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Project Remarks:</td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td>Created Date:</td>
                                                <td class="text-right"><a href="#"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
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
