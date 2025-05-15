@extends('layouts.app')

@section('content')
<div class="container mt-5" style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">My Profile</h5>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-light">← Back to Dashboard</a>
                </div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff&size=128" 
                             class="rounded-circle shadow" alt="User Avatar">
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <th>Name:</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th>Role:</th>
                            <td>{{ Auth::user()->role ?? 'Not set' }}</td>
                        </tr>
                        <tr>
                            <th>Joined:</th>
                            <td>{{ Auth::user()->created_at->format('F d, Y') }}</td>
                        </tr>
                    </table>

                    <div class="mt-4 text-end">
                        <a href="" class="btn btn-outline-primary">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
