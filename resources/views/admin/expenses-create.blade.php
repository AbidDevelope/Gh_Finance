@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="row">
                                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Create Expenses</h4>
                                        <hr class="m-0 border-top-grey">
                                        <div class="col-lg-4">
                                            <label for="name" class="form-label text-dark">Date</label>
                                            <input type="date" class="form-control" name="date" placeholder="dd/mm/yy" >
                                            @error('type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="name" class="form-label text-dark">Project</label>
                                            <input type="text" class="form-control" name="project" placeholder="Project" value="">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Beneficiary</label>
                                            <input type="text" class="form-control" placeholder="Beneficiary"
                                                name="beneficiary">
                                                @error('beneficiary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="email" class="form-label text-dark">Recp No. / Cheque Number</label>
                                            <input type="text" class="form-control" placeholder="Recp No. / Cheque Number" name="receipt" value="">
                                            @error('receipt')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="text" class="form-label text-dark">Amount Deposited</label>
                                            <input type="text" class="form-control" onkeypress="return /[0-9,-.]/.test(event.key)" placeholder="Amount Deposited" name="amount_deposit" value="">
                                            @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="text" class="form-label text-dark">Amount Withdrawn</label>
                                            <input type="text" class="form-control" onkeypress="return /[0-9,-.]/.test(event.key)" placeholder="Amount Withdrawn" name="amount_withdrawn" value="">
                                            @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark"> Description
                                                </label>
                                            <textarea type="text" class="form-control"
                                                placeholder="Description" name="description"></textarea>
                                                @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                    <button type="submit" class="btn btn-create btn-lg mt-5">CREATE</button>
                                    <!-- </div> -->
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
@endsection
