<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminAuthController;
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

Route::prefix('admin')->group(function () {
    Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('login', [AdminAuthController::class,'showLoginForm'])->name('login');
});