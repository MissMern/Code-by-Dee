@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-xl p-8 text-center">
        <h2 class="text-2xl font-semibold text-red-600 mb-4">⚠️ Confirm Delete</h2>
        <p class="text-gray-700 mb-6">Are you sure you want to delete the task: <strong>"Example Task Title"</strong>?</p>

        <div class="flex justify-center gap-4">
            <button type="button" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow-sm">
                Cancel
            </button>
            <button type="button" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow-sm">
                🗑️ Delete
            </button>
        </div>
    </div>
@endsection
