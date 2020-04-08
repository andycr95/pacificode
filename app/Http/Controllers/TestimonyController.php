<?php

namespace App\Http\Controllers;

use App\testimony;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getTestimonies()
    {
        $testimonies = Testimony::all();
        return response()->json($testimonies, 200);
    }

    public function gettestimony(Request $request)
    {
        $testimony = Testimony::where('id', $request->id)->get();
        return response()->json($testimony, 200);
    }

    
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
        $testimony = new Testimony();
        $testimony->testimony_name = $request->testimony_name;
        $testimony->project_id = $request->project_id;
        $testimony->testimony_extract = $request->testimony_extract;
        $testimony->testimony_body = $request->testimony_body;
        if ($request->testimony_photo) {
            $base64_str = substr($request->testimony_photo, strpos($request->testimony_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $testimony->testimony_photo ='https://cloud.pacificode.co/testimonies/'.$timestampName;
            Storage::disk('do')->put('testimonies/'.$timestampName, $image, 'public');
        }
        $testimony->save();
       
        return response()->json(true, 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimony $testimony)
    {
        //
    }
}
