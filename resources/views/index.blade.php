@extends('layouts.layout2')
 
@section('content')

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                <p class="left-top">Using user feedback to creat a million dollar</p>
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
                    <div class="main-header-one-wrapper">
                        <div class="header-mida-area">
                            <div class="logo-area-start">
                                <a class="logo" href="index.html">
                                    <img src="assets/images/logo/logo-01.png" alt="Corporate_business_logo">
                                </a>
                            </div>
                            <div class="mid-header-center">
                                <p>Need Help? <a href="#"> Request A Callback</a></p>
                                <div class="input-area">
                                    <input type="text" placeholder="Search...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <a href="contact.html" class="tmp-btn btn-primary">Get Consulting</a>
                        </div>
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="#" class="logo">
                                    <img src="assets/images/logo/logo-01.svg" alt="corporate_business-logo">
                                </a>
                            </div>

                            <div class="header-nav main-nav-one">
                                <x-menuList/>
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

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area">
        <div class="swiper mySwiper-banner-one">
            <div class="swiper-wrapper">
                <!-- single swiper area start -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-1 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="assets/images/banner/shape/01.png" alt="banner" class="one">
                            <img src="assets/images/banner/shape/02.png" alt="banner" class="two">
                            <img src="assets/images/banner/shape/03.png" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Business consulting
                                                solution</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="service.html" class="tmp-btn btn-primary">Get Started Now</a>
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
                    <div class="tmp-banner-area bg_image-2 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="assets/images/banner/shape/01.png" alt="banner" class="one">
                            <img src="assets/images/banner/shape/02.png" alt="banner" class="two">
                            <img src="assets/images/banner/shape/03.png" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Corporate Solutions Business</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="service.html" class="tmp-btn btn-primary">Get Started Now</a>
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
                    <div class="tmp-banner-area bg_image-3 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="assets/images/banner/shape/01.png" alt="banner" class="one">
                            <img src="assets/images/banner/shape/02.png" alt="banner" class="two">
                            <img src="assets/images/banner/shape/03.png" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Powering Business Growth</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="service.html" class="tmp-btn btn-primary">Get Started Now</a>
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
            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="assets/images/about/01.png" alt="corporate_business">

                            <div class="image-two">
                                <img src="assets/images/about/03.png" alt="corporate_business">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="assets/images/about/02.png" alt="corporate_business">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="assets/images/about/flower.png" alt="Corporate_Business">
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
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="assets/images/about/4.png" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="assets/images/about/5.png" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="assets/images/about/6.png" alt="Business_Corporate"></a>

                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="assets/images/about/7.png" alt="Business_Corporate"></a>


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
                                <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
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
                                <img src="assets/images/about/about-with-icon.png" alt="">
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

    <!-- Tmp services area  -->
    <div class="tmp-services-area services-style--1 background-image-services bg_image tmp-section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Business_Consulting_services">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our Provided Services</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="assets/images/services/services-icon-1.png" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="service-details.html">
                                    <h5 class="title">Investment Advisory</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="service-details.html" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>
                            <div class="number">
                                <img src="assets/images/services/icon-01.png" alt="Business Consulting number">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="assets/images/services/services-icon-2.png" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="service-details.html">
                                    <h5 class="title">Financial Planning</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="service-details.html" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>

                            <div class="number">
                                <img src="assets/images/services/icon-02.png" alt="Business Consulting number">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="assets/images/services/services-icon-3.png" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="service-details.html">
                                    <h5 class="title">Business Consulting</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="service-details.html" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>

                            <div class="number">
                                <img src="assets/images/services/icon-03.png" alt="Business Consulting number">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="services-bottom">
                        <div class="services-bottom-inner">
                            <p class="description">
                                Our success as consultants will depend on the essential rightness of the advice.
                            </p>
                            <p class="description">Want to learn more About us?<button class="btn-simple">Click here</button></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Tmp services area end -->

    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gap">
        <div class="container">
            <div class="row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
                            <span class="subtitle">OUR work process</span>
                        </div>
                        <h2 class="title split-collab">How Our Services Work</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="assets/images/services/services-round-1.png" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>01</span>
                                </div>
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
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="assets/images/services/services-round-2.png" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>02</span>
                                </div>
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
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="assets/images/services/services-round-3.png" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>03</span>
                                </div>
                            </div>
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
    <div class="tmp-product-area tmp-section-gapTop bg-product-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head color-white">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-1.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-2.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-3.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-4.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-5.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                                        <a href="projects-details.html" class="thumbnail">
                                            <img src="assets/images/portfolio/portfolio-6.png" alt="corporate_business">
                                        </a>
                                        <div class="inner-content">
                                            <a href="projects-details.html">
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
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
                            <span class="subtitle">QUESTION AND ANSWERS</span>
                        </div>
                        <h2 class="title split-collab">Frequency Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img src="assets/images/faq/faq-1.png" alt="Business Consulting FAQ">
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

    <!-- Start Main Counter up-5 Area  -->
    <div class="tmp-counterup-area tmp-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
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
                            <h3 class="title"><span class="counter">69</span>+</h3>
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

    <!-- Start team area  -->
    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate services">
                            <span>OUR EXPERT TEAM</span>
                        </div>
                        <h2 class="section-title split-collab">Meet Our Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-team">
                        <a href="team-details.html" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="assets/images/team/team-2.png" alt="Corporate team">
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
                        <a href="team-details.html" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="assets/images/team/team-3.png" alt="Corporate team">
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
                        <a href="team-details.html" class="thumbnail" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="View Details">
                            <img src="assets/images/team/team-1.png" alt="Corporate team">
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
                                    <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
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
                                                    <img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial">
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
                                                    <img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial">
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
                                                    <img src="assets/images/testimonial/testimonial-1.jpg" alt="testimonial">
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
                                                    <img src="assets/images/testimonial/testimonial-2.jpg" alt="testimonial">
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
                                    <a href="#"><img src="assets/images/brand/brand-1.png" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="assets/images/brand/brand-2.png" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="assets/images/brand/brand-3.png" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="assets/images/brand/brand-4.png" alt="Brand Image"></a>
                                </li>
                                <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="assets/images/brand/brand-5.png" alt="Brand Image"></a>
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
    <div class="contact-area-three tmp-section-gapTop">
        <div class="bg-shape">
            <img src="assets/images/cta/02.png" alt="bussiness-contact">
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

    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="assets/images/services/section-custom-menubar.png " alt="Corporate_service">
                            <span class="subtitle">LATEST BLOG</span>
                        </div>
                        <h2 class="title split-collab">Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-12 col1-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-2.png" alt="Business Consulting Blog"></a>
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
                                    <a href="blog-details.html" class="title-area">
                                        <h4 class="title">Consulted admitting wooded
                                            is power acuteness.</h4>
                                    </a>
                                    <p class="description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="blog-details.html">
                                    <span class="read-more-text">Read More</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col1-2" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-3.png" alt="Business Consulting Blog"></a>
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
                                    <a href="blog-details.html" class="title-area">
                                        <h4 class="title">Grow your business strategy
                                            with business consulting.</h4>
                                    </a>
                                    <p class="description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="blog-details.html">
                                    <span class="read-more-text">Read More</span>
                                    <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col1-2" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="single-blog">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-1.png" alt="Business Consulting Blog"></a>
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
                                    <a href="blog-details.html" class="title-area">
                                        <h4 class="title">Facilis dolor eques about
                                            under official,presentism.</h4>
                                    </a>
                                    <p class="description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                                    </p>
                                </div>
                                <a class="btn-read-more" href="blog-details.html">
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