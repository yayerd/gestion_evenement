<?php

use App\Http\Controllers\Auth\AssoLoginController;
use App\Http\Controllers\Auth\AssoRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// User Authentification
// Route Inscription
Route::get('/register',[RegisterController::class, 'create'])->name('register');
Route::post('/register/user',[RegisterController::class, 'store'])->name('registerUser');
// Route Connexion
Route::get('/login',[LoginController::class, 'create'])->name('login');
Route::post('/login/user',[LoginController::class, 'store'])->name('loginUser');

// Association Authentification
// Route Inscription
Route::get('/registerform',[AssoRegisterController::class, 'create'])->name('registerformasso');
Route::post('/register/asso',[AssoRegisterController::class, 'store'])->name('registerAsso');
// Route Connexion
Route::get('/loginform',[AssoLoginController::class, 'create'])->name('loginformasso');
Route::post('/login/asso',[AssoLoginController::class, 'store'])->name('loginAsso');