<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except(['show']);
    }

    public function index()
    {

        return view('Projects.index', [
            'projects' => auth()->user()->projects,

        ]);
    }

    public function show(Project $project)
    {

        $this->authorize('update', $project);

        return view('Projects.show', compact('project'));
    }

    public function create()
    {

        return view('Projects.create');
    }

    public function store()
    {

        $attributes = \request()->validate([
            'title' => ['required', 'min:3', 'max:254'],
            'description' => ['required', 'min:3'],
        ]);

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        \Mail::to('ramorgan212@gmai.com')->send(new ProjectCreated($project));

        return redirect('/projects');
    }

    public function edit(Project $project)
    {

        $this->authorize('update', $project);

        return view('Projects.edit', compact('project'));
    }

    public function update(Project $project)
    {

        $this->authorize('update', $project);
        $project->update(\request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {

        $this->authorize('update', $project);
        $project->delete();

        return redirect('/projects');
    }
}
