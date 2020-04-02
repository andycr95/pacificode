<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getProjects()
     {
         $projects = Project::all();
         return response()->json($projects, 200);
     }

     public function getProject(Request $request)
     {
         $project = Project::where('id', $request->id)->get();
         return response()->json($project, 200);
     }

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
      $project = new Project();
      $project->project_title = $request->project_title;
      $project->project_customer = $request->project_customer;
      $project->project_autor = $request->project_autor;
      $project->project_link = $request->project_link;
      $project->project_extract = $request->project_extract;
      if ($request->project_photo) {
          $base64_str = substr($request->project_photo, strpos($request->project_photo, ",")+1);
          $image = base64_decode($base64_str);
          $timestampName = microtime(true) . '.jpg';
          $project->project_photo ='https://cloud.pacificode.co/projects/'.$timestampName;
          Storage::disk('do')->put('projects/'.$timestampName, $image, 'public');
      }
      $project->category_id = $request->project_category;
      $project->save();
      return response()->json(true, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        //return view('portfolio.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
