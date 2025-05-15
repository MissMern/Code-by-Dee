<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //show a blade file to create a new category
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required|string|max:255',

            // 'description' => 'required|string|max:255',

            // 'user_id' => 'required|exists:users,id', // Ensure user exists
            // 'slug' => 'required|string|max:255|unique:categories,slug', // Ensure slug is unique    
           
           // Ensure parent category exists if provided

        ]);
        //create a new category
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->user_id = auth()->id(); // assumes user is logged in
        $category->slug = Str::slug($request->name); // Generate a slug from the name
        //image upload
        if ($request->hasFile('image')) {
            // Save the image to the public/images folder
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move(public_path('images'), $filename);
            $validated['image'] = 'images/' . $filename;
        }
        
    

        $category->save();
        //redirect to the index page with a success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function search(){
        $query=request('search');
        $categories=[];
        if($query){
            $categories=Category::where('name','like','%'.$query.'%')
            ->orWhere('description','like','%'.$query.'%')->paginate(10);
        }
        return view('categories.index', compact('categories'));
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
