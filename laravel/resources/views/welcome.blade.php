@extends('layout')
@section('content')
    <h1>Hello World!</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
        <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>
@endsection