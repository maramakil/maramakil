<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>El Mass Marmar</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/lnr-icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/trumbowyg.min.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('style.css')}}"> --}}
    
     @if(session()->get("locale") == "en" || session()->get("locale") == 'tr' || session()->get("locale") == '')

       <link rel="stylesheet" href="{{asset('style.css')}}">
          @elseif(session()->get("locale") == "ar")
       <link rel="stylesheet" href="{{asset('style-rtl.css')}}">

            <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('style.css')}}">
       @elseif(session()->get("locale") == "ar")
            <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-rtl.min.css')}}">
            <link rel="stylesheet" href="{{asset('style-rtl.css')}}">
       @endif


    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    @yield("style")

</head>

<body class="preload home1 mutlti-vendor">

   @include("master.header")
       @yield("content")

   @include("master.footer")


    <script src="{{asset('js/vendor/jquery/jquery-1.12.3.js')}}"></script>
    <script src="{{asset('js/vendor/jquery/popper.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery/uikit.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/grid.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.easing1.3.js')}}"></script>
    <script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('js/vendor/tether.min.js')}}"></script>
    <script src="{{asset('js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
   <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    
    @yield("script")
    <!-- endinject -->
</body>

</html>
