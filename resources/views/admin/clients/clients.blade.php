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
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_bottom">
                            <div class="d-flex justify-content-between ">
                                <h4 class=""style="color: var(--own-black)">Clients</h4>
                                <div class="">
                                    <a href="#"
                                        class="btn padding_y border rounded f-14 p- mr-3 mb-2 mb-lg-0 mb-md-0 float-left"
                                        style="border-color: #0F1316 !important;">
                                        <i class="fa fa-file-export"></i> Export
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">

                            <form>
                                <select class="form-control cursor placeholder bg-white rounded text-black"
                                    name="project_type" id="project-type-select" onchange="this.form.submit()"
                                    style="width: 230px; height: 35px; box-shadow: none; border: 1px solid var(--own-black);">
                                    <option value="" {{ $selectedType === null ? 'selected' : '' }}>All</option>
                                    @foreach ($serviceType as $type)
                                        @if ($type)
                                            <option value="{{ $type }}"
                                                {{ (string) $type === (string) $selectedType ? 'selected' : '' }}>
                                                {{ $type }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-3">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 ">
                        <div class="mx-3">
                            <table id="dataTable">
                                <thead>
                                    <tr role="row">
                                        <th style="width: 70px !important; border-radius: 0 !important;">Sr. No.</th>
                                        <th style="border-radius: 0 !important;">First Name</th>
                                        <th style="border-radius: 0 !important;">Last Name</th>
                                        <th style="border-radius: 0 !important;">Service Type</th>
                                        <th style="border-radius: 0 !important;">Mobile</th>
                                        <th style="border-radius: 0 !important;">Email</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @if (count($clients) > 0)
                                        @foreach ($clients as $index => $client)
                                            <tr>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $index + 1 }}</td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $client->first_name }}
                                                </td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $client->last_name }}</td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $client->project_type }}</td>
                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $client->client_mobile }}</td>

                                                <td class="text-center" style="border-radius: 0 !important;">
                                                    {{ $client->client_email }}
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
                dateFormat: 'dd/mm/yy',
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectType = document.querySelector('select[name="project_type"]');
        });
    </script>
@endsection
