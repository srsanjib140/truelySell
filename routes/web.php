<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\RoleController;
Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('consultant-dashboard', function () {
    return "hiii";
})->middleware(['auth','consultant']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('admin-dashboard',[AdminController::class, 'index'])->middleware(['auth','admin']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::get('/role/add', [RoleController::class, 'index'])->name("addRole");
    Route::post('/role/add', [RoleController::class, 'store'])->name("store.role");
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name("editRole");
    Route::post('/role/edit/{id}', [RoleController::class, 'update'])->name("update.role");
    Route::get('/role/role_data', [RoleController::class, 'role_data'])->name("role.data");
    Route::get('/role/list', [RoleController::class, 'list'])->name("list.role");
});




require __DIR__.'/auth.php';
// require __DIR__.'/adminRoute.php';
