@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Task</h4>
        </div>

        <div class="card-body">
            <form action="{{ url('/update/'.$task->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label" style="font-size=10px;">Title</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $task->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Pending</option>
                        <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $task->status == 2 ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Update Task</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
