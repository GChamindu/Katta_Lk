@extends('layouts.layout2')

@php
    $bodyClass='index-one onepage';
@endphp


@section('content')

<!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one construction-radious">
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-one-wrapper">
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="#" class="logo">
                                    <img src="{{ asset('assets/images/logo/logo-01.svg') }}"src="{{ asset('assets/images/logo/logo-01.svg') }}" alt="corporate_business-logo">
                                </a>
                            </div>

                            <div class="header-nav main-nav-one">
                                <nav>
                                    <ul class="parent-nav">
                                        <li>
                                            <a class="nav-link" href="#home">
                                                <span class="rolling-text">HOME</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#about">
                                                <span class="rolling-text">ABOUT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#service">
                                                <span class="rolling-text">SERVICES</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#portfolio">
                                                <span class="rolling-text">portfolio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#contact1">
                                                <span class="rolling-text">CONTACT</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="input-area">
                                <input type="text" placeholder="Search...">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </div>
                            <div class="actions-area">
                                <!-- <div class="menu-button" id="search">
                                <i class="fa-light fa-grid-2"></i>
                            </div> -->
                                <div class="tmp-side-collups-area" id="side-collups">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>
                                </div>
                                <div class="language-picker">
                                    <div class="js">
                                        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                                            <form action="" class="language-picker__form">
                                                <label for="language-picker-select">Select your language</label>
                                                <select name="language-picker-select" id="language-picker-select">
                                                    <option lang="de" value="deutsch">Deutsch</option>
                                                    <option lang="en" value="english" selected>English</option>
                                                    <option lang="fr" value="francais">Français</option>
                                                    <option lang="it" value="italiano">Italiano</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- tmp nav area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->


    <x-sidebar/>


    <!-- tpm-header-area end -->

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area construction-2" id="home">
        <div class="swiper mySwiper-banner-one-construction">
            <div class="swiper-wrapper">
                <!-- single swiper area start -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-1 bg_image banner-one-height-control construction-2 tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset('assets/images/banner/shape/01.png') }}"src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                            <img src="{{ asset('assets/images/banner/shape/02.png') }}"src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                            <img src="{{ asset('assets/images/banner/shape/03.png') }}"src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Transforming Ideas into Structures</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                                                <!-- video icon -->
                                                <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                    <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                <!-- video icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single swiper area start -->
                <!-- single swiper area start -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-2 bg_image banner-one-height-control construction-2 tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset('assets/images/banner/shape/01.png') }}"src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                            <img src="{{ asset('assets/images/banner/shape/02.png') }}"src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                            <img src="{{ asset('assets/images/banner/shape/03.png') }}"src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Redefining Urban Landscapes</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                                                <!-- video icon -->
                                                <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                    <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                <!-- video icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single swiper area start -->
                <!-- single swiper area start -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-3 bg_image banner-one-height-control construction-2 tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset('assets/images/banner/shape/01.png') }}"src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                            <img src="{{ asset('assets/images/banner/shape/02.png') }}"src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                            <img src="{{ asset('assets/images/banner/shape/03.png') }}"src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">From Concept to Construction</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                                                <!-- video icon -->
                                                <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                    <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                <!-- video icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single swiper area start -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Next"></div>
            <div class="swiper-button-prev" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Prev"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <div class="best-service-we-provide tmp-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
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
            </div>
        </div>
    </div>


    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnail-construction">
                        <div class="image-large">
                            <img src="{{ asset('assets/images/about/about-2.jpg') }}"src="{{ asset('assets/images/about/about-2.jpg') }}" alt="construction_business">
                        </div>
                        <div class="shape-bottom-left"></div>
                        <div class="work-done">
                            <h3 class="title"><span class="counter">3025</span>+</h3>
                            <p>Conpleated Work</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                                <span class="subtitle">ABOUT US</span>
                            </div>
                            <h2 class="title split-collab">Find out more about our <br> business Construction</h2>
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
                        <div class="thumbnail-with-title mt--50" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{ route('contact') }}" class="tmp-btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <!-- Start Service Area  -->
    <div class="service-area tmp-section-gapBottom" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business_Consulting_services">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our Provided Services</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-1.png') }}"src="{{ asset('assets/images/services/service-icon-1.png') }}" alt="corporate Business Services">
                        </div>
                        <div class="content">
                            <h2 class="title">Roofing Installation</h2>
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-2.png') }}"src="{{ asset('assets/images/services/service-icon-2.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Interior Designing</h2>
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-3.png') }}"src="{{ asset('assets/images/services/service-icon-3.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Plumbing Services</h2>
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-4.png') }}"src="{{ asset('assets/images/services/service-icon-4.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Electrical Wiring</h2>
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-5.png') }}"src="{{ asset('assets/images/services/service-icon-5.png') }}" alt="corporate Business Services">
                        </div>
                        <div class="content">
                            <h2 class="title">Landscaping Design</h2>
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-6.png') }}"src="{{ asset('assets/images/services/service-icon-6.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Flooring Installation</h2>
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
    <!-- End Service Area  -->

    <!-- Start Main Counter up-5 Area  -->
    <div class="tmp-counterup-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">15000 Trusted</span>
                        </div>
                        <h2 class="title split-collab">Happy customers</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 counter_animation">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <h3 class="title"><span class="counter">1538</span>+</h3>
                        </div>
                        <h5 class="counter-title">Happy Clients.</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim" data-sal-delay="100">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <h3 class="title"><span class="counter">575</span>K+</h3>
                        </div>
                        <h5 class="counter-title">Employees</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim" data-sal-delay="200">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <h3 class="title"><span class="counter">690</span>+</h3>
                        </div>
                        <h5 class="counter-title">Useful Programs</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim" data-sal-delay="300">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <h3 class="title"><span class="counter">500</span>M</h3>
                        </div>
                        <h5 class="counter-title">Useful Programs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Counter up-5 Area  -->


    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gapBottom">
        <div class="container">
            <div class="row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">OUR work process</span>
                        </div>
                        <h2 class="title split-collab">Our Working Process</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services construction">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#">
                                    <img src="{{ asset('assets/images/services/services-round-1.png') }}"src="{{ asset('assets/images/services/services-round-1.png') }}" alt="Business consulting services">
                                    <div class="number-bg-round">
                                        <span>01</span>
                                    </div>
                                </a>

                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Meeting Client</h5>
                                <p class="description">
                                    Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services construction">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-2.png') }}"src="{{ asset('assets/images/services/services-round-2.png') }}" alt="Business consulting services">
                                    <div class="number-bg-round">
                                        <span>02</span>
                                    </div>
                                </a>

                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Project Strategy</h5>
                                <p class="description">
                                    Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services construction">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-3.png') }}"src="{{ asset('assets/images/services/services-round-3.png') }}" alt="Business consulting services">
                                    <div class="number-bg-round">
                                        <span>03</span>
                                    </div>
                            </div></a>

                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Campaign Design</h5>
                                <p class="description">
                                    Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Tmp Servisec Processs Area Two End -->

    <!-- tmp product area start -->
    <div class="tmp-product-area tmp-section-gapTop bg-product-1 with-construction" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head color-white">
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

                        <div class="swiper mySwiper-portfolio-2-cons">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- single product area start -->
                                    <div class="signle-product-start" data-tmp-cursor="lg text-secondary transparent fw-bold" data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/portfolio/portfolio-8.png') }}"src="{{ asset('assets/images/portfolio/portfolio-8.png') }}" alt="corporate_business">
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
                                            <img src="{{ asset('assets/images/portfolio/portfolio-9.png') }}"src="{{ asset('assets/images/portfolio/portfolio-9.png') }}" alt="corporate_business">
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
                                            <img src="{{ asset('assets/images/portfolio/portfolio-10.png') }}"src="{{ asset('assets/images/portfolio/portfolio-10.png') }}" alt="corporate_business">
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
                                            <img src="{{ asset('assets/images/portfolio/portfolio-11.png') }}"src="{{ asset('assets/images/portfolio/portfolio-11.png') }}" alt="corporate_business">
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
                                            <img src="{{ asset('assets/images/portfolio/portfolio-12.png') }}"src="{{ asset('assets/images/portfolio/portfolio-12.png') }}" alt="corporate_business">
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
                                            <img src="{{ asset('assets/images/portfolio/portfolio-7.png') }}"src="{{ asset('assets/images/portfolio/portfolio-7.png') }}" alt="corporate_business">
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

    <!-- Tmp FAQ area Start  -->
    <div class="faq-area faq-style-one faq-bg-image bg_image tmp-section-gap mt-dec--180">
        <div class="container pt--180">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">QUESTION AND ANSWERS</span>
                        </div>
                        <h2 class="title split-collab">Frequency Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6 pr--30">
                    <div class="thumbnail-faq-cons">
                        <img src="{{ asset('assets/images/faq/faq-3.jpg') }}"src="{{ asset('assets/images/faq/faq-3.jpg') }}" alt="Business Consulting FAQ">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse" role="button" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Why is collaborative learning so important</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Companions shy had solicitude favorable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Do you offer free trials</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Companions shy had solicitude favorable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Can I share my courses with non-registered users</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Companions shy had solicitude favorable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <div class="accordion-button-left">
                                            <i class="fa-regular fa-question"></i>
                                            <span>Can I share my courses with non-registered users</span>
                                        </div>
                                        <div class="accordion-button-right">
                                            <i class="fa-sharp fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Companions shy had solicitude favorable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-buttom">
                            <h4 class="title">Still Have More Questions?
                            </h4>
                            <p>Contact Our <a href="#">Expert Support Team</a></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Tmp FAQ area Start  -->

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

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="{{ route('team-details') }}" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/team/team-5.png') }}"src="{{ asset('assets/images/team/team-5.png') }}" alt="Corporate team">
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
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

    <div class="tmp-video-section-start-one tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="large-video-playing grow-thumbnail">
                        <video autoplay="" muted="" loop="" playsinline="" preload="metadata">
                            <source src="{{ asset('assets/images/work/01.mp4') }}"src="{{ asset('assets/images/work/01.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Start Contact Area  -->
    <div class="contact-area-three tmp-section-gapTop" id="contact1">
        <div class="bg-shape">
            <img src="{{ asset('assets/images/cta/02.png') }}"src="{{ asset('assets/images/cta/02.png') }}" alt="bussiness-contact">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
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
                            <span class="title">GET IN TOUCH</span>
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

    <!-- Join Us One Start -->
    <div class="join-us-one mt--120">
        <div class="container">
            <div class="join-us-one__inner">
                <div class="join-us-one__shape-1">
                    <img src="{{ asset('assets/images/shapes/join-us-one-shape-1.png') }}"src="{{ asset('assets/images/shapes/join-us-one-shape-1.png') }}" alt="">
                </div>
                <div class="join-us-one__shape-2">
                    <img src="{{ asset('assets/images/shapes/join-us-one-shape-2.png') }}"src="{{ asset('assets/images/shapes/join-us-one-shape-2.png') }}" alt="">
                </div>
                <div class="join-us-one__title-box">
                    <h2 class="join-us-one__title">Get Update Subscribe <br> to Newsletter</h2>
                </div>
                <div class="join-us-one__form-box">
                    <form class="join-us-one__contact-form" data-url="MC_FORM_URL" novalidate="novalidate">
                        <div class="contact-form-2">
                            <input type="email" placeholder="Enter Your Email" name="EMAIL" required>
                            <button type="submit" class="tmp-btn btn-primary">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Join Us One End -->

    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">LATEST BLOG</span>
                        </div>
                        <h2 class="title split-collab">Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-6 col-md-6 col-sm-12 col1-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-12.png') }}"src="{{ asset('assets/images/blog/blog-12.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date"><span>20</span></li>
                                        <li class="month"><span>JAN</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-head">
                                    <span class="name">Sultan Ahmed</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Consulted admitting wooded
                                            is power acuteness.</h4>
                                    </a>
                                    <p class="description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Read More</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col1-2" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-11.png') }}"src="{{ asset('assets/images/blog/blog-11.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date"><span>20</span></li>
                                        <li class="month"><span>JAN</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-head">
                                    <span class="name">Sultan Ahmed</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Grow your business strategy
                                            with business consulting.</h4>
                                    </a>
                                    <p class="description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                                    </p>
                                </div>
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
    <!-- Tmp Blog Area Start  -->

   <x-footer/>

@endsection