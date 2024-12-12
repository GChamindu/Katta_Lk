@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Latest Blog';
    $subtitle = 'Latest Blog';
@endphp


@section('content')

     <!-- latest blog area start -->
     <div class="altest-blog-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-2.png') }}" alt="Business Consulting Blog"></a>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-3.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">
                                            Corporate Design Portfolio Collection</h4>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-1.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Executive Portfolio Theme Compilation</h4>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-4.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Professional Template Portfolio Selection</h4>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-5.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Executive Branding Portfolio Compilation</h4>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-blog blog-style-three">
                        <div class="blog-inner">
                            <div class="thumbnail">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/blog-6.png') }}" alt="Business Consulting Blog"></a>
                            </div>
                            <div class="blog-content text-center">
                                <div class="blog-head">
                                    <span class="name">20 JAN 2023</span>
                                    <span class="designation">Consulting</span>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blog-details') }}" class="title-area">
                                        <h4 class="title">Professional Theme Portfolio Compilation</h4>
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
                <div class="tmp-pagination-area-next-pev mt--50">
                    <button><i class="fa-regular fa-chevron-left"></i></button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class="fa-sharp fa-regular fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- latest blog area end -->

@endsection