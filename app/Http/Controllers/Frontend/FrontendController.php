<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\contactinfo;
use App\Models\aboutcontent;
use App\Models\brand;
use App\Models\contactmsg;
use App\Models\countdown;
use App\Models\customerreview;
use App\Models\homecorefeature;
use App\Models\newsletter;
use App\Models\ourteam;
use App\Models\setting;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    // Frontend Index ===========
    public function index()
    {
        $sliders         = slider::all();
        $homeCorePetures = homecorefeature::select('core_title', 'short_description')->get();
        $countDowns      = countdown::select('count_number', 'name')->get();
        $customerReviews = customerreview::select('customer_name', 'customer_image', 'customer_review')->get();
        $clients = brand::select('brand_logo', 'brand_url')->get();
        $setting = setting::select('service_title', 'service_sub_title', 'home_core_title', 'home_core_image', 'home_core_image_title')->first();

        return view('Frontend.index', compact('sliders', 'homeCorePetures', 'countDowns', 'customerReviews', 'clients', 'setting'));
    }

    // About-Us Pages ==========
    public function aboutUs()
    {
        $aboutContents = aboutcontent::first();
        $ourTeams = ourteam::orderBy('id', 'ASC')->get();
        $brands = brand::select('brand_logo')->get();

        return view('Frontend.pages.about_us', compact('aboutContents', 'ourTeams', 'brands'));
    }

    // Blog Page ==============
    public function Blog()
    {
        return view('Frontend.pages.blog');
    }

    // portfolio pages ===========
    public function portfolio()
    {
        return view('Frontend.pages.portfolio');
    }

    // Contact Page ==============
    public function contactus()
    {
        return view('Frontend.pages.contact_us');
    }

    // Newsletter
    public function newsLetterStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $newsLetterStore        = new newsletter();
        $newsLetterStore->email = $request->email;
        $newsLetterStore->save();
        // Notification
        $notification = array(
            'message'    => 'subscribe Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->back()->with($notification);
    }

    // Contact MSG Store ==============
    public function contactMsgStore(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'        => 'required|email',
            'phone_number' => 'required',
            'subject'      => 'required',
        ]);
        // Msg Store
        $msgStore               = new contactmsg();
        $msgStore->name         = $request->name;
        $msgStore->email        = $request->email;
        $msgStore->phone_number = $request->phone_number;
        $msgStore->subject      = $request->subject;
        $msgStore->message      = $request->message;
        $msgStore->save();
        // Send Mail
        Mail::to('arifmahrab22@gmail.com')->send(new contactinfo($msgStore));
        // Notification
        $notification = array(
            'message'    => 'Message Send Successfully! We Contact Soon Thanks',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->back()->with($notification);
    }

}
