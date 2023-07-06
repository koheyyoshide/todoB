<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    
    public function showTopPage()
    {
        $tasks=Task::latest()->simplePaginate(6);
        return view('tasks.top', ['tasks'=>$tasks]);
    }

//     public function top()
// {
//     $tasks = Task::all(); // もしくは適切なタスクデータを取得するクエリ
//     return view('tasks.top', compact('tasks'));
// }


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
        $task->image= $request->image->store('public/images'); 
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

    // function show($id)
    // {
    //     $task = Task::find($id);

    //     return view('tasks.show',['task'=>$task]);
    // }
    function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> image = $request -> image;
        $task -> save();

        // return view('tasks.top',compact('task'));
        return redirect()->route('tasks.top', compact('task'));
    }

    function destroy($id)
    {
        $task=Task::find($id);
        $task->delete();
        return redirect()->route('tasks.top');
    }

} 


