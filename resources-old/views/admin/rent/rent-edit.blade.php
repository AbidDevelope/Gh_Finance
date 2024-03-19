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
                    <div class="margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-section bg-white">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize"style="color: var(--own-black)">Edit
                                    Rent</h4>
                                <hr class="border-top-grey">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('rent/update', $rents->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input readonly name="expense_type" class="form-control" value="rent"
                                                    type="hidden">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Date</label>
                                                <input name="rent_date" class="form-control datepicker" type="text" value="{{ \Carbon\Carbon::parse($rents->rent_date)->format('d/m/Y') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input name="remarks" class="form-control" type="text" value="{{ $rents->remarks }}" required>
                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px;" class="col-sm-2 text-center">Year</th>
                                                            <th style="width: 150px;" class="col-sm-2 text-center">Rent
                                                                Month</th>
                                                            <th class="col-md-2 text-center">Date </th>
                                                            <th class="col-md-2 text-center">Rent Amount</th>
                                                            <th class="col-md-2 text-center">Used By</th>
                                                            <th class="col-sm-2 text-center">Total Rent/KWD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($rents->rentItems as $rent)
                                                        <tr>
                                                            <td>
                                                                <select name="rentItems[{{ $rent->id }}][year]" class="form-control">
                                                                    @foreach ($years as $year)
                                                                        <option value="{{ $year }}" @if ($rent->year == $year) selected @endif>{{ $year }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>

                                                            <td>
                                                                <select name="rentItems[{{ $rent->id }}][month]" id="" class="form-control">
                                                                    <option value="" disabled selected>Select Month
                                                                    </option>
                                                                    <option value="January" {{ $rent->month =="January" ? 'selected' : '' }}>January</option>
                                                                    <option value="February" {{ $rent->month =="February" ? 'selected' : '' }}>February</option>
                                                                    <option value="March" {{ $rent->month =="March" ? 'selected' : '' }}>March</option>
                                                                    <option value="April" {{ $rent->month =="April" ? 'selected' : '' }}>April</option>
                                                                    <option value="May" {{ $rent->month =="May" ? 'selected' : '' }}>May</option>
                                                                    <option value="June" {{ $rent->month =="June" ? 'selected' : '' }}>June</option>
                                                                    <option value="July" {{ $rent->month =="July" ? 'selected' : '' }}>July</option>
                                                                    <option value="August" {{ $rent->month =="August" ? 'selected' : '' }}>August</option>
                                                                    <option value="September" {{ $rent->month =="September" ? 'selected' : '' }}>September</option>
                                                                    <option value="October" {{ $rent->month =="October" ? 'selected' : '' }}>October</option>
                                                                    <option value="November" {{ $rent->month =="November" ? 'selected' : '' }}>November</option>
                                                                    <option value="December" {{ $rent->month =="December" ? 'selected' : '' }}>December</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control datepicker"
                                                                name="rentItems[{{ $rent->id }}][date]" value="{{ \Carbon\Carbon::parse($rent->date)->format('d/m/Y') }}"
                                                                placeholder="DD/MM/YYYY">
                                                            </td>

                                                            <td>
                                                                <input class="form-control rent_amount" type="text"
                                                                    style="min-width:10px" name="rentItems[{{ $rent->id }}][rent_amount]"
                                                                    value="{{ $rent->rent_amount }}"
                                                                    onkeypress="return /[0-9.]/i.test(event.key)">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                style="min-width:10px" name="rentItems[{{ $rent->id }}][used_by]"
                                                                value="{{ $rent->used_by }}">
                                                            </td>
                                                            <td>
                                                                <input readonly class="form-control total" type="text"
                                                                style="min-width:150px" name="rentItems[{{ $rent->id }}][total]"
                                                                value="{{ $rent->total }}"
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
                                                                    value="{{ $rents->subtotal }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right"
                                                                style="font-size: 15px;">
                                                                Others :
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right others"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others"
                                                                    value="{{ $rents->others }}">
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
                                                                    value="{{ $rents->grandtotal }}">
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
                                            <table class="table table-hover table-white" id="paymentFields">
                                                <tbody>
                                                    @foreach ($rents->rentPayment as $payment)  
                                                    <tr>
                                                        <td>
                                                            <select name="payment_mode[]"
                                                                class="form-control payment-mode payment-mode-disabled">
                                                                <option value="" disabled selected>Select Mode
                                                                </option>
                                                                <option value="Cash" {{ $payment->payment_mode == 'Cash' ? 'selected' : '' }}>Cash</option>
                                                                <option value="Cheque" {{ $payment->payment_mode == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                                                                <option value="Online" {{ $payment->payment_mode == 'Online' ? 'selected' : '' }}>Online</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field datepicker"
                                                                type="text" placeholder="DD/MM/YYYY"
                                                                name="paymentItems[{{ $payment->id }}][payment_date]" style="display: none" value="{{ \Carbon\Carbon::parse($payment->payment_date)->format('d/m/Y') }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field amount" type="text"
                                                            name="paymentItems[{{ $payment->id }}][amount]" placeholder="Amount" value="{{ $payment->amount }}"
                                                            style="display: none">
                                                        </td>
                                                        <td class="cash-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $payment->receivable_by }}"
                                                            name="paymentItems[{{ $payment->id }}][receivable_by]" placeholder="Receivable By">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $payment->cheque_number }}"
                                                                name="paymentItems[{{ $payment->id }}][cheque_number]" placeholder="Cheque Number">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $payment->bank_name }}"
                                                                name="paymentItems[{{ $payment->id }}][bank_name]" placeholder="Bank Name">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $payment->transaction_id }}"
                                                            name="paymentItems[{{ $payment->id }}][transaction_id]" placeholder="Transaction ID">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $payment->bank_name }}"
                                                            name="paymentItems[{{ $payment->id }}][bank_name]" placeholder="Bank Name">
                                                        </td>
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
                                                        Total Receivable :
                                                    </td>
                                                    <td
                                                        style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                        <input readonly class="form-control text-right totalReceivable"
                                                            placeholder="00.000" type="text" name="total_payment">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn submit-btn"
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
    // Function to update the total fields based on rent_amount
    function updateTotals() {
        var subtotal = 0;
        
        $('input.rent_amount').each(function() {
            // Parse the rent amount or default to 0 if empty
            var rentAmount = parseFloat($(this).val()) || 0;
            
            // Update the corresponding total field for this rent amount
            $(this).closest('tr').find('.total').val(rentAmount.toFixed(3));

            // Add to subtotal
            subtotal += rentAmount;
        });

        // Update the subtotal field
        $('.subtotal').val(subtotal.toFixed(3));

        // Calculate and update the grand total
        var others = parseFloat($('input[name="others"]').val()) || 0;
        var grandtotal = subtotal + others;
        $('.grandtotal').val(grandtotal.toFixed(3));
    }

    // Bind the input event to rent_amount fields for live update
    $(document).on('input', '.rent_amount', function() {
        updateTotals();
    });

    // Bind the input event to others field for live update
    $(document).on('input', 'input[name="others"]', function() {
        updateTotals();
    });

    // Update and remove a row
    $('#customFields').on('click', '.remove-row', function() {
        $(this).closest('tr').remove(); // Corrected .closest() usage
        updateTotals(); // Update totals after removing a row
    });
});

