<style>
    .bg_button{
        background-color: var(--own-black) !important;
        color: white;
    }
    .bg_button:hover{
        background-color: var(--own-black) !important;
        color: white;
    }
    .margin_top {
        margin-top: -100px !important;
    }

    .margin_bottom {
        padding-top: 130px !important;
    }
    .pb{
        margin-bottom: -50px !important;
    }
    .placeholder::placeholder{
        font-size:15px !important;
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper px-2">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top">

                        <div class="container margin_bottom">
                            <div class="pb">
                                <h4 class="mt-3">Constructions</h4>
                            </div>
                            <div class=" text-right">
                                <div class="table-actions">
                                    <a href="{{ route('create/constructions') }}"
                                        class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                        <i class="fa fa-plus"></i> Create
                                    </a>

                                    <a href="#"
                                    class="btn  border rounded f-14 p- mr-3 mb-2 mb-lg-0 mb-md-0 float-left" style="border-color: #0F1316 !important;">
                                    <i class="fa fa-file-export"></i> Export
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <div class="s002"> --}}
                                <form action="{{ route('search/construction') }}" method="GET">
                                    @csrf
                                    <div class="d-flex">
                                        <div class=" ">
                                            <div class="form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select Start Date:</label> --}}
                                                <!-- Input with Bootstrap styling -->
                                                <input type="text" id="start_date" name="start_date" placeholder="Select Start Date" class="form-control bg-white rounded text-black-50 datepicker"
                                                 style="width: 230px; height: 35px;" value="{{ old('start_date') }}">
                                                 @if ($errors->has('start_date'))
                                                 <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                             @endif

                                            </div>
                                        </div>
                                        <div class="container d-flex gap-4 ">
                                            <div class=" form-group">
                                                {{-- <label for="dateInput" class="text-black-50">Select End Date:</label> --}}
                                                <input type="text" id="end_date" class="form-control bg-white text-black-50 rounded datepicker"
                                                name="end_date" placeholder="Select Start Date"  value="{{ old('end_date') }}" style="width: 230px; height: 35px;">
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
                                            <th style="width: 70px !important; border-radius: 0 !important;">Sr. No.</th>
                                            <th style="border-radius: 0 !important;">Project Id</th>
                                            <th style="border-radius: 0 !important;">Date</th>
                                            <th style="border-radius: 0 !important;">Project Type</th>
                                            <th style="border-radius: 0 !important;">Project Name</th>
                                            <th style="border-radius: 0 !important;">Mobile</th>
                                            <th style="border-radius: 0 !important;">Project Value</th>
                                            <th style="border-radius: 0 !important;" class="txt-right"e>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($projects) > 0)
                                            @foreach ($projects as $index => $project)
                                                <tr>
                                                    <td style="border-radius: 0 !important;">{{ $index + 1 }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $project->id }}</td>
                                                    <td style="border-radius: 0 !important;">{{ \Carbon\Carbon::parse($project->date)->format('d/m/Y') }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $project->project_type }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $project->project_name }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $project->project_mobile }}</td>
                                                    <td style="border-radius: 0 !important;">{{ $project->project_value }}</td>
                                                    <td style="border-radius: 0 !important;" class="text-right">
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
        const choices = new Choices('[data-trigger]', {
            searchEnabled: false,
            itemSelectText: '',
        });
    </script>
{{-- Date Format  --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy'
        });
    });
    </script>
{{-- date Format --}}
@endsection
