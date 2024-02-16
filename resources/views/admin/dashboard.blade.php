@extends('admin.layouts.master')
@section('content')
    <!-- Start Welcome area -->
    <!-- style="background: #BEC0BF" -->
    <div class="all-content-wrapper">
        <style>
            .custom-padding-top {
                padding-top: 30px;
            }
        </style>
        <div class="container-fluid px-2   custom-padding-top ">
            <div class="row mx-1 gap-1 flex-nowrap ">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3 shadow" style="background-color: white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="/assets/admin/img/logo/img4.png" alt="Description of the image">

                            {{-- <svg width="80" height="80" viewBox="0 0 232 241" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="232" height="241" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_759_63" transform="scale(0.00431034 0.00414938)" />
                                </pattern>
                                <image id="image0_759_63" width="200" height="241"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg> --}}
                        </div>
                        <div class="col-8">
                            <p class="m-0 dashboard-color-text">Design</p>
                            <p class="m-0 dashboard-color-subcolor">205</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3 shadow" style="background-color: white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="/assets/admin/img/logo/img3.png" alt="Description of the image" width="200"
                                height="200">

                        </div>
                        <div class="col-8">
                            <p class="m-0 dashboard-color-text">Construction</p>
                            <p class="m-0 dashboard-color-subcolor">4021.000 KWD</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3 shadow" style="background-color: white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="/assets/admin/img/logo/img2.png" alt="Description of the image" width="200"
                                height="200">

                        </div>
                        <div class="col-8">
                            <p class="m-0 dashboard-color-text">Revenue</p>
                            <p class="m-0 dashboard-color-subcolor">80.000 KWD</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3 shadow" style="background-color: white">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="/assets/admin/img/logo/img1.png" alt="Description of the image" width="200"
                                height="200">


                        </div>
                        <div class="col-8">
                            <p class="m-0 dashboard-color-text">EXPENSES</p>
                            <p class="m-0 dashboard-color-subcolor">1200.000 KWD</p>
                        </div>
                    </div>

                </div>



            </div>

        </div>

        <div class="container-fluid my-4">
            <div class="row mx-1 gap-0">
                <div class="col-lg-7 col-md-12 pt-3 shadow" style="background-color: white">
                    <div class="" style="margin-left: 50px">
                        <div class="caption pro-sl-hd">
                            <span class="caption-subject text-uppercase pb-4"><b>Revenue</b></span>
                        </div>
                        <!-- <div id="sparklinehome" class="sparkline-container">Loading..</div> -->
                        <div id="echart-bar"  style="width: 100%; height: 400px;"></div>
                        <!-- <div id="thisyearsales " class="sparkline-container">Loading..</div> -->

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 pt-3 shadow" style="background-color: white">
                    <div class="caption pro-sl-hd">
                        <span class="caption-subject text-uppercase pb-4"><b>Services</b></span>

                        <div id="echart-bar-sales" style="width: 100%; height: 400px;"></div>
                        <!-- <div class="analytics-rounded-content">
                                <h5>Percentage distribution</h5>
                                <h2><span class="counter">60</span>/20</h2>
                                <div class="text-center">
                                    <div id="sparkline51"></div>
                                </div>
                            </div> -->
                    </div>
                    <!-- <div class="analytics-rounded">
                            <div class="analytics-rounded-content">
                                <h5>Percentage division</h5>
                                <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                                <div class="text-center">
                                    <div id="sparkline52"></div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>

        </div>



        <div class="container-fluid my-4 ">
            <div class="row mx-1">
                <div class="col-xs-12 col-md-6 pt-3 ">
                    <div class="row p-0">
                        <div class="col-xs-12 col-md-6 shadow" style="background-color: white">
                            <p class="m-0 dashboard-color-text">Last Month Revenue</p>
                            <p class="dashboard-color-subcolor">7656765.000 KWD</p>
                            <div id="echart-bar-last-month" style="width: 100%; height:400px ; position:relative"></div>
                        </div>
                        <div class="col-xs-12 col-md-6 shadow" style="background-color: white">
                            <p class="m-0 dashboard-color-text">Last Week Revenue</p>
                            <p class="dashboard-color-subcolor">7656.000 KWD</p>
                            <div  id="echart-bar-last-week"
                                style="width: 100%; height:400px ; position:relative"></div>

                        </div>
                    </div>
                </div>
                <div class=" col-xs-5 col-md-1  pt-3"></div>

                <div class=" col-xs-12 col-md-5 bg-white pt-3">
                    <div>
                        <p class="dashboard-color-text ">Projects</p>


                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row  ">
                            <div class="col-lg-3 col-12 p-0">
                                {{-- <p class="m-0 avatar-lg-top">
                                    <img
                                        src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                                </p> --}}
                            </div>
                            <div class="col-lg-7 col-12 p-0">
                                <p class="mb-2 top-selling-tittle">Project 1 </p>
                                <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                                {{-- <p class="text-small text-danger m-0">46456.000 KWD <del class="text-muted">57567
                                        KWD</del>
                                </p> --}}
                            </div>
                            <div class="col-lg-2 col-12 p-0 mr-lg-5">
                                <button class="border-white bg-white cursor-pointer">View </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="container-fluid my-4 ">
            <div class="row mx-1 g-5">
                <div class="col-lg-6 col-xs-12 pt-3 shadow" style="background-color: white">
                    <div class="d-flex justify-content-between">
                        <p>New Users</p>
                        <p class="">


                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.1389 3.46333C10.6122 1.51222 13.3878 1.51222 13.8611 3.46333C13.9321 3.75644 14.0714 4.02864 14.2675 4.25778C14.4636 4.48691 14.711 4.6665 14.9896 4.78194C15.2682 4.89738 15.5702 4.94539 15.8709 4.92208C16.1716 4.89876 16.4625 4.80478 16.72 4.64778C18.4344 3.60333 20.3978 5.56556 19.3533 7.28111C19.1966 7.53851 19.1027 7.82926 19.0795 8.12975C19.0562 8.43023 19.1042 8.73197 19.2195 9.01042C19.3348 9.28888 19.5142 9.5362 19.743 9.73228C19.9719 9.92836 20.2438 10.0677 20.5367 10.1389C22.4878 10.6122 22.4878 13.3878 20.5367 13.8611C20.2436 13.9321 19.9714 14.0714 19.7422 14.2675C19.5131 14.4636 19.3335 14.711 19.2181 14.9896C19.1026 15.2682 19.0546 15.5702 19.0779 15.8709C19.1012 16.1716 19.1952 16.4625 19.3522 16.72C20.3967 18.4344 18.4344 20.3978 16.7189 19.3533C16.4615 19.1966 16.1707 19.1027 15.8703 19.0795C15.5698 19.0562 15.268 19.1042 14.9896 19.2195C14.7111 19.3348 14.4638 19.5142 14.2677 19.743C14.0716 19.9719 13.9323 20.2438 13.8611 20.5367C13.3878 22.4878 10.6122 22.4878 10.1389 20.5367C10.0679 20.2436 9.92864 19.9714 9.73254 19.7422C9.53644 19.5131 9.28901 19.3335 9.01039 19.2181C8.73176 19.1026 8.42982 19.0546 8.12913 19.0779C7.82844 19.1012 7.5375 19.1952 7.28 19.3522C5.56556 20.3967 3.60222 18.4344 4.64667 16.7189C4.80345 16.4615 4.89728 16.1707 4.92054 15.8703C4.9438 15.5698 4.89583 15.268 4.78052 14.9896C4.66522 14.7111 4.48584 14.4638 4.25697 14.2677C4.02809 14.0716 3.75618 13.9323 3.46333 13.8611C1.51222 13.3878 1.51222 10.6122 3.46333 10.1389C3.75644 10.0679 4.02864 9.92864 4.25778 9.73254C4.48691 9.53644 4.6665 9.28901 4.78194 9.01039C4.89738 8.73176 4.94539 8.42982 4.92208 8.12913C4.89876 7.82844 4.80478 7.5375 4.64778 7.28C3.60333 5.56556 5.56556 3.60222 7.28111 4.64667C8.39222 5.32222 9.83222 4.72444 10.1389 3.46333Z"
                                    stroke="#152036" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                                    stroke="#152036" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M6 12C6 13.5913 6.63214 15.1174 7.75736 16.2426C8.88258 17.3679 10.4087 18 12 18C13.5913 18 15.1174 17.3679 16.2426 16.2426C17.3679 15.1174 18 13.5913 18 12C18 10.4087 17.3679 8.88258 16.2426 7.75736C15.1174 6.63214 13.5913 6 12 6C10.4087 6 8.88258 6.63214 7.75736 7.75736C6.63214 8.88258 6 10.4087 6 12Z"
                                    stroke="#152036" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </p>

                    </div>
                    <div class="row text-center py-2">


                        <div class="col-1">
                            <p>Id</p>

                        </div>
                        <div class="col-2">
                            <p>Name</p>

                        </div>
                        <div class="col-2">
                            <p>Avatar</p>

                        </div>
                        <div class="col-3">
                            <p>Email</p>

                        </div>
                        <div class="col-2">
                            <p>Status</p>

                        </div>
                        <div class="col-2">
                            <p>Action</p>

                        </div>
                    </div>
                    <div class="row text-center pb-2">


                        <div class="col-1">
                            <p>1</p>

                        </div>
                        <div class="col-2">
                            <p>XYZ</p>

                        </div>
                        <div class="col-2">
                            <img class="rounded-circle m-0 avatar-sm-table "
                                src="https://gull-html-laravel.ui-lib.com/assets/images/faces/1.jpg" alt="">

                        </div>
                        <div class="col-3">
                            <p>test@gmail.com</p>

                        </div>
                        <div class="col-2">
                            <button class="view-details-btn-user">active</button>

                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.9999 28.3333L19.9999 22.3333L25.9999 28.3333L28.3333 26L22.3333 20L28.3333 14L25.9999 11.6667L19.9999 17.6667L13.9999 11.6667L11.6666 14L17.6666 20L11.6666 26L13.9999 28.3333ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2289 13.4999 35.3533C11.4721 34.4778 9.70825 33.2906 8.20825 31.7917C6.70825 30.2917 5.52103 28.5278 4.64659 26.5C3.77214 24.4722 3.33436 22.3056 3.33325 20C3.33325 17.6944 3.77103 15.5278 4.64659 13.5C5.52214 11.4722 6.70936 9.70833 8.20825 8.20833C9.70825 6.70833 11.4721 5.52111 13.4999 4.64667C15.5277 3.77222 17.6944 3.33445 19.9999 3.33333C22.3055 3.33333 24.4721 3.77111 26.4999 4.64667C28.5277 5.52222 30.2916 6.70945 31.7916 8.20833C33.2916 9.70833 34.4794 11.4722 35.3549 13.5C36.2305 15.5278 36.6677 17.6944 36.6666 20C36.6666 22.3056 36.2288 24.4722 35.3533 26.5C34.4777 28.5278 33.2905 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4794 26.4999 35.355C24.4721 36.2306 22.3055 36.6678 19.9999 36.6667ZM19.9999 33.3333C23.7221 33.3333 26.8749 32.0417 29.4583 29.4583C32.0416 26.875 33.3333 23.7222 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95833 23.7221 6.66667 19.9999 6.66667C16.2777 6.66667 13.1249 7.95833 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7222 7.95825 26.875 10.5416 29.4583C13.1249 32.0417 16.2777 33.3333 19.9999 33.3333Z"
                                                fill="#F4473A" />
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-6 ">
                                    <p class="text-start">


                                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_751_224)">
                                                <path
                                                    d="M40 6.54297C40 7.40234 39.8372 8.23568 39.5117 9.04297C39.1862 9.85026 38.7109 10.5664 38.0859 11.1914L12.3633 36.9141L0 40L3.08594 27.6367L28.8086 1.91406C29.4336 1.28906 30.1497 0.813802 30.957 0.488281C31.7643 0.16276 32.5977 0 33.457 0C34.3555 0 35.2018 0.169271 35.9961 0.507812C36.7904 0.846354 37.4805 1.3151 38.0664 1.91406C38.6523 2.51302 39.1211 3.20964 39.4727 4.00391C39.8242 4.79818 40 5.64453 40 6.54297ZM6.36719 27.8906C7.7474 28.3464 8.93229 29.069 9.92188 30.0586C10.9115 31.0482 11.6406 32.2396 12.1094 33.6328L33.2227 12.5L27.5 6.77734L6.36719 27.8906ZM3.4375 36.5625L9.86328 34.9609C9.73307 34.362 9.52474 33.7956 9.23828 33.2617C8.95182 32.7279 8.59375 32.2526 8.16406 31.8359C7.73438 31.4193 7.25911 31.0677 6.73828 30.7812C6.21745 30.4948 5.65104 30.2799 5.03906 30.1367L3.4375 36.5625ZM35 10.7227C35.3255 10.3971 35.638 10.0911 35.9375 9.80469C36.237 9.51823 36.5039 9.21875 36.7383 8.90625C36.9727 8.59375 37.1549 8.2487 37.2852 7.87109C37.4154 7.49349 37.487 7.05729 37.5 6.5625C37.5 6.0026 37.3958 5.48177 37.1875 5C36.9792 4.51823 36.6862 4.08854 36.3086 3.71094C35.931 3.33333 35.5013 3.04036 35.0195 2.83203C34.5378 2.6237 34.0104 2.51302 33.4375 2.5C32.9427 2.5 32.513 2.5651 32.1484 2.69531C31.7839 2.82552 31.4388 3.01432 31.1133 3.26172C30.7878 3.50911 30.4818 3.77604 30.1953 4.0625C29.9089 4.34896 29.6029 4.66146 29.2773 5L35 10.7227Z"
                                                    fill="#4CAF50" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_751_224">
                                                    <rect width="40" height="40" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row text-center pb-2">


                        <div class="col-1">
                            <p>1</p>

                        </div>
                        <div class="col-2">
                            <p>XYZ</p>

                        </div>
                        <div class="col-2">
                            <img class="rounded-circle m-0 avatar-sm-table "
                                src="https://gull-html-laravel.ui-lib.com/assets/images/faces/1.jpg" alt="">

                        </div>
                        <div class="col-3">
                            <p>test@gmail.com</p>

                        </div>
                        <div class="col-2">
                            <button class="view-details-btn-user">active</button>

                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.9999 28.3333L19.9999 22.3333L25.9999 28.3333L28.3333 26L22.3333 20L28.3333 14L25.9999 11.6667L19.9999 17.6667L13.9999 11.6667L11.6666 14L17.6666 20L11.6666 26L13.9999 28.3333ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2289 13.4999 35.3533C11.4721 34.4778 9.70825 33.2906 8.20825 31.7917C6.70825 30.2917 5.52103 28.5278 4.64659 26.5C3.77214 24.4722 3.33436 22.3056 3.33325 20C3.33325 17.6944 3.77103 15.5278 4.64659 13.5C5.52214 11.4722 6.70936 9.70833 8.20825 8.20833C9.70825 6.70833 11.4721 5.52111 13.4999 4.64667C15.5277 3.77222 17.6944 3.33445 19.9999 3.33333C22.3055 3.33333 24.4721 3.77111 26.4999 4.64667C28.5277 5.52222 30.2916 6.70945 31.7916 8.20833C33.2916 9.70833 34.4794 11.4722 35.3549 13.5C36.2305 15.5278 36.6677 17.6944 36.6666 20C36.6666 22.3056 36.2288 24.4722 35.3533 26.5C34.4777 28.5278 33.2905 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4794 26.4999 35.355C24.4721 36.2306 22.3055 36.6678 19.9999 36.6667ZM19.9999 33.3333C23.7221 33.3333 26.8749 32.0417 29.4583 29.4583C32.0416 26.875 33.3333 23.7222 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95833 23.7221 6.66667 19.9999 6.66667C16.2777 6.66667 13.1249 7.95833 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7222 7.95825 26.875 10.5416 29.4583C13.1249 32.0417 16.2777 33.3333 19.9999 33.3333Z"
                                                fill="#F4473A" />
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-6 ">
                                    <p class="text-start">


                                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_751_224)">
                                                <path
                                                    d="M40 6.54297C40 7.40234 39.8372 8.23568 39.5117 9.04297C39.1862 9.85026 38.7109 10.5664 38.0859 11.1914L12.3633 36.9141L0 40L3.08594 27.6367L28.8086 1.91406C29.4336 1.28906 30.1497 0.813802 30.957 0.488281C31.7643 0.16276 32.5977 0 33.457 0C34.3555 0 35.2018 0.169271 35.9961 0.507812C36.7904 0.846354 37.4805 1.3151 38.0664 1.91406C38.6523 2.51302 39.1211 3.20964 39.4727 4.00391C39.8242 4.79818 40 5.64453 40 6.54297ZM6.36719 27.8906C7.7474 28.3464 8.93229 29.069 9.92188 30.0586C10.9115 31.0482 11.6406 32.2396 12.1094 33.6328L33.2227 12.5L27.5 6.77734L6.36719 27.8906ZM3.4375 36.5625L9.86328 34.9609C9.73307 34.362 9.52474 33.7956 9.23828 33.2617C8.95182 32.7279 8.59375 32.2526 8.16406 31.8359C7.73438 31.4193 7.25911 31.0677 6.73828 30.7812C6.21745 30.4948 5.65104 30.2799 5.03906 30.1367L3.4375 36.5625ZM35 10.7227C35.3255 10.3971 35.638 10.0911 35.9375 9.80469C36.237 9.51823 36.5039 9.21875 36.7383 8.90625C36.9727 8.59375 37.1549 8.2487 37.2852 7.87109C37.4154 7.49349 37.487 7.05729 37.5 6.5625C37.5 6.0026 37.3958 5.48177 37.1875 5C36.9792 4.51823 36.6862 4.08854 36.3086 3.71094C35.931 3.33333 35.5013 3.04036 35.0195 2.83203C34.5378 2.6237 34.0104 2.51302 33.4375 2.5C32.9427 2.5 32.513 2.5651 32.1484 2.69531C31.7839 2.82552 31.4388 3.01432 31.1133 3.26172C30.7878 3.50911 30.4818 3.77604 30.1953 4.0625C29.9089 4.34896 29.6029 4.66146 29.2773 5L35 10.7227Z"
                                                    fill="#4CAF50" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_751_224">
                                                    <rect width="40" height="40" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row text-center pb-2">


                        <div class="col-1">
                            <p>1</p>

                        </div>
                        <div class="col-2">
                            <p>XYZ</p>

                        </div>
                        <div class="col-2">
                            <img class="rounded-circle m-0 avatar-sm-table "
                                src="https://gull-html-laravel.ui-lib.com/assets/images/faces/1.jpg" alt="">

                        </div>
                        <div class="col-3">
                            <p>test@gmail.com</p>

                        </div>
                        <div class="col-2">
                            <button class="view-details-btn-user">active</button>

                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.9999 28.3333L19.9999 22.3333L25.9999 28.3333L28.3333 26L22.3333 20L28.3333 14L25.9999 11.6667L19.9999 17.6667L13.9999 11.6667L11.6666 14L17.6666 20L11.6666 26L13.9999 28.3333ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2289 13.4999 35.3533C11.4721 34.4778 9.70825 33.2906 8.20825 31.7917C6.70825 30.2917 5.52103 28.5278 4.64659 26.5C3.77214 24.4722 3.33436 22.3056 3.33325 20C3.33325 17.6944 3.77103 15.5278 4.64659 13.5C5.52214 11.4722 6.70936 9.70833 8.20825 8.20833C9.70825 6.70833 11.4721 5.52111 13.4999 4.64667C15.5277 3.77222 17.6944 3.33445 19.9999 3.33333C22.3055 3.33333 24.4721 3.77111 26.4999 4.64667C28.5277 5.52222 30.2916 6.70945 31.7916 8.20833C33.2916 9.70833 34.4794 11.4722 35.3549 13.5C36.2305 15.5278 36.6677 17.6944 36.6666 20C36.6666 22.3056 36.2288 24.4722 35.3533 26.5C34.4777 28.5278 33.2905 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4794 26.4999 35.355C24.4721 36.2306 22.3055 36.6678 19.9999 36.6667ZM19.9999 33.3333C23.7221 33.3333 26.8749 32.0417 29.4583 29.4583C32.0416 26.875 33.3333 23.7222 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95833 23.7221 6.66667 19.9999 6.66667C16.2777 6.66667 13.1249 7.95833 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7222 7.95825 26.875 10.5416 29.4583C13.1249 32.0417 16.2777 33.3333 19.9999 33.3333Z"
                                                fill="#F4473A" />
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-6 ">
                                    <p class="text-start">


                                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_751_224)">
                                                <path
                                                    d="M40 6.54297C40 7.40234 39.8372 8.23568 39.5117 9.04297C39.1862 9.85026 38.7109 10.5664 38.0859 11.1914L12.3633 36.9141L0 40L3.08594 27.6367L28.8086 1.91406C29.4336 1.28906 30.1497 0.813802 30.957 0.488281C31.7643 0.16276 32.5977 0 33.457 0C34.3555 0 35.2018 0.169271 35.9961 0.507812C36.7904 0.846354 37.4805 1.3151 38.0664 1.91406C38.6523 2.51302 39.1211 3.20964 39.4727 4.00391C39.8242 4.79818 40 5.64453 40 6.54297ZM6.36719 27.8906C7.7474 28.3464 8.93229 29.069 9.92188 30.0586C10.9115 31.0482 11.6406 32.2396 12.1094 33.6328L33.2227 12.5L27.5 6.77734L6.36719 27.8906ZM3.4375 36.5625L9.86328 34.9609C9.73307 34.362 9.52474 33.7956 9.23828 33.2617C8.95182 32.7279 8.59375 32.2526 8.16406 31.8359C7.73438 31.4193 7.25911 31.0677 6.73828 30.7812C6.21745 30.4948 5.65104 30.2799 5.03906 30.1367L3.4375 36.5625ZM35 10.7227C35.3255 10.3971 35.638 10.0911 35.9375 9.80469C36.237 9.51823 36.5039 9.21875 36.7383 8.90625C36.9727 8.59375 37.1549 8.2487 37.2852 7.87109C37.4154 7.49349 37.487 7.05729 37.5 6.5625C37.5 6.0026 37.3958 5.48177 37.1875 5C36.9792 4.51823 36.6862 4.08854 36.3086 3.71094C35.931 3.33333 35.5013 3.04036 35.0195 2.83203C34.5378 2.6237 34.0104 2.51302 33.4375 2.5C32.9427 2.5 32.513 2.5651 32.1484 2.69531C31.7839 2.82552 31.4388 3.01432 31.1133 3.26172C30.7878 3.50911 30.4818 3.77604 30.1953 4.0625C29.9089 4.34896 29.6029 4.66146 29.2773 5L35 10.7227Z"
                                                    fill="#4CAF50" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_751_224">
                                                    <rect width="40" height="40" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <div class="col-lg-6 col-xs-12 pt-3 shadow" style="background-color: white">
                    <div class="d-flex justify-content-between">
                        <p class="dashboard-color-text m-0">User activity</p>
                        <button class="view-details-btn-selling">Update daily</button>
                    </div>
                    <div class="row">
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>
                        <div class="col-4 py-2 px-4">
                            <p class="m-0 dashboard-color-text">Pages / Visit</p>
                            <p>547657</p>
                        </div>


                    </div>

                </div>

            </div>

        </div> --}}


        <div class="row mx-3 pt-3 shadow " style="background-color: white">
            <p class="dashboard-color-text mx-3">Last 20 Day Leads</p>

            <div class="col">
                <div id="echart-bar-last-leads" style="width: 100%; height: 400px;"></div>
                <div>

                </div>
            </div>

        </div>
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
    <!-- <script src="{{ asset('assets/admin/js/mychart.js') }}"></script> -->
    <!-- main JS
                ============================================ -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.3/echarts.min.js"
        integrity="sha512-EmNxF3E6bM0Xg1zvmkeYD3HDBeGxtsG92IxFt1myNZhXdCav9MzvuH/zNMBU1DmIPN6njrhX1VTbqdJxQ2wHDg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let series =
            '[{"name":" e", "type":"bar", "data":[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],' +
            '"itemStyle": {"color": "#bcbbdd"}},' +
            '{"name":"Online", "type":"bar", "data":[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],' +
            '"itemStyle": {"color": "#7569b3"}}]';

        let piechart =
            '[{"name":"Access From","type":"pie","radius":"50%","data":[{"value":1048,"name":"Design"},{"value":484,"name":"Constructions"},{"value":300,"name":"Design & Constructions"}],"emphasis":{"itemStyle":{"shadowBlur":10,"shadowOffsetX":0,"shadowColor":"rgba(0, 0, 0, 0.5)"}}}]';

        let lastmonth =
            '[{"data":[0, 232, 401, 234, 790, 1230, 920],"type":"line","smooth":true,"itemStyle":{"color":"#5470C6"}}]';

        let lastweek =
            '[{"data":[0, 232, 401, 234, 790, 1230, 920],"type":"line","smooth":true,"itemStyle":{"color":"#91CC75"}}]';

        var leads =
            '[{"data":[40, 80, 20, 90, 30, 80, 40, 90, 20, 80, 30, 45, 50, 110, 90, 120, 45, 120, 135, 40],"type":"line","smooth":true,"label":{"show":true,"position":"top"},"itemStyle":{"color":"#91CC75" ,  "width": "30"}}]';

        // Call the function


        function getLastMonthLine(data) {
            let colors = ['#5470C6', '#91CC75', '#EE6666']; // You can set the colors as needed
            let dom = document.getElementById('echart-bar-last-month');
            let myChart = echarts.init(dom);
            let option = {
                grid: {
                    left: '-15%',
                    right: '0%',
                    bottom: '0%',
                    top: '0%',
                    containLabel: true,
                },
                xAxis: {
                    type: 'category',
                    show: true, // Hide xAxis
                    //  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                yAxis: {
                    type: 'value',
                    show: true, // Hide xAxis
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },

                series: JSON.parse(data),
            };
            myChart.setOption(option);
        }



        // Call the function
        getBarGraph(series);
        getPieGraph(piechart);
        getLastMonthLine(lastmonth);
        getLastWeekLine(lastweek)
        getLeads(leads)


        function getLeads(data) {
            let dom = document.getElementById('echart-bar-last-leads');
            let myChart = echarts.init(dom);
            let option = {
                grid: {
                    left: '0%',
                    right: '0%',
                    bottom: '0%',
                    top: '5%',
                    containLabel: true,
                },
                xAxis: {
                    type: 'category',
                    show: true, // Hide xAxis
                    // data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                yAxis: {
                    type: 'value',
                    show: true, // Hide yAxis
                },
                series: JSON.parse(data),
            };
            myChart.setOption(option);
        }


        function getLastWeekLine(data) {
            let colors = ['#5470C6', '#91CC75', '#EE6666']; // You can set the colors as needed
            let dom = document.getElementById('echart-bar-last-week');
            let myChart = echarts.init(dom);
            let option = {
                grid: {
                    left: '-15%',
                    right: '0%',
                    bottom: '0%',
                    top: '0%',
                    containLabel: true,
                },
                xAxis: {
                    type: 'category',
                    show: true, // Hide xAxis
                    //  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },
                yAxis: {
                    type: 'value',
                    show: true, // Hide xAxis
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                },

                series: JSON.parse(data),
            };
            myChart.setOption(option);
        }

       function getPieGraph(data) {
    // You can set the colors as needed
    let dom = document.getElementById('echart-bar-sales');
    let myChart = echarts.init(dom);

    // Define the color palette
    let colorPalette = ['#62549c', '#bcbbdd', '#7569b3', '#6957af', '#9181bd'];

    let option = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        series: JSON.parse(data).map(seriesItem => {
            return {
                ...seriesItem,
                itemStyle: {
                    color: function(params) {
                        return colorPalette[params.dataIndex];
                    },
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                },
            };
        }),
    };

    myChart.setOption(option);
}


        function getBarGraph(data) {

            let dom = document.getElementById('echart-bar');
            let myChart = echarts.init(dom);
            let option = {

                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross'
                    }
                },
                grid: {

                },
                toolbox: {

                },

                xAxis: [{
                    type: 'category',
                    axisTick: {
                        alignWithLabel: true
                    },
                    data: ['Jan', '', 'Mar', '', 'May', '', 'Jul', '', 'Sep', '', 'Nov',
                        ''
                    ]
                }],
                yAxis: [{
                        type: 'value',
                        alignTicks: true,
                        axisLabel: {
                            formatter: 'KWD {value}'
                        }

                    },

                ],
                series: JSON.parse(data).map(series => ({
                    ...series,
                    barWidth: 21,
                    barCategoryGap: '50%', // Adjust this value to set the width of the bars
                })),
            };
            delete option.tooltip;

            myChart.setOption(option);
        }
    </script>
@endsection
