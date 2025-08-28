<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('/auth')->group(function () {
    Route::get('/register-view', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login-view', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/employee')->group(function () {
        Route::get('/view', [EmployeeController::class, 'index'])->name('employee.view');
        Route::post('/create', [EmployeeController::class, 'create'])->name('employee.create');
    });
});
