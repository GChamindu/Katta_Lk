@extends('layouts.layout1')

@php
    $title = 'Recent Project';
    $subtitle = 'Project';
@endphp


@section('content')

<div class="portfolio-area portfolio-style-three tmp-section-gap bg_image bg-image-none">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/potrfolio-10.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">Detaism Mode</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon angle-roted border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/portfolio-11.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">Design pervin</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/portfolio-12.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">Irin Developer</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/portfolio-12.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">Irin Development</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/portfolio-12.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">pervin Design</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" class="thumbnail" data-tmp-cursor="lg" data-tmp-cursor-text="View Details">
                            <img src="{{ asset('assets/images/portfolio/portfolio-15.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant">
                            <div class="content">
                                <a href="#">
                                    <h3 class="name animated fadeIn">Irin Studioo</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="#" class="icon angle-roted border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection