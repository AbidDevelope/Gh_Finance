<style>
    i {
        font-size: 30px;
    }

    .left-sidebar-pro {
        background-color: white;
    }

    .left-sidebar-menu-pro li {
        border-top: 1px solid #ccc;
        /* Add a 1px solid border to the top side */
        margin-bottom: 35px;
        /* Add margin to separate each li */
        padding-top: 5px;
        /* Add padding to the top side */
    }



    a:hover {
        background-color: transparent !important;
    }

    /* Initially hide the submenu */
    .container {
        position: relative;
        display: inline-block;
    }

    .servicelist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 100vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -105px !important;

    }
    .invoiceslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 100vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -205px !important;

    }
    .Quotationslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 100vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -312px !important;

    }
    .beneficiarylist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 100vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -403px !important;
    }

    .height {
        height: 15px;

    }

    .submenu-angle li {
        list-style-type: none;
        padding: 5px 10px;
    }

    .sidebar-h {
        height: 60px;
    }

    .left_margin{
        margin-left: -30px!important;
    }
    .top_margin{
        margin-top: -10px!important;
    }
</style>

<script>
    // servies
    document.addEventListener('DOMContentLoaded', function() {
        var Services = document.getElementsByClassName('Services')[0]; // Assuming there's only one element
        var serviceMenu = document.getElementsByClassName('servicelist')[0];

        Services.addEventListener('mouseenter', function() {
            serviceMenu.style.display = 'block';
        });

        Services.addEventListener('mouseleave', function() {
            serviceMenu.style.display = 'block';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!Services.contains(targetElement) && !serviceMenu.contains(targetElement)) {
                serviceMenu.style.display = 'none';
            }
        });

        Services.addEventListener('click', function() {
            if (serviceMenu.style.display === 'block') {
                serviceMenu.style.display = 'none';
            }
        });
    });

    // invoices
    document.addEventListener('DOMContentLoaded', function() {
        var Services = document.getElementsByClassName('invoices')[0]; // Assuming there's only one element
        var serviceMenu = document.getElementsByClassName('invoiceslist')[0];

        Services.addEventListener('mouseenter', function() {
            serviceMenu.style.display = 'block';
        });

        Services.addEventListener('mouseleave', function() {
            serviceMenu.style.display = 'block';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!Services.contains(targetElement) && !serviceMenu.contains(targetElement)) {
                serviceMenu.style.display = 'none';
            }
        });

        Services.addEventListener('click', function() {
            if (serviceMenu.style.display === 'block') {
                serviceMenu.style.display = 'none';
            }
        });
    });
    // Quotations
    document.addEventListener('DOMContentLoaded', function() {
        var Services = document.getElementsByClassName('Quotations')[0]; // Assuming there's only one element
        var serviceMenu = document.getElementsByClassName('Quotationslist')[0];

        Services.addEventListener('mouseenter', function() {
            serviceMenu.style.display = 'block';
        });

        Services.addEventListener('mouseleave', function() {
            serviceMenu.style.display = 'block';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!Services.contains(targetElement) && !serviceMenu.contains(targetElement)) {
                serviceMenu.style.display = 'none';
            }
        });

        Services.addEventListener('click', function() {
            if (serviceMenu.style.display === 'block') {
                serviceMenu.style.display = 'none';
            }
        });
    });
    // beneficiarylist
    document.addEventListener('DOMContentLoaded', function() {
        var Services = document.getElementsByClassName('beneficiary')[0]; // Assuming there's only one element
        var serviceMenu = document.getElementsByClassName('beneficiarylist')[0];

        Services.addEventListener('mouseenter', function() {
            serviceMenu.style.display = 'block';
        });

        Services.addEventListener('mouseleave', function() {
            serviceMenu.style.display = 'block';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!Services.contains(targetElement) && !serviceMenu.contains(targetElement)) {
                serviceMenu.style.display = 'none';
            }
        });

        Services.addEventListener('click', function() {
            if (serviceMenu.style.display === 'block') {
                serviceMenu.style.display = 'none';
            }
        });
    });
</script>

<div class="left-sidebar-pro ">
    <nav id="sidebar" class="bg-white">

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
        <div class="left-custom-menu-adp-wrap comment-scrollbar " style="height: 550px; overflow-y: auto;">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu bg-white " id="menu1">
                    <li class="sidebar-h">
                        <a class="text-black-50 d-flex flex-column align-items-center " href="{{ route('dashboard') }}">
                            <i class="fas fa-home text"></i>

                            {{-- <img class="text-black-50" src="{{ asset('assets/admin/img/icon/dashboard.png') }}" alt=""> --}}
                            <span class="mini-click-non text">Dashboard</span>
                        </a>
                    </li>
                    <li class="container sidebar-h Services">
                        <a id="toggleServices" class="text-black-50 d-flex flex-column align-items-center"
                            href="#" aria-expanded="false">
                            <div class="mb-2">
                                <!-- SVG Icon -->
                                <svg class="text" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                    <path
                                        d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg>
                            </div>
                            <div>
                                <!-- Text -->
                                <span class="mini-click-non text">Services</span>
                            </div>
                        </a>
                        <ul class="servicelist">
                            <div class=" text-black-50"> <a class="left_margin text-black-50 "
                                href="{{ route('all/services') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor"
                                class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>All</a></div>
                            <div class=" text-black-50"> <a class="left_margin top_margin text-black-50 "
                                href="{{ route('designs') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor"
                                class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>Designs</a></div>
                            <div class=" text-black-50"> <a class="left_margin top_margin text-black-50 "
                                href="{{ route('constructions') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor"
                                class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>Constructions</a></div>
                            <div class=" text-black-50"> <a class="left_margin top_margin text-black-50 "
                                href="{{ route('design_&_construction') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="currentColor"
                                class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                                <path
                                    d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>Design_&_Construction</a></div>
                        </ul>
                    </li>

                    <li class="removable sidebar-h invoices">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="36"
                                height="36" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                <path
                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                <path
                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                            </svg> <span class="text mini-click-non">Invoices</span></a>
                        <ul class="submenu-angle invoiceslist" aria-expanded="false">
                            <div><a class="height text-black-50  d-flex "
                                    href="{{ route('invoices') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="36" height="36" fill="currentColor" class="bi bi-receipt"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                    </svg><span class="text mini-sub-pro">Invoices List</span></a></div>

                        </ul>
                    </li>
                    <li class="removable sidebar-h Quotations">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="36"
                                height="36" fill="currentColor" class="bi bi-chat-right-quote-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                            </svg> <span class="text mini-click-non">Quotations</span></a>
                        <ul class="submenu-angle Quotationslist" aria-expanded="false">
                            <div><a class="height text-black-50  d-flex "
                                    href="{{ route('quotation') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="36" height="36" fill="currentColor"
                                        class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                    </svg><span class="text mini-sub-pro">Quotation List</span></a></div>

                        </ul>
                    </li>

                    {{-- <li id="removable sidebar-h-2">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="36" height="36" fill="currentColor" class="bi bi-receipt"
                                viewBox="0 0 16 16">
                                <path
                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                <path
                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                            </svg> <span class="text mini-click-non">Invoices</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li>
                                <a class=" height text-black-50 " title="Login"
                                    href="{{ route('invoices') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                    </svg><span class="text mini-sub-pro">Invoices List</span></a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li id="removable sidebar-h">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="36" height="36" fill="currentColor"
                                class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                            </svg> <span class="text mini-click-non">Quotations</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a class="height text-black-50 d-flex " title="Login"
                                    href="{{ route('quotation') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        fill="currentColor" class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM7.194 4.766q.13.188.227.401c.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667S4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324q.128.125.227.272M11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666S9.112 4 10.069 4c.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324q.128.125.227.272.131.188.228.401c.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z" />
                                    </svg><span class="text mini-sub-pro">Quotation List</span></a></li>
                        </ul>
                    </li> --}}

                    <li class="removable sidebar-h beneficiary">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                            width="36" height="36" fill="currentColor" class="bi bi-person-check"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                            <path
                                d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                        </svg> <span class="text mini-click-non">Beneficiary</span></a>
                        <ul class="submenu-angle beneficiarylist" aria-expanded="false">
                            <div><a class="height text-black-50  d-flex "
                                    href="{{ route('beneficiary') }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg><span class="text mini-sub-pro">Beneficiary List</span></a></div>

                        </ul>
                    </li>
                    {{-- <li id="removable sidebar-h beneficiary">
                        <a class=" text-black-50 d-flex flex-column align-items-center" href="#"
                            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="36" height="36" fill="currentColor" class="bi bi-person-check"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                <path
                                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                            </svg> <span class="text mini-click-non">Beneficiary</span></a>
                        <ul class="submenu-angle beneficiarylist" aria-expanded="false">
                            <li><a class="height text-black-50 d-flex"
                                    href="{{ route('beneficiary') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg><span class="text mini-sub-pro">Beneficiary List</span></a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </nav>
</div>

<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li class="active">
                                <a class="" href="{{ route('dashboard') }}">
                                    <img src="{{ asset('assets/admin/img/icon/dashboard.png') }}" alt="">
                                    <span class="mini-click-non">Dashboard</span>
                                </a>
                            </li>

                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Services <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a title="Inbox" href="{{ route('all/services') }}"><span
                                                class="mini-sub-pro">All</span></a></li>
                                    <li><a title="View Mail" href="#"><span
                                                class="mini-sub-pro">Design</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">Construction</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">AIU</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">Bidaa</span></a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Payables <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Payables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Receivables <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Receivables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Finance <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('payments') }}">Payments</a></li>
                                    <li><a href="{{ route('expenses') }}">Expenses</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Invoices <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('invoices') }}">Invoices List</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Quotations <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('quotation') }}">Quotations List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
