@extends('layout.main-layout')


@section('content')


<div class="relative flex min-h-screen w-full flex-col justify-center ">


    <div
        class="relative bg-green-50 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
        <div class="mx-auto max-w-md">
            <!--- HEADER -->
            <p class="text-lg font-bold">To-Do List App</p>
            <p class="text-sm font-regular">Insert your item below and click on Add</p>
            <form class="mt-2" action="/insert" method="POST">
                @csrf
                <div class="">
                    
                    <input class="bg-white-200 border border-grey-600 rounded px-2 mx-auto py-2" type="text" name="task"
                        id="">
                    <button
                        class="inline-flex item-center py-2.5 px-3 ms-2 text-sm font-medium bg-green-400 rounded text-white">Add</button>
                </div>
            </form>

            <div class="max-auto">
                @foreach($tasks as $task )
                    <ol>
                        <li>
                            <div class="place-content-between flex flex-row w-fulsl bg-white mt-2 px-2 mx-auto p-4">
                                <input type="checkbox" name="check" id="">
                                <div class="">
                                    {{ $task->task }}
                                </div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                  </svg>
                                  </div>
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