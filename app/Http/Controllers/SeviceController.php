<?php

namespace App\Http\Controllers;

use App\sevice;
use Illuminate\Http\Request;

class SeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("service.index");
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
     * @param  \App\sevice  $sevice
     * @return \Illuminate\Http\Response
     */
    public function show(sevice $sevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sevice  $sevice
     * @return \Illuminate\Http\Response
     */
    public function edit(sevice $sevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sevice  $sevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sevice $sevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sevice  $sevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(sevice $sevice)
    {
        //
    }
}
