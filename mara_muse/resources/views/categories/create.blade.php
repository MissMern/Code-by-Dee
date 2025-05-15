@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 10vh; background: url('{{ asset('images/safari-bg.jpg') }}') no-repeat center center; background-size: cover;">
   
</section>

<!-- Form Section -->
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Create a New Category</h2>

            <!-- Create Post Form -->
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data"
                style="background-color: rgba(255, 255, 255, 0.9); padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                @csrf

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Post Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Enter category title" required>
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="content" class="form-label fw-semibold">Description</label>
                    <textarea class="form-control" id="content" name="description" rows="5" placeholder="Describe the Category"></textarea>
                </div>

               

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success rounded-pill px-5 py-2">Add Category</button>
                </div>
                <div class="text-center mt-3">
                        <a href="{{ route('categories.index') }}" class="text-decoration-none text-muted">← Back to All Categories</a>
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
