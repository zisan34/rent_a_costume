<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\CustomMail;


class EmailsController extends Controller
{
    //
    public function customMail($email)
    {
    	return view('admin.email-compose')->with('email',$email);
    }
    public function sendCustomMail()
    {
    	$email=request()->validate([
    		'email'=>'required|email',
    		'subject'=>'string|nullable',
    		'message'=>'required']);
    	Mail::to($email['email'])->send(new CustomMail($email));

    	return redirect()->route('admin.dashboard');

    }
}
