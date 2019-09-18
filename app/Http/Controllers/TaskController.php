<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;
class TaskController extends Controller
{
    public function index (){
        $tasks = [ ['id' => 1,'name' =>'practicar','descripcion' =>'practicar un poco'],
        ['id' => 2,'name' =>'estudiar','descripcion' =>'estudioso'],
        ['id' => 3,'name' =>'limpiar','descripcion' =>'limpia dale']
    
        ];
        $task = task::get();

      return response()->json(["tasks"=>$tasks] );
    }
    public function store(request $request){
        $validator= validator::make($request->all(),[
            'name'=> 'required|unique:tasks'
            
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors(),152]);
        }
        $task = new task;
        $task->name =$request->name;
        $task->description=$request->description;
        $task->priority=$request->priority;
        $task->status=$request->status;
        $task->save();
    }
    public function show( $id ) {
        $task = Task::find($id);

        if (!isset($task)) {
            return response()->json( ["message" => "Task not finded"] ) ;
        }

        return response()->json( ["tasks" => $task ] ) ;
    }
    // public function edit($id){
    //     $tasks = [
    //         ['id' => 1,'name' =>'practicar','descripcion' =>'practicar un poco'],
    //         ['id' => 2,'name' =>'estudiar','descripcion' =>'estudioso'],
    //         ['id' => 3,'name' =>'limpiar','descripcion' =>'limpia dale']
    //     ];
    //     $editar = $id;
    //     return response()->json(["name" =>$editar] ); 
    // }
    public function update($id){
        $updates = $id;
        return response()->json(["updates" =>$updates] );
    
    }
    public function destroy(){
        return response () ->json(["lallala"]);
    }

}
