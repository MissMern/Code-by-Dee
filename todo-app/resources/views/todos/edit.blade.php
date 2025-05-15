@extends('layouts.app')

@section('content')
<!--error message-->
    <div class="bg-white shadow rounded-xl p-8">
        <h2 class="text-2xl font-semibold text-emerald-700 mb-4">✏️ Edit Task</h2>

        <form class="space-y-6" method="POST" action="{{ route('todos.update', $todo->id) }}">
            @csrf
           
            
            <!-- Task Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Task Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-400 focus:border-emerald-400"
                    value="{{ $todo->title }}" required>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-400 focus:border-emerald-400" >{{ $todo->description }}</textarea>
            </div>

            <!-- Update Button -->
            <div class="text-right">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-sm">
                    🔄 Update Task
                </button>
            </div>
        </form>
    </div>
@endsection
