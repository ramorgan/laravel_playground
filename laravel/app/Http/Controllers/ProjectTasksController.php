<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    public function update($id)
    {
        $task = Task::find($id);
        $task->update([
            'completed' => \request()->has('completed'),
        ]);

        return back();
    }

    public function store(Project $project)
    {
        $attributes = \request()->validate(['description' => ['required', 'min:3', 'max:254']]);
        $project->addTask($attributes);

        return back();
    }
}
