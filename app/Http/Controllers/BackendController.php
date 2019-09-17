<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Calendar;

use App\User;
use App\Event;
use App\Sitesetting;
use App\Faq;
use App\FaqCategory;


class BackendController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->site_title = 'Category & Brand Controll';
    }
    public function index($id)
    {
        return view('admin.'.$id,$this->data);
    }
    public function calendar(){
        $this->user=Auth::user();
        $events = [];
        $data = Event::all();
        if($data->count()) 
        {
            foreach ($data as $key => $value) 
            {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => route('event.show',['id'=>$value->id])
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        // return view('fullcalender', compact('calendar'));
        return view('admin.apps-calendar')->with('calendar',$calendar);
    }
   
    public function appscontacts(){        
       $users =User::all(); 
       return view('admin.apps-contacts')->with('users',$users);
    }
    public function appstickets(){
        $this->user=Auth::user();
        return view('admin.apps-tickets');
    }
    public function appscompanies(){
        $this->user=Auth::user();
        return view('admin.apps-companies');
    }
    public function ecommerceproducts(){
        $this->user=Auth::user();
        return view('admin.ecommerce-products');
    }
    public function ecommerceprductdetail(){
        return view('admin.ecommerce-prduct-detail');
    }
    public function ecommerceproductedit(){
        return view('admin.ecommerce-product-edit');
    }
    public function ecommerceorders(){
        return view('admin.ecommerce-orders');
    }
    public function ecommercesellers(){
        return view('admin.ecommerce-sellers');
    }
    public function create()
    {
        //
    }





    public function siteSettings()
    {
        $settings=Sitesetting::find(1);
        return view('admin.site-settings')->with('settings',$settings);
    }
    public function updatesiteSettings(Request $request)
    {        
        $this->validate($request,[
            'w_name'=>'required|max:255',
            'w_email'=>'required|email',
            'w_address'=>'required|string',
            'w_phone'=>'required|string',
            'w_about'=>'required',
            'w_mission'=>'required',
            'w_facebook'=>'nullable|url',
            'w_youtube'=>'nullable|url',
            'w_twitter'=>'nullable|url',
        ]);
        
        $settings=Sitesetting::find(1);


        $settings->w_name=$request->w_name;
        $settings->w_email=$request->w_email;
        $settings->w_address=$request->w_address;
        $settings->w_phone=$request->w_phone;
        $settings->copyright=$request->copyright;
        $settings->w_about=$request->w_about;
        $settings->w_mission=$request->w_mission;
        $settings->w_facebook=$request->w_facebook;
        $settings->w_youtube=$request->w_youtube;
        $settings->w_twitter=$request->w_twitter;


        if($request->hasFile('w_logo'))
        {
            $w_logo=$request->w_logo;
            $w_logo_new=time().'_'.$w_logo->getClientOriginalName();
            $w_logo->move('images',$w_logo_new);
            $settings->w_logo='/images/'.$w_logo_new; 

        }
        if($request->hasFile('w_image'))
        {
            $w_image=$request->w_image;
            $w_image_new=time().'_'.$w_image->getClientOriginalName();
            $w_image->move('images',$w_image_new);
            $settings->w_image='/images/'.$w_image_new; 

        }


        $settings->save();

        return redirect()->route('siteSettings');
    }


    public function userManagement()
    {
        $users=User::orderBy('updated_at','desc')->get();
        return view('admin.user-management')->with('users',$users);
    }

    public function userDisable($id)
    {
        $user_id=decrypt($id);
        $user=User::find($user_id);

        $user->status=0;
        $user->save();

        return redirect()->back();
    }


    public function userEnable($id)
    {
        $user_id=decrypt($id);
        $user=User::find($user_id);

        $user->status=1;
        $user->save();

        return redirect()->back();
    }

    public function dashboard(){
        $this->user=Auth::user();
       // return $this->data;
        return view('admin.ecommerce-dashboard',$this->data);
    }


    public function faqs()
    {
        $faqs=Faq::all();
        $faqCategories=FaqCategory::all();

        return view('admin.faqs')->with('faqs',$faqs)
                                ->with('faqCategories',$faqCategories);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
 