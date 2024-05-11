@extends('layouts.master')
@section('contents')
<div class="row">
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body">
                <div class="media">
                    <span class="me-3">
                        <i class="la la-users"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Learning exercise</p>
                        <h3 class="text-white">3</h3>
                        <div class="progress mb-2 bg-white">
                            <div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
                        </div>
                        <small>60% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="widget-stat card bg-warning">
            <div class="card-body">
                <div class="media">
                    <span class="me-3">
                        <i class="la la-user"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Total course</p>
                        <h3 class="text-white">6</h3>
                        <div class="progress mb-2 bg-white">
                            <div class="progress-bar progress-animated bg-white" style="width: 50%"></div>
                        </div>
                        <small>50% Increase in 25 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="widget-stat card bg-secondary">
            <div class="card-body">
                <div class="media">
                    <span class="me-3">
                        <i class="la la-graduation-cap"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Total exam</p>
                        <h3 class="text-white">28</h3>
                        <div class="progress mb-2 bg-white">
                            <div class="progress-bar progress-animated bg-white" style="width: 76%"></div>
                        </div>
                        <small>66% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="col-xl-3 col-xxl-3 col-sm-6">-->
    <!--    <div class="widget-stat card bg-danger">-->
    <!--        <div class="card-body">-->
    <!--            <div class="media">-->
    <!--                <span class="me-3">-->
    <!--                    <i class="la la-dollar"></i>-->
    <!--                </span>-->
    <!--                <div class="media-body text-white">-->
    <!--                    <p class="mb-1">My Rank</p>-->
    <!--                    <h3 class="text-white">25160$</h3>-->
    <!--                    <div class="progress mb-2 bg-white">-->
    <!--                        <div class="progress-bar progress-animated bg-white" style="width: 30%"></div>-->
    <!--                    </div>-->
    <!--                    <small>30% Increase in 30 Days</small>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="col-xl-9 col-xxl-9 col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Exam Survey</h3>
            </div>
            <div class="card-body">
                <div id="morris_bar_stalked" class="morris_chart_height ltr" style="height: 300px !important;"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Performance Chart</h3>
            </div>
            <div class="card-body">
                <div id="morris_donught_2" class="morris_chart_height ltr" style="height: 300px !important;"></div>
            </div>
        </div>
    </div>
    <!-- <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">University Survey</h3>
            </div>
            <div class="card-body">
                <div id="morris_area" class="morris_chart_height ltr" style="height: 300px !important;"></div>
            </div>
        </div>
    </div> -->
</div>
<div class="row">
    @foreach($getCourse as $course)
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <img class="img-fluid rounded-top" src="{{ $course && $course->thumbnail ? asset($course->thumbnail) : asset('images/courses/pic1.jpg')}}" alt="">
            <div class="card-body">
                <h4><a href="#">{{ $course->name }}</a></h4>
                <ul class="list-group mb-3 list-group-flush">
                    <li class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                        <span class="mb-0">{{ $course->subtitle }}</span>
                        <a href="javascript:void(0);" class="add-wishlist-btn">
                            <i class="la la-heart-o outline"></i>
                            <i class="la la-heart fill"></i>
                            <span>{{ $course->code }}</span>
                        </a>
                    </li>
                    <!-- <li class="list-group-item px-0 d-flex justify-content-between">
                        <span class="mb-0">Duration :</span><strong>12 Months</strong></li>
                    <li class="list-group-item px-0 d-flex justify-content-between">
                        <span class="mb-0">Professor :</span><strong>Jack Ronan</strong></li> -->
                    <li class="list-group-item px-0 d-flex justify-content-between">
                        <span><i class="fa fa-graduation-cap text-primary me-2"></i>Student</span><strong>+120</strong></li>
                </ul>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text">To</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Subject</span>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-ekeditor">
                            <div id="ckeditor"></div>
                        </div>
                    </div>
                    <div class="row align-items-center my-3">
                        <div class="col-xl-6">
                            <div class="mb-xl-0 mb-3">
                                <input type="file" class="form-control" data-default-file="">
                            </div>
                        </div>
                        <div class="col-xl-6 ">
                            <button type="submit" class="btn btn-primary float-xl-end">
                                Send <i class="fa fa-paper-plane-o"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Exam Toppers</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table verticle-middle text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Roll No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <!--<th scope="col">Edit</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>542</td>
                                <td>Jack Ronan</td>
                                <td><span id="widget_sparklinedash"><canvas></canvas></span></td>
                                <!--<td>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td>243 </td>
                                <td>Jimmy Morris</td>
                                <td><div class="ico-sparkline"><div id="widget_spark-bar"></div></div></td>
                                <!--<td>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td>452 </td>
                                <td>Nashid Martines</td>
                                <td><div class="ico-sparkline"><div id="widget_StackedBarChart"></div></div></td>
                                <!--<td>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td>124</td>
                                <td>Roman Aurora</td>
                                <td> <div class="ico-sparkline"> <div id="widget_tristate"></div></div></td>
                                <!--<td>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>-->
                                <!--</td>-->
                            </tr>
                            <tr>
                                <td>234</td>
                                <td>Samantha</td>
                                <td> <div class="ico-sparkline"> <div id="widget_composite-bar"></div> </div> </td>
                                <!--<td>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>-->
                                <!--    <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>-->
                                <!--</td>-->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
@stop
@section('js')
<!-- Required vendors -->
<!-- <script src="{{asset('vendor/global/global.min.js')}}"></script> -->

<!-- Chart sparkline plugin files -->
<script src="{{asset('vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/plugins-init/sparkline-init.js')}}"></script>

<!-- Chart Morris plugin files -->
<script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendor/morris/morris.min.js')}}"></script>

<!-- Init file -->
<script src="{{asset('js/plugins-init/widgets-script-init.js')}}"></script>

<!-- Svganimation scripts -->
<script src="{{asset('vendor/svganimation/vivus.min.js')}}"></script>
<script src="{{asset('vendor/svganimation/svg.animation.js')}}"></script>

<!-- Demo scripts -->
<script src="{{asset('js/dashboard/dashboard.js')}}"></script>

@stop
