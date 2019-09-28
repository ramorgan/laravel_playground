@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @yield('project_content')
                </div>
            </div>
        </div>
    </div>
@endsection