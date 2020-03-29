<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index');
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
      $project = new project();
      $project->project_title = $request->project_title;
      $project->project_customer = $request->project_customer;
      $project->project_autor = $request->project_autor;
      $project->project_link = $request->project_link;
      $project->project_extract = $request->project_extract;
      if ($request->project_photo) {
          $base64_str = substr($request->project_photo, strpos($request->project_photo, ",")+1);
          $image = base64_decode($base64_str);
          $timestampName = microtime(true) . '.jpg';
          $project->project_photo ='https://cloud.pacificode.co/posts/'.$timestampName;
          Storage::disk('do')->put('projects/'.$timestampName, $image, 'public');
      }
      $project->category_id = $request->project_category;
      $project->save();
      return response()->json(true, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
        //return view('portfolio.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
