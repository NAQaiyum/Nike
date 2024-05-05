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
                        <h4 class="card-title">All {{ $title }}  </h4>
                        <a href="add-professor.html" class="btn btn-primary">+ Add new</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display text-nowrap w-100" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Institution</th>
                                        <th>Inst. reg_no</th>
                                        <th>nid</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getDatas as $data)
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="{{ asset($data->image) }}" alt=""></td>
                                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->institution }}</td>
                                        <td>{{ $data->institution_reg_no }}</td>
                                        <td>{{ $data->nid }}</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>												
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
@stop
@section('js')

    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js')}}"></script>

    <!-- Svganimation scripts -->
    <script src="{{ asset('vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{ asset('vendor/svganimation/svg.animation.js')}}"></script>
@stop
@section('css')
<link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@stop