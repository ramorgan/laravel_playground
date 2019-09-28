@extends('layouts.app')
@section('content')
    <div class="card-header"><h1 class="title">Create a new Projects</h1></div>
    {{-- --}}
    <div class="card-body">
        <form method="POST" action="/projects">
            @csrf
            <div class="field">
                <label class="label" for="title">Project Title</label>
                <div class="control">
                    <input
                            type="text"
                            class="input {{$errors->has('title') ? 'is-danger' : ''}}"
                            name="title"
                            {{--required--}}
                            value="{{old('title')}}"
                    />
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">Project description</label>
                <div class="control">
                <textarea
                        class="textarea {{$errors->has('title') ? 'is-danger' : ''}}"
                        name="description"
                        {{--required--}}
                >{{old('description')}}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="is-link"> Create Project</button>
                </div>
            </div>
            @include('errors')
        </form>
    </div>
@endsection
