<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- In your <head> section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .nav-link.active {
    background-color: rgba(0, 123, 255, 0.1);
    border-radius: 6px;
}
.nav-highlight {
    background-color: rgba(144, 238, 144, 0.2); /* light green */
    border-radius: 8px;
    font-weight: 600;
    color: #2d4831 !important; /* dark earthy green */
}
        .about-section {
      padding: 80px 0;
      background: #fafafa;
    }
    .about-image {
      width: 100%;
      border-radius: 15px;
      object-fit: cover;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }
    .intro-text {
      font-size: 1.1rem;
      color: #555;
      margin-top: 20px;
      line-height: 1.7;
    }
    .quote {
      font-style: italic;
      color: #777;
      margin-top: 30px;
      border-left: 4px solid #0d6efd;
      padding-left: 15px;
    } 
    </style>
</head>
<body style="background-color:#f5f5dc;">
    <div id="app">
          
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(to right, rgb(254, 253, 254), rgb(159, 247, 178)); height: 100px;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center ms-auto" href="{{ route('home') }}">
            <img src="/images/logo.png" alt="Brand Logo" width="60" height="60" class="d-inline-block align-text-top">
            <h3 class="ms-2 mb-0" style="font-family: 'Comfortaa', sans-serif;">Mara Muse</h3>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                @auth
                    <!-- Standard nav links -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active nav-highlight' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active nav-highlight' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery') ? 'active nav-highlight' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                    </li>

                    <!-- Categories dropdown -->
                    <li class="nav-item dropdown">
                        <a id="navbarCategoryDropdown" class="nav-link dropdown-toggle {{ request()->is('categories*') ? 'active fw-bold text-primary' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           style="font-family: 'Comfortaa', sans-serif;">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                           <a class="dropdown-item" href="{{ route('categories.index') }}">All Categories</a>
                           <a class="dropdown-item" href="{{ route('categories.create') }}">Add Category</a>
                           
                        </div>
                    </li>

                    <!-- Posts dropdown -->
                    <li class="nav-item dropdown">
                        <a id="navbarPostDropdown" class="nav-link dropdown-toggle {{ request()->is('posts*') ? 'active fw-bold text-primary' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Posts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarPostDropdown">
                            <a class="dropdown-item" href="{{ route('posts.index') }}">All Posts</a>
                            <a class="dropdown-item" href="{{ route('posts.create') }}">Add Post</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.contact') ? 'active nav-highlight' : '' }}" href="{{ route('pages.contact') }}">Contact Us</a>
                    </li>

                    <!-- Authenticated user dropdown -->
                    <li class="nav-item dropdown ms-3">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-dark px-3 py-2 rounded"
                           href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user me-2"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ms-3">
                            <a class="nav-link text-dark btn btn-outline-light bg-white px-3 py-2 rounded" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item ms-2">
                            <a class="nav-link text-dark btn btn-outline-light bg-white px-3 py-2 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </div>
</nav>




        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--footer-->
    <footer class="bg-dark text-white text-center py-3" style="position: fixed; bottom: 0; width: 100%; background: linear-gradient(to left, #2e8b57, #6b8e23);">
        <div class="container">
            <p>&copy; {{ date('Y') }} Mara Muse. All rights reserved.</p>
            <!-- <p>Follow us on:
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </p> -->
        </div>
    </footer>
                          
</body>
</html>
