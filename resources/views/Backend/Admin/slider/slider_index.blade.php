@extends('layouts.admin_app')
@section('title', 'admin | categories')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home Slider</h6>
      </div>
      <div class="col-lg-6 col-5 text-right">
        <a href="#" class="btn btn-sm btn-neutral">New</a>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Add Home Slider Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-control-label" for="title_one">slider Sub Title</label>
                <input type="text" class="form-control" id="title_one" name="title_one" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="title_two">slider Title*</label>
                <input type="text" class="form-control" id="title_two" name="title_two" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="title_two">slider Background Image*</label>
                <input type="file" class="form-control" id="slider_image" name="slider_image" required>
            </div>
            <div class="form-row">
               <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="button_name">Slider Button Name*</label>
                    <input type="text" class="form-control" id="button_name" name="button_name" required>
                </div>
               </div>
               <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="button_url">Slider Button Url*</label>
                    <input type="text" class="form-control" id="button_url" name="button_url" required>
                </div>
               </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="ADD">
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
      </div><!--- End row -->
    </div><!-- End Card Body -->
</div><!-- end card -->

<!--- Data table start --->
 <!-- Table -->
 <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h2 class="mb-0">Total categories ({{ $sliders->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Title</th>
                <th>Sub Title</th>
                <td>Slider Image</td>
                <td>Button</td>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($sliders as $key => $row)
              <tr>
                <td>{{ $row->title_two }}</td>
                <td>{{ $row->title_one }}</td>
                <td>
                    <img width="80" src="{{ asset('public/Backend/assets/media/slider/'.$row->slider_image) }}" alt="{{ $row->slider_image }}">
                </td>
                <td>{{ $row->button_name }}</td>
                <td>
                    <a title="Edit" class="btn btn-success btn-sm" href="{{ route('admin.slider.edit', $row->id) }}">
                        <i class="fa fa-edit"></i>
                    </a>
                      <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                          <i class="fa fa-trash"></i>
                      </button>
                      <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.slider.delete', $row->id) }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!--- Data table End ---->

@endsection