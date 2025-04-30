@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 10vh; background: url('{{ asset('images/safari-bg.jpg') }}') no-repeat center center; background-size: cover;">
   
</section>

<!-- Form Section -->
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4" style="background-color: #f8f9f5;">
                    <h2 class="text-center text-success mb-4">Create Category</h2>

                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control rounded-pill" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control rounded" placeholder="Tell us about this category..."></textarea>
                        </div>

                        <!-- Image -->
                        <!-- <div class="mb-4">
                            <label for="image" class="form-label fw-bold">Category Image</label>
                            <input type="file" name="image" id="image" class="form-control rounded-pill" required>
                        </div> -->

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success rounded-pill px-5 py-2" style="background-color: #3e8e41; border: none;">Create</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('categories.index') }}" class="text-decoration-none text-muted">← Back to Category List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
