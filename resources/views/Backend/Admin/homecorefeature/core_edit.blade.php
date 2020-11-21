@extends('layouts.admin_app')
@section('title', 'admin | countdown')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home CoreFeatures</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Edit Home CoreFeatures Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.corefeature.update', $coreFeaturesEdit->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-control-label" for="core_title">Features Title</label>
                <input type="text" class="form-control" id="core_title" name="core_title" value="{{ $coreFeaturesEdit->core_title }}">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="short_description">Features Short Description</label>
                <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="4">
                    {{ $coreFeaturesEdit->short_description }}
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