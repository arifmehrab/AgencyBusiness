@extends('layouts.admin_app')
@section('title', 'admin | categories')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Services</h6>
      </div>
      <div class="col-lg-6 col-5 text-right">
        <a href="{{ route('admin.service.create') }}" class="btn btn-sm btn-neutral">Add New Service</a>
      </div>
    </div>
  </div>
@endsection
@section('content_body')
<!--- Data table start --->
 <!-- Table -->
 <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h2 class="mb-0">Total categories ({{ $services->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Title</th>
                <th>Icon</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($services as $key => $row)
              <tr>
                <td>{{ $row->service_title }}</td>
                <td>{{ $row->service_icon }}</td>
                <td>{{ $row->service_slug }}</td>
                <td>
                    <a title="Edit" class="btn btn-success btn-sm" href="{{ route('admin.service.edit', $row->id) }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a title="View" class="btn btn-primary btn-sm" href="{{ route('admin.service.view', $row->id) }}">
                        <i class="fa fa-eye"></i>
                    </a>
                      <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                          <i class="fa fa-trash"></i>
                      </button>
                      <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.service.delete', $row->id) }}">
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