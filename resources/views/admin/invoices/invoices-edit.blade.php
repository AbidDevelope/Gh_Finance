<style>
    .margin_top{
    margin-top: -45px !important;
}
input.rounded:focus {
outline: none; /* Removes the default focus outline */
border-color: #your-desired-color; /* Change 'your-desired-color' to the color you want */
}
</style>

@extends('admin.layouts.master')
@section('content')
<div class="all-content-wrapper">
    <div class="header-advance-area" style="background: white">
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="margin_top">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-white">
                        <div class="form-section bg-white">
                            <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Edit Invoices </h4>
                            <hr class="border-top-grey">
                            <form action="{{ route('invoice/update', $invoices->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert-danger">{{$error}}</div>
                                        @endforeach
                                    @endif
                                    <div class="col-md-3">
                                        <label>Invoice Number<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="invoice_number"
                                                value="{{ $invoices->invoice_number }}"
                                                >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Project ID<span class="text-danger">*</span></label>
                                             <input type="text" name="project_id" class="form-control" id="project_id" value="{{ $invoices->project_id }}" onkeypress="return /[0-9]/i.test(event.key)">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Project Type </label>
                                             <input readonly type="text" name="project_type" id="project_type" class="form-control" value="{{ $invoices->project->project_type }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Project Name </label>
                                             <input readonly type="text" name="project_name" id="project_name" value="{{ $invoices->project->project_name }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Project Value </label>
                                             <input readonly type="text" name="project_value" id="project_value" value="{{ $invoices->project->project_value }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Invoice date<span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control date" type="text"
                                                    name="invoice_date" placeholder="DD/MM/YYYY" value="{{ \Carbon\Carbon::parse($invoices->invoice_date)->format('d/m/Y') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Due Date<span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control date" type="text"
                                                    name="due_date" placeholder="DD/MM/YYYY" value="{{ \Carbon\Carbon::parse($invoices->due_date)->format('d/m/Y') }}">
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
                                                        <th class="col-md-5 text-center">Description</th>
                                                        <th style="col-sm-2 text-center">Unit</th>
                                                        <th class="text-center" style="width:80px;">Qty</th>
                                                        <th class="col-sm-2 text-center">Price/K.D</th>
                                                        <th class="col-sm-2 text-center">Total/K.D</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($invoices->invoiceItems as $item)   
                                                    <tr>
                                                        <td>
                                                            <input class="form-control" type="text"
                                                            style="min-width:150px" name="items[{{ $item->id }}][description]" value="{{ $item->description }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" name="items[{{ $item->id }}][unit]" value="{{ $item->unit }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control qty" type="text" name="items[{{ $item->id }}][qty]" value="{{ $item->qty }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control price" type="text" name="items[{{ $item->id }}][price]" value="{{ $item->price }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control total" type="text"
                                                            style="min-width:150px" name="items[{{ $item->id }}][total]" value="{{ $item->total }}">
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
                                                        <td colspan="5" class="text-right" style="font-size: 15px;">Sub Total :</td>
                                                        <td
                                                            style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right subtotal"
                                                                onkeypress="return /[0-9.,%]/.test(event.key)"
                                                                type="text" name="subtotal" value="{{ $invoices->subtotal }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-right" style="font-size: 15px;">
                                                            Discount(KWD)
                                                        </td>
                                                        <td
                                                            style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right discount"
                                                                onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                type="text" name="discount" value="{{ $invoices->discount }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5"
                                                            style="text-align: right; font-weight: bold;font-size: 15px;">
                                                            Grand Value
                                                        </td>
                                                        <td
                                                            style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                            <input class="form-control text-right grandValue"
                                                            onkeypress="return /[0-9.,]/i.test(event.key)"
                                                            type="text" name="grandValue" value="{{ $invoices->grandValue }}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn  submit-btn" style="background: var(--own-black)">UPDATE</button>
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
 <!-- Include jQuery UI -->
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <!-- Include jQuery UI CSS -->
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script>
   $(document).ready(function(){
    $( ".date" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy'
      });
   });
</script>

{{-- Add and Remove table row  --}}
<script>
    $(document).ready(function() {
        var maxField = 5;
        var addButton = $('#add-row');
        var wrapper = $('#customFields');
        var fieldHTML =
            '<tr><td><input class="form-control" type="text" name="description[]" style="min-width:150px"></td><td><input class="form-control" name="unit[]" type="text"></td><td><input class="form-control qty" name="qty[]"  type="text"></td><td><input class="form-control price" name="price[]" type="text"></td><td><input class="form-control total" type="text" name="total[]" style="min-width:150px"></td></tr>';
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
                    success: function(data)
                    {
                       if(data.status === 'success')
                       {
                           $('#project_type').val(data.data.project_type);
                           $('#project_name').val(data.data.project_name);
                           $('#project_value').val(data.data.project_value);
                       }
                       else{
                        alert('Project Not Found');
                       }
                    },
                    error: function(request, status, error){
                        alert('Project Not Found');
                    }
                });
            }
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('#customFields tbody'); 

    const updateTotals = function () {
        let subtotal = 0;
        document.querySelectorAll('.total').forEach(function (totalField) {
            const totalValue = parseFloat(totalField.value) || 0;
            subtotal += totalValue;
        });
        document.querySelector('.subtotal').value = subtotal.toFixed(3);
        updateGrandTotal();
    };

    const updateGrandTotal = function () {
        const subtotal = parseFloat(document.querySelector('.subtotal').value) || 0;
        const discount = parseFloat(document.querySelector('.discount').value) || 0;
        const grandTotal = subtotal - discount;
        document.querySelector('.grandValue').value = grandTotal.toFixed(3);
    };

    const removeRowAndUpdateTotals = function (e) {
        if (e.target && e.target.matches('.remove-row')) {
            e.target.closest('tr').remove(); 
            updateTotals(); 
        }
    };

    wrapper.addEventListener('input', function (e) {
        if (e.target && (e.target.matches('.qty') || e.target.matches('.price'))) {
            const row = e.target.closest('tr'); 
            const qty = parseFloat(row.querySelector('.qty').value) || 0;
            const price = parseFloat(row.querySelector('.price').value) || 0;
            const total = qty * price; 
            row.querySelector('.total').value = total.toFixed(3);
            updateTotals();
        }
    });

    wrapper.addEventListener('click', removeRowAndUpdateTotals);

    const othersInput = document.querySelector('.discount');
    othersInput.addEventListener('input', updateGrandTotal);
});
</script>
@endsection
