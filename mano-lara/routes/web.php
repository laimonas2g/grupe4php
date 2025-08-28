<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ColorController as C;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');