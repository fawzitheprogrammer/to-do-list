@extends('layout.main-layout')


@section('content')


<div class="relative flex min-h-screen w-full flex-col justify-center ">


    <div
        class="relative bg-green-50 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">

        @if(session('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-600 border border-cgreenyan-300 rounded-lg bg-green-50 dark:bg-green-100 dark:text-green-800 dark:border-green-800"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                    viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="green"
                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium"> {{ session('success') }}</span>
                </div>
            </div>
        
        @endif
        @if(session('failure'))
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-red-100 dark:text-red-800 dark:border-red-800"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
            viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="red"
                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium"> {{ session('failure') }}</span>
        </div>
    </div>
    @endif
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
                                <form action="/update/{{ $task->id }}" method="post">
                                    @csrf
                                    <input onchange="this.form.submit()" type="checkbox" name="check" id="" value="1"
                                        {{ $task->is_done ? 'checked' : '' }}>
                                </form>
                                <div
                                    class="{{ $task->is_done ? 'line-through' : '' }}">
                                    {{ $task->task }}
                                </div>

                                <a href="/delete/{{ $task->id }}">
                                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </div>
                                </a>
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