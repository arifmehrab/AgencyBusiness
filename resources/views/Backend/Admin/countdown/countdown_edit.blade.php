@extends('layouts.admin_app')
@section('title', 'admin | countdown')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home Countdown Edit</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Edit Home Countdowns Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.countdown.update', $countDownEdit->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-control-label" for="count_number">Project Completed</label>
                <input type="number" class="form-control" id="count_number" name="count_number" value="{{ $countDownEdit->count_number }}">
            </div>

            <div class="form-group">
                <label class="form-control-label" for="name">Countdown Name*</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $countDownEdit->name }}">
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