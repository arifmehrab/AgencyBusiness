<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\aboutcontent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // About Content Update ==============
    public function indexContent()
    {
        $aboutContents = aboutcontent::first();
        return view('Backend.Admin.aboutus.about_content', compact('aboutContents'));
    }

    // About Content Update ==============
    public function aboutContentUpdate(Request $request, $id)
    {
        $request->validate([
            'about_title' => 'required',
        ]);
        // Update
        $aboutContentUpdate                = aboutcontent::findOrFail($id);
        $aboutContentUpdate->about_title   = $request->about_title;
        $aboutContentUpdate->our_mission   = $request->our_mission;
        $aboutContentUpdate->our_vision    = $request->our_vision;
        $aboutContentUpdate->our_history   = $request->our_history;
        $aboutContentUpdate->about_content = $request->about_content;
        $aboutContentUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'About Content Updated Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.about.index')->with($notification);
    }

}
