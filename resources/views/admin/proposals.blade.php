@extends('admin.layouts.master')
@section('content')
    <div class="all-content-wrapper">

        <div class="header-advance-area">

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="s002">
                                <form>
                                    <div class="inner-form">
                                        <div class="input-field first-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l6 5.99L20.49 20l-5.99-6zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                </svg>
                                            </div>
                                            <input id="search" type="text" placeholder="Start typing to search">
                                        </div>
                                        <div class="input-field second-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <input class="datepicker flatpickr-input" id="depart" type="text"
                                                placeholder="29 Aug 2018" readonly="readonly">
                                        </div>
                                        <div class="input-field third-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <input class="datepicker flatpickr-input" id="return" type="text"
                                                placeholder="30 Aug 2018" readonly="readonly">
                                        </div>
                                        <div class="input-field fouth-wrap">
                                            <div class="icon-wrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="choices" role="listbox" data-type="select-one" tabindex="0"
                                                aria-haspopup="true" aria-expanded="false" dir="ltr"
                                                aria-activedescendant="choices-choices-single-defaul-z0-item-choice-2">
                                                <div class="choices__inner"><select data-trigger=""
                                                        name="choices-single-defaul" class="choices__input is-hidden"
                                                        tabindex="-1" style="display:none;" aria-hidden="true"
                                                        data-choice="active">
                                                        <option value="2 Adults" selected="">2 Adults</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable choices__placeholder"
                                                            data-item="" data-id="1" data-value="2 Adults"
                                                            aria-selected="true">
                                                            All
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <div class="choices__list" dir="ltr" role="listbox">
                                                        <div class="choices__item choices__item--choice choices__item--selectable choices__placeholder"
                                                            data-select-text="" data-choice="" data-id="1"
                                                            data-value="2 Adults" data-choice-selectable=""
                                                            id="choices-choices-single-defaul-z0-item-choice-1"
                                                            role="option" aria-selected="false">
                                                            2 Adults
                                                        </div>
                                                        <div class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                            data-select-text="" data-choice="" data-id="2"
                                                            data-value="3 Adults" data-choice-selectable=""
                                                            id="choices-choices-single-defaul-z0-item-choice-2"
                                                            role="option" aria-selected="true">
                                                            3 Adults
                                                        </div>
                                                        <div class="choices__item choices__item--choice choices__item--selectable"
                                                            data-select-text="" data-choice="" data-id="3"
                                                            data-value="4 Adults" data-choice-selectable=""
                                                            id="choices-choices-single-defaul-z0-item-choice-3"
                                                            role="option" aria-selected="false">
                                                            4 Adults
                                                        </div>
                                                        <div class="choices__item choices__item--choice choices__item--selectable"
                                                            data-select-text="" data-choice="" data-id="4"
                                                            data-value="5 Adults" data-choice-selectable=""
                                                            id="choices-choices-single-defaul-z0-item-choice-4"
                                                            role="option" aria-selected="false">
                                                            5 Adults
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field fifth-wrap">
                                            <button class="btn-search" type="button">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-actions">
                                <a class="btn btn-primary rounded proposals-create f-14 p-2 mr-3 float-left mb-2 mb-lg-0 mb-md-0">
                                    <i class="fa fa-plus"></i> Create Proposal
                                </a>
                                <a href="#" class="btn dt-buttons rounded f-14 p-2 mr-3 mb-2 mb-lg-0 mb-md-0 float-left">
                                        <i class="fa fa-file-export"></i> Export
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id="dataTable">
                                <thead>
                                    <tr role="row">
                                        <th>Id</th>
                                        <th>Proposal</th>
                                        <th>Date</th>
                                        <th>RECIPT / cheque number</th>
                                        <th>DESCRIPTION </th>
                                        <th>Project</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td><a href="#">View</a></td>
                                    </tr>
                                    <tr class="odd">
                                        <td valign="top" colspan="8" class="dataTables_empty">No data available in
                                            table
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Static Table Start -->

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

    {{-- Data Table js code --}}
    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script>
        let table = new DataTable('#dataTable');
    </script>
{{-- Data trigger --}}
<script src="{{ asset('assets/admin/js/choices.js') }}"></script>
<script src="{{ asset('assets/admin/js/flatpickr.js') }}"></script>
<script>
  flatpickr(".datepicker",
  {});

</script>
<script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false,
      itemSelectText: '',
    });

  </script>
    <script>
        $(document).ready(function(){
        $('.proposals-create').click(function(){
            // alert('okk');

            $.ajax({
                type: 'GET',
                url: "{{ route('proposals/create') }}",
                success: function(response)
                {
                    window.location.href="proposals/create";
                }
            });
        });
    });

  </script>
@endsection
