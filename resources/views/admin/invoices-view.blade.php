@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper" >

        <div class="header-advance-area" style="background:#fff">

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
                                                <h2>Invoice</h2>
                                                <p>Welcome to {{ Auth::guard('admin')->user()->first_name }} <span
                                                        class="bread-ntd">{{ Auth::guard('admin')->user()->last_name }}</span>
                                                </p>
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

            <!-- Static Table Start -->
            <div class="static-table-area mg-t-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <article>
                                <h1>Recipient</h1>
                                <address class="norm">
                                    <h4><b>MRS.</b> SHAHED AL-SABEEH</h4>
                                    <p> name@client.com <br>
                                    <p> IBRAH COMPANY <br>
                                    <p> KUWAI,USA <br>
                                    <p> Phone: 1-864-933-0793</p>
                                </address>

                                <table class="meta">
                                    <tr>
                                        <th><span>Invoice Date </span></th>
                                        <td><span>20/11/2023</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Invoice #</span></th>
                                        <td><span>101138</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Payment Due</span></th>
                                        <td><span id="prefix">$</span><span>600.00</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Due Date</span></th>
                                        <td><span>January 1, 2019</span></td>
                                    </tr>
                                </table>
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DESCRIPTION OF WORK</th>
                                            <th>UNIT</th>
                                            <th>QTY.</th>
                                            <th> RATE/K.D</th>
                                            <th>TOTAL/K.D</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mamun</td>
                                            <td>Roshid</td>
                                            <td>@Facebook</td>
                                            <td>@Facebook</td>
                                            <td>@Facebook</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Suhag</td>
                                            <td>Khan</td>
                                            <td>@Twitter</td>
                                            <td>@Twitter</td>
                                            <td>@Twitter</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sakil</td>
                                            <td>Shak</td>
                                            <td>@Linkedin</td>
                                            <td>@Linkedin</td>
                                            <td>@Linkedin</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="sign">
                                    <tr>
                                        {{-- <td><img src="signature.png" alt="sdd"></td> --}}
                                    </tr>
                                </table>

                                <table class="meta">
                                    <tr>
                                        <th>SubTotal:</th>
                                        <td><span data-prefix>$</span><span>600.00</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Discount:</span></th>
                                        <td><span data-prefix>$</span><span>600.00</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Total</span></th>
                                        <td><span data-prefix>$</span><span>600.00</span></td>
                                    </tr>
                                </table><br>
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2">100% PAYMENT UPON JOB COMPLETION & HANDOVER</td>
                                            <td>5,900.000</td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>(KUWAITI DINARS FIVE THOUSAND NINE HUNDRED ONLY)</th>
                                            <th>PAYMENT DUE</th>
                                            <th>5,900.000</th>
                                        </tr>
                                    </thead>
                                </table><br>
                                <address class="norm">
                                    <p> <b style="background: #1B2A47; color:#fff; padding: 5px">BENEFICIARY'S BANK DETAILS</b> <br>
                                    <p> <b>BENEFICIARY NAME :</b> AG PARTNERS GENERAL TRADING & CONTRACTING</p>
                                    <p> <b>BANK NAME :</b> NATIONAL BANK OF KUWAIT (NBK) <br>
                                    <p> <b>ACCOUNT # :</b> 2021637667 <br>
                                    <p> <b>IBAN :</b> KW93NBOK0000000000002021637667 <br>
                                </address>
                            </article>
                            <address style="float: right; color:#000">
                                <p><b>SIGNATURE :</b> ..................</p>
                                <p> <b>NAME :</b> ................. <br>
                                <p> <b>DATE # :</b> ................ <br>
                                <p> <b style="background: #1B2A47; color:#fff; padding: 5px">AG GENERAL TRAD. & CONT. CO. :</b> <br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
