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

Route::get('/top', [App\Http\Controllers\TaskController::class, 'showTopPage'])->name('top');

Route::get('/create','TaskController@create')->name('create');

// Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/create', 'TaskController@store')->name('store');
