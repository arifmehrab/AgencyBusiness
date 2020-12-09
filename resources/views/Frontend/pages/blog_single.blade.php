@extends('layouts.app')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend') }}/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $blogSingle->title }}</h1>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-details">
                    <!--News Block-->
                    <div class="post-details">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('public/Backend/assets/media/posts/'.$blogSingle->image) }}" alt="{{ $blogSingle->image }}"></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span>{{ $blogSingle->created_at->diffForHumans() }}</li>
                                        <li><span class="far fa-user-circle"></span>{{ $blogSingle->user->name }}</li>
                                    </ul>
                                </div>
                                <h4>{{ $blogSingle->title }}</h4>
                                <div class="text">
                                    <p>
                                        {!! $blogSingle->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Leave Comment Form-->
                    <div class="leave-comments">
                        <div class="comments-title">
                            <h3>Leave a comment</h3>
                            <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10" data-width=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Latest Posts</h4>
                            </div>
                            @foreach($latestPost as $row)
                            <div class="post">
                                <figure class="post-thumb"><img src="{{ asset('public/Backend/assets/media/posts/'.$row->image) }}" alt="">
                                </figure>
                                <h5 class="text"><a href="{{ route('blog.single', $row->slug) }}">{{ $row->title }}</a></h5>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-widget archives">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul>
                                @foreach($categories as $row)
                                <li><a href="{{ route('category.blog', $row->category_slug) }}">{{ $row->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
@push('js')
<!-- fb comment plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="poEhO68F"></script>
@endpush