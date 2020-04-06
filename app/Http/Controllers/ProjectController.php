<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use App\User;
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

    public function index(Request $request)
    {
        if ($request->categories) {
          $category = Category::find($request->category);
          $projects = Project::all();
          $categories = Category::all();
          $last_projects = Project::orderBy('created_at', 'desc')->limit(6)->get();
          return view('project.index', compact('projects','category','$last_projects'));
        } else {
          $projects = Project::orderBy('created_at', 'desc')->with('category')->paginate(3);
          $categories = Category::all();
          $last_projects = Project::orderBy('created_at', 'desc')->limit(6)->get();
          return view('project.index', compact('projects', 'categories', 'last_projects'));
        }

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
      $project->user_id = $request->project_autor;
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
      return response()->json("Proyecto guardado", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $project = Project::find($request->id);
      $category = Category::find($project->category_id);
      $user = User::find($project->user_id);
      $last_projects = Project::orderBy('created_at', 'desc')->limit(3)->get();
      return view('project.detail', compact('project','category','user','last_projects'));
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
      $project = Project::find($request->id);
      $project->project_title = $request->project_title;
      $project->project_customer = $request->project_customer;
      $project->user_id = $request->project_autor;
      $project->project_link = $request->project_link;
      $project->project_extract = $request->project_extract;
      if ($request->project_category) {
          $project->category_id = $request->project_category;
      }
      if ($request->project_photo != $project->project_photo) {
          $base64_str = substr($request->project_photo, strpos($request->project_photo, ",")+1);
          $image = base64_decode($base64_str);
          $timestampName = microtime(true) . '.jpg';
          $project->project_photo ='https://cloud.pacificode.co/projects/'.$timestampName;
          Storage::disk('do')->put('projects/'.$timestampName, $image, 'public');
      }
      $project->save();
      return response()->json("Project actualizado", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $project = Project::find($request->id);
      $project->delete();
      return response()->json("Proyecto eliminado", 200);
    }
}
