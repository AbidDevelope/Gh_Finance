<style>
    .bg {
        background-color: #fff !important;
        color: black !important;
    }


    .margin_top {
        margin-top: -100px !important;
    }

    .margin_bottom {
        padding-top: 130px !important;
    }

    .bg_button {
        background-color: var(--own-black) !important;
        color: white;
    }

    .bg_button:hover {
        background-color: var(--own-black) !important;
        color: white;
    }

    .pb {
        margin-bottom: -50px !important;
    }

    .placeholder::placeholder {
        font-size: 15px !important;
    }

    .cursor:hover {
        cursor: pointer;
    }

    .padding_y {
        padding-top: 0.29rem !important;
        padding-bottom: 0.29rem !important;
        height: 35px;
    }

    .hid {
        color: transparent !important;
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid px-4">
                    <div class="row margin_top px-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            <div class="d-flex justify-content-between ">
                                <h4 class=" text-headings"style="color: var(--own-black)">Indemnity & Leave</h4>
                                <div class="">
                                    <a href="{{ route('indemnity&leave/create') }}"
                                        class="btn bg_button padding_y text-white rounded f-1 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                        <i class="fa fa-plus"></i>&nbsp; Create
                                    </a>
                                    <button id="indemnityExport" 
                                        class="btn padding_y border rounded f-14 p- mr-3 mb-2 mb-lg-0 mb-md-0 float-left"
                                        style="border-color: #0F1316 !important;">
                                        <i class="fa fa-file-export"></i> Export
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-1">
                        <form action="{{ route('indemnity/import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex gap-4">
                                <input
                                    style="width: 230px; height: 35px;box-shadow: none; border: 1px solid var(--own-black);;"
                                    type ="file" name="file" class="form-control bg-white rounded text-black-50">
                                <button type="submit"
                                    style=" !important; background-color:var(--own-black) !important; color:white !important;"
                                    class="btn padding_y rounded f-14 mr-3 mb-2 mb-lg-0 mb-md-0 float-left">Import</button>
                                @if ($errors->has('file'))
                                    <span class="text-danger">{{ $errors->first('file') }}</span>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-4">
                        <form>
                            <select name="year" onchange="this.form.submit()" id="" class="form-control">
                                <option value="" selected>All</option>
                                @foreach ($availableYears as $availableYear)
                                    @if ($availableYear)
                                        <option value="{{ $availableYear }}"
                                            {{ (string) $availableYear === (string) $year ? 'selected' : '' }}>
                                            {{ $availableYear }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-1">
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
                                        <th class="text-center"
                                            style="width: 50px !important; border-radius: 0 !important;">Sr. No.</th>
                                        <th class="text-center"
                                            style="width: 70px !important; border-radius: 0 !important;">Date</th>
                                        <th class="text-center" style="border-radius: 0 !important;">Cheque No./Reciept
                                            No.</th>
                                        <th class="text-center" style="border-radius: 0 !important;">Beneficiary</th>
                                        <th class="text-center" style="border-radius: 0 !important;">Project</th>
                                        {{-- <th class="text-center" style="border-radius: 0 !important;">Service Type</th> --}}
                                        <th class="text-center" style="border-radius: 0 !important;">Amount Deposited</th>
                                        <th class="text-center" style="border-radius: 0 !important;">Amount Withdrawn</th>

                                        <th class="text-center"
                                            style="width: 50px !important; border-radius: 0 !important;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($expenses) --}}
                                    @if (count($indemnity) > 0)
                                        @foreach ($indemnity as $index => $item)
                                            <tr>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $index + 1 }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $item->cheque_number_receipt_number }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $item->beneficiary }}
                                                </td>

                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $item->project_name }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $item->amount_deposited }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $item->amount_withdrawn }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon" data-toggle="dropdown"
                                                            aria-expanded="false"><img
                                                                src="{{ asset('assets/admin/img/icon/action.png') }}"
                                                                alt=""></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('indemnity&leave/view', $item->id) }}"><i
                                                                    class="fa fa-eye m-r-5"></i> View</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('indemnity&leave/edit', $item->id) }}"><i
                                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('indemnity&leave/delete', $item->id) }}"><i
                                                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <!-- Table footer content here -->
                                    <tr class="grand_Value">
                                        <td class="hid"
                                            style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                            02/2024</td>
                                        <td class="hid"
                                            style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                            design</td>
                                        <td class="hid"
                                            style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                            Kuwait metro</td>
                                        <td class="hid"
                                            style="border-left-color: transparent; border-right-color: transparent;border-radius: 0 !important;">
                                            Kuwait metro</td>
                                        <td class=""
                                            style="font-weight: bold; border-left-color: transparent;border-radius: 0 !important;">
                                            Grand
                                            Total</td>
                                        <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                            {{ $totalIndemnity }}.000 KWD</td>
                                        <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                            {{ $totalWithdrawn }}.000 KWD</td>
                                        <td class="text-nowrap" style="font-weight: bold; border-radius: 0 !important;">
                                        </td>
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
        $(document).ready(function() {
            $('#dataTable').DataTable({
                'language': {
                    'emptyTable': 'No records available'
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
    {{-- date Format --}}
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const exptBtn = document.getElementById('indemnityExport');
            const yearSelect = document.querySelector("select[name='year']");

            exptBtn.addEventListener('click', function(){
                const year = yearSelect.value;
                let exportUrl =`{{ route('indemnity/export') }}`;
               if(year)
               {
                exportUrl += `?year=${year}`;
               } 
               window.location.href = exportUrl;
            });
            });
    </script>
@endsection
