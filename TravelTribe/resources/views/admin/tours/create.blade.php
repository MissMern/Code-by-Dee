@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">All Tours</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.tours.create') }}" class="btn btn-primary mb-3">+ Add New Tour</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Price</th>
                <th>Dates</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tours as $tour)
                <tr>
                    <td>{{ $tour->title }}</td>
                    <td>{{ $tour->location }}</td>
                    <td>${{ number_format($tour->price, 2) }}</td>
                    <td>{{ $tour->start_date }} to {{ $tour->end_date }}</td>
                    <td>
                        <a href="{{ route('admin.tours.edit', $tour->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this tour?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No tours found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
