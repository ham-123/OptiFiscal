<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin - Cabinet Comptable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS ici -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/gt-font.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    <header>

        <div class="heding-bg-1" id="hideshow-sticky-menu">
            <div class="main-header-area">
                <div class="container">
                    <div class="col-xl-4 col-lg-3 d-none d-lg-inline-block">
                        <div class="logo-area">
                            <a class="head-logo-1" href="index.html"><img src="{{ asset('assets/img/logo/logo-1.png') }}"
                                    alt="Header-logo"></a>
                        </div>
                    </div>
                    <div class="white-bg row align-items-center gx-0">
                        <div class="col-lg-10 col-6 text-start">
                            <div class="logo-area d-lg-none d-md-block">
                                <a href="index.html"><img src="{{ asset('assets/img/logo/footer-logo-1.png') }}" alt="Header-logo"></a>
                            </div>
                            <nav id="topheader" class="navbar navbar-expand-lg justify-content-start py-0">
                                <div class="nav-container">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav list-style-none">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{Route('dashboard')}}">Accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{Route('admin.contact')}}">Contact</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.theme-main-menu -->
        </div>
    </header>

    @yield('content')

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

    <footer class="heding-bg footer-area pt-100">
        <div class="copy-right-area border-bot pt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="copyright mb-30 text-center">
                            <h6>Droit d'auteur & Conception par <a href="https://www.linkedin.com/in/hamid-tchemoko-a-509075227/">@HMD</a> - 2024</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->
    <!-- Recherche en plein écran -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Recherchez votre mot-clé...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- fin de la recherche en plein écran -->

    <!-- JS ici -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
