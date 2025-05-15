<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    public function index()
    {
        //
        $posts = Post::latest()->paginate(6); 
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //show a blade file to create a new post
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
   

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Save the image to the public/images folder
        $filename = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move(public_path('images'), $filename);
        $validated['image'] = 'images/' . $filename;
    }
    

    $validated['user_id'] = auth()->id();
    $validated['slug'] = Str::slug($validated['title']) . '-' . time();

    Post::create($validated);

    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
}

    /**
     * Display the specified resource.
     */
   
    public function show($id)
    {
        // Eager load 'category' and 'user' to avoid missing relationship issues.
        $post = Post::with(['category', 'user'])->findOrFail($id);
        return view('posts.view', compact('post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)            
    {
        //validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            // 'user_id' => 'required|exists:users,id', // Ensure user exists
            // 'category_id' => 'required|exists:categories,id', // Ensure category exists
            // 'author' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255|unique:posts,slug,' . $id, // Ensure slug is unique    
            // 'status' => 'required|in:draft,published', // Ensure status is either draft or published
        ]);
        //update the post
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        // $post->user_id = auth()->id(); // assumes user is logged in
        // $post->category_id = $request->category_id;
        // $post->author = $request->author;
        // $post->slug = Str::slug($request->title); // Generate a slug from the title
        // $post->status = $request->status;

        if ($request->hasFile('image')) {
            Storage::delete($post->image); // Delete old image
            $path = Storage::putFile('images', $request->file('image'));
            $post->image = $path;
        }

        $post->save();
        //redirect to the index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) 
    {
        //
        $post = Post::findOrFail($id);
        Storage::delete($post->image); // Delete image
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function search(){
        $query=request('search');
        $posts=[];
        if($query){
            $posts=Post::where('title','like','%'.$query.'%')
            ->orWhere('content','like','%'.$query.'%')->paginate(10);
        }
        return view('posts.index', compact('posts'));
    }
}
//     {
//         //find the category
//         $category = Category::findOrFail($id);
