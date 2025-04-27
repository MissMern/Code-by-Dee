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
            <table class="table table-bordered table-striped" style="background-color: rgba(255, 255, 255, 0.8);">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wildlife</td>
                        <td>Discover the beauty of wildlife in the savannah.</td>
                        <td><img src="{{ asset('images/wildlife.jpg') }}" alt="Wildlife" width="50"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Safari Adventures</td>
                        <td>Exciting safari experiences and guides.</td>
                        <td><img src="{{ asset('images/safari-adventure.jpg') }}" alt="Safari Adventure" width="50"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Conservation</td>
                        <td>Efforts to protect endangered species and habitats.</td>
                        <td><img src="{{ asset('images/conservation.jpg') }}" alt="Conservation" width="50"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Safari Tips</td>
                        <td>Best practices for enjoying a safari while staying safe.</td>
                        <td><img src="{{ asset('images/safari-tips.jpg') }}" alt="Safari Tips" width="50"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Travel Guides</td>
                        <td>Complete travel guides for safari destinations.</td>
                        <td><img src="{{ asset('images/travel-guides.jpg') }}" alt="Travel Guides" width="50"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
