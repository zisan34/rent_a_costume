<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CustomerQuery;

use App\CustomerQueryReply;

use Auth;

class CustomerQueriesController extends Controller
{
    //
    public function index()
    {
    	return view('support.index')->with('queries',Auth::user()->queries);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title'=>'required|string',
    		'description'=>'required|string'
    	])
    	;
    	$customerQuery=CustomerQuery::create([
    		'title'=>$request->title,
    		'description'=>$request->description,
    		'user_id'=>Auth::id()
    	]);

    	if($request->hasFile('image'))
        {
            $image=$request->image;
            $image_new=time().'_'.$image->getClientOriginalName();
            $image->move('images',$image_new);
            $customerQuery->image='/images/'.$image_new; 
            $customerQuery->save();

        }

        return redirect()->route('support');

    

    }
    public function show($id)
    {
    	$query_id=decrypt($id);
    	$query=CustomerQuery::find($query_id);
    	if($query->user==Auth::user()||Auth::user()->is_super_admin)
    	{
    		return view('support.show')->with('query',$query);
    	}
    	return redirect()->back()->with('error','Permission Denied');
    }
    public function addComment(Request $request)
    {
    	$this->validate($request,[
    		'query_id'=>'required',
    		'reply'=>'required'
    	]);
    	$query_id=decrypt($request->query_id);

    	$comment=CustomerQueryReply::create([
    		'user_id'=>Auth::id(),
    		'reply'=>$request->reply,
    		'customer_query_id'=>$query_id
    	]);
    	return redirect()->route('support.show',['id'=>encrypt($query_id)]);
    }
}
