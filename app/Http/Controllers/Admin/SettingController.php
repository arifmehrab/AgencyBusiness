<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\seosetting;
use App\Models\setting;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    // Site Info Setting =================
    public function settings()
    {
        $settingInfo = setting::first();
        return view('Backend.Admin.settings.site_setting', compact('settingInfo'));
    }
    // Site Info Setting Update ===========
    public function settingUpdate(Request $request, $id)
    {
        $settingUpdate = setting::findOrFail($id);
        // Logo
        if ($request->hasFile('logo')) {
            $request_logo = $request->file('logo');
            @unlink(public_path('Backend/assets/media/logo/' . $settingUpdate->logo));
            $logo_name = hexdec(uniqid()) . '.' . $request_logo->getClientOriginalExtension();
            $logo_public_path = public_path('Backend/assets/media/logo/');
            $request_logo->move($logo_public_path, $logo_name);
            $settingUpdate->logo = $logo_name;
        }
        $settingUpdate->email                 = $request->email;
        $settingUpdate->phone_number          = $request->phone_number;
        $settingUpdate->address               = $request->address;
        $settingUpdate->facebook_url          = $request->facebook_url;
        $settingUpdate->twitter_url           = $request->twitter_url;
        $settingUpdate->youtube_url           = $request->youtube_url;
        $settingUpdate->copyright             = $request->copyright;
        $settingUpdate->service_title         = $request->service_title;
        $settingUpdate->service_sub_title     = $request->service_sub_title;
        $settingUpdate->home_core_title       = $request->home_core_title;
        $settingUpdate->home_core_image_title = $request->home_core_image_title;
        $settingUpdate->footer_about          = $request->footer_about;
        // Core Left Image
        if ($request->hasFile('home_core_image')) {
            @unlink(public_path('Backend/assets/media/logo/' . $settingUpdate->home_core_image));
            $core_images = hexdec(uniqid()) . '.' . $request->home_core_image->getClientOriginalExtension();
            Image::make($request->home_core_image)->resize(1032, 670)->save('public/Backend/assets/media/logo/' . $core_images);
            $settingUpdate->home_core_image = $core_images;
        }
        $settingUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'Setting Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    // Site Seo Setting ==============
    public function seo()
    {
        $seo = seosetting::first();
        return view('Backend.Admin.settings.seo_setting', compact('seo'));
    }
    // site seo Update ===============
    public function seoUpdate(Request $request, $id)
    {
        // validatin
        $request->validate([
            'meta_title'  => 'required',
            'meta_author' => 'required',
            'meta_tag'    => 'required',
        ]);
        // update
        $seoUpdate                   = seosetting::find($id);
        $seoUpdate->meta_title       = $request->meta_title;
        $seoUpdate->meta_author      = $request->meta_author;
        $seoUpdate->meta_tag         = $request->meta_tag;
        $seoUpdate->meta_description = $request->meta_description;
        $seoUpdate->google_analytics = $request->google_analytics;
        $seoUpdate->bring_analytics  = $request->bring_analytics;
        $seoUpdate->save();
        // Notification...
        $notification = array(
            'message'    => 'Seo setting successfuly Updated',
            'alert-type' => 'success',
        );
        // Redirect
        return redirect()->back()->with($notification);
    }
}
