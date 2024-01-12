<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tasks;

class ToDo extends Controller
{
    public function home()
    {


        $tasks = Tasks::all();

        return view('home.home-view',['tasks'=>$tasks]);
    }


    public function save(){
        $todo = new Tasks;

        $todo->task = \request('task');
        $todo->is_done = false;
        
        $todo->save();


        return redirect('/')->with('success','Saved successfully !');

    }


    
}
