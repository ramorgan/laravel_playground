<?php

namespace App\Http\Controllers;

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
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('Projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if ($project->owner_id !== auth()->id()) {
            abort(403);
        }
        return view('Projects.show', compact('project'));
    }

    public function create()
    {
        return view('Projects.create');
    }

    public function store()
    {
        $attributes = \request()->validate([
            'title' => ['required','min:3', 'max:254'],
            'description' => ['required', 'min:3'],
        ]);

        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

        return redirect('/projects');
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
