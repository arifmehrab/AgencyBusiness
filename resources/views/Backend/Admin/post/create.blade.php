@extends('layouts.admin_app')
@section('title', 'admin | post-create')
@push('css')
<!-- Page plugins -->
<link href="{{ asset('public/Backend/assets/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/Backend/assets/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Backend/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Backend/assets/vendor/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Posts</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Create Post Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <div class="row">
           <div class="col-lg-12 col-md-12">
             <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                   <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label for="title">Title</label>
                           <input type="text" class="form-control" id="title" name="title">
                        </div><!-- End form group -->
                   </div><!-- end clum 12 -->
              </div><!-- End form row -->

              <div class="form-row">
                <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label for="category">Category</label>
                        <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Select Categories" name="categories[]" required>
                          <optgroup label="Select Multiple Category">
                            @foreach($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                            @endforeach
                          </optgroup>
                        </select>
                     </div><!-- End form group -->
                </div><!-- end clum 12 -->

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                     <label for="add_tag">Tages</label>
                     <br>
                     <input name="tags" type="text" class="form-control" value="blood,group" data-role="tagsinput" placeholder="Add Tages Here" id="add_tag" required/>
                  </div><!-- End form group -->
                </div><!-- end clum 12 -->
              </div><!-- End form row -->

              <div class="form-row">
                <div class="col-lg-12 col-md-12">
                     <div class="form-group">
                        <label for="title">Post Descriptions</label>
                        <textarea class="summernote" name="body">Write Post Details Hear...</textarea>
                     </div><!-- End form group -->
                </div><!-- end clum 12 -->
              </div><!-- End form row -->
              
              <div class="form-row">
                <div class="col-lg-12 col-md-12">
                     <div class="form-group">
                        <label for="image">Fetured Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                     </div><!-- End form group -->
                </div><!-- end clum 12 -->
              </div><!-- End form row -->

              <div class="form-row">
                <div class="col-lg-12 col-md-12">
                     <div class="form-group">
                      <input type="submit" name="submit" value="Publish" class="btn btn-primary">
                     </div><!-- End form group -->
                </div><!-- end clum 12 -->
              </div><!-- End form row -->

             </form>
           </div><!-- Colum 12 end -->
      </div><!--- End row -->
    </div><!-- End Card Body -->
</div><!-- end card -->
@endsection
@push('js')
<script src="{{ asset('public/Backend/assets/vendor/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/Backend/assets/vendor/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/Backend/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/Backend/assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript">
  $(function() {
     // For select 2
     $(".select2").select2();
     $('.selectpicker').selectpicker();
     // For multiselect
     $('#pre-selected-options').multiSelect();
     $('#optgroup').multiSelect({
         selectableOptgroup: true
     });
 });
</script>
@endpush