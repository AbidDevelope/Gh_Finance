<style>
    .bg_button {
        background-color: var(--own-black) !important;
        color: white;
    }

    .margin_top {
        margin-top: -30px !important;
    }

    .margin_bottom {
        padding-top: 50px !important;
    }

    .placeholder::placeholder {
        font-size: 15px !important;
    }

    .hid {
        color: transparent !important;
    }

    .cursor:hover {
        cursor: pointer;
    }

    .padding_y {
        padding-top: 0.29rem !important;
        padding-bottom: 0.29rem !important;
        height: 35px;
    }
</style>

<script>
    const dateInput = document.getElementById("dateInput");

    // Set the placeholder dynamically to "dd/mm/yyyy"
    dateInput.placeholder = "dd/mm/yyyy";

    dateInput.addEventListener("input", function() {
        const currentValue = dateInput.value;
        if (currentValue) {
            const date = new Date(currentValue);
            const day = String(date.getDate()).padStart(2, "0");
            const month = String(date.getMonth() + 1).padStart(2, "0");
            const year = date.getFullYear();
            const formattedDate = `${day}-${month}-${year}`;
            dateInput.value = formattedDate;
            console.log(formattedDate);
        }
    });
</script>


@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper bg-white">
        <div class="header-advance-area ">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            <div class="d-flex justify-content-between">
                                <h4 class="mt-3"style="color: var(--own-black)">Expense Report</h4>
                                <button type="type" id="export"
                                    class="padding_y mt-3 btn border rounded f-14 mr-3  mb-lg-0 mb-md-0 float-left"
                                    style="border-color: var(--own-black) !important;">
                                    <i class="fa fa-file-export"></i> Export
                                </button>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">

                            <form action="{{ route('search/filter') }}" method="GET">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class=" ">
                                            <div class="form-group">
                                                <input type="text" name="start_date" id="start_date"
                                                    placeholder="Select Start Date"
                                                    class="form-control cursor placeholder bg-white rounded text-black-50"
                                                    style="width: 230px; height: 35px; box-shadow: none; border: 1px solid var(--own-black);"
                                                    value="{{ old('start_date') }}">
                                                @if ($errors->has('start_date'))
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="container  d-flex gap-4 ">
                                            <div class=" form-group">

                                                <input type="text" id="end_date"
                                                    class="form-control cursor placeholder bg-white  rounded"
                                                    name="end_date" placeholder="Select End Date"
                                                    style="width: 230px; height: 35px; box-shadow: none; border: 1px solid var(--own-black);"
                                                    value="{{ old('end_date') }}">
                                                @if ($errors->has('end_date'))
                                                    <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                                @endif

                                            </div>
                                            <div class="form-group" style="margin-top: ;">
                                                <button class="btn-search btn padding_y bg_button text-white bg-gray-100 "
                                                    type="submit">Search </button>
                                            </div>

                                        </div>

                                    </div>
                                    <div>
                                        <select class="form-control  cursor placeholder bg-white rounded text-black"
                                            name="Project_type" id="project-type-select"
                                            class=" form-control"style="width: 230px; height: 35px; box-shadow: none; border: 1px solid var(--own-black);">
                                            <option class="" value="" style="" selected>Select Project
                                                Type
                                            </option>
                                            <option class=" " value="Design">Design</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Design & Construction">Design & Construction</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

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
                                            <th style="width: 70px !important;  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Month</th>
                                            <th style="border-radius: 0 !important;">Payroll</th>
                                            <th style="border-radius: 0 !important;">Miscellaneous</th>
                                            <th style="border-radius: 0 !important;">Rent</th>
                                            <th style="border-radius: 0 !important;">Electricity</th>
                                            <th style="border-radius: 0 !important;">Petty Cash</th>
                                            <th style="border-radius: 0 !important;">Reimburse</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>

                                        </tr>
                                    </tbody>
                                    <tfoot>

                                        <tr class="grand_Value">
                                            <td class="hid"
                                                style=" border-right-color: transparent; border-radius: 0 !important;">1
                                            </td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                02/2024</td>

                                            <td class=""
                                                style="font-weight: bold; border-left-color: transparent;border-radius: 0 !important;">
                                                Grand
                                                Total</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                5000.000 KWD</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                5000.000 KWD</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                5000.000 KWD</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                1600.000 KWD</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                3000.000 KWD</td>
                                            <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                                2000.000 KWD</td>

                                        </tr>
                                    </tfoot>
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

    {{-- CSV file --}}
    {{-- <script>
        function exportTablesToCSV() {
            var tables = document.querySelectorAll('table'); // Get all tables

            var csvContent = "";

            tables.forEach(function(table) {
                var rows = table.querySelectorAll('tr');

                rows.forEach(function(row) {
                    var cells = row.querySelectorAll('th, td');
                    var rowData = Array.from(cells).map(cell => cell.textContent.trim()).join(',');

                    csvContent += rowData + '\n';
                });

                csvContent += '\n'; // Add a newline between tables
            });

            // Create a Blob containing the CSV data
            var blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });

            // Create a temporary URL to the Blob
            var url = URL.createObjectURL(blob);

            // Create a link element and trigger a download
            var link = document.createElement("a");
            link.setAttribute("href", url);
            link.setAttribute("download", "exported_tables.csv");
            document.body.appendChild(link);
            link.click();

            // Cleanup
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        }

        document.getElementById('downloadCSV').addEventListener('click', function() {
            // Redirect to the route that triggers the CSV download
            window.location.href = "{{ route('report/download_csv') }}";
        });
    </script> --}}

    {{-- dropdown search --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('select[name="Project_type"]').change(function() {
                var selectedOption = $(this).val(); // Get the selected option value
                if (selectedOption) {
                    // Show all table rows
                    $('#dataTable tbody tr').show();
                    // Hide rows that don't match the selected option
                    $('#dataTable tbody tr').each(function() {
                        var projectType = $(this).find('td:nth-child(3)').text().toLowerCase(); // Get text of the third td element and convert to lowercase
                        if (projectType !== selectedOption.toLowerCase()) {
                            $(this).hide();
                        }
                    });
                } else {
                    // If no option is selected, show all table rows
                    $('#dataTable tbody tr').show();
                }
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('select[name="Project_type"]').change(function() {
                var selectedOption = $(this).val(); // Get the selected option value
                if (selectedOption) {
                    // Show all table rows
                    $('#dataTable tbody tr').show();
                    // Hide rows that don't match the selected option, excluding those with class 'hid'
                    $('#dataTable tbody tr').not('.hid').each(function() {
                        var projectType = $(this).find('td:nth-child(3)').text()
                            .toLowerCase(); // Get text of the third td element and convert to lowercase
                        if (projectType !== selectedOption.toLowerCase()) {
                            $(this).hide();
                        }
                    });
                } else {
                    // If no option is selected, show all table rows
                    $('#dataTable tbody tr').show();
                }
            });
        });
    </script>
@endsection
