@extends('layouts.app')
@section('title', 'portfolio')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend') }}/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Recent Works</h1>
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
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".webdesign">Web Design</li>
                    <li class="filter" data-role="button" data-filter=".webdev">Web Development
                    </li>
                    <li class="filter" data-role="button" data-filter=".wordpress">Wordpress
                    </li>
                    <li class="filter" data-role="button" data-filter=".graphic">Graphic Design
                    </li>
                </ul>
            </div>
            <div class="filter-list row">

                <!-------------------------------------------
                -------------   Filter By Web design ------->

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd1.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd1.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Multipurpose Ecommerce</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd2.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd2.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Watch Ecommerce</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd3.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd3.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Corporate Business</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd4.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd4.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>App Langing Page</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd5.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd5.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Social Media</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd6.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd6.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Wedding</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd7.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd7.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Job Portal</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd8.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd8.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>It Agency Business</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd9.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd9.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Real Estate</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdesign col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd10.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdesign/webd10.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Agency Business</span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!---------------------------------------------------
                -------------   Filter By Web WEb Development  ------->

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/2.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/2.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Online Food Ordering System</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/3.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/3.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>restaurant management system</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/4.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/4.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>student management system</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/6.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/6.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>hospital management System</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/7.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/7.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>money exchange system</span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Gallery Item -->
                <div class="gallery-item mix all webdev col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/webdv/8.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/webdv/8.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Online hotel booking System</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------------------------------------------
                -------------   Filter By Web Wordpress  ------->

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp1.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp1.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Air Freights</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp2.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp2.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Lawyer Site</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp3.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp3.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>non profit organization</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp4.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp4.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>multivendor ecommerce</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp5.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp5.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Warehousing</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp6.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp6.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Landing Page</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp7.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp7.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Resort</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp8.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp8.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Landing Page</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp9.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp9.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>House Buy Sell</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all wordpress col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp10.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/wordpress/wp10.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Landing Page</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-------------------------------------------
                -------------   Filter By Web Graphic Design ------->

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo2.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo2.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo3.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo3.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo4.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo4.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo5.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo5.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo6.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo6.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo7.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/logo7.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Logo</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g1.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g1.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Card</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g2.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g2.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Card</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g3.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g3.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Card</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g4.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g4.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>professional cv resume</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g5.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g5.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>professional cv resume</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g6.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g6.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Flyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g7.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g7.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Flyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g8.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g8.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Flyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item mix all graphic col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g9.jpg') }}" alt=""></figure>
                        <a href="{{ asset('public/Backend/assets/media/portfolio/graphicdesign/g9.jpg') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Business Flyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>

    </div>
</section>
@endsection