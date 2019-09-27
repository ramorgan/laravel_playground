@extends('layout)
@section('content')
    <h1>Create a new Projects</h1>

    <form method="POST" action="/projects">

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" required/>
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Project description</label>
            <div class="control">
                <textarea class="textarea {{$errors->has('title') ? 'is-danger' : ''}}"
                          name="description" required></textarea>
            </div>
        </div>
        <div>
            <button type="submit"> Create Project</button>
        </div>

        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                </ul>
            </div>
        @endif
    </form>s
@endsection
