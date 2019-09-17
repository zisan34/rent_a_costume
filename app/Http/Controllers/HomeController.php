<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SiteSetting;

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
}
