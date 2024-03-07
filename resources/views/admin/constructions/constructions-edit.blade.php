<style>
    .form-control {
        width: 100%;
    }

    td {
        min-width: 150px;
        padding: 4px;
    }

    tr+tr {
        margin-top: 10px;
    }

    .margin_top {
        margin-top: -50px !important;

    }

    input.rounded:focus {
        outline: none;
        /* Removes the default focus outline */
        border-color: #your-desired-color;
        /* Change 'your-desired-color' to the color you want */
    }

    .no_borer_mob {
        border: none;
    }

    .no_border {
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
                    <div class="row margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section bg-white">
                                <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Edit Service</h4>
                                <hr class="m-0 border-top-grey">
                                <form action="{{ route('construction/update', $projects->id) }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <input readonly type="text" name="project_type" class="form-control"
                                                    value="Construction">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Select Date</label>
                                                <input type="text" name="start_date" class="form-control datepicker"
                                                    placeholder="DD/MM/YYYY"
                                                    value="{{ \Carbon\Carbon::parse($projects->date)->format('d/m/Y') }}">
                                                @error('start_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Manager</label>
                                                <input type="text" class="form-control" name="project_manager"
                                                    value="{{ $projects->project_manager }}">
                                                @error('project_manager')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input placeholder="example@gmail.com" type="email" class="form-control"
                                                    name="manager_email" value="{{ $projects->manager_email }}">
                                                @error('manager_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt ms-3">+965&nbsp;</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="Manager_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ $projects->Manager_mobile }}">
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
                                                    value="{{ $projects->Manager_landline }}"
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
                                                    value="{{ $projects->manager_remarks }}">
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
                                                    value="{{ $projects->company_name }}">
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Person </label>
                                                <input type="text" name="contact_name" class="form-control"
                                                    value="{{ $projects->contact_name }}">
                                                @error('contact_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input placeholder="example@gmail.com" type="email" name="client_email"
                                                    class="form-control" value="{{ $projects->client_email }}">
                                                @error('client_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt2 ms-3">+965&nbsp;</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="client_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ $projects->client_mobile }}">
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
                                                    value="{{ $projects->company_landline }}"
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
                                                    value="{{ $projects->company_location }}">
                                                @error('company_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Landmark </label>
                                                <input type="text" name="company_landmark" class="form-control"
                                                    value="{{ $projects->company_landmark }}">
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
                                                    class="form-control" value="{{ $projects->company_website }}">
                                                @error('company_website')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Remarks </label>
                                                <input type="text" name="company_remarks" class="form-control"
                                                    value="{{ $projects->company_remarks }}">
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
                                                    value="{{ $projects->project_name }}">
                                                @error('project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Person </label>
                                                <input type="text" name="contact_person" class="form-control"
                                                    value="{{ $projects->contact_person }}">
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
                                                    value="{{ $projects->project_email }}">
                                                @error('project_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="form-group no_border">
                                                <label>Mobile</label>
                                                <div class="d-flex border rounded">
                                                    <div class="mt2 ms-3">+965&nbsp;</div>
                                                    <input type="text" class="rounded no_border num_margin"
                                                        style=" width: 160px; height:39px;" placeholder=""
                                                        name="project_mobile" onkeypress="return /[0-9]/i.test(event.key)"
                                                        maxlength="10" value="{{ $projects->project_mobile }}">
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
                                                    value="{{ $projects->project_location }}">
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
                                                    value="{{ $projects->project_value }}">
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
                                                    value="{{ $projects->payment_plan }}">
                                                @error('payment_plan')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="project_description" class="form-control" type="text">{{ $projects->project_description }}</textarea>
                                                @error('project_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">Payment Details</h5>
                                        <div class="table-responsive">
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert-danger">{{ $error }}</div>
                                                @endforeach
                                            @endif
                                            <table class="table table-hover table-white" id="customFields">
                                                <tbody>
                                                    @foreach ($projects->payments as $item)
                                                        <tr>
                                                            <td style="width:40px"></td>
                                                            <td>
                                                                <select name="items[{{ $item->id }}][paymentMode]"
                                                                    class="form-control payment-mode payment-mode-disabled"
                                                                    id="paymentMode">
                                                                    <option value="" disabled selected>Select Mode
                                                                    </option>
                                                                    <option value="Cash"
                                                                        {{ $item->paymentMode == 'Cash' ? 'selected' : '' }}>
                                                                        Cash</option>
                                                                    <option value="Cheque"
                                                                        {{ $item->paymentMode == 'Cheque' ? 'selected' : '' }}>
                                                                        Cheque</option>
                                                                    <option value="Online"
                                                                        {{ $item->paymentMode == 'Online' ? 'selected' : '' }}>
                                                                        Online</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control common-field datepicker"
                                                                    type="text" placeholder="DD/MM/YYYY"
                                                                    name="items[{{ $item->id }}][payment_date]"
                                                                    value="{{ Carbon\Carbon::parse($item->payment_date)->format('d/m/Y') }}"
                                                                    style="display: none">
                                                            </td>
                                                            <td>
                                                                <input class="form-control common-field amount" type="text"
                                                                    name="items[{{ $item->id }}][amount]"
                                                                    placeholder="Amount" onkeypress="return /[0-9]/i.test(event.key)" value="{{ $item->amount }}"
                                                                    style="display: none">
                                                            </td>
                                                            <td class="cash-fields" style="display: none">
                                                                <input class="form-control" type="text"
                                                                    name="items[{{ $item->id }}][receivable]"
                                                                    placeholder="Receivable By"
                                                                    value="{{ $item->receivable }}">
                                                            </td>
                                                            <!-- Bank Name field -->
                                                            <td class="cheque-fields online-fields" style="display: none">
                                                                <input class="form-control" type="text"
                                                                    name="items[{{ $item->id }}][bankName]"
                                                                    placeholder="Bank Name"
                                                                    value="{{ $item->bankName }}">
                                                            </td>
                                                            <!-- Cheque Number field in its own td -->
                                                            <td class="cheque-fields" style="display: none">
                                                                <input class="form-control" type="text"
                                                                    name="items[{{ $item->id }}][chequeNumber]"
                                                                    placeholder="Cheque Number"
                                                                    value="{{ $item->chequeNumber }}">
                                                            </td>
                                                            <!-- Transaction ID field in its own td -->
                                                            <td class="online-fields" style="display: none">
                                                                <input class="form-control" type="text"
                                                                    name="items[{{ $item->id }}][transactionId]"
                                                                    placeholder="Transaction ID"
                                                                    value="{{ $item->transactionId }}">
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    <tr>
                                                        <td style="width:40px">
                                                            <a href="javascript:void(0)" id="add-row"
                                                                class="text-success font-18" title="Add">
                                                                <img src="{{ asset('assets/admin/img/icon/plus.png') }}"
                                                                    alt="">
                                                            </a>
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
                                                            <input class="form-control common-field amount" type="text"
                                                                name="amount[]" placeholder="Amount" onkeypress="return /[0-9]/i.test(event.key)"
                                                                style="display: none">
                                                        </td>
                                                        <td class="cash-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="receivable[]" placeholder="Receivable By">
                                                        </td>
                                                        <!-- Bank Name field -->
                                                        <td class="cheque-fields online-fields" style="display: none">
                                                            <input class="form-control" type="text" name="bankName[]"
                                                                placeholder="Bank Name">
                                                        </td>
                                                        <!-- Cheque Number field in its own td -->
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="chequeNumber[]" placeholder="Cheque Number">
                                                        </td>
                                                        <!-- Transaction ID field in its own td -->
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text"
                                                                name="transactionId[]" placeholder="Transaction ID">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                <tr>
                                                    <td colspan="5"
                                                        style=" font-size: 15px; text-align: right; font-weight: bold">
                                                        Total Receivable :
                                                    </td>
                                                    <td
                                                        style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                        <input readonly class="form-control text-right totalReceivable" value="{{ $projects->total_receivable }}"
                                                            placeholder="00.000" type="text" name="total_receivable">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <button type="submit" class="btn btn-create btn-lg mt-5"  style="background-color: var(--own-black);">UPDATE</button>
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
    <!-- main JS
                                                            ============================================ -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {

            var maxField = 5;
            var addButton = $('#add-row');
            var wrapper = $('#customFields');
            var fieldHTML =
                '<tr><td style="width:50px"><a href="javascript:void(0)" class="remove-row" title="Remove"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td><td><select name="paymentMode[]" class="form-control payment-mode"><option value="" disabled selected>Select Mode</option><option value="Cash">Cash</option><option value="Cheque">Cheque</option><option value="Online">Online</option></select></td><td><input class="form-control common-field datepicker" type="text" name="payment_date[]" placeholder="DD/MM/YYYY" style="display:none"></td><td><input class="form-control common-field amount" onkeypress="return /[0-9]/i.test(event.key)" type="text" name="amount[]" placeholder="Amount" style="display:none"></td><td class="cash-fields" style="display:none"><input class="form-control" type="text" name="receivable[]" placeholder="Receivable By"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="chequeNumber[]" placeholder="Cheque Number"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td><td class="online-fields" style="display:none"><input class="form-control" type="text" name="transactionId[]" placeholder="Transaction ID"></td><td class="online-fields" style="display: none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td></tr>'; // New input field html
            var x = 1;

            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                    $('.datepicker').last().datepicker({
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'dd/mm/yy'
                    });
                } else {
                    alert('A maximum of ' + maxField + ' fields are allowed.');
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

                if (this.value == 'Cash') {
                    tr.find('.cash-fields').css('display', 'inline-block');
                } else if (this.value == 'Cheque') {
                    tr.find('.cheque-fields').css('display', 'inline-block');
                } else if (this.value == 'Online') {
                    tr.find('.online-fields').css('display', 'inline-block');
                }
            });

            // Function to show fields based on the payment mode
            function showFieldsBasedOnPaymentMode(row) {
                var paymentMode = row.find('.payment-mode').val();

                // Hide all optional fields initially
                row.find('.common-field, .cash-fields, .cheque-fields, .online-fields').hide();

                // Show fields based on the payment mode
                if (paymentMode === 'Cash') {
                    row.find('.common-field, .cash-fields').show();
                } else if (paymentMode === 'Cheque') {
                    row.find('.common-field, .cheque-fields').show();
                } else if (paymentMode === 'Online') {
                    row.find('.common-field, .online-fields').show();
                }
            }

            // Iterate over each payment row to apply the visibility logic
            $('tr').each(function() {
                var row = $(this);
                showFieldsBasedOnPaymentMode(row);

                if (row.find('.payment-mode-disabled').val() !== '') {
                    row.find('.payment-mode-disabled').prop('disabled', true);
                }

                // Additional logic to show any field that has a value
                row.find('input').each(function() {
                    if ($(this).val()) {
                        $(this).show();
                    }
                });
            });
        });
    </script>
    {{-- Add or Remove input field end --}}
    {{-- Date Format  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {

            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
    {{-- date Format --}}
    <script>
       document.addEventListener('DOMContentLoaded', function(){
            const wrapper = document.querySelector('#customFields tbody');

            const updateTotalReceivable = function (){
               let totalReceivable = 0;
               document.querySelectorAll('.amount').forEach(function(amountField){
                 const amountValue = parseFloat(amountField.value) || 0;
                 totalReceivable += amountValue;
               });
               document.querySelector('.totalReceivable').value = totalReceivable.toFixed(3);
            }

            document.querySelectorAll('.amount').forEach(function(amountField){
                amountField.addEventListener('input', updateTotalReceivable);
            });

            $('#addRowButton').click(function(){
                $('#customFields tbody').append(fieldHTML);
                $('.amount').last().on('input', updateTotalReceivable);
                updateTotalReceivable();
            });

            $('#customFields').on('click', '.remove-row', function(){
                $(this).closest('tr').remove();
                updateTotalReceivable();
            });

            updateTotalReceivable();

            wrapper.addEventListener('input', updateTotalReceivable);

        });
    </script>
@endsection
