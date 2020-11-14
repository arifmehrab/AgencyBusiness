<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class SliderController extends Controller
{
    // Slider Index ==========
    public function index()
    {
        $sliders = slider::all();
        return view('Backend.Admin.slider.slider_index', compact('sliders'));
    }
    // slider Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'title_two'    => 'required',
            'slider_image' => 'required|image|mimes:jpg,png,jpeg,gif|max:6072',
        ]);
        $sliderStore = new slider();
        //Image Check
        if ($request->hasFile('slider_image')) {
            $slider_image = hexdec(uniqid()) . '.' . $request->slider_image->getClientOriginalExtension();
            Image::make($request->slider_image)->resize(1895, 975)->save('public/Backend/assets/media/slider/' . $slider_image);
        }
        // Store
        $sliderStore->title_one    = $request->title_one;
        $sliderStore->title_two    = $request->title_two;
        $sliderStore->slider_image = $slider_image;
        $sliderStore->button_name  = $request->button_name;
        $sliderStore->button_url   = $request->button_url;
        $sliderStore->save();
        // Notification
        $notification = array(
            'message'    => 'Slider Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.slider.index')->with($notification);
    }
    // Slider Delete ===========
    public function delete($id)
    {
       $sliderDelete = slider::find($id);
       @unlink(public_path('/Backend/assets/media/slider/'.$sliderDelete->slider_image));
       $sliderDelete->delete();
       // Notification
       $notification = array(
        'message'    => 'Slider Deleted Successfully',
        'alert-type' => 'success',
    );
    // redirect
    return redirect()->route('admin.slider.index')->with($notification);

    }
}
