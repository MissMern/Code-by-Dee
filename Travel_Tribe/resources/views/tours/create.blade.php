@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Create New Tour</h2>

    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Tour Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Tour Description</label>
            <textarea name="description" class="form-control" id="description" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="location" value="{{ old('location') }}" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (e.g. 3 days, 1 week)</label>
            <input type="text" name="duration" class="form-control" id="duration" value="{{ old('duration') }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (USD)</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" value="{{ old('price') }}" required>
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Tour Image</label>
            <input type="file" name="image_url" class="form-control" id="image_url">
        </div>

        <button type="submit" class="btn btn-primary">Create Tour</button>
    </form>
</div>
@endsection
