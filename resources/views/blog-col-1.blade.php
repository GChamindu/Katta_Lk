@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Latest Blog';
    $subtitle = 'Latest Blog';
@endphp


@section('content')

  <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-07.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consulting
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Earn good money and make you very
                                        successful creative working</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Read more <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-08.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consulting
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Earn good money and make you very
                                        successful creative working</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Read more <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-09.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consulting
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Earn good money and make you very
                                        successful creative working</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Read more <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->
                    <!-- single projects- column one -->
                    <div class="single-projects-one-col-1">
                        <a href="{{ route('blog-details') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-07.jpg') }}" alt="">
                        </a>
                        <div class="inner-blog-single">
                            <div class="inner">
                                <div class="category">
                                    Sultan Ahmed / Consulting
                                </div>
                                <a href="{{ route('blog-details') }}">
                                    <h3 class="title">Earn good money and make you very
                                        successful creative working</h3>
                                </a>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed, consequat tellus. Quisque ac odio eget ligula gravida.
                                </p>
                                <a href="{{ route('blog-details') }}" class="read-more-btn">Read more <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single projects- column one end -->

                    <!-- tmp pagination area start -->
                    <div class="tmp-pagination-area-next-pev">
                        <button><i class="fa-regular fa-chevron-left"></i></button>
                        <button>1</button>
                        <button>2</button>
                        <button>3</button>
                        <button><i class="fa-sharp fa-regular fa-chevron-right"></i></button>
                    </div>
                    <!-- tmp pagination area end -->
                </div>
                <div class="col-lg-4 pl--50">
                    <div class="side-bar-details-page">
                        <!-- single bar -->
                        <div class="signle-side-bar search-area">
                            <div class="body">
                                <div class="search-area">
                                    <input type="text" placeholder="Entry Key">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar category-area">
                            <div class="header">
                                <h3 class="title">Category List</h3>
                            </div>
                            <div class="body">
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Business Solution</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Strategy Growth</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Finance Solution</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Investment Policy</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-category">
                                    <p>Tax Manegment</p>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                                <!-- single category end -->
                            </div>
                        </div>
                        <!-- single bar end -->
                        <div class="signle-side-bar recent-post">
                            <div class="header">
                                <h3 class="title">Recent Post</h3>
                            </div>
                            <div class="body mt--50">
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-4.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Commanded household
                                                smallness delivered.
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-5.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Future Plan & Strategy for
                                                Construction
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                                <!-- single blog-post sidevar -->
                                <div class="single-blog-recent-post-sidebar">
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-6.jpg') }}" alt="blog-Post">
                                        <div class="inner">
                                            <span class="post-time">
                                                <i class="fa-regular fa-clock"></i>
                                                12 Jan, 2023
                                            </span>
                                            <h6 class="title">
                                                Melancholy particular
                                                devonshire alteration
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <!-- single blog-post  ed -->
                            </div>
                        </div>
                        <!-- single bar end -->
                        <div class="signle-side-bar tags">
                            <div class="header">
                                <h3 class="title">Popular Tags</h3>
                            </div>
                            <div class="body mt--50">
                                <div class="tags-wrapper-side-bar">
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Fashion</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Education</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Nation</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Studyt</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Health</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Food</button>
                                    </div>
                                    <!-- sigle tags end -->
                                    <!-- sigle tags -->
                                    <div class="signle-tag-side-bar">
                                        <button>Travel</button>
                                    </div>
                                    <!-- sigle tags end -->
                                </div>
                            </div>
                        </div>
                        <!-- single bar -->
                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title animated fadeIn">Need any help?</h3>
                                <p class="disc">
                                    We are here to help our customer any time. You can call on 24/7 To Answer Your Question.
                                </p>
                                <a href="Tel:1234567890">+(012)3456789</a>
                            </div>
                        </div>
                        <!-- single bar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp service section end -->

@endsection