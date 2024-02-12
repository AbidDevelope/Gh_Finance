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
                                <h4 class="ml-0 f-21 font-weight-normal text-capitalize">Create Miscellaneous</h4>
                                <hr class="border-top-grey">
                                <form action="{{ route('miscellaneous/create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                 <input readonly type="text" value="Others" name="project_type" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <select name="project_name" class="form-control" id="">
                                                    <option value="" disabled selected>Select Name</option>
                                                     <option value="Xaltam Management">Xaltam Management</option>
                                                     <option value="Abc Management"> Abc Management</option>
                                                     <option value="Xyz Management"> Xyz Management</option>
                                                    {{-- @foreach ($projects as $project)
                                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Lead</label>
                                                <select name="project_manager_name" class="form-control" id="">
                                                    <option value="" selected disabled>Select Lead</option>
                                                    <option value="Irshad">Irshad</option>
                                                    <option value="Abid">Abid</option>
                                                    {{-- @foreach ($projectManagers as $projectManager)
                                                        <option value="{{ $projectManager->id }}">{{ $projectManager->name }}</option>
                                                    @endforeach --}}
                                                </select>
                                                @error('project_manager_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Recp No. / cheque number</label>
                                                <input class="form-control" type="text" name="receipt" placeholder="Receipt">
                                                @error('receipt')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Beneficiary </label>
                                                <select class="select form-control" name="beneficiary">
                                                    <option value="" selected disabled>Select By</option>
                                                    <option value="Abid">Abyat</option>
                                                    <option value="Monika">Sultan</option>
                                                    <option value="Monika">Khalid</option>
                                                </select>
                                                @error('purchase_by')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>AMOUNT DEPOSITED</label>
                                                <input placeholder="AMOUNT DEPOSITED" class="form-control" type="text" name="amount_deposite">
                                                @error('amount_deposite')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>AMOUNT WITHDRAWN</label>
                                                <input placeholder="AMOUNT WITHDRAWN" class="form-control" type="text" name="amount_withdraw">
                                                @error('amount_withdraw')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <select name="type" class="form-control" id="">
                                                    <option value="" disabled selected>Select Type</option>
                                                   @foreach ($projects as $project)
                                                   <option value="{{ $project->id }}">{{ $project->type }}</option>
                                                   @endforeach
                                                </select>
                                                @error('type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <select name="type" class="form-control" id="">
                                                    <option value="" disabled selected>Select Name</option>
                                                    @foreach ($projects as $project)
                                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Lead</label>
                                                <select name="project_manager_id" class="form-control" id="">
                                                    <option value="" selected disabled>Select Lead</option>
                                                    @foreach ($projectManagers as $projectManager)
                                                        <option value="{{ $projectManager->id }}">{{ $projectManager->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('project_manager_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input class="form-control" type="text" name="item_name" placeholder="Item Name">
                                                @error('item_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purchase From</label>
                                                <input class="form-control" type="text" name="purchase_from" placeholder="Purchase From">
                                                @error('purchase_from')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purchase Date</label>
                                                <input class="form-control" type="date"
                                                        name="purchase_date" placeholder="Purchase Date">
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
                                                    <option value="" selected disabled>Select By</option>
                                                    <option value="Abid">Abid</option>
                                                    <option value="Monika">Monika</option>
                                                </select>
                                                @error('purchase_by')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input placeholder="$50" class="form-control" type="text" name="amount">
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
                                                    <option value="" selected disabled>Select By</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Cheque">Cheque</option>
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
                                                    <option value="" selected disabled>Select Status</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Approved">Approved</option>
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
                                                <textarea type="text" class="form-control" name="description" placeholder="Enter Description"></textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}
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


    {{-- <script type="text/javascript">
        Dropzone.autoDiscover = false;
        document.addEventListener("DOMContentLoaded", function() {

            var myDropzone = new Dropzone("#dropzone", {
                type: 'POST',
                url: "{{ route('get/temp/img') }}",
                paramName: "bill",
                maxFilesize: 2,
                acceptedFiles: ".jpg,.jpeg,.png,.pdf",
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                init: function() {
                    this.on("success", function(file, response) {
                        console.log("File uploaded successfully:", response);
                    });
                }
            });
        });
    </script> --}}
@endsection
