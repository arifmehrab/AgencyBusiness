<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ourteam;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OurTeamController extends Controller
{
    // Our Team member ==============
    public function index()
    {
        $ourTeams = ourteam::all();
        return view('Backend.Admin.ourteam.ourteam_index', compact('ourTeams'));
    }
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'team_profile' => 'required|image|mimes:jpg,png,jpeg,gif|max:3072',
            'team_name'    => 'required',
            'team_title'   => 'required',
        ]);
        $ourTeamStore = new ourteam();
        // Team image
        if ($request->hasFile('team_profile')) {
            $team_image = hexdec(uniqid()) . '.' . $request->team_profile->getClientOriginalExtension();
            Image::make($request->team_profile)->resize(360, 360)->save('public/Backend/assets/media/ourteam/' . $team_image);
            $ourTeamStore->team_profile = $team_image;
        }
        $ourTeamStore->team_name     = $request->team_name;
        $ourTeamStore->team_title    = $request->team_title;
        $ourTeamStore->facebook_url  = $request->facebook_url;
        $ourTeamStore->twitter_url   = $request->twitter_url;
        $ourTeamStore->instagram_url = $request->instagram_url;
        $ourTeamStore->linkedin_url  = $request->linkedin_url;
        $ourTeamStore->save();
        // Notification
        $notification = array(
            'message'    => 'Team Member Added Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.ourteam.index')->with($notification);
    }
    // Our Team Edit ============
    public function edit($id)
    {
        $ourTeamEdit = ourteam::findOrFail($id);
        return view('Backend.Admin.ourteam.ourteam_edit', compact('ourTeamEdit'));
    }
    // Our Team Update ============
    public function update(Request $request, $id)
    {
        $ourTeamUpdate = ourteam::findOrFail($id);
        // Team image
        if ($request->hasFile('team_profile')) {
            @unlink(public_path('Backend/assets/media/ourteam/' . $ourTeamUpdate->team_profile));
            $team_image = hexdec(uniqid()) . '.' . $request->team_profile->getClientOriginalExtension();
            Image::make($request->team_profile)->resize(360, 360)->save('public/Backend/assets/media/ourteam/' . $team_image);
            $ourTeamUpdate->team_profile = $team_image;
        }
        // Update
        $ourTeamUpdate->team_name     = $request->team_name;
        $ourTeamUpdate->team_title    = $request->team_title;
        $ourTeamUpdate->facebook_url  = $request->facebook_url;
        $ourTeamUpdate->twitter_url   = $request->twitter_url;
        $ourTeamUpdate->instagram_url = $request->instagram_url;
        $ourTeamUpdate->linkedin_url  = $request->linkedin_url;
        $ourTeamUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'Team Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.ourteam.index')->with($notification);
    }

    // Our Team Destory ============
    public function delete($id)
    {
        $ourTeamDelete = ourteam::findOrFail($id);
        // Team image
        if ($ourTeamDelete->team_profile) {
            @unlink(public_path('Backend/assets/media/ourteam/' . $ourTeamDelete->team_profile));
        }
        $ourTeamDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'Ourteam Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.ourteam.index')->with($notification);
    }
}
