@extends('layouts.admin_app')
@section('title', 'admin | brands')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Home Brands</h6>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Add Home Brand Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-control-label" for="brand_logo">Brand Logo</label>
                <input type="file" class="form-control" id="brand_logo" name="brand_logo" required>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="brand_url">Brand Url If you want</label>
                <input type="text" class="form-control" id="brand_url" name="brand_url">
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
          <h2 class="mb-0">Total brands ({{ $brands->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Brand Logo</th>
                <th>Brand Url</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($brands as $key => $row)
              <tr>
                <td>
                    <img src="{{ asset('public/Backend/assets/media/brand/'.$row->brand_logo) }}" alt="{{ $row->brand_logo }}">
                </td>
                <td>{{ $row->brand_url }}</td>
                <td>
                      <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                          <i class="fa fa-trash"></i>
                      </button>
                      <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.brand.delete', $row->id) }}">
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