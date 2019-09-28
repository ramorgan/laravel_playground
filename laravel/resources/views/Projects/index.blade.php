@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    @foreach($projects as $project)
        <li>
            <a href="/projects/{{$project->id}}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
    <br/>
    <a href="/projects/create">Create a new Project</a>

@endsection
