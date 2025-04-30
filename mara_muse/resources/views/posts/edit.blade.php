@extends('layouts.app')
@section('content')
<!--form to edit a post-->  
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 40vh; background: url('images/safari-posts-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4 fw-bold">Edit Post</h1>
    </div>
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Edit Post</h2>
            <form action="{{ route('posts.update', $post->id) }}" method="POST" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label fw-semibold">Category</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label fw-semibold">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Update Post</button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary rounded-pill px-5 py-2">Back to Posts</a>
    </div>
</main>
@endsection