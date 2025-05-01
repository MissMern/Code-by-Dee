<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::paginate(10);
    
     return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //1. validate the data
        $request->validate([
            'name' => 'required|string|max:255',

        ]);
        //create a new category
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->user_id = auth()->id();
        //2.send to the db
        $task->save();
        //3.redirect
        return redirect(url('index'))->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.view', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        // 
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //1.validate
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $task = Task::findOrFail($id);
        //2. update sto db
        $task->name=$request->get('name');
        $task->description=$request->get('description');
        $task->update();

        return redirect(url('index'))->with('success', 'Post created successfully!');
        //3, redirect kinda like store
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect(url('index'))->with('success', 'Post created successfully!');
    }
}
