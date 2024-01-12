<?php

use App\Http\Controllers\ToDo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ToDo::class,'home'] );
Route::post('/insert', [ToDo::class,'save'] );
Route::post('/update/{id}', [ToDo::class,'update'] );
Route::get('/delete/{id}', [ToDo::class,'delete'] );
