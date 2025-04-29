@extends('layouts.app')
@section('content')
<!--section to list categories on a table with buttons to edit and delete-->
<section class="text-center text-light d-flex align-items-center justify-content-center" style="height: 40vh; background: url('images/safari-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-4 fw-bold">Safari Blog Categories</h1>
    </div>
</section>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Explore Our Safari Categories</h2>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <form action=" " method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center mt-4">
                <a href="{{ route('categories.create') }}" class="btn btn-success rounded-pill px-5 py-2">Add New Category</a>
            </div>
        </div>
    </div>
</main>
<!-- Footer Section -->
 @endsection