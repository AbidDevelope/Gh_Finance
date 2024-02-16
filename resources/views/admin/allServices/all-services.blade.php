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
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>

                                    <div class="d-flex" >
                                        <div class="form-group">
                                            <label for="dateInput">Select Start Date:</label>
                                            <input
                                              type="date"
                                              class="form-control bg-white text-black"
                                              id="dateInput"
                                              placeholder="dd/mm/yyyy"
                                            />
                                          </div>
                                        <div class="container mt-5 ">
                                            <div class="form-group">
                                              <label for="dateInput">Select End Date:</label>
                                              <!-- Input with Bootstrap styling -->
                                              <input type="date" class="form-control bg-white text-black" id="dateInput">
                                            </div>
                                          </div>
                                        <div class="container " style="margin-top: 75px;">
                                            <div class="form-group">
                                                <button class="btn-search btn btn-primary bg-gray-100 " type="button">SEARCH </button>

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
                                            <th>Mobile</th>
                                            <th>Project Value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($projects) > 0)
                                            @foreach ($projects as $index=>$project)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
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
                                                                    href="{{ route('all-services/view', $project->id) }}"><i
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
                                            @endforeach
                                        @else
                                            <tr class="odd">
                                                <td valign="top" colspan="6" class="dataTables_empty">No data available
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
@endsection
