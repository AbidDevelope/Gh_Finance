<style>
.kwd{
    /* width: 20px !important; */
}
</style>

@extends('admin.layouts.master')
{{-- Dropzone Css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">


@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Create Expenses</h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('expenses/create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                     <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Id</label>
                                                <input class="form-control" type="text" name="project_id" placeholder="Project Id">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <select name="project_type" class="form-control" id="">
                                                    <option value="" disabled selected>Select Type</option>
                                                    <option value="Design">Design</option>
                                                    <option value="Construction"> Construction</option>
                                                    <option value="Design & Consrtuction"> Design & Consrtuction</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Name</label>

                                                <input class="form-control" type="text" name="project_name" placeholder="Project Name">

                                            </div>
                                        </div>

                                        {{-- <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Recp No. / Cheque number</label>
                                                <input class="form-control" type="text" name="receipt" placeholder="Receipt">
                                                @error('receipt')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Amount Deposited</label>
                                                <input placeholder="AMOUNT DEPOSITED" class="form-control" type="text" name="amount_deposite">
                                                @error('amount_deposite')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Amount Withdrawn</label>
                                                <input placeholder="AMOUNT WITHDRAWN" class="form-control" type="text" name="amount_withdraw">
                                                @error('amount_withdraw')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Beneficiary </label>

                                                <input class="form-control" type="text" name="beneficiary" placeholder="Project Name">

                                                @error('purchase_by')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr style="margin-right: 20px">
                                                            <th class="col-md-2">Description</th>
                                                            <th class="col-sm-2">Month</th>
                                                            <th class="col-sm-2">Date</th>
                                                            <th class="col-sm-2">Recp No. / Cheque number</th>
                                                            <th class="col-sm-1">Amount Deposited</th>
                                                            <th class="col-sm-1">Amount Withdrawn</th>
                                                            <th class="col-sm-2">Beneficiary</th>
                                                            <th class="col-sm-1">Total/KWD</th>
                                                             <th class="col-sm-1"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="margin-right: 20px">
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                    style="min-width:120px" name="description[]"
                                                                    value="{{ old('description.0') }}">
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
                                                                <input type="text" class="form-control" id="Start"
                                                                    name="date[]" value="{{ old('date.0') }}"
                                                                    placeholder="DD/MM/YYYY">
                                                            </td>
                                                            <td>
                                                                    <input class="form-control" type="text" name="receipt" >
                                                                    @error('receipt')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                            </td>
                                                            <td>


                                                                    <input class="form-control" type="text" name="amount_deposite" >
                                                                    @error('amount_deposite')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror

                                                            </td>
                                                            <td>


                                                                    <input  class="form-control" type="text" name="amount_withdraw">
                                                                    @error('amount_withdraw')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror

                                                            </td>
                                                            <td>


                                                                    <input class="form-control" type="text" name="beneficiary" placeholder="">
                                                                    @error('beneficiary')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror

                                                            </td>
                                                            <td>
                                                                <input class="form-control kwd" type="text"
                                                                    name="total[]"
                                                                    value="{{ old('total.0') }}"
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
                                                            <td colspan="5" class="text-right">Sub Total :</td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)"
                                                                    type="text" name="subtotal" value="{{ old('subtotal') }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right">
                                                                Others :
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others" value="{{ old('others') }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" style="text-align: right; font-weight: bold">
                                                                Grand Total :
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="grandtotal" value="{{ old('grandtotal') }}">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">CREATE</button>
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


    <script>
        $(document).ready(function() {
            var maxField = 5;
            var addButton = $('#add-row');
            var wrapper = $('#customFields');
            var fieldHTML =
                '<tr><td><input class="form-control" type="text" style="min-width:150px" name="description[]" value="{{ old('description.0') }}"></td><td><select name="month[]" id="" class="form-control"><option value="" disabled selected>Select Month</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></td><td><input type="text" class="form-control" id="Start" name="date[]" value="{{ old('date.0') }}" placeholder="DD/MM/YYYY"></td><td><input class="form-control" type="text" style="min-width:150px" name="total[]" value="{{ old('total.0') }}" onkeypress="return /[0-9.]/i.test(event.key)"></td><td><a href="javascript:void(0)" id="add-row" class="remove-row" title="Add"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td></tr>';
            var x = 1;

            $(addButton).click(function() {

                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
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
        var onDateSelect = function(selectedDate, input) {
            if (input.id === 'Start') { //Start date selected - update End Date picker
                $("#End").datepicker('option', 'minDate', selectedDate);
            } else { //End date selected - update Start Date picker
                $("#Start").datepicker('option', 'maxDate', selectedDate);
            }
        };
        var onDocumentReady = function() {
            var datepickerConfiguration = {
                dateFormat: "dd/mm/yy",
                onSelect: onDateSelect
            };
            ///--- Component Binding ---///
            $('#Start, #End').datepicker(datepickerConfiguration);
        };
        $(onDocumentReady);
    </script>
@endsection
