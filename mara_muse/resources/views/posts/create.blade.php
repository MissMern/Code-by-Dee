@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="text-center text-light d-flex align-items-center justify-content-center">
    <h1 class="display-4 fw-bold" style="color:black;">Add New Post</h1>
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Create a New Post</h2>

            <!-- Create Post Form -->
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
                style="background-color: rgba(255, 255, 255, 0.9); padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                @csrf

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
                </div>

                <!-- Content -->
                <div class="mb-3">
    <label for="content" class="form-label fw-bold">Content</label>
    <input id="content" type="hidden" name="content">
    <trix-editor input="content"></trix-editor>
</div>


                <!-- Category -->
                <div class="mb-3">
                    <label for="category_id" class="form-label fw-bold">Category</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Post Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="form-text text-muted">Optional: Upload a featured image for the post.</small>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Add Post</button>
                </div>
                <div class="text-center mt-3">
                        <a href="{{ route('posts.index') }}" class="text-decoration-none text-muted">← Back to All Posts</a>
                    </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Back Button -->
 
</main>
@endsection
