<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TravelTribe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet" />

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <div id="app">

        <!-- Navbar -->
        <nav class="bg-white shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center space-x-6">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600">
                            {{ config('app.name', 'TravelTribe') }}
                        </a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600">Destinations</a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600">Things to Do</a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600">Blog</a>
                        <a href="#" class="text-gray-600 hover:text-indigo-600">Help</a>
                    </div>

                    <div class="flex items-center space-x-4">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-indigo-600">Log in</a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">Sign Up</a>
                            @endif
                        @else
                            <div class="relative">
                                <button type="button" class="text-sm font-medium text-gray-700 hover:text-indigo-600">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-1 z-50">
                                    <a href="{{ route('logout') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-10">
            @yield('content')
        </main>
    </div>
</body>
</html>
