<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'TodoApp') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (or replace with your preferred framework) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-gradient-to-r from-sky-400 to-emerald-400 text-white shadow-md py-4 px-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Todo App</h1>
            <nav>
                @auth
                    <span class="mr-4">Welcome, {{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="underline">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow py-8 px-4 sm:px-6 lg:px-8 bg-white shadow-inner">
        <div class="max-w-4xl mx-auto">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center py-4 text-sm text-gray-500">
        Made by Dee | {{ date('Y') }}
    </footer>
</body>
</html>
