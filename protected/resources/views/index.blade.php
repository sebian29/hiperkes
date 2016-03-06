<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <!-- Basic -->
  <title>Pusat Hiperkes & KK</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Hiperkes Website">
  <meta name="author" content="Sebian Adi Arifani">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="screen">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" media="screen">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}" media="screen">
  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="screen">
  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="screen">
  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" media="screen">
  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/jade.css') }}" title="jade" media="screen" />

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
  <!-- Full Body Container -->
  <div id="container">
    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">
      @include('common/pre-header')
      @include('common/header')
    </header>
    <!-- End Header Section -->

    @yield('content')

    @include('common/footer')
  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <!-- Main JS  -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/nivo-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/count-to.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/mediaelement-and-player.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

  <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
  <!-- Javascript Page -->
  @if(isset($jspage))
  <script type="text/javascript" src="{{ asset('protected/resources/views/pages/'.$jspage.'.js') }}"></script>
  @endif
</body>
</html>
