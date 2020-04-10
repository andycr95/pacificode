<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getServices()
    {
        $services = Service::all();
        return response()->json($services, 200);
    }

    public function getservice(Request $request)
    {
        $service = Service::where('id', $request->id)->get();

        return response()->json($service, 200);
    }



    public function index(Request $request)
    {
      
        $services = Service::All();
        $features = serviceFeatures::All();
        return view('service.index', compact('services','features'));
        

       
       // return view('service.index', compact('features'));
       



      
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
    public function show(Request $request)
     {
        $service = Service::Find($request->id);
        $services = Service::All();
        //$feature = serviceFeatures::Find($request->id);
        return view('service.detail', compact('service', 'services'));
        

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
    public function updateService( Request $request)

    {

        $service = Service::find($request->id);
        $service->service_name = $request->service_name;
        $service->category_id = $request->category_service;
        $service->service_extract = $request->service_extract;
        $service->service_body = $request->service_body;
        if ($request->service_photo) {
            $base64_str = substr($request->service_photo, strpos($request->service_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $service->service_photo ='https://cloud.pacificode.co/service/'.$timestampName;
            Storage::disk('do')->put('service/'.$timestampName, $image, 'public');
        }
        $service->save();


        return response()->json(true, 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $service = service::find($request->id);
        $service->delete();
        return response()->json("servicio eliminado", 200);
    }
}
