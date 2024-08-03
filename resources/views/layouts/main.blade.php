<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Deus | Home 2 Politics</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/colors/red.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>

  </head>

  <body class="home style-politics">

    <!-- Preloader -->
    <div class="loader-mask">
      <div class="loader">
        <div></div>
      </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>
      <!-- Sidenav -->    
    @include('layouts.navar')
      <!-- end sidenav -->

    <main class="main oh" id="main">    
      <!-- menu -->
      @include('layouts.menu')
      <!-- end menu -->

      <div class="main-container container" id="main-container"> 
          <!-- contenido de la pagina -->
          @yield('section') 
          <!-- end contenido de la pagina -->
      </div> <!-- end main container -->

      <!-- Footer -->
      @include('layouts.footer')
      <!-- end footer -->

      <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
      </div>

    </main> <!-- end main-wrapper -->

    
    <!-- jQuery Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/easing.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.min.js')}}"></script>
    <script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>  
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>

  </body>
</html>