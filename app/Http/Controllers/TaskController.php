<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function dashboard() {
        $taskCount = Task::count();
        $completedTaskCount = Task::where('status', 'completed')->count();
        $pendingTaskCount = Task::where('status', 'pending')->count();
        $inProgressTaskCount = Task::where('status', 'in progress')->count();
        $latestTaskCount = Task::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact('taskCount', 'completedTaskCount', 'pendingTaskCount', 'latestTaskCount', 'inProgressTaskCount'));
    }

    public function index (){
        $task = Task::count();
        $latestTaskCount = Task::orderBy('due_date', 'asc')->paginate(10);

        return view('tasks.index', compact('task', 'latestTaskCount'));
    }
    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'tasks_name'=>'required|string|max:100',
            'status'=>'required|string',
            'priority'=>'required|string',
            'due_date'=>'required|date',
            'description'=>'required|string|max:255',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task Successfully Added');
    }

    public function edit($id){
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id) {
        $task = $request->validate([
            'tasks_name'=>'required|string|max:100',
            'status'=>'required|string',
            'priority'=>'required|string',
            'due_date'=>'required|date',
            'description'=>'required|string|max:255',
        ]);

        $task = Task::findOrFail($id);

        $task->tasks_name = $request->tasks_name;
        $task->status = $request->status;
        $task->priority = $request->priority;
        $task->due_date = $request->due_date;
        $task->description = $request->description;

        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task SuccessFully Updated');
    }
    public function destroy($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task Success Delete');
    }

    public function markAsDone($id){
        $task = Task::findOrFail($id);
        $task->status = 'Completed';

        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task has been Mark As Done');
    }
}
