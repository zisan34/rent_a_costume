<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\City;
use App\Product;
use App\ProductCategory;
use Auth;
use CyrildeWit\EloquentViewable\Support\Period;
use CyrildeWit\EloquentViewable\Viewable;
use DB;

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
        //  $this->middleware('auth')->except('index');
        parent::__construct();
        $this->site_setting = DB::table('site_settings')->first();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->products = Product::all();
        $this->product_featureds = Product::orderBy('price', 'desc')->paginate(10);
        // $this->top_viewed_month=Product::orderByViews()->get();
        $this->last_products = Product::orderBy('created_at', 'desc')->paginate(10);
        $this->highlights = Product::orderBy('highlight', 'desc')->paginate(10);

        return view('index', $this->data);
    }
    public function faqs()
    {
        return view('faqs')->with('faqCategories',FaqCategory::all());  
        $this->products = Product::all();
        $this->product_featureds = Product::orderBy('price', 'desc')->paginate(10);
        // $this->top_viewed_month=Product::orderByViews()->get();
        $this->last_products = Product::orderBy('created_at', 'desc')->paginate(10);
        $this->highlights = Product::orderBy('highlight', 'desc')->paginate(10);

        return view('index', $this->data);
    }
    public function aboutUs()
    {
        return view('about');
    }
    public function mission()
    {
        return view('mission');
    }
    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }
}
