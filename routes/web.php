<?php

use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Public Routes
Route::get('/', [PortfolioItemController::class, 'publicIndex'])->name('home');
Route::get('/portfolio/{portfolioItem}', [PortfolioItemController::class, 'publicShow'])->name('portfolio.show');

// Public Project Routes (Move inside the auth group below if admin-only)
Route::resource('projects', ProjectController::class);

// Authenticated Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Portfolio Management
    Route::resource('admin/portfolio', PortfolioItemController::class)->names('portfolio');

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/run-seeder-9876', function () {
    Artisan::call('db:seed', ['--force' => true]);
    return 'Seeder executed successfully: <br><pre>' . Artisan::output() . '</pre>';
});

require __DIR__.'/auth.php';