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
        return view('top');
    }

    public function  create()
    {
        return view('create');
    }

    function store(Request $request)
    {
        
        // dd($request);
        $task=new Task;
        $task->title=$request->title;
        $task->contents=$request->contents;
        $task->image= $request->image;
        $task->user_id=Auth::id();
        $task->save();
        return redirect()->route('top');
       
    }
} 


