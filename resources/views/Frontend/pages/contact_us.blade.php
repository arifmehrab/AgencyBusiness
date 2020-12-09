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
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Head Office </strong>
                                66 Broklyn Street, New York. USA
                            </li>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong>Bangladesh Office</strong>
                                Dhanmondi Dhaka 1209 Bangladesh
                            </li>
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <strong>Email address</strong>
                                <a href="mailto:topupsoft@gmail.com">topupsoft@gmail.com</a>
                            </li>
                            <li>
                                <span class="icon fab fa-whatsapp-square"></span>
                                <strong>Call Whatsapp</strong>
                                <a href="https://api.whatsapp.com/send?phone=+8801827924326">8801827924326</a>
                            </li>
                            <li>
                                <span class="icon fab fa-skype"></span>
                                <strong>Skype</strong>
                                <a href="skype:arifmehrab11?chat">Skype</a>
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
                            <form method="POST" action="{{ route('contact.msg.store') }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Your Name"
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
                                            <input type="text" name="phone_number" value="" placeholder="Phone Number"
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
                                            <textarea name="message" placeholder="HOW CAN WE HELP?"
                                                ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Get Free Quote</span>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.391860026811!2d90.36472489537987!3d23.754587124435368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ad2a40a6c1%3A0x61276bcdb2c3b5b3!2sDhaka%201209!5e0!3m2!1sen!2sbd!4v1607214066120!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
@endsection