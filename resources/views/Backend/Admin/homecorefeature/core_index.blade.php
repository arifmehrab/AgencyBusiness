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
@if($coreFeatures->count() < 3)
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Add Home CoreFeatures Here</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="{{ route('admin.corefeature.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-control-label" for="core_title">Features Title</label>
                <input type="text" class="form-control" id="core_title" name="core_title" required>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="short_description">Features Short Description</label>
                <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="4"></textarea>
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
@endif
<!--- Data table start --->
 <!-- Table -->
 <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h2 class="mb-0">Total CoreFeatures ({{ $coreFeatures->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Features Title</th>
                <th>Features Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($coreFeatures as $key => $row)
              <tr>
                <td>{{ $row->core_title }}</td>
                <td>{{ $row->short_description }}</td>
                <td>
                    <a title="Edit" class="btn btn-success btn-sm" href="{{ route('admin.corefeature.edit', $row->id) }}">
                        <i class="fa fa-edit"></i>
                    </a>
                      <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                          <i class="fa fa-trash"></i>
                      </button>
                      <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.corefeature.delete', $row->id) }}">
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