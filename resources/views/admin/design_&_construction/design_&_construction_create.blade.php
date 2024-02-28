<style>
    .margin_top {
        margin-top: -40px !important;
    }

    input.rounded:focus {
        outline: none;
        /* Removes the default focus outline */
        border-color: #your-desired-color;
        /* Change 'your-desired-color' to the color you want */
    }

    .no_border {
        border: none;
    }

    .no_borer_mob {
        border: none;
    }

    .num_margin {
        margin-left: -1px !important;
        padding-left: -6px !important;
        padding-top: -6px !important;
    }

    .mt {
        margin-top: 9px !important;
        margin-right: -0.5px !important;
    }

    .mt2 {
        margin-top: 9px !important;
        /* margin-right: -0.5px !important; */
    }
</style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section bg-white">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Create Service</h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('design_&_construction/create') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <input readonly type="text" name="project_type" class="form-control"
                                                    value="Design & Construction">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Select Date</label>
                                                <input type="text" name="date" class="form-control datepicker"
                                                    placeholder="DD/MM/YYYY">
                                                @error('date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Manager</label>
                                                <input type="text" class="form-control" name="project_manager"
                                                    value="{{ old('project_manager') }}">
                                                @error('project_manager')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input placeholder="example@gmail.com" type="email" class="form-control"
                                                    name="manager_email" value="{{ old('manager_email') }}">
                                                @error('manager_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt ms-3">+965</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="Manager_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ old('Manager_mobile') }}">
                                                </div>
                                                @error('Manager_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Landline </label>
                                                <input type="text" name="Manager_landline" class="form-control"
                                                    value="{{ old('Manager_landline') }}"
                                                    onkeypress="return /[0-9]/i.test(event.key)">
                                                @error('Manager_landline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input class="form-control" type="text" name="manager_remarks"
                                                    value="{{ old('manager_remarks') }}">
                                                @error('manager_remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">Client Details</h5>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Company Name </label>
                                                <input type="text" name="company_name" class="form-control"
                                                    value="{{ old('company_name') }}">
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Person </label>
                                                <input type="text" name="contact_name" class="form-control"
                                                    value="{{ old('contact_name') }}">
                                                @error('contact_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input placeholder="example@gmail.com" type="email" name="client_email"
                                                    class="form-control" value="{{ old('client_email') }}">
                                                @error('client_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt2 ms-3">+965</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="client_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ old('client_mobile') }}">
                                                </div>
                                                @error('client_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Landline </label>
                                                <input type="text" name="company_landline" class="form-control"
                                                    value="{{ old('company_landline') }}"
                                                    onkeypress="return /[0-9]/i.test(event.key)">
                                                @error('company_landline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Location </label>
                                                <input type="text" name="company_location" class="form-control"
                                                    value="{{ old('company_location') }}">
                                                @error('company_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Landmark </label>
                                                <input type="text" name="company_landmark" class="form-control"
                                                    value="{{ old('company_landmark') }}">
                                                @error('company_landmark')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Country </label>
                                                <input readonly type="text" name="company_country"
                                                    class="form-control" value="Kuwait">
                                                @error('company_country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Website </label>
                                                <input placeholder="ex:www.abc.com" type="text" name="company_website"
                                                    class="form-control" value="{{ old('company_website') }}">
                                                @error('company_website')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Remarks </label>
                                                <input type="text" name="company_remarks" class="form-control"
                                                    value="{{ old('company_remarks') }}">
                                                @error('company_remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">Project Details</h5>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Name </label>
                                                <input type="text" name="project_name" class="form-control"
                                                    value="{{ old('project_name') }}">
                                                @error('project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Person </label>
                                                <input type="text" name="contact_person" class="form-control"
                                                    value="{{ old('contact_person') }}">
                                                @error('contact_person')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input placeholder="example@gmail.com" type="email"
                                                    name="project_email" class="form-control"
                                                    value="{{ old('project_email') }}">
                                                @error('project_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt2 ms-3">+965</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="project_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ old('project_mobile') }}">
                                                </div>
                                                @error('project_mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Location </label>
                                                <input type="text" name="project_location" class="form-control"
                                                    value="{{ old('project_location') }}">
                                                @error('project_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Value</label>
                                                <input type="text" name="project_value" class="form-control"
                                                    onkeypress="return /[0-9]/i.test(event.key)"
                                                    value="{{ old('project_value') }}">
                                                @error('project_value')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input readonly type="text" name="project_country"
                                                    class="form-control" value="Kuwait">
                                                @error('project_country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Payment Plan</label>
                                                <input placeholder="payment plan like 1,2,3..." type="text"
                                                    name="payment_plan" class="form-control"
                                                    value="{{ old('payment_plan') }}">
                                                @error('payment_plan')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="project_description" class="form-control" type="text"></textarea>
                                                @error('project_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">Payment Details</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white" id="customFields">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:50px"><a href="javascript:void(0)"
                                                                id="add-row" class="text-success font-18"
                                                                title="Add"><img
                                                                    src="{{ asset('assets/admin/img/icon/plus.png') }}"
                                                                    alt=""></a>
                                                        </td>
                                                        <td>
                                                            <select name="paymentMode[]" class="form-control payment-mode"
                                                                id="paymentMode">
                                                                <option value="" disabled selected>Select Mode
                                                                </option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="Cheque">Cheque</option>
                                                                <option value="Online">Online</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field datepicker"
                                                                type="text" placeholder="DD/MM/YYYY"
                                                                name="payment_date[]" style="display: none">
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field" type="text"
                                                                name="amount[]" placeholder="Amount"
                                                                style="display: none">
                                                        </td>
                                                        <td class="cash-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="receivable[]" placeholder="Receivable By">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="chequeNumber[]" placeholder="Cheque Number">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text" name="bankName[]"
                                                                placeholder="Bank Name">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="transactionId[]" placeholder="Transaction ID">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text" name="bankName[]"
                                                                placeholder="Bank Name">
                                                        </td>
                                                        <!-- Example of an Add button, already in your code -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <button type="submit" class="btn btn-create btn-lg mt-5"
                                        style="background: var(--own-black)">CREATE</button>
                                    <!-- </div> -->
                                </form>
                            </div>
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
    <!-- main JS                                                          ============================================ -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
 
    {{-- Add or remove section script start --}}
    <script>
        $(document).ready(function() {
            var maxField = 5;
            var addButton = $('#add-row');
            var wrapper = $('#customFields');
            var fieldHTML =
                '<tr><td style="width:50px"><a href="javascript:void(0)" class="remove-row" title="Remove"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td><td><select name="paymentMode[]" class="form-control payment-mode"><option value="" disabled selected>Select Mode</option><option value="Cash">Cash</option><option value="Cheque">Cheque</option><option value="Online">Online</option></select></td><td><input class="form-control common-field datepicker" type="text" name="payment_date[]" placeholder="DD/MM/YYYY" style="display:none"></td><td><input class="form-control common-field" type="text" name="amount[]" placeholder="Amount" style="display:none"></td><td class="cash-fields" style="display:none"><input class="form-control" type="text" name="receivable[]" placeholder="Receivable By"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="chequeNumber[]" placeholder="Cheque Number"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td><td class="online-fields" style="display:none"><input class="form-control" type="text" name="transactionId[]" placeholder="Transaction ID"></td><td class="online-fields" style="display: none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td></tr>'; // New input field html
            var x = 1;

            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                    $('.datepicker').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'dd/mm/yy'
                    });
                } else {
                    alert('A maximum of ' + maxField + 'fields are allowed.');
                }
            });

            $(wrapper).on('click', '.remove-row', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove();
                x--;
            });

            $(wrapper).on('change', '.payment-mode', function() {
                var tr = $(this).closest('tr');
                tr.find('.common-field, .cash-fields, .cheque-fields, .online-fields').hide();

                tr.find('.common-field').css('display', 'inline-block');

                if (this.value === 'Cash') {
                    tr.find('.cash-fields').css('display', 'inline-block');
                } else if (this.value === 'Cheque') {
                    tr.find('.cheque-fields').css('display', 'inline-block');
                } else if (this.value === 'Online') {
                    tr.find('.online-fields').css('display', 'inline-block');
                }
            });
        });
    </script>
    {{-- Add or Remove input field end --}}

    {{-- Date Format  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- date Format --}}
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy' 
            });
        });
    </script>
@endsection
