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
                <h1>{{ $servicesView->service_title }}</h1>
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
                <div class="service-details">
                    <div class="main-image image">
                        <img src="images/resource/featured-image-16.jpg" alt="">
                    </div>
                    <div class="text-content">
                        <h3>{{ $servicesView->service_title }}</h3>
                        <p>
                            {!! $servicesView->service_body !!}
                        </p>
                        
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">

                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                                @foreach($services as $row)
                                <li class="{{ ($servicesView->id == $row->id) ? 'active': '' }}">
                                    <a href="{{ route('single.service', $row->service_slug) }}">
                                        {{ $row->service_title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget call-up">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Need TopUpSoft Help?</h4>
                            </div>
                            <div class="text">Prefer speaking with a human to filling out a form? call corporate
                                office and we will connect you with a team member who can help.</div>
                            <div class="phone"><a href="https://api.whatsapp.com/send?phone=+8801827924326"><span
                                        class="icon flaticon-call"></span>8801827924326</a></div>
                            <div class="phone">
                                <a href="skype:arifmehrab11?chat"><span
                                            class="icon fab fa-skype"></span>Skype
                                </a>
                            </div>
                        </div>
                    </div>


                </aside>
            </div>

        </div>
    </div>
</div>

@endsection