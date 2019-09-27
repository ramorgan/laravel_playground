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

    public function edit()
    {

    }


    public function update()
    {

    }

    public function destroy()
    {

    }
}
