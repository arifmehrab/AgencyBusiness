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
}
