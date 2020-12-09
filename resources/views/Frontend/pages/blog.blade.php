@extends('layouts.app')
@section('title', 'Blog')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend') }}/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Blogs Posts</h1>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

 <!-- News Section -->
 <section class="news-section">
    <div class="auto-container">

        <div class="row clearfix">
            @foreach($blogs as $row)
            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="blog-single.html"><img src="{{ asset('public/Backend/assets/media/posts/'.$row->image) }}" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span>{{ date('d-m-Y', strtotime($row->date)) }}</li>
                            </ul>
                        </div>
                        <h5><a href="{{ route('blog.single', $row->slug) }}">{{ $row->title }}</a></h5>
                        <div class="text">{!!  Illuminate\Support\Str::words($row->body, 15, ' .....') !!}</div>
                        <div class="link-box"><a class="theme-btn" href="{{ route('blog.single', $row->slug) }}"><span
                                    class="flaticon-next-1"></span></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="more-box">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection