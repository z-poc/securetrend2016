<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ST Events</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/et-lineicons/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/linea-font/css/linea-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/slick.css') }}">
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/magnific-popup.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/animate.css') }}">


    <!-- Definity CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/responsive.css') }}">

    <!-- JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- ========== Preloader ========== -->

<div class="preloader">
    <img src="{{ asset('assets/images/loader.svg') }}" alt="Loading...">
</div>



@include('components.nav')
@include('components.slider')
@include('components.services')
@include('components.workprocess')
@include('components.projects')
@include('components.contactus')
@include('components.footer')

<!-- ========== Scripts ========== -->

<script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/google-fonts.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.localScroll.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.parallax.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/countup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.ajaxchimp.js') }}"></script>

<!-- Google Maps -->
<script src="{{ asset('assets/js/gmap.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Sb8DfpxY4C8xYQahR85s_Mw9nELsY1w"></script>

<!-- Google Analitics -->
<script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



    ga('create', 'UA-81718468-1', 'auto');

    ga('send', 'pageview');



</script>

<!-- Definity JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>