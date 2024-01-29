<style>
    i{
        font-size: 30px;
        color: #fff;
    }
</style>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">

        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}" alt="" /></a>
                {{-- <h2>{{ Auth::guard('admin')->user()->first_name }} <span class="min-dtn">{{ Auth::guard('admin')->user()->last_name }}</span></h2> --}}
                <h2> <span class="min-dtn">GHADER & HAMDOUN</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">

                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{ route('admin/dashboard') }}">
                            <i class="fa fa-dashboard" style="font-size: 24px;color:white"></i>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa-sharp fa-solid fa-gears" style="color:white;"></i> <span class="mini-click-non">Services</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="{{ route('all/services') }}"><img src="{{ asset('assets/admin/img/icon/order-white.png') }}" alt=""><span class="mini-sub-pro">All</span></a></li>
                            <li><a title="Lock" href="#"><span class="mini-sub-pro">Design</span></a></li>
                            <li><a title="Password Recovery" href="#"><span class="mini-sub-pro">Construction</span></a></li>
                            <li><a title="Password Recovery" href="#"><span class="mini-sub-pro">AIU</span></a></li>
                            <li><a title="Password Recovery" href="#"><span class="mini-sub-pro">Bidaa</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-settings icon-wrap"></i> <span class="mini-click-non">Payables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="#"><span class="mini-sub-pro">Payables 1</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-settings icon-wrap"></i> <span class="mini-click-non">Receivables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="#"><span class="mini-sub-pro">Receivables 2</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="" aria-expanded="false"><i class="far fa-dollar-sign icon-wrap"></i> <span class="mini-click-non">Finance</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            {{-- <li><a title="Inbox"     href="{{ route('proposals') }}"><span class="mini-sub-pro">Proposals</span></a></li> --}}
                            {{-- <li><a title="View Mail" href="{{ route('estimates') }}"><span class="mini-sub-pro">Estimates</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('invoices') }}"><span class="mini-sub-pro">Invoices</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('quotation') }}"><span class="mini-sub-pro">Quotation</span></a></li> --}}
                            {{-- <li><a title="Compose Mail" href="{{ route('bankaccounts') }}"><span class="mini-sub-pro">Bank Account</span></a></li> --}}
                            <li><a title="Compose Mail" href="{{ route('payments') }}"><span class="mini-sub-pro">Payments</span></a></li>
                            <li><a title="Compose Mail" href="{{ route('expenses') }}"><span class="mini-sub-pro">Expenses</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fas fa-file-invoice-dollar" style="color: white;"></i> <span class="mini-click-non">Invoices</span></a>
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
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('admin/dashboard') }}">Dashboard <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                    
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Finance <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a title="Inbox" href="#"><span class="mini-sub-pro">Proposal</span></a></li>
                                    <li><a title="View Mail" href="#"><span class="mini-sub-pro">Estimates</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Invoices</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Payments</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Credit Notes</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Expenses</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Bank Account</span></a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="login.html">Login</a>
                                    </li>
                                    <li><a href="register.html">Register</a>
                                    </li>
                                    <li><a href="lock.html">Lock</a>
                                    </li>
                                    <li><a href="password-recovery.html">Password Recovery</a>
                                    </li>
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