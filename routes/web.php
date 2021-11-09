<?php

use App\Http\Controllers\TestsController;
use App\Http\Livewire\ShowPosts;
use Illuminate\Support\Facades\Route;

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


//Route::get('/test1', 'TestsController@one');

Route::get('/tailwind', function () {
    return view('tailwind');
});

Route::get('/livewire', function () {
    return view('livewire');
});

Route::get('/tailwind2', function () {
    return view('tailwind2');
});

Route::get('/post/{post}', [App\Http\Livewire\ShowPosts::class, '__invoke']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
