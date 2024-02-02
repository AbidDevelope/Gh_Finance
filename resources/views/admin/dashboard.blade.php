@extends('admin.layouts.master')
@section('content')
<!-- Start Welcome area -->
<!-- style="background: #BEC0BF" -->
<div class="all-content-wrapper">

    <div class="header-advance-area">

        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list res-mg-t-15">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="icon nalika-home"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>Dashboard</h2>
                                            <p>Welcome to <span class="bread-ntd">GHADER & HAMDOUN</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                            class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>Employee</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up"
                                            aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down"
                                            aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up"
                                            aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Expenses</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up"
                                            aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$100,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- {{-- <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>This Year Revenue</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">6011</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}} -->
    <!-- <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>This Year Revenue</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1"
                                                    checked="">Today</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle"
                                                    id="option2">Week</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="sparklinehome" class="sparkline-container">Loading..</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                        <h3 class="box-title">Total Visit</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter sales-sts-ctn">8659</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Total Page Views</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter sales-sts-ctn">7469</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Unique Visitor</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter sales-sts-ctn">6011</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs">
                        <h3 class="box-title">Bounce Rate</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span
                                    class="sales-sts-ctn">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success last-month-sc cl-one"><i
                                    class="fa fa-sort-asc"></i> 18% last month</small> Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-danger last-month-sc cl-two"><i
                                    class="fa fa-sort-desc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success last-month-sc cl-three"><i
                                    class="fa fa-sort-asc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b>
                            </div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b>
                            </div>
                        </div>
                        <div id="sparkline10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Last 20 Days Revenue</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <a href="#" class="btn btn-dark-blue btn-circle active tip-top"
                                            data-toggle="tooltip" title="Upload">
                                            <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip"
                                            title="Refresh">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-blue-grey btn-circle active tip-top"
                                            data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="analytics-rounded mg-b-30 res-mg-t-30">
                        <div class="analytics-rounded-content">
                            <h5>Percentage distribution</h5>
                            <h2><span class="counter">60</span>/20</h2>
                            <div class="text-center">
                                <div id="sparkline51"></div>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-rounded">
                        <div class="analytics-rounded-content">
                            <h5>Percentage division</h5>
                            <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                            <div class="text-center">
                                <div id="sparkline52"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->





    <div class="container-fluid px-2 ">


        <div class="row   mx-3">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="80" height="80" viewBox="0 0 232 241" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="232" height="241" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_759_63" transform="scale(0.00431034 0.00414938)" />
                                </pattern>
                                <image id="image0_759_63" width="232" height="241"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0 dashboard-color-text">EMPLOYEE</p>
                        <p class="m-0 dashboard-color-subcolor">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="80" height="80" viewBox="0 0 232 241" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="232" height="241" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_760_68"
                                        transform="matrix(0.00423729 0 0 0.00407905 0 -0.000492299)" />
                                </pattern>
                                <image id="image0_760_68" width="236" height="222"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0 dashboard-color-text">TAX DEDUCTION</p>
                        <p class="m-0 dashboard-color-subcolor">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="80" height="80" viewBox="0 0 232 241" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="232" height="241" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_760_67"
                                        transform="matrix(0.00397053 0 0 0.00382225 -0.000286164 0.0290456)" />
                                </pattern>
                                <image id="image0_760_67" width="252" height="241"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0 dashboard-color-text">REVENUE</p>
                        <p class="m-0 dashboard-color-subcolor">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="80" height="80" viewBox="0 0 232 241" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="232" height="241" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_760_65"
                                        transform="matrix(0.00321077 0 0 0.00309086 -0.000879662 0.190871)" />
                                </pattern>
                                <image id="image0_760_65" width="312" height="196"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                    </div>
                    <div class="col-8">
                        <p class="m-0 dashboard-color-text">EXPENSES</p>
                        <p class="m-0 dashboard-color-subcolor">$768678</p>
                    </div>
                </div>

            </div>



        </div>

    </div>

    <div class="container-fluid my-4">
        <div class="row mx-3">
            <div class="col-lg-8 col-md-12">
                <div>
                    <div class="caption pro-sl-hd">
                        <span class="caption-subject text-uppercase pb-4"><b>This Year Revenue</b></span>
                    </div>
                    <!-- <div id="sparklinehome" class="sparkline-container">Loading..</div> -->
                    <div id="echart-bar" style="width: 100%; height: 400px;"></div>
                    <!-- <div id="thisyearsales " class="sparkline-container">Loading..</div> -->

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="caption pro-sl-hd">
                    <span class="caption-subject text-uppercase pb-4"><b>Sales by country</b></span>
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



    <div class="container-fluid my-4">
        <div class="row mx-3">
            <div class="col-xs-12 col-md-6">
                <div class="row p-0">
                    <div class="col-xs-12 col-md-6">
                        <p class="m-0 dashboard-color-text">Last Month Sale</p>
                        <p class="dashboard-color-subcolor">$7656765</p>
                        <div id="echart-bar-last-month" style="width: 100%; height:400px ; position:relative"></div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="m-0 dashboard-color-text">Last Week Sale</p>
                        <p class="dashboard-color-subcolor">$7656765</p>
                        <div id="echart-bar-last-week" style="width: 100%; height:400px"></div>

                    </div>
                </div>
            </div>
            <div class=" col-xs-12 col-md-6">
                <div>
                    <p class="dashboard-color-text m-0">Top Selling Products</p>
                    <div class="d-flex align-items-center flex-column flex-md-row justify-content-center">
                        <div class="col-lg-3 col-12 p-0">
                            <p class="m-0 avatar-lg-top">
                                <img
                                    src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                            </p>
                        </div>
                        <div class="col-lg-7 col-12 p-0">
                            <p class="mb-2 top-selling-tittle">Wireless Headphone E23</p>
                            <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                            <p class="text-small text-danger m-0">$46456 <del class="text-muted">$57567</del></p>
                        </div>
                        <div class="col-lg-2 col-12 p-0">
                            <button class="view-details-btn">View details</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-lg-3 col-12 p-0">
                            <p class="m-0 avatar-lg-top">
                                <img
                                    src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                            </p>
                        </div>
                        <div class="col-lg-7 col-12 p-0">
                            <p class="mb-2 top-selling-tittle">Wireless Headphone E23</p>
                            <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                            <p class="text-small text-danger m-0">$46456 <del class="text-muted">$57567</del></p>
                        </div>
                        <div class="col-lg-2 col-12 p-0">
                            <button class="view-details-btn">View details</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-lg-3 col-12 p-0">
                            <p class="m-0 avatar-lg-top">
                                <img
                                    src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                            </p>
                        </div>
                        <div class="col-lg-7 col-12 p-0">
                            <p class="mb-2 top-selling-tittle">Wireless Headphone E23</p>
                            <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                            <p class="text-small text-danger m-0">$46456 <del class="text-muted">$57567</del></p>
                        </div>
                        <div class="col-lg-2 col-12 p-0">
                            <button class="view-details-btn">View details</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-lg-3 col-12 p-0">
                            <p class="m-0 avatar-lg-top">
                                <img
                                    src="https://gull-html-laravel.ui-lib.com/assets/images/products/headphone-4.jpg" />
                            </p>
                        </div>
                        <div class="col-lg-7 col-12 p-0">
                            <p class="mb-2 top-selling-tittle">Wireless Headphone E23</p>
                            <p class="m-0 top-selling-subtittle">Lorem ipsum dolor sit amet consectetur.</p>
                            <p class="text-small text-danger m-0">$46456 <del class="text-muted">$57567</del></p>
                        </div>
                        <div class="col-lg-2 col-12 p-0">
                            <button class="view-details-btn">View details</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-4 ">
        <div class="row mx-3 g-5">
            <div class="col-lg-6 col-xs-12">
                <div class="d-flex justify-content-between">
                    <p>New Users</p>
                    <p class="">


                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                <p class="text-end"><svg width="20" height="20" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
            <div class="col-lg-6 col-xs-12 ">
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

    </div>


    <div class="row mx-3">
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
    '[{"name":"Offline", "type":"bar", "data":[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],' +
    '"itemStyle": {"color": "#bcbbdd"}},' +
    '{"name":"Online", "type":"bar", "data":[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],' +
    '"itemStyle": {"color": "#7569b3"}}]';

let piechart =
    '[{"name":"Access From","type":"pie","radius":"50%","data":[{"value":1048,"name":"Search Engine"},{"value":735,"name":"Direct"},{"value":580,"name":"Email"},{"value":484,"name":"Union Ads"},{"value":300,"name":"Video Ads"}],"emphasis":{"itemStyle":{"shadowBlur":10,"shadowOffsetX":0,"shadowColor":"rgba(0, 0, 0, 0.5)"}}}]';

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
            left: '-0%',
            right: '0%',
            bottom: '0%',
            top: '0%',
            // containLabel: true,
        },
        xAxis: {
            type: 'category',
            show: false, // Hide xAxis
            // data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value',
            show: false, // Hide xAxis
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
            top: '0%',
            containLabel: true,
        },
        xAxis: {
            type: 'category',
            show: false, // Hide xAxis
            // data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value',
            show: false, // Hide yAxis
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
            show: false, // Hide xAxis
            // data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value',
            show: false, // Hide xAxis
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
                }
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
        legend: {
            data: ['Offline', 'Online'],
            left: '70%',
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
                    formatter: '${value} -'
                }

            },

        ],
        series: JSON.parse(data).map(series => ({
            ...series,
            barWidth: 21,
            barCategoryGap: '50%', // Adjust this value to set the width of the bars
        })),
    };
    myChart.setOption(option);
}
</script>



@endsection