<style>
    .bg {
        background-color: #fff !important;
        color: var(--own-black) !important;
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
    .placeholder::placeholder{
        font-size:15px !important;
    }
    .cursor:hover {
    cursor: pointer;
}
.padding_y{
    padding-top: 0.29rem !important;
    padding-bottom: 0.29rem !important;
    height: 35px;
}
</style>


@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            <div class="d-flex justify-content-between ">
                                <h4 class=" text-headings "style="color: var(--own-black)">Miscellaneous</h4>
                                <div class="">
                                    <a href="{{ route('miscellaneous/create') }}"
                                        class="btn bg_button padding_y text-white rounded f-1 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                        <i class="fa fa-plus"></i>&nbsp; Create
                                    </a>
                                    <a href="{{ route('miscellaneous/export') }}"
                                        class="btn padding_y border rounded f-14 p- mr-3 mb-2 mb-lg-0 mb-md-0 float-left" style="border-color: #0F1316 !important;">
                                        <i class="fa fa-file-export"></i> Export
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                            {{-- <div class="s002"> --}}
                                <form action="{{ route('search/miscellaneous') }}" method="GET">
                                    @csrf
                                    <div class="d-flex">
                                        <div class="">
                                            <div class="form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select Start Date:</label> --}}
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text" id="start_date" name="start_date"
                                                    placeholder="Select Start Date"
                                                    class="form-control placeholder cursor bg-white rounded text-black-50"
                                                    style="width: 230px; height: 35px;box-shadow: none; border: 1px solid  var(--own-black);" value="{{ old('start_date') }}">
                                                @if ($errors->has('start_date'))
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="container d-flex gap-4 ">
                                            <div class=" form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select End Date:</label> --}}
                                                <input type="text" id="end_date"
                                                    class="form-control placeholder cursor bg-white text-black-50 rounded" name="end_date"
                                                    placeholder="Select End Date" value="{{ old('end_date') }}" style="width: 230px; height: 35px;box-shadow: none; border: 1px solid  var(--own-black);">
                                                @if ($errors->has('end_date'))
                                                    <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                                @endif

                                            </div>
                                            <div class="form-group" style="margin-top: ;">
                                                <button class="btn-search padding_y btn bg_button text-white bg-gray-100 "
                                                    type="submit ">Search </button>

                                            </div>
                                        </div>
                                        <div class="container ">

                                        </div>
                                    </div>
                                </form>
                            {{-- </div> --}}
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-success">
                                    {{ Session::get('error') }}
                                </div>
                            @endif

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                            <div class="">
                                <table id="dataTable">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 70px !important; border-radius: 0 !important;">Id</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Total Amount</th>
                                            <th style="border-radius: 0 !important;" class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($miscell) > 0)
                                            @foreach ($miscell as $index => $item)
                                                <tr>
                                                    <td style="border-radius: 0 !important;">
                                                        {{ $index + 1 }}
                                                    </td>
                                                    <td style="border-radius: 0 !important;">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $item->grandtotal }}</td>
                                                    <td style="border-radius: 0 !important;" class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon " data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('miscellaneous/view', $item->id) }}"><i
                                                                        class="fa fa-eye m-r-5"></i> View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('miscellaneous/edit', $item->id) }}"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('miscellaneous/delete', $item->id) }}"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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
        $(document).ready(function(){
            $('#dataTable').DataTable({
                'language' : {
                    'emptyTable' : 'No records available'
                }
            });
        });
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
