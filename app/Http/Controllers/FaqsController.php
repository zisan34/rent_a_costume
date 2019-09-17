<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;
use App\FaqCategory;
class FaqsController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request,[
            'faq_category'=>'required|integer',
            'question'=>'required|string',
            'answer'=>'required|string'
        ]);
        $faq=Faq::create([
            'faq_category_id'=>$request->faq_category,
            'question'=>$request->question,
            'answer'=>$request->answer
        ]);
        return redirect()->route('faqs');
    }
    public function show($id)
    {
        $faq=Faq::find($id);
        $faqCategories=FaqCategory::all();

        return view('admin.faq-show')->with('faq',$faq)->with('faqCategories',$faqCategories);

    }
    public function update(Request $request)
    {
        $this->validate($request,[
        	'faq_id'=>'required|integer',
            'faq_category'=>'required|integer',
            'question'=>'required|string',
            'answer'=>'required|string'
        ]);
        $faq=Faq::find($request->faq_id);

        $faq->faq_category_id=$request->faq_category;
        $faq->question=$request->question;
        $faq->answer=$request->answer;

        $faq->save();
        return redirect()->route('faqs');
    }
    public function destroy($id)
    {
        $faq=Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs');
        
    }
}
