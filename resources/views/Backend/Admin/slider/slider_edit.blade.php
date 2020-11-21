@extends('layouts.admin_app')
@section('title', 'admin | slider-edit')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Slider Edit</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Edit Home Slider Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.slider.update', $sliderEdit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-control-label" for="title_one">slider Sub Title</label>
                <input type="text" class="form-control" id="title_one" name="title_one" value="{{ $sliderEdit->title_one }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="title_two">slider Title*</label>
                <input type="text" class="form-control" id="title_two" name="title_two" value="{{ $sliderEdit->title_two }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="title_two">slider Background Image*</label>
                <input type="file" class="form-control" id="slider_image" name="slider_image">
                <img width="220" src="{{ asset('public/Backend/assets/media/slider/'.$sliderEdit->slider_image) }}" alt="{{ $sliderEdit->slider_image }}">
            </div>
            <div class="form-row">
               <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="button_name">Slider Button Name*</label>
                    <input type="text" class="form-control" id="button_name" name="button_name" value="{{ $sliderEdit->button_name }}">
                </div>
               </div>
               <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="button_url">Slider Button Url*</label>
                    <input type="text" class="form-control" id="button_url" name="button_url" value="{{ $sliderEdit->button_url }}">
                </div>
               </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
      </div><!--- End row -->
    </div><!-- End Card Body -->
</div><!-- end card -->

@endsection