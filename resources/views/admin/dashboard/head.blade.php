<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html" />
	<meta name="format-detection" content="telephone=no">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/images/favicon.png')}}">
    <link href="{{asset('dashboard/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('dashboard/vendor/chartist/css/chartist.min.css')}}">
	<link href="{{asset('dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="{{URL::asset('dashboard/notify/css/notifIt.css')}}" rel="stylesheet"/>

<!-- Toastr -->
<link rel="stylesheet" href="{{asset('dashboard/vendor/toastr/css/toastr.min.css')}}">
@yield('css')
</head>