@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" style="background:#F2F4F7">

        <div class="header-advance-area">

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <div class="form-section">
                                    <h6 class="card-title m-b-15">Miscellaneous details</h6>
                                    <hr class="border-top-grey">
                                    <div class="card-body">
                                        <div class="margin-top">
                                            <table class="products table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Unit</th>
                                                        <th>Qty</th>
                                                        <th>Price/K.D</th>
                                                        <th>Total/K.D</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($invoices->invoiceItems as $key => $invoice)
                                                        <tr class="items">
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $invoice->description }}</td>
                                                            <td>{{ $invoice->unit }}</td>
                                                            <td>{{ $invoice->qty }}</td>
                                                            <td>{{ $invoice->price }}</td>
                                                            <td>{{ $invoice->total }}</td>
                                                        </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
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
