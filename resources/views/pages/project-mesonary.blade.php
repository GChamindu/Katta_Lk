@extends('layouts.layout1')

@php
    $title = 'Recent Project';
    $subtitle = 'Project';
@endphp


@section('content')

     <!-- rmp portfolio mesonary area -->
     <div class="tmp-portfolio-area tmp-section-gap">
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

@endsection