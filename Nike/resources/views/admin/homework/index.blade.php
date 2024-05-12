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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create" onclick="getForm(0)">+ Add new</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="display text-nowrap w-100 data-table" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Thumbnail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document" id="form">

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
                    { data: 'title', name: 'title'  },
                    { data: 'sub_title', name: 'sub_title'  },
                    { data: 'thumbnail', name: 'thumbnail'  },
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
