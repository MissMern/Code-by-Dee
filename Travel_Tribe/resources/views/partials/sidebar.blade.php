<!-- resources/views/components/sidebar.blade.php -->
<div class="col-md-3 bg-light p-3" id="sidebar">
    <!-- Toggle button for collapsing the sidebar -->
    <button class="btn btn-info w-100 mb-2" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <i class="fas fa-bars"></i> Toggle Menu
    </button>

    <div class="collapse show" id="sidebarMenu">
        <ul class="list-group">
            <!-- Common Sidebar Links -->
            <li class="list-group-item">
                <a href="{{ route('user.dashboard') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>

            @if(auth()->check() && auth()->user()->is_admin)
                <!-- Admin Specific Links -->
                <li class="list-group-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-cogs"></i> Admin Dashboard
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('tours.index') }}">
                        <i class="fas fa-briefcase"></i> Manage Tours
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('users.index') }}">
                        <i class="fas fa-users"></i> Manage Users
                    </a>
                </li>
            @endif

            <!-- Common Links for All Users -->
            <li class="list-group-item">
                <a href="{{ route('tours.index') }}">
                    <i class="fas fa-map-marker-alt"></i> Explore Tours
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('logout') }}">
                    <i class="fas fa-user"></i> Profile
                </a>
            </li>
        </ul>
    </div>
</div>
