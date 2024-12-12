@extends('layouts.layout2')

@section('content')

 <!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header--sticky">

        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mida-area style-two">
                        <div class="logo-area-start">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/logo-blue.png') }}" alt="logo">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                        <x-menuList/>
                        </div>

                        <div class="button-area-header-two">
                            <a href="{{ route('contact') }}" class="tmp-btn btn-secondary">Get Consulting</a>

                            <div class="actions-area">
                                <div class="tmp-side-collups-area" id="side-collups">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>
                                </div>
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


    <!-- Start banner area  -->
    <div class="banner-area banner-style-two bg_image tmp-section-gapTop">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="banner-inner">
                        <div class="sub-title" style="display: block;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Financial Consulting Agency</div>
                        <h2 class="title split-collab">Prosper in this <br> volatile market <br> founding.</h2>
                        <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">We help small startups grow from idea to millions of users. we can also
                            automate your marketing and customer service.</p>
                        <div class="banner-bottom" style="gap: 30px;" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{ route('contact') }}" class="tmp-btn btn-secondary">Get Started Now</a>
                            <!-- video icon -->
                            <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                <a class="video-play-button play-video" href="#">
                                    <span style="border-left-color: var(--color-secondary);"></span>
                                    <p class="text" style="color: black;">
                                        Intro Video
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
                <div class="col-lg-5 offset-lg-2  order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="banner-two-thumbnail">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/banner/banner-two-2.png') }}" alt="Business_Corporate" data-sal-delay="250" data-sal="slide-left" data-sal-duration="800">
                            <div class="product-share product-share-style-two">
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
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}" alt="education"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}" alt="education"></a>
                                </div>
                            </div>

                            <div class="banner-tag">
                                <div class="inner">
                                    <div class="icon bg-color-secondary radius-circle mr--20">
                                        <i class="fa-regular fa-check"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Save up to 50% in<br/>Yearly plan.</h3>

                                        <a class="btn-learn-more" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-circle">
            <img src="{{ asset('assets/images/banner/banner-circle.png') }}" alt="banner">
        </div>

        <div class="bg-dolour">
            <img src="{{ asset('assets/images/banner/banner-dolour.png') }}" alt="banner">
        </div>

        <div class="bg-blue-circle">
            <img src="{{ asset('assets/images/banner/blue-circle.png') }}" alt="banner">
        </div>

        <div class="bg-curly-lines">
            <img src="{{ asset('assets/images/banner/curly-lines.png') }}" alt="banner">
        </div>


    </div>
    <!-- End banner area  -->

    <!-- Start Service Area  -->
    <div class="service-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title color-secondary  center-title">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="section-title split-collab">Our provided services</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-1.png') }}" alt="corporate Business Services">
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-2.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Investment Advisory</h2>
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
                            <img src="{{ asset('assets/images/services/service-icon-3.png') }}" alt="corporate Business Services">

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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-4.png') }}" alt="corporate Business Services">

                        </div>
                        <div class="content">
                            <h2 class="title">Saving & Investments</h2>
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
                            <img src="{{ asset('assets/images/services/service-icon-5.png') }}" alt="corporate Business Services">
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
                    <div class="service-inner financial-service-inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/service-icon-6.png') }}" alt="corporate Business Services">

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
    <!-- End Service Area  -->

    <!-- Start About Area  -->
    <div class="about-area about-style-two tmp-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-thumbnails about-style-two">
                        <img src="{{ asset('assets/images/about/about-style-2.png') }}" alt="Business Consulting about">

                        <div class="dots animated tada">
                            <img class="tada" src="{{ asset('assets/images/about/dots.png') }}" alt="Business Consulting dots">
                        </div>
                        <div class="scater">
                            <img src="{{ asset('assets/images/about/scater.png') }}" alt="Business Consulting scater">
                        </div>
                        <div class="tmpk__circle v__1">
                            <svg class="spinner" viewBox="0 0 100 100">
                                <defs>
                                    <path id="circle" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#circle">25+ Years Of Working Experience * Experience *
                                    </textPath>
                                </text>
                            </svg>
                            <div class="tmpk__circle--icon">
                                <i class="fa-light fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <div class="section-sub-title color-secondary">
                                <span class="subtitle">About Us</span>
                            </div>
                            <h2 class="title split-collab">Find out more about our <br> business consulting</h2>
                        </div>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis. Nulla sapien purus feugiat vel dictum sit amet.
                        </p>

                        <div class="feature-counter">
                            <div class="tmp-feature-wrapper">
                                <h3 class="title">Grow Your Business</h3>
                                <div class="tmp-feature">
                                    <div class="icon bg-color-secondary-alt radius-circle">
                                        <i class="fa-regular fa-check small-icon"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="title">Flexible Classes</h6>
                                    </div>
                                </div>

                                <div class="tmp-feature">
                                    <div class="icon bg-color-secondary-alt radius-circle">
                                        <i class="fa-regular fa-check small-icon"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="title">Innovative Ideas</h6>
                                    </div>
                                </div>

                                <div class="tmp-feature">
                                    <div class="icon bg-color-secondary-alt radius-circle">
                                        <i class="fa-regular fa-check small-icon"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="title">Financial Consulting</h6>
                                    </div>
                                </div>

                                <div class="tmp-feature">
                                    <div class="icon bg-color-secondary-alt radius-circle">
                                        <i class="fa-regular fa-check small-icon"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="title">Risk Management</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-wrapper counter-style-one">
                                <div class="counter-inner">
                                    <h2 class="title"><span class="counter">1538</span>+</h2>
                                    <p class="description">Projects completed <br/> in last 5 years</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start Counter area  -->
    <div class="history-area history-style-one counter-history-bg-image bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head color-white style-two">
                        <div class="section-sub-title color-white  center-title">
                            <span>OUR History</span>
                        </div>
                        <h2 class="title color-white split-collab">Bizper is partnered with 10k+ fastest <br/>
                            growing companies from 2008</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="history-inner style-one">
                        <div class="custom-icon">
                            <img src="{{ asset('assets/images/counter/01.png') }}" alt="">
                        </div>
                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2 class="number"><span class="counter">89</span><span>%</span></h2>
                                <h3 class="title">SATISFAID CLIENTS</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="history-inner style-one">
                        <div class="custom-icon">
                            <img src="{{ asset('assets/images/counter/02.png') }}" alt="">
                        </div>
                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2 class="number"><span class="counter">55</span><span>+</span></h2>
                                <h3 class="title">COUNTRIES WORLDWIDE</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="history-inner style-one">
                        <div class="custom-icon">
                            <img src="{{ asset('assets/images/counter/03.png') }}" alt="">
                        </div>
                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2 class="number"><span class="counter">789</span><span>K</span></h2>
                                <h3 class="title">INTERNATIONAL AWARDS</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="history-inner style-one">
                        <div class="custom-icon">
                            <img src="{{ asset('assets/images/counter/04.png') }}" alt="">
                        </div>
                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2 class="number"><span class="counter">102</span><span>m</span></h2>
                                <h3 class="title">EXPERT STAFFS</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Counter area  -->

    <!-- Start Portfolio area  -->
    <div class="portfolio-area portfolio-style-two tmp-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-lg-5 col-md-6">
                    <div class="inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <div class="section-sub-title color-secondary">
                                <span class="subtitle">OUR PORTFOLIO</span>
                            </div>
                            <h2 class="title split-collab">Let's check our best <br> recent work </h2>
                        </div>

                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis.
                        </p>

                        <a href="{{ route('project') }}" class="tmp-btn btn-with-icon btn-secondary">Our All Works<i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 mt_md--80 mt_sm--50 " data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                        <a href="{{ route('projects-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-two-1.png') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name">Janet Phillips</h3>
                                </a>
                                <div class="designation">Software Developer</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon angle-roted border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                        <a href="{{ route('projects-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-two-2.png') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag portfolio-md-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name">Doris Sharp</h3>
                                </a>
                                <div class="designation">Chief Architect</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                        <a href="{{ route('projects-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-two-3.png') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag portfolio-md-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name">Sharon Willis</h3>
                                </a>
                                <div class="designation">Software Engineer</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                        <a href="{{ route('projects-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-two-4.png') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag portfolio-md-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name">Gina Larsen</h3>
                                </a>
                                <div class="designation">Product Manager</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Portfolio area  -->

    <!-- Start pricing area  -->
    <div class="pricing-area pricing-style-one tmp-section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head pb-40">
                        <div class="section-sub-title color-secondary  center-title">
                            <span>BEST PRICING</span>
                        </div>
                        <h2 class="section-title split-collab">Flexible plans for small to fast- <br/>growing business</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Basic Plan</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">$</span>29.<span class="zero">00</span></div>
                                        <span class="duration">Per Monthly</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>



                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Digital Business Solution
                                </li>
                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Purchase Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Premium Plan</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">$</span>59.<span class="zero">00</span></div>
                                        <span class="duration">Per Monthly</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Digital Business Solution
                                </li>
                                <li class="off">
                                    <i class="fa-sharp fa-light fa-xmark"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Purchase Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="pricing-table pricing-style-one">
                        <div class="pricing-header">
                            <div class="pricing-header-inner">
                                <h3 class="title">Advanced Plan</h3>
                                <div class="price-wrap">
                                    <div class="monthly-pricing">
                                        <div class="amount"><span class="dolour">$</span>89.<span class="zero">00</span></div>
                                        <span class="duration">Per Monthly</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="fa-light fa-check"></i>Business Consulting
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>24/7 Customer Support
                                </li>

                                <li>
                                    <i class="fa-light fa-check"></i>Business Planning
                                </li>
                                <li>
                                    <i class="fa-light fa-check"></i>Digital Business Solution
                                </li>
                                <li>
                                    <i class="fa-light fa-check"></i>Human Research
                                </li>


                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-btn">
                                <a href="#" class="tmp-btn">Purchase Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End pricing area  -->

    <!-- Start Work Area  -->
    <div class="work-area work-style-one tmp-section-gap">
        <div class="container">

            <div class="row">
                <div class="work-top-inner">
                    <div class="section-head pb-0 section-head-one-side text-align-left">
                        <div class="section-sub-title color-white ">
                            <span class="subtitle">WHY CHOOSE US</span>
                        </div>
                        <h2 class="title color-white split-collab">We working for you to build <br/> your business fast</h2>
                    </div>

                    <div class="single-work-top" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">4M +</h2>
                        <div class="sub-title">Business Using Stripe</div>
                    </div>

                    <div class="scater-line">
                        <img src="{{ asset('assets/images/work/shape.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="inner">
                        <a href="#">
                            <div class="thumbnail">
                                <img class="large" src="{{ asset('assets/images/work/work-1.jpg') }}" alt="Business Consulting">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-work style-one mt--35">
                        <a href="#">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title">Business Consulting</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut
                                    enim ad minim veniam.
                                </p>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-work style-one">
                        <a href="#" class="cart-box cart-box-1">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title">Strategic Planning</h3>
                            </div>
                        </a>
                    </div>
                    <div class="single-work style-one mt--30">
                        <a href="#">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title">IT Management</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Area  -->

    <!-- Start testimonial Area  -->
    <div class="testimonial-area testimonial-style-two tmp-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head pb-40">
                        <div class="section-sub-title color-secondary center-title">
                            <span>Client’s Testimonials</span>
                        </div>
                        <h2 class="section-title split-collab">What clients have to say</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="header-inner">
                                <div class="content">
                                    <div class="content-left">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonial/img-sm-1.png') }}" alt="Business Consulting testimonial">
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div class="name">Esther Howard</div>
                                        <div class="designation">Web Developer</div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="description">It’s incredible. it’s really wonderful. bcom has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus feugiat fermentum.It’s incredible. it’s really wonderful. bcom has completely surpassed our expect.</p>
                            <div class="rating rating-style-two">
                                <div class="title">Rating : </div>
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
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="header-inner">
                                <div class="content">
                                    <div class="content-left">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonial/img-sm-1.png') }}" alt="Business Consulting testimonial">
                                        </div>
                                    </div>
                                    <div class="content-right">
                                        <div class="name">Esther Howard</div>
                                        <div class="designation">Web Developer</div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="description">It’s incredible. it’s really wonderful. bcom has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus. Adipiscing tristique risus feugiat fermentum.It’s incredible. it’s really wonderful. bcom has completely surpassed our expect.</p>
                            <div class="rating rating-style-two">
                                <div class="title">Rating :</div>
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
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End testimonial Area  -->

    <!-- Start Blog Area   -->
    <div class="blog-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <div class="section-sub-title color-secondary">
                                <span class="subtitle">LATEST BLOG</span>
                            </div>
                            <h2 class="title split-collab">Latest news & <br> articles from <br> the blog</h2>
                        </div>

                        <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin.
                        </p>

                        <div class="single-blog blog-style-two" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="blog-inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-1.png') }}" alt="Business Consulting Blog"></a>
                                    <div class="pmt-blog-meta">
                                        <ul class="all-meta">
                                            <li class="date bg--secondary"><span>20</span></li>
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
                                            <h4 class="title sm-title">Consulted admitting wooded is power acuteness.</h4>
                                        </a>

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

                <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                    <div class="single-blog blog-style-two">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date bg--secondary"><span>20</span></li>
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
                                        <h4 class="title lg-title">Grow your siness strategy with business consulting.</h4>
                                    </a>
                                    <p class="description">
                                        One order all scale sense her gay style wrote. Incommode our not one ourselves residence. Shall there whose those stand she end. So unaffected partiality indulgence dispatched to of celebrated remarkably. Unfeeling are had allowance own perceived .
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

                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="single-blog blog-style-two" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-3.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date bg--secondary"><span>20</span></li>
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
                                        <h4 class="title sm-title">Facilis dolor eques about under official,presentism.</h4>
                                    </a>

                                </div>
                                <a class="btn-read-more" href="{{ route('blog-details') }}">
                                    <span class="read-more-text">Read More</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="single-blog blog-style-two mt--30" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-4.png') }}" alt="Business Consulting Blog"></a>
                                <div class="pmt-blog-meta">
                                    <ul class="all-meta">
                                        <li class="date bg--secondary"><span>20</span></li>
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
                                        <h4 class="title sm-title">Consulted admitting wooded is power acuteness.</h4>
                                    </a>

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
    <!-- End Blog Area   -->

    <!-- Start Contact Form Area  -->
    <div class="contact-area contact-bg-1 bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <h2 class="title split-collab">Get free marketing <br>
                                consultation today</h2>
                            <p class="description mt--30">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magnaaliqua.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-two">


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
                                        <i class="fa-regular fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Address</span>
                                        <a class="contact-here" href="#">25/5 Double Street, Texas Houston USA</a>
                                    </div>
                                </div>
                            </li>

                        </ul>


                        <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-7 mt_md--50 mt_sm--50" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">

                    <div class="contact-form">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="subtitle">GET IN TOUCH</span>
                            <h2 class="title">Free consultation</h2>
                        </div>



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
                                        <input class="input-field" name="contact-phone" placeholder="Email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="input-field" type="text" id="subject" placeholder="Website" name="Website">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="input-field" placeholder="How can we help" name="contact-message" id="contact-message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-submit-group">
                                        <p class="check-condition">
                                            <input class="check-box" type="checkbox" id="terms" name="terms">
                                            <label class="condition" for="terms">I agree to the <span>terms</span> and <span>conditions</span></label>
                                        </p>
                                        <button name="submit" class="tmp-btn btn-secondary" type="submit" id="submit">
                                            <span class="submit-wrapper">
                                                <span class="btn-text">Submit Now</span>
                                            <span class="btn-icon"><i class="fa-sharp fa-light fa-arrow-right"></i></span>
                                            </span>

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
    <!-- Start Contact Form Area  -->

    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer-2 bg_images tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-area subscribe-style-1">
                        <div class="subscribe-inner">
                            <div class="title">Subscribe to Newsletter</div>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Your Email" required>
                                <button type="submit" class="tmp-btn btn-primary">
                                    Subscribe Now <i class="fa-sharp fa-regular fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-main footer-style-one">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('assets/images/logo/logo-02.svg') }}" alt="logo">
                                </a>
                            </div>

                            <p class="description">
                                Proin Pretium Sem Libero, Nec Aliquet Augue Lobortis In. Phasellus Nibh Quam, Molestie Id Est Sit Amet, Luctus Pulvinar
                            </p>


                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Sunday - Friday:</div>
                                    <div class="time">9:00 AM – 8:00 PM</div>
                                </div>
                            </div>

                            <ul class="social-icons solid-social-icons rounded-social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('about') }}">About Company</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">News & Media</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper pr--15">
                            <h5 class="ft-title">Recent Post</h5>

                            <div class="single-post">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/footer/small-post.jpg') }}" alt="Business_Corporate">
                                </div>
                                <div class="content">
                                    <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Feb, 2022</span></div>

                                    <a href="{{ route('blog-details') }}">
                                        <h6 class="title">Day tree hide from hath
                                            gathered multy</h6>
                                    </a>
                                </div>
                            </div>

                            <div class="single-post">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/footer/small-post-2.jpg') }}" alt="Business_Corporate">
                                </div>
                                <div class="content">
                                    <div class="date"><i class="fa-light fa-calendar-days"></i><span>12 Feb, 2022</span></div>

                                    <a href="{{ route('blog-details') }}">
                                        <h6 class="title">Saving Time Achieving
                                            Success in Business</h6>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper">
                            <h5 class="ft-title">Official info:</h5>
                            <ul class="ft-link">
                                <li class="ft-location">5919 Trussville Crossings Pkwy, new
                                    Dusting town, Austria</li>

                                <li>
                                    <div class="single-contact">

                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>

                                        <div class="content">
                                            <span>E-mail:</span>
                                            <a href="mailto:webmaster@example.com">info@uibundle.com</a>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="single-contact">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Phone:</span>
                                            <a href="tel:+4733378901">+123 34598768</a>
                                        </div>

                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <div class="copyright-area-one two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p>© Copyright 2024. All Rights Reserved by <a href="#">Bizper</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

@endsection