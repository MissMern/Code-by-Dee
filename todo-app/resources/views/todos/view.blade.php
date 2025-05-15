@extends('layouts.app')
@section('content')
<!--view a todo-->
        <div class="container">
            <h1>Todo Details</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->title }}</h5>
                    <p class="card-text">{{ $todo->description }}</p>
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection