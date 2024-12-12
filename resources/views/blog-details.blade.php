@extends('layouts.layout1')

@php
    $title = 'Blog Details';
    $subtitle = 'Blog Details';
@endphp


@section('content')

    <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-left-area border-bottom">
                        <div class="thumbnail-top">
                            <img src="{{ asset('assets/images/blog/details/01.png') }}" alt="Corporate_business">
                        </div>
                        <div class="blog-details-discription">
                            <div class="category-area">
                                Sultan Ahmed / Consulting
                            </div>
                            <h3 class="title split-collab">Earn good money and make you very successful</h3>
                            <p class="disc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin.
                            </p>
                            <p class="disc">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed.
                            </p>
                        </div>
                        <div class="quote-area-blog-details">
                            <i class="fa-sharp fa-regular fa-quote-left fa-lg"></i>
                            <p class="disc">
                                Rockling Devario deep sea bonefish cutthroat trout streamer fish
                                kaluga sailback scorpionfish sand dab, turkeyfish golden loach sand
                                diver. Leopard danio píntano bonnet mouth.
                            </p>
                            <span class="author">David Miller</span>
                        </div>
                        <div class="blog-details-discription">
                            <p class="disc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin.
                            </p>
                            <div class="short-feature-blog-details">
                                <div class="single-feature">How will digital activities impact traditional manufacturing.</div>
                                <div class="single-feature">I monitor my staff with software that takes screen.</div>
                                <div class="single-feature">Minim veniam quis niacin sodium nostrud exer.</div>
                                <div class="single-feature">Laoreet dolore magna niacin sodium glutimate.</div>
                                <div class="single-feature">Narrow formal length my highly</div>
                            </div>
                            <p class="disc">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed.
                            </p>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="thumbnail-50">
                                    <img src="{{ asset('assets/images/blog/details/02.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumbnail-50">
                                    <img src="{{ asset('assets/images/blog/details/03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog-details-discription">
                            <p class="disc">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condiment diam sed.
                            </p>
                        </div>
                    </div>
                    <div class="blog-details-bottom-area mt--40">
                        <div class="tag-socila-area-blgo-details">
                            <div class="left-tag">
                                <span>Tag:</span>
                                <div class="tag-wrapper">
                                    <div class="signle-wrapper">
                                        Algoritham
                                    </div>
                                    <div class="signle-wrapper">
                                        Data Science
                                    </div>
                                </div>
                            </div>
                            <div class="social-blog-tag-area">
                                <span>Search:</span>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author-comment-area">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/blog/details/04.jpg') }}" alt="Corporate_Business">
                            </div>
                            <div class="main-information-of-autonr">
                                <h6 class="name">Md Jonny</h6>
                                <p class="disc">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                                </p>
                                <div class="social-blog-tag-area">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="comment-area-main-wrapper mt--30">

                            <h3 class="title">Comments (3)</h3>
                            <div class="single-comment-audience border-bottom pb--30">
                                <div class="author-image">
                                    <img src="{{ asset('assets/images/blog/details/05.png') }}" alt="Corporate_business">
                                </div>
                                <div class="right-area-commnet">
                                    <div class="top-area-comment">
                                        <div class="left">
                                            <h6 class="title">James Smith</h6>
                                            <span>March  20, 2024</span>
                                        </div>
                                        <button><i class="fa-solid fa-share fa-flip-both fa-lg"></i>Reply</button>
                                    </div>
                                    <p class="disc mt--15">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate .
                                    </p>
                                </div>
                            </div>
                            <div class="single-comment-audience border-bottom pb--30 pl--50 pl_sm--0">
                                <div class="author-image">
                                    <img src="{{ asset('assets/images/blog/details/06.png') }}" alt="Corporate_business">
                                </div>
                                <div class="right-area-commnet">
                                    <div class="top-area-comment">
                                        <div class="left">
                                            <h6 class="title">Adom Smith</h6>
                                            <span>February  20, 2024</span>
                                        </div>
                                        <button><i class="fa-solid fa-share fa-flip-both fa-lg"></i>Reply</button>
                                    </div>
                                    <p class="disc mt--15">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.
                                    </p>
                                </div>
                            </div>
                            <div class="single-comment-audience">
                                <div class="author-image">
                                    <img src="{{ asset('assets/images/blog/details/07.png') }}" alt="Corporate_business">
                                </div>
                                <div class="right-area-commnet">
                                    <div class="top-area-comment">
                                        <div class="left">
                                            <h6 class="title">Mr Lee Smith</h6>
                                            <span>February  28, 2023</span>
                                        </div>
                                        <button><i class="fa-solid fa-share fa-flip-both fa-lg"></i>Reply</button>
                                    </div>
                                    <p class="disc mt--15">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details-form-wrapper">
                            <h4 class="title">Leave A Comments</h4>
                            <span>Your email address will not be published. Required fields are marked *</span>
                            <form action="#" class="blog-details-form">
                                <div class="single-input">
                                    <input type="text" placeholder="Name">
                                    <i class="fa-light fa-user"></i>
                                </div>
                                <div class="half-input-wrapper">
                                    <div class="single-input">
                                        <input type="text" placeholder="Email">
                                        <i class="fa-light fa-envelope"></i>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" placeholder="Website">
                                        <i class="fa-light fa-globe"></i>
                                    </div>
                                </div>
                                <textarea placeholder="Write a Message"></textarea>
                                <button class="tmp-btn btn-primary">Submit Comment</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 pl--50 pl_md--10 pl_sm--10 mt_md--50 mt_sm--50">
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