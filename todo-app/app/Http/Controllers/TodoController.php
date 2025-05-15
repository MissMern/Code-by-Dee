<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            // Call stored procedure to get todos
            $todos = DB::select('EXEC ListTodos');

            return view('todos.index', compact('todos'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            // Call the stored procedure
            DB::statement('EXEC AddTodo @Title = ?, @Description = ?', [
                $request->title,
                $request->description,
            ]);

            return redirect()->route('todos.index')->with('success', 'Todo added successfully!');
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show a single todo
        $result = DB::select('EXEC GetTodoById @id = ?', [$id]);
        if (count($result) === 0) {
            abort(404, 'Task not found');
        }
        $todo = $result[0]; // DB::select returns an array of stdClass
        return view('todos.view', compact('todo'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
  public function edit(string $id)
{
    // Call stored procedure to get the todo by id
    $result = DB::select('EXEC GetTodoById @id = ?', [$id]);

    if (count($result) === 0) {
        abort(404, 'Task not found');
    }

    $todo = $result[0]; // DB::select returns an array of stdClass

    return view('todos.edit', compact('todo'));
}


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    DB::statement('EXEC UpdateTodo @id = ?, @title = ?, @description = ?', [
        $id,
        $request->input('title'),
        $request->input('description'),
    ]);

    return redirect()->route('todos.index')->with('success', 'Todo updated!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //function to delete a todo
        DB::statement('EXEC DeleteTodo @Id = ?', [$id]);
        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
    }
}
