<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/addmovies', function () {
    return view('add-movies');
})->name('add-movies');

Route::middleware(['auth:sanctum','verified'])->get('/movies/{imdbID}',[movieController::class,'store'])
    ->name('movies.store');

Route::middleware(['auth:sanctum','verified'])->get('/movies/delete/{id}',[movieController::class,'destroy'])
    ->name('movies.destroy');    

Route::middleware(['auth:sanctum', 'verified'])->get('/movies', function () {
    return view('display-favorites');
})->name('movies');

Route::middleware(['auth:sanctum', 'verified'])->get('/exercise1', function () {
    return view('exercise1');
})->name('exercise1');

Route::middleware(['auth:sanctum', 'verified'])->get('/exercise2', function () {
    return view('exercise2');
})->name('exercise2');

Route::middleware(['auth:sanctum', 'verified'])->get('/exercise3', function () {
    return view('exercise3');
})->name('exercise3');

Route::middleware(['auth:sanctum', 'verified'])->get('/algoritmo4', function () {
    return view('algoritmo4');
})->name('algoritmo4');