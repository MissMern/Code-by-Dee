@extends('layouts.app')

@section('content')
  <!-- <x-user_navbar /> -->
 

  <!-- Hero Section -->
  <section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 leading-tight">
        Discover and Book Unforgettable Travel Experiences
      </h1>
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
        Explore curated adventures around the world with TravelTribe.
      </p>

      <div class="mt-8">
        <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-md text-lg font-medium hover:bg-indigo-500">
          Get Started
        </a>
        <a href="{{ route('login') }}" class="inline-block ml-4 px-6 py-3 text-indigo-600 border border-indigo-600 rounded-md text-lg font-medium hover:bg-indigo-50">
          Log In
        </a>
      </div>
    </div>
  </section>
@endsection
