<style>
    .m {
        padding-top: 100px !important;
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
        top: 74%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .bg_button:hover {
        background-color: var(--own-black) !important;
        color: white;
    }

    .bgEdit {
        background-color: var(--own-black) !important;
        color: white;
        position: absolute;
        top: 84%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .bgEdit:hover {
        background-color: var(--own-black) !important;
        color: white;
    }

    .image {
        width: 150px !important;
        height: 150px !important;
        border-radius: 50%;
        margin-top: -70% !important;
        margin-left: -10% !important;

    }

    .icon {
        margin-left: 50% !important;
        margin-top: -10% !important;
    }

    .pe_name {
        padding-right: 95px;
    }

    .pe_email {
        padding-right: 97px;
    }

    .pePhone {
        padding-right: 32px;
    }

    .bg-heading {
        /* padding-left: 5px; */
       width: 40px;
        /* background-color: #cccccc !important; */
    }

    .popup {
        display: none;
        position: absolute;
        background-color: white;
        padding: 20px;
        border: 1px solid #ccc;
        z-index: 1;
        /* top: 1%; */
        backdrop-filter: blur(5px);
        /* Adjust the blur value as needed */
        background-color: rgba(255, 255, 255, 0.8);
        /* Adjust the background color and opacity as needed */
        top: 0%;
    }

    .detailsPop {
        padding-top: 8%;
    }

    .name::placeholder {
        font-size: 12px;
    }

    .margin_new_pass {
        padding-right: 120px !important;
    }

    .maindiv {
        height: 100% !important;
    }
</style>



</script>
@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper maindiv">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row justify-content-center margin_top px-2  m">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        {{-- <img id="imagePreview" style="width: 100px; height: 100px;" /> --}}
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 shadow-sm bg-white p-3 rounded position-relative">
                            <div class="subchild">

                                @php
                                    $adminProfile = Auth::guard('admin')->user()->image;
                                    $defaultImage = '/assets/admin/img/prof pic.jpg';
                                    $imagePath = $adminProfile
                                        ? 'assets/admin/img/profile/' . $adminProfile
                                        : $defaultImage;
                                @endphp

                                <div id="imagePreview" class="image circular-pic"
                                    style="background-image: url('{{ asset($imagePath) }}'); margin-right:20px; width: 200px; height: 200px; background-size: cover; background-position: center;">
                                </div>

                                <form action="{{ route('changeProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" id="fileInput" name="image" style="display:none">
                                    <a class="d-flex text-black-50 icon" id="change-profile-pic">
                                        <span class="mt-1 author-log-ic editIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#0f1316" class="bi bi-pencil-square bg-white" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                            </svg>
                                        </span>
                                    </a>
                            </div>
                            <button type="submit" id="saveButton"
                                class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">Save
                            </button>
                            </form>

                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 shadow-sm bg-white p-3 rounded">
                            <div>
                                <h1 class="text-center">My Profile</h1>
                                <div class="d-flex justify-content-between  mt-5">
                                    <span class="mt-1 ms-2 author-log-ic " id="editIcon" style="cursor: pointer;">Edit
                                        Details
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square bg-white" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </span> <br>
                                    {{-- <span class="editPass" id="changePassword" style="cursor: pointer;">Change Password
                                        <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="#0f1316" class="bi bi-key"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
                                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                        </svg>
                                    </span> --}}

                                    <div class="popup rounded detailsPop" id="popupPassword"
                                        style="width:110%; height:100%; display: none; ">
                                        <div class="d-flex justify-content-center">
                                            <h5>Change Password</h5>
                                        </div>
                                        <div class="d-flex justify-content-start mt-3">
                                            <label for="name">Current Password</label>
                                            <input class="mb-3 name" style="margin-left:33px !important;" type="text"
                                                name="" id="" placeholder="current password">
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <label for="name">New Password</label>
                                            <input class="mb-3 name" style="margin-left:58px !important;" type="text"
                                                name="" id="" placeholder="new password">
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <label for="name">Confirm Password</label>
                                            <input class="mb-3 name" style="margin-left:31px !important;" type="text"
                                                name="" id="" placeholder="confirm password">
                                        </div>
                                        <div class=" d-flex justify-content-center ">

                                            <button class="btn-search btn bgEdit text-white bg-gray-100 "
                                                type="submit ">Save
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="popup rounded detailsPop" id="popupIcon" style="width:110%; height:100%;">
                                    <form action="{{ route('profile/update', Auth::guard('admin')->user()->id) }}"
                                        method="POST">
                                        @csrf
                                        <div class="d-flex justify-content-center">
                                            <label for="name">First Name</label>
                                            <input class="mb-3 name" style="margin-left:33px !important;" type="text"
                                                name="first_name" placeholder="First Name"
                                                value="{{ Auth::guard('admin')->user()->first_name }}">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <label for="name">Last Name</label>
                                            <input class="mb-3 name" style="margin-left:33px !important;" type="text"
                                                name="last_name" placeholder="Last Name"
                                                value="{{ Auth::guard('admin')->user()->last_name }}">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <label for="email">Email</label>
                                            <input class="mb-3 name " style="margin-left:33px !important;" type="email"
                                                name="email" placeholder="email"
                                                value="{{ Auth::guard('admin')->user()->email }}">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <label for="phone">Phone</label>
                                            <input class="mb-3 name " style="margin-left:27px !important;" type="text"
                                                name="mobile" placeholder="phone number"
                                                value="{{ Auth::guard('admin')->user()->mobile }}">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <label for="landline">Landline</label>
                                            <input class="mb-3 name ms-2" type="number" name="landline"
                                                placeholder="123-456-7890"
                                                value="{{ Auth::guard('admin')->user()->landline }}">
                                        </div>
                                        <div class="mb-3 d-flex justify-content-center ">
                                            {{-- <input type="submit" value="Save Changes"> --}}
                                            <button class="btn-search btn bgEdit text-white bg-gray-100 "
                                                type="submit ">Save
                                                Changes </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="profile-form mt-5">
                                <form id="profileForm">
                                    <div class="mb-3 py-1 d-flex mx-3 border align-items-center">
                                        <svg class="bg-heading" xmlns="http://www.w3.org/2000/svg" width="22px"
                                            height="22px" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-width="2">
                                                <path stroke-linejoin="round"
                                                    d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z" />
                                                <circle cx="12" cy="7" r="3" />
                                            </g>
                                        </svg>
                                        <span style="border-left:none " class=" d-block flex-grow-1 ps-2"
                                            id="name">{{ Auth::guard('admin')->user()->first_name }}&nbsp;{{ Auth::guard('admin')->user()->last_name }}</span>
                                    </div>
                                    <div class="mb-3 py-1 d-flex mx-3 border align-items-center">
                                        {{-- <span class="bg-heading ps-2 pe_email" for="email">Email</span> --}}
                                        <svg class="bg-heading" xmlns="http://www.w3.org/2000/svg" width="22px"
                                        height="22px" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
                                        </svg>
                                        <span class="  d-block flex-grow-1 ps-2"
                                            id="email">{{ Auth::guard('admin')->user()->email }}</span>
                                    </div>
                                    <div class="mb-3 py-1 d-flex mx-3 border align-items-center">
                                        <svg  class="bg-heading" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                                            viewBox="0 0 36 36">
                                            <path fill="currentColor"
                                                d="M25 4H11a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2m-6 26h-2v-2h2Zm-8-4V6h14v20Z"
                                                class="clr-i-solid clr-i-solid-path-1" />
                                            <path fill="none" d="M0 0h36v36H0z" />
                                        </svg>
                                        <span id="phone"
                                            class="  d-block flex-grow-1 ps-2">+965&nbsp;{{ Auth::guard('admin')->user()->mobile }}</span>
                                    </div>
                                    <div class="mb-3 py-1 d-flex mx-3 border align-items-center">
                                            <svg  class="border-right bg-heading" xmlns="http://www.w3.org/2000/svg" width="22px"
                                            height="22px"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2">
                                                    <path
                                                        d="M20 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-4 1H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h11" />
                                                    <path
                                                        d="M12 8H6v3h6zm0 6v.01M9 14v.01M6 14v.01M12 17v.01M9 17v.01M6 17v.01" />
                                                </g>
                                            </svg>

                                        <span id="landline"
                                            class="  d-block flex-grow-1 ps-2">+965&nbsp;{{ Auth::guard('admin')->user()->landline }}</span>
                                    </div>
                                    {{-- <div class="mb-3 d-flex ">
                                        <span class="bg-heading ps-2 pe-5" for="website">Password</span>
                                        <span id="website"
                                            class="border d-block d-block flex-grow-1 ps-2">{{ Auth::guard('admin')->user()->password }}</span>
                                    </div> --}}
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

    {{-- change password --}}
    <script>
        // Get the elements
        const changePasswordSpan = document.getElementById('changePassword');
        const popupPassword = document.getElementById('popupPassword');

        // Add click event listener to the "Change Password" span
        changePasswordSpan.addEventListener('click', function(event) {
            // Show the popup
            popupPassword.style.display = 'block';

            // Add a class to the body to apply the blur effect
            document.body.classList.add('popup-open');

            // Prevent the click event from bubbling up to the document
            event.stopPropagation();
        });

        // Add click event listener to the document
        document.addEventListener('click', function() {
            // Hide the popup
            popupPassword.style.display = 'none';

            // Remove the class from the body to remove the blur effect
            document.body.classList.remove('popup-open');
        });
    </script>
    {{-- edit details --}}
    <script>
        // Get the SVG icon element
        const editIcon = document.getElementById('editIcon');
        const popup = document.getElementById('popupIcon');

        editIcon.addEventListener('click', function() {
            // Show the popup
            popup.style.display = 'block';

            // Add a class to the body to apply the blur effect
            document.body.classList.add('popup-open');
        });

        document.addEventListener('click', function(event) {
            if (!popup.contains(event.target) && !editIcon.contains(event.target)) {
                // Hide the popup
                popup.style.display = 'none';

                // Remove the class from the body to remove the blur effect
                document.body.classList.remove('popup-open');
            }
        });
    </script>

    {{-- Change Profile Image Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var changeProfilePicElement = document.getElementById('change-profile-pic');
            var fileInput = document.getElementById('fileInput');
            var imagePreview = document.getElementById('imagePreview');

            changeProfilePicElement.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.onchange = function(evt) {
                const [file] = fileInput.files;
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.style.backgroundImage = 'url(' + e.target.result + ')';
                    };
                    reader.readAsDataURL(file);
                }
            };
        });
    </script>
@endsection
