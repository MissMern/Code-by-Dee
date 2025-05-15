@extends('layouts.app')

@section('content')
    <ul class="space-y-4">
    @forelse ($todos as $todo)
        <li class="p-4 border rounded-lg bg-gray-50 shadow-sm">
            <h3 class="text-lg font-semibold text-gray-800">{{ $todo->title }}</h3>
            <p class="text-sm text-gray-600 mt-1">{{ $todo->description }}</p>
            <div class="mt-3 space-x-4">
                <a href="{{ route('todos.edit', $todo->id) }}" class="text-blue-600 hover:underline">✏️ Edit</a>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;">
                 @csrf
                 @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline bg-transparent border-none cursor-pointer">
                    🗑️ Delete
                </button>
            </form>
                <a href="{{ route('todos.view', $todo->id) }}" class="text-blue-600 hover:underline">🔍 View</a >

            </div>
        </li>
    @empty
        <li class="text-gray-500 italic">No tasks found. Maybe go create one? 🌱</li>
    @endforelse
</ul>

    </div>
@endsection
