<?php


use App\Http\Controllers\Frontend\DashboardsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('register', [RegisterController::class, "index"])->name('register');
Route::post('registeruser', [RegisterController::class, "signuppost"])->name('member.register');
Route::get('userlogin', [RegisterController::class, "login"])->name('login');
Route::post('userloginpost', [RegisterController::class, "loginpost"])->name('login.post');
Route::get('dashboard', [DashboardsController::class, "index"])->name('dashboard');
Route::get('program/{id}', [DashboardsController::class, "singlepage"])->name('singlepage');
Route::post('program', [DashboardsController::class, "cmeregister"])->name('cme.register');
