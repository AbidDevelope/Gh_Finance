<style>
    .margin_top {
        margin-top: -60px !important;
    }

    input.rounded:focus {
        outline: none;
        /* Removes the default focus outline */
        border-color: #your-desired-color;
        /* Change 'your-desired-color' to the color you want */
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
                    <div class="margin_top mx-3">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section bg-white">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize"style="color: var(--own-black)">Edit
                                    Accounting Report</h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('accounts/update', $accounts->id) }}" method="post">
                                    @csrf
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <span>{{ $error }}</span>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Select Date</label>
                                                <input type="text" class="form-control datepicker" name="date"
                                                    value="{{ \Carbon\Carbon::parse($accounts->date)->format('d/m/Y') }}"
                                                    placeholder="DD/MM/YYYY" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project ID<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="project_id" id="project_id"
                                                    value="{{ $accounts->project_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <input readonly class="form-control" type="text" name="service_type"
                                                    id="project_type" value="{{ $accounts->service_type }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input readonly class="form-control" type="text" name="project_name"
                                                    id="project_name" value="{{ $accounts->project_name }}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Beneficiary</label>
                                                <input type="text" class="form-control" name="beneficiary"
                                                    value="{{ $accounts->beneficiary }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-g  roup">
                                                <label> Recp No. / Cheque number</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ $accounts->cheque_number_receipt_number }}"
                                                    name="cheque_number_receipt_number">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                @php
                                                $toRemove = ["KWD ", ","];
                                                $amountNumericPart = str_replace($toRemove, "", $accounts->amount_deposited);
                                                @endphp
                                                <label>Amout Deposited</label>
                                                <input class="form-control" type="text" id="amount_deposited"
                                                value="{{ $amountNumericPart }}" name="amount_deposited"
                                                    onkeypress="return /[0-9]/i.test(event.key)">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                @php
                                                $toRemove = ["KWD ", ","];
                                                $amountNumericPart = str_replace($toRemove, "", $accounts->amount_withdrawn);    
                                                @endphp
                                                <label>Amount Withdrawn</label>
                                                <input class="form-control" type="text" id="amount_withdrawn"
                                                    value="{{ $amountNumericPart }}" name="amount_withdrawn"
                                                    onkeypress="return /[0-9]/i.test(event.key)">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Column 1</label>
                                                <input class="form-control" type="text" id="column_1"
                                                    value="{{ $accounts->column_1 }}" name="column_1">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Column 2</label>
                                                <input class="form-control" type="text" id="Column_2"
                                                    value="{{ $accounts->column_2 }}" name="column_2">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input class="form-control" type="text" style="min-width:120px"
                                                    name="remarks" value="{{ $accounts->remarks }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" type="text">{{ $accounts->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="table-responsive">
                                                    <table class="table table-hover table-white">
                                                        <tbody>

                                                            <tr>
                                                                <td colspan="5"
                                                                    style="text-align: right; font-weight: bold; font-size: 15px;">
                                                                    Grand Value :
                                                                </td>
                                                                <td
                                                                    style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                    <input readonly class="form-control text-right"
                                                                        onkeypress="return /[0-9,]/i.test(event.key)"
                                                                        type="text" name="total_in_account"
                                                                        id="total_in_account"
                                                                        value="{{ $accounts->total_in_account }}">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn  submit-btn"
                                                style="background: var(--own-black)">Update</button>
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
                '<tr style="margin-right: 20px"><td><input class="form-control" type="text" style="min-width:120px" name="description[]" value="{{ old('description.0') }}"></td><td><input class="form-control" type="text" name="receipt[]"></td><td><input class="form-control" type="text" name="amount_deposite[]"></td><td><input class="form-control" type="text" name="amount_withdrawn[]"></td><td><input class="form-control kwd" type="text" name="total[]" value="{{ old('total.0') }}" onkeypress="return /[0-9.]/i.test(event.key)"></td><td><a href="javascript:void(0)" id="add-row" class="remove-row" title="Add"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td></tr>';

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
    {{-- Project Data Get By id --}}
    <script>
        $(document).ready(function() {
            $('#project_id').change(function() {
                var projectId = $(this).val();

                if (projectId) {
                    var url = '/project-data/' + projectId;
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (data.status === 'success') {
                                $('#project_type').val(data.data.project_type);
                                $('#project_name').val(data.data.project_name);
                            } else {
                                alert('Project Not Found');
                            }
                        },
                        error: function(request, status, error) {
                            alert('Project Not Found');
                        }

                    });
                }
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
    {{-- Date Format  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- date Format --}}

    <script>
        $(document).ready(function() {
            // Function to calculate grand total
            function calculateTotal() {
                var amountDeposited = $('#amount_deposited').val() ? parseInt($('#amount_deposited').val()) : 0;
                var amountWithdrawn = $('#amount_withdrawn').val() ? parseInt($('#amount_withdrawn').val()) : 0;

                // Calculating grand total
                var totalInAccount = amountDeposited - amountWithdrawn;

                // Updating the total in account field
                $('#total_in_account').val(totalInAccount);
            }

            // Event listeners for input fields
            $('#amount_deposited, #amount_withdrawn').on('input', function() {
                calculateTotal();
            });
        });
    </script>

@endsection
