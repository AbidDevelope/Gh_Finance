<style>
    .bg {
        background-color: #fff !important;
        color: black !important;
    }


    .margin_top {
        margin-top: -100px !important;
    }

    .margin_bottom {
        padding-top: 130px !important;
    }

    .bg_button {
        background-color: var(--own-black) !important;
        color: white;
    }

    .bg_button:hover {
        background-color: var(--own-black) !important;
        color: white;
    }


    .pb {
        margin-bottom: -50px !important;
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top px-2">

                        <div class="container margin_bottom">
                            <div class="pb">
                                <h4 class=" text-headings">Petty Cash</h4>
                            </div>
                            <div class="text-right">

                                    <div class="table-actions">
                                        <a href="{{ route('pettyCash/create') }}"
                                            class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                            <i class="fa fa-plus"></i> Create
                                        </a>
                                        <button type="type" id="export"
                                            class="btn border rounded f-14 p-    mr-3 mb-2 mb-lg-0 mb-md-0 float-left"
                                            style="border-color: var(--own-black) !important;">
                                            <i class="fa fa-file-export"></i> Export
                                        </button>
                                    </div>
                                    {{-- @csrf
                                <div>
                                    <input type ="file" name="file">
                                    <button type="submit" class="btn btn-primary mt-4">Export</button>
                                </div> --}}

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <div class="s002"> --}}
                            <form action="{{ route('search/filter') }}" method="GET">
                                @csrf
                                <div class="d-flex">
                                    <div class=" ">
                                        <div class="form-group">
                                            {{-- <label for="dateInput" class="text-black-50">Select Start Date:</label> --}}

                                            <input type="text" name="start_date" id="start_date"
                                                placeholder="Select Start Date"
                                                class="form-control bg-white rounded text-black-50"
                                                style="width: 230px; height: 35px;" value="{{ old('start_date') }}">
                                            @if ($errors->has('start_date'))
                                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="container  d-flex gap-4 ">
                                        <div class=" form-group">
                                            {{-- <label for="dateInput" class="text-black-50">Select End Date:</label> --}}
                                            <!-- Input with Bootstrap styling -->
                                            <input type="text" id="end_date"
                                                class="form-control bg-white text-black-50 rounded" name="end_date"
                                                placeholder="Select End Date" style="width: 230px; height: 35px;"
                                                value="{{ old('end_date') }}">
                                            @if ($errors->has('end_date'))
                                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                            @endif

                                        </div>
                                        <div class="form-group" style="margin-top: ;">
                                            <button class="btn-search btn bg_button text-white bg-gray-100 "
                                                type="submit">Search </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container">

                        <form action="{{ route('export-excel-csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex gap-4">
                                <input style="width: 230px; height: 35px;" type ="file" name="file" class="form-control bg-white rounded text-black-50">

                                <button type="submit" style="border-color: #0F1316 !important; background-color:#0F1316 !important; color:white !important;"
                                    class="btn border rounded f-14 mr-3 mb-2 mb-lg-0 mb-md-0 float-left">Import</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                        <div class="">
                            <table id="dataTable">
                                    <thead>
                                        <tr role="row">
                                            <th class="text-center" style="width: 70px !important; border-radius: 0 !important;">Sr. No.</th>
                                            <th class="text-center" style="border-radius: 0 !important;">Date</th>
                                            <th class="text-center" style="border-radius: 0 !important;">Project Name</th>
                                            <th>Beneficiary</th>
                                            <th class="text-center" style="border-radius: 0 !important;">Amount Deposited</th>
                                            <th class="text-center" style="border-radius: 0 !important;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @dd($expenses) --}}
                                        @if (count($expenses) > 0)
                                            @foreach ($expenses as $index => $item)
                                                <tr>
                                                    <td class="text-center" style="border-radius: 0 !important;">{{ $index + 1 }}</td>
                                                    <td class="text-center" style="border-radius: 0 !important;">{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                                                    <td class="text-center" style="border-radius: 0 !important;">{{ $item->project }}</td>
                                                    <td>{{ $item->beneficiary }}</td>
                                                    <td class="text-center" style="border-radius: 0 !important;">{{ $item->amount_deposited }}</td>
                                                    <td class="text-center" style="border-radius: 0 !important;">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon" data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('expenses/view', $item->id) }}"><i
                                                                        class="fa fa-eye m-r-5"></i> View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('expenses/edit', $item->id) }}"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('expenses/delete', $item->id) }}"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No Record Found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>

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

    {{-- Date Format  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- date Format --}}
    <script>
        var onDateSelect = function(selectedDate, input) {
            if (input.id === 'start_date') { //Start date selected - update End Date picker
                $("#end_date").datepicker('option', 'minDate', selectedDate);
            } else { //End date selected - update Start Date picker
                $("#start_date").datepicker('option', 'maxDate', selectedDate);
            }
        };
        var onDocumentReady = function() {
            var datepickerConfiguration = {
                dateFormat: "dd/mm/yy",
                onSelect: onDateSelect
            };
            ///--- Component Binding ---///
            $('#start_date, #end_date').datepicker(datepickerConfiguration);
        };
        $(onDocumentReady);
    </script>
@endsection
