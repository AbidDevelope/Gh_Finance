<style>
    .margin_top {
        margin-top: -50px !important;
    }

    input.rounded:focus {
        outline: none;
        /* Removes the default focus outline */
        border-color: #your-desired-color;
        /* Change 'your-desired-color' to the color you want */
    }

    .font {
        font-size: 1px !important;
    }
</style>
@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-section bg-white">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize"style="color: var(--own-black)">Edit
                                    Payroll</h4>
                                <hr class="border-top-grey">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('payroll/update', $payroll->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Date</label>
                                                <input name="payroll_date" class="form-control datepicker" type="text"
                                                    value="{{ \Carbon\Carbon::parse($payroll->payroll_date)->format('d/m/Y') }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input name="remarks" class="form-control" type="text"
                                                    value="{{ $payroll->remarks }}">
                                                @error('remarks')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px;" class="col-sm-2 text-center">Date</th>
                                                            <th style="width: 150px;" class="col-sm-2 text-center">Month
                                                            </th>
                                                            <th class="col-md-2 text-center">Employee Name</th>
                                                            <th class="col-md-2 text-center">Actual Salary</th>
                                                            <th class="col-md-2 text-center">Payroll</th>
                                                            <th class="col-sm-2 text-center">Salary/KWD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($payroll->payrollItems as $item)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control datepicker"
                                                                        name="items[{{ $item->id }}][payroll_date]"
                                                                        value="{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}"
                                                                        placeholder="DD/MM/YYYY">
                                                                </td>
                                                                <td>
                                                                    <select name="items[{{ $item }}][month]" id=""
                                                                        class="form-control">
                                                                        <option value="" disabled selected>Select
                                                                            Month
                                                                        </option>
                                                                        <option value="January"
                                                                            {{ $item->month == 'January' ? 'selected' : '' }}>
                                                                            January</option>
                                                                        <option value="February"
                                                                            {{ $item->month == 'February' ? 'selected' : '' }}>
                                                                            February</option>
                                                                        <option value="March"
                                                                            {{ $item->month == 'March' ? 'selected' : '' }}>
                                                                            March</option>
                                                                        <option value="April"
                                                                            {{ $item->month == 'April' ? 'selected' : '' }}>
                                                                            April</option>
                                                                        <option value="May"
                                                                            {{ $item->month == 'May' ? 'selected' : '' }}>
                                                                            May</option>
                                                                        <option value="June"
                                                                            {{ $item->month == 'June' ? 'selected' : '' }}>
                                                                            June</option>
                                                                        <option value="July"
                                                                            {{ $item->month == 'July' ? 'selected' : '' }}>
                                                                            July</option>
                                                                        <option value="August"
                                                                            {{ $item->month == 'August' ? 'selected' : '' }}>
                                                                            August</option>
                                                                        <option value="September"
                                                                            {{ $item->month == 'September' ? 'selected' : '' }}>
                                                                            September</option>
                                                                        <option value="October"
                                                                            {{ $item->month == 'October' ? 'selected' : '' }}>
                                                                            October</option>
                                                                        <option value="November"
                                                                            {{ $item->month == 'November' ? 'selected' : '' }}>
                                                                            November</option>
                                                                        <option value="December"
                                                                            {{ $item->month == 'December' ? 'selected' : '' }}>
                                                                            December</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="text"
                                                                        style="min-width:150px" name="items[{{ $item }}][employee_name]"
                                                                        value="{{ $item->employee_name }}">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control actual_salary" type="text"
                                                                        style="min-width:10px" name="items[{{ $item }}][actual_salary]"
                                                                        value="{{ $item->actual_salary }}"
                                                                        onkeypress="return /[0-9.,%]/.test(event.key)">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control payroll" type="text"
                                                                        style="min-width:10px" name="items[{{ $item->id }}][payroll]"
                                                                        value="{{ $item->payroll }}">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control salary" type="text"
                                                                        style="min-width:150px" name="items[{{ $item->id }}][salary]"
                                                                        value="{{ $item->salary }}"
                                                                        onkeypress="return /[0-9.]/i.test(event.key)">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5" class="text-right" style="font-size: 15px;">
                                                                Sub Total :</td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input readonly class="form-control text-right subtotal"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)"
                                                                    type="text" name="subtotal"
                                                                    value="{{ $payroll->subtotal }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right" style="font-size: 15px;">
                                                                Others :
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right others"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others"
                                                                    value="{{ $payroll->others }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"
                                                                style=" font-size: 15px; text-align: right; font-weight: bold">
                                                                Grand Value :
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                <input readonly class="form-control text-right grandtotal"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="grandtotal"
                                                                    value="{{ $payroll->grandtotal }}">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <h5 class="ml-0 f-21 font-weight-normal text-capitalize">Payment Details</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white">
                                                <tbody>
                                                    @foreach ($payroll->payrollPayment as $payment)
                                                        <tr>
                                                            <td>
                                                                <select name="payment_mode[]"
                                                                    class="form-control payment-mode payment-mode-disabled">
                                                                    <option value="" disabled selected>Select Mode
                                                                    </option>
                                                                    <option value="Cash"
                                                                        {{ $payment->payment_mode == 'Cash' ? 'selected' : '' }}>
                                                                        Cash</option>
                                                                    <option value="Cheque"
                                                                        {{ $payment->payment_mode == 'Cheque' ? 'selected' : '' }}>
                                                                        Cheque</option>
                                                                    <option value="Online"
                                                                        {{ $payment->payment_mode == 'Online' ? 'selected' : '' }}>
                                                                        Online</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control common-field datepicker" type="text"
                                                                    placeholder="DD/MM/YYYY" value="{{ \Carbon\Carbon::parse($payment->date)->format('d/m/Y') }}"
                                                                    name="items[{{ $payment->id }}][date]" style="display: none">
                                                            </td>
                                                            <td>
                                                                <input class="form-control common-field amount" type="text"
                                                                    name="items[{{ $payment->id }}][amount]" placeholder="Amount" value="{{ $payment->amount }}"
                                                                    style="display: none">
                                                            </td>
                                                            <td class="cash-fields" style="display: none">
                                                                <input class="form-control" type="text" value="{{ $payment->receivable_by }}"
                                                                    name="items[{{ $payment->id }}][receivable_by]" placeholder="Receivable By">
                                                            </td>
                                                            <td class="cheque-fields" style="display: none">
                                                                <input class="form-control" type="text" value="{{ $payment->cheque_number }}"
                                                                    name="items[{{ $payment->id }}][cheque_number]" placeholder="Cheque Number">
                                                            </td>
                                                            <td class="cheque-fields" style="display: none">
                                                                <input class="form-control" type="text" value="{{ $payment->bank_name }}"
                                                                    name="items[{{ $payment->id }}][bank_name]" placeholder="Bank Name">
                                                            </td>
                                                            <td class="online-fields" style="display: none">
                                                                <input class="form-control" type="text" value="{{ $payment->transaction_id }}"
                                                                    name="items[{{ $payment->id }}][transaction_id]" placeholder="Transaction ID">
                                                            </td>
                                                            <td class="online-fields" style="display: none">
                                                                <input class="form-control" type="text" value="{{ $payment->bank_name }}"
                                                                    name="items[{{ $payment->id }}][bank_name]" placeholder="Bank Name">
                                                            </td>
                                                            <!-- Example of an Add button, already in your code -->
                                                        </tr>
                                                    @endforeach
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
                                                        Total Payment :
                                                    </td>
                                                    <td
                                                        style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                        <input readonly class="form-control text-right total_payment"
                                                            placeholder="00.000" type="text" name="total_payment"
                                                            value="{{ $payroll->total_payment }}">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn  submit-btn"
                                            style="background: var(--own-black)">UPDATE</button>
                                    </div>
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
    {{-- Data table JS --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    {{-- dropzone Js --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.min.js"></script>
    {{-- Date Format  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- date Format --}}

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
    <script>
        $(document).ready(function() {

                    var maxField = 5;
                    var addButton = $('#add-row');
                    var wrapper = $('#customFields');
                    var fieldHTML =
                        '<tr><td style="width:50px"><a href="javascript:void(0)" class="remove-row" title="Remove"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td><td><select name="paymentMode[]" class="form-control payment-mode"><option value="" disabled selected>Select Mode</option><option value="Cash">Cash</option><option value="Cheque">Cheque</option><option value="Online">Online</option></select></td><td><input class="form-control common-field datepicker" type="text" name="payment_date[]" placeholder="DD/MM/YYYY" style="display:none"></td><td><input class="form-control common-field amount" type="text" name="amount[]" placeholder="Amount" style="display:none"></td><td class="cash-fields" style="display:none"><input class="form-control" type="text" name="receivable[]" placeholder="Receivable By"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="chequeNumber[]" placeholder="Cheque Number"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td><td class="online-fields" style="display:none"><input class="form-control" type="text" name="transactionId[]" placeholder="Transaction ID"></td><td class="online-fields" style="display: none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td></tr>'; // New input field html
                    var x = 1;


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

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const updateTotals = function() {
                let subtotal = 0;
                document.querySelectorAll('.salary').forEach(function(totalField) {
                    const totalValue = parseFloat(totalField.value) || 0;
                    subtotal += totalValue;
                });

                document.querySelector('.subtotal').value = subtotal.toFixed(3);
                updateGrandTotal();
            };

            const updateGrandTotal = function() {
                const subtotal = parseFloat(document.querySelector('.subtotal').value) || 0;
                const others = parseFloat(document.querySelector('.others').value) || 0;
                const grandTotal = subtotal + others;
                document.querySelector('.grandtotal').value = grandTotal.toFixed(3);
            };

            const othersInput = document.querySelector('.others');
            othersInput.addEventListener('input', updateGrandTotal);

            document.querySelectorAll('.salary').forEach(function(totalField) {
                totalField.addEventListener('change', updateTotals);
            });

            // Event listener for dynamic input changes in qty or price fields within the table
            document.addEventListener('input', function(e) {
                if (e.target && (e.target.matches('.actual_salary') || e.target.matches('.payroll'))) {
                    const row = e.target.closest('tr'); // Find the parent row of the input
                    const actual_salary = parseFloat(row.querySelector('.actual_salary').value) || 0;
                    const payroll = parseFloat(row.querySelector('.payroll').value) || 0;
                    const total = actual_salary + payroll; // Calculate total for the row
                    row.querySelector('.salary').value = total.toFixed(3);
                    updateTotals(); // Update totals whenever qty or price changes
                }
            });

            wrapper.addEventListener('input', updateTotals);
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function(){

        const updateTotalPayment = function (){
           let totalPayment = 0;
           document.querySelectorAll('.amount').forEach(function(amountField){
             const amountValue = parseFloat(amountField.value) || 0;
             totalPayment += amountValue;
           });
           document.querySelector('.total_payment').value = totalPayment.toFixed(3);
        }

        document.querySelectorAll('.amount').forEach(function(amountField){
            amountField.addEventListener('input', updateTotalPayment);
        });
        

        updateTotalPayment();

        document.addEventListener('input', updateTotalPayment);

    });
</script>
@endsection
