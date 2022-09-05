<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
            'task' => new Task(),
            'submit' => 'Create',
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create(['title' => $request->title]);
        return back();
    }

    public function edit(Request $request, $id)
    {
        return view('tasks.edit', [
            'task' => Task::find($id),
            'submit' => 'Update'
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['title' => $request->title]);
        return redirect('task');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
