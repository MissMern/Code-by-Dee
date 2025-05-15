<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
    public function index()
{
    $postsCount = \App\Models\Post::count();
    $categoriesCount = \App\Models\Category::count();

    return view('home', compact('postsCount', 'categoriesCount'));
}

}
