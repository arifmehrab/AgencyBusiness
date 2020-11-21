<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    // Subscriber ============
    public function subscriber()
    {
        $subscribers = newsletter::latest()->get();
        return view('Backend.Admin.newsletter.newsletter_index', compact('subscribers'));
    }


    // Subscribers Delete =======
    public function newsLetterDelete($id)
    {
        $newsLetterDelete = newsletter::findOrFail($id);
        $newsLetterDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'subscriber Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.subscriber')->with($notification);
    }
}
