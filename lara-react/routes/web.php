<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LaraController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/lara', [LaraController::class, 'hello'])->name('lara');
Route::get('/briedis', [LaraController::class, 'draugas'])->name('briedis');



Route::prefix('shop/products')->name('shop.products.')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::get('/create', [ShopController::class, 'create'])->name('create');
    Route::post('/', [ShopController::class, 'store'])->name('store');
    Route::get('/{product}', [ShopController::class, 'show'])->name('show');
    Route::get('/{product}/edit', [ShopController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ShopController::class, 'update'])->name('update');
    Route::delete('/{product}', [ShopController::class, 'destroy'])->name('destroy');
});


// produktas/487/redaguoti
// kategorija/5/produktas/487/redaguoti





Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';