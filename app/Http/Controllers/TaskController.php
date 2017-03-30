<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Task;
use Auth;

class TaskController extends Controller
{
    function index($name){
    	return view('Aso', ['name'=>$name]);
    }
    public function getTask(){
        $tasks = Task::all();
        return view('showTask', ['tasks'=>$tasks]);
    }
    public function add_Task(){
        return view('addTask');        
    }
    function addnewTask(Request $request){
        $this->validate($request,[
            'name' => 'required|max:30'
            ]);
        $name = $request->get('name');
        $task = new Task;
        $task->name = $name;
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect('show');
    }
    public function update_Task(Request $request){
        $this->validate($request,[
            'name' => 'required|max:30',
            'description'=> 'required|max:100'
            ]);
        $name = $request->get('name');
        $id = $request->get('id');

        $task =Task::find($id);
        $task->name = $name;
        $task->save();

        return redirect('show');
        
    }
    public function delete_Task($id){
        Task::find($id)->delete();
        return back();
        
    }
    
    public function edit_Task($id){
        $task = Task::find($id);
        $title = 'Edit Task '.$task->name;
        return view('edittask', compact('title','task'));
    }
    
}
