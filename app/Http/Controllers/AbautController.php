<?php

namespace App\Http\Controllers;

use App\abaut;
use Illuminate\Http\Request;

class AbautController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('abaut.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\abaut  $abaut
     * @return \Illuminate\Http\Response
     */
    public function show(abaut $abaut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\abaut  $abaut
     * @return \Illuminate\Http\Response
     */
    public function edit(abaut $abaut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\abaut  $abaut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, abaut $abaut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\abaut  $abaut
     * @return \Illuminate\Http\Response
     */
    public function destroy(abaut $abaut)
    {
        //
    }
}
