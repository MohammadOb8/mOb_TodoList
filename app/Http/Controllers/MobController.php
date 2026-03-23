<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Type;

class MobController extends Controller
{

    public function index(){
       /* $types = Type::all();
        foreach ($types as $type)
        $tasks = $type->tasks;
        $tasks = Task::orderBy('created_at','asc')->get();
        $types = Type::orderBy('created_at','asc')->get();
        return view('mObTodoList',compact('tasks','types'));
        */

        //$tasks = Task::all();
        $tasks = Task::with('types')->get();
        return view('mObTodoList')->with('tasks',$tasks);
    }

    public function newTask(){
        $type = Type::all();
        return view('newTask')->with('types', $type);
    }

    public function addTask(Request $request)
    {
      /*  $task = new task();
        $task->task = $request->task;
        $task->save();
        $task->types()->attach($request->type_id);*/

        /*
        Task::create([
            'task' => $request->task,
            'type_id'=> $request->type_id,
        ])->with('type_id');
        return redirect()->route('mob.index');

        $type_ids = Task::with('mtype')->get();
        $task->mtype()->attach($type_ids);
        */

        Task::create([
            'task' => $request->task,
            'type_id' => $request->type_id,
        ]);
        


       /* $task = new Task;
        $task->task= $request->task;
        $task->type_id= $request->type_id;
        $task->save();
        $task->orderBy('created_at', 'desc')->get();

        */
    }

    public function editTask($id){
        $task = Task::find($id);

        return view('editTask')->with('task',$task);
    }

    public function updateTask(Request $request,$id){
        $task = Task::find($id);
        $task->task = $request->task;
        $task->save();
        return redirect()->route('mob.index');
    }

    public function completedTask($id){
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();
        return redirect()->route('mob.index');
    }

    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function undoTask($id){
        $task = Task::find($id);
        $task->completed = 0;
        $task->save();
        return redirect()->back();
    }
}
