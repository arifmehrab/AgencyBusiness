@extends('layouts.admin_app')
@section('title', 'admin | our-team')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Team Members sections</h6>
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
        <div class="col-md-12">
           <!-- Form groups used in grid -->
      <form action="{{ route('admin.ourteam.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="team_profile">Team Member Profile</label>
                    <input type="file" class="form-control" id="team_profile" name="team_profile">
                </div>
            </div><!-- End colum -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="team_name">Member Name</label>
                    <input type="text" class="form-control" id="team_name" name="team_name">
                </div>
            </div><!-- End colum -->
          </div><!--- End row -->

          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label" for="team_title">Member Title</label>
                    <input type="text" class="form-control" id="team_title" name="team_title">
                </div>
            </div><!-- End colum -->
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label" for="facebook_url">Facebook Url</label>
                    <input type="text" class="form-control" id="facebook_url" name="facebook_url">
                </div>
            </div><!-- End colum -->
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="twitter_url">Twitter Url</label>
                <input type="text" class="form-control" id="twitter_url" name="twitter_url">
            </div>
            </div><!-- End colum -->
          </div><!--- End row -->

          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="instagram_url">Instagram Url</label>
                    <input type="text" class="form-control" id="instagram_url" name="instagram_url">
                </div>
            </div><!-- End colum -->

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="linkedin_url">Linkedin Url</label>
                    <input type="text" class="form-control" id="linkedin_url" name="linkedin_url">
                </div>
            </div><!-- End colum -->

          </div><!--- End row -->
            <button class="btn btn-primary btn-sm" type="submit">Add</button>
          </div><!--- End row -->

      </form><!-- End Form -->
        </div>
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
          <h2 class="mb-0">Total Team Members ({{ $ourTeams->count() }})</h2>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>SubTitle</th>
                  <td>Profile</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              @foreach($ourTeams as $row)
                <tr>
                  <td>{{ $row->team_name }}</td>
                  <td>{{ $row->team_title }}</td>
                  <td>
                      <img src="{{ asset('public/Backend/assets/media/ourteam/'.$row->team_profile) }}" alt="$row->team_profile" width="100">
                  </td>
                  <td>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.ourteam.edit', $row->id) }}"><i class="fa fa-edit"></i></a>
                        <button title="Delete" type="button" class="btn btn-danger btn-sm" onclick="deleteItem({{ $row->id }})">
                            <i class="fa fa-trash"></i>
                        </button>
                        <form style="display: none;" id="delete_form_{{ $row->id }}" method="post" action="{{ route('admin.ourteam.delete', $row->id) }}">
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