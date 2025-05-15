@extends('layouts.app')
@section('content')

  <!--error message-->
  @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
          <strong class="font-bold">Whoops!</strong>
          <span class="block sm:inline">There were some problems with your input.</span>
      </div>
    @endif
    <!-- Success message -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow rounded-xl p-8">
        <h2 class="text-2xl font-semibold text-emerald-700 mb-4">✨ Add a New Task</h2>

        <!-- Form Starts -->
        <form action="{{ route('todos.store') }}" class="space-y-6" method="POST" >
            @csrf
            <!-- Task Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Task Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-400 focus:border-emerald-400"
                    placeholder="e.g., Water the garden">
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-400 focus:border-emerald-400"
                    placeholder="Add details about the task..."></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-medium rounded-lg shadow-sm">
                    🌱 Save Task
                </button>
            </div>
        </form>
        <!-- Form Ends -->
    </div>
@endsection
