@extends('layouts.layout1')

@php
    $title = 'Our Service';
    $subtitle = 'Service-01';
@endphp


@section('content')

<div class="tmp-services-area services-style--1 background-image-services bg_image tmp-section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Business Consulting services">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our provided services</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/services/services-icon-1.png') }}" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="{{ route('service-details') }}">
                                    <h5 class="title">Investment Advisory</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="{{ route('service-details') }}" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>
                            <div class="number">
                                <img src="{{ asset('assets/images/services/icon-01.png') }}" alt="Business Consulting number">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/services/services-icon-2.png') }}" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="{{ route('service-details') }}">
                                    <h5 class="title">Financial Planning</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="{{ route('service-details') }}" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>

                            <div class="number">
                                <img src="{{ asset('assets/images/services/icon-02.png') }}" alt="Business Consulting number">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one">
                        <div class="services-inner  with-shadow card-bg-color">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/services/services-icon-3.png') }}" alt="Business consulting services">
                            </div>
                            <div class="services-content">
                                <a href="{{ route('service-details') }}">
                                    <h5 class="title">Business Consulting</h5>
                                </a>
                                <p class="desctiption">
                                    Dramatically engage top-line web services vis-a-vis cutting-edge proactively envisioned multimer Dramatically top-line web services.
                                </p>

                                <a href="{{ route('service-details') }}" class="icon angle-roted">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>

                            <div class="number">
                                <img src="{{ asset('assets/images/services/icon-03.png') }}" alt="Business Consulting number">
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


    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gap @@bg-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">OUR work process</span>
                        </div>
                        <h2 class="title split-collab">How our services work</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-1.png') }}" alt="Business consulting services"></a>
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-2.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>02</span>
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                <a href="#"><img src="{{ asset('assets/images/services/services-round-3.png') }}" alt="Business consulting services"></a>
                                <div class="number-bg-round">
                                    <span>03</span>
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

            </div>
        </div>
    </div>
    <!-- Tmp Servisec Processs Area Two End -->

    <div class="work-area work-style-one tmp-section-gap">
        <div class="container">

            <div class="row">
                <div class="work-top-inner">
                    <div class="section-head pb-0 section-head-one-side text-align-left">
                        <div class="section-sub-title color-white ">
                            <span class="subtitle">WHY CHOOSE US</span>
                        </div>
                        <h2 class="title color-white split-collab">We working for you to build <br> your business fast</h2>
                    </div>

                    <div class="single-work-top">
                        <h2 class="title">4M +</h2>
                        <div class="sub-title">Business Using Stripe</div>
                    </div>

                    <div class="scater-line">
                        <img src="{{ asset('assets/images/work/shape.png') }}" alt="">
                    </div>
                </div>
            </div>



            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="inner">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/work/work-1.jpg') }}" alt="Business Consulting">
                            </div>
                        </a>


                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-work style-one mt--15">
                        <a href="#">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title animated fadeIn">Business Consulting</h3>
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
                <div class="col-lg-3">
                    <div class="single-work style-one">
                        <a href="#" class="cart-box cart-box-1">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title animated fadeIn">Strategic Planning</h3>
                            </div>

                        </a>

                    </div>

                    <div class="single-work style-one mt--30">
                        <a href="#">
                            <div class="work-inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/work/consultation.png') }}" alt="Business Consulting">
                                </div>
                                <h3 class="title animated fadeIn">IT Management</h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tmp FAQ area Start  -->
    <div class="faq-area faq-bg-image bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}" alt="Corporate_service">
                            <span class="subtitle">QUESTION AND ANSWERS</span>
                        </div>
                        <h2 class="title split-collab">Frequency asked questions</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/faq/faq-1.png') }}" alt="Business Consulting FAQ">
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

@endsection