</script>
    
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('#paymentFields tbody');

            // Function to update the total receivable based on amounts entered
            const updateTotalReceivable = function() {
                let totalReceivable = 0;
                document.querySelectorAll('.amount').forEach(function(amountField) {
                    const amountValue = parseFloat(amountField.value) || 0;
                    totalReceivable += amountValue;
                });

                document.querySelector('.totalReceivable').value = totalReceivable.toFixed(3);
            };

            // Event listener for changes in the amount fields to update totals
            document.querySelectorAll('.amount').forEach(function(amountField) {
                amountField.addEventListener('input',
                    updateTotalReceivable); // Changed to 'input' for instant feedback
            });

            // Function to add a new row
            $('#addRowButton').click(function() {
                // Assuming you have a button with ID addRowButton for adding new rows
                $('#paymentFields tbody').append(fieldHTML); // Add new row
                $('.amount').last().on('input',
                    updateTotalReceivable); // Attach event listener to the new amount field
                updateTotalReceivable(); // Update total receivable to include new row's amount
            });

            // Function to handle row removal and update totals accordingly
            $('#paymentFields').on('click', '.payment-remove-row', function() {
                $(this).closest('tr').remove();
                updateTotalReceivable(); // Update total receivable after removing row
            });

            // Initial call to set the total receivable based on existing amount fields (if any)
            updateTotalReceivable();

            // Adding event listeners for updating totals and handling row removal
            wrapper.addEventListener('input', updateTotalReceivable);
            wrapper.addEventListener('click', removeRowAndUpdateTotals);
        });
    </script>
    <script>
        $(document).ready(function() {

            var maxField = 5;
            var addButton = $('#add-row');
            var wrapper = $('#paymentFields');
            var fieldHTML =
                '<tr><td style="width:50px"><a href="javascript:void(0)" class="remove-row" title="Remove"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td><td><select name="paymentMode[]" class="form-control payment-mode"><option value="" disabled selected>Select Mode</option><option value="Cash">Cash</option><option value="Cheque">Cheque</option><option value="Online">Online</option></select></td><td><input class="form-control common-field datepicker" type="text" name="payment_date[]" placeholder="DD/MM/YYYY" style="display:none"></td><td><input class="form-control common-field amount" type="text" name="amount[]" placeholder="Amount" style="display:none"></td><td class="cash-fields" style="display:none"><input class="form-control" type="text" name="receivable[]" placeholder="Receivable By"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="chequeNumber[]" placeholder="Cheque Number"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td><td class="online-fields" style="display:none"><input class="form-control" type="text" name="transactionId[]" placeholder="Transaction ID"></td><td class="online-fields" style="display: none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td></tr>'; // New input field html
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
@endsection
