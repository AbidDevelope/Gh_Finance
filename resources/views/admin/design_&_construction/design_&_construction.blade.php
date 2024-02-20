<style>
    .bg_button{
        background-color: #62549C !important;
        color: white;
    }
    .bg_button:hover{
        background-color: #62549C !important;
        color: white;
    }
    .margin_top{
        margin-top: -100px !important;
    }
    /* .ml-5{
        margin-right: -35px !important;
    } */
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="d-flex">
                                        <div class=" mt-5">
                                            <div class="form-group">
                                                <label for="dateInput" class="text-black-50">Select Start Date:</label>
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text" name="start_date" id="start_date" placeholder="DD/MM/YYYY" class="form-control bg-white rounded text-black-50"
                                                    id="dateInput" style="width: 230px; height: 35px;">
                                                    {{-- <input id="search" type="text" class="bg-white form-control rounded-pill"
                                                    style="width: 230px; height: 40px;" placeholder="search"> --}}
                                            </div>
                                        </div>
                                        <div class="container mt-5 d-flex gap-4 ">
                                            <div class=" form-group">
                                                <label for="dateInput" class="text-black-50">Select End Date:</label>
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text" id="end_date" class="form-control bg-white text-black-50 rounded"
                                                name="end_Date" placeholder="DD/MM/YYYY" style="width: 230px; height: 35px;">
                                            </div>
                                            <div class="form-group" style="margin-top: 25px;">
                                                <button class="btn-search btn bg_button text-white bg-gray-100 "
                                                    type="button ">Search </button>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h5 class=""><span>Design & Construction</span></h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ml-5 text-right">
                                <div class="table-actions">
                                    <a href="{{ route('design_&_construction/create') }}"
                                        class="btn bg_button text-white rounded f-14 p-2 mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                        <i class="fa fa-plus"></i> Create
                                    </a>
                                    <a href="#"
                                        class="btn dt-buttons rounded f-14 p-2 mr-3 mb-2 mb-lg-0 mb-md-0 float-left">
                                        <i class="fa fa-file-export"></i> Export
                                    </a>
                                </div>
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
                                            <th>Sr. No.</th>
                                            <th>Project Id</th>
                                            <th>Date</th>
                                            <th>Project Type</th>
                                            <th>Project Name</th>
                                            <th>Mobile</th>
                                            <th>Project value</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($projects) > 0)
                                            @foreach ($projects as $index => $project)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $project->id }}</td>
                                                    <td>{{ $project->created_at->format('d M Y') }}</td>
                                                    <td>{{ $project->project_type }}</td>
                                                    <td>{{ $project->project_name }}</td>
                                                    <td>{{ $project->project_mobile }}</td>
                                                    <td>{{ $project->project_value }}</td>
                                                    <td class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon " data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('design_&_construction/view', $project->id) }}"><i
                                                                        class="fa fa-eye m-r-5"></i> View
                                                                </a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('design_&_construction/edit', $project->id) }}"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('design_&_construction/delete', $project->id) }}"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="odd">
                                                <td valign="top" colspan="7" class="dataTables_empty">No data available
                                                    in
                                                    table
                                                </td>
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
