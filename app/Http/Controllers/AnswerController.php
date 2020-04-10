<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Faq;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getFaqs(){
         $faqs= Faq::All();
         return response()->json($services, 200);

     }

     public function getFaq(){
        $faq= Faq::Find($request->id);
        return response()->json($services, 200);

    }

    public function index()
    { $answer = Answer::Find($request->id);
        $answers= Answer::All();
        $faq = Faq::Find($request->id);
        $faqs = Faq::All();
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
                $answers= Answer::All();
                $answer = Answer::Find($request->id);
                $faq = Faq::Find($request->id);
                $faqs = Faq::All();

        
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
