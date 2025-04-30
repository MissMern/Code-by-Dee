@extends('layouts.app')

@section('content')
<!--section to list categories on a table with buttons to edit and delete-->
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 10vh; background: url('images/safari-bg.jpg') no-repeat center center; background-size: cover;">
   
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4 text-black">Explore Our Safari Categories</h2>
            <table class="table table-bordered table-striped table-hover" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 8px;">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Category ID</th>
                        <!-- <th>Category Image</th> -->
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <!-- <td>
                            <img src="{{ asset($category->image ? $category->image : 'images/placeholder.png') }}" 
                                     class="card-img-top" 
                                     alt="{{ $category->title }}" 
                                     style="object-fit: cover; height: 80px;">

                            </td> -->
                            <td>{{ $category->name }}</td>
                            <td>{{ Str::limit($category->description, 50) }}</td>
                            <td>
    <div class="d-flex justify-content-center align-items-center">
        <a href="" class="btn btn-warning btn-sm me-2" style="border-radius: 50px;">Edit</a>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 50px;">Delete</button>
        </form>
    </div>
</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center mt-4">
                <a href="{{ route('categories.create') }}" class="btn btn-success rounded-pill px-5 py-2" style="background-color: #28a745; color: white; border: none;">Add New Category</a>
            </div>
        </div>
    </div>
</main>
<!-- Footer Section -->
@endsection
