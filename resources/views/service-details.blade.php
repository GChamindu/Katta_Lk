@extends('layouts.layout1')

@php
    $bodyClass='service-details';
    $title = 'Service Details';
    $subtitle = 'Service Details';
@endphp


@section('content')

    <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tmp-large-service-detials">
                        <img src="{{ asset('assets/images/services/details-large.png') }}" alt="corporate_business_details">
                    </div>
                    <!-- single service details component -->
                    <div class="single-service-details-component mt--40">
                        <h2 class="title split-collab">Finance & strategy service</h2>
                        <p class="disc mb--20">
                            As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting. or lipsum as it is sometimes known, is dummy text used in laying out print, grap or web designs. USA champions professionalism in the cleaning industry by providing top-quality cleaning and related services that meet and exceed the expectations of today’s demanding corporate, office and ware house clients…courteously, responsively. Lorem ipsum dolor sit amet.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- chck-area-wrapper -->
                                <div class="check-service-wrapper">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Instant Business Growth</p>
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Expert Team Members</p>
                                    </div>
                                </div>
                                <!-- chck-area-wrapper end -->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!-- chck-area-wrapper -->
                                <div class="check-service-wrapper">
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>Easy Customer Service</p>
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        <p>24/7 Quality Service</p>
                                    </div>
                                </div>
                                <!-- chck-area-wrapper end -->
                            </div>
                        </div>
                    </div>
                    <!-- single service details component end -->
                    <div class="row g-5 mt--10">
                        <div class="col-lg-6 col-md-6">
                            <!-- single service large-details -->
                            <div class="single-service-details">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/services/details-1.png') }}" alt="corporate_business_details">
                                </div>
                                <div class="information">
                                    <h6 class="title">Business Growth</h6>
                                    <p class="disc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                            <!-- single service large-details end -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- single service large-details -->
                            <div class="single-service-details">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/services/details-2.png') }}" alt="corporate_business_details">
                                </div>
                                <div class="information">
                                    <h6 class="title">Financial planning</h6>
                                    <p class="disc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                            <!-- single service large-details end -->
                        </div>
                    </div>
                    <div class="row g-5 mt--10">
                        <div class="col-lg-12">
                            <h2 class="title split-collab">Working challenge</h2>
                            <p class="disc mb--20">
                                As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting. or lipsum as it is sometimes known, is dummy text used in laying out print, grap or web designs. USA champions professionalism in the cleaning industry by providing top-quality cleaning and related services that meet and exceed .
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="thumbnail-service-details">
                                <img src="{{ asset('assets/images/services/details-thumb-1.png') }}" alt="Corporate_Business">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-detials-thumb-details">
                                <p class="itelic disc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore.
                                </p>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>The master-builder of human happiness</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Awards Winning Business Comapny</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Firebase Authentication & Database</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Business & Consulting Agency</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Expert Team Members</p>
                                </div>
                                <div class="single-check">
                                    <i class="fa-light fa-circle-check"></i>
                                    <p>Business & Consulting Agency</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="disc">
                                As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting. or lipsum as it is sometimes known, is dummy text used in laying out print, grap or web designs. USA champions professionalism in the cleaning industry by providing top-quality cleaning and related services that meet and exceed .
                            </p>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <div class="col-lg-12">
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
                <div class="col-lg-4 pl--50 pl_md--15 pl_sm--10 mt_md--50 mt_sm--50">
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
                        <!-- single bar -->
                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title">Need any help?</h3>
                                <p class="disc">
                                    We are here to help our customer any time. You can call on 24/7 To Answer Your Question.
                                </p>
                                <a href="#">+(012)3456789</a>
                            </div>
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar brochure">
                            <div class="header">
                                <h3 class="title">Brochure</h3>
                            </div>
                            <div class="body">
                                <!-- single category -->
                                <a href="#" class="single-brocher">
                                    <p>Investment Policy</p>
                                    <i class="fa-light fa-cloud-arrow-down"></i>
                                </a>
                                <!-- single category end -->
                                <!-- single category -->
                                <a href="#" class="single-brocher">
                                    <p>Company Details</p>
                                    <i class="fa-light fa-note"></i>
                                </a>
                                <!-- single category end -->
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