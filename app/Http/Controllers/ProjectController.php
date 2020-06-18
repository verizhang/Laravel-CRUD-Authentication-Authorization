<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Policies\ProjectPolicy;

class ProjectController extends Controller
{
    public function __constructor(Project $project)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::where('user_id',auth()->id())->get();
        return view('home', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        Project::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=> auth()->id()
        ]);
        return redirect('/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $this->authorize('access',$project);
        return view('detail',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('access',$project);
        return view('edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('access',$project);
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $project->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=> auth()->id()
        ]);
        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('access',$project);
        $project->delete();
        return redirect('/project');
    }
}
