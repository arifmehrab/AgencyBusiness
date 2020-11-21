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
                <h1>Portfolio</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->
<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters centered clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                    <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup></li>
                    <li class="filter" data-role="button" data-filter=".illustration">illustration<sup>[3]</sup>
                    </li>
                    <li class="filter" data-role="button" data-filter=".photography">Photography<sup>[3]</sup>
                    </li>
                    <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                    </li>
                </ul>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/1.jpg" alt=""></figure>
                        <a href="images/gallery/1.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/2.jpg" alt=""></figure>
                        <a href="images/gallery/2.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/3.jpg" alt=""></figure>
                        <a href="images/gallery/3.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/4.jpg" alt=""></figure>
                        <a href="images/gallery/4.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div
                    class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/5.jpg" alt=""></figure>
                        <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Frontend') }}/images/gallery/6.jpg" alt=""></figure>
                        <a href="images/gallery/6.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="more-box">
                <a class="theme-btn btn-style-one" href="portfolio.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Load more work</span>
                </a>
            </div>
        </div>

    </div>
</section>
@endsection