@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Edit Expenses</h4>
                                <hr class="m-0 border-top-grey">
                                <form action="{{ route('expenses/update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input class="form-control" type="text" name="item_name" value="{{ $data->item_name }}">
                                                @error('item_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project</label>
                                                <input class="form-control" type="text" name="project" value="{{ $data->project }}">
                                                @error('project')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purchase From</label>
                                                <input class="form-control" type="text" name="purchase_from" value="{{ $data->purchase_from }}">
                                                @error('purchase_from')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purchase Date</label>
                                                <input class="form-control" type="date" name="purchase_date" value="{{ $data->purchase_date }}">
                                                @error('purchase_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purchased By </label>
                                                <select class="select form-control" name="purchase_by">
                                                    <option value="" disabled>Select By</option>
                                                    <option value="Abid" {{ $data->purchase_by == 'Abid' ? 'selected' : '' }}>Abid</option>
                                                    <option value="Monika" {{ $data->purchase_by == 'Monika' ? 'selected' : '' }}>Monika</option>
                                                </select>                                                
                                                @error('purchase_by')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input placeholder="$50" class="form-control" type="text" name="amount" value="{{ $data->amount }}">
                                                @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Paid By</label>
                                                <select class="select form-control" name="paid_by">
                                                    <option value="" disabled>Select By</option>
                                                    <option value="Cash" {{ $data->paid_by == 'Cash' ? 'selected' : '' }}>Cash</option>
                                                    <option value="Cheque" {{ $data->paid_by == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                                                </select>                                                
                                                @error('paid_by')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="select form-control" name="status">
                                                    <option value="" disabled>Select Status</option>
                                                    <option value="Pending" {{ $data->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Approved" {{ $data->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                </select>                                                
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Attachments</label>
                                                <input class="form-control" type="file" name="attachments">
                                                @error('attachments')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input class="form-control" type="text" name="description" value="{{ $data->description }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
@endsection
