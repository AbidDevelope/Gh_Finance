<style>
    .bg_button{
        background-color: #62549C !important;
        color: white;
    }
    .margin_top{
        margin-top: -100px !important;
    }
    .bg{
        background-color: white !important;
    }
</style>

<script>
const dateInput = document.getElementById("dateInput");

// Set the placeholder dynamically to "dd/mm/yyyy"
dateInput.placeholder = "dd/mm/yyyy";

dateInput.addEventListener("input", function () {
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
    <div class="all-content-wrapper bg">
        <div class="header-advance-area ">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top ">
                        {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="mt-3 text-black">Reports</h4>
                        </div> --}}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="d-flex gap-5">
                                        <div class=" mt-5">
                                            <div class="form-group">

                                                <input type="date" name="start_date" id="start_date" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="dateInput" style="width: 130px; height: 35px;">

                                            </div>
                                        </div>
                                        <div class=" mt-5">
                                            <div class="form-group">

                                                <input type="date" name="start_date" id="start_date" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="dateInput" style="width: 130px; height: 35px;">

                                            </div>
                                        </div>
                                        <div class=" mt-5">
                                            <div class="form-group">

                                                <input type="text" name="project_type" id="project_type" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="project_type" style="width: 130px; height: 35px;">
                                                    {{-- <input id="search" type="text" class="bg-white form-control rounded-pill"
                                                    style="width: 230px; height: 40px;" placeholder="search"> --}}
                                            </div>
                                        </div>
                                        <div class=" mt-5">
                                            <div class="form-group">

                                                <input type="text" name="revenue" id="revenue" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="revenue" style="width: 130px; height: 35px;">
                                                    {{-- <input id="search" type="text" class="bg-white form-control rounded-pill"
                                                    style="width: 230px; height: 40px;" placeholder="search"> --}}
                                            </div>
                                        </div>
                                        <div class=" mt-5">
                                            <div class="form-group">

                                                <input type="text" name="expenses" id="expenses" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="expenses" style="width: 130px; height: 35px;">
                                                    {{-- <input id="search" type="text" class="bg-white form-control rounded-pill"
                                                    style="width: 230px; height: 40px;" placeholder="search"> --}}
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="mt-3">All Services</h4>
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
                                            <th>Sr. No.</th>
                                            <th>Date</th>
                                            <th>Project Type</th>
                                            <th>Project Name</th>
                                            <th>Revenue</th>
                                            <th>Expenses</th>
                                            <th>Mobile</th>
                                            <th>Project Value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>21/2/2024</td>
                                                    <td>design</td>
                                                    <td>delhi metro</td>
                                                    <td>5.000KWD</td>
                                                    <td>4.000KWD</td>
                                                    <td>123243546</td>
                                                    <td>10000.000KWD</td>

                                                    <td class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon " data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="#"><i
                                                                        class="fa fa-eye m-r-5"></i> View
                                                                </a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="#"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

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
