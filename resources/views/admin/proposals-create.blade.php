@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">

        <div class="header-advance-area">

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-section">
                                <form method="POST" action="#">
                                    <input type="hidden" name="_token" value="">
                                    <div class="row">
                                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Proposal Details</h4>
                                        <hr class="m-0 border-top-grey">
                                        <div class="col-lg-4">
                                            <label for="name" class="form-label text-dark">Name</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="email" class="form-label text-dark">Email</label>
                                            <input type="text" class="form-control" name="email" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Title*</label>
                                            <input type="text" class="form-control" placeholder="Title" name="title">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">PR-Item*</label>
                                            <input type="text" class="form-control" placeholder="PR-Item" name="pr_item">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Material Description
                                                RFQ*</label>
                                            <input type="text" class="form-control"
                                                placeholder="Material Description RFQ" name="material_rfq">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Material Description*</label>
                                            <input type="text" class="form-control" placeholder="Material Description"
                                                name="material_sbh">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Technical Data*</label>
                                            <input type="text" class="form-control" placeholder="Technical Data"
                                                name="technical_data">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Article No.*</label>
                                            <input type="number" class="form-control" placeholder="Article" name="article">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Manufacturer /
                                                Supplier*</label>
                                            <input type="text" class="form-control" placeholder="Manufacturer / Supplier"
                                                name="manufacturer">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Price <span
                                                    class="changing_option">AED</span>*</label>
                                            <input type="number" class="form-control" placeholder="Price/Pce AED"
                                                name="price">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="discount" class="form-label text-dark">Discount <span
                                                    class="changing_option">AED</span>*</label>
                                            <input type="number" class="form-control" placeholder="Discount AED"
                                                name="discount">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="vat" class="form-label text-dark">VAT <span
                                                    class="changing_option">AED</span>*</label>
                                            <input type="number" class="form-control" placeholder="VAT AED"
                                                name="vat">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Total Price <span
                                                    class="changing_option">AED</span>*</label>

                                            <input type="number" class="form-control" placeholder="Total Price AED"
                                                name="total_price">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark">Transport <span
                                                    class="changing_option">AED</span>*</label>
                                            <input type="text" class="form-control" placeholder="Transport AED"
                                                name="transport">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="formgroup">
                                                <label for="title" class="form-label text-dark">Delivery time*</label>
                                                <input type="date" name="delivery_time" style="width: 100%;"
                                                    class="fromdate form-control" placeholder="DD/MM/YYYY">
                                                <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="title" class="form-label text-dark">Additional Note</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="notes" placeholder="Leave a comment here" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="title" class="form-label text-dark mt-3">Terms &amp;
                                                Conditions</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="condition" placeholder="Terms &amp; Conditions" style="height: 100px"></textarea>
                                            </div>
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
