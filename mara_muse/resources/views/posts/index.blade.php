@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center text-light d-flex align-items-center justify-content-center"
    style="height: 50vh; background: url('images/safari.jpg') no-repeat center center; background-size: cover; margin-top: 75px;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4 fw-bold">Mara Muse Blog Posts</h1>
    </div>
</section>
<form class="d-flex justify-content-center align-items-center gap-2 my-3 p-2 rounded shadow-sm bg-white" 
      action="{{ url('/posts/search') }}" method="get" style="max-width: 940px; margin: auto;">

    @csrf

    <input 
        class="form-control form-control-lg rounded-pill px-4" 
        name="search" 
        type="search" 
        placeholder="🔍 Search content, titles..." 
        aria-label="Search" 
        style="flex: 1;"
    >

    <button 
        class="btn btn-success btn-lg rounded-pill px-4" 
        type="submit">
        Search
    </button>
</form>

<main class="container my-5">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-4">Recent Posts</h2>

            <!-- Empty State Check -->
            @if($posts->isEmpty())
                <p class="text-center">No posts available. Why not 
                    <a href="{{ route('posts.create') }}" class="text-decoration-none text-safari-olive">create a new post</a>?
                </p>
            @else
                <!-- Cards Section -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach($posts as $post)
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0 rounded">
                                <!-- Post Image -->
                                <img src="{{ asset($post->image ? $post->image : 'images/placeholder.png') }}" 
                                     class="card-img-top" 
                                     alt="{{ $post->title }}" 
                                     style="object-fit: cover; height: 200px;">

                                <div class="card-body">
                                    <!-- Post Title -->
                                    <h5 class="card-title">
                                        <a href="{{ route('posts.view', $post->id) }}" style="text-decoration: none; color: inherit;">
                                            {{ $post->title }}
                                        </a>
                                    </h5>

                                    <!-- Category -->
                                    <p class="card-text">
                                        <strong>Category:</strong> {{ $post->category?->name ?? 'Uncategorized' }}
                                    </p>

                                    <!-- Content Preview -->
                                    <p class="card-text">
                                        {!! Str::limit($post->content, 150) !!}...
                                    </p>

                                    <!-- Author & Date -->
                                    <p class="card-text text-muted">
                                        <small>
                                            by {{ $post->user?->name ?? 'Unknown Author' }} | {{ $post->created_at->format('M d, Y') }}
                                        </small>
                                    </p>
                                </div>

                                <!-- Actions -->
                                <div class="card-footer bg-white border-0 text-center d-flex justify-content-around">
                                    <a href="{{ route('posts.view', $post->id) }}" class="btn btn-safari-olive btn-sm px-4 py-2">View</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-dusty-orange btn-sm px-4 py-2">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-savannah-red btn-sm px-4 py-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Pagination -->
            <div class="text-center mt-4">
                {{ $posts->links('vendor.pagination.bootstrap-5') }}
            </div>

            <!-- Add New Post Button -->
            <div class="text-center mt-4">
                <a href="{{ route('posts.create') }}" class="btn btn-acacia-green rounded-pill px-5 py-2">
                    Add New Post
                </a>
            </div>
<!-- Quote Carousel -->
<div id="quoteCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner bg-light p-4 rounded shadow-sm">
        <div class="carousel-item active text-center">
            <blockquote class="blockquote">
                <p class="mb-0 fst-italic">"The environment is not ours, it is a treasure we hold in trust for future generations."</p>
                <footer class="blockquote-footer mt-2">Wangari Maathai</footer>
            </blockquote>
        </div>
       
       
        
    </div>

  


        </div>
    </div>
</main>

@endsection
