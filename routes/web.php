<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;

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


Route::get('/',[MainController::class, 'index'])->name('main');

Route::prefix('/')->group(function () {
    Route::get('/home',[MainController::class, 'index'])->name('main');
});

Route::get('admin/login', [AdminController::class,'showLoginForm'])->name('login');
Route::post('admin/author', [AdminController::class,'author'])->name('author');

Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

//  Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
 Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware('auth:admin')->name('admin.dashboard');

 Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/',[MainController::class, 'index'])->name('main');