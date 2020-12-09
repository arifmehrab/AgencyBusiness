<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\contactinfo;
use App\Models\aboutcontent;
use App\Models\brand;
use App\Models\category;
use App\Models\contactmsg;
use App\Models\countdown;
use App\Models\customerreview;
use App\Models\homecorefeature;
use App\Models\newsletter;
use App\Models\ourteam;
use App\Models\post;
use App\Models\securitypage;
use App\Models\seosetting;
use App\Models\service;
use App\Models\setting;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class FrontendController extends Controller
{
    // Frontend Index ===========
    public function index()
    {
        // Seo Meta
        $seo = seosetting::first();
        SEOMeta::setTitle($seo->meta_title);
        SEOMeta::setDescription($seo->meta_description);

        OpenGraph::setDescription($seo->meta_description);
        OpenGraph::setTitle($seo->meta_title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        // Slider
        $sliders         = slider::all();
        $homeCorePetures = homecorefeature::select('core_title', 'short_description')->get();
        $countDowns      = countdown::select('count_number', 'name')->get();
        $customerReviews = customerreview::select('customer_name', 'customer_image', 'customer_review')->get();
        $clients = brand::select('brand_logo', 'brand_url')->get();
        $setting = setting::select('service_title', 'service_sub_title', 'home_core_title', 'home_core_image', 'home_core_image_title')->first();
        // Services
        $services = service::orderBy('id', 'ASC')->get();
        foreach($services as $row) {
            SEOMeta::addKeyword($row->service_title);
        }

        // Home Page Blog 
        $posts = post::select('title', 'slug', 'image', 'date')->latest()->take(3)->get();
       
        return view('Frontend.index', compact('sliders', 'homeCorePetures', 'countDowns', 'customerReviews', 'clients', 'setting', 'services', 'posts'));
    }



    // About-Us Pages ==========
    public function aboutUs()
    {
        $aboutContents = aboutcontent::first();
        $ourTeams = ourteam::orderBy('id', 'ASC')->get();
        $brands = brand::select('brand_logo')->get();

        return view('Frontend.pages.about_us', compact('aboutContents', 'ourTeams', 'brands'));
    }



    // Services Single View ================
    public function singleService($slug)
    {
        $servicesView = service::where('service_slug', $slug)->first();
        // Seo Meta
        $a = htmlentities($servicesView->service_body);
        SEOMeta::setTitle($servicesView->service_title);
        SEOMeta::setDescription(html_entity_decode($a));
        SEOMeta::addMeta('article:published_time', $servicesView->created_at, 'property');
        SEOMeta::addMeta('article:section', $servicesView->service_title, 'property');
        SEOMeta::addKeyword($servicesView->service_keyword);

        OpenGraph::setDescription(html_entity_decode($a));
        OpenGraph::setTitle($servicesView->service_title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        
        // All Services
        $services = service::orderBy('id', 'ASC')->get();
        
        return view('Frontend.pages.service_view', compact('servicesView', 'services'));
    }



    // Blog Page ==============
    public function Blog()
    {
         // Seo Meta
         $seo = seosetting::first();
         SEOMeta::setTitle($seo->meta_title);
         SEOMeta::setDescription($seo->meta_description);
 
         OpenGraph::setDescription($seo->meta_description);
         OpenGraph::setTitle($seo->meta_title);
         OpenGraph::setUrl('http://current.url.com');
         OpenGraph::addProperty('type', 'articles');

        // Blogs
        $blogs = post::where('status', 1)->latest()->paginate(12);

        return view('Frontend.pages.blog', compact('blogs'));
    }


    // Blog Single View =========
    public function BlogSingle($slug)
    {
        $blogSingle = post::where('slug', $slug)->first();
        // Seo
        SEOMeta::setTitle($blogSingle->title);
        SEOMeta::setDescription(html_entity_decode($blogSingle->body));
        SEOMeta::addMeta('article:published_time', $blogSingle->date, 'property');
        SEOMeta::addMeta('article:section', $blogSingle->title, 'property');
        SEOMeta::addKeyword($blogSingle->tags);

        OpenGraph::setDescription(html_entity_decode($blogSingle->body));
        OpenGraph::setTitle($blogSingle->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        // Latest Post 
        $latestPost = post::latest()->take(5)->get();

        // Categories
        $categories = category::all();

        return view('Frontend.pages.blog_single', compact('blogSingle', 'latestPost', 'categories'));
    }



    // Category Wais Blogs =================
    public function categoryBlogs($slug)
    {
        $category = category::where('category_slug', $slug)->first();
        $catPosts = $category->posts()->latest()->paginate(20);

        return view('Frontend.pages.category_blog', compact('catPosts', 'category'));
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
        Mail::to('topupsoft@gmail.com')->send(new contactinfo($msgStore));
        // Notification
        $notification = array(
            'message'    => 'Message Send Successfully! We Contact Soon Thanks',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->back()->with($notification);
    }



    // Privacy Page ========================
    public function privacy()
    {
        $privacy_policy = securitypage::select('privacy_policy')->first();
        return view('Frontend.pages.privacy', compact('privacy_policy'));
    }



    // terms Page ========================
    public function terms()
    {
        $termsOfUse = securitypage::select('terms_of_use')->first();
        return view('Frontend.pages.terms', compact('termsOfUse'));
    }



    // refundPolicy Page ========================
    public function refundPolicy()
    {
        $returnPolicy = securitypage::select('return_policy')->first();
        return view('Frontend.pages.refundPolicy', compact('returnPolicy'));
    }

}
