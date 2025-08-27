<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware(['auth:api'])->group(function () {
        Route::prefix('/employee')->group(function () {
            Route::post('/create', [EmployeeController::class, 'create']);
            Route::patch('/update/{id}', [EmployeeController::class, 'update']);
            Route::delete('/delete/{id}', [EmployeeController::class, 'delete']);
            Route::get('/get/{id}', [EmployeeController::class, 'get']);
            Route::get('/get-all', [EmployeeController::class, 'getAll']);
        });
    });
});
