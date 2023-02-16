<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="/css/settings.css">
<link rel="stylesheet" type="text/css" href="/css/navigation.css">
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="/css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/loader.css">
<link rel="shortcut icon" href="images/favicon.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader">
    <div class="cssload-container">
      <div class="cssload-circle"></div>
      <div class="cssload-circle"></div>
    </div>
 </div>

@include('layouts.navbar')

@section('main-content')

@show

<a href="https://www.google.com/maps/place/Fivestar+Garden/@11.0687856,76.8858412,17z/data=!3m1!4b1!4m6!3m5!1s0x3ba8590fd628f909:0x9a742ad73ad5b2b7!8m2!3d11.0687856!4d76.8880299!16s%2Fg%2F11qmsyf_m6?coh=164777&entry=tt" title="whatsapp" class="btn btn-default location-btn">
    <i class="fa fa-map-marker"></i>
</a>
<a href="https://api.whatsapp.com/send?phone=+91-8098789789" title="whatsapp" class="btn btn-default whatsapp-btn">
    <i class="fa fa-whatsapp"></i>
</a>
<a href="tel:+91-8098789789" title="whatsapp" class="btn btn-default call-btn">
    <i class="fa fa-phone"></i>
</a>
<!--Footer-->
@include('layouts.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="/js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/revolution.extension.layeranimation.min.js"></script>
<script src="/js/revolution.extension.navigation.min.js"></script>
<script src="/js/revolution.extension.parallax.min.js"></script>
<script src="/js/revolution.extension.slideanims.min.js"></script>
<script src="/js/revolution.extension.video.min.js"></script>
<script src="/js/slider.js" type="text/javascript"></script>
<script src="/js/owl.carousel.min.js" type="text/javascript"></script>

<script src="/js/jquery.parallax-1.1.3.js"></script>
<script src="/js/jquery.mixitup.min.js"></script>
<script src="/js/jquery-countTo.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/functions.js" type="text/javascript"></script>
<script src="/js/kenburns.js"></script>
</body>
</html>
