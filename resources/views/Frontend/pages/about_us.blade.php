@extends('layouts.app')
@section('title', 'about-us')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend') }}/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Agency Section-->
<section class="agency-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>Best design Agency <br>solutions <span class="dot">.</span></h2>
                    </div>

                    <!--Default Tabs-->
                    <div class="default-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                            <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                            <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but
                                        the majority have in some form, by injected humou or words which don't
                                        look even slightly believable. There are many variations of but the
                                        majority have suffered.</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-2">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but
                                        the majority have in some form, by injected humou or words which don't
                                        look even slightly believable. There are many variations of but the
                                        majority have suffered.</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-3">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but
                                        the majority have in some form, by injected humou or words which don't
                                        look even slightly believable. There are many variations of but the
                                        majority have suffered.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="text">There are many variations of passages of available but the majority have
                        suffered alteration in some form, by injected humou or randomised words which don't look
                        even slightly believable.</div>
                    <div class="featured-block-two clearfix">
                        <div class="image"><img src="{{ asset('public/Frontend') }}/images/resource/featured-image-6.jpg" alt=""></div>
                        <div class="text">
                            <ul>
                                <li>Nsectetur cing elit.</li>
                                <li>Suspe ndisse suscipit sagittis leo.</li>
                                <li>Entum estibulum dignissim posuere.</li>
                                <li>If you are going to use a passage.</li>
                                <li>Lorem Ipsum on the tend to repeat.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Meet the expert team<span class="dot">.</span></h2>
        </div>
        <div class="row clearfix">
            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <a href="about.html"><img src="{{ asset('public/Frontend') }}/images/resource/team-2.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Jessica Brown</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <a href="about.html"><img src="{{ asset('public/Frontend') }}/images/resource/team-3.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Mike Hardson</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <a href="about.html"><img src="{{ asset('public/Frontend') }}/images/resource/team-4.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Rose ford</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sponsors Section-->
<section class="sponsors-section-two">
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="row clearfix">
            <div class="title-col col-xl-5 col-lg-12 col-md-12">
                <div class="sec-title">
                    <h2>Some of the clients we have worked with <span class="dot">.</span></h2>
                </div>
            </div>

            <div class="logo-col col-xl-7 col-lg-12 col-md-12">
                <div class="row clearfix">
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Frontend') }}/images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Frontend') }}/images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Frontend') }}/images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Frontend') }}/images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Frontend') }}/images/clients/2.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection