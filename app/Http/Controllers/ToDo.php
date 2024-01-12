<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class ToDo extends Controller
{
    public function home()
    {
        return view('home.home-view');
    }


    public function save(){
        $todo = new Tasks();

        $todo->request('task');
        
    }
}
