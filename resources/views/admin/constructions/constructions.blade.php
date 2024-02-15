@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="d-flex" >
                                        <div class="container mt-5">
                                            <div class="form-group">
                                              <label for="dateInput">Select Start Date:</label>
                                              <!-- Input with Bootstrap styling -->
                                              <input type="date" class="form-control bg-white text-black" id="dateInput">
                                            </div>
                                          </div>
                                        <div class="container mt-5 ">
                                            <div class="form-group">
                                              <label for="dateInput">Select End Date:</label>
                                              <!-- Input with Bootstrap styling -->
                                              <input type="date" class="form-control bg-white text-black" id="dateInput">
                                            </div>
                                          </div>
                                        <div class="container " style="margin-top: 80px;">
                                            <div class="form-group">
                                                <button class="btn-search bg-gray-100 " type="button">SEARCH </button>

                                            </div>
                                          </div>
                                        </div>

                                    </form>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h4 class="mt-3">Constructions</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                                <div class="table-actions">
                                    <a href="{{ route('create/constructions') }}"
                                        class="btn btn-primary rounded f-14 p-2 mr-3 float-left mb-2 mb-lg-0 mb-md-0">
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Project Id</th>
                                            <th>Date</th>
                                            <th>Project Type</th>
                                            <th>Project Name</th>
                                            <th>Mobile</th>
                                            <th>Project Value</th>
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
                                                                    href="{{ route('construction/view', $project->id) }}"><i
                                                                        class="fa fa-eye m-r-5"></i> View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('construction/edit', $project->id) }}"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('construction/delete', $project->id) }}"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="odd">
                                                <td valign="top" colspan="7" class="dataTables_empty">No data available
                                                    in table </td>
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
