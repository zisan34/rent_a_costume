<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\CustomMail;

use App\User;


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

    public function multipleEmail()
    {
    	$users=User::orderBy('created_at','DESC')->get();

    	return view('admin.email-multiple')->with('users',$users);
    }

    public function sendMultipleMail(Request $request)
    {    	
    	$data=request()->validate([
    		'email.*'=>'required|email',
    		'subject'=>'string|nullable',
    		'message'=>'required']);

    	foreach($data['email'] as $email)
    	{
	    	Mail::to($email)->send(new CustomMail($data));	
    	}
    	return redirect()->route('admin.dashboard');

    }
}
