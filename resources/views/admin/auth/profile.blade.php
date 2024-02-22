<style>
    .m {
        margin-top: 50px !important;
        margin-left: 12px !important;
        margin-right: 12px !important;
    }
    .bg_button {
        background-color: var(--own-black) !important;
        color: white;
    }

    .bg_button:hover {
        background-color: var(--own-black) !important;
        color: white;
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row margin_top px-2 m">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadow bg-white p-3 rounded">
                            <h1>My Profile</h1>
                            <div class="profile-form mt-5">
                                <form id="profileForm">
                                    <div class="mb-3">
                                        <label for="name">Name:</label>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="name" contenteditable="true">Admin</span>
                                        <span class="mt-1 ms-2 icon nalika-edit author-log-ic"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="email" contenteditable="true">stackdeveloper763@gmail.com</span>
                                        <span class="mt-1 ms-2 icon nalika-edit author-log-ic"></span>

                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Phone Number:</label>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="phone" contenteditable="true">123-456-7890</span>
                                        <span class="mt-1 ms-2 icon nalika-edit author-log-ic"></span>

                                    </div>
                                    <div class="mb-3">
                                        <label for="website">Website URL:</label>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="website" contenteditable="true">https://example.com</span>
                                        <span class="mt-1 ms-2 icon nalika-edit author-log-ic"></span>

                                    </div>
                                    <div class="mb-3">
                                        <label for="landline">Landline Number:</label>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="landline" contenteditable="true">123-456-7890</span>
                                        <span class="mt-1 ms-2 icon nalika-edit author-log-ic"></span>

                                    </div>
                                    <div class="mb-3">
                                        {{-- <input type="submit" value="Save Changes"> --}}
                                        <button class="btn-search btn bg_button text-white bg-gray-100 "
                                                    type="submit ">Save Changes </button>
                                    </div>
                                </form>
                            </div>


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
