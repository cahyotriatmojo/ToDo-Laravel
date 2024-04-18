<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Todo;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolist = Todo::all();
        return view('view_todo.index', ['todos' => $todolist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('view_todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = Todo::create($data);
        return redirect(route('todo.index'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $paramtodo)
    {
        return view('view_todo.edit', ['todo' => $paramtodo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $paramtodo)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $paramtodo -> update($data);

        return redirect()->route('todo.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $paramtodo)
    {
        $paramtodo->delete();
        return redirect()->route('todo.index')->with('success', 'Task deleted successfully');
    }
}
