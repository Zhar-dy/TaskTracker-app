<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TaskTracker;
use App\Http\Requests\TaskTrackerRequest;



class TaskTrackerController extends Controller
{
    public function create(){
        return view('task.create');
    }
    public function store(TaskTrackerRequest $request){
        TaskTracker::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' =>$request->content,
            'status' =>$request->status,
            'priority' =>$request->priority,
        ]);

        return redirect()->route('home');
    }
    public function edit(TaskTracker $task){
        $this->authorize('edit',$task);
        return view('task.update', compact('task'));
    }

  public function update(TaskTrackerRequest $request, TaskTracker $task){
   $this->authorize('edit',$task);
        $task->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' =>$request->content,
            'status' =>$request->status,
            'priority' =>$request->priority,
        ]);
        return redirect()->route('home');
    }
    public function destroy(TaskTracker $task){
        $this->authorize('delete',$task);
        $task->delete();
        return redirect()->route('home');
    }
}
