<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      return Inertia('Main', ['tasks' => Task::orderBy('updated_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required|string',
        ]);

        Task::create([
            'task' => $validated['task'],
            'isDone' => 0,
        ]);

        return redirect()->route('index')->with('success','');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update([
            'isDone' => !$task->isDone,
        ]);
        $task->save();
        return redirect()->route('index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Task::find($id)->delete();
       return redirect()->route('index')->with('success','');
    }
}
