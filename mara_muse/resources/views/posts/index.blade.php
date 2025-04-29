@extends('layouts.app')
@section('content')
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 40vh; background: url('images/safari-posts-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4 fw-bold">Mara Muse Blog Posts</h1>
    </div>
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-4">Recent Posts</h2>
           <!--TABLE TO DISPLAY ADDED POSTS-->
            <table class="table table-bordered table-striped" style="background-color: rgba(255, 255, 255, 0.8);">
                <thead>
                    <tr>
                        
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('posts.view', $post->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Button to add a new post -->
            <div class="text-center mt-4">
                <a href="{{ route('posts.create') }}" class="btn btn-success rounded-pill px-5 py-2">Add New Post</a> 
            </div>
        </div>
    </div>
</main>
@endsection