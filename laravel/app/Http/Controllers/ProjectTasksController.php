<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {
        $attributes = \request()->validate(['description' => ['required', 'min:3', 'max:254']]);
        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task, $id)
    {
        $task = Task::find($id);
        if (\request()->has('completed')) {
            $task->complete();
        }
        else{
            $task->incomplete();
        }
        $task->complete(\request()->has('completed'));
        return back();
    }
}
