@extends('layouts.app')
@section('title', 'home | page')
@section('page_content')
<!--Search Popup-->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->


<!-- Banner Section -->
<section class="banner-section banner-one">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(images/main-slider/1.jpg);"></div>
            <div class="left-top-line"></div>
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">welcome to Linoor agency</div>
                            <h1>Smart Web <br>Design Agency</h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(images/main-slider/2.jpg);"></div>
            <div class="left-top-line"></div>
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">welcome to Linoor agency</div>
                            <h1>Smart Web <br>Design Agency</h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <h2>We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional
                            service while offering our employees the best training.</div>
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
                    <h6><a href="graphic-designing.html">graphic <br>designing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                    <h6><a href="digital-marketing.html">digital <br>marketing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-development"></span></div>
                    <h6><a href="seo.html">seo & content <br>writing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    <h6><a href="app-development.html">App <br>Development</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                data-wow-delay="900ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-ui"></span></div>
                    <h6><a href="ui-designing.html">Ui/UX <br>designing</a></h6>
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
                            <h2>Linoor all core features <span class="dot">.</span></h2>
                        </div>
                        <div class="features">
                            <div class="feature">
                                <div class="count"><span>01</span></div>
                                <h5>Professional Staff</h5>
                                <div class="sub-text">There are many variations of passages of lorem ipsum
                                    majority have suffered.</div>
                            </div>
                            <div class="feature">
                                <div class="count"><span>02</span></div>
                                <h5>100% Satisfaction</h5>
                                <div class="sub-text">There are many variations of passages of lorem ipsum
                                    majority have suffered.</div>
                            </div>
                            <div class="feature">
                                <div class="count"><span>03</span></div>
                                <h5>Quality designing</h5>
                                <div class="sub-text">There are many variations of passages of lorem ipsum
                                    majority have suffered.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/Frontend/') }}/images/resource/featured-image-13.jpg" alt="">
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <h5>Total design freedom for everyone</h5>
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

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                </div>
                                <div class="counter-title">Projects Completed</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                </div>
                                <div class="counter-title">Active clients</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                </div>
                                <div class="counter-title">cups of coffee</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                </div>
                                <div class="counter-title">happy clients</div>
                            </div>
                        </div>
                    </div>

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
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-1.jpg"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-2.jpg"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-1.jpg"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-2.jpg"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img src="{{ asset('public/Frontend/') }}/images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
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
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                    </div>
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection