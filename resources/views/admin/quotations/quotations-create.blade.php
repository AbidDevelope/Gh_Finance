<style>

    .margin_top{
        margin-top: -50px !important;
    }
    </style>

@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area" style="background: white">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="margin_top">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-section bg-white">
                                <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Create Quotations </h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('quotations/create') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="Project Id">Project Id <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="project_id" onkeypress="return /[0-9]/i.test(event.key)"  name="project_id" value="{{ old('project_id') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Type">Project Type</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_type" name="project_type" value="{{ old('project_type') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Name">Project Name</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Project Value">Project Value</label>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control" id="project_value" name="project_value" value="{{ old('project_value') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Quotation Number </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="quotation_number" value="{{ old('quotation_number') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quotation date </label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="date"
                                                        name="quotation_date" value="{{ old('quotation_date') }}">
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
                                                            <th> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                    style="min-width:150px" name="description[]" value="{{ old('description.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text" name="unit[]" value="{{ old('unit.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text" name="qty[]" value="{{ old('qty.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text" name="price[]" value="{{ old('price.0') }}">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text"
                                                                    style="min-width:150px" name="total[]" value="{{ old('total.0') }}">
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
                                                                    type="text" name="subtotal">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right">
                                                                Others
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"
                                                                style="text-align: right; font-weight: bold">
                                                                Grand Total
                                                            </td>
                                                            <td
                                                                style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="grandtotal">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn color submit-btn" style="background:var(--own-black)">CREATE</button>
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
                            alert('Error: ' + request.responseText);
                        },
                    });
                }
            });
        });

    </script>
@endsection
