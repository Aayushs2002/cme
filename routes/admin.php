<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CmeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\RegisteredUser;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, "index"])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('store');

Route::middleware(["admin"])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('organization', OrganizationController::class);
    Route::resource('user', ManageUserController::class);
    Route::resource('cme', CmeController::class)->middleware('admin');
    Route::get('registereduser', [RegisteredUser::class, 'index'])->name('registered.member');
});
