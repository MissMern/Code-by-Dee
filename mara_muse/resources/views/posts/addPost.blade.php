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
      <form>
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
          <label for="image" class="form-label fw-semibold">Upload Image</label>
          <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png, .gif">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Add Post</button>
        </div>
      </form>
    </div>
  </div>
</main>
<!-- Footer Section -->
@endsection
