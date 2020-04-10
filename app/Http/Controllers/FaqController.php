<?php

namespace App\Http\Controllers;

use App\faq;
use App\Answer;
use Illuminate\Http\Request;



class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs = Faq::All();
        //$answers = Answer::All();
        /*$faq = Faq::Find($request->id);
        $answer= Answer::Find($request->id);*/
        return view('faq.index'); 
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getFaqs(){
        $faqs= Faq::All();
        return response()->json($faqs, 200);

    }

    public function getFaq(){
       $faq= Faq::Find($request->id);
       return response()->json($services, 200);

   }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq= new Faq();
        $faq->name= $request->name;
        $faq->email= $request->email;
        $faq->subject= $request->subject;
        $faq->questions= $request->questions;
        $faq->save();
        
      //  Mail::to($contact->email)->send(new ContactMail($contact));
        //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    { 
        $faqs = Faq::All();
        $answers = Answer::All();
        $faq = Faq::Find($request->id);
        $answer= Answer::Find($request->id);
        return view('faq.index', compact('faqs','faq', 'answer', 'answers')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        //
    }
}
