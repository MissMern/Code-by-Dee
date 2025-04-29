@extends('layouts.app')
@section('content')
<!--form to add a new category-->
<section class="text-center text-light d-flex align-items-center justify-content-center">
 
    <h1 class="display-4 fw-bold" style="color:black;">Add New Category</h1>
 
</section>
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center mb-4">Create a New Category</h2>
      <form action="{{ route('categories.store') }}" method="POST" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label fw-semibold">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter category description"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Add Category</button>
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
</main> 
<!-- Footer Section -->
 @endsection