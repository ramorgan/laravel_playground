<?php

namespace App\Http\Controllers;

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
}
