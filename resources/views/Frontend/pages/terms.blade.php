@extends('layouts.app')
@section('title', 'Terms')
@section('page_content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('public/Frontend/images/background/green-bg.jpg') }});"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Terms of Service</h1>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->
<div class="container">
    <div class="row py-5">
        <div class="col-12">
            <p>
               {!! $termsOfUse->terms_of_use !!}
            </p>
        </div>
   </div>
</div>
@endsection