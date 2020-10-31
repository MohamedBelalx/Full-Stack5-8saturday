<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function insert(Request $request)
    {
        $obj1 = new Task();

        $obj1->task = $request->task;

        $obj1->save();

        return redirect()->back(); // 
    }
}
