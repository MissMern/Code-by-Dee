@extends('layouts.app')

@section('content')

<!-- Hero Section with Fallback Image -->
<section class="text-center text-light d-flex align-items-center justify-content-center"
    style="height: 50vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $post->image ? asset($post->image) : asset('images/placeholder.png') }}') no-repeat center center; background-size: cover; margin-top: 75px;">
    <div class="p-5 rounded">
        <h1 class="display-4 fw-bold">{{ $post->title }}</h1>
        <p class="lead fst-italic">by {{ $post->user->name }} | {{ $post->created_at->format('M d, Y') }}</p>
    </div>
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <!-- Optional: Full Image View -->
            @if ($post->image)
                <div class="text-center mb-4">
                    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded shadow"
                        style="max-height: 450px; object-fit: cover;">
                </div>
            @endif

            <!-- Content Card -->
            <div class="bg-white p-5 rounded shadow-sm">
                <h2 class="fw-bold mb-3">{{ $post->title }}</h2>

                <div class="mb-4 text-muted small">
                    <strong>Category:</strong> {{ $post->category->name }} |
                    <strong>Author:</strong> {{ $post->user->name }} |
                    <strong>Posted:</strong> {{ $post->created_at->format('d M Y, h:i A') }}
                </div>

                <div class="fs-5 lh-lg" style="white-space: pre-wrap;">
                    {{ $post->content }}
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-5">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-success rounded-pill px-5 py-2">
                    ← Back to All Posts
                </a>
            </div>
<!-- Reactions (Visual Only) -->
<div class="mt-5 text-center">
    <div class="d-inline-flex gap-4 align-items-center">
        <button class="btn btn-outline-success rounded-pill px-4 py-2" onclick="incrementLike()">
            👍 Like <span id="likeCount">0</span>
        </button>

        <button class="btn btn-outline-danger rounded-pill px-4 py-2" onclick="incrementDislike()">
            👎 Dislike <span id="dislikeCount">0</span>
        </button>
    </div>
</div>

        </div>
    </div>
</main>

@endsection
