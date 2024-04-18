<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Optifiscal - Cabinet Comptable</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
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
		<div class="header-top heding-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-6">
						<div class="left-cta">
							<span><i class="fal fa-envelope"></i> info@webmail.com</span>
							<span><i class="fal fa-phone"></i> +229 90 78 88 77</span>
						</div>
					</div> 
					
				</div>
			</div>
			<div class="bottom-border-line"></div>
			<div class="container d-none d-md-block">
				<div class="row pt-25">
					<div class="col-xl-4 col-lg-3 d-none d-lg-inline-block">
						<div class="logo-area">
							<a class="head-logo-1" href="index.html"><img src="assets/img/logo/logo-1.png"
									alt="Header-logo"></a>
						</div>
					</div>
					<div class="col-xl-8 col-lg-9">
						<ul class="right-query mb-0">
							<li>
								<div class="icon"><i class="fal fa-map-marker-alt"></i></div>
								<div class="query-list">
									<span>1010 Avenue de la Lune</span>
									<span>Cotonou, Bénin.</span>
								</div>
							</li>
							<li>
								<div class="icon"><i class="fal fa-clock"></i></div>
								<div class="query-list">
									<span>Lun - Sam 8.00 - 18.00</span>
									<span>Dimanche: <strong>Fermé</strong></span>
								</div>
							</li>
							<li>
								<a class="theme_btn quote-btn" href="contact.html">Obtenir un devis</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="heding-bg-1" id="hideshow-sticky-menu">
			<div class="main-header-area">
				<div class="container">
					<div class="white-bg row align-items-center gx-0">
						<div class="col-lg-10 col-6 text-start">
							<div class="logo-area d-lg-none d-md-block">
								<a href="index.html"><img src="assets/img/logo/footer-logo-1.png" alt="Header-logo"></a>
							</div>
							<nav id="topheader" class="navbar navbar-expand-lg justify-content-start py-0">
								<div class="nav-container">
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav list-style-none">
											<li class="nav-item">
												<a class="nav-link" href="{{Route('accueil')}}">Accueil</a>	
											</li>

											<li class="nav-item">
												<a class="nav-link" href="{{Route('about')}}">À propos</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="{{Route('services')}}">Services</a>
                                            </li>
											
											<li class="nav-item">
												<a class="nav-link" href="{{Route('contact')}}">Contact</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<div class="col-lg-2 col-6">
							<ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
								<li>
									<div class="hamburger-menu">
										<a href="javascript:void(0);">
											<img src="assets/img/icon/eclips.png" alt="Eclips">
										</a>
									</div>
								</li>
							</ul>
						</div>	

					</div>
				</div>
			</div>
		</div>
	</header>
	
	<aside class="slide-bar">
		<div class="close-mobile-menu">
			<a href="javascript:void(0);"><i class="fas fa-times"></i></a>
		</div>
		<div class="offset-sidebar">
			<div class="offset-widget offset-logo mb-30">
				<a href="index.html">
					<img src="assets/img/logo/logo-1.png" alt="logo">
				</a>
			</div>
			<div class="offset-widget mb-40">
				<div class="info-widget">
					<h4 class="offset-title mb-20">À propos de la société</h4>
					<p class="mb-30">
						Nous sommes un cabinet comptable dévoué à fournir des services de qualité à nos clients. Notre objectif est d'assister nos clients dans la gestion de leurs finances et de leur offrir des conseils fiscaux judicieux.
					</p>
					<a class="theme_btn theme_btn_bg" href="{{Route('contact')}}">Nous contacter</a>
				</div>
			</div>
			<div class="offset-widget mb-30 pr-10">
				<div class="info-widget info-widget2">
					<h4 class="offset-title mb-20">Coordonnées</h4>
					<p> <i class="fal fa-address-book"></i>1010 Avenue de la Lune
						Cotonou, Bénin.</p>
					<p> <i class="fal fa-phone"></i> +229 90 78 88 77 </p>
					<p> <i class="fal fa-envelope-open"></i> info@webmail.com </p>
				</div>
			</div>
		</div>
		<nav class="side-mobile-menu">
			<ul id="mobile-menu-active">
				<li><a href="{{Route('accueil')}}">Accueil</a></li>
				<li><a href="{{Route('about')}}">À propos</a></li>
				<li><a href="{{Route('services')}}">Services</a></li>
				<li><a href="{{Route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</aside>
	<div class="body-overlay"></div>



@yield('content')





    <!--footer-area start-->
	<footer class="heding-bg footer-area pt-100">
		<div class="container">
			<div class="row mb-15">
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".1s">
					<div class="footer__widget mb-30">
						<h6 class="widget-title text-white pb-20 mb-35">À propos de la société</h6>
						<p>Les IHM modernes transforment la manière dont nous interagissons avec nos véhicules. Un devient
							un gadget que nous utilisons de la même manière que nous utilisons nos téléphones.
						</p>
						<div class="footer__social mt-30">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-google-plus-g"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".3s">
					<div class="border-theme footer__widget mb-30 pl-135 pl-md-0 pl-xs-0">
						<h6 class="widget-title text-white pb-20 mb-35">Nos services</h6>
						<ul class="fot-list">
							<li><a href="#">Planification d'entreprise</a></li>
							<li><a href="#">Stratégie fiscale</a></li>
							<li><a href="#">Conseils financiers</a></li>
							<li><a href="#">Stratégie d'assurance</a></li>
							<li><a href="#">Gestion d'investissement</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".5s">
					<div class="footer__widget mb-25 pl-25 pl-md-0 pl-xs-0">
						<h6 class="widget-title text-white pb-20 mb-35">Contactez-nous</h6>
						<ul class="fot-list fot-list-1">
							<li><a href="#">(+229) 90 78 88 77</a></li>
							<li><a href="#">info@webmail.com</a></li>
							<li><a href="#">Horaires d'ouverture : <span>8h - 18h</span></a>
							</li>
							<li>
								<a href="#">24/B, Tour de la Cité Hilington, Cotonou, Bénin</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".7s">
					<div class="footer__widget mb-30">
						<h6 class="widget-title text-white pb-20 mb-35">Abonnez-vous maintenant</h6>
						<form class="subscribe-form" action="#">
							<div class="input-box mb-10">
								<input type="text" placeholder="Votre nom">
							</div>
							<div class="input-box mail-input mb-10">
								<input type="text" placeholder="Entrez votre adresse e-mail">
							</div>

							<button class="theme_btn subscribe-btn">S'abonner maintenant <i
									class="fal fa-long-arrow-right"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-35">
			<div class="row white-bg align-items-center">
				<div class="col-lg-6 col-md-4 text-center text-md-start">
					<div class="logo-area pl-25 pt-20 mb-20">
						<a href="index.html"><img src="assets/img/logo/footer-logo-1.png" alt="Footer-logo"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 text-center text-md-end">
					<ul class="footer-nav">
						<li class="nav-item">
							<a class="nav-link" href="{{Route('about')}}">À propos de nous</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.html">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-details.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contactez-nous</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
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
