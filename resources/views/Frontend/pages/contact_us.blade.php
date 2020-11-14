@extends('layouts.app')
@section('title', 'contact | us')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend') }}/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Get Quote Section-->
<section class="get-quote-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We are always here to help you<span class="dot">.</span></h2>
                    </div>
                    <div class="text">There are many variatns of passages the majority have suffered alteration
                        in some foor randomised words believable.</div>
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Visit Us</strong>
                                66 Broklyn Street, New York. USA
                            </li>
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <strong>Email address</strong>
                                <a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a>
                            </li>
                            <li>
                                <span class="icon flaticon-call"></span>
                                <strong>Call now</strong>
                                <a href="tel:666888000">666 888 000</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="form-box">
                        <div class="default-form">
                            <form id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="username" value="" placeholder="Your Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="email" name="email" value=""
                                                placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="Phone Number"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="subject" value="" placeholder="Subject"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Write Message"
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Send message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="map-section">
    <div class="auto-container">
        <div class="map-container">
            <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230899.1642407818!2d145.06327708904033!3d-37.792102974783376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65cd0db468a97%3A0xb61fde84306fc38a!2sMelbourne%20Zoo!5e0!3m2!1sen!2s!4v1592307685926!5m2!1sen!2s"
                        style="border:0;" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
@endsection