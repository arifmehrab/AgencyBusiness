<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customerreview;
use Illuminate\Http\Request;
use Image;

class ReviewController extends Controller
{
    // Customer Review Index ==========
    public function index()
    {
        $reviews = customerreview::all();
        return view('Backend.Admin.review.review_index', compact('reviews'));
    }

    // Customer Review Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'customer_name'   => 'required',
            'customer_image'  => 'required|image|mimes:jpg,png,jpeg,gif|max:3072',
            'customer_review' => 'required',
        ]);
        $reviewstore = new customerreview();
        //Image Check
        if ($request->hasFile('customer_image')) {
            $customer_image = hexdec(uniqid()) . '.' . $request->customer_image->getClientOriginalExtension();
            Image::make($request->customer_image)->resize(73, 73)->save('public/Backend/assets/media/review/' . $customer_image);
        }
        // Store
        $reviewstore->customer_name   = $request->customer_name;
        $reviewstore->customer_image  = $customer_image;
        $reviewstore->customer_review = $request->customer_review;
        $reviewstore->save();
        // Notification
        $notification = array(
            'message'    => 'Review Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.review.index')->with($notification);
    }

    // Customer Review Edit ===========
    public function edit($id)
    {
        $reviewEdit = customerreview::findOrFail($id);
        return view('Backend.Admin.review.review_edit', compact('reviewEdit'));
    }

    // Customer Review Update ===========
    public function update(Request $request, $id)
    {
        $reviewUpdate = customerreview::findOrFail($id);

        //Image Check
        if ($request->hasFile('customer_image')) {
            @unlink(public_path('/Backend/assets/media/review/'.$reviewUpdate->customer_image));
            $customer_image = hexdec(uniqid()) . '.' . $request->customer_image->getClientOriginalExtension();
            Image::make($request->customer_image)->resize(73, 73)->save('public/Backend/assets/media/review/' . $customer_image);
            $reviewUpdate->customer_image  = $customer_image;
        }
        // UPdate
        $reviewUpdate->customer_name   = $request->customer_name;
        $reviewUpdate->customer_review = $request->customer_review;
        $reviewUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'Review Updated Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.review.index')->with($notification);
    }

    // Customer Review Delete ===========
    public function delete($id)
    {
        $reviewDelete = customerreview::findOrFail($id);
        @unlink(public_path('/Backend/assets/media/review/'.$reviewDelete->customer_image));
        $reviewDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'Review Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.review.index')->with($notification);

    }
}
