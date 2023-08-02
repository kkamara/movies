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
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Login or Signup</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->