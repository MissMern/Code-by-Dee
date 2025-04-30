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
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* General Body */
        body {
            background-color: #f0e4d7; /* Soft tan */
            font-family: 'Comfortaa', sans-serif;
            color: #3e3a38; /* Dark brown text */
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #a17c5d, #d1b098); /* Warm brown tones */
            height: 100px;
        }
        .navbar-brand {
            font-family: 'Comfortaa', sans-serif;
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 600;
        }
        .navbar-nav .nav-link.active {
            background-color: rgba(139, 95, 57, 0.2);
            border-radius: 6px;
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(139, 95, 57, 0.3);
        }

        /* General Button Styles */
        .btn-safari-brown {
            background-color: #a17c5d; /* Brownish */
            color: #fff;
            border: none;
        }
        .btn-safari-brown:hover {
            background-color: #8f5c41;
        }
        .btn-dusty-orange {
            background-color: #d67b3e; /* Earthy orange */
            color: #fff;
            border: none;
        }
        .btn-dusty-orange:hover {
            background-color: #c0652e;
        }
        .btn-savannah-brown {
            background-color: #6f4f37; /* Savannah brown */
            color: #fff;
            border: none;
        }
        .btn-savannah-brown:hover {
            background-color: #5e3e2a;
        }
        .btn-acacia-brown {
            background-color: #6e4b3a; /* Acacia bark */
            color: #fff;
            border: none;
        }
        .btn-acacia-brown:hover {
            background-color: #5b3f30;
        }

        /* Post-specific Button Styles */
        .btn-post {
            background-color: #4b3820; /* Deep brown */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-post:hover {
            background-color: #3d2b19; /* Darker brown for hover effect */
        }

        .btn-post-primary {
            background-color: #7a4f2f; /* Earthy brown with a slightly lighter shade */
            color: #fff;
        }
        .btn-post-primary:hover {
            background-color: #6b4026; /* Slightly darker for hover */
        }

        /* Hero Section */
        .hero-section {
            background: url('{{ asset('images/safari-hero.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            padding-top: 75px;
        }
        .hero-section .bg-overlay {
            background-color: rgba(0, 0, 0, 0.4); /* Dark brown overlay */
            padding: 40px;
            border-radius: 8px;
        }
    
    /* Submit Button */
    .btn-success {
        background-color: #6e4b3a; /* Acacia bark brown */
        color: #fff;
        border: none;
        padding: 12px 30px;
        font-size: 1.1rem;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease;
    }

    .btn-success:hover {
        background-color: #5b3e2a; /* Darker brown for hover effect */
        transform: scale(1.05);
    }

    .btn-success:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(139, 95, 57, 0.8); /* Subtle golden outline */
    }

    .btn-success:active {
        background-color: #4b3820; /* Deep brown when clicked */
        transform: scale(1);
    }



        /* Footer */
        footer {
            background: linear-gradient(to left, #5a3d2e, #8b4e3e); /* Deep brown gradient */
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #fff;
        }
        footer p {
            margin-bottom: 0;
        }

        /* Card Hover Effect */
        .card:hover {
            transform: scale(1.01);
            transition: 0.2s ease-in-out;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        /* Quote Section */
        .quote {
            font-style: italic;
            color: #5b3e2f; /* Soft brown text */
            margin-top: 30px;
            border-left: 4px solid #d67b3e;
            padding-left: 15px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div id="app">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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

                            <li class="nav-item dropdown">
                                <a id="navbarCategoryDropdown" class="nav-link dropdown-toggle {{ request()->is('categories*') ? 'active nav-highlight' : '' }}"
                                   href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   style="font-family: 'Comfortaa', sans-serif;">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                                   <a class="dropdown-item" href="{{ route('categories.index') }}">All Categories</a>
                                   <a class="dropdown-item" href="{{ route('categories.create') }}">Add Category</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarPostDropdown" class="nav-link dropdown-toggle {{ request()->is('posts*') ? 'active nav-highlight' : '' }}"
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

                            <li class="nav-item dropdown ms-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-dark px-3 py-2 rounded"
                                   href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user me-2"></i> {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('My Profile') }}
                                    </a>
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

        <!-- Hero Section -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container py-3">
            <p>&copy; {{ date('Y') }} Mara Muse. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
