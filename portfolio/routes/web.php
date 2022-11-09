<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ImagesController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/projects', function () {
    return view('projects');
});

Route::get('/stonkscasino', function () {
    return view('Projects/stonkscasino');
});
Route::get('/defluitendefietser', function () {
    return view('Projects/defluitendefietser');
});

Route::get('/index', [ProjectsController::class, 'index'])->name('index');
Route::get('/{id}', [ProjectsController::class, 'project']);

Route::get('test/{id}', [ImagesController::class, 'image']);


