<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>LMS</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="dexignlabs">
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="admin, dashboard, Analytics Dashboard, Customizable Admin Panel, web app,School Management,Dashboard Template, academy, course, courses, e-learning, education, learning, learning management system, lms, school, student, teacher">   

	<meta name="description" content="LMS - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">

	<meta property="og:title" content="LMS">
	<meta property="og:description" content="LMS - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">
	
	<meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="LMS">
	<meta name="twitter:description" content="LMS - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">

	<meta name="twitter:image" content="https://edumin.dexignlab.com/xhtml/social-image.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">

	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link class="main-css" rel="stylesheet" href="{{ asset('css/style.css')}}">
    @yield('css')
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('layouts.include.preloader')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.include.nav-header')
        
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
		@include('layouts.include.chat')
		<!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('layouts.include.admin-header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        <!--**********************************
            Sidebar end
        ***********************************-->
        @include('layouts.include.sidebar')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('contents')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">epatthoboi</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-select/dist//bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>

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
    
	<script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/dlabnav-init.js')}}"></script>
    @yield('js')
</body>
</html>