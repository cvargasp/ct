<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Training</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header" style="position: fixed;">
    <div class="container">
        <a href="{{ route('inicio')}}" class="probootstrap-logo"><img src="img/logo-nav.png" height="50px" alt=""></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav header-top hidden-sm">
          <ul class="probootstrap-main-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('inicio')}}">Inicio</a></li>
            <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="{{ route('about')}}">Nosotros</a></li>
            <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{ route('servicios')}}">Servicios</a></li>
            <li class="{{ Request::is('testimonios') ? 'active' : '' }}"><a href="{{ route('testimonios')}}">Testimonios</a></li>
            <li class="{{ Request::is('page') ? 'active' : '' }}"><a href="{{ route('page')}}">Pagina</a></li>
            <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="{{ route('contacto')}}">Contacto</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-sm">
            <!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
            <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook2"></i></a></li>
            <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-sm"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <ul class="social-buttons">
              <!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
              <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook2"></i></a></li>
              <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->

  @yield('contenido')

  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Black.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Testimonios</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">More Links</h4>
            <ul class="stack-link">
              <li><a href="#">Projects</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Support Help</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <!-- <li><a href="#"><i class="icon-twitter"></i></a></li> -->
              <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  
  </body>
</html>