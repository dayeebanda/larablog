<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<!--<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>-->
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('FrontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{asset('FrontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- single css -->
<link rel="stylesheet" href="{{ asset('FrontEnd/css/flexslider.css')}}" type="text/css" media="screen" />

<!-- //pignose css -->
<link href="{{asset('FrontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('FrontEnd/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{asset('FrontEnd/js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!--women-->
<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/jquery-ui.css')}}">
<!-- single -->
<script src="{{asset('FrontEnd/js/imagezoom.js')}}"></script>
<script src="{{asset('FrontEnd/js/jquery.flexslider.js')}}"></script>

<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('FrontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('FrontEnd/js/jquery.easing.min.js')}}"></script>
</head>
<body>
<!-- header -->
@include('FrontEnd.includes.header')

<!-- //header-bot -->
<!-- banner -->
@include('FrontEnd.includes.menu')
<!-- //banner-top -->
<!-- banner -->
@include('FrontEnd.includes.banner')
<!-- //banner -->
<!-- content -->
@yield('mainContent')

<!-- //content-bottom -->
<!-- product-nav -->


@include('FrontEnd.includes.coupon')
<!-- footer -->
@include('FrontEnd.includes.footer')
<!-- //login -->
</body>
</html>
