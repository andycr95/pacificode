<?php

namespace App\Http\Controllers;

use App\serviceFeatures;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
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
     * 
     */
    public function store(Request $request)
    {
        
        $servicefeatures = new Servicefeatures ();
        $servicefeatures->features_title = $request->servicefeatures_title;
        $servicefeatures->service_id = $request->service_id;
        $servicefeatures->features_body = $request->servicefeatures_body;
        if ($request->servicefeatures_photo) {
            $base64_str = substr($request->servicefeatures_photo, strpos($request->servicefeatures_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $servicefeatures->features_photo ='https://cloud.pacificode.co/service_features/'.$timestampName;
            Storage::disk('do')->put('service_features/'.$timestampName, $image, 'public');
        }

       $servicefeatures->save();  

        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\serviceFeatures  $serviceFeatures
     * @return \Illuminate\Http\Response
     */
    public function show(serviceFeatures $serviceFeatures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serviceFeatures  $serviceFeatures
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceFeatures $serviceFeatures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serviceFeatures  $serviceFeatures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceFeatures $serviceFeatures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serviceFeatures  $serviceFeatures
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceFeatures $serviceFeatures)
    {
        //
    }
}
