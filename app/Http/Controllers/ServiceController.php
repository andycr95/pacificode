<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->category_id = $request->category_service;
        $service->service_extract = $request->service_extract;
        $service->service_body = $request->service_body;
        if ($request->service_photo) {
            $base64_str = substr($request->service_photo, strpos($request->service_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $service->service_photo ='https://cloud.pacificode.co/services/'.$timestampName;
            Storage::disk('do')->put('services/'.$timestampName, $image, 'public');
        }
        $service->save();
       
        return response()->json(true, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
