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
.padding_y{
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
                                <h4 class="mt-3"style="color: var(--own-black)">Project Report</h4>
                                <button type="type" id="export"
                                class="padding_y mt-3 btn border rounded f-14 mr-3  mb-lg-0 mb-md-0 float-left"
                                style="border-color: var(--own-black) !important;">
                                <i class="fa fa-file-export"></i> Export
                            </button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            {{-- <div class="s002"> --}}
                            <form action="{{ route('searchByDate') }}" method="GET">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class=" ">
                                            <div class="form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select Start Date:</label> --}}
                                                <input type="text" name="start_date"
                                                placeholder="Select Start Date"
                                                class="form-control placeholder bg-white rounded text-black-50 datepicker cursor"
                                                style="width: 230px; height: 35px;box-shadow: none; border: 1px solid  var(--own-black);" value="{{ request('start_date') }}">
                                                @if ($errors->has('start_date'))
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="container  d-flex gap-4 ">
                                            <div class=" form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select End Date:</label> --}}
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text"
                                                    class="form-control placeholder bg-white text-black-50 rounded datepicker cursor" name="end_date"
                                                    placeholder="Select End Date" value="{{ request('end_date') }}" style="box-shadow: none; border: 1px solid  var(--own-black); width: 230px; height: 35px;">
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
                                            <option class="" value="" style="" selected>Select Project Type
                                            </option>
                                            {{-- <option value="All">All</option> --}}
                                            <option class=" " value="Design">Design</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Design & Construction">Design & Construction</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if (Session::has('success'))
                                <div class="alert alert-success" id="successAlert">
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
                                            <th style="border-radius: 0 !important;">Payment Method</th>
                                            <th style="border-radius: 0 !important;">Project ID</th>
                                            <th style="border-radius: 0 !important;">Project Type</th>
                                            <th style="border-radius: 0 !important;">Project Name</th>
                                            <th style="border-radius: 0 !important;">Project Manager</th>
                                            <th style="border-radius: 0 !important;">Revenue</th>
                                            <th style="border-radius: 0 !important;">Expenses</th>
                                            <th style="border-radius: 0 !important;">Receivables</th>
                                            <th style="border-radius: 0 !important;">Pending Receivables</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $index=>$project)
                                        <tr>
                                            <td style="border-radius: 0 !important;">{{ $index+1 }}</td>
                                            <td style="border-radius: 0 !important;">{{ \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') }}</td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;"></td>
                                            <td style="border-radius: 0 !important;">{{ $project->project_type }}</td>
                                            <td style="border-radius: 0 !important;">{{ $project->project_name }}</td>
                                            <td style="border-radius: 0 !important;">{{ $project->project_manager }}</td>
                                            <td style="border-radius: 0 !important;">{{ $project->project_value }}</td>
                                            <td style="border-radius: 0 !important;">{{ 'N/A' }}</td>
                                            <td style="border-radius: 0 !important;">{{ $project->total_receivable ?? 'N/A' }}</td>
                                            <td style="border-radius: 0 !important;">{{ $project->project_value - $project->total_receivable  }}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="grand_Value">
                                            <td class="hid"
                                                style=" border-right-color: transparent; border-radius: 0 !important;">1
                                            </td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                02/2024</td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                </td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                </td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                design</td>
                                            <td class="hid"
                                                style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                                Kuwait metro</td>
                                            <td class=""
                                                style="text-nowrap font-weight: bold; border-left-color: transparent;border-radius: 0 !important;">
                                                Grand
                                                Total</td>
                                            <td class="" style="font-weight: bold; border-radius: 0 !important;">
                                                {{ $formattedValue }} KWD
                                            </td>
                                            <td class="" style="font-weight: bold; border-radius: 0 !important;">
                                                {{ $totalExpenseValueFormatted }} KWD</td>
                                            <td class=""
                                                style="font-weight: bold; border-radius: 0 !important;">
                                                {{ $formattedValueReceivable }} KWD</td>
                                            <td class=""
                                                style="font-weight: bold; border-radius: 0 !important;">{{ $formattedValuePendingReceivable }} KWD</td>

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
    let dataTable = $('#dataTable').DataTable();
  </script>
    {{-- Data trigger --}}
    <script src="{{ asset('assets/admin/js/extention/choices.js') }}"></script>
    <script src="{{ asset('assets/admin/js/extention/flatpickr.js') }}"></script>

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
     $(document).ready(function(){
        $('.datepicker').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
        });
     });
    </script>
    <script>
        setTimeout(function(){
            document.getElementById('successAlert').style.display = 'none';
        }, 5000);
    </script>

<script>
    document.getElementById('project-type-select').addEventListener('change', function() {
        var selectedProjectType = this.value.toLowerCase();
        var rows = document.querySelectorAll('#dataTable tbody tr');

        rows.forEach(function(row) {
            var projectTypeCell = row.cells[3].textContent.toLowerCase();
            if (selectedProjectType === '' || selectedProjectType === projectTypeCell) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

@endsection
