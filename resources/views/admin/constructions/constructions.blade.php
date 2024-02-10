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
                                    <div class="inner-form">
                                        <div class="input-field first-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l6 5.99L20.49 20l-5.99-6zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                </svg>
                                            </div>
                                            <input id="search" type="text" placeholder="Start typing to search">
                                        </div>
                                        <div class="input-field second-wrap">
                                            <div class="icon-wrap">

                                            </div>
                                            <input type="date" placeholder="30 Aug 2018">
                                        </div>
                                        <div class="input-field third-wrap">
                                            <div class="icon-wrap">

                                            </div>
                                            <input type="date" placeholder="30 Aug 2018">
                                        </div>
                                        <div class="input-field fouth-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="">Constructions</option>
                                            </select>
                                        </div>
                                        <div class="input-field fifth-wrap">
                                            <button class="btn-search" type="button">SEARCH</button>
                                        </div>
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
                                    <i class="fa fa-plus"></i> Create Project
                                </a>
                                <a href="#"
                                    class="btn dt-buttons rounded f-14 p-2 mr-3 mb-2 mb-lg-0 mb-md-0 float-left">
                                    <i class="fa fa-file-export"></i> Export
                                </a>
                            </div>
                        </div></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <span class="text-success text-center">{{ session('success') }}</span>
                            <span class="text-success text-center">{{ session('error') }}</span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Type</th>
                                            <th>Purchase From</th>
                                            <th>Purchase Date</th>
                                            {{-- <th>Purchased By</th> --}}
                                            <th class="text-center">Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)
                                            @foreach ($data as $index => $item)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $item->type }}</td>
                                                    <td>{{ $item->purchase_from }}</td>
                                                    <td>{{ $item->purchase_date }}</td>
                                                    {{-- <td><a>{{ $item->purchase_by }}</a></td> --}}
                                                    <td class="text-center">
                                                        <div class="dropdown action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                                href="#" data-toggle="dropdown" aria-expanded="false">
                                                                @if ($item->status == 'Approved')
                                                                    <i class="fa fa-dot-circle-o text-success"></i>
                                                                    {{ $item->status }}
                                                                @else
                                                                    <i class="fa fa-dot-circle-o text-danger"></i>
                                                                    {{ $item->status }}
                                                                @endif
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('designChangeStatus', $item->id) }}"><i
                                                                        class="fa fa-dot-circle-o text-danger"></i>
                                                                    Pending</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('designChangeStatus', $item->id) }}"><i
                                                                        class="fa fa-dot-circle-o text-success"></i>
                                                                    Approved</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon " data-toggle="dropdown"
                                                                aria-expanded="false"><img
                                                                    src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                    alt=""></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fa fa-eye m-r-5"></i> View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('constructions/edit', $item->id) }}"><i
                                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('constructions/delete', $item->id) }}"><i
                                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="odd">
                                                <td valign="top" colspan="9" class="dataTables_empty">No data available
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
