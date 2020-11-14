<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Frontend Index ===========
    public function index(){
        return view('Frontend.index');
    }
    // About-Us Pages ==========
    public function aboutUs()
    {
        return view('Frontend.pages.about_us');
    }
    // Blog Page ==============
    public function Blog()
    {
        return view('Frontend.pages.blog');
    }
    // Contact Page ==============
    public function contactus()
    {
        return view('Frontend.pages.contact_us');
    }
}
