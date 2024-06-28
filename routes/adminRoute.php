<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin-dashboard',[AdminController::class, 'index'])->middleware(['auth','admin']);

Route::middleware('admin')->group(function () {
    // Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 



