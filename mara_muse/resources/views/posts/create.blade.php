<!--add post page-->
@extends('layouts.app')
@section('content')
<!--form to add a new post-->
<section class="text-center text-light d-flex align-items-center justify-content-center">
 
    <h1 class="display-4 fw-bold" style="color:black;">Add New Post</h1>    

</section>
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center mb-4">Create a New Post</h2>
      <!--form to add a new post-->
       <!--corrected the form action to point to the correct route for storing posts-->
      <form action="{{ route('posts.store') }}" method="POST" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label fw-semibold">Post Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label fw-semibold">Content</label>
          <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter post content"></textarea>
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label
  fw-semibold">Category</label>
          <select class="form-select" id="category_id" name="category_id" required>
            <option value="" disabled selected>Select a category</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Add Post</button>
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
  </div>
</main>
<!-- Footer Section -->
@endsection