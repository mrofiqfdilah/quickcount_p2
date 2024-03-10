<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatapaslonController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DatavotingController;
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
    return view('welcome');
});

// AUTH MANAGEMENT
Route::get('/halaman_daftar', [AuthController::class, 'halaman_daftar'])->name('halaman_daftar');

Route::get('/halaman_masuk', [AuthController::class, 'halaman_masuk'])->name('halaman_masuk');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');


// USERS DATA MANAGEMENT
Route::resource('/datauser', DatauserController::class);

// PASLON DATA MANAGEMENT
Route::resource('/datapaslon', DatapaslonController::class);

// Voting DATA MANAGEMENT
Route::resource('/datasuara', DatavotingController::class);


// USERS ROUTE
Route::get('/home', [UserController::class, 'home'])->name('home');

Route::get('/quickcount', [UserController::class, 'quickcount'])->name('quickcount');

Route::post('/vote', [UserController::class, 'vote'])->name('vote');



