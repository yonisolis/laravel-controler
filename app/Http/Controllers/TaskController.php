<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index (){
        $tasks = [
    
        ];
        $task = $tasks[$id];

      return response()->json(["tasks"=>$tasks] );
    }
    public function store(){
        $tareas = "23";
        return (["tareas"=>$tareas] );
    }
    public function show($id){
        $tasks = [
            ['id' => 1,'name' =>'practicar','descripcion' =>'practicar un poco'],
            ['id' => 2,'name' =>'estudiar','descripcion' =>'estudioso'],
            ['id' => 3,'name' =>'limpiar','descripcion' =>'limpia dale']
        ];
        $task = $tasks[$id -1];

      return response()->json(["tasks"=>$task] );; 
    }
    public function edit($id){
        $editar = $id;
        return response()->json(["editar" =>$editar] ); 
    }
    public function update($id){
        $updates = $id;
        return response()->json(["updates" =>$updates] );
    
    }
    public function destroy(){
        return response () ->json(["lallala"]);
    }
}
