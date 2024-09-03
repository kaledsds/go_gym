<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Serenity Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/serenity/assets/img/favicon.png" rel="icon">
    <link href="/serenity/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/serenity/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/serenity/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/serenity/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/serenity/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/serenity/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/serenity/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Serenity
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="/serenity/assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Serenity</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            @guest @else
            <li><a href="/home">Home</a></li>
            <li><a href="/clients">Clients</a></li>
            <li><a href="/coachs">Coachs</a></li>
            <li><a href="/sports">Sports</a></li>
            <li><a href="/machines">Machines</a></li>
            <li><a href="/produits">Produits</a></li>
            @endguest
            @guest @if (Route::has('login'))
            <li><a href="/register">Register</a></li>
            @endif @if (Route::has('register'))
            <li><a href="/login">Login</a></li>
            @endif @else
            <li class="dropdown"><a><span>{{ Auth::user()->name }}</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
              </ul>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            @endguest

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>
    </header>

    <main class="main">
      @yield('content')
    </main>

    <footer id="footer" class="footer dark-background">

      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div class="address">
              <h4>Address</h4>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p></p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact</h4>
              <p>
                <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                <strong>Email:</strong> <span>info@example.com</span><br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                <strong>Sunday</strong>: <span>Closed</span>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Serenity</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/serenity/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/serenity/assets/vendor/php-email-form/validate.js"></script>
    <script src="/serenity/assets/vendor/aos/aos.js"></script>
    <script src="/serenity/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/serenity/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/serenity/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/serenity/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/serenity/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/serenity/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="/serenity/assets/js/main.js"></script>

  </body>

</html>