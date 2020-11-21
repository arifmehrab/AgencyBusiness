@extends('layouts.admin_app')
@section('title', 'admin | review')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home Customer Review</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Edit Home Customer Review Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.review.update', $reviewEdit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-control-label" for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $reviewEdit->customer_name }}">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="customer_image">Customer Image*</label>
                <input type="file" class="form-control" id="customer_image" name="customer_image">
                <br>
                <img src="{{ asset('public/Backend/assets/media/review/'.$reviewEdit->customer_image) }}" alt="">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="customer_review">Customer Review*</label>
                <textarea class="form-control" name="customer_review" id="customer_review" cols="30" rows="7">
                    {{ $reviewEdit->customer_review }}
                </textarea>
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