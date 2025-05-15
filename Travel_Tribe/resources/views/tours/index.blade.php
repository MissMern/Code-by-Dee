@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Available Tours</h2>

    <div class="row">
        @forelse($tours as $tour)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                   @if($tour->image_url)
    <img src="{{ asset('storage/' . $tour->image_url) }}" alt="{{ $tour->name }}" width="300">
@endif

                      

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $tour->name }}</h5>
                        <p class="card-text">{{ Str::limit($tour->description, 100) }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Location:</strong> {{ $tour->location }}</li>
                            <li><strong>Duration:</strong> {{ $tour->duration }}</li>
                            <li><strong>Price:</strong> ${{ number_format($tour->price, 2) }}</li>
                        </ul>

                        <a href="{" class="btn btn-primary mt-auto">View Tour</a>

                        @if(auth()->check() && auth()->user()->is_admin)
                            <div class="mt-2 d-flex justify-content-between">
                                <a href="" class="btn btn-sm btn-outline-secondary">Edit</a>
                                <form action="" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No tours found.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
