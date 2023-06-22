<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [UserController::class, 'welcome']);
Route::post('/register', [UserController::class, 'register'])->name('user-register');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('user-authenticate');
Route::get('/login', [UserController::class, 'login'])->name('user-login');


Route::middleware('auth.basic')->group(function () {
    Route::get('/my-prize', [UserController::class, 'myPrize']);
});

