<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{

    // index
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
        // return view('projects.index', ['projects' => $projects]);
    }
    // show
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    // create
    public function create()
    {
        return view('projects.create');
    }
    // edit
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    // store
    public function store()
    {
        $validate = request()->validate([
          'title' => 'required',
          'description' => 'required'
        ]);
        
        Project::create($validate);

        return redirect('/projects');
    }
    // update
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }
    // destroy
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
