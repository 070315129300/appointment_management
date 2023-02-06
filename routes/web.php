<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AppointmentController::class, 'index']);
Route::get('/bookapp', [AppointmentController::class, 'bookapp'])->middleware('isLoggedIn');
Route::get('dashboard', [AppointmentController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('allappointment', [AppointmentController::class, 'allappointment'])->middleware('isLoggedIn');
Route::get('allusers', [AppointmentController::class, 'allusers'])->middleware('isLoggedIn');
Route::post('/a-bookapp', [AppointmentController::class, 'abookapp'])->name('a-bookapp')->middleware('isLoggedIn');
Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/adminlogin', [CustomAuthController::class, 'adminlogin']);
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::get('logout', [CustomAuthController::class, 'logout']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::post('/alogin-user', [CustomAuthController::class, 'aloginUser'])->name('alogin-user');
Route::get('/approved/{id}', [AppointmentController::class, 'approved'])->middleware('isLoggedIn');
Route::get('/cancelled/{id}', [AppointmentController::class, 'cancelled'])->middleware('isLoggedIn');






