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
   
    Route::middleware(['auth'])->group(function () {
        Route::resource('cme', CmeController::class)->except(['edit', 'update', 'destroy']);
        Route::middleware(['is_org_admin'])->group(function () {
            Route::resource('cme', CmeController::class)->only(['edit', 'update', 'destroy']);
        });
    });

    Route::get('registereduser', [RegisteredUser::class, 'index'])->name('registered.member');
    Route::post('logouts', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('registereduser/view/{id}', [RegisteredUser::class, 'view'])->name('register.view');


    Route::post('/registereduser/{id}/verify', [RegisteredUser::class, 'verify'])->name('cmeregistration.verify');
    Route::post('/registereduser/{id}/reject', [RegisteredUser::class, 'reject'])->name('cmeregistration.reject');
});
