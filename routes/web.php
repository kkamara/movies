<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/auth/login', [LoginController::class, 'login'])->name('login');
Route::post('/auth/login', [LoginController::class, 'loginAction'])
    ->name('loginAction');
Route::get('/auth/logout', [LoginController::class, 'logoutAction'])
    ->name('logoutAction');
Route::post('/auth/register', [RegisterController::class, 'registerAction'])
    ->name('registerAction');
