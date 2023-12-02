<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquineController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');

    Route::delete('/dashboard/equine/{id}', [EquineController::class, 'destroy'])->name('dashboard.equines.destroy');
    Route::get('/dashboard/create/equino',[EquineController::class, 'create'])->name('dashboard.equines.create');
    Route::post('/dashboard/equinos',[EquineController::class, 'store'])->name('dashboard.equines.store');
    Route::get('/dashboard/edit/{id}',[EquineController::class, 'edit'])->name('dashboard.equines.edit');
    Route::put('/dashboard/edit/equinos/{id}', [EquineController::class, 'update'])->name('dashboard.equines.update');

    Route::delete('/dashboard/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');
    Route::get('/dashboard/create/produtos',[ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/dashboard/produtos',[ProductController::class, 'store'])->name('dashboard.product.store');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
