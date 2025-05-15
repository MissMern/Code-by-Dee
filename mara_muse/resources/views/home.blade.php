@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mb-4 text-center">
                <h2 class="fw-bold" style="color: #6e4b3a;">Welcome back, {{ Auth::user()->name }}!</h2>
                <p class="text-muted">Here's what's happening on your blog today 🐾</p>
            </div>

            <!-- Statistics Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="card text-white" style="background-color: #9b2915;">
                        <div class="card-body text-center">
                            <h4>Total Posts</h4>
                            <h2>{{ $postsCount }}</h2>
                            <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm mt-2">View Posts</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-white" style="background-color: #6b705c;">
                        <div class="card-body text-center">
                            <h4>Total Categories</h4>
                            <h2>{{ $categoriesCount }}</h2>
                            <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm mt-2">View Categories</a>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Quick Tips or Recent Activity (optional) -->
            <div class="card shadow-sm" style="background-color: #fdfaf6;">
                <div class="card-header fw-bold" style="background-color: #dd6e42; color: #fff;">
                    Quick Tip
                </div>
                <div class="card-body">
                    <p><i class="fas fa-lightbulb text-warning me-2"></i> Remember to use high-quality wildlife images to boost engagement on your safari posts!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
