<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\securitypage;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    // security Pages =================
    public function index()
    {
        $securityEdit = securitypage::first();
        return view('Backend.Admin.securitypage.security_index', compact('securityEdit'));
    }

    // Security Pages Update ==============
    public function update(Request $request, $id)
    {
        $securityUpdate                 = securitypage::findOrFail($id);
        $securityUpdate->privacy_policy = $request->privacy_policy;
        $securityUpdate->terms_of_use   = $request->terms_of_use;
        $securityUpdate->return_policy  = $request->return_policy;
        $securityUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'Security Page Updated Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->back()->with($notification);
    }
}
