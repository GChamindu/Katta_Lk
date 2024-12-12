@extends('layouts.layout1')

@php
    $title = '';
    $subtitle = '';
@endphp


@section('content')

   <!-- Start Team Details Area  -->
   <div class="team-details-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="team-details-thumb">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/team-details/team-1.jpg') }}" alt="team">
                        </div>
                        <div class="content">
                            <div class="author-info">
                                <h4 class="name">Richerd Joseph</h4>
                                <span class="designation">CEO & Founder</span>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </p>

                            <div class="team-details-social">
                                <ul class="social-icons solid-social-icons rounded-social-icons">
                                    <li><a class="bg-transparent border-one-primary" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a class="bg-transparent border-one-primary" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a class="bg-transparent border-one-primary" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a class="bg-transparent border-one-primary" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a class="bg-transparent border-one-primary" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-details-content">
                        <div class="personal-info">
                            <h3 class="title">Personal Info</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>


                            <div class="all-info">
                                <div class="info-left">
                                    <div class="single-info">
                                        <span>Phone:</span><a href="#">+256 3254 2654</a>
                                    </div>
                                    <div class="single-info">
                                        <span>E-mail:</span><a href="#">supportjony@gmail.com</a>
                                    </div>
                                </div>

                                <div class="info-right">
                                    <div class="single-info">
                                        <span>Experiences:</span><a href="#">25+ years</a>
                                    </div>
                                    <div class="single-info">
                                        <span>Address:</span><a href="#"> 2972 Westheimer Rd, Illinois 85486</a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="personal-experience">
                            <h3 class="title">Personal Experience</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                            </p>



                            <div class="progress-wrapper">
                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">
                                            80%
                                        </span>
                                        <p class="name">Marketing</p>
                                    </div>
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg--primary wow fadeInLeft bg--primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">
                                            90%
                                        </span>
                                        <p class="name">Consulting</p>

                                    </div>
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg--primary wow fadeInLeft bg--primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>


                                <div class="single-progress-area progress-style-two">
                                    <div class="progress-top">
                                        <span class="parcent">
                                            95%
                                        </span>
                                        <p class="name">Social Assistant</p>

                                    </div>
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg--primary wow fadeInLeft bg--primary" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Details Area  -->
    
@endsection