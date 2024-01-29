@extends('admin.layouts.master')
@section('content')
<!-- Start Welcome area -->
<div class="all-content-wrapper" style="background: #BEC0BF">

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
    <div class="section-admin container-fluid">
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
    </div>

    {{-- <div class="product-sales-area mg-tb-30">
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
        </div> --}}
    <div class="product-sales-area mg-tb-30">
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
    </div>
    <div class="traffic-analysis-area">
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
    </div>
    <div class="product-sales-area mg-tb-30">
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
    </div>
    <div class="container-fluid px-2 ">


        <div class="row  bg-red  mx-3">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.7778 22.2222C27.7778 16.3285 30.119 10.6762 34.2865 6.50874C38.454 2.34126 44.1063 0 50 0C55.8937 0 61.546 2.34126 65.7135 6.50874C69.881 10.6762 72.2222 16.3285 72.2222 22.2222C72.2222 28.1159 69.881 33.7682 65.7135 37.9357C61.546 42.1032 55.8937 44.4444 50 44.4444C44.1063 44.4444 38.454 42.1032 34.2865 37.9357C30.119 33.7682 27.7778 28.1159 27.7778 22.2222ZM27.7778 55.5556C20.4107 55.5556 13.3453 58.4821 8.13592 63.6915C2.92658 68.9008 0 75.9662 0 83.3333C0 87.7536 1.75595 91.9928 4.88155 95.1184C8.00716 98.2441 12.2464 100 16.6667 100H83.3333C87.7536 100 91.9928 98.2441 95.1184 95.1184C98.2441 91.9928 100 87.7536 100 83.3333C100 75.9662 97.0734 68.9008 91.8641 63.6915C86.6547 58.4821 79.5893 55.5556 72.2222 55.5556H27.7778Z"
                                fill="#F8F9F9" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0">Sales</p>
                        <p class="m-0">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.7778 22.2222C27.7778 16.3285 30.119 10.6762 34.2865 6.50874C38.454 2.34126 44.1063 0 50 0C55.8937 0 61.546 2.34126 65.7135 6.50874C69.881 10.6762 72.2222 16.3285 72.2222 22.2222C72.2222 28.1159 69.881 33.7682 65.7135 37.9357C61.546 42.1032 55.8937 44.4444 50 44.4444C44.1063 44.4444 38.454 42.1032 34.2865 37.9357C30.119 33.7682 27.7778 28.1159 27.7778 22.2222ZM27.7778 55.5556C20.4107 55.5556 13.3453 58.4821 8.13592 63.6915C2.92658 68.9008 0 75.9662 0 83.3333C0 87.7536 1.75595 91.9928 4.88155 95.1184C8.00716 98.2441 12.2464 100 16.6667 100H83.3333C87.7536 100 91.9928 98.2441 95.1184 95.1184C98.2441 91.9928 100 87.7536 100 83.3333C100 75.9662 97.0734 68.9008 91.8641 63.6915C86.6547 58.4821 79.5893 55.5556 72.2222 55.5556H27.7778Z"
                                fill="#F8F9F9" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0">Sales</p>
                        <p class="m-0">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.7778 22.2222C27.7778 16.3285 30.119 10.6762 34.2865 6.50874C38.454 2.34126 44.1063 0 50 0C55.8937 0 61.546 2.34126 65.7135 6.50874C69.881 10.6762 72.2222 16.3285 72.2222 22.2222C72.2222 28.1159 69.881 33.7682 65.7135 37.9357C61.546 42.1032 55.8937 44.4444 50 44.4444C44.1063 44.4444 38.454 42.1032 34.2865 37.9357C30.119 33.7682 27.7778 28.1159 27.7778 22.2222ZM27.7778 55.5556C20.4107 55.5556 13.3453 58.4821 8.13592 63.6915C2.92658 68.9008 0 75.9662 0 83.3333C0 87.7536 1.75595 91.9928 4.88155 95.1184C8.00716 98.2441 12.2464 100 16.6667 100H83.3333C87.7536 100 91.9928 98.2441 95.1184 95.1184C98.2441 91.9928 100 87.7536 100 83.3333C100 75.9662 97.0734 68.9008 91.8641 63.6915C86.6547 58.4821 79.5893 55.5556 72.2222 55.5556H27.7778Z"
                                fill="#F8F9F9" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0">Sales</p>
                        <p class="m-0">$768678</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="row align-items-center">
                    <div class="col-4">
                        <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.7778 22.2222C27.7778 16.3285 30.119 10.6762 34.2865 6.50874C38.454 2.34126 44.1063 0 50 0C55.8937 0 61.546 2.34126 65.7135 6.50874C69.881 10.6762 72.2222 16.3285 72.2222 22.2222C72.2222 28.1159 69.881 33.7682 65.7135 37.9357C61.546 42.1032 55.8937 44.4444 50 44.4444C44.1063 44.4444 38.454 42.1032 34.2865 37.9357C30.119 33.7682 27.7778 28.1159 27.7778 22.2222ZM27.7778 55.5556C20.4107 55.5556 13.3453 58.4821 8.13592 63.6915C2.92658 68.9008 0 75.9662 0 83.3333C0 87.7536 1.75595 91.9928 4.88155 95.1184C8.00716 98.2441 12.2464 100 16.6667 100H83.3333C87.7536 100 91.9928 98.2441 95.1184 95.1184C98.2441 91.9928 100 87.7536 100 83.3333C100 75.9662 97.0734 68.9008 91.8641 63.6915C86.6547 58.4821 79.5893 55.5556 72.2222 55.5556H27.7778Z"
                                fill="#F8F9F9" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <p class="m-0">Sales</p>
                        <p class="m-0">$768678</p>
                    </div>
                </div>

            </div>



        </div>

    </div>

    <div class="container-fluid my-4">
        <div class="row mx-3">
            <div class="col-lg-8 col-md-12">
                <div>
                    <p>This Year Sales</p>
                    <div id="sparklinehome" class="sparkline-container">Loading..</div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div>
                    <p>Sales by Countries</p>

                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid my-4">
        <div class="row mx-3">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p>Last Month Sale</p>
                        <p>$7656765</p>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>Last Week Sale</p>
                        <p>$7656765</p>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div>
                    <p>Top Selling Products</p>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-2 col-xs-12">
                            <p class="m-0">image</p>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <p class="m-0">text</p>
                            <p class="m-0">subtitle</p>
                            <p>$46456 <del>$57567</del></p>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <p>buttom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-4 ">
        <div class="row mx-3">
            <div class="col-lg-6 col-xs-12">
                <div class="d-flex justify-content-between">
                    <p>New Users</p>
                    <p>icon</p>

                </div>
                <div class="row text-center">


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
                <div class="row text-center">


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
                        <p>test@gmail.com</p>

                    </div>
                    <div class="col-2">
                        <p>active</p>

                    </div>
                    <div class="col-2">
                        <div class="row">
                            <div class="col-6">
                                <p>icon1</p>
                            </div>

                            <div class="col-6">
                                <p>icon2</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row text-center">


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
                        <p>test@gmail.com</p>

                    </div>
                    <div class="col-2">
                        <p>active</p>

                    </div>
                    <div class="col-2">
                        <div class="row">
                            <div class="col-6">
                                <p>icon1</p>
                            </div>

                            <div class="col-6">
                                <p>icon2</p>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
            <div class="col-lg-6 col-xs-12 ">
                <div class="d-flex justify-content-between">
                    <p>User activity</p>
                    <p>icon</p>
                </div>
                <div class="row">
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>
                    <div class="col-4 py-2 px-4">
                        <p class="m-0">Pages / Visit</p>
                        <p>547657</p>
                    </div>


                </div>

            </div>

        </div>

    </div>

    <div class="container fluid ">
        <div class="row mx-3">
            <p>Last 20 Day Leads</p>

            <div class="col">
                <p>graph</p>
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
<!-- main JS
        ============================================ -->
<script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endsection