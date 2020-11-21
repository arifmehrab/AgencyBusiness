<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    // Brands Index ==========
    public function index()
    {
        $brands = brand::all();
        return view('Backend.Admin.brand.brand_index', compact('brands'));
    }

    // Brands Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'brand_logo' => 'required|image|mimes:jpg,png,jpeg,gif|max:3072',
        ]);
        $brandStore = new brand();
        //Image Check
        if ($request->hasFile('brand_logo')) {
            $brand_logo = hexdec(uniqid()) . '.' . $request->brand_logo->getClientOriginalExtension();
            Image::make($request->brand_logo)->resize(150, 85)->save('public/Backend/assets/media/brand/' . $brand_logo);
        }
        // Store
        $brandStore->brand_logo = $brand_logo;
        $brandStore->brand_url  = $request->brand_url;
        $brandStore->save();
        // Notification
        $notification = array(
            'message'    => 'Brand Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.brand.index')->with($notification);
    }

    // Brands Delete ===========
    public function delete($id)
    {
        $brandDelete = brand::findOrFail($id);
        @unlink(public_path('/Backend/assets/media/brand/' . $brandDelete->brand_logo));
        $brandDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'Brand Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.brand.index')->with($notification);

    }
}
