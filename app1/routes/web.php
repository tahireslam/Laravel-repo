<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoListController::class,'index']);

Route::post('/saveItem', [TodoListController::class,'saveItem'])->name('saveItem');

Route::post('/completeItem', [TodoListController::class,'completeItem'])->name('completeItem');

Route::post('/editItem', [TodoListController::class,'editItem'])->name('editItem');