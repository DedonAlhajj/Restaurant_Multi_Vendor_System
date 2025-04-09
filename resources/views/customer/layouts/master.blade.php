<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#2196f3">
	<meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
	<meta name="description" content="Foodia - Food Restaurant Mobile App Template ( Bootstrap 5 + PWA )"/>
	<meta property="og:title" content="Foodia - Food Restaurant Mobile App Template ( Bootstrap 5 + PWA )" />
	<meta property="og:description" content="Foodia - Food Restaurant Mobile App Template ( Bootstrap 5 + PWA )" />
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/foodia/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
    <!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('customer/assets/images/favicon.png')}}" />
    
    <!-- Title -->
	<title>@yield('title')</title>
	
	<!-- PWA Version -->
	<link rel="manifest" href="manifest.json">
    
    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('customer/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('customer/assets/css/style.css')}}">
        @stack('styles')
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Roboto+Slab:wght@100;300;500;600;800&amp;display=swap" rel="stylesheet">

</head>   
<body class="bg-white">
@yield('content')
<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('customer/assets/js/jquery.js')}}"></script>
<script src="{{asset('customer/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('customer/assets/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- Swiper -->
<script src="{{asset('customer/assets/js/dz.carousel.js')}}"></script><!-- Swiper -->
<script src="{{asset('customer/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script><!-- Swiper -->
<script src="{{asset('customer/assets/js/settings.js')}}"></script>
<script src="{{asset('customer/assets/js/custom.js')}}"></script>
<script src="index.js" defer></script>
<script>
    $(".stepper").TouchSpin();
</script>
@stack('scripts')
</body>

</html>