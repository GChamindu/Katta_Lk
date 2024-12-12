@extends('layouts.layout2')


@section('content')

  <!-- tmp header area  -->
  <header class="header-solid header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-solid-main-wrapper">
                        <div class="logo-area-start">
                            <a class="logo" href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/logo-01.png') }}" alt="Corporate_business_logo">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                            <x-menuList/>
                        </div>
                        <div class="actions-area">

                            <a href="#" class="tmp-btn btn-primary">Buy Now</a>
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
    </header>
    <!-- tmp header area end -->
    <x-sidebar/>

    <!-- tmp banner area -->
    <section class="section-banner-area-start tmp-section-gapTop pt_sm--10 pb--40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2 pl_md--30 pl_sm--30">
                    <div class="banner-company-area-main__wrapper">
                        <span class="pre-title">
                            Our Corporate Business Agency
                        </span>
                        <h1 class="title">Bizper Company.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quis. Ullam
                            accusantium dignissimos repellendus nemo fugiat numquam, nisi odio adipisci. Veniam neque
                            itaque expedita officiis rem ipsa! Ratione, rem reiciendis?</p>
                        <div class="button-area-wrapper">
                            <a href="#" class="tmp-btn btn-primary">Purchase Now</a>
                            <a href="{{ route('contact') }}" class="tmp-btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-md-1 order-sm-1 order-1 mb_md--30 mb_sm--30">
                    <div class="frame-image-about-company">
                        <img src="{{ asset('assets/images/about/about-3.png') }}" alt="Banner Images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tmp banner area end -->

    <div class="best-service-we-provide pt--60 tmp-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-6.svg') }}" alt="corporate_Business_Services_agency">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-1.svg') }}" alt="corporate_Business_Services_agency">

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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-2.svg') }}" alt="corporate_Business_Services_Agency">

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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-3.svg') }}" alt="corporate_Business_Services_agency">

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


    <!-- short discription about company area  -->
    <div class="short-discription-area tmp-section-gapBottom">
        <div class="container  plr_sm--15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="short-discription-between-area">
                        <h2 class="title">
                            We are a dynamic creative digital agency dedicated to elevating our company's brands.
                        </h2>
                        <div class="discription-area">
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, quis. Ullam accusantium dignissimos repellendus nemo fugiat numquam, nisi odio adipisci. Veniam neque itaque expedita officiis rem ipsa! Ratione, rem reiciendis?
                            </p>
                            <a href="#" class="btn-readmore d-flex">View More<i class="fa-light fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- short discription about company area end -->

    <!-- about company wrapper -->
    <section class="about-company-area tmp-section-gapBottom">
        <div class="row align-items-center  plr_sm--15 plr_md--15">
            <div class="col-lg-4 offset-lg-2 mb_md--50 mb_sm--30">
                <div class="split-inner">
                    <h2 class="title sal-animate mb--40" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        What is Bizper?</h2>
                    <p class="description sal-animate mb--25" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Randomised words which don't look even slightly
                        believable. If you are to use a passage of Lorem Ipsum. You need to be
                        sure there isn't anything embarrassing hidden in the middle of text. in
                        some form, by injectedeed bedhumour, or randomised even.</p>
                    <p class="description sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">You need to be
                        sure there isn't anything embarrassing hidden in the middle of text. in
                        some form, by injectedeed bedhumour, or randomised even.</p>
                    <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="20">
                        <li>- Doug DeMarco, Design Prototyping Manager</li>
                        <li>- 108 million paying subscribers</li>
                        <li>- Over 1.7 billion hours of music played monthly</li>
                        <li>- 4,000+ employees working across 16 offices</li>
                    </ul>
                    <div class="view-more-button mt--35 sal-animate d-flex" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        <a class="tmp-btn btn-primary" href="{{ route('contact') }}">Contact With Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail image-right-content">
                    <img src="{{ asset('assets/images/about/about-large.jpg') }}" alt="split Images">
                </div>
            </div>
        </div>
    </section>
    <!-- about company wrapper end -->


    <!-- tmp counterup section area start -->
    <div class="tmp-section-gapBottom tmp-counterup-area">
        <div class="container">
            <div class="row g-5 counter_animation">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/05.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>+</h2>
                                <p class="disc">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/08.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>k+</h2>
                                <p class="disc">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/06.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">758</span>+</h2>
                                <p class="disc">Media Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/07.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">258</span>+</h2>
                                <p class="disc">Skill Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp counterup section area end -->

    <!-- rmp portfolio mesonary area -->
    <div class="tmp-portfolio-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business_Consulting_services">
                            <span>OUR PORTFOLIO</span>
                        </div>
                        <h2 class="title split-collab">Let's Check Our Best Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tmp-mesonary-area-main main-isotop">
                        <div class="tmp-button-group mb--50 filters-button-group">
                            <button class="button is-checked" data-filter="*">All Product</button>
                            <button class="button" data-filter=".creative">Dashboard</button>
                            <button class="button" data-filter=".design">Website</button>
                            <button class="button" data-filter=".photo">HTML/CSS</button>
                            <button class="button" data-filter=".style">Dashboard</button>
                        </div>
                        <div class="portfolio_wrap">
                            <div class="filter row portfolio-feed personal g-5">
                                <div class="flash grid-item-p element-item transition creative col-md-6 col-sm-6" data-category="transition">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/07.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Its Our Igniting Innovation</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                                <div class="flash grid-item-p element-item transition design col-md-6 col-sm-6" data-category="transition">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/02.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Showcasing Startup Ventures</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                                <div class="flash grid-item-p element-item transition photo col-md-6 col-sm-6" data-category="transition">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/03.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Navigating Startup Success</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                                <div class="flash grid-item-p element-item transition photo style col-md-6 col-sm-6" data-category="transition" style="position: absolute; left: 0px; top: 509.516px;">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/04.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                    In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                                <div class="flash grid-item-p element-item transition creative col-md-6 col-sm-6" data-category="transition" style="position: absolute; left: 440px; top: 509.516px;">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/05.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                    In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                                <div class="flash grid-item-p element-item transition photo style design col-md-6 col-sm-6" data-category="transition" style="position: absolute; left: 880px; top: 509.516px;">
                                    <!-- single portfolio-item -->
                                    <div class="tmp-single-portfolio-item">
                                        <a href="{{ route('projects-details') }}" class="thumbnail">
                                            <img src="{{ asset('assets/images/product/06.jpg') }}" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="{{ route('projects-details') }}">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                    In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single portfolio-item end -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rmp portfolio mesonary area end -->




    <!-- tmp brand section start -->
    <div class="tmp-brand-section tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-main-wrapper-company">
                        <div class="tmp-brand-section-start">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/01.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/02.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/03.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/08.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/05.png') }}" alt="brand">
                            </a>
                        </div>
                        <div class="tmp-brand-section-start">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/06.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/07.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/08.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/09.png') }}" alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/10.png') }}" alt="brand">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- tmp brand section end -->










    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg-image-none tmp-section-gap">
        <div class="container">
            <div class="footer-main footer-style-one mt--0">
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
                            <h5 class="ft-title">Services</h5>
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
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Solutions</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">Brand</a>
                                </li>
                                <li>
                                    <a href="#">Counter</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Company</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('pricing') }}">Pricing</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Our Team</a>
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
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('about') }}">Company</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}"> Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Services</a>
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



                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area-one bg-colorsame">
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