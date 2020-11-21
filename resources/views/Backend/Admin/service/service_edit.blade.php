@extends('layouts.admin_app')
@section('title', 'admin | categories')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Edit Service</h6>
      </div>
      <div class="col-lg-6 col-5 text-right">
        <a href="{{ route('admin.service.index') }}" class="btn btn-sm btn-neutral">View All Service</a>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Edit service Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-12">
          <form action="{{ route('admin.service.update', $serviceEdit->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-control-label" for="service_title">Service Title</label>
                <input type="text" class="form-control" id="service_title" name="service_title" value="{{ $serviceEdit->service_title }}">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="service_icon">Service Icon Name*</label>
                <input type="text" class="form-control" id="service_icon" name="service_icon" placeholder="Icon Name" value="{{ $serviceEdit->service_icon }}">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="service_body">service Body*</label>
                <textarea class="summernote" name="service_body" id="service_body">{!! $serviceEdit->service_body !!}</textarea>
            </div>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
          </form>
        </div>
      </div><!--- End row -->
    </div><!-- End Card Body -->
</div><!-- end card -->
@endsection