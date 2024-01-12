@extends('layout.main-layout')


@section('content')
  

<div class="relative flex min-h-screen w-full flex-col justify-center ">
   
   
    <div class="relative bg-green-50 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
      <div class="mx-auto max-w-md">
       <!--- HEADER -->
       <p class="text-lg font-bold">To-Do List App</p>
       <p class="text-sm font-regular">Insert your item below and click on Add</p>
        <form class="mt-2" action="/insert" method="POST">
            @csrf
        <div class="">
            <input class="bg-white-200 border border-grey-600 rounded px-2 mx-auto py-2" type="text" name="task" id="">
            <button class="inline-flex item-center py-2.5 px-3 ms-2 text-sm font-medium bg-cyan-400">Add</button>
        </div>
        </form>

        <div class="max-auto">
            @foreach ($tasks as $task )
            <ol>
                <li>
                  <div class="place-content-between flex flex-row w-full bg-white mt-2 px-2 mx-auto" >
                    <div class="">
                        {{$task->task}}
                    </div>
                    <div>Delete</div>
                </div>
                </li>
               </ol>
            @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection