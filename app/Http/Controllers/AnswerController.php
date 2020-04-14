<?php

namespace App\Http\Controllers;

use App\answer;
use App\faq;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getFaqs(){
         $faqs= faq::All();
         return response()->json($services, 200);

     }

     public function getFaq(){
        $faq= faq::Find($request->id);
        return response()->json($services, 200);

    }

    public function index()
    { $answer = answer::Find($request->id);
        $answers= answer::All();
        $faq = faq::Find($request->id);
        $faqs = faq::All();
        return view('Faq.index', compact('answer', 'answers', 'faq','faqs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $answer = new Answer();
        $answer->name=$request->name;
        $answer->faq_id=$request->faq_id;
        $answer->save();
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
                $answers= answer::All();
                $answer = answer::Find($request->id);
                $faq = faq::Find($request->id);
                $faqs = faq::All();

        
        return view('Faq.index', compact('answer', 'answers', 'faq','faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(answer $answer)
    {
        //
    }
}
