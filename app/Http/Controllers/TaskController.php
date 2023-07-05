<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function showTopPage()
    {
        $tasks=Task::all();
        return view('tasks.top', ['tasks'=>$tasks]);
    }

    public function  create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        
        // dd($request);
        $task=new Task;
        $task->title=$request->input('title');
        $task->contents=$request->input('contents');
        $task->image= $request->image;
        $task->user_id=Auth::id();
        $task->save();
        return redirect()->route('tasks.top');
       
    }

    // function edit()
    // {
    //     return view('tasks.edit');
    // }
    public function edit($id)
{
    $task = Task::find($id);
    return view('tasks.edit', compact('task'));
}

} 


