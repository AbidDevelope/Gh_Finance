<style>
    .dropdown-menu {
        /* min-width: 30rem; */
        /* Adjust the width as per your requirement */
        /* min-height: 20rem; */
        /* Adjust the width as per your requirement */
    }

    .dropdown-toggle::after {
        display: none !important;
    }

    .circular-pic {
        width: 40px;
        /* Adjust the width and height as needed */
        height: 40px;
        border-radius: 50%;
        /* This makes the element circular */
        overflow: hidden;
        /* Ensures the image or content remains within the circular shape */
        background-size: cover;
        /* Adjusts the background image size to cover the circular area */
        background-position: center;
        /* Centers the background image within the circular area */
    }

    .popup-container {
        display: none;
        position: fixed;
        top: 20%;
        left: 60%;
        transform: translate(-50%, -50%);
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 9999;
    }

    .popup-content {
        max-height: 200px;
        overflow-y: auto;
    }

    .height {
        height: 85px;
    }
</style>
<div class="header-top-area bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 height shadow">
                {{-- <div class="header-top-wraper"> --}}
                {{-- <div class="row"> --}}
                {{-- <div class="d-flex"> --}}
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12 mt-1">
                    <div class="nalika-profile bg-white ">
                        <div class="profile-dtl">
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}"
                                    alt="" /></a>
                            {{-- <h2>{{ Auth::guard('admin')->user()->first_name }} <span class="min-dtn">{{ Auth::guard('admin')->user()->last_name }}</span></h2> --}}
                            {{-- <h2> <span class="min-dtn text-black-50">GHADER & HAMDOUN</span></h2> --}}
                        </div>
                        <div class="profile-social-dtl">
                            <ul class="dtl-social">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12 mt-1">
                    <div class="menu-switcher-pro ">
                        <button type="button" id="sidebarCollapse"
                            class="text-black-500 btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                            <i class="icon nalika-menu-task text-black-50"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-3 col-lg-2 col-md-1 col-sm-1 col-xs-12 mt-3">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle bg-white text-black-50 border-0 dropdown-toggle-no-caret"
                            href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mega menu<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </a>


                        <ul class="dropdown-menu max-w-xl" style="min-width: 30rem;" aria-labelledby="dropdownMenuLink">
                            <div class="container">
                                <div class="row">
                                    <li class="col-sm-4">
                                        <a class="text-black-50" title="Login" href="{{ route('all/services') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <!-- Adding margin to the left -->
                                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-person-raised-hand"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Services</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('projects') }}">
                                            <div class="" style="display: flex; justify-content: center;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-projector-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1h6a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1M14 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-12 1a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                                </svg></div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Projects</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="has-arrow text-black-50" href="#"
                                            aria-expanded="false">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-credit-card"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                    <path
                                                        d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non text">Payables</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('miscellaneous') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-explicit" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.826 10.88H10.5V12h-5V4.002h5v1.12H6.826V7.4h3.457v1.073H6.826z" />
                                                    <path
                                                        d="M2.5 0A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0zM1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro">Expenses</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login" href="#">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro text">Receivables 2</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('payments') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Payments</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('invoices') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Invoices List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('quotation') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Quotation List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('beneficiary') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-person-check"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Beneficiary List</span>
                                            </div>
                                        </a></li>
                                </div>
                            </div>
                        </ul>
                    </div>

                </div>

                {{-- searchbar --}}
                <div class="mt-3  col-lg-1 col-md-1 col-sm-1 col-xs-12 mt-2">
                    <div class=" d-flex">
                        <input id="search" type="text" class="bg-white form-control rounded-pill"
                            style="width: 230px; height: 40px;" placeholder="search">
                        <div class="text-danger">
                            <!-- Adjust the color class applied to the SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" class="text-black">
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l6 5.99L20.49 20l-5.99-6zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                        </div>
                    </div>

                </div>


                <div class="d-flex justify-content-end gap-3 mt-1">
                    {{-- <div class=" mt-1 "> <i class="bi bi-arrows-move text-black-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-arrows-move" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10M.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8" />
                                </svg>
                            </i> </div> --}}
                    <div class=" mt-2 dropdown">
                        <a class="btn btn-secondary dropdown-toggle bg-white text-black-50 border-0" href="#"
                            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                            </svg></a>

                        <ul class="dropdown-menu max-w-xl" style="min-width: 30rem;"
                            aria-labelledby="dropdownMenuLink">
                            <div class="container">
                                <div class="row">
                                    <li class="col-sm-4">
                                        <a class="text-black-50" title="Login" href="{{ route('all/services') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <!-- Adding margin to the left -->
                                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Services</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('projects') }}">
                                            <div class="" style="display: flex; justify-content: center;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-projector-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1h6a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1M14 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-12 1a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                                </svg></div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Projects</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="has-arrow text-black-50" href="#"
                                            aria-expanded="false">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-credit-card"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                    <path
                                                        d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non text">Payables</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('miscellaneous') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-explicit" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.826 10.88H10.5V12h-5V4.002h5v1.12H6.826V7.4h3.457v1.073H6.826z" />
                                                    <path
                                                        d="M2.5 0A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0zM1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro">Expenses</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login" href="#">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro text">Receivables 2</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('payments') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Payments</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('invoices') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Invoices List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('quotation') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Quotation List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('beneficiary') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-person-check"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Beneficiary List</span>
                                            </div>
                                        </a></li>
                                </div>
                            </div>
                    </div>
                    {{-- modal --}}
                    {{-- <div class="modal z-50" tabindex="-1" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal Title</h5>
                                    <button type="button" id="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <div class="container">
                                <div class="row">
                                    <li class="col-sm-4">
                                        <a class="text-black-50" title="Login" href="{{ route('all/services') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <!-- Adding margin to the left -->
                                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-person-raised-hand"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Services</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('projects') }}">
                                            <div class="" style="display: flex; justify-content: center;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-projector-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1h6a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm.5 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1M14 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-12 1a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                                </svg></div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non mr-lg-2">Projects</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="has-arrow text-black-50" href="#"
                                            aria-expanded="false">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-credit-card"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                    <path
                                                        d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-click-non text">Payables</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('miscellaneous') }}">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    fill="currentColor" class="bi bi-explicit" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.826 10.88H10.5V12h-5V4.002h5v1.12H6.826V7.4h3.457v1.073H6.826z" />
                                                    <path
                                                        d="M2.5 0A2.5 2.5 0 0 0 0 2.5v11A2.5 2.5 0 0 0 2.5 16h11a2.5 2.5 0 0 0 2.5-2.5v-11A2.5 2.5 0 0 0 13.5 0zM1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro">Expenses</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login" href="#">
                                            <div class="" style="display: flex; justify-content: center;">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="mini-sub-pro text">Receivables 2</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Compose Mail"
                                            href="{{ route('payments') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Payments</span>
                                            </div>
                                        </a></li>
                                </div>
                                <div class="row">
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('invoices') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-receipt"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Invoices List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('quotation') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor"
                                                    class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Quotation List</span>
                                            </div>
                                        </a></li>
                                    <li class="col-sm-4"><a class="text-black-50" title="Login"
                                            href="{{ route('beneficiary') }}">
                                            <div class="d-flex justify-content-center">
                                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36"
                                                    height="36" fill="currentColor" class="bi bi-person-check"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="text mini-sub-pro">Beneficiary List</span>
                                            </div>
                                        </a></li>
                                </div>
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                    <div class="mt-3">

                        <i id="bell-icon" class="fas fa-bell text-black-50"></i>
                    </div>
                    <div class="mt-3 position-relative d-flex justify-content-center">
                        <!-- Notification Popup Container -->
                        <div id="notification-popup"
                            class="popup-container position-fixed top-10 end-0 translate-middle-y mt-4 me-4">
                            <div class="popup-content">
                                <ul class="list-unstyled">
                                    <li
                                        class="d-flex justify-content-between align-items-center mb-3 gap-5 border-bottom">
                                        <div class="col-auto">
                                            <!-- Icon -->
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div class="col">
                                            <!-- Text -->
                                            Notification 1
                                        </div>
                                        <div class="col-auto text-end">
                                            <!-- Time -->
                                            10:00 AM
                                        </div>
                                    </li>
                                    <li
                                        class="d-flex justify-content-between align-items-center mb-3 gap-5 border-bottom">
                                        <div class="col-auto">
                                            <!-- Icon -->
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div class="col">
                                            <!-- Text -->
                                            Notification 2
                                        </div>
                                        <div class="col-auto text-end">
                                            <!-- Time -->
                                            11:00 AM
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center gap-5 border-bottom">
                                        <div class="col-auto">
                                            <!-- Icon -->
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div class="col">
                                            <!-- Text -->
                                            Notification 3
                                        </div>
                                        <div class="col-auto text-end">
                                            <!-- Time -->
                                            12:00 PM
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>








                    <div class="mt-3">
                        <div id="profile-pic" class="circular-pic"
                            style="background-image: url('/assets/admin/img/prof pic.jpg');"></div>
                    </div>

                    <!-- Profile Picture Popup Container -->
                    <div id="profile-pic-popup"
                        class="popup-container position-fixed top-10 end-0 translate-middle-y mt-4 me-4">
                        <div class="popup-content">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="d-flex justify-content-between text-black">
                                        <span> My Profile</span>
                                        <span class="icon nalika-settings author-log-ic"></span>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <!-- File Input Element -->
                                    <input type="file" id="file-input" style="display: none;" accept="image/*">
                                    <a href="#" class="d-flex justify-content-between text-black-50"
                                        id="change-profile-pic">
                                        <span>Change Profile Picture</span>
                                        <span class="icon nalika-edit author-log-ic"></span>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="d-flex justify-content-between text-black">
                                        <span>Settings</span>
                                        <span class="icon nalika-settings author-log-ic"></span>
                                    </a>
                                </li>
                                <!-- Replace {{ route('admin/logout') }} with the appropriate logout URL -->
                                <li class="mb-2">
                                    <a href="#" class="d-flex justify-content-between text-black">
                                        <span>Log Out</span>
                                        <span class="icon nalika-unlocked author-log-ic"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>








                </div>
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
<div class=" position-fixed top-50 end-0 z-index-setting">

    <div id='colorsidebar' class='d-flex trans-hide  align-items-start  justify-content-end  '>
        <div id="colorsidepicker" class=" p-1 py-2 spin-bg">
            <div class="spin">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.1389 3.46333C10.6122 1.51222 13.3878 1.51222 13.8611 3.46333C13.9321 3.75644 14.0714 4.02864 14.2675 4.25778C14.4636 4.48691 14.711 4.6665 14.9896 4.78194C15.2682 4.89738 15.5702 4.94539 15.8709 4.92208C16.1716 4.89876 16.4625 4.80478 16.72 4.64778C18.4344 3.60333 20.3978 5.56556 19.3533 7.28111C19.1966 7.53851 19.1027 7.82926 19.0795 8.12975C19.0562 8.43023 19.1042 8.73197 19.2195 9.01042C19.3348 9.28888 19.5142 9.5362 19.743 9.73228C19.9719 9.92836 20.2438 10.0677 20.5367 10.1389C22.4878 10.6122 22.4878 13.3878 20.5367 13.8611C20.2436 13.9321 19.9714 14.0714 19.7422 14.2675C19.5131 14.4636 19.3335 14.711 19.2181 14.9896C19.1026 15.2682 19.0546 15.5702 19.0779 15.8709C19.1012 16.1716 19.1952 16.4625 19.3522 16.72C20.3967 18.4344 18.4344 20.3978 16.7189 19.3533C16.4615 19.1966 16.1707 19.1027 15.8703 19.0795C15.5698 19.0562 15.268 19.1042 14.9896 19.2195C14.7111 19.3348 14.4638 19.5142 14.2677 19.743C14.0716 19.9719 13.9323 20.2438 13.8611 20.5367C13.3878 22.4878 10.6122 22.4878 10.1389 20.5367C10.0679 20.2436 9.92864 19.9714 9.73254 19.7422C9.53644 19.5131 9.28901 19.3335 9.01039 19.2181C8.73176 19.1026 8.42982 19.0546 8.12913 19.0779C7.82844 19.1012 7.5375 19.1952 7.28 19.3522C5.56556 20.3967 3.60222 18.4344 4.64667 16.7189C4.80345 16.4615 4.89728 16.1707 4.92054 15.8703C4.9438 15.5698 4.89583 15.268 4.78052 14.9896C4.66522 14.7111 4.48584 14.4638 4.25697 14.2677C4.02809 14.0716 3.75618 13.9323 3.46333 13.8611C1.51222 13.3878 1.51222 10.6122 3.46333 10.1389C3.75644 10.0679 4.02864 9.92864 4.25778 9.73254C4.48691 9.53644 4.6665 9.28901 4.78194 9.01039C4.89738 8.73176 4.94539 8.42982 4.92208 8.12913C4.89876 7.82844 4.80478 7.5375 4.64778 7.28C3.60333 5.56556 5.56556 3.60222 7.28111 4.64667C8.39222 5.32222 9.83222 4.72444 10.1389 3.46333Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M6 12C6 13.5913 6.63214 15.1174 7.75736 16.2426C8.88258 17.3679 10.4087 18 12 18C13.5913 18 15.1174 17.3679 16.2426 16.2426C17.3679 15.1174 18 13.5913 18 12C18 10.4087 17.3679 8.88258 16.2426 7.75736C15.1174 6.63214 13.5913 6 12 6C10.4087 6 8.88258 6.63214 7.75736 7.75736C6.63214 8.88258 6 10.4087 6 12Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

        </div>
        <div class="bg-white px-3 pb-4">
            <p>Theme color</p>
            <div id="colorChoices" class="row gap-4">
                <div class="col">
                    <div id="purple-color" class="circle-choice purple-color"></div>
                </div>
                <div class="col">
                    <div id="red-color" class="circle-choice red-color"></div>
                </div>
                <div class="col">
                    <div id="green-color" class="circle-choice green-color"></div>
                </div>
                <div class="col">
                    <div id="yellow-color" class="circle-choice yellow-color"></div>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var profilePic = document.getElementById('profile-pic');
        var fileInput = document.getElementById('file-input');
        var changeProfilePicLink = document.getElementById('change-profile-pic');

        // Check if there's a profile picture URL stored in localStorage
        var storedPicUrl = localStorage.getItem('profilePicUrl');
        if (storedPicUrl) {
            profilePic.style.backgroundImage = 'url(' + storedPicUrl + ')';
        }

        // Function to handle file input change
        fileInput.addEventListener('change', function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var picUrl = e.target.result;
                profilePic.style.backgroundImage = 'url(' + picUrl + ')';

                // Store the URL of the selected profile picture in localStorage
                localStorage.setItem('profilePicUrl', picUrl);
            };

            reader.readAsDataURL(file);
        });

        // Trigger file input when the "Change" option is clicked
        changeProfilePicLink.addEventListener('click', function() {
            fileInput.click();
        });
    });



    document.addEventListener('DOMContentLoaded', function() {
        var bellIcon = document.getElementById('bell-icon');
        var notificationPopup = document.getElementById('notification-popup');
        var profilePic = document.getElementById('profile-pic');
        var profilePicPopup = document.getElementById('profile-pic-popup');

        // Toggle the visibility of the notification popup when the bell icon is clicked
        bellIcon.addEventListener('click', function() {
            togglePopup(notificationPopup);
        });

        // Show the profile pic popup when profile pic is clicked
        profilePic.addEventListener('click', function() {
            togglePopup(profilePicPopup);
        });

        // Function to toggle popup visibility
        function togglePopup(popup) {
            if (popup.style.display === 'block') {
                popup.style.display = 'none';
            } else {
                popup.style.display = 'block';
            }
        }
    });
