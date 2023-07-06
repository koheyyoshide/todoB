<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks.top', [App\Http\Controllers\TaskController::class, 'showTopPage'])->name('tasks.top');

Route::get('/tasks.create','TaskController@create')->name('tasks.create');

Route::post('/tasks.create', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{id}/edit','TaskController@edit')->name('tasks.edit');

Route::put('/tasks/{id}', 'TaskController@update')->name('tasks.update');