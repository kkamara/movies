<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Movies</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicons -->
    <link href="{{ asset('theme/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{ route('home') }}">{{ config('app.name') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="javascript:;">About</a></li>
                    <li><a class="nav-link scrollto" href="javascript:;">Services</a></li>
                    <li><a class="nav-link scrollto " href="javascript:;">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="javascript:;">Team</a></li>
                    <li class="dropdown"><a href="javascript:;"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="javascript:;">Drop Down 1</a></li>
                        <li class="dropdown"><a href="javascript:;"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="javascript:;">Deep Drop Down 1</a></li>
                            <li><a href="javascript:;">Deep Drop Down 2</a></li>
                            <li><a href="javascript:;">Deep Drop Down 3</a></li>
                            <li><a href="javascript:;">Deep Drop Down 4</a></li>
                            <li><a href="javascript:;">Deep Drop Down 5</a></li>
                        </ul>
                        </li>
                        <li><a href="javascript:;">Drop Down 2</a></li>
                        <li><a href="javascript:;">Drop Down 3</a></li>
                        <li><a href="javascript:;">Drop Down 4</a></li>
                    </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="javascript:;">Contact</a></li>
                    <li><a class="getstarted scrollto" href="javascript:;">Login or Signup</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>{{ config('app.name') }}</h1>
                <h2>Search for a movie.</h2>
                <div class="d-flex">
                {{-- <a href="javascript:;" class="btn-get-started scrollto">Get Started</a> --}}
                {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{ asset('images/movie-ge82d2f716_1280.jpg') }}" class="img-fluid animated" alt="">
            </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4 class="title"><a href="javascript:;">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="javascript:;">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-clipboard-data"></i></div>
                <h4 class="title"><a href="javascript:;">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            </div>
        </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Built by <a href="https://github.com/kkamara">Kelvin Kamara</a>
            </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('theme/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('theme/js/main.js') }}"></script>
</body>
</html>