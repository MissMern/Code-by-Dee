<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    // Show all tours
    public function index()
    {
        $tours = Tour::all();  // Fetch all tours
        return view('admin.tours.index', compact('tours'));
    }

    // Show form to create a new tour
    public function create()
    {
        return view('admin.tours.create');
    }

    // Store a new tour
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        Tour::create($request->all());

        return redirect()->route('admin.tours.index')->with('success', 'Tour created successfully!');
    }

    // Show the form to edit a tour
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('admin.tours.edit', compact('tour'));
    }

    // Update a tour
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $tour = Tour::findOrFail($id);
        $tour->update($request->all());

        return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully!');
    }

    // Delete a tour
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully!');
    }
}

