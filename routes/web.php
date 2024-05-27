<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisposalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
    // return view('layouts.app');
    return view('login');
    // dd(request()->ip());
});



Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "authenticate"])->name('authenticate');
Route::post('/logout', [AuthController::class, "logout"])->name('logout');
Route::get('/register', [RegisterController::class, "register"])->name('register');
Route::post('/register', [RegisterController::class, "store"])->name('register.store');
Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
Route::get('/disposal', [DisposalController::class, "index"])->name('disposal.index');
Route::get('/users', [UserController::class, "index"])->name('users.index');
