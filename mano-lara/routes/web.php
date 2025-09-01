<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ColorController as C;
use App\Http\Controllers\BookController;

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

Route::get('/vardas', function () {
    return view('name');
});

Route::get('/vardas2', [C::class, 'showName']);


Route::get('/spalva/{color}', [C::class, 'showColor']);

Route::get('/suma/{a}/{b}', [C::class, 'sum']);

Route::get('/spalva', [C::class, 'randomColor'])->name('atsitiktine-spalva');


// Books Crud
Route::get('/books', [BookController::class, 'index'])->name('books-index');
Route::get('/books/create', [BookController::class, 'create'])->name('books-create');
Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books-edit');
Route::get('/books/delete/{book}', [BookController::class, 'delete'])->name('books-delete');
Route::get('/books/show/{book}', [BookController::class, 'show'])->name('books-show');

Route::post('/books', [BookController::class, 'store'])->name('books-store');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books-update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books-destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');