</script>
<script>
    // Add a click event listener to the SVG element
    document.getElementById('openModal').addEventListener('click', function() {
        // Show the modal
        $('#myModal').modal('show');
    });
    document.getElementById('close').addEventListener('click', function() {
        // Show the modal
        $('#myModal').modal('hide');
    });

    let colorpicker = document.getElementById('colorsidebar')
    let colorsidepicker = document.getElementById('colorsidepicker')
    let colorChoices = document.getElementById('colorChoices')

    function myFunction() {
        let classArray = Array.from(colorpicker.classList);
        let findValue = classArray.find((item) => item === 'trans-hide');
        if (findValue) {
            colorpicker.classList.remove("trans-hide");
            colorpicker.classList.add("trans-show");
        } else {
            colorpicker.classList.add("trans-hide");
            colorpicker.classList.remove("trans-show");
        }
    }

    function changeColor(clickedColor) {
        switch (clickedColor) {
            case 'purple-color':
                document.documentElement.style.setProperty('--own-black', '#1c0d07');
                document.documentElement.style.setProperty('--active-nav-black', '#391d0d');
                document.documentElement.style.setProperty('--nav-black', '#552913');
                document.documentElement.style.setProperty('--filter-color', '#71391a');
                document.documentElement.style.setProperty('--filter-btn', '#9A4E24');
                break;
            case 'red-color':
                document.documentElement.style.setProperty('--own-black', '#130007');
                document.documentElement.style.setProperty('--active-nav-black', '#25000E');
                document.documentElement.style.setProperty('--nav-black', '#380116');
                document.documentElement.style.setProperty('--filter-color', '#4B011D');
                document.documentElement.style.setProperty('--filter-btn', '#70012B');
                break;
            case 'green-color':
                document.documentElement.style.setProperty('--own-black', '#172621');
                document.documentElement.style.setProperty('--active-nav-black', '#2A4038');
                document.documentElement.style.setProperty('--nav-black', '#3B593A');
                document.documentElement.style.setProperty('--filter-color', '#0D0D0D');
                document.documentElement.style.setProperty('--filter-btn', '#4D734C');
                break;
            case 'yellow-color':
                document.documentElement.style.setProperty('--own-black', ' #0F1316');
                document.documentElement.style.setProperty('--active-nav-black', '#152036');
                document.documentElement.style.setProperty('--nav-black', '#0a0b0');
                document.documentElement.style.setProperty('--filter-color', '#1B2A47');
                document.documentElement.style.setProperty('--filter-btn', '#1d82f5');
                break;
            default:
                break;
        }
    }
    colorsidepicker.addEventListener("click", myFunction);
    colorChoices.addEventListener('click', function(event) {
        const clickedColor = event.target.id;
        localStorage.setItem('user-color', clickedColor)
        changeColor(clickedColor)
    })
    window.addEventListener('load', () => {
        const userColor = localStorage.getItem('user-color');
        const clickedColor = userColor || 'yellow-color';
        changeColor(clickedColor)
    })
</script>

{{-- <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script> --}}
{{-- <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
