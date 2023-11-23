<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnabolicoController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/anabolicos', function () {
    return view('anabolicos');
})->middleware(['auth', 'verified'])->name('anabolicos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/anabolicos', [AnabolicoController::class, 'index'])->name('anabolicos');

Route::delete('/anabolicos/{id}', [AnabolicoController::class, 'destroy'])->name('anabolicos.destroy');

Route::put('/anabolicos/{id}', [AnabolicoController::class, 'update'])->name('anabolicos.update');
Route::get('/anabolicos/{id}/edit', [AnabolicoController::class, 'edit'])->name('anabolicos.edit');

Route::get('create', [AnabolicoController::class, 'create'])->name('anabolicos.create');

Route::post('/anabolicos', [AnabolicoController::class, 'store'])->name('anabolicos.store');

require __DIR__.'/auth.php';
