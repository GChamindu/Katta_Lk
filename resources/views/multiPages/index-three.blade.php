@extends('layouts.layout2')



@section('content')

<!-- tpm-header-area start -->
    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-two header-three header--sticky">

        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-mida-area style-two">
                        <div class="logo-area-start">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/logo-03.png') }}" alt="logo">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                        <x-menuList/>
                        </div>
                        <div class="actions-area">

                            <a href="{{ route('contact') }}" class="tmp-btn btn-gradiant">Get Started Now</a>
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
    <!-- tpm-header-area end -->

    <!-- Start swiper slider area  -->
    <div class="tmp-banner-area banner-three bg_image tmp-section-gap">
        <div class="swiper-container-three">

            <!-- swiper slides -->
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slider-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/banner/banner-three.jpg') }}" alt="marketing consulting">
                        </div>
                        <div class="content">
                            <h2 class="title">
                                Start your upcoming modern consulting
                            </h2>
                            <p class="description">
                                We help small startups grow from idea to millions of users. we can also automate your marketing and customer service.
                            </p>
                            <div class="banner-bottom justify-content-center" style="gap: 30px;">
                                <a href="{{ route('service') }}" class="tmp-btn btn-gradiant">Get Started Now</a>
                                <a href="{{ route('contact') }}" class="tmp-btn btn-gradiant-2">Contact Us</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide">
                    <div class="slider-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/banner/banner-four.jpg') }}" alt="marketing consulting">
                        </div>
                        <div class="content">
                            <h2 class="title">
                                Start your upcoming modern consulting
                            </h2>
                            <p class="description">
                                We help small startups grow from idea to millions of users. we can also automate your marketing and customer service.
                            </p>
                            <div class="banner-bottom justify-content-center" style="gap: 30px;">
                                <a href="{{ route('service') }}" class="tmp-btn btn-gradiant">Get Started Now</a>
                                <a href="{{ route('contact') }}" class="tmp-btn btn-gradiant-2">Contact Us</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide">
                    <div class="slider-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/banner/banner-five.jpg') }}" alt="marketing consulting">
                        </div>
                        <div class="content">
                            <h2 class="title">
                                Marketing Consulting Help Your Business
                            </h2>
                            <p class="description">
                                We help small startups grow from idea to millions of users. we can also automate your marketing and customer service.
                            </p>
                            <div class="banner-bottom justify-content-center" style="gap: 30px;">
                                <a href="{{ route('service') }}" class="tmp-btn btn-gradiant">Get Started Now</a>
                                <a href="{{ route('contact') }}" class="tmp-btn btn-gradiant-2">Contact Us</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- !swiper slides -->

            <!-- next prev arrows -->
            <div class="swiper-button-next">
                <i class="fa-regular fa-angle-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="fa-regular fa-angle-left"></i>
            </div>
            <!-- next prev arrows -->

            <!-- pagination dots -->
            <div class="swiper-pagination"></div>
            <!-- !pagination dots -->
        </div>
    </div>
    <!-- End swiper slider area  -->

    <!-- service area start -->
    <div class="tmp-service-area tmp-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title justify-content-center">
                            <span class="subtitle color-gradiant">OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our Provided Services</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <!-- single -service three -->
                    <div class="service-single-three">
                        <a href="{{ route('service') }}">
                            <h5 class="title">Financial Planning</h5>
                        </a>
                        <p class="disc">Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web.</p>
                        <div class="icon">
                            <svg width="60" height="54" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2812 15.8438C18.1735 15.8438 18.0702 15.8009 17.994 15.7248C17.9178 15.6486 17.875 15.5452 17.875 15.4375V10.5625H9.75V13C9.75 13.1077 9.7072 13.2111 9.63101 13.2873C9.55483 13.3634 9.45149 13.4062 9.34375 13.4062C9.23601 13.4062 9.13267 13.3634 9.05649 13.2873C8.9803 13.2111 8.9375 13.1077 8.9375 13V10.1562C8.9375 10.0485 8.9803 9.94517 9.05649 9.86899C9.13267 9.7928 9.23601 9.75 9.34375 9.75H18.2812C18.389 9.75 18.4923 9.7928 18.5685 9.86899C18.6447 9.94517 18.6875 10.0485 18.6875 10.1562V15.4375C18.6875 15.5452 18.6447 15.6486 18.5685 15.7248C18.4923 15.8009 18.389 15.8438 18.2812 15.8438Z" fill="#FF3C3C"></path>
                                <path d="M18.2812 12.1875H9.34375C9.23601 12.1875 9.13267 12.1447 9.05649 12.0685C8.9803 11.9923 8.9375 11.889 8.9375 11.7812C8.9375 11.6735 8.9803 11.5702 9.05649 11.494C9.13267 11.4178 9.23601 11.375 9.34375 11.375H18.2812C18.389 11.375 18.4923 11.4178 18.5685 11.494C18.6447 11.5702 18.6875 11.6735 18.6875 11.7812C18.6875 11.889 18.6447 11.9923 18.5685 12.0685C18.4923 12.1447 18.389 12.1875 18.2812 12.1875Z" fill="#FF3C3C"></path>
                                <path d="M18.2816 13.8125H15.5312C15.4235 13.8125 15.3202 13.7697 15.244 13.6935C15.1678 13.6173 15.125 13.514 15.125 13.4062C15.125 13.2985 15.1678 13.1952 15.244 13.119C15.3202 13.0428 15.4235 13 15.5312 13H18.2816C18.3893 13 18.4926 13.0428 18.5688 13.119C18.645 13.1952 18.6878 13.2985 18.6878 13.4062C18.6878 13.514 18.645 13.6173 18.5688 13.6935C18.4926 13.7697 18.3893 13.8125 18.2816 13.8125Z" fill="#FF3C3C"></path>
                                <path d="M13.8125 10.1563C12.8483 10.1563 11.9058 9.87034 11.1041 9.33467C10.3024 8.79899 9.67757 8.03762 9.30859 7.14683C8.93961 6.25604 8.84307 5.27584 9.03117 4.33019C9.21928 3.38453 9.68358 2.51589 10.3654 1.83411C11.0471 1.15233 11.9158 0.688027 12.8614 0.499924C13.8071 0.311821 14.7873 0.408362 15.6781 0.777339C16.5689 1.14632 17.3302 1.77116 17.8659 2.57285C18.4016 3.37454 18.6875 4.31707 18.6875 5.28125C18.6861 6.57375 18.172 7.81292 17.2581 8.72685C16.3442 9.64079 15.105 10.1549 13.8125 10.1563ZM13.8125 1.21875C13.009 1.21875 12.2236 1.45701 11.5555 1.90341C10.8874 2.3498 10.3667 2.98428 10.0592 3.7266C9.75176 4.46893 9.67131 5.28576 9.82806 6.07381C9.98481 6.86185 10.3717 7.58572 10.9399 8.15387C11.508 8.72202 12.2319 9.10894 13.0199 9.26569C13.808 9.42244 14.6248 9.34199 15.3672 9.03451C16.1095 8.72703 16.744 8.20633 17.1903 7.53826C17.6367 6.87018 17.875 6.08474 17.875 5.28125C17.8738 4.20417 17.4454 3.17155 16.6838 2.40994C15.9222 1.64833 14.8896 1.21994 13.8125 1.21875Z" fill="#FF3C3C"></path>
                                <path d="M14.2188 7.3125H12.5938C12.486 7.3125 12.3827 7.2697 12.3065 7.19351C12.2303 7.11733 12.1875 7.01399 12.1875 6.90625C12.1875 6.79851 12.2303 6.69517 12.3065 6.61899C12.3827 6.5428 12.486 6.5 12.5938 6.5H14.2188C14.3265 6.5 14.4298 6.4572 14.506 6.38101C14.5822 6.30483 14.625 6.20149 14.625 6.09375C14.625 5.98601 14.5822 5.88267 14.506 5.80649C14.4298 5.7303 14.3265 5.6875 14.2188 5.6875H13.4062C13.083 5.6875 12.773 5.5591 12.5445 5.33054C12.3159 5.10198 12.1875 4.79198 12.1875 4.46875C12.1875 4.14552 12.3159 3.83552 12.5445 3.60696C12.773 3.3784 13.083 3.25 13.4062 3.25H15.0312C15.139 3.25 15.2423 3.2928 15.3185 3.36899C15.3947 3.44517 15.4375 3.54851 15.4375 3.65625C15.4375 3.76399 15.3947 3.86733 15.3185 3.94351C15.2423 4.0197 15.139 4.0625 15.0312 4.0625H13.4062C13.2985 4.0625 13.1952 4.1053 13.119 4.18149C13.0428 4.25767 13 4.36101 13 4.46875C13 4.57649 13.0428 4.67983 13.119 4.75601C13.1952 4.8322 13.2985 4.875 13.4062 4.875H14.2188C14.542 4.875 14.852 5.0034 15.0805 5.23196C15.3091 5.46052 15.4375 5.77052 15.4375 6.09375C15.4375 6.41698 15.3091 6.72698 15.0805 6.95554C14.852 7.1841 14.542 7.3125 14.2188 7.3125Z" fill="#FF3C3C"></path>
                                <path d="M13.8125 4.0625C13.7048 4.0625 13.6014 4.0197 13.5252 3.94351C13.4491 3.86733 13.4062 3.76399 13.4062 3.65625V2.84375C13.4062 2.73601 13.4491 2.63267 13.5252 2.55649C13.6014 2.4803 13.7048 2.4375 13.8125 2.4375C13.9202 2.4375 14.0236 2.4803 14.0998 2.55649C14.1759 2.63267 14.2188 2.73601 14.2188 2.84375V3.65625C14.2188 3.76399 14.1759 3.86733 14.0998 3.94351C14.0236 4.0197 13.9202 4.0625 13.8125 4.0625Z" fill="#FF3C3C"></path>
                                <path d="M13.8125 8.125C13.7048 8.125 13.6014 8.0822 13.5252 8.00601C13.4491 7.92983 13.4062 7.82649 13.4062 7.71875V6.90625C13.4062 6.79851 13.4491 6.69517 13.5252 6.61899C13.6014 6.5428 13.7048 6.5 13.8125 6.5C13.9202 6.5 14.0236 6.5428 14.0998 6.61899C14.1759 6.69517 14.2188 6.79851 14.2188 6.90625V7.71875C14.2188 7.82649 14.1759 7.92983 14.0998 8.00601C14.0236 8.0822 13.9202 8.125 13.8125 8.125Z" fill="#FF3C3C"></path>
                                <path d="M7.71866 25.5938C7.61093 25.5937 7.50761 25.5509 7.43144 25.4747L0.525195 18.5685C0.449034 18.4923 0.40625 18.389 0.40625 18.2813C0.40625 18.1735 0.449034 18.0702 0.525195 17.994L3.36894 15.1503C3.44513 15.0741 3.54844 15.0313 3.65616 15.0313C3.76389 15.0313 3.8672 15.0741 3.94338 15.1503L10.8496 22.0565C10.9258 22.1327 10.9686 22.236 10.9686 22.3438C10.9686 22.4515 10.9258 22.5548 10.8496 22.631L8.00588 25.4747C7.92971 25.5509 7.8264 25.5937 7.71866 25.5938ZM1.38685 18.2813L7.71866 24.6131L9.98798 22.3438L3.65616 16.0119L1.38685 18.2813Z" fill="#FF3C3C"></path>
                                <path d="M4.46866 16.6562C4.38833 16.6562 4.3098 16.6324 4.24301 16.5878C4.17622 16.5431 4.12416 16.4797 4.09342 16.4055C4.06268 16.3312 4.05463 16.2496 4.0703 16.1708C4.08597 16.092 4.12465 16.0196 4.18144 15.9628L7.43144 12.7128C7.50761 12.6366 7.61093 12.5938 7.71866 12.5938H14.6249C15.0559 12.5938 15.4692 12.765 15.774 13.0697C16.0787 13.3744 16.2499 13.7878 16.2499 14.2188C16.2499 14.6497 16.0787 15.0631 15.774 15.3678C15.4692 15.6725 15.0559 15.8438 14.6249 15.8438H11.7812C11.6734 15.8438 11.5701 15.8009 11.4939 15.7248C11.4177 15.6486 11.3749 15.5452 11.3749 15.4375C11.3749 15.3298 11.4177 15.2264 11.4939 15.1502C11.5701 15.0741 11.6734 15.0312 11.7812 15.0312H14.6249C14.8404 15.0312 15.0471 14.9456 15.1994 14.7933C15.3518 14.6409 15.4374 14.4342 15.4374 14.2188C15.4374 14.0033 15.3518 13.7966 15.1994 13.6442C15.0471 13.4919 14.8404 13.4062 14.6249 13.4062H7.88685L4.75588 16.5372C4.67971 16.6134 4.5764 16.6562 4.46866 16.6562Z" fill="#FF3C3C"></path>
                                <path d="M9.74991 21.9375C9.66958 21.9375 9.59105 21.9137 9.52426 21.869C9.45747 21.8244 9.40541 21.7609 9.37467 21.6867C9.34393 21.6125 9.33588 21.5308 9.35155 21.452C9.36722 21.3732 9.4059 21.3009 9.46269 21.244L11.4939 19.2128C11.5701 19.1366 11.6734 19.0938 11.7812 19.0938H17.6998L24.578 11.8194C24.7157 11.6774 24.7914 11.4864 24.7883 11.2886C24.7852 11.0908 24.7036 10.9023 24.5616 10.7646C24.4195 10.6269 24.2286 10.5513 24.0308 10.5544C23.8329 10.5575 23.6445 10.639 23.5068 10.7811L18.5688 15.7247C18.531 15.7625 18.4862 15.7925 18.4368 15.8129C18.3875 15.8333 18.3346 15.8438 18.2812 15.8438H14.2187C14.1109 15.8438 14.0076 15.801 13.9314 15.7248C13.8552 15.6486 13.8124 15.5453 13.8124 15.4375C13.8124 15.3298 13.8552 15.2264 13.9314 15.1502C14.0076 15.0741 14.1109 15.0313 14.2187 15.0313H18.1126L22.9315 10.2062C23.223 9.92645 23.6117 9.77079 24.0157 9.77204C24.4198 9.7733 24.8075 9.93137 25.0973 10.213C25.387 10.4945 25.5561 10.8776 25.5689 11.2814C25.5817 11.6853 25.4372 12.0783 25.1659 12.3776L18.1703 19.7795C18.1322 19.8196 18.0864 19.8515 18.0357 19.8733C17.9849 19.8951 17.9302 19.9063 17.8749 19.9063H11.9494L10.0371 21.8185C9.96096 21.8947 9.85765 21.9375 9.74991 21.9375Z" fill="#FF3C3C"></path>
                            </svg>
                        </div>
                        <a class="link-over" href="{{ route('service') }}"></a>
                    </div>
                    <!-- single -service end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <!-- single -service three -->
                    <div class="service-single-three">
                        <a href="{{ route('service') }}">
                            <h5 class="title">Investment Advisory</h5>
                        </a>
                        <p class="disc">Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web.</p>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="47" viewBox="0 0 59 47" fill="none">
                                <path d="M15.2262 40.2767C14.8529 40.2767 14.5596 39.9833 14.5596 39.61V17.1033C14.5596 16.89 14.6529 16.69 14.8262 16.57L32.8796 3.13C33.1196 2.95667 33.4396 2.95667 33.6796 3.13L51.7329 16.57C51.9062 16.69 51.9996 16.89 51.9996 17.1033V20.25C51.9996 20.6233 51.7062 20.9167 51.3329 20.9167C50.9596 20.9167 50.6662 20.6233 50.6662 20.25V17.4367L33.2796 4.49L15.8929 17.45V39.61C15.8929 39.9833 15.5996 40.2767 15.2262 40.2767Z" fill="url(#paint0_linear_289_839)" />
                                <path d="M47.4938 11.65C47.1205 11.65 46.8271 11.3566 46.8271 10.9833V4.87663C46.8271 4.50329 47.1205 4.20996 47.4938 4.20996C47.8671 4.20996 48.1605 4.50329 48.1605 4.87663V10.9833C48.1605 11.3566 47.8671 11.65 47.4938 11.65Z" fill="url(#paint1_linear_289_839)" />
                                <path d="M43.8932 9.03663C43.5199 9.03663 43.2266 8.7433 43.2266 8.36996V4.87663C43.2266 4.50329 43.5199 4.20996 43.8932 4.20996C44.2666 4.20996 44.5599 4.50329 44.5599 4.87663V8.36996C44.5599 8.72996 44.2532 9.03663 43.8932 9.03663Z" fill="url(#paint2_linear_289_839)" />
                                <path d="M48.7869 5.52995H42.6003C42.2269 5.52995 41.9336 5.23661 41.9336 4.86328V2.52995C41.9336 2.15661 42.2269 1.86328 42.6003 1.86328H48.7869C49.1603 1.86328 49.4536 2.15661 49.4536 2.52995V4.86328C49.4536 5.23661 49.1469 5.52995 48.7869 5.52995ZM43.2669 4.19661H48.1203V3.19661H43.2669V4.19661Z" fill="url(#paint3_linear_289_839)" />
                                <path d="M35.4398 33.5702C35.3998 33.5702 35.3464 33.5702 35.3064 33.5569C35.2664 33.5436 35.2264 33.5302 35.1864 33.5169C35.1464 33.5036 35.1064 33.4769 35.0664 33.4502C35.0264 33.4236 34.9998 33.3969 34.9598 33.3702C34.8398 33.2502 34.7598 33.0769 34.7598 32.9036C34.7598 32.7302 34.8264 32.5569 34.9598 32.4369C34.9864 32.4102 35.0264 32.3836 35.0664 32.3569C35.1064 32.3302 35.1464 32.3169 35.1864 32.2902C35.2264 32.2769 35.2664 32.2636 35.3064 32.2502C35.3864 32.2369 35.4798 32.2369 35.5731 32.2502L35.6931 32.2902C35.7331 32.3036 35.7731 32.3302 35.8131 32.3569C35.8531 32.3836 35.8798 32.4102 35.9198 32.4369C36.0398 32.5569 36.1198 32.7302 36.1198 32.9036C36.1198 33.0769 36.0531 33.2502 35.9198 33.3702C35.8931 33.3969 35.8531 33.4236 35.8131 33.4502C35.7731 33.4769 35.7331 33.4902 35.6931 33.5169C35.6531 33.5302 35.6131 33.5436 35.5731 33.5569C35.5331 33.5702 35.4931 33.5702 35.4398 33.5702Z" fill="url(#paint4_linear_289_839)" />
                                <path d="M28.9733 40.2768C28.6 40.2768 28.3066 39.9835 28.3066 39.6101V26.2101C28.3066 25.8368 28.6 25.5435 28.9733 25.5435H37.5733C37.9466 25.5435 38.24 25.8368 38.24 26.2101V33.9301C38.24 34.3035 37.9466 34.5968 37.5733 34.5968C37.2 34.5968 36.9066 34.3035 36.9066 33.9301V26.8768H29.64V39.6101C29.64 39.9835 29.3466 40.2768 28.9733 40.2768Z" fill="url(#paint5_linear_289_839)" />
                                <path d="M55.9466 17.7833H51.3332C50.9599 17.7833 50.6666 17.49 50.6666 17.1167C50.6666 16.7433 50.9599 16.45 51.3332 16.45H53.8932L33.2799 1.49L12.6665 16.45H15.2265C15.5999 16.45 15.8932 16.7433 15.8932 17.1167C15.8932 17.49 15.5999 17.7833 15.2265 17.7833H10.6132C10.3199 17.7833 10.0665 17.5967 9.97321 17.3167C9.87988 17.0367 9.98655 16.7433 10.2132 16.57L32.8799 0.13C33.1199 -0.0433333 33.4265 -0.0433333 33.6665 0.13L56.3332 16.57C56.5732 16.7433 56.6665 17.0367 56.5732 17.3167C56.4799 17.5967 56.2399 17.7833 55.9466 17.7833Z" fill="url(#paint6_linear_289_839)" />
                                <path d="M44.6801 24.4234H37.7868C37.4135 24.4234 37.1201 24.1301 37.1201 23.7568V16.8634C37.1201 16.4901 37.4135 16.1968 37.7868 16.1968H44.6801C45.0535 16.1968 45.3468 16.4901 45.3468 16.8634V23.7568C45.3468 24.1301 45.0535 24.4234 44.6801 24.4234ZM38.4535 23.0901H44.0135V17.5301H38.4535V23.0901Z" fill="url(#paint7_linear_289_839)" />
                                <path d="M41.2399 24.4234C40.8666 24.4234 40.5732 24.1301 40.5732 23.7568V16.8634C40.5732 16.4901 40.8666 16.1968 41.2399 16.1968C41.6132 16.1968 41.9066 16.4901 41.9066 16.8634V23.7568C41.9066 24.1301 41.5999 24.4234 41.2399 24.4234Z" fill="url(#paint8_linear_289_839)" />
                                <path d="M28.7602 24.4234H21.8669C21.4935 24.4234 21.2002 24.1301 21.2002 23.7568V16.8634C21.2002 16.4901 21.4935 16.1968 21.8669 16.1968H28.7602C29.1335 16.1968 29.4269 16.4901 29.4269 16.8634V23.7568C29.4269 24.1301 29.1335 24.4234 28.7602 24.4234ZM22.5469 23.0901H28.1069V17.5301H22.5469V23.0901Z" fill="url(#paint9_linear_289_839)" />
                                <path d="M25.32 24.4234C24.9467 24.4234 24.6533 24.1301 24.6533 23.7568V16.8634C24.6533 16.4901 24.9467 16.1968 25.32 16.1968C25.6933 16.1968 25.9867 16.4901 25.9867 16.8634V23.7568C25.9867 24.1301 25.6933 24.4234 25.32 24.4234Z" fill="url(#paint10_linear_289_839)" />
                                <path d="M28.7602 20.9835H21.8669C21.4935 20.9835 21.2002 20.6901 21.2002 20.3168C21.2002 19.9435 21.4935 19.6501 21.8669 19.6501H28.7602C29.1335 19.6501 29.4269 19.9435 29.4269 20.3168C29.4269 20.6901 29.1335 20.9835 28.7602 20.9835Z" fill="url(#paint11_linear_289_839)" />
                                <path d="M44.6801 20.9835H37.7868C37.4135 20.9835 37.1201 20.6901 37.1201 20.3168C37.1201 19.9435 37.4135 19.6501 37.7868 19.6501H44.6801C45.0535 19.6501 45.3468 19.9435 45.3468 20.3168C45.3468 20.6901 45.0535 20.9835 44.6801 20.9835Z" fill="url(#paint12_linear_289_839)" />
                                <path d="M33.2802 15.09C31.2402 15.09 29.5869 13.4367 29.5869 11.3967C29.5869 9.3567 31.2402 7.70337 33.2802 7.70337C35.3202 7.70337 36.9736 9.3567 36.9736 11.3967C36.9736 13.4234 35.3202 15.09 33.2802 15.09ZM33.2802 9.0367C31.9736 9.0367 30.9202 10.09 30.9202 11.3967C30.9202 12.7034 31.9736 13.7567 33.2802 13.7567C34.5869 13.7567 35.6402 12.7034 35.6402 11.3967C35.6402 10.09 34.5869 9.0367 33.2802 9.0367Z" fill="url(#paint13_linear_289_839)" />
                                <path d="M31.9868 42.8367H13.5202C13.1468 42.8367 12.8535 42.5434 12.8535 42.17V39.61C12.8535 39.2367 13.1468 38.9434 13.5202 38.9434H33.3202C33.6935 38.9434 33.9868 39.2367 33.9868 39.61C33.9868 39.9834 33.6935 40.2767 33.3202 40.2767H14.1868V41.5034H31.9868C32.3602 41.5034 32.6535 41.7967 32.6535 42.17C32.6535 42.5434 32.3468 42.8367 31.9868 42.8367Z" fill="url(#paint14_linear_289_839)" />
                                <path d="M58 46.9301H35.4533C35.1866 46.9301 34.9466 46.7701 34.84 46.5167C34.7333 46.2634 34.8 45.9834 34.9866 45.7967L57.5333 23.2501C57.72 23.0634 58.0133 22.9967 58.2533 23.1034C58.5066 23.2101 58.6666 23.4501 58.6666 23.7167V46.2634C58.6666 46.6234 58.3733 46.9301 58 46.9301ZM37.0666 45.5967H57.3333V25.3167L37.0666 45.5967Z" fill="url(#paint15_linear_289_839)" />
                                <path d="M53.9069 42.8233H45.3469C45.0802 42.8233 44.8402 42.6633 44.7335 42.4099C44.6269 42.1566 44.6935 41.8766 44.8802 41.6899L53.4402 33.1299C53.6269 32.9433 53.9202 32.8766 54.1602 32.9833C54.4135 33.0899 54.5735 33.3299 54.5735 33.5966V42.1566C54.5735 42.5299 54.2669 42.8233 53.9069 42.8233ZM46.9469 41.4899H53.2269V35.2099L46.9469 41.4899Z" fill="url(#paint16_linear_289_839)" />
                                <path d="M31.6932 43.37C31.5199 43.37 31.3466 43.3033 31.2266 43.17C31.0266 42.97 30.9732 42.65 31.1066 42.3833L34.3066 36.2766C34.3332 36.2233 34.3732 36.1566 34.4266 36.1166L50.4666 20.0766C51.5199 19.0233 53.2532 19.0233 54.3066 20.0766C55.3599 21.13 55.3599 22.8633 54.3066 23.9166L38.2799 39.97C38.2266 40.0233 38.1732 40.0633 38.1199 40.09L32.0132 43.29C31.9066 43.3433 31.7999 43.37 31.6932 43.37ZM35.4532 36.9966L33.2932 41.1166L37.4132 38.9566L53.3866 22.9833C53.9199 22.45 53.9199 21.57 53.3866 21.0233C52.8532 20.49 51.9732 20.49 51.4266 21.0233L35.4532 36.9966Z" fill="url(#paint17_linear_289_839)" />
                                <path d="M37.7999 40.1698C37.6266 40.1698 37.4532 40.1032 37.3332 39.9698L34.4266 37.0632C34.1599 36.7965 34.1599 36.3832 34.4266 36.1165C34.6932 35.8498 35.1066 35.8498 35.3732 36.1165L38.2799 39.0232C38.5466 39.2898 38.5466 39.7032 38.2799 39.9698C38.1466 40.1032 37.9732 40.1698 37.7999 40.1698Z" fill="url(#paint18_linear_289_839)" />
                                <path d="M52.2667 25.7033C52.0934 25.7033 51.92 25.6366 51.8 25.5033L48.8934 22.5966C48.6267 22.33 48.6267 21.9166 48.8934 21.65C49.16 21.3833 49.5734 21.3833 49.84 21.65L52.7467 24.5566C53.0134 24.8233 53.0134 25.2366 52.7467 25.5033C52.6 25.6366 52.44 25.7033 52.2667 25.7033Z" fill="url(#paint19_linear_289_839)" />
                                <path d="M8.88 42.6766H0.666667C0.293333 42.6766 0 42.3833 0 42.01V0.943278C0 0.569945 0.293333 0.276611 0.666667 0.276611H8.88C9.25333 0.276611 9.54667 0.569945 9.54667 0.943278V42.01C9.54667 42.3833 9.24 42.6766 8.88 42.6766ZM1.33333 41.3433H8.21333V1.60994H1.33333V41.3433Z" fill="url(#paint20_linear_289_839)" />
                                <path d="M8.8803 5.10335H5.6403C5.26697 5.10335 4.97363 4.81002 4.97363 4.43669C4.97363 4.06335 5.26697 3.77002 5.6403 3.77002H8.8803C9.25363 3.77002 9.54697 4.06335 9.54697 4.43669C9.54697 4.81002 9.2403 5.10335 8.8803 5.10335Z" fill="url(#paint21_linear_289_839)" />
                                <path d="M8.88025 8.88997H7.25358C6.88025 8.88997 6.58691 8.59664 6.58691 8.22331C6.58691 7.84997 6.88025 7.55664 7.25358 7.55664H8.86691C9.24025 7.55664 9.53358 7.84997 9.53358 8.22331C9.53358 8.59664 9.24025 8.88997 8.88025 8.88997Z" fill="url(#paint22_linear_289_839)" />
                                <path d="M8.8803 12.6766H5.6403C5.26697 12.6766 4.97363 12.3833 4.97363 12.0099C4.97363 11.6366 5.26697 11.3433 5.6403 11.3433H8.8803C9.25363 11.3433 9.54697 11.6366 9.54697 12.0099C9.54697 12.3833 9.2403 12.6766 8.8803 12.6766Z" fill="url(#paint23_linear_289_839)" />
                                <path d="M8.88025 16.4635H7.25358C6.88025 16.4635 6.58691 16.1701 6.58691 15.7968C6.58691 15.4235 6.88025 15.1301 7.25358 15.1301H8.86691C9.24025 15.1301 9.53358 15.4235 9.53358 15.7968C9.53358 16.1701 9.24025 16.4635 8.88025 16.4635Z" fill="url(#paint24_linear_289_839)" />
                                <path d="M8.8803 20.2501H5.6403C5.26697 20.2501 4.97363 19.9567 4.97363 19.5834C4.97363 19.2101 5.26697 18.9167 5.6403 18.9167H8.8803C9.25363 18.9167 9.54697 19.2101 9.54697 19.5834C9.54697 19.9567 9.2403 20.2501 8.8803 20.2501Z" fill="url(#paint25_linear_289_839)" />
                                <path d="M8.88025 24.0367H7.25358C6.88025 24.0367 6.58691 23.7434 6.58691 23.37C6.58691 22.9967 6.88025 22.7034 7.25358 22.7034H8.86691C9.24025 22.7034 9.53358 22.9967 9.53358 23.37C9.54691 23.7434 9.24025 24.0367 8.88025 24.0367Z" fill="url(#paint26_linear_289_839)" />
                                <path d="M8.8803 27.8233H5.6403C5.26697 27.8233 4.97363 27.53 4.97363 27.1567C4.97363 26.7833 5.26697 26.49 5.6403 26.49H8.8803C9.25363 26.49 9.54697 26.7833 9.54697 27.1567C9.54697 27.53 9.2403 27.8233 8.8803 27.8233Z" fill="url(#paint27_linear_289_839)" />
                                <path d="M8.88025 31.6099H7.25358C6.88025 31.6099 6.58691 31.3166 6.58691 30.9433C6.58691 30.5699 6.88025 30.2766 7.25358 30.2766H8.86691C9.24025 30.2766 9.53358 30.5699 9.53358 30.9433C9.53358 31.3166 9.24025 31.6099 8.88025 31.6099Z" fill="url(#paint28_linear_289_839)" />
                                <path d="M8.8803 35.41H5.6403C5.26697 35.41 4.97363 35.1167 4.97363 34.7433C4.97363 34.37 5.26697 34.0767 5.6403 34.0767H8.8803C9.25363 34.0767 9.54697 34.37 9.54697 34.7433C9.54697 35.1167 9.2403 35.41 8.8803 35.41Z" fill="url(#paint29_linear_289_839)" />
                                <path d="M8.88025 39.1966H7.25358C6.88025 39.1966 6.58691 38.9033 6.58691 38.5299C6.58691 38.1566 6.88025 37.8633 7.25358 37.8633H8.86691C9.24025 37.8633 9.53358 38.1566 9.53358 38.5299C9.53358 38.9033 9.24025 39.1966 8.88025 39.1966Z" fill="url(#paint30_linear_289_839)" />
                                <defs>
                                    <linearGradient id="paint0_linear_289_839" x1="10.904" y1="25.8689" x2="49.0785" y2="31.5071" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_289_839" x1="46.697" y1="8.77433" x2="48.0851" y2="8.81092" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_289_839" x1="43.0964" y1="7.17108" x2="44.4832" y2="7.22741" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_289_839" x1="41.1994" y1="4.11275" x2="48.3809" y2="6.27862" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_289_839" x1="34.627" y1="33.0562" x2="36.0126" y2="33.2645" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_289_839" x1="27.3368" y1="34.5822" x2="37.5852" y2="35.5983" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_289_839" x1="5.38276" y1="10.9099" x2="47.7032" y2="27.2417" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint7_linear_289_839" x1="36.3169" y1="21.2438" x2="44.7065" y2="22.4775" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint8_linear_289_839" x1="40.4431" y1="21.2438" x2="41.8314" y2="21.2769" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint9_linear_289_839" x1="20.397" y1="21.2438" x2="28.7866" y2="22.4775" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint10_linear_289_839" x1="24.5231" y1="21.2438" x2="25.9115" y2="21.2769" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint11_linear_289_839" x1="20.397" y1="20.4681" x2="25.0981" y2="24.7335" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint12_linear_289_839" x1="36.3169" y1="20.4681" x2="41.018" y2="24.7335" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint13_linear_289_839" x1="28.8657" y1="12.235" x2="36.3987" y2="13.3427" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint14_linear_289_839" x1="10.7901" y1="41.3319" x2="24.2393" y2="52.067" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint15_linear_289_839" x1="32.4577" y1="37.7012" x2="56.8082" y2="41.2819" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint16_linear_289_839" x1="43.7169" y1="39.0004" x2="53.8037" y2="40.4836" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint17_linear_289_839" x1="28.6837" y1="34.0615" x2="53.2246" y2="37.6673" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint18_linear_289_839" x1="33.8113" y1="38.5259" x2="38.1489" y2="39.1637" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint19_linear_289_839" x1="48.2781" y1="24.0593" x2="52.6157" y2="24.6972" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint20_linear_289_839" x1="-0.932115" y1="26.2886" x2="9.00328" y2="26.6176" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint21_linear_289_839" x1="4.5271" y1="4.58801" x2="8.32555" y2="6.50387" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint22_linear_289_839" x1="6.29921" y1="8.37463" x2="9.07596" y2="9.27702" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint23_linear_289_839" x1="4.5271" y1="12.1612" x2="8.32555" y2="14.0771" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint24_linear_289_839" x1="6.29921" y1="15.9481" x2="9.07596" y2="16.8505" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint25_linear_289_839" x1="4.5271" y1="19.7347" x2="8.32555" y2="21.6506" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint26_linear_289_839" x1="6.29917" y1="23.5214" x2="9.07624" y2="24.424" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint27_linear_289_839" x1="4.5271" y1="27.308" x2="8.32555" y2="29.2238" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint28_linear_289_839" x1="6.29921" y1="31.0946" x2="9.07596" y2="31.997" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint29_linear_289_839" x1="4.5271" y1="34.8946" x2="8.32555" y2="36.8105" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                    <linearGradient id="paint30_linear_289_839" x1="6.29921" y1="38.6813" x2="9.07596" y2="39.5837" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <a class="link-over" href="{{ route('service') }}"></a>
                    </div>
                    <!-- single -service end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <!-- single -service three -->
                    <div class="service-single-three">
                        <a href="{{ route('service') }}">
                            <h5 class="title">Savings & Investment</h5>
                        </a>
                        <p class="disc">Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web.</p>
                        <div class="icon">
                            <svg width="60" height="54" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_42_33)">
                                    <path d="M10.7188 3.28125C10.4169 3.28125 10.1719 3.52625 10.1719 3.82812C10.1719 4.13 10.4169 4.375 10.7188 4.375C11.0206 4.375 11.2656 4.13 11.2656 3.82812C11.2656 3.52625 11.0206 3.28125 10.7188 3.28125Z" fill="black" />
                                    <path d="M13.9998 7.65625C13.6983 7.65625 13.4529 7.41092 13.4529 7.10938C13.4529 6.80783 13.6983 6.5625 13.9998 6.5625C14.1935 6.5625 14.398 6.66132 14.5913 6.84835C14.8084 7.05841 15.1545 7.05266 15.3646 6.83566C15.5746 6.61861 15.5689 6.27238 15.3519 6.06233C15.0744 5.79376 14.7967 5.64184 14.5467 5.55893V4.92188C14.5467 4.61984 14.3018 4.375 13.9998 4.375C13.6978 4.375 13.4529 4.61984 13.4529 4.92188V5.56281C12.8164 5.78856 12.3592 6.39641 12.3592 7.10938C12.3592 8.01402 13.0952 8.75 13.9998 8.75C14.3014 8.75 14.5467 8.99533 14.5467 9.29688C14.5467 9.59842 14.3014 9.84375 13.9998 9.84375C13.7662 9.84375 13.514 9.6968 13.2897 9.43004C13.0954 9.19882 12.7504 9.16902 12.5192 9.36338C12.288 9.55773 12.2582 9.9027 12.4525 10.1339C12.7448 10.4816 13.0886 10.7239 13.4529 10.8461V11.4844C13.4529 11.7864 13.6978 12.0312 13.9998 12.0312C14.3018 12.0312 14.5467 11.7864 14.5467 11.4844V10.8434C15.1832 10.6177 15.6404 10.0098 15.6404 9.29688C15.6404 8.39223 14.9044 7.65625 13.9998 7.65625Z" fill="black" />
                                    <path d="M25.8125 7.98438C24.6063 7.98438 23.625 8.96569 23.625 10.1719V14.0695C22.8985 13.8824 22.0969 14.0756 21.5315 14.6409L17.8639 18.3085C17.3471 18.8246 17.0625 19.5115 17.0625 20.2426V23.4609H16.5156C16.2136 23.4609 15.9688 23.7058 15.9688 24.0078V27.4531C15.9688 27.7552 16.2136 28 16.5156 28H24.1719C24.4739 28 24.7188 27.7552 24.7188 27.4531V24.0078C24.7188 23.7058 24.4739 23.4609 24.1719 23.4609H23.625V23.2028C23.625 23.059 23.6834 22.9181 23.7853 22.8162L27.1989 19.4026C27.7155 18.886 28 18.1992 28 17.4688V10.1719C28 8.96569 27.0187 7.98438 25.8125 7.98438ZM23.625 26.9062H17.0625V24.5547H23.625V26.9062ZM26.9062 17.4688C26.9062 17.9071 26.7355 18.3192 26.4255 18.6292L23.0119 22.0428C22.7064 22.3483 22.5312 22.7711 22.5312 23.2028V23.4609H18.1562V20.2426C18.1562 19.8039 18.3269 19.3919 18.637 19.0822L22.3049 15.4143C22.7154 15.0037 23.3748 14.9853 23.8061 15.3723C23.8092 15.375 23.8123 15.3778 23.8155 15.3805C23.8279 15.3911 23.8396 15.4026 23.8515 15.4144C24.0581 15.6209 24.1719 15.8954 24.1719 16.1875C24.1719 16.4796 24.0581 16.7541 23.8514 16.9607L21.1339 19.6781C20.9204 19.8917 20.9204 20.238 21.1339 20.4516C21.3475 20.6651 21.6937 20.6652 21.9074 20.4516L24.6247 17.7343C25.038 17.3212 25.2656 16.7719 25.2656 16.1875C25.2656 15.6494 25.0721 15.1412 24.7188 14.7416V10.1719C24.7188 9.56878 25.2094 9.07812 25.8125 9.07812C26.4156 9.07812 26.9062 9.56878 26.9062 10.1719V17.4688Z" fill="black" />
                                    <path d="M11.4844 23.4609H10.9375V20.2426C10.9375 19.5115 10.6529 18.8246 10.1364 18.3088L6.46855 14.6409C5.90313 14.0755 5.10147 13.8823 4.375 14.0695V10.1719C4.375 8.96569 3.39369 7.98438 2.1875 7.98438C0.981313 7.98438 0 8.96569 0 10.1719V17.4688C0 18.1992 0.284484 18.886 0.801062 19.4026L4.21466 22.8162C4.31659 22.9181 4.375 23.059 4.375 23.2028V23.4609H3.82812C3.52614 23.4609 3.28125 23.7058 3.28125 24.0078V27.4531C3.28125 27.7552 3.52614 28 3.82812 28H11.4844C11.7864 28 12.0312 27.7552 12.0312 27.4531V24.0078C12.0312 23.7058 11.7864 23.4609 11.4844 23.4609ZM1.57451 18.6293C1.26448 18.3192 1.09375 17.9071 1.09375 17.4688V10.1719C1.09375 9.56878 1.58441 9.07812 2.1875 9.07812C2.79059 9.07812 3.28125 9.56878 3.28125 10.1719V14.7415C2.92786 15.1412 2.73438 15.6493 2.73438 16.1875C2.73438 16.7719 2.96204 17.3212 3.37526 17.7341L6.10963 20.4685C6.32324 20.682 6.66941 20.682 6.88308 20.4685C7.09663 20.2549 7.09663 19.9087 6.88308 19.695L4.14854 16.9605C3.94193 16.7541 3.82812 16.4796 3.82812 16.1875C3.82812 15.8954 3.94193 15.6209 4.14838 15.4145C4.1603 15.4026 4.17205 15.3911 4.18447 15.3805L4.19388 15.3723C4.62509 14.9853 5.28456 15.0038 5.69505 15.4143L9.36321 19.0824C9.67307 19.3919 9.84369 19.8038 9.84369 20.2425V23.4609H5.4687V23.2028C5.46875 22.7711 5.29359 22.3483 4.9881 22.0428L1.57451 18.6293ZM10.9375 26.9062H4.375V24.5547H10.9375V26.9062Z" fill="black" />
                                    <path d="M14 0C9.4768 0 5.79688 3.67992 5.79688 8.20312C5.79688 12.7263 9.4768 16.4062 14 16.4062C18.5232 16.4062 22.2031 12.7263 22.2031 8.20312C22.2031 3.67992 18.5232 0 14 0ZM14 15.3125C10.0798 15.3125 6.89062 12.1232 6.89062 8.20312C6.89062 4.28302 10.0798 1.09375 14 1.09375C17.9202 1.09375 21.1094 4.28302 21.1094 8.20312C21.1094 12.1232 17.9202 15.3125 14 15.3125Z" fill="black" />
                                    <path d="M17.7764 3.52018C16.3534 2.37119 14.4909 1.93785 12.6674 2.331C12.3722 2.39465 12.1844 2.68559 12.2481 2.98085C12.3117 3.27605 12.6027 3.46363 12.8979 3.40014C14.3969 3.07694 15.9246 3.43082 17.0894 4.37112C18.2539 5.31147 18.9219 6.70813 18.9219 8.20312C18.9219 10.917 16.7139 13.125 14 13.125C11.2861 13.125 9.07812 10.917 9.07812 8.20312C9.07812 7.39244 9.27937 6.58886 9.66011 5.87934C9.8029 5.61323 9.70293 5.28172 9.43682 5.13887C9.17066 4.99603 8.83909 5.09605 8.69635 5.36216C8.23058 6.23022 7.98438 7.21257 7.98438 8.20312C7.98438 11.5201 10.683 14.2187 14 14.2187C17.317 14.2187 20.0156 11.5201 20.0156 8.20312C20.0156 6.37596 19.1995 4.66911 17.7764 3.52018Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_42_33">
                                        <rect width="28" height="28" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <a class="link-over" href="{{ route('service') }}"></a>
                    </div>
                    <!-- single -service end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <!-- single -service three -->
                    <div class="service-single-three">
                        <a href="{{ route('service') }}">
                            <h5 class="title">Business Marketing</h5>
                        </a>
                        <p class="disc">Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web.</p>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="48" viewBox="0 0 54 48" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M48.364 43.5927H1.61891V45.7481H48.364V43.5927ZM5.83173 42.1749H19.4094V10.0912L5.83173 12.6378V42.1749ZM26.9265 12.6657H24.5351V15.0572H26.9265V12.6657ZM23.8261 11.2478H27.6356C27.8237 11.2478 28.004 11.3225 28.137 11.4554C28.2699 11.5884 28.3446 11.7687 28.3446 11.9568V15.7661C28.3446 15.9542 28.2699 16.1345 28.1369 16.2674C28.004 16.4003 27.8237 16.475 27.6356 16.475H23.8261C23.6381 16.475 23.4578 16.4003 23.3249 16.2674C23.1919 16.1345 23.1172 15.9542 23.1172 15.7661V11.9568C23.1172 11.8637 23.1355 11.7715 23.1711 11.6855C23.2068 11.5994 23.259 11.5213 23.3248 11.4554C23.3907 11.3896 23.4688 11.3374 23.5548 11.3018C23.6408 11.2661 23.733 11.2478 23.8261 11.2478ZM26.9265 19.4068H24.5351V21.7982H26.9265V19.4068ZM23.8261 17.9889H27.6356C27.8237 17.9889 28.004 18.0636 28.137 18.1965C28.2699 18.3295 28.3446 18.5098 28.3446 18.6978V22.5071C28.3446 22.6952 28.2699 22.8755 28.137 23.0084C28.004 23.1414 27.8237 23.2161 27.6356 23.2161H23.8261C23.733 23.2161 23.6408 23.1978 23.5548 23.1621C23.4688 23.1265 23.3907 23.0743 23.3248 23.0084C23.259 22.9426 23.2068 22.8645 23.1711 22.7784C23.1355 22.6924 23.1172 22.6002 23.1172 22.5071V18.6978C23.1172 18.6047 23.1355 18.5126 23.1711 18.4265C23.2068 18.3405 23.259 18.2624 23.3248 18.1965C23.3907 18.1307 23.4688 18.0785 23.5548 18.0428C23.6408 18.0072 23.733 17.9889 23.8261 17.9889ZM26.9265 26.1478H24.5351V28.5392H26.9265V26.1478ZM23.8261 24.73H27.6356C27.8237 24.73 28.004 24.8046 28.137 24.9376C28.2699 25.0706 28.3446 25.2509 28.3446 25.4389V29.2484C28.3446 29.4364 28.2699 29.6167 28.1369 29.7497C28.004 29.8826 27.8237 29.9573 27.6356 29.9573H23.8261C23.6381 29.9573 23.4578 29.8826 23.3249 29.7497C23.1919 29.6167 23.1172 29.4364 23.1172 29.2484V25.4389C23.1172 25.3458 23.1355 25.2536 23.1711 25.1676C23.2068 25.0816 23.259 25.0034 23.3248 24.9376C23.3907 24.8718 23.4688 24.8195 23.5548 24.7839C23.6408 24.7483 23.733 24.73 23.8261 24.73ZM33.4864 28.5392V26.1478H31.095V28.5392H33.4864ZM26.9265 32.8888H24.5351V35.2802H26.9265V32.8888ZM23.8261 31.4708H27.6356C27.8237 31.4708 28.004 31.5455 28.137 31.6785C28.2699 31.8114 28.3446 31.9918 28.3446 32.1798V35.9891C28.3446 36.1771 28.2699 36.3574 28.137 36.4904C28.004 36.6233 27.8237 36.698 27.6356 36.698H23.8261C23.733 36.698 23.6408 36.6797 23.5548 36.6441C23.4688 36.6084 23.3907 36.5562 23.3248 36.4904C23.259 36.4245 23.2068 36.3464 23.1711 36.2604C23.1355 36.1744 23.1172 36.0822 23.1172 35.9891V32.1799C23.1172 31.9919 23.1919 31.8115 23.3248 31.6786C23.4578 31.5456 23.6381 31.4709 23.8261 31.4709V31.4708ZM33.4864 32.8888H31.095V35.2802H33.4864V32.8888ZM30.3861 31.4708H34.1949C34.383 31.4708 34.5633 31.5455 34.6962 31.6785C34.8292 31.8114 34.9039 31.9918 34.9039 32.1798V35.9891C34.9039 36.1771 34.8292 36.3574 34.6962 36.4904C34.5633 36.6233 34.383 36.698 34.1949 36.698H30.3861C30.1981 36.698 30.0177 36.6233 29.8848 36.4904C29.7518 36.3574 29.6771 36.1771 29.6771 35.9891V32.1799C29.6771 31.9919 29.7518 31.8115 29.8848 31.6786C30.0177 31.5456 30.1981 31.4709 30.3861 31.4709V31.4708ZM9.11947 14.9402H15.7121C15.9001 14.9402 16.0804 15.0149 16.2134 15.1478C16.3463 15.2808 16.421 15.4611 16.421 15.6492V19.4584C16.421 19.5515 16.4027 19.6437 16.3671 19.7298C16.3314 19.8158 16.2792 19.8939 16.2134 19.9598C16.1475 20.0256 16.0694 20.0778 15.9834 20.1134C15.8974 20.1491 15.8052 20.1674 15.7121 20.1674H9.11947C8.93146 20.1674 8.75115 20.0927 8.61822 19.9597C8.48528 19.8268 8.4106 19.6465 8.4106 19.4584V15.6492C8.4106 15.4612 8.48528 15.2808 8.61822 15.1479C8.75115 15.0149 8.93146 14.9402 9.11947 14.9402ZM11.7067 18.7491H9.82845V16.358H11.7067V18.7491ZM13.1245 16.3577H15.0025V18.7491H13.1245V16.358V16.3577ZM9.11947 21.4203H15.7121C15.9001 21.4203 16.0804 21.495 16.2134 21.628C16.3463 21.761 16.421 21.9413 16.421 22.1293V25.9386C16.421 26.1266 16.3463 26.3069 16.2133 26.4398C16.0804 26.5728 15.9001 26.6475 15.7121 26.6475H9.11947C8.93148 26.6474 8.75119 26.5727 8.61826 26.4398C8.48533 26.3069 8.41063 26.1266 8.4106 25.9386V22.1293C8.4106 21.9413 8.48528 21.761 8.61822 21.628C8.75115 21.4951 8.93146 21.4204 9.11947 21.4203ZM11.7067 25.2296H9.82845V22.8382H11.7067V25.2296ZM13.1245 22.8382H15.0025V25.2296H13.1245V22.8382ZM9.11947 28.1631H15.7121C15.9001 28.1631 16.0804 28.2378 16.2134 28.3707C16.3463 28.5037 16.421 28.684 16.421 28.8721V32.6814C16.421 32.8695 16.3463 33.0498 16.2133 33.1827C16.0804 33.3156 15.9001 33.3903 15.7121 33.3903H9.11947C8.93148 33.3903 8.75119 33.3156 8.61826 33.1827C8.48533 33.0497 8.41063 32.8694 8.4106 32.6814V28.8721C8.4106 28.6841 8.48528 28.5037 8.61822 28.3708C8.75115 28.2378 8.93146 28.1631 9.11947 28.1631ZM11.7067 31.9725H9.82845V29.5814H11.7067V31.9728V31.9725ZM13.1245 29.5814H15.0025V31.9728H13.1245V29.5814ZM31.5606 16.374C33.5583 9.30264 43.0795 8.32574 46.5902 14.6006C47.2485 15.7761 47.6066 17.0959 47.6329 18.4429C47.6592 19.79 47.3528 21.1227 46.7409 22.323C46.129 23.5234 45.2304 24.5542 44.1249 25.3243C43.0193 26.0944 41.7409 26.5799 40.4029 26.7377C39.0649 26.8956 37.7086 26.721 36.4541 26.2294C35.1997 25.7378 34.0859 24.9444 33.2115 23.9195C32.337 22.8945 31.7288 21.6697 31.4408 20.3535C31.1529 19.0374 31.194 17.6705 31.5606 16.374ZM37.5857 9.17501C35.9529 9.49824 34.432 10.2399 33.1719 11.3275C31.9118 12.415 30.9557 13.8111 30.3973 15.3791C29.8388 16.9471 29.6971 18.6333 29.986 20.2725C30.2749 21.9118 30.9845 23.4479 32.0453 24.7305H30.3861C30.1981 24.7305 30.0177 24.8052 29.8848 24.9382C29.7518 25.0711 29.6771 25.2515 29.6771 25.4395V29.2484C29.6771 29.4364 29.7519 29.6167 29.8848 29.7497C30.0178 29.8826 30.1981 29.9573 30.3861 29.9573H34.1949C34.3829 29.9573 34.5633 29.8826 34.6962 29.7497C34.8292 29.6167 34.9039 29.4364 34.9039 29.2484V27.0681C35.7454 27.5182 36.649 27.8409 37.5852 28.0258V42.1749H20.8273V9.23872C20.8272 9.1302 20.8022 9.02315 20.7542 8.9258C20.7063 8.82846 20.6366 8.74341 20.5506 8.6772C20.4647 8.61098 20.3646 8.56537 20.2583 8.54387C20.1519 8.52236 20.042 8.52554 19.9371 8.55315L16.9573 9.11208V4.01337L37.5857 1.66624V9.17445V9.17501ZM37.5857 13.2394C33.9765 14.4925 32.9914 18.1175 34.5177 21.4201C35.1974 22.6123 36.288 23.5161 37.5857 23.9627V13.2389V13.2394ZM39.0035 12.9442V24.2579C39.7833 24.3185 40.5673 24.2172 41.3061 23.9603C42.0448 23.7035 42.7226 23.2967 43.2967 22.7655C43.8707 22.2342 44.3288 21.5901 44.6421 20.8734C44.9553 20.1567 45.1171 19.383 45.1171 18.6008C45.1171 17.8186 44.9553 17.0449 44.6421 16.3282C44.3288 15.6115 43.8707 14.9673 43.2967 14.4361C42.7226 13.9049 42.0448 13.4981 41.3061 13.2412C40.5673 12.9844 39.7833 12.8831 39.0035 12.9437V12.9442ZM45.6285 15.1428C46.083 15.9551 46.373 16.849 46.4819 17.7734C46.5908 18.6978 46.5165 19.6346 46.2632 20.5302C46.0099 21.4259 45.5827 22.2629 45.0058 22.9934C44.429 23.7239 43.7139 24.3335 42.9014 24.7876C39.5014 26.6897 35.1466 25.4774 33.2555 22.059C32.8004 21.2477 32.5101 20.3546 32.4011 19.4309C32.2921 18.5071 32.3667 17.571 32.6206 16.6761C34.3474 10.563 42.585 9.70319 45.6282 15.1428H45.6285ZM45.9297 26.9253L45.4614 26.0882C44.6246 26.7587 43.6826 27.2859 42.6735 27.6486L43.1416 28.4852L45.9297 26.9253ZM48.542 31.5943L45.7539 33.1542L49.0156 38.984L51.8037 37.4241L48.542 31.5943ZM46.0226 31.3844L46.8926 30.8976L45.6607 28.6952L44.7907 29.1819L46.0226 31.3844ZM44.4485 32.265L44.7892 32.0743L43.5573 29.8719L43.2132 30.0644C43.1321 30.1095 43.0429 30.1382 42.9508 30.1488C42.8586 30.1594 42.7652 30.1518 42.676 30.1264C42.5868 30.1009 42.5034 30.0581 42.4307 30.0004C42.358 29.9428 42.2974 29.8714 42.2523 29.7903L41.2699 28.0342C40.5236 28.179 39.7627 28.2342 39.0034 28.1987V42.1749H49.0729C49.2609 42.1749 49.4412 42.2496 49.5742 42.3825C49.7071 42.5155 49.7818 42.6958 49.7818 42.8839V46.4571C49.7818 46.6451 49.7071 46.8254 49.5742 46.9584C49.4412 47.0913 49.2609 47.166 49.0729 47.166H0.910152C0.722119 47.166 0.541787 47.0913 0.408827 46.9584C0.275868 46.8254 0.201172 46.6451 0.201172 46.4571V42.8839C0.201172 42.6958 0.275868 42.5155 0.408827 42.3825C0.541787 42.2496 0.722119 42.1749 0.910152 42.1749H4.41388L4.41554 12.0512C4.41561 11.8862 4.47333 11.7265 4.57872 11.5996C4.6841 11.4726 4.83052 11.3865 4.99267 11.3561L15.5395 9.378V3.38175C15.5395 3.20025 15.6091 3.02567 15.734 2.89398C15.8589 2.76229 16.0296 2.68351 16.2108 2.67388L38.2171 0.170032C38.4036 0.149475 38.5907 0.203863 38.7371 0.321233C38.8836 0.438602 38.9774 0.609338 38.998 0.795883C38.9992 3.09075 39.0032 6.6968 39.0035 9.00387C40.9032 8.91782 42.7857 9.39737 44.4127 10.3818C46.0396 11.3662 47.338 12.8113 48.1432 14.534C48.9485 16.2567 49.2245 18.1796 48.9363 20.0592C48.6481 21.9389 47.8087 23.6908 46.5243 25.0931L47.5089 26.853C47.554 26.9341 47.5827 27.0233 47.5934 27.1155C47.604 27.2076 47.5964 27.301 47.5709 27.3902C47.5455 27.4795 47.5027 27.5628 47.445 27.6355C47.3873 27.7082 47.3159 27.7688 47.2348 27.8139L46.8941 28.0046L48.126 30.207L48.4701 30.0146C48.5512 29.9695 48.6404 29.9408 48.7326 29.9301C48.8248 29.9195 48.9181 29.9271 49.0074 29.9526C49.0966 29.978 49.18 30.0208 49.2527 30.0785C49.3254 30.1362 49.386 30.2076 49.4311 30.2887L53.3822 37.3519C53.4273 37.4329 53.456 37.5221 53.4666 37.6143C53.4773 37.7065 53.4696 37.7999 53.4442 37.8891C53.4187 37.9783 53.376 38.0617 53.3183 38.1344C53.2606 38.2071 53.1892 38.2677 53.1081 38.3128L49.0867 40.5627C49.0056 40.6078 48.9164 40.6365 48.8242 40.6471C48.7321 40.6577 48.6387 40.6501 48.5494 40.6247C48.4602 40.5992 48.3768 40.5564 48.3041 40.4987C48.2314 40.4411 48.1708 40.3697 48.1257 40.2886L44.174 33.2254C44.129 33.1443 44.1003 33.055 44.0897 32.9628C44.0791 32.8706 44.0868 32.7772 44.1124 32.688C44.1379 32.5988 44.1807 32.5154 44.2385 32.4428C44.2962 32.3701 44.3677 32.3095 44.4488 32.2645L44.4485 32.265Z" fill="url(#paint0_linear_508_524)" />
                                <defs>
                                    <linearGradient id="paint0_linear_508_5243" x1="-5" y1="29" x2="49" y2="38" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#ED145B" />
                                        <stop offset="1" stop-color="#4A11EB" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <a class="link-over" href="{{ route('service') }}"></a>
                    </div>
                    <!-- single -service end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <div class="black-shape-bottom-service">

    </div>

    <!-- Start About Area  -->
    <div class="about-area about-style-three tmp-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/about-4.jpg') }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant">About Us</span>
                            <h2 class="title split-collab">Find out more about our <br/> business consulting</h2>
                        </div>

                        <div class="tab-section tab-style-one">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Company Goal</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Company Value</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Need Help?</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p class="description">
                                        If you don't know the answer to this question, how do you know if your product or service is working? It is one of the most basic questions
                                        that every business owner should ask himself, even before he launches his business.
                                        thumbnail
                                    </p>

                                    <div class="small-meta">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/about/about-meta.jpg') }}" alt="about-meta">
                                        </div>
                                        <div class="content">
                                            <div class="name">Jons Martin</div>
                                            <div class="designation">CEO & Founder</div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="tmp-btn btn-gradiant">Explore More</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <p class="description">
                                        If you don't know the answer to this question, how do you know if your product or service is working? It is one of the most basic questions
                                        that every business owner should ask himself, even before he launches his business.
                                        thumbnail
                                    </p>

                                    <div class="small-meta">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/about/about-meta.jpg') }}" alt="about-meta">
                                        </div>
                                        <div class="content">
                                            <div class="name">Marina barai</div>
                                            <div class="designation">Web Designer</div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="tmp-btn btn-gradiant">Explore More</a>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <p class="description">
                                        If you don't know the answer to this question, how do you know if your product or service is working? It is one of the most basic questions
                                        that every business owner should ask himself, even before he launches his business.
                                        thumbnail
                                    </p>

                                    <div class="small-meta">
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/about/about-meta.jpg') }}" alt="about-meta">
                                        </div>
                                        <div class="content">
                                            <div class="name">Jons Kary</div>
                                            <div class="designation">UI & UX Designer</div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="tmp-btn btn-gradiant">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About Area  -->

    <!-- Start Skill Area  -->
    <div class="skill-area skills-bg-color tmp-section-gap bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="skill-inner pr--30">
                        <div class="section-head pb--30  text-align-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="subtitle color-gradiant">Our Skills</span>
                            <h2 class="title">Find out more about our <br> business consulting</h2>
                        </div>
                        <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam.
                            Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac
                            odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis luctus.
                        </p>
                        <div class="row g-5" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">

                            <div class="col-lg-6">
                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">
                                            85%
                                        </span>
                                        <p class="name">Marketing</p>

                                    </div>
                                    <div class="progress bg-color-purple">
                                        <div class="progress-bar wow fadeInLeft bg-gradient-two" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">96%</span>
                                        <p class="name">Social Assistant</p>
                                    </div>
                                    <div class="progress bg-color-purple">
                                        <div class="progress-bar wow fadeInLeft bg-gradient-two" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">
                                            75%
                                        </span>
                                        <p class="name">Consulting</p>

                                    </div>
                                    <div class="progress bg-color-purple">
                                        <div class="progress-bar wow fadeInLeft bg-gradient-two" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">90%</span>
                                        <p class="name">Design & Development</p>
                                    </div>
                                    <div class="progress bg-color-purple">
                                        <div class="progress-bar bg-gradient-two wow fadeInLeft" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pl--60 pl_sm--10" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="skill-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/about-5.jpg') }}" alt="about">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Skill Area  -->


    <!-- Start Portfolio Area  -->
    <div class="portfolio-area portfolio-style-three tmp-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant">OUR PORTFOLIO</span>
                            <h2 class="title color-white split-collab">Let's Check Our Best Recent Work </h2>
                        </div>
                        <div class="btn-group">
                            <a href="{{ route('project') }}" class="tmp-btn btn-gradiant">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--10">
                <div class="col-lg-6 col-md-6 col-sm-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/potrfolio-10.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">EcoTech Innovations</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a hrprojects-details.htmlf="#" class="icon angle-roted border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-11.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">Wellness Platform</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-12.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">Powered Education</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-13.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">Alex Brands</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-14.jpg') }}" alt="business Corporate portfolio">
                        </a>
                        <div class="portfolio-tag bg-gradiant portfolio-sm-tag">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">Virtual Event</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a href="{{ route('projects-details') }}" class="icon icon--30 radius-circle border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right transform-rotate-318"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" data-sal-delay="650" data-sal="slide-up" data-sal-duration="800">
                    <div class="portfolio-inner">
                        <a href="{{ route('projects-details') }}" data-tmp-cursor="lg" data-tmp-cursor-text="View Details" class="thumbnail">
                            <img src="{{ asset('assets/images/portfolio/portfolio-15.jpg') }}" alt="corporate business">
                        </a>
                        <div class="portfolio-tag bg-gradiant">
                            <div class="content">
                                <a href="{{ route('projects-details') }}">
                                    <h3 class="name animated fadeIn">Alex Brands</h3>
                                </a>
                                <div class="designation">Financial advisory</div>
                            </div>
                            <a hrprojects-details.htmlf="#" class="icon angle-roted border-none bg-color-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Portfolio Area  -->

    <!-- Start Contact Area  -->
    <div class="contact-area-three tmp-section-gap">
        <div class="bg-shape">
            <img src="{{ asset('assets/images/cta/02.png') }}" alt="bussiness-contact">
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
                                            <button name="submit" class="tmp-btn btn-gradiant-two" type="submit" id="submit">
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

    <!-- Start Testimonial with brand Area  -->
    <div class="testimonial-with-brand bg-1 bg_image">
        <div class="testimonial-area testimonial-style-three tmp-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head">
                            <div class="section-sub-title justify-content-center">
                                <span class="subtitle color-gradiant">Clients Testimonial</span>
                            </div>
                            <h2 class="title split-collab">What clients have to say</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="tmp-testimonial-box style-three">

                            <div class="testimonial-top">
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

                                <div class="icon">
                                    <i class="fa-duotone fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="testimonial-body">
                                <p class="description">
                                    It’s incredible. it’s really wonderful. bcom has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus.
                                </p>
                            </div>

                            <div class="clint-info-wrapper">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-sm-img.png') }}" alt="Corporate Business">
                                </a>
                                <div class="client-info">
                                    <a href="#">
                                        <h5 class="title">Brooklyn Simmon</h5>
                                    </a>
                                    <span class="designation">CEO, Bribbble LLC</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="tmp-testimonial-box style-three">

                            <div class="testimonial-top">
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

                                <div class="icon">
                                    <i class="fa-duotone fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="testimonial-body">
                                <p class="description">
                                    It’s incredible. it’s really wonderful. bcom has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus.
                                </p>
                            </div>

                            <div class="clint-info-wrapper">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-sm-img-1.png') }}" alt="Corporate Business">
                                </a>
                                <div class="client-info">
                                    <a href="#">
                                        <h5 class="title">Maxciko Alex</h5>
                                    </a>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="tmp-testimonial-box style-three">

                            <div class="testimonial-top">
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

                                <div class="icon">
                                    <i class="fa-duotone fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="testimonial-body">
                                <p class="description">
                                    It’s incredible. it’s really wonderful. bcom has completely surpassed our expect. Urna porttitor rhoncus dolor purus non enim praesent at the facilisis lectus.
                                </p>
                            </div>

                            <div class="clint-info-wrapper">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-sm-img-2.png') }}" alt="Corporate Business">
                                </a>
                                <div class="client-info">
                                    <a href="#">
                                        <h5 class="title">Esther Howard</h5>
                                    </a>
                                    <span class="designation">Web Developer</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-area tmp-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-inner tmp-section-gapTop">
                            <ul class="brand-list brand-style-1 justify-content-center justify-content-lg-between">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-1.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-2.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-3.png') }}" alt="Brand Image"></a>
                                </li>

                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-4.png') }}" alt="Brand Image"></a>
                                </li>
                                <li data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                    <a href="#"><img src="{{ asset('assets/images/brand/brand-5.png') }}" alt="Brand Image"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial with brand Area  -->

    <!-- Start faq area  -->
    <div class="faq-area faq-style-two faq-bg-image-2 bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-inner">
                        <div class="faq-content">

                            <div class="vedio-play vedio-play-large">

                                <div class="vedio-icone">
                                    <a class="video-play-button play-video" href="#">
                                        <span style="border-left-color: var(--color-primary);"></span>
                                    </a>
                                    <div class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>

                            </div>

                            <!-- video icon -->

                            <!-- video icon -->

                            <div class="title">Get solutions for Business</div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End faq area  -->

    <!-- faq area start -->
    <div class="tmp-faq-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-faq">
                        <div class="shape-image">
                            <img src="{{ asset('assets/images/faq/03.png') }}" alt="business_faq">
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-5">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/faq/faq-img-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 pl--50 pl_sm--15">
                                <div class="faq-accordion faq-accordion-style-two">
                                    <div class="accordion" id="accordionExample">
                                        <div class="section-head text-align-left mb--30">
                                            <span class="subtitle color-gradiant">QUESTIONS & ANSWERS</span>
                                            <h2 class="title split-collab">Frequency asked questions?</h2>
                                        </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-inner">
                        <div class="section-head pb--30  text-align-left">
                            <span class="subtitle color-gradiant">LATEST BLOG</span>
                            <h2 class="title split-collab">Latest news & articles</h2>
                        </div>
                        <div class="btn-group">
                            <a href="#" class="tmp-btn btn-gradiant">View All Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
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

                <div class="col-lg-4 col-md-6 col-sm-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
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

    <!-- Start Quick contact area  -->
    <div class="quick-action-area quick-action-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quick-action-inner">
                        <div class="quick-action-left">
                            <p class="description">
                                Bizper is proud to serve you 24/7. Just Call Us when you need
                            </p>
                        </div>
                        <div class="quick-action-right">
                            <div class="contact">
                                <a class="btn-rounded mid-btn" href="tel:+4733378901">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </a>
                                <div class="content">
                                    <h3 class="title">Contact us to</h3>
                                    <a class="ph-number" href="tel:+4733378901">+01234568906</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-top">
            <div class="thumbnail">
                <img src="{{ asset('assets/images/quick-action/1.png') }}" alt="dot">
            </div>
        </div>
        <div class="carly-line">
            <div class="thumbnail">
                <img src="{{ asset('assets/images/quick-action/carly-line.png') }}" alt="">
            </div>
        </div>
        <div class="dot-bottom">
            <div class="thumbnail">
                <img src="{{ asset('assets/images/quick-action/1.png') }}" alt="dot">
            </div>
        </div>
        <div class="shape">
            <div class="thumbnail">
                <img src="{{ asset('assets/images/quick-action//quick-action-1.png') }}" alt="dot">
            </div>
        </div>
        <div class="shape-2">
            <div class="thumbnail">
                <img src="{{ asset('assets/images/quick-action/shape-2.png') }}" alt="dot">
            </div>
        </div>
    </div>
    <!-- End Quick contact area  -->



    <!-- Start Footer Area  -->
    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
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
    <div class="copyright-area-one">
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
    <!-- End Footer Area  -->


@endsection