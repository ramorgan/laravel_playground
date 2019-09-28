@extends('Projects.layout')

@section('project_content')
    <div class="card-header"><h1 class="title">Projects</h1></div>
    <div class="card-body">
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
        <br/>
        <a href="/projects/create">Create a new Project</a>
    </div>

@endsection
