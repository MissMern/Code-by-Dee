<div class="sidebar">
    <h5 class="text-center mb-4">🧭 Admin Panel</h5>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fas fa-compass"></i> Dashboard
    </a>
    <a href="{{ route('admin.tours.index') }}" class="{{ request()->is('admin/tours*') ? 'active' : '' }}">
        <i class="fas fa-binoculars"></i> Tours
    </a>
    {{-- Add more links here --}}
</div>
