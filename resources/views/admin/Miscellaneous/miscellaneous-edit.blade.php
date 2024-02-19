@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Edit Miscellaneous</h4>
                                <hr class="border-top-grey">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form action="{{ route('miscellaneous/update', $miscellaneous->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-white" id="customFields">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-5">Description</th>
                                                            <th class="col-sm-2">Month</th>
                                                            <th class="col-sm-2">Date</th>
                                                            <th class="col-sm-2">Total/KWD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($miscellaneous->miscellaneousItem as $item)
                                                            <tr>
                                                                <td>
                                                                    <input class="form-control" type="text"
                                                                        style="min-width:150px" name="items[{{ $item->id }}][description]"
                                                                        value="{{ $item->description }}">
                                                                </td>
                                                                <td>
                                                                    <select name="items[{{ $item->id }}][month]" id=""
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
                                                                    <input type="text" class="form-control"
                                                                        id="Start" name="items[{{ $item->id }}][date]"
                                                                        value="{{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }}"
                                                                        placeholder="DD/MM/YYYY">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="text"
                                                                        style="min-width:150px" name="items[{{ $item->id }}][total]"
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
                                                            <td colspan="5" class="text-right">Sub Total :</td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,%]/.test(event.key)"
                                                                    type="text" name="subtotal"
                                                                    value="{{ $miscellaneous->subtotal }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right">
                                                                Others :
                                                            </td>
                                                            <td style="text-align: right; padding-right: 30px;width: 230px">
                                                                <input class="form-control text-right"
                                                                    onkeypress="return /[0-9.,]/i.test(event.key)"
                                                                    type="text" name="others"
                                                                    value="{{ $miscellaneous->others }}">
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
                                                                    type="text" name="grandtotal"
                                                                    value="{{ $miscellaneous->grandtotal }}">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">UPDATE</button>
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
