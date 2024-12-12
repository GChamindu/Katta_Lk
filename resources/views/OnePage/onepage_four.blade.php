@extends('layouts.layout2')

@php
    $bodyClass='onepage index-four';
@endphp


@section('content')

 <!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header-four header-five header--sticky">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                <p class="left-top"><a href="tel:+4733378901"><i class="fa-regular fa-phone"></i> +00993264852</a></p>
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">California, TX 70240</a>
                                </div>
                                <div class="working-time">
                                    <i class="fa-light fa-clock"></i>
                                    <p>Working Hours: 9:00 AM – 8:00 PM</p>
                                </div>
                            </div>
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Follow on</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mida-area style-two ">
                        <div class="logo-area-start">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/logo-03.png') }}"src="{{ asset('assets/images/logo/logo-03.png') }}" alt="logo">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                            <nav>
                                <ul class="parent-nav">
                                    <li class="">
                                        <a class="nav-link" href="#home">HOME</a>
                                    </li>
                                    <li><a class="nav-link" href="#about">ABOUT</a></li>
                                    <li class="">
                                        <a class="nav-link" href="#service">SERVICES</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-link" href="#product">PRODUCT</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-link" href="#blog">BLOG</a>
                                    </li>
                                    <li><a class="nav-link" href="#contact">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- <a href="#" class="tmp-btn btn-primary">Get Consulting</a> -->
                        <div class="actions-area">

                            <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                            <!-- <div class="menu-button" id="search">
                        <i class="fa-light fa-grid-2"></i>
                        </div> -->
                            <div class="tmp-side-collups-area" id="side-collups">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#fff"></rect>
                                    <rect y="7" width="20" height="2" fill="#fff"></rect>
                                    <rect width="20" height="2" fill="#fff"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->

    <x-sidebar/>

    <!-- tmp banner area start -->
    <div class="tmp-section-gap tmp-banner__agency-wrapper-bg position-relative bg_image" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-content-four">
                        <div class="inner-content-banner-four">
                            <!-- video icon -->
                            <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                <a class="video-play-button play-video" href="#">
                                    <span></span>
                                    <p class="text">
                                        Intro Vedio
                                    </p>
                                </a>
                                <div class="video-overlay">
                                    <a class="video-overlay-close">×</a>
                                </div>
                            </div>
                            <!-- video icon -->
                            <div class="content-wrapper">
                                <h1 class="title">We Design & Build <br> <span> Powerfull Website</span> </h1>
                                <p class="disc">
                                    Design Better Website With Bizper HTML Template
                                </p>
                                <div class="button-area-banner-one">
                                    <a href="{{ route('service') }}" class="tmp-btn btn-primary"><i class="fa-light fa-users"></i> Get In Touch With Us</a>
                                    <!-- video icon -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tmp-ocean">

            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- trusted client -->
    <div class="tmp-section-gapBottom pt--60 tmp-trusted-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trusted-clients-agency-wrapper">
                        <p class="title">trusted By Over 3500 Of the Worlds Leading Companies</p>
                        <div class="cilents-agency-wrapper">
                            <div class="single-clients">
                                <img src="{{ asset('assets/images/brand/brand-1.png') }}"src="{{ asset('assets/images/brand/brand-1.png') }}" alt="corporate_Business">
                            </div>
                            <div class="single-clients">
                                <img src="{{ asset('assets/images/brand/brand-2.png') }}"src="{{ asset('assets/images/brand/brand-2.png') }}" alt="corporate_Business">
                            </div>
                            <div class="single-clients">
                                <img src="{{ asset('assets/images/brand/brand-3.png') }}"src="{{ asset('assets/images/brand/brand-3.png') }}" alt="corporate_Business">
                            </div>
                            <div class="single-clients">
                                <img src="{{ asset('assets/images/brand/brand-4.png') }}"src="{{ asset('assets/images/brand/brand-4.png') }}" alt="corporate_Business">
                            </div>
                            <div class="single-clients">
                                <img src="{{ asset('assets/images/brand/brand-5.png') }}"src="{{ asset('assets/images/brand/brand-5.png') }}" alt="corporate_Business">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trusted clients end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gapBottom about-style-one" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/01.png') }}"src="{{ asset('assets/images/about/01.png') }}" alt="corporate_business">

                            <div class="image-two">
                                <img src="{{ asset('assets/images/about/03.png') }}"src="{{ asset('assets/images/about/03.png') }}" alt="corporate_business">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="{{ asset('assets/images/about/02.png') }}"src="{{ asset('assets/images/about/02.png') }}" alt="corporate_business">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="{{ asset('assets/images/about/flower.png') }}"src="{{ asset('assets/images/about/flower.png') }}" alt="Corporate_Business">
                            </div>

                            <div class="product-share">
                                <div class="rating">
                                    <div class="number">4.8</div>
                                    <div class="stars-group">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>

                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}"src="{{ asset('assets/images/about/4.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}"src="{{ asset('assets/images/about/5.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}"src="{{ asset('assets/images/about/6.png') }}" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}"src="{{ asset('assets/images/about/7.png') }}" alt="Business_Corporate"></a>


                                </div>
                            </div>
                        </div>

                        <!-- video icon -->
                        <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                            <a class="video-play-button play-video" href="#">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                        <!-- video icon -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                <span class="subtitle">ABOUT US</span>
                            </div>
                            <h2 class="title split-collab">Find out more about our <br> business consulting</h2>
                        </div>

                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis.
                        </p>
                        <!-- Prograss bar Start  -->
                        <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Consulting Service</p>
                                <span class="parcent">
                                    85%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Finance Consulting</p>
                                <span class="parcent">
                                    66%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- Prograss bar End  -->
                        <div class="thumbnail-with-title" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/about/about-with-icon.png') }}"src="{{ asset('assets/images/about/about-with-icon.png') }}" alt="">
                                <div class="icon">
                                    <i class="fa-regular fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="title">Helping you run a more efficient
                                & profitable business.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <div class="service-area tmp-section-gapBottom" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title color-primary  center-title">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="section-title split-collab" style="opacity: 1;">
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">O</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">u</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">r</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">p</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">r</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">o</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">v</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">i</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">d</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">e</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">d</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">s</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">e</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">r</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">v</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">i</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">c</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">e</div>
                            </div>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">s</div>
                            </div>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-6.svg') }}"src="{{ asset('assets/images/services/agency-6.svg') }}" alt="corporate_Business_Services_agency">
                        </div>
                        <div class="content">
                            <h2 class="title">Business Stratagy</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-1.svg') }}"src="{{ asset('assets/images/services/agency-1.svg') }}" alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Custom website design</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-2.svg') }}"src="{{ asset('assets/images/services/agency-2.svg') }}" alt="corporate_Business_Services_Agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Data Analysis</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-3.svg') }}"src="{{ asset('assets/images/services/agency-3.svg') }}" alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Saving &amp; Investments</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-4.svg') }}"src="{{ asset('assets/images/services/agency-4.svg') }}" alt="corporate_Business_Services_agency">
                        </div>
                        <div class="content">
                            <h2 class="title">Website Design</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="650" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-5.svg') }}"src="{{ asset('assets/images/services/agency-5.svg') }}" alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Mutual Funds</h2>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tmp product area start -->
    <div class="tmp-product-area" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">OUR PORTFOLIO</span>
                        </div>
                        <h2 class="title split-collab">Let's Check Our Best Works </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <!-- product swiper area start -->
                    <div class="product-swiper-area-one">

                        <div class="swiper mySwiper-portfolio-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-1.png') }}"src="{{ asset('assets/images/portfolio/portfolio-1.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Corporate Design</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-2.png') }}"src="{{ asset('assets/images/portfolio/portfolio-2.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Executive Design Kit</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-3.png') }}"src="{{ asset('assets/images/portfolio/portfolio-3.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Business Theme Pack</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-4.png') }}"src="{{ asset('assets/images/portfolio/portfolio-4.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Executive Layout Set</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-5.png') }}"src="{{ asset('assets/images/portfolio/portfolio-5.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Professional Design</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-6.png') }}"src="{{ asset('assets/images/portfolio/portfolio-6.png') }}" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="{{ route('projects-details') }}">
                                                <h5 class="title">Business Layout Library</h5>
                                            </a>
                                            <span class="designation">Financial advisory</span>
                                            <div class="tag"></div>
                                        </div>
                                    </div>
                                    <!-- single product area end -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
                            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
                        </div>
                    </div>
                    <!-- product swiper area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- tmp product area end -->

    <!-- Start Contact Area  -->
    <div class="contact-area-three agency tmp-section-gapTop" id="contact">
        <div class="bg-shape">
            <img src="{{ asset('assets/images/cta/02.png') }}"src="{{ asset('assets/images/cta/02.png') }}" alt="bussiness-contact">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner-agency">
                        <div class="section-head section-head-one-side text-align-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="title">Contact Us</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us</span>
                                        <a class="contact-here" href="#">+123 34598768</a>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>

                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here" href="#">info@uibundle.com</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Address</span>
                                        <a class="contact-here" href="#">25/5 Double Street, Texas Houston USA</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class="tmp-tag-list tag-list-one" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-7" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">Let's Appoinment</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <form id="contact-form" action="#">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-name" placeholder="Name" id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Email" type="email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject" placeholder="Website" name="Website">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="How can we help" name="contact-message" id="contact-message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-primary" type="submit" id="submit">
                                                Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area  -->

    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-primary">LATEST BLOG</span>
                            <h2 class="title split-collab">Latest news & articles</h2>
                        </div>
                        <div class="btn-group">
                            <a href="#" class="tmp-btn btn-primary">View All Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-1.png') }}"src="{{ asset('assets/images/blog/blog-1.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Consulted admitting wooded is power acuteness.</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
                                        <span class="read-more-text">Read More</span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}"src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Grow your business strategy
                                            with business consulting.</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
                                        <span class="read-more-text">Read More</span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-3.png') }}"src="{{ asset('assets/images/blog/blog-3.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Facilis dolor eques about
                                            under official,presentism.</h4>
                                    </a>
                                    <a class="btn-read-more" href="{{ route('blog-details') }}">
                                        <span class="read-more-text">Read More</span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Blog Area Start  -->

    <!-- Start Testimonial with brand  -->
    <div class="testimonial-with-brand bg-1 bg_image">
        <!-- Start Testimonial Area  -->
        <div class="testimonial-brand-area tmp-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-button-area">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title">
                                    <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                    <span class="subtitle">Client’s Testimonials</span>
                                </div>
                                <h2 class="title split-collab">What People Say About <br> Our Company</h2>
                            </div>

                            <div class="button-next-prev">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slider main container -->
                        <div class="swiper-style-one tmp-section-gapBottom">
                            <div class="swiper-container-style-two">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Its incredible. its really wonderful. company has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus.</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Clade Owen</div>
                                                        <div class="designation">CEO &amp; Founder</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}"src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Its incredible. its really wonderful. company has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus.</p>

                                                    <div class="content content-without-bg">
                                                        <div class="name">Nicolas Alvin</div>
                                                        <div class="designation">Web Developer</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}"src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Its incredible. its really wonderful. company has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus.</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Lara Willie</div>
                                                        <div class="designation">UX Designer</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}"src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-card card-horizontal">
                                            <div class="card-inner">
                                                <div class="content">
                                                    <div class="rating rating-style-three">
                                                        <div class="stars-group">
                                                            <div class="star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description">Its incredible. its really wonderful. company has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus.</p>
                                                    <div class="content content-without-bg">
                                                        <div class="name">Clade Herbert</div>
                                                        <div class="designation">CEO and Founder</div>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}"src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}" alt="testimonial">
                                                    <div class="icon icon-quote">
                                                        <i class="fa-duotone fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- If we need navigation buttons -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area  -->

        <!-- Start Brand Area  -->
        <div class="brand-area tmp-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-inner tmp-section-gapTop">
                            <ul class="brand-list brand-style-1 justify-content-center justify-content-lg-between">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-1.png') }}"src="{{ asset('assets/images/brand/brand-1.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-2.png') }}"src="{{ asset('assets/images/brand/brand-2.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-3.png') }}"src="{{ asset('assets/images/brand/brand-3.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-4.png') }}"src="{{ asset('assets/images/brand/brand-4.png') }}" alt="Brand Image"></a>
                                </li>
                                <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-5.png') }}"src="{{ asset('assets/images/brand/brand-5.png') }}" alt="Brand Image"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area  -->
    </div>
    <!-- End Testimonial with brand  -->

    <!-- Start team area  -->
    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate services">
                            <span>OUR EXPERT TEAM</span>
                        </div>
                        <h2 class="section-title split-collab">Meet Our Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/team/team-2.png') }}"src="{{ asset('assets/images/team/team-2.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">Clade Owen</h6>
                                </a>
                                <div class="designation">CEO & Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/team/team-3.png') }}"src="{{ asset('assets/images/team/team-3.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">John Lee</h6>
                                </a>
                                <div class="designation">CEO & Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/team/team-1.png') }}"src="{{ asset('assets/images/team/team-1.png') }}" alt="Corporate team">
                        </a>
                        <div class="content">
                            <div class="team-name content-with-bg">
                                <a href="#" class="name-area">
                                    <h6 class="name">William John</h6>
                                </a>
                                <div class="designation">CEO & Founder</div>
                            </div>
                            <div class="share-icon-style-one">
                                <ul class="social-icons social-icons-with-bg">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <i class="fa-sharp fa-solid fa-share-nodes"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End team area  -->

   <x-footer/>

@endsection