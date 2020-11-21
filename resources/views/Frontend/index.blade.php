@extends('layouts.app')
@section('title', 'home | page')
@section('page_content')

<!-- Banner Section -->
<section class="banner-section banner-one">

    <div class="banner-carousel owl-theme owl-carousel">
    @foreach($sliders as $row)
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{ asset('public/Backend/assets/media/slider/'.$row->slider_image) }});"></div>
            <div class="left-top-line"></div>
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">{{ $row->title_one }}</div>
                            <h1>{{ $row->title_two }}</h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="{{ $row->button_url }}">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">{{ $row->button_name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
<!--End Banner Section -->

<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title Block-->
            <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>{{ $setting->service_title }}<span class="dot">.</span></h2>
                        <div class="lower-text">{{ $setting->service_sub_title }}</div>
                    </div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-responsive"></span></div>
                    <h6><a href="web-development.html">Website <br>Development</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-computer"></span></div>
                    <h6><a href="graphic-designing.html">graphic designing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                    <h6><a href="digital-marketing.html">digital marketing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-development"></span></div>
                    <h6><a href="seo.html">seo & content writing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    <h6><a href="app-development.html">App Development</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="900ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-wordpress"></span></div>
                    <h6><a href="ui-designing.html">Ui/UX designing</a></h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Features Section-->
<section class="features-section-two">
    <div class="auto-container">
        <div class="content-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-5 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>{{ $setting->home_core_title }}<span class="dot">.</span></h2>
                        </div>
                        <div class="features">
                            @foreach($homeCorePetures as $key => $row)
                            <div class="feature">
                                <div class="count"><span>0{{ $key+1 }}</span></div>
                                <h5>{{ $row->core_title }}</h5>
                                <div class="sub-text">{{ $row->short_description }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/Backend/assets/media/logo/'.$setting->home_core_image) }}" alt="{{ $setting->home_core_image }}">
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <h5>{{ $setting->home_core_image_title }}</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funfacts Section -->
<section class="facts-section alternate">
    <div class="auto-container">
        <div class="inner-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">
                    @foreach($countDowns as $row)
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="{{ $row->count_number }}">0</span>
                                </div>
                                <div class="counter-title">{{ $row->name }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!--Testimonials Section-->
<section class="testimonials-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Customer feedbacks <span class="dot">.</span></h2>
        </div>
        <div class="carousel-box">
            <div class="testimonials-carousel owl-theme owl-carousel">
                @foreach($customerReviews as $row)
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Backend/assets/media/review/'.$row->customer_image) }}"
                                        alt=""></a></div>
                            <div class="name">{{ $row->customer_name }}</div>
                        </div>
                        <div class="text">{{ $row->customer_review }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Latest news & articles<span class="dot">.</span></h2>
        </div>

        <div class="row clearfix">
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend/') }}/images/resource/news-1.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend/') }}/images/resource/news-2.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">Delivering the best digital marketing</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend/') }}/images/resource/news-3.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">Introducing the latest linoor features</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
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
                <div class="sec-title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2>Some of the clients we have worked with <span class="dot">.</span></h2>
                </div>
            </div>

            <div class="logo-col col-xl-7 col-lg-12 col-md-12">
                <div class="row clearfix">
                    @foreach($clients as $row)
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="{{ $row->brand_url }}"><img src="{{ asset('public/Backend/assets/media/brand/'.$row->brand_logo) }}" alt="{{ $row->brand_logo }}"></a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
@endsection