@extends('admin.layouts.master')
@section('content')
<div class="all-content-wrapper">
    <div class="header-advance-area" style="background: #fff">
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
                                            <h2>Quotation</h2>
                                            {{-- <p>Welcome to {{ Auth::guard('admin')->user()->first_name }} <span class="bread-ntd">{{ Auth::guard('admin')->user()->last_name }}</span>
                                            </p> --}}
                                            <p>
                                                <span>Welcome to GHADER & HAMDOUN</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        {{-- <select  class="changeLang" style="color: #000" onchange="changeLanguage(this.value)">
                                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                                        </select> --}}
                                        <div>
                                            <a href="{{ route('lang.switch', 'en') }}">English</a>
                                            |
                                            <a href="{{ route('lang.switch', 'ar') }}">العربية</a>
                                        </div>
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Table Start -->
        {{-- English Content Start --}}
        <div class="static-table-area mg-t-15" id="englishContent" style="{{ !session('locale') || session('locale') === 'en' ? '' : 'display: none;' }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <article>
                            <h1>Customer Info</h1>
                            <address class="norm">
                                <h4>OMAR AL-KADI</h4>
                                <p>FAIHA DEWANIYA</p>
                                <p>KUWAIT,USA</p>
                                <p>Phone: 1-864-933-0793</p>
                            </address>

                            <table class="meta">
                                <tr>
                                    <th><span>Date</span></th>
                                    <td><span> {{ \Carbon\Carbon::parse($quotations->quotation_date)->format('d M Y') }} </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span>Valid Until</span></th>
                                    <td><span>101138</span></td>
                                </tr>
                                <tr>
                                    <th><span>Quote*</span></th>
                                    <td><span>{{ $quotations->quotation_number }}</span></td>
                                </tr>
                            </table>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>QUOTE/PROJECT OF DESCRIPTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Supply & Installation</td>
                                    </tr>
                                </tbody>
                            </table><br>
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
                                    @foreach ($quotations->quotationItems as $key=>$quotation)   
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $quotation->description }}</td>
                                        <td>{{ $quotation->unit }}</td>
                                        <td>{{ $quotation->qty }}</td>
                                        <td>{{ $quotation->price }}</td>
                                        <td>{{ $quotation->total }}</td>
                                    </tr>
                                    @endforeach
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
                                    <td><span data-prefix></span><span>{{ $quotations->subtotal }}</span></td>
                                </tr>
                                <tr>
                                    <th><span>Others:</span></th>
                                    <td><span data-prefix></span><span>{{ $quotations->others }}</span></td>
                                </tr>
                                <tr>
                                    <th><span>Grand Total</span></th>
                                    <td><span data-prefix></span><span>{{ $quotations->grandtotal }}</span></td>
                                </tr>
                            </table><br><br>
                            <div class="norm">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">PAYMENT TERMS</b> <br>
                                <p><b>1 .</b> 30% AG Advanced Payments CONTRACTING</p>
                                <p> <b>2 .</b> 30% AG Advanced Payments CONTRACTING</p>
                                <p> <b>3 .</b> 30% AG Advanced Payments CONTRACTING</p>
                            </div><br>
                            <div class="norm">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">GENERAL NOTES</b> <br>
                                <p><b>1 .</b> 30% AG Advanced Payments CONTRACTING</p>
                                <p> <b>2 .</b> 30% AG Advanced Payments CONTRACTING</p>
                                <p> <b>3 .</b> 30% AG Advanced Payments CONTRACTING</p>
                            </div><br>
                            <div class="norm">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">DURATION</b> <br>
                                <p><b>1 .</b> 30% AG Advanced Payments CONTRACTING</p>
                            </div>
                        </article>
                        <address style="float: right; color:#000">
                            <p><b>SIGNATURE :</b> ..................</p>
                            <p> <b>NAME :</b> ................. <br>
                            <p> <b>DATE # :</b> ................ <br>
                            <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">CUSTOMER ACCEPTANCE</b> <br>
                        </address>
                        <address style="color: #000">
                            <p><b>SIGNATURE :</b> ..................</p>
                            <p> <b>NAME :</b> ................. <br>
                            <p> <b>DATE # :</b> ................ <br>
                            <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">AG GENERAL TRAD. & CONT. CO.
                                    :</b> <br>
                        </address>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row footer-quotation">
                    <div class="col-lg-12">
                        <div class="footer-quotation-p">
                            <p>AG Partners General Trading & Contracting</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-quotation-p" style="color: #000">
                            <p>Salmiya - Block 4 - Salem Al Mubarak Street - Saheb Tower - 3rd Floor</p>
                            <div class="footer-quotation-down">
                                <p>Mob - +96566532467</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- English Content End --}}

        {{-- Arabic Quatation Start --}}
        <div class="static-table-area mg-t-15" id="arabicContent" style="{{ session()->get('locale') == 'ar' ? '' : 'display: none;' }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <article>
                            <table class="meta-arabic">
                                <tr>
                                    <td><span> {{ GoogleTranslate::trans('11/12/2023', app()->getLocale()) }}</span>
                                    </td>
                                    <th><span>{{ GoogleTranslate::trans('Date', app()->getLocale()) }}</span></th>
                                </tr>
                                <tr>
                                    <td><span>{{ GoogleTranslate::trans('101138', app()->getLocale()) }}</span></td>
                                    <th><span>{{ GoogleTranslate::trans('Valid Until', app()->getLocale()) }}</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td><span>{{ GoogleTranslate::trans('AG. FD.', app()->getLocale()) }}</span></td>
                                    <th><span>{{ GoogleTranslate::trans('Quote*', app()->getLocale()) }}</span></th>
                                </tr>
                            </table>
                            <h1>Customer Info</h1>
                            <address class="norm-arabic">
                                <h4>{{ GoogleTranslate::trans('OMAR AL-KADI', app()->getLocale()) }}</h4>
                                <p>{{ GoogleTranslate::trans('FAIHA DEWANIYA', app()->getLocale()) }}</p>
                                <p>{{ GoogleTranslate::trans('KUWAIT,USA', app()->getLocale()) }}</p>
                                <p>{{ GoogleTranslate::trans('Phone: 1-864-933-0793', app()->getLocale()) }}</p>
                            </address>
                            <table class="table table-responsive table-arabic">
                                <thead>
                                    <tr>
                                        <th>{{ GoogleTranslate::trans('(KUWAITI DINARS FIVE THOUSAND NINE HUNDRED ONLY)*', app()->getLocale()) }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ GoogleTranslate::trans('100% PAYMENT UPON JOB COMPLETION & HANDOVER', app()->getLocale()) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table><br>
                            <table class="table table-responsive table-arabic">
                                <thead>
                                    <tr>
                                        <th>{{ GoogleTranslate::trans('TOTAL/K.D', app()->getLocale()) }}</th>
                                        <th>{{ GoogleTranslate::trans('RATE/K.D', app()->getLocale()) }}</th>
                                        <th>{{ GoogleTranslate::trans('QTY.', app()->getLocale()) }}</th>
                                        <th>{{ GoogleTranslate::trans('UNIT', app()->getLocale()) }}</th>
                                        <th>{{ GoogleTranslate::trans('DESCRIPTION OF WORK', app()->getLocale()) }}
                                        </th>
                                        <th>{{ GoogleTranslate::trans('ID', app()->getLocale()) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>@Facebook</td>
                                        <td>@Facebook</td>
                                        <td>@Facebook</td>
                                        <td>Roshid</td>
                                        <td>Mamun</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>@Twitter</td>
                                        <td>@Twitter</td>
                                        <td>@Twitter</td>
                                        <td>Khan</td>
                                        <td>Suhag</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>@Linkedin</td>
                                        <td>@Linkedin</td>
                                        <td>@Linkedin</td>
                                        <td>Shak</td>
                                        <td>Sakil</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="sign-arabic">
                                <tr>
                                    {{-- <td><img src="signature.png" alt="sdd"></td> --}}
                                </tr>
                            </table>

                            <table class="meta-arabic">
                                <tr>
                                    <td><span data-prefix>$</span><span>{{ GoogleTranslate::trans('600.00', app()->getLocale()) }}</span>
                                    </td>
                                    <th>{{ GoogleTranslate::trans(':SubTotal', app()->getLocale()) }}</th>
                                </tr>
                                <tr>
                                    <td><span data-prefix>$</span><span>{{ GoogleTranslate::trans('600.00', app()->getLocale()) }}</span>
                                    </td>
                                    <th><span>{{ GoogleTranslate::trans('Others', app()->getLocale()) }}</span></th>
                                </tr>
                                <tr>
                                    <td><span data-prefix>$</span><span>{{ GoogleTranslate::trans('600.00', app()->getLocale()) }}</span>
                                    </td>
                                    <th><span>{{ GoogleTranslate::trans('Grand Total', app()->getLocale()) }}</span>
                                    </th>
                                </tr>
                            </table><br><br><br><br>
                            <div class="norm-arabic">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">{{ GoogleTranslate::trans('PAYMENT TERMS', app()->getLocale()) }}</b>
                                    <br>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        1 </b></p>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        2 </b></p>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        3 </b></p>
                            </div><br>
                            <div class="norm-arabic">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">{{ GoogleTranslate::trans('GENERAL NOTES', app()->getLocale()) }}</b>
                                    <br>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        1 </b></p>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        2 </b></p>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>.
                                        3 </b></p>
                            </div><br>
                            <div class="norm-arabic">
                                <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">{{ GoogleTranslate::trans('DURATION', app()->getLocale()) }}</b>
                                    <br>
                                <p> {{ GoogleTranslate::trans('Advanced Payments CONTRACTING', app()->getLocale()) }}<b>
                                        . 1 </b></p>
                            </div>
                        </article>
                        <address class="norm-arabic" style="float: right; color:#000">
                            <p> .................. <b>:
                                    {{ GoogleTranslate::trans('SIGNATURE', app()->getLocale()) }}</b></p>
                            <p> ................. <b>: {{ GoogleTranslate::trans('NAME', app()->getLocale()) }}</b></p>
                            <br>
                            <p> ................ <b> : {{ GoogleTranslate::trans('DATE', app()->getLocale()) }}</b>
                                <br>
                            <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">{{ GoogleTranslate::trans('CUSTOMER ACCEPTANCE', app()->getLocale()) }}</b>
                                <br>
                        </address>
                        <address style="color: #000">
                            <p> .................. <b>:
                                    {{ GoogleTranslate::trans('SIGNATURE', app()->getLocale()) }}</b></p>
                            <p> ................. <b>: {{ GoogleTranslate::trans('NAME', app()->getLocale()) }}</b></p>
                            <br>
                            <p> ................ <b> : {{ GoogleTranslate::trans('DATE', app()->getLocale()) }}</b>
                                <br>
                            <p> <b style="background: var(--filter-color); color:#fff; padding: 5px">
                                    :{{ GoogleTranslate::trans('AG GENERAL TRAD. & CONT. CO.', app()->getLocale()) }}</b>
                                <br>
                        </address>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row footer-quotation">
                    <div class="col-lg-12">
                        <div class="footer-quotation-p">
                            <p>AG Partners General Trading & Contracting</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-quotation-p" style="color: #000">
                            <p>Salmiya - Block 4 - Salem Al Mubarak Street - Saheb Tower - 3rd Floor</p>
                            <div class="footer-quotation-down">
                                <p>Mob - +96566532467</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Arabic Quotation End --}}
    </div>
    <!-- Static Table End -->
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
<script src="{{ asset('assets/admin/js/choices.js') }}"></script>
<script src="{{ asset('assets/admin/js/flatpickr.js') }}"></script>
<script>
    flatpickr(".datepicker", {});
</script>
<script>
    const choices = new Choices('[data-trigger]', {
        searchEnabled: false,
        itemSelectText: '',
    });
</script>
@endsection