<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Fetch all tours from the database
        $tours = Tour::all();
        // Return the view with the tours data
        return view('tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create a new tour
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'duration' => 'required|string',
        'location' => 'required|string',
        'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

  if ($request->hasFile('image_url')) {
    $imagePath = $request->file('image_url')->store('tours', 'public');
    $tour->image_url = $imagePath;
}


    Tour::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'duration' => $request->duration,
        'location' => $request->location,
        'image_url' => $imagePath,
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('tours.index')->with('success', 'Tour created successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
