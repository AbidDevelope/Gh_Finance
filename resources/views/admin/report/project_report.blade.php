<style>
    .bg_button{
        background-color: #0f1316 !important;
        color: white;
    }
    .margin_top {
        margin-top: 40px !important;
    }
    .margin_bottom {
        margin-bottom: -100px !important;
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
    <div class="all-content-wrapper bg-white">
        <div class="header-advance-area ">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top  ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            <h4 class="mt-3">Reports</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="d-flex gap-3">
                                        <div class="">
                                            <div class="form-group">

                                                <input type="date" name="start_date" id="start_date" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="dateInput" style="width: 130px; height: 35px;">

                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-group">

                                                <input type="date" name="start_date" id="start_date" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="dateInput" style="width: 130px; height: 35px;">

                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
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
                                            <th style="width: 70px !important;  border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Project Type</th>
                                            <th style="border-radius: 0 !important;">Project Name</th>
                                            <th style="border-radius: 0 !important;">Revenue</th>
                                            <th style="border-radius: 0 !important;">Expenses</th>
                                            <th style="border-radius: 0 !important;">Mobile</th>
                                            <th style="border-radius: 0 !important;">Project Value</th>
                                            <th style="border-radius: 0 !important;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                                <tr>
                                                    <td style="border-radius: 0 !important;">1</td>
                                                    <td style="border-radius: 0 !important;">21/2/2024</td>
                                                    <td style="border-radius: 0 !important;">design</td>
                                                    <td style="border-radius: 0 !important;">delhi metro</td>
                                                    <td style="border-radius: 0 !important;">5.000KWD</td>
                                                    <td style="border-radius: 0 !important;">4.000KWD</td>
                                                    <td style="border-radius: 0 !important;">123243546</td>
                                                    <td style="border-radius: 0 !important;">10000.000KWD</td>

                                                    <td style="border-radius: 0 !important;" class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon " data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('report/view') }}"><i
                                                                        class="fa fa-eye m-r-5"></i> View
                                                                </a>

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
