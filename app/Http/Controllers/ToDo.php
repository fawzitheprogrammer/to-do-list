<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tasks;

class ToDo extends Controller
{
    public function home()
    {


        $tasks = Tasks::all();

        return view('home.home-view', ['tasks' => $tasks]);
    }


    public function save()
    {
        $todo = new Tasks;

        if (request()->validate(['task' => 'required'])) {
            $todo->task = \request('task');
            $todo->is_done = false;

            $todo->save();
        }


        return redirect('/')->with('success', 'Saved successfully !');

    }
    public function update($id)
    {


        $todo = Tasks::findOrFail($id);
        $todo->is_done = \request('check') == 0 ? '0' : 1;

        $todo->update();


        // return \request('check');


        return redirect('/')->with('success', 'Update successfully !');

    }


    public function delete($id)
    {
        $todo = Tasks::findOrFail($id);
        $todo->delete();

        return redirect('/')->with('failure', 'Delete successfully !');
    }



}
