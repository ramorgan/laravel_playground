<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('Projects.index', compact('projects'));
    }

    public function create()
    {
        return view('Projects.create');
    }

    public function store()
    {
        $project = new Project();
        $project->title = \request('title');
        $project->description = \request('description');

        $project->save();

        return redirect('/projects');
    }

    public function show()
    {

    }

    public function edit($id)
    {

        $project = Project::find($id);

        return view('Projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::find($id);

        $project->title = \request('title');
        $project->description = \request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('/projects');
    }
}
