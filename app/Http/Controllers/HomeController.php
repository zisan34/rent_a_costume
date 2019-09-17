<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SiteSetting;
use App\Faq;
use App\FaqCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siteSettings=SiteSetting::find(1);
        return view('index')->with('siteSettings',$siteSettings);
    }
    public function faqs()
    {
        return view('faqs')->with('faqCategories',FaqCategory::all());   
    }
}
