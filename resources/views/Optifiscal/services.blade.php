@extends('layouts._user')

@section('content')

<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(assets/img/page-title/page-title-bg1.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="{{Route('accueil')}}">Accueil /</a></li>
                            <li class="active" aria-current="page">Nos Services</li>
                        </ul>
                        <h2 class="page-title">Ce Que Nous Faisons</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--page-title-area end-->
    <!--services-area start-->
    <section class="services-area pt-120 pb-80 mb-10 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Nos Services</h6>
                        <h2 class="sect-title">Découvrez ce que nous proposons</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/service-1.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon1.png" alt="Icon"> Gestion des Actifs</h5>
                            <p>Devenez plus rapide, plus flexible et plus orienté client.</p>
                        </div>
                    </div>
                </div><div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/service-3.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon3.png" alt="Icon"> Assurance Vie</h5>
                            <p>Devenez plus rapide, plus flexible et plus orienté client.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/service-4.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon10.png" alt="Icon"> Consulting en Affaires</h5>
                            <p>Devenez plus rapide, plus flexible et plus orienté client.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/service-5.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon11.png" alt="Icon"> Conseil en Affaires</h5>
                            <p>Devenez plus rapide, plus flexible et plus orienté client.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/service-6.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon12.png" alt="Icon">Taxes et commande
                                Fabrication</h5>
                                <p>Devenez plus rapide, plus flexible et plus intense
                                    axé sur le client.</p>
                            
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</section>
		<!--services-area end-->
		<!--feature-area start-->
		<section class="feature-area">
            <div class="service-feature-bg">
                <div class="container">
                    <div class="row align-items-center justify-content-md-end">
                        <div class="col-xl-7">
                            <div class="service-feature-wrapper">
                                <h6 class="semi-title mb-10">Fonctionnalités Principales</h6>
                                <h2 class="sect-title">Une Qualité Magnifique Vous Offre</h2>
                                <ul class="feature-btn-list">
                                    <li>
                                        <a class="service-btn" href="#">
                                            <img src="assets/img/icon/s-icon4.png" alt="icon">
                                            <span>Services de Consultation Stratégique</span>
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="service-btn" href="#">
                                            <img src="assets/img/icon/s-icon5.png" alt="icon">
                                            <span>Services de Consultation Stratégique</span>
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="service-btn" href="#">
                                            <img src="assets/img/icon/s-icon6.png" alt="icon">
                                            <span>Services de Consultation Stratégique</span>
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
		<!--feature-area end-->
    <!--services-area start-->
    <section class="plan-area service-plan-bg pb-90 pb-md-30 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="semi-title mb-10">Nos Plans</h6>
                    <h2 class="sect-title mb-40">Tarifs et Plans de Service</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="plan mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Plan Démarrage</h4>
                            <p>Contenu d'entreprise rend les médias sociaux</p>
                        </div>
                        <div class="plan-body">
                            <h2>$49.00</h2>
                            <p>10,000 utilisateurs actifs mensuels</p>
                            <ul class="plan-list">
                                <li>Démarrage mensuel en temps réel</li>
                                <li>Support d'appels vocaux et vidéo</li>
                                <li class="delete">Tableau blanc collaboratif</li>
                                <li class="delete">Option iOS & Android prioritaire</li>
                                <li class="delete">Contrôle d'accès basé sur les rôles</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Commencer les Essais Gratuits <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="plan plan2 mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Plan Équipe</h4>
                            <p>Contenu d'entreprise rend les médias sociaux</p>
                        </div>
                        <div class="plan-body">
                            <span class="tag">Recommandé</span>
                            <h2>$99.00</h2>
                            <p>10,000 utilisateurs actifs mensuels</p>
                            <ul class="plan-list">
                                <li>Démarrage mensuel en temps réel</li>
                                <li>Support d'appels vocaux et vidéo</li>
                                <li>Tableau blanc collaboratif</li>
                                <li class="delete">Option iOS & Android prioritaire</li>
                                <li class="delete">Contrôle d'accès basé sur les rôles</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Commencer les Essais Gratuits <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="plan plan3 mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Plan Méga</h4>
                            <p>Contenu d'entreprise rend les médias sociaux</p>
                        </div>
                        <div class="plan-body">
                            <h2>$299.00</h2>
                            <p>10,000 utilisateurs actifs mensuels</p>
                            <ul class="plan-list">
                                <li>Démarrage mensuel en temps réel</li>
                                <li>Support d'appels vocaux et vidéo</li>
                                <li>Tableau blanc collaboratif</li>
                                <li>Option iOS & Android prioritaire</li>
                                <li>Contrôle d'accès basé sur les rôles</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Commencer les Essais Gratuits <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!--plan-area end-->
<!--brand-area start-->
<section class="brand-area pt-120 pb-120 pt-md-60 pb-md-60 pb-xs-60 pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-12 brand-title mb-60">
                <h5 class="border-bg">Happy Users</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active owl-carousel">
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="assets/img/brand/brand-1.png"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="assets/img/brand/brand-1y.png"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="assets/img/brand/brand-2ys.png"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="assets/img/brand/brand-2.png"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="assets/img/brand/brand-3.png"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="assets/img/brand/brand-3y.png"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="assets/img/brand/brand-4.png"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="assets/img/brand/brand-4y.png"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="assets/img/brand/brand-5.png"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="assets/img/brand/brand-5y.png"
                                alt="Brand Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--brand-area end-->

</main>

@endsection('content')