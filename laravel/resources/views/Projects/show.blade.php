@extends('layout')

@section('content')

    <h1 class="title">{{$project->title}}</h1>

    <div class="content">
        {{$project->description}}

        <p>
            <a href="/projects/{{$project->id}}/edit">Edit</a>
        </p>
    </div>

    @if ($project->tasks->count())
        <div class="box">
            <h3>Project Tasks:</h3>
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/completed-task/{{$task->id}}">
                        @csrf
                        @if($task->completed)
                            @method('DELETE')
                        @endif
                        <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                            <input type="checkbox" name="completed"
                                   onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    {{--Add new task to this project--}}

    <form method="post" action="/projects/{{$project->id}}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
        @include('errors')
    </form>

@endsection
