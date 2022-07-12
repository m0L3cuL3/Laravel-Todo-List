<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index']);

// saveItem Route
Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

// markComplete Route
Route::post('/markCompleteRoute/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');

// unMarkComplete Route
Route::post('/unMarkCompleteRoute/{id}', [TodoListController::class, 'unMarkComplete'])->name('unMarkComplete');