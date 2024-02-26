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
        background-color: #cccccc !important;
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

    }

    .detailsPop {
        padding-top: 8%;
    }

    .name::placeholder {
        font-size: 12px;
    }
    .margin_new_pass{
        padding-right: 120px !important;
    }
    .maindiv{
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
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 shadow-sm bg-white p-3 rounded position-relative">
                            <div class="subchild">
                                <div id="profile-pic" class="image circular-pic"
                                    style="background-image: url('/assets/admin/img/prof pic.jpg'); margin-right:20px"></div>
                                <a href="#" class="d-flex text-black-50 icon" id="change-profile-pic">
                                    <span class="mt-1 author-log-ic editIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0f1316"
                                            class="bi bi-pencil-square bg-white" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div id="saveButton"
                                class="btn bg_button text-white rounded f-14 p- mr-3 float-left mb-2 mb-lg-0 mb-md-0">Save
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 shadow-sm bg-white p-3 rounded">
                            <div>
                                <h1 class="text-center">My Profile</h1>
                                <div class="d-flex justify-content-between">
                                    <span class="mt-1 ms-2 author-log-ic" id="editIcon" style="cursor: pointer;">Edit Details
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square bg-white" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </span> <br>
                                    <span class="editPass" id="changePassword" style="cursor: pointer;">Change Password
                                        <svg style="transform: rotate(90deg);" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="#0f1316" class="bi bi-key"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
                                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                        </svg>
                                    </span>

                                    <div class="popup rounded detailsPop" id="popupPassword"
                                        style="width:110%; height:90%; display: none; margin-top:20px !important;">
                                        <div class="d-flex justify-content-center" ><h5>Change Password</h5></div>
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

                                            <button class="btn-search btn bgEdit text-white bg-gray-100 " type="submit ">Save
                                                Changes </button>

                                        </div>
                                     </div>
                                </div>
                                <div class="popup rounded detailsPop" id="popupIcon" style="width:110%; height:100%;">
                                    <div class="d-flex justify-content-center">
                                        <label for="name">Name</label>
                                        <input class="mb-3 name" style="margin-left:33px !important;" type="text"
                                            name="" id="" placeholder="name">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <label for="email">Email</label>
                                        <input class="mb-3 name " style="margin-left:33px !important;" type="number"
                                            name="" id="" placeholder="email">
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <label for="phone">Phone</label>
                                        <input class="mb-3 name " style="margin-left:27px !important;" type="text"
                                            name="" id=""placeholder="phone number">
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <label for="website">Website</label>
                                        <input class="mb-3 name " style="margin-left:12px !important;" type="text"
                                            name="" id="" placeholder="ex:www.abc.com">
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <label for="landline">Landline</label>
                                        <input class="mb-3 name ms-2" type="number" name="" id=""
                                            placeholder="123-456-7890">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center ">
                                        {{-- <input type="submit" value="Save Changes"> --}}
                                        <button class="btn-search btn bgEdit text-white bg-gray-100 " type="submit ">Save
                                            Changes </button>

                                    </div>
                                </div>


                            </div>
                            <div class="profile-form mt-5">
                                <form id="profileForm">
                                    <div class="mb-3 d-flex">
                                        <span class="bg-heading ps-2 pe_name" for="name">Name</span>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span class="border d-block flex-grow-1 ps-2" id="name">Admin</span>
                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <span class="bg-heading ps-2 pe_email" for="email">Email</span>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span class="border d-block d-block flex-grow-1 ps-2"
                                            id="email">stackdeveloper763@gmail.com</span>


                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <span class="bg-heading ps-2 pePhone" for="phone">Phone Number</span>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="phone"
                                            class="border d-block d-block flex-grow-1 ps-2">123-456-7890</span>


                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <span class="bg-heading ps-2 pe-5" for="website">Website URL</span>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="website"
                                            class="border d-block d-block flex-grow-1 ps-2">https://example.com</span>


                                    </div>
                                    <div class="mb-3 d-flex ">
                                        <span class="ps-2 pe-3 bg-heading" for="landline">Landline Number</span>
                                        <!-- Use a <span> element with contenteditable attribute -->
                                        <span id="landline"
                                            class="border d-block d-block flex-grow-1 ps-2">123-456-7890</span>
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
