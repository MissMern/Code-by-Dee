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


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
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
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background: linear-gradient(to right, #2e8b57, #228b22, #6b8e23);">
    <div class="container">
    <a class="navbar-brand text-white" href="{{ url('/') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Mara Muse Logo" style="height: 60px; width: auto;">
    {{ config('app.name', 'Mara Muse') }}
</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
               @auth
                <li class="nav-item dropdown">
                    <a id="navbarCategoryDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                       
                        <a class="dropdown-item" href="{{ route('addCategory') }}">Add Category</a>
                        <a class="dropdown-item" href="{{ route('categories') }}">All Categories</a>
                    </div>
                </li>

                
                <li class="nav-item dropdown">
                    <a id="navbarPostDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarPostDropdown">
                        <a class="dropdown-item" href="{{ route('posts') }}">All Posts</a>
                        <a class="dropdown-item" href="{{ route('addPost') }}">Add Post</a>
                    </div>
                </li>
@endauth
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
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
