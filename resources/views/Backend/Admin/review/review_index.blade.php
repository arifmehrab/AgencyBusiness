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
      <h3 class="mb-0">Add Home Customer Review Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.review.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-control-label" for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="customer_image">Customer Image*</label>
                <input type="file" class="form-control" id="customer_image" name="customer_image" required>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="customer_review">Customer Review*</label>
                <textarea class="form-control" name="customer_review" id="customer_review" cols="30" rows="7"></textarea>
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
          <h2 class="mb-0">Total Reviews ({{ $reviews->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Customer Name</th>
                <th>Customer Image</th>
                <td>Customer Review</td>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($reviews as $key => $row)
              <tr>
                <td>{{ $row->customer_name }}</td>
                <td>
                    <img src="{{ asset('public/Backend/assets/media/review/'.$row->customer_image) }}" alt="{{ $row->customer_image }}">
                </td>
                <td>{{ illuminate\support\Str::words($row->customer_review, 10, '...') }}</td>
                <td>
                    <a title="Edit" class="btn btn-success btn-sm" href="{{ route('admin.review.edit', $row->id) }}">
                        <i class="fa fa-edit"></i>
                    </a>
                      <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                          <i class="fa fa-trash"></i>
                      </button>
                      <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.review.delete', $row->id) }}">
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