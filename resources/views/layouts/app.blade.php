<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/bundles/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/material_style.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/bundles/iconic/css/material-design-iconic-font.min.css')}}">
    <link href="{{asset('assets/bundles/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- style -->
	<link rel="stylesheet" href="{{asset('css/extra_pages.css')}}">
	<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
    <!-- Theme Styles -->
	<link href="{{asset('css/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/theme-color.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
	<!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('assets/data/login-data.js')}}"></script>
    <!-- end js include path -->
    

	<!-- start js include path -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('assets/bundles/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/bundles/popper/popper.js')}}"></script>
	<script src="{{asset('assets/bundles/jquery-blockUI/jquery.blockui.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous"></script>	<!-- bootstrap -->
	<script src="{{asset('assets/bundles/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<!-- counterup -->
	<script src="{{asset('assets/bundles/counterup/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/bundles/counterup/jquery.counterup.min.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('assets/app.js')}}"></script>
	<script src="{{asset('assets/layout.js')}}"></script>
	<script src="{{asset('assets/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('assets/bundles/material/material.min.js')}}"></script>
	<!-- chart js -->
	<script src="{{asset('assets/bundles/chart-js/Chart.bundle.js')}}"></script>
	<script src="{{asset('assets/bundles/chart-js/utils.js')}}"></script>
	<script src="{{asset('assets/data/home2-chartjs-data.js')}}"></script>
	<script src="{{asset('assets/bundles/sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('assets/data/sparkline-data.js')}}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://raw.github.com/rochal/jQuery-slimScroll/master/jquery.slimscroll.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $("#boxsrchome").slimScroll();
    });
</script>
	<!-- end js include path -->
</body>
</html>
