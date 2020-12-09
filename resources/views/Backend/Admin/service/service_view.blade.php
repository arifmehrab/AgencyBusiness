@extends('layouts.admin_app')
@section('title', 'admin | categories')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">View Service Body</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<p>{{ $serviceView->service_keyword }}</p>
<div class="card mb-4 p-3">
    <p>
        {!! $serviceView->service_body !!}
    </p>
</div><!-- end card -->
@endsection