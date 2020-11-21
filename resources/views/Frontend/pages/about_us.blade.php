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
                        <h2>{{ $aboutContents->about_title }}<span class="dot">.</span></h2>
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
                                    <div class="text">{!! $aboutContents->our_mission !!}</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-2">
                                <div class="content">
                                    <div class="text">{!! $aboutContents->our_vision !!}</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-3">
                                <div class="content">
                                    <div class="text">{!! $aboutContents->our_history !!}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="text">
                        {!! $aboutContents->about_content !!}
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
            @foreach($ourTeams as $row)
            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <a href="about.html"><img src="{{ asset('public/Backend/assets/media/ourteam/'.$row->team_profile) }}" alt="{{ $row->team_profile }}"></a>
                        <ul class="social-links clearfix">
                            @isset($row->facebook_url)
                            <li><a href="{{ $row->facebook_url }}"><span class="fab fa-facebook-square"></span></a></li>  
                            @endisset
                            @isset($row->twitter_url)
                            <li><a href="{{ $row->twitter_url }}"><span class="fab fa-twitter"></span></a></li>
                            @endisset
                            @isset($row->instagram_url)
                            <li><a href="{{ $row->instagram_url }}"><span class="fab fa-instagram"></span></a></li>
                            @endisset
                            @isset($row->linkedin_url)
                            <li><a href="{{ $row->linkedin_url }}"><span class="fab fa-linkedin"></span></a></li>
                            @endisset       
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">{{ $row->team_name }}</a></h5>
                        <div class="designation">{{ $row->team_title }}</div>
                    </div>
                </div>
            </div>
            @endforeach
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
                    @foreach($brands as $row)
                    <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box"><a href="#"><img src="{{ asset('public/Backend/assets/media/brand/'.$row->brand_logo) }}" alt="{{ $row->brand_logo }}"></a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
@endsection