<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskTrackerController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/task/create', [TaskTrackerController::class, 'create'])->name('task.create');
Route::post('/task', [TaskTrackerController::class, 'store'])->name('task.store');
Route::get('/task/edit/{task}', [TaskTrackerController::class, 'edit'])->name('task.edit');
Route::put('/task/{task}', [TaskTrackerController::class, 'update'])->name('task.update');
Route::delete('/task/{task}', [TaskTrackerController::class, 'destroy'])->name('task.destroy')->middleware('auth');
