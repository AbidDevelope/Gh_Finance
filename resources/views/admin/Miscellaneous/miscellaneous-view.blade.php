@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" style="background:#F2F4F7">

        <div class="header-advance-area">

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-section">
                                    <h6 class="card-title m-b-15">Miscellaneous Details</h6>
                                    <hr class="border-top-grey">
                                    <div class="card-body">
                                        <div class="margin-top">
                                            <table class="products table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Month</th>
                                                        <th>Date</th>
                                                        <th>Total/K.D</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($miscell->miscellaneousItem as $key => $item)
                                                        <tr class="items">
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>{{ $item->month }}</td>
                                                            <td>{{ $item->date }}</td>
                                                            <td>{{ $item->total }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                <tr>
                                                    <td colspan="5" class="text-right">Sub Total :</td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                       {{ $miscell->subtotal }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        Others :
                                                    </td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        {{ $miscell->others }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: right; font-weight: bold">
                                                        Grand Total :
                                                    </td>
                                                    <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                        {{ $miscell->grandtotal }}
                                                    </td>
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
