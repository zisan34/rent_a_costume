<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Country;
use App\Image;
use App\City;
use App\User;
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
        return view('about',$this->data);
    }
    public function mission()
    {
        return view('mission',$this->data);
    }
    public function contactus(){
        $this->site_data=DB::table('site_settings')->first();
        return view('contactus',$this->data);
    }
    public function myprofile(){
        $this->me=Auth::user();
        $this->country=Country::find($this->me->country_id);
        $this->city=City::find($this->me->city_id);
        $this->user_image=Image::where('type','App\User')->where('type_id',$this->me->id)->first();
        return view('myprofile',$this->data);

    }
    public function edit_my_profile(Request $request){
        $u=Auth::user()->id;
        $user=User::find($u);
        $user->name=$request->name;
        $user->phone=$request->phone;
        if($request->hasFile('image')){
            $image = $request->File('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/user/', $filename);
            $check=Image::where('type','App\User')->where('type_id',$u)->first();
            if($check){
              
                $check->image = $filename;
                $check->type = 'App\User';
                $check->type_id = $u;
                $check->save();
            }else{
                $img = new Image;
                $img->image = $filename;
                $img->type = 'App\User';
                $img->type_id = $u;
                $img->save();
            }
            
        }
       $user->save();
       return redirect()->back();

    }
    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }
}
