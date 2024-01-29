@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">
        <div class="header-advance-area" style="background: #BEC0BF">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <form method="" action="#">
                                    <input type="hidden" name="_token" value="">
                                    <div class="row">
                                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Quotations Create</h4>
                                        <hr class="m-0 border-top-grey">
                                        <div class="col-lg-4">
                                            <label for="name" class="form-label text-dark">Date</label>
                                            <input type="date" name="delivery_time" style="width: 100%;"
                                            class="fromdate form-control" placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Benificary*</label>
                                            <input type="text" class="form-control" placeholder="Benificary"
                                                name="material_sbh">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Cheque Number / Reciept Number*</label>
                                            <input type="text" class="form-control" placeholder="Cheque Number / Reciept Number" name="pr_item">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Description*</label>
                                            <input type="text" class="form-control"
                                                placeholder="Description" name="material_rfq">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Amount Deposited*</label>
                                            <input type="text" class="form-control" placeholder="Amount Deposited"
                                                name="technical_data">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Amount Withdrawn*</label>
                                            <input type="number" class="form-control" placeholder="Amount Withdrawn" name="article">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Project*</label>
                                            <input type="text" class="form-control" placeholder="Project"
                                                name="manufacturer">
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
@endsection
