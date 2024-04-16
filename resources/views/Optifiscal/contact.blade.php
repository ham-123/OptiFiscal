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
                            <li class="active" aria-current="page">Contact</li>
                        </ul>
                        <h2 class="page-title">Entrer en Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--page-title-area end-->
    <!--contact-area start-->
    <section class="contact-area pt-105 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="contact-border pb-90 pb-md-30 pb-xs-30">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-img-wrapper pr-30 pr-md-0 pr-xs-0 mb-30">
                            <img class="w-100" src="assets/img/contact/contact-1.jpg" alt="Img">
                            <img class="icons" src="assets/img/contact/icon-1.png" alt="Icon">
                        </div>
                    </div>

    
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-input-wrapper mb-30">
                            <div class="section-title mb-25">
                                <h6 class="semi-title mb-10">Faites une Demande Personnalisée</h6>
                                <h2 class="sect-title mb-35">Parlez de votre projet</h2>
                            </div>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <form class="row contact-form" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input type="text" placeholder="Nom complet" name="full_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input type="email" placeholder="Adresse e-mail" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box bud-input mb-20">
                                        <input type="text" placeholder="Budget" name="budget" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-box sub-input">
                                        <select name="subject" class="job-select" required>
                                            <option value="">Sujet</option>
                                            <option value="Comptabilité">Comptabilité</option>
                                            <option value="Audit">Audit</option>
                                            <option value="Fiscalité">Fiscalité</option>
                                            <option value="Gestion financière">Gestion financière</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box text-input mb-30">
                                        <textarea name="message" cols="30" rows="10" placeholder="Saisissez votre message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="form-btn">Obtenir un devis</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-120 pt-md-60 pt-xs-60">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Retrouvez-nous ici</h6>
                        <h2 class="sect-title">Nous serions ravis de</h2>
                        <h2 class="sect-title">recevoir de vos nouvelles</h2>
                    </div>
                </div>
            </div>
            <div class="row pb-90 pb-md-30 pb-xs-30">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Branche Principale, New York</h5>
                        <p>58 Howard Street #2 San Francisco, CA 941
                            contact.sanfrancisco@example.com
                            (+68) 1221 098 76</p>
                        <a href="#" class="theme_btn mt-35">Obtenir l'itinéraire <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Branche Secondaire, Japon</h5>
                        <p>58 Howard Street #2 San Francisco, CA 941
                            contact.sanfrancisco@example.com
                            (+68) 1221 098 76</p>
                        <a href="#" class="theme_btn mt-35">Obtenir l'itinéraire <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Branche Secondaire, Dh</h5>
                        <p>58 Howard Street #2 San Francisco, CA 941
                            contact.sanfrancisco@example.com
                            (+68) 1221 098 76</p>
                        <a href="#" class="theme_btn mt-35">Obtenir l'itinéraire <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--contact-area end-->
    <!--map-area start-->
    <section class="contact-map-area">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.16663307975!2d90.3865062!3d23.941279099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1641645837442!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--map-area end-->


</main>
@endsection('content')