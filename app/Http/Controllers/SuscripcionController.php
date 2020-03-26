<?php

namespace App\Http\Controllers;

use App\suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $suscripcion= new Suscripcion();
        $suscripcion->email= $request->email;
        $suscripcion->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(suscripcion $suscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(suscripcion $suscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suscripcion $suscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(suscripcion $suscripcion)
    {
        //
    }
}
