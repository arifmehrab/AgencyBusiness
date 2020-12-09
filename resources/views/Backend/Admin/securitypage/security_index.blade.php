@extends('layouts.admin_app')
@section('title', 'admin | secturity')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Security Page Update</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-12">
          <form action="{{ route('admin.security.update', $securityEdit->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
                <label class="form-control-label" for="privacy_policy">Privacy Policy Page</label>
                <textarea class="summernote" name="privacy_policy" id="privacy_policy">
                    {!! $securityEdit->privacy_policy !!}
                </textarea>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="terms_of_use">Terms Of Use Page</label>
                <textarea class="summernote" name="terms_of_use" id="terms_of_use">
                    {!! $securityEdit->terms_of_use !!}
                </textarea>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="return_policy">Return Policy Page</label>
                <textarea class="summernote" name="return_policy" id="return_policy">
                    {!! $securityEdit->return_policy !!}
                </textarea>
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
@push('js')
<script src="{{ asset('public/Backend/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
@endpush