<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>KAIRUKI HOSPITAL</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins\bootstrap\bootstrap.min.css') }}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{ asset('plugins\magnific-popup\magnific-popup.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins\slick\slick.css">
  <link rel="stylesheet" href="plugins\slick\slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="plugins\themify-icons\themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="plugins\animate\animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="plugins\aos\aos.css">
  <!-- Stylesheets -->
  <link href="css\style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images\logo_short.png" type="image/x-icon">
  <link rel="icon" href="images\logo_short.png" type="image/x-icon">

</head>

<body>
   

<!-- preloader start -->
<div class="preloader">
    <img src="images\preloader.gif" alt="preloader">
</div>
<!-- preloader end --> 

<!-- navigation -->
@include('layouts.header')

<!-- Search Form -->
@include('layouts.search-form')
<!-- /navigation --> 
<main>
    @yield('contents')
</main>

<!-- /client logo slider -->

<!-- footer -->
@include('layouts.footer')
<!-- /footer --> 

<!-- jQuery -->
<script src="plugins\jQuery\jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins\bootstrap\bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="plugins\magnific-popup\jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="plugins\slick\slick.min.js"></script>
<!-- mixitup filter -->
<script src="plugins\mixitup\mixitup.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<script src="plugins\google-map\gmap.js"></script>
<!-- Syo Timer -->
<script src="plugins\syotimer\jquery.syotimer.js"></script>
<!-- aos -->
<script src="plugins\aos\aos.js"></script>
<!-- Main Script -->
<script src="js\script.js"></script>

</body>
</html>