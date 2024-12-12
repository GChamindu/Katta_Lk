@extends('layouts.layout2')

{{-- @php
    $title = 'Appoinment';
    $subtitle = 'Appoinment';
@endphp --}}


@section('content')

     <!-- Start Contact Form Area  -->
     {{-- <div class="contact-area contact-bg-1 bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <h2 class="title">Get free marketing
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
                                        <a class="contact-here" href="tel:+4733378901">+123 34598768</a>
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
                                        <a class="contact-here" href="mailto:webmaster@example.com">info@uibundle.com</a>
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
    </div> --}}
    <!-- Start Contact Form Area  -->












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

    <x-sidebar/>


    <div class="contact-area contact-bg-1 bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <h2 class="title">Get free marketing
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
                                        <a class="contact-here" href="tel:+4733378901">+123 34598768</a>
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
                                        <a class="contact-here" href="mailto:webmaster@example.com">info@uibundle.com</a>
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


                        {{-- <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div> --}}


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

                                {{-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="input-field" placeholder="How can we help" name="contact-message" id="contact-message" required></textarea>
                                    </div>
                                </div> --}}

                                <div class="col-lg-12">
                                    <div class="form-submit-group">
                                        <p class="check-condition">
                                            <input class="check-box" type="checkbox" id="terms" name="terms">
                                            <label class="condition" for="terms">I agree to the <span>terms</span> and <span>conditions</span></label>
                                        </p>
                                        <button name="submit" class="tmp-btn btn-secondary" type="submit" id="submit">
                                            <span class="submit-wrapper">
                                                <span class="btn-text">Login</span>
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





@endsection
