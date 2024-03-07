<style>

    .margin_top{
        margin-top: -10px !important;
    }
    </style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area" style="background: white">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top mx-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-section bg-white">
                                <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Edit Quotations </h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('quotation/update', $quotations->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="Project Id">Project Id <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="project_id" onkeypress="return /[0-9]/i.test(event.key)"  name="project_id" value="{{ $quotations->project_id }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Type">Project Type</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_type" name="project_type" value="{{ $quotations->projects->project_type }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Name">Project Name</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_name" name="project_name" value="{{ $quotations->projects->project_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Value">Project Value</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_value" name="project_value" value="{{ $quotations->projects->project_value }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Quotation Number </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="quotation_number" value="{{ $quotations->quotation_number }}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quotation date </label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker datepicker" type="text"
                                                        name="quotation_date" value="{{ \Carbon\Carbon::parse($quotations->quotation_date)->format('d/m/Y') }}">
                                                    @error('quotation_date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-5">Description</th>
                                                            <th style="col-sm-2">Unit</th>
                                                            <th style="width:80px;">Qty</th>
                                                            <th class="col-sm-2">Price/K.D</th>
                                                            <th class="col-sm-2">Total/K.D</th>
                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($quotations->quotationItems as $quotation)
                                                        <tr>
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                    style="min-width:150px" name="items[{{ $quotation->id }}][description]" value="{{ $quotation->description }}" required>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text" name="items[{{ $quotation->id }}][unit]" value="{{ $quotation->unit }}" required>
                                                            </td>
                                                            <td>
                                                                <input class="form-control qty" type="text" name="items[{{ $quotation->id }}][qty]" value="{{ $quotation->qty }}" onkeypress="return /[0-9.,%]/.test(event.key)" required>
                                                            </td>
                                                            <td>
                                                                <input class="form-control price" type="text" name="items[{{ $quotation->id }}][price]" value="{{ $quotation->price }}" onkeypress="return /[0-9.,%]/.test(event.key)" required>
                                                            </td>
                                                            <td>
                                                                <input readonly class="form-control total" type="text"
                                                                    style="min-width:150px" name="items[{{ $quotation->id }}][total]" value="{{ $quotation->total }}" onkeypress="return /[0-9.,%]/.test(event.key)" required>
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
                                                            <td colspan="5" class="text-right">Sub Total :</td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input readonly class="form-control text-right subtotal"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)" placeholder="00.000"
                                                                    type="text" name="subtotal" value="{{ $quotations->subtotal }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right">
                                                                Others
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input  class="form-control text-right others"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)" placeholder="00.000"
                                                                    type="text" name="others" value="{{ $quotations->others }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"
                                                                style="text-align: right; font-weight: bold">
                                                                Grand Total
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                <input readonly class="form-control text-right grandtotal"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)" placeholder="00.000"
                                                                    type="text" name="grandtotal" value="{{ $quotations->grandtotal }}">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn color submit-btn" style="background:var(--own-black)">UPDATE</button>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    {{-- Add and Remove table row  --}}
    <script>
        $(document).ready(function() {
            var maxField = 5;
            var addButton = $('#add-row');
            var wrapper = $('#customFields');
            var fieldHTML =
                '<tr><td><input class="form-control" type="text" name="description[]" style="min-width:150px"></td><td><input class="form-control" name="unit[]" type="text"></td><td><input class="form-control" name="qty[]"  type="text"></td><td><input class="form-control" name="price[]" type="text"></td><td><input class="form-control" type="text" name="total[]" style="min-width:150px"></td><td><a href="javascript:void(0)" id="add-row" class="remove-row" title="Add"><img src="{{ asset('assets/admin/img/icon/remove.png') }}"/></a></td></tr>';
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

    {{-- Get Project Data --}}
    <script>
        $(document).ready(function(){
            $('#project_id').change(function(){
                var projectID = $(this).val();
                if(projectID)
                {
                    var url = '/project-data/' + projectID;

                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                        if(data.status === 'success')
                        {
                            $('#project_type').val(data.data.project_type);
                                $('#project_name').val(data.data.project_name);
                                $('#project_value').val(data.data.project_value);
                        } else {
                                alert('Project Not Found');
                        }
                        },
                        error: function(request, status, error) {
                            alert('Project Not Found');
                        },
                    });
                }
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear:true,
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const updateTotals = function() {
                let subtotal = 0;
                document.querySelectorAll('.total').forEach(function(totalField) {
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


            document.addEventListener('input', function(e) {
                if (e.target && (e.target.matches('.qty') || e.target.matches('.price'))) {
                    const row = e.target.closest('tr');
                    const qty = parseFloat(row.querySelector('.qty').value) || 0;
                    const price = parseFloat(row.querySelector('.price').value) || 0;
                    const total = qty * price;
                    row.querySelector('.total').value = total.toFixed(3);
                    updateTotals();
                }
            });

            // Removed the undefined function reference line

            const othersInput = document.querySelector('.others');
            othersInput.addEventListener('input', updateGrandTotal);
        });
    </script>
@endsection
