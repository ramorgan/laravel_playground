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

        Project::create(\request(['title', 'description']));

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function edit(Project $project)
    {

        return view('Projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(\request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
