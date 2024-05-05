@extends('layouts.master')
@section('contents')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>All {{ $title }}</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="javascript:void(0);"> {{ $title }}</a></li>
            <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">All  {{ $title }}</a></li> -->
        </ol>
    </div>
</div>

<div class="row">
    <!-- <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
            <li class="nav-item"><a href="#list-view" data-bs-toggle="tab" class="nav-link me-1 show active">List View</a></li>
            <li class="nav-item"><a href="#grid-view" data-bs-toggle="tab" class="nav-link">Grid View</a></li>
        </ul>
    </div> -->
    <div class="col-lg-12">
        <div class="row tab-content">
            <div id="list-view" class="tab-pane fade active show col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Resourses  </h4>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm(0)">+ Add new</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="DataTables_Table_0_length">
                                <!--<label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>-->
                                </div><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <!--<label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_0"></label>-->
                                    </div><table id="DataTables_Table_0" class="display text-nowrap w-100 data-table dataTable no-footer" style="min-width: 845px; width: 1197px;" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 29.875px;" aria-sort="ascending" aria-label="SL: activate to sort column descending">SL</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 154.875px;" aria-label="Name: activate to sort column ascending">Name</th><th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 108.875px;" aria-label="Thumbnail: activate to sort column ascending"></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68.875px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64.875px;" aria-label="Action">Action</th></tr>
                                </thead>
                                <tbody>

                                <tr class="odd"><td class="sorting_1">1</td><td>Module-1_Pre-Traning-Session-1A.pdf</td><td></td><td>1</td><td>
                    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm(4)"><i class="fa fa-pencil"></i></a>
                    <a href="https://innovisionsurjoclub.epatthoboi.com/course/delete?id=4" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                    </td></tr><tr class="odd"><td class="sorting_1">2</td><td>Module-session-1_Role Clarity About Jobs.docx</td><td></td><td>1</td><td>
                    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm(6)"><i class="fa fa-pencil"></i></a>
                    <a href="https://innovisionsurjoclub.epatthoboi.com/course/delete?id=6" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                    </td></tr>
                    <tr class="odd"><td class="sorting_1">3</td><td>Session1.mkv</td><td></td><td>1</td><td>
                    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm(6)"><i class="fa fa-pencil"></i></a>
                    <a href="https://innovisionsurjoclub.epatthoboi.com/course/delete?id=6" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                    </td></tr></tbody>
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <!-- Quiz Start Button -->
                                <button class="btn btn-primary mr-2" style="position: relative;right: 885px;">Quiz Start</button>

                                <!-- Pagination Links -->
                                <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="DataTables_Table_0_previous">Previous</a>
                                <span>
                                    <a class="paginate_button current" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a>
                                </span>
                                <a class="paginate_button next disabled" aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="DataTables_Table_0_next">Next</a>
                            </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="grid-view" class="tab-pane fade col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-profile">
                            <div class="card-header justify-content-end pb-0 border-0">
                                <div class="dropdown">
                                    <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                        <span class="dropdown-dots fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0">
                                        <div class="py-2">
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <div class="text-center">
                                    <div class="profile-photo">
                                        <img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h3 class="mt-4 mb-1">Alexander</h3>
                                    <p class="text-muted">M.COM., P.H.D.</p>
                                    <ul class="list-group mb-3 list-group-flush">
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Gender :</span><strong>Male</strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Email:</span><strong>info@example.com</strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
                                    </ul>
                                    <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" id="form" style="max-width: 90%;">

    </div>
</div>
@stop
@section('js')

    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js')}}"></script>

    <!-- Svganimation scripts -->
    <script src="{{ asset('vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{ asset('vendor/svganimation/svg.animation.js')}}"></script>
    <script>
        function getForm(id){
            $.ajax({
                url: "{{ route($route.'form') }}",
                method: 'get',
                data:{ id:id },
                success: function(result){
                    $('#form').html(result);
                }
            });
        }
        $(function () {
            var table = $('.data-table').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ route($route.'index') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex'  },
                    { data: 'name', name: 'name'  },
                    { data: 'subtitle', name: 'subtitle'  },
                    { data: 'thumbnail', name: 'thumbnail'  },
                    { data: 'cover', name: 'cover'  },
                    { data: 'code', name: 'code'  },
                    { data: 'limit', name: 'limit'  },
                    { data: 'start', name: 'start'  },
                    { data: 'end', name: 'end'  },
                    { data: 'status', name: 'status'  },
                    { data: 'action', name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
@stop
@section('css')
<link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@stop
