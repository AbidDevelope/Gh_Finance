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
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize" style="color: var(--own-black)">
                                    Create Payroll</h4>
                                <hr class="border-top-grey">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('miscellaneous/create') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <textarea name="remarks" class="form-control" type="text"></textarea>
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
                                                            <th> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control datepicker"
                                                                    name="date[]" value="{{ old('date.0') }}"
                                                                    placeholder="DD/MM/YYYY">
                                                            </td>

                                                            <td>
                                                                <select name="month[]" id="" class="form-control">
                                                                    <option value="" disabled selected>Select Month
                                                                    </option>
                                                                    <option value="January">January</option>
                                                                    <option value="February">February</option>
                                                                    <option value="March">March</option>
                                                                    <option value="April">April</option>
                                                                    <option value="May">May</option>
                                                                    <option value="June">June</option>
                                                                    <option value="July">July</option>
                                                                    <option value="August">August</option>
                                                                    <option value="September">September</option>
                                                                    <option value="October">October</option>
                                                                    <option value="November">November</option>
                                                                    <option value="December">December</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                    style="min-width:150px" name="employee_name[]"
                                                                    value="{{ old('employee_name.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control actual_salary" type="text"
                                                                    style="min-width:10px" name="actual_salary[]"
                                                                    value="{{ old('actual_salary.0') }}"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)">
                                                            </td>
                                                            <td>
                                                                <input class="form-control payroll" type="text"
                                                                    style="min-width:10px" name="payroll[]"
                                                                    value="{{ old('payroll.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control salary" type="text"
                                                                    style="min-width:150px" name="salary[]"
                                                                    value="{{ old('salary.0') }}"
                                                                    onkeypress="return /[0-9.]/i.test(event.key)">
                                                            </td>
                                                            <td><a href="javascript:void(0)" id="add-row"
                                                                    class="text-success font-18" title="Add"><img
                                                                        src="{{ asset('assets/admin/img/icon/plus.png') }}"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                        </tr>
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
                                                                <input readonly class="form-control subtotal text-right"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)"
                                                                    type="text" name="subtotal" placeholder="00.000"
                                                                    value="{{ old('subtotal') }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right" style="font-size: 15px;">
                                                                Others :
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control others text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others" placeholder="00.000"
                                                                    value="{{ old('others') }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"
                                                                style=" font-size: 15px; text-align: right; font-weight: bold">
                                                                Grand Value :
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                <input readonly class="form-control grandtotal text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="grandtotal" placeholder="00.000"
                                                                    value="{{ old('grandtotal') }}">
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
                                                    <tr>
                                                        <td style="width:50px"><a href="javascript:void(0)"
                                                                id="payment-add-row" class="text-success font-18"
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
                                                            <input class="form-control common-field amount" type="text"
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
                                    <div class="submit-section">
                                        <button type="submit" class="btn submit-btn"
                                            style="background: var(--own-black)">CREATE</button>
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
                '<tr><td><input type = "text" class = "form-control datepicker" name = "date[]" value = "{{ old('date.0') }}" placeholder = "DD/MM/YYYY" ></td><td><select name = "month[]" id = "" class ="form-control"><option value="" disabled selected>Select Month</option><option value="January">January</option><option value = "February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value ="August">August</option><option value ="September">September</option><option value ="October"> October</option><option value ="November">November</option><option value ="December"> December</option></select></td><td><input class ="form-control" type = "text" style = "min-width:150px" name = "employee_name[]" value = "{{ old('employee_name.0') }}"></td> <td ><input class = "form-control actual_salary" type = "text" style = "min-width:10px" name ="actual_salary[]" value = "{{ old('actual_salary.0') }}" onkeypress="return /[0-9.,%]/.test(event.key)" ></td> <td ><input class = "form-control payroll" type = "text" style = "min-width:10px" name = "payroll[]" value = "{{ old('payroll.0') }}" ></td><td ><input class = "form-control salary" type = "text" style = "min-width:150px" name = "salary[]" value = "{{ old('salary.0') }}" onkeypress = "return /[0-9.]/i.test(event.key)" ></td><td> <a href = "javascript:void(0)" id = "remove-row" class = "text-success font-18 remove-row datepicker" title = "remove" ><img src = "{{ asset('assets/admin/img/icon/remove.png') }}" alt = ""></a></td></tr>';
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
                    alert('A maximum of ' + maxField + ' fields are allowed to be added. ');
                }
            });

            $(wrapper).on('click', '.remove-row', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove();
                x--;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('#customFields tbody');

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

            $('#customFields').on('click', '.remove-row', function(){
                $(this).closest('tr').remove();
                updateTotals();
            });

            // Event listener for dynamic input changes in qty or price fields within the table
            wrapper.addEventListener('input', function (e) {
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
            wrapper.addEventListener('click', removeRowandUpdateTotals);
        });
    </script>

<script>
    $(document).ready(function() {
        var maxField = 5;
        var addButton = $('#payment-add-row');
        var wrapper = $('#paymentFields');
        var fieldHTML =
            '<tr><td style="width:50px"><a href="javascript:void(0)" class="payment-remove-row" title="Remove"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td><td><select name="paymentMode[]" class="form-control payment-mode"><option value="" disabled selected>Select Mode</option><option value="Cash">Cash</option><option value="Cheque">Cheque</option><option value="Online">Online</option></select></td><td><input class="form-control common-field datepicker" type="text" name="payment_date[]" placeholder="DD/MM/YYYY" style="display:none"></td><td><input class="form-control common-field amount" type="text" name="amount[]" placeholder="Amount" style="display:none"></td><td class="cash-fields" style="display:none"><input class="form-control" type="text" name="receivable[]" placeholder="Receivable By"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="chequeNumber[]" placeholder="Cheque Number"></td><td class="cheque-fields" style="display:none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td><td class="online-fields" style="display:none"><input class="form-control" type="text" name="transactionId[]" placeholder="Transaction ID"></td><td class="online-fields" style="display: none"><input class="form-control" type="text" name="bankName[]" placeholder="Bank Name"></td></tr>'; // New input field html
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


        $(wrapper).on('click', '.payment-remove-row', function(e) {
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
@endsection
