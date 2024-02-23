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

    .circular-pic {
        border-radius: 50%;
    }

    .position-absolute {
        position: absolute;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -50%);
    }

    .subchild {
        position: absolute;
        left: 60%;
        top: 57%;
        transform: translate(-50%, -50%);
    }

    .bg_button {
        background-color: var(--own-black) !important;
        color: white;
        position: absolute;
        left: 50%;
        top: 74%;
        transform: translate(-50%, -50%);
    }

    .bg_button:hover {
        background-color: var(--own-black) !important;
        color: white;
    }
</style>



</script>
@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row justify-content-center margin_top px-2 gap-5 m">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 shadow bg-white p-3 rounded position-relative">
                            <div class="subchild">
                                <input type="file" id="file-input" style="display: none;" accept="image/*">
                                <a href="#" class="d-flex text-black-50" id="change-profile-pic">
                                    <span class="mt-1 author-log-ic editIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square bg-white" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div id="saveButton" class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">Save</div>
                            <div id="profile-pic" class="circular-pic position-absolute">
                                <img src="/assets/admin/img/prof pic.jpg" alt="Profile Picture">
                            </div>
                        </div>


                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 shadow bg-white p-3 rounded">
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
                                        <button class="btn-search btn  text-white bg-gray-100 " type="submit ">Save
                                            Changes </button>
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
    <script>
       document.addEventListener('DOMContentLoaded', function() {
        var fileInput = document.getElementById('file-input');
        var editIcon = document.querySelector('.editIcon');
        var imgElement = document.querySelector('#profile-pic img');

        // Handle change event on the file input
        fileInput.addEventListener('change', function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var picUrl = e.target.result;

// console.log( imgElement.src)
                // Store the image URL in localStorage
                localStorage.setItem('profilePicUrl', picUrl);
            };

            reader.readAsDataURL(file);
        });

        // Handle click event on the edit icon
        editIcon.addEventListener('click', function(event) {
            event.preventDefault();
            fileInput.click();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var savedPic = localStorage.getItem('profilePicUrl');
        if (savedPic) {
            var imgElement = document.getElementById('profile-image');
            imgElement.src = savedPicUrl;
        }
    });
    </script>
@endsection
