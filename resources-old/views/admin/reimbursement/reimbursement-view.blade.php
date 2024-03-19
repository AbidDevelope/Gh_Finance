<style>
    .margin_t{
        margin-top: -60px !important;
    }
</style>
@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" style="background:white">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="">
            
                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8 margin_t ">
                                <div class="form-section bg-white">
                                    <h6 class="card-title m-b-15">Details</h6>
                                    <hr class="border-top-grey">
                                    <div class="card-body">
                                        <table class="table table-striped table-border">
                                            <tbody>
                                                <tr>
                                                    <td>Date:</td>
                                                    <td class="text-right">{{ \Carbon\Carbon::parse($reimbursement->reimbursement_date)->format('d/m/Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Rent Others:</td>
                                                    <td class="text-right">{{ $reimbursement->others }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Rent GrandTotal:</td>
                                                    <td class="text-right">{{ $reimbursement->grandtotal }}</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>Total Payment:</td>
                                                    <td class="text-right">{{ $reimbursement->total_payment }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Rent Remarks:</td>
                                                    <td class="text-right">{{ $reimbursement->remarks }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Static Table Start -->

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

    {{-- Data Table js code --}}
    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $('#dataTable').DataTable();
    </script>
    {{-- Data trigger --}}
    <script src="{{ asset('assets/admin/js/extention/choices.js') }}"></script>
    <script src="{{ asset('assets/admin/js/extention/flatpickr.js') }}"></script>
    <script>
        flatpickr(".datepicker", {});
    </script>
    <script>
        const choices = new Choices('[data-trigger]', {
            searchEnabled: false,
            itemSelectText: '',
        });
    </script>
@endsection
