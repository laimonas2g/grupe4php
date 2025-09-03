<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ColorController as C;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
Route::get('/books/create', [BookController::class, 'create'])->middleware('auth')->name('books-create');
Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books-edit');
Route::get('/books/delete/{book}', [BookController::class, 'delete'])->name('books-delete');
Route::get('/books/show/{book}', [BookController::class, 'show'])->name('books-show');

Route::post('/books', [BookController::class, 'store'])->name('books-store');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books-update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books-destroy');

// Authors Crud
Route::get('/authors', [AuthorController::class, 'index'])->name('authors-index');
Route::get('/authors/list', [AuthorController::class, 'list'])->name('authors-list');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors-create');
Route::get('/authors/edit/{author}', [AuthorController::class, 'edit'])->name('authors-edit');
Route::get('/authors/delete/{author}', [AuthorController::class, 'delete'])->name('authors-delete');
Route::get('/authors/show/{author}', [AuthorController::class, 'show'])->name('authors-show');

Route::post('/authors', [AuthorController::class, 'store'])->name('authors-store');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors-update');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors-destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');