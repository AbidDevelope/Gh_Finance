<style>
    i{
        font-size: 30px;
    }
</style>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">

        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}" alt="" /></a>
                {{-- <h2>{{ Auth::guard('admin')->user()->first_name }} <span class="min-dtn">{{ Auth::guard('admin')->user()->last_name }}</span></h2> --}}
                <h2> <span class="min-dtn">GHADER & HAMDOUN</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">

                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar mb-10"  style="height: 400px; overflow-y: auto;">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{ route('dashboard') }}">
                            <img src="{{ asset('assets/admin/img/icon/dashboard.png') }}" alt="">
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/services.png') }}" alt=""> <span class="mini-click-non">Services</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="{{ route('all/services') }}"><img src="{{ asset('assets/admin/img/icon/order-white.png') }}" alt=""><span class="mini-sub-pro">All</span></a></li>
                            <li><a title="Lock" href="{{ route('designs') }}"><img src="{{ asset('assets/admin/img/icon/design.png') }}" alt=""><span class="mini-sub-pro">Designs</span></a></li>
                            <li><a title="Password Recovery" href="{{ route('constructions') }}"><img src="{{ asset('assets/admin/img/icon/construction.png') }}" alt=""><span class="mini-sub-pro">Constructions</span></a></li>
                            <li><a title="Password Recovery" href="{{ route('design/constructions') }}"><img src="{{ asset('assets/admin/img/icon/design-constructions.png') }}" alt=""><span class="mini-sub-pro">Design & Cons.</span></a></li>
                            {{-- <li><a title="Password Recovery" href="#"><span class="mini-sub-pro">AIU</span></a></li> --}}
                            {{-- <li><a title="Password Recovery" href="#"><span class="mini-sub-pro">Bidaa</span></a></li> --}}
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/payables.png') }}" alt=""> <span class="mini-click-non">Payables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="#"><span class="mini-sub-pro">Payables 1</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/receivables.png') }}" alt=""> <span class="mini-click-non">Receivables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="#"><span class="mini-sub-pro">Receivables 2</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/finance.png') }}" alt=""> <span class="mini-click-non">Finance</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            {{-- <li><a title="Inbox"     href="{{ route('proposals') }}"><span class="mini-sub-pro">Proposals</span></a></li> --}}
                            {{-- <li><a title="View Mail" href="{{ route('estimates') }}"><span class="mini-sub-pro">Estimates</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('invoices') }}"><span class="mini-sub-pro">Invoices</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('quotation') }}"><span class="mini-sub-pro">Quotation</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('bankaccounts') }}"><span class="mini-sub-pro">Bank Account</span></a></li> --}}
                            <li><a title="Compose Mail" href="{{ route('payments') }}"><img src="{{ asset('assets/admin/img/icon/payments.png') }}" alt=""><span class="mini-sub-pro">Payments</span></a></li>
                            <li><a title="Compose Mail" href="{{ route('expenses') }}"><img src="{{ asset('assets/admin/img/icon/expense.png') }}" alt=""><span class="mini-sub-pro">Expenses</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/invoice2.png') }}" alt=""> <span class="mini-click-non">Invoices</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li>
                                <a title="Login" href="{{ route('invoices') }}"><img src="{{ asset('assets/admin/img/icon/invoice.png') }}" alt=""><span class="mini-sub-pro">Invoices List</span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/quotation.png') }}" alt=""> <span class="mini-click-non">Quotations</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="{{ route('quotation') }}"><img src="{{ asset('assets/admin/img/icon/file.png') }}" alt=""><span class="mini-sub-pro">Quotation List</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('assets/admin/img/icon/beneficiary.png') }}" alt=""> <span class="mini-click-non">Beneficiary</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="{{ route('beneficiary') }}"><img src="{{ asset('assets/admin/img/icon/add-beneficiary.png') }}" alt=""><span class="mini-sub-pro">Beneficiary List</span></a></li>
                        </ul>
                    </li>
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
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Services <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a title="Inbox" href="{{ route('all/services') }}"><span class="mini-sub-pro">All</span></a></li>
                                    <li><a title="View Mail" href="#"><span class="mini-sub-pro">Design</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Construction</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">AIU</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Bidaa</span></a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Payables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Payables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Receivables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Receivables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Finance <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('payments') }}">Payments</a></li>
                                    <li><a href="{{ route('expenses') }}">Expenses</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Invoices <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('invoices') }}">Invoices List</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Quotations <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
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
