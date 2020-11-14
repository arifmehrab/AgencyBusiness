@extends('layouts.app')
@section('title', 'Blog')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Blog Posts</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Posts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

 <!-- News Section -->
 <section class="news-section">
    <div class="auto-container">

        <div class="row clearfix">
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-1.jpg" alt=""></a>
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
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-2.jpg" alt=""></a>
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
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-3.jpg" alt=""></a>
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
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-4.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h5>
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
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-5.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
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
                        <a href="blog-single.html"><img src="{{ asset('public/Frontend') }}/images/resource/news-6.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                <li><span class="far fa-user-circle"></span> Admin</li>
                                <li><span class="far fa-comments"></span> 2 Comments</li>
                            </ul>
                        </div>
                        <h5><a href="blog-single.html">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                        <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-box">
            <a class="theme-btn btn-style-one" href="blog.html.html">
                <i class="btn-curve"></i>
                <span class="btn-title">Load more posts</span>
            </a>
        </div>
    </div>
</section>
@endsection