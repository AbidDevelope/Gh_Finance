@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" style="background:#F2F4F7">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="d-flex">
                                        <div class="container mt-5">
                                            <div class="form-group">
                                                <label for="dateInput">Select Start Date:</label>
                                                <!-- Input with Bootstrap styling -->
                                                <input type="date" class="form-control bg-white text-black"
                                                    id="dateInput">
                                            </div>
                                        </div>
                                        <div class="container mt-5 ">
                                            <div class="form-group">
                                                <label for="dateInput">Select End Date:</label>
                                                <!-- Input with Bootstrap styling -->
                                                <input type="date" class="form-control bg-white text-black"
                                                    id="dateInput">
                                            </div>
                                        </div>
                                        <div class="container " style="margin-top: 75px;">
                                            <div class="form-group">
                                                <button class="btn-search btn btn-primary bg-gray-100 "
                                                    type="button">SEARCH </button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="container">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h4 class="mt-3 text-headings">Quotations</h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                            <div class="table-actions">
                                <a href="{{ route('quotations/create') }}"
                                    class="btn btn-primary rounded proposals-create f-14 p-2 mr-3 float-left mb-2 mb-lg-0 mb-md-0">
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
                            <table id="dataTable">
                                <thead>
                                    <tr role="row">
                                        <th>Sr. No</th>
                                        <th>Project Id</th>
                                        <th>Quotation Number</th>
                                        <th>Quotation Date </th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($quotations) > 0)
                                        @foreach ($quotations as $index=>$quotation)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $quotation->project_id }}</td>
                                                <td>{{ $quotation->quotation_number }}</td>
                                                <td>{{ \Carbon\Carbon::parse($quotation->quotation_date)->format('d M Y') }}</td>
                                                <td>{{ $quotation->grandtotal }}</td>
                                                <td class="text-right">
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
                                                                    <a class="dropdown-item"
                                                                href="#"><i
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
@endsection
