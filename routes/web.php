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
