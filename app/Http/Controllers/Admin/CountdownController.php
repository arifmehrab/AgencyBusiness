<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\countdown;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    // CountDown Index ==========
    public function index()
    {
        $countDowns = countdown::all();
        return view('Backend.Admin.countdown.countdown_index', compact('countDowns'));
    }

    // CountDown Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'count_number' => 'required',
            'name'         => 'required',
        ]);

        $countDownStore = new countdown();

        // Store
        $countDownStore->count_number = $request->count_number;
        $countDownStore->name         = $request->name;
        $countDownStore->save();
        // Notification
        $notification = array(
            'message'    => 'CountDown Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.countdown.index')->with($notification);
    }


    // CountDown Edit ===========
    public function edit($id)
    {
        $countDownEdit = countdown::findOrFail($id);
        return view('Backend.Admin.countdown.countdown_edit', compact('countDownEdit'));
    }

    // CountDown Update ===========
    public function update(Request $request, $id)
    {
        $countDownUpdate = countdown::findOrFail($id);

        // UPdate
        $countDownUpdate->count_number = $request->count_number;
        $countDownUpdate->name         = $request->name;
        $countDownUpdate->save();
        
        // Notification
        $notification = array(
            'message'    => 'countdown Update Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.countdown.index')->with($notification);
    }

    // CountDown Delete ===========
    public function delete($id)
    {
        $countDownDelete = countdown::findOrFail($id);
        $countDownDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'Countdown Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.countdown.index')->with($notification);

    }
}
