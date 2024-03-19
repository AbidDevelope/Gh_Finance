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
                                    Electricity</h4>
                                <hr class="border-top-grey">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('electricity/update', $electricity->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input readonly name="expense_type" class="form-control" type="hidden"
                                                    value="electricity">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select date</label>
                                                <input name="electricity_date" class="form-control datepicker"
                                                    type="text"
                                                    value="{{ \Carbon\Carbon::parse($electricity->electricity_date)->format('d/m/Y') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input name="remarks" class="form-control" type="text"
                                                    value="{{ $electricity->remarks }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2 text-center">Date </th>

                                                            <th style="width: 150px;" class="col-sm-2 text-center">
                                                                Consumption Month
                                                            </th>
                                                            <th class="col-md-2 text-center">Consumption Unit</th>
                                                            <th class="col-md-2 text-center">Due Date</th>
                                                            <th class="col-sm-2 text-center">Total Amount/KWD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($electricity->electricityItems as $item)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control datepicker"
                                                                        name="electricityItems[{{ $item->id }}][date]" value="{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}"
                                                                        placeholder="DD/MM/YYYY">
                                                                </td>

                                                                <td>
                                                                    <select name="electricityItems[{{ $item->id }}][month]" class="form-control">
                                                                        <option value="" disabled selected>Select
                                                                            Month
                                                                        </option>
                                                                        <option value="January" {{ $item->month == 'January' ? 'selected': '' }}>January</option>
                                                                        <option value="February" {{ $item->month == 'February' ? 'selected': '' }}>February</option>
                                                                        <option value="March" {{ $item->month == 'March' ? 'selected': '' }}>March</option>
                                                                        <option value="April" {{ $item->month == 'April' ? 'selected': '' }}>April</option>
                                                                        <option value="May" {{ $item->month == 'May' ? 'selected': '' }}>May</option>
                                                                        <option value="June" {{ $item->month == 'June' ? 'selected': '' }}>June</option>
                                                                        <option value="July" {{ $item->month == 'July' ? 'selected': '' }}>July</option>
                                                                        <option value="August" {{ $item->month == 'August' ? 'selected': '' }}>August</option>
                                                                        <option value="September" {{ $item->month == 'September' ? 'selected': '' }}>September</option>
                                                                        <option value="October" {{ $item->month == 'October' ? 'selected': '' }}>October</option>
                                                                        <option value="November" {{ $item->month == 'November' ? 'selected': '' }}>November</option>
                                                                        <option value="December" {{ $item->month == 'December' ? 'selected': '' }}>December</option>
                                                                    </select>
                                                                </td>

                                                                <td>
                                                                    <input class="form-control" type="text"
                                                                        style="min-width:10px" name="electricityItems[{{ $item->id }}][unit]"
                                                                        value="{{ $item->unit }}">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control datepicker" type="text"
                                                                        style="min-width:10px" name="electricityItems[{{ $item->id }}][due_date]"
                                                                        value="{{ \Carbon\Carbon::parse($item->due_date)->format('d/m/Y') }}">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control total" type="text"
                                                                        style="min-width:150px" name="electricityItems[{{ $item->id }}][total]"
                                                                        value="{{ $item->total }}"
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
                                                                    value="{{ $electricity->subtotal }}">
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
                                                                    value="{{ $electricity->others }}">
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
                                                                    value="{{ $electricity->grandtotal }}">
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
                                                    @foreach ($payments as $item)
                                                    <tr>
                                                        <td>
                                                            <select name="payment_mode[]"
                                                                class="form-control payment-mode payment-mode-disabled">
                                                                <option disabled selected>Select Mode
                                                                </option>
                                                                <option value="Cash" {{ $item->payment_mode == 'Cash' ? 'selected' : '' }}>Cash</option>
                                                                <option value="Cheque" {{ $item->payment_mode == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                                                                <option value="Online" {{ $item->payment_mode == 'Online' ? 'selected' : '' }}>Online</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field datepicker"
                                                                type="text" placeholder="DD/MM/YYYY"
                                                                name="paymentItems[{{ $item->id }}][payment_date]" style="display: none" value="{{ \Carbon\Carbon::parse($item->payment_date)->format('d/m/Y') }} ">
                                                        </td>
                                                        <td>
                                                            <input class="form-control common-field amount" type="text"  onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                name="paymentItems[{{ $item->id }}][amount]" placeholder="Amount" value="{{ $item->amount }}"
                                                                style="display: none">
                                                        </td>
                                                        <td class="cash-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $item->receivable_by }}"
                                                                name="paymentItems[{{ $item->id }}][receivable_by]" placeholder="Receivable By">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $item->cheque_number }}"
                                                                name="paymentItems[{{ $item->id }}][cheque_number]" placeholder="Cheque Number">
                                                        </td>
                                                        <td class="cheque-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $item->bank_name }}"
                                                                name="paymentItems[{{ $item->id }}][bank_name]" placeholder="Bank Name">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $item->transaction_id }}"
                                                            name="paymentItems[{{ $item->id }}][transaction_id]" placeholder="Transaction ID">
                                                        </td>
                                                        <td class="online-fields" style="display: none">
                                                            <input class="form-control" type="text" value="{{ $item->bank_name }}"
                                                                name="paymentItems[{{ $item->id }}][bank_name]" placeholder="Bank Name">
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
                                                            placeholder="00.000" type="text" name="total_payment" value="{{ $electricity->total_payment }}">
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
            // Function to update subtotal and grandtotal
            function updateTotals() {
                var total = 0;
                var others = parseFloat($('.others').val()) || 0;

                // Sum all total values
                $('.total').each(function() {
                    var value = parseFloat($(this).val()) || 0;
                    total += value;
                });

                // Update subtotal and grandtotal
                $('.subtotal').val(total.toFixed(3));
                $('.grandtotal').val((total + others).toFixed(3));
            }

            // Event listener for changes in the 'total' inputs
            $(document).on('input', '.total', function() {
                updateTotals();
            });

            $('#customFields').on('click', '.remove-row', function() {
                $(this).closest('tr').remove();
                updateTotals();
            });

            // Event listener for changes in the 'others' input
            $(document).on('input', '.others', function() {
                updateTotals();
            });
        });
    </script>
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
                    updateTotalReceivable);
            });

            // Function to add a new row
            $('#addRowButton').click(function() {
                $('#paymentFields tbody').append(fieldHTML);
                $('.amount').last().on('input',
                    updateTotalReceivable);
                updateTotalReceivable();
            });

            // Function to handle row removal and update totals accordingly
            $('#paymentFields').on('click', '.payment-remove-row', function() {
                $(this).closest('tr').remove();
                updateTotalReceivable();
            });

            updateTotalReceivable();

            wrapper.addEventListener('input', updateTotalReceivable);
            wrapper.addEventListener('click', removeRowAndUpdateTotals);
        });
    </script>
@endsection
