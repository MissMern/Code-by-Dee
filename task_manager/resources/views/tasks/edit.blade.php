@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>

    <form action="{{ url('/update/'.$task->id) }}" method="POST">
        @csrf
        

        <label>Title:</label>
        <input type="text" name="name" value="{{ $task->name }}" required><br>

        <label>Description:</label>
        <textarea name="description" required>{{ $task->description }}</textarea><br>

        

        <button type="submit">Update Task</button>
    </form>
@endsection
