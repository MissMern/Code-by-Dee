@extends('layouts.app')
@section('content')
<!-- display single post -->
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 40vh; background: url('images/safari-posts-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4 fw-bold">Post Details</h1>
    </div>
</section>
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p><strong>Category:</strong> {{ $post->category->name }}</p>
            <p>{{ $post->content }}</p>
            <div class="text-center mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary rounded-pill px-5 py-2">Back to Posts</a> 
            </div>
        </div>
    </div>
</main>
@endsection