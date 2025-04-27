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
            <table class="table table-bordered table-striped" style="background-color: rgba(255, 255, 255, 0.9);">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Excerpt</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The Majesty of African Lions</td>
                        <td>Explore the life of lions in the wild savannah...</td>
                        <!-- <td><img src="{{ asset('images/lion.jpg') }}" alt="African Lions" width="70"></td> -->
                        <td>
                            <a href="#" class="btn btn-success btn-sm mb-1">View More</a>
                            <a href="#" class="btn btn-primary btn-sm mb-1">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Top 10 Safari Destinations</td>
                        <td>From Serengeti to Maasai Mara, discover the best...</td>
                        <!-- <td><img src="{{ asset('images/destinations.jpg') }}" alt="Safari Destinations" width="70"></td> -->
                        <td>
                            <a href="#" class="btn btn-success btn-sm mb-1">View More</a>
                            <a href="#" class="btn btn-primary btn-sm mb-1">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>How to Pack for a Safari Trip</td>
                        <td>Essential tips for your safari adventure gear...</td>
                        <!-- <td><img src="{{ asset('images/packing.jpg') }}" alt="Packing for Safari" width="70"></td> -->
                        <td>
                            <a href="#" class="btn btn-success btn-sm mb-1">View More</a>
                            <a href="#" class="btn btn-primary btn-sm mb-1">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>The Big Five: Meet the Icons</td>
                        <td>Learn about the famous Big Five animals of Africa...</td>
                        <!-- <td><img src="{{ asset('images/big-five.jpg') }}" alt="Big Five" width="70"></td> -->
                        <td>
                            <a href="#" class="btn btn-success btn-sm mb-1">View More</a>
                            <a href="#" class="btn btn-primary btn-sm mb-1">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</main>
