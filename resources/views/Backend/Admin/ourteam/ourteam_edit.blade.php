@extends('layouts.admin_app')
@section('title', 'admin | our-team')
@section('content_head')
<div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 text-white d-inline-block mb-0">Team Members Edit</h6>
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
      <form action="{{ route('admin.ourteam.update', $ourTeamEdit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="team_profile">Team Member Profile</label>
                    <input type="file" class="form-control" id="team_profile" name="team_profile">
                    <br>
                    <img width="80" src="{{ asset('public/Backend/assets/media/ourteam/'.$ourTeamEdit->team_profile) }}" alt="{{ $ourTeamEdit->team_profile }}">
                </div>
            </div><!-- End colum -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="team_name">Member Name</label>
                    <input type="text" class="form-control" id="team_name" name="team_name" value="{{ $ourTeamEdit->team_name }}">
                </div>
            </div><!-- End colum -->
          </div><!--- End row -->

          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label" for="team_title">Member Title</label>
                    <input type="text" class="form-control" id="team_title" name="team_title" value="{{ $ourTeamEdit->team_title }}">
                </div>
            </div><!-- End colum -->
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label" for="facebook_url">Facebook Url</label>
                    <input type="text" class="form-control" id="facebook_url" name="facebook_url" value="{{ $ourTeamEdit->facebook_url }}">
                </div>
            </div><!-- End colum -->
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="twitter_url">Twitter Url</label>
                <input type="text" class="form-control" id="twitter_url" name="twitter_url" value="{{ $ourTeamEdit->twitter_url }}">
            </div>
            </div><!-- End colum -->
          </div><!--- End row -->

          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="instagram_url">Instagram Url</label>
                    <input type="text" class="form-control" id="instagram_url" name="instagram_url" value="{{ $ourTeamEdit->instagram_url }}">
                </div>
            </div><!-- End colum -->

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label" for="linkedin_url">Linkedin Url</label>
                    <input type="text" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $ourTeamEdit->linkedin_url }}">
                </div>
            </div><!-- End colum -->

          </div><!--- End row -->
            <button class="btn btn-primary btn-sm" type="submit">Update</button>
          </div><!--- End row -->

      </form><!-- End Form -->
        </div>
      </div><!--- End row -->
    </div><!-- End Card Body -->
</div><!-- end card -->

@endsection