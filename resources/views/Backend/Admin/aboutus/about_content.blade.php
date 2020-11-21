@extends('layouts.admin_app')
@section('title', 'admin | about-content')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">About Content Update</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card body -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                   <!--- Product From start --->
                    <form action="{{ route('admin.about.update', $aboutContents->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <!-- From section one -->
                        <div class="form-row">
                        <!--- colum 1 --->
                          <div class="col-md-12">
                              <div class="form-group">
                                 <label for="about_title">About Content Title<strong style="color: red;">*</strong></label>
                                 <input id="about_title" type="text" class="form-control" name="about_title" value="{{ $aboutContents->about_title }}">
                              </div>
                              <!--- Error Message -->
                              @error('about_title')
                              <strong style="color: red;">{{ $message }}</strong>
                              @enderror
                          </div>
                      </div><!-- From row end -->
                      
                      <!-- From section Four -->
                      <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="our_mission">Our Mission<strong style="color: red;">*</strong></label>
                                <textarea id="our_mission" class="summernote" name="our_mission">{!! $aboutContents->our_mission !!}</textarea>
                             </div>
                        </div>
                    </div><!-- From row end -->
                      
                      <!-- From section Four -->
                      <div class="form-row">
                          <div class="col-12">
                            <div class="form-group">
                                <label for="our_vision">Our Vision<strong style="color: red;">*</strong></label>
                                <textarea id="our_vision" class="summernote" name="our_vision">{!! $aboutContents->our_vision !!}</textarea>
                            </div>
                          </div>
                      </div><!-- From row end -->
        
                       <!-- From section Four -->
                       <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="our_history">Our History<strong style="color: red;">*</strong></label>
                                <textarea id="our_history" class="summernote" name="our_history">{!! $aboutContents->our_history !!}</textarea>
                            </div>
                         </div>
                    </div><!-- From row end -->
                    <div class="form-row">
                        <!--- colum 1 --->
                          <div class="col-md-12">
                              <div class="form-group">
                                 <label for="about_content">About Long Content<strong style="color: red;">*</strong></label>
                                 <textarea id="about_content" class="summernote" name="about_content">{!! $aboutContents->about_content !!}</textarea>
                              </div>
                          </div>
                      <!-- From Submit section -->
                      <div class="form-row">
                          <div class="col-12">
                             <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </div>
                    </form>
                   <!--- Product From start --->
                </div>
            </div>
        </div>
    </div><!-- End Card Body -->
</div><!-- end card -->

@endsection