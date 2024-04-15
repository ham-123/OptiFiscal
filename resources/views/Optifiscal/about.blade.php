@extends('layouts._user')

@section('content')


<main>
    <section class="page-title-area" style="background-image: url(assets/img/page-title/page-title-bg1.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="{{Route('accueil')}}">Accueil /</a></li>
                            <li class="active" aria-current="page">A Propos</li>
                        </ul>
                        <h2 class="page-title">A Propos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-area about-us-2 pt-120 pb-90 pt-md-60 pb-md-10 pb-xs-10 pt-xs-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrapper pos-rel mb-30">
                        <img class="shape-square" src="assets/img/shape/square-1.png" alt="Shape">
                        <img class="img-fluid" src="assets/img/about/about-1.png" alt="About Img">
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content-wrapper3 pt-20 pl-60">
                        <div class="section-title">
                            <h6 class="semi-title mb-10">About Us</h6>
                            <h2 class="sect-title">Reliable & Cost
                                Efficiant Consulting</h2>
                            <p class="paragraph-title">Seamlessly visualize quality intellectual capital
                                without superior collaboration and base portals. <strong>$0 Monthly Service
                                    Charge.</strong>
                            </p>
                        </div>
                        <p>Long established fact that reader will be distracted the readable of pages
                        
                            when looking at its layout. The point using lorem ipsum has a more-or-less
                            normal distribution of letters.</p>
                        <ul class="btn-list about-btn d-md-flex align-items-center">
                            <li><a href="about.html" class="theme_btn2">Get In Touch</a></li>
                            <li><a href="about.html" class="theme_btn2 ml-20">Our Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->
    <!--our-journey-area start-->
    <section class="our-journey-area time-line pt-120 pb-250 pb-lg-90 pt-md-60 pb-md-60 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Our History</h6>
                        <h2 class="sect-title">Our Company Journey</h2>
                    </div>
                </div>
            </div>
            <div class="reacttimeline">
                  <ul>
                      <li class="default-line"></li>
                      <li class="draw-line"></li>				    				    				    				    
                  </ul>
            </div>
            <ul class="journey-list">	
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2>2000</h2>
                                <h4>Company Foundation</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-1.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-2.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="left-content mb-30">
                                <h2>2004</h2>
                                <h4>Building Solid Team</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2>2010</h2>
                                <h4>Company Foundation</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-3.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-4.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2012</h2>
                                <h4>Get 1st Rewards</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2016</h2>
                                <h4>WWC Design Rewards</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-5.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-6.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2018</h2>
                                <h4>Website Of The Day</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2020</h2>
                                <h4>Design Team Award</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-7.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-8.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2021</h2>
                                <h4>Archivement On Going</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--our-journey-area end-->
    <!--team-area start-->
    <section class="grey-bg3 team-area pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Team</h6>
                        <h2 class="sect-title">Management Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb">
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/team-1.jpg"
                                    alt="Team Img"></a>
                        </div>
                        <div class="team-content">
                            <h6>Founder</h6>
                            <h3><a href="team-details.html">Alonso D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb">
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/team-2.jpg"
                                    alt="Team Img"></a>
                        </div>
                        <div class="team-content">
                            <h6>CEO</h6>
                            <h3><a href="team-details.html">Rolinda D. Willin</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb">
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/team-3.jpg"
                                    alt="Team Img"></a>
                        </div>
                        <div class="team-content">
                            <h6>CTO</h6>
                            <h3><a href="team-details.html">Piklonis D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team-area end-->
    <!--cta-area start-->
    <section class="cta-area cta-full cta-full2">
        <img class="shape-one" src="assets/img/cta/dot-shape-1.png" alt="Shape">
        <div class="cta-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12">
                        <div class="cta-wrapper">
                            <h6 class="semi-title text-white mb-10">Global Clients From Around The World</h6>
                            <h2 class="sect-title text-white">We build ideas driven
                                by the future.</h2>
                            <ul class="btn-list d-md-flex align-items-center justify-content-center mt-50">
                                <li><a class="theme_btn mr-30 mr-xs-0" href="contact.html">Join Our Community</a>
                                </li>
                                <li><a class="theme_btn border_btn" href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->

</main>
@endsection('content')