<style>
    .bg_button {
        background-color: #0F1316 !important;
        color: white;
    }

    .margin_top {
        margin-top: -100px !important;
    }

    .margin_bottom {
        padding-top: 130px !important;
    }
    .bg_button:hover {
        background-color: #0F1316 !important;
        color: white;
    }

    .pb {
        margin-bottom: -50px !important;
    }
</style>


@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" style="background:white">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top px-2">

                        <div class="container margin_bottom">
                            <div class="">
                                <h4 class="pb text-headings">Quotations</h4>
                            </div>
                            <div class=" text-right">
                                <div class="table-actions">
                                    <a href="{{ route('quotations/create') }}"
                                        class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                        <i class="fa fa-plus"></i> Create
                                    </a>
                                    <a href="#"
                                        class="btn  border rounded f-14  mr-3 mb-2 mb-lg-0 mb-md-0 float-left"
                                        style="border-color: #0F1316 !important;">
                                        <i class="fa fa-file-export"></i> Export
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <div class="s002"> --}}
                                <form action="{{ route('search/quotation') }}" method="GET">
                                    @csrf
                                    <div class="d-flex">
                                        <div class="">
                                            <div class="form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select Start Date:</label> --}}
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text" id="start_date" name="start_date" placeholder="Select Start Date" class="form-control bg-white rounded text-black-50"
                                                 style="width: 230px; height: 35px;">
                                                 @if ($errors->has('start_date'))
                                                 <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                             @endif

                                            </div>
                                        </div>
                                        <div class="container d-flex gap-4 ">
                                            <div class=" form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select End Date:</label> --}}
                                                <input type="text" id="end_date" class="form-control bg-white text-black-50 rounded"
                                                name="end_date" placeholder="Select End Date" style="width: 230px; height: 35px;">
                                                @if ($errors->has('end_date'))
                                                    <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                                @endif

                                            </div>
                                            <div class="form-group" style="margin-top: 0px;">
                                                <button class="btn-search btn bg_button text-white bg-gray-100 "
                                                    type="submit ">Search </button>

                                            </div>
                                        </div>
                                        <div class="container " >

                                        </div>
                                    </div>
                                </form>
                            {{-- </div> --}}
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id="dataTable">
                                <thead>
                                    <tr role="row">
                                        <th style="width: 70px !important; border-radius: 0 !important;">Sr. No</th>
                                        <th style="border-radius: 0 !important;">Project Id</th>
                                        <th style="border-radius: 0 !important;">Quotation Number</th>
                                        <th style="border-radius: 0 !important;">Quotation Date </th>
                                        <th style="border-radius: 0 !important;">Amount</th>
                                        <th style="border-radius: 0 !important;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($quotations) > 0)
                                        @foreach ($quotations as $index => $quotation)
                                            <tr>
                                                <td style="border-radius: 0 !important;">{{ $index + 1 }}</td>
                                                <td style="border-radius: 0 !important;">{{ $quotation->project_id }}</td>
                                                <td style="border-radius: 0 !important;">{{ $quotation->quotation_number }}</td>
                                                <td style="border-radius: 0 !important;">{{ \Carbon\Carbon::parse($quotation->quotation_date)->format('d/m/Y') }}
                                                </td>
                                                <td style="border-radius: 0 !important;">{{ $quotation->grandtotal }}</td>
                                                <td style="border-radius: 0 !important;" class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon " data-toggle="dropdown"
                                                            aria-expanded="false"><img
                                                                src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                alt=""></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('quotation/view', $quotation->id) }}"><i
                                                                    class="fa fa-eye m-r-5"></i> View
                                                            </a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa fa-eye m-r-5"></i> View PDF
                                                            </a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                                                            <a class="dropdown-item" href="#"><i
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
        <!-- Static Table End -->
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


    <script>
        function switchLanguage(locale) {
            axios.post('/lang', {
                    locale: locale
                })
                .then(response => {
                    // Assuming the response contains the updated content
                    updateContent(response.data);
                })
                .catch(error => {
                    console.error(error);
                });
        }

        function updateContent(data) {
            // Assuming you have elements with specific IDs to update the content
            document.getElementById('englishContent').innerHTML = data.en;
            document.getElementById('arabicContent').innerHTML = data.ar;
        }
    </script>
    {{-- Data Table js code --}}
    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script>
        let table = new DataTable('#dataTable');
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
