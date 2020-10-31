<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Task::all(); // select * from task;
        $trashed = Task::onlyTrashed()->get();
        return view('home')->with('data',$data)->with('trashed',$trashed);
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id); // select * from task where id = $id

        $task->delete();

        return redirect()->back();
    }

    public function done($id)
    {
        $task = Task::findOrFail($id);

        $task->done = 1;

        $task->save();

        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Task::findOrFail($id);

        return view('edit')->with('data',$data);

    }

    public function update($id,Request $request)
    {
        $data = Task::findOrFail($id);
        $data->task = $request->task;

        $data->save();


        return redirect()->route('home');
    }

    public function restore($id)
    {
        $data = Task::onlyTrashed()->where('id',$id)->first();

        $data->restore();

        $data->save();


        return redirect()->back();
    }
    public function destroy($id)
    {
        $data = Task::onlyTrashed()->where('id',$id)->first();

        $data->forceDelete();

        return redirect()->back();
    }
}
