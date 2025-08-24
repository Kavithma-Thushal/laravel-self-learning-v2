<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/employee')->group(function () {
    Route::post('/create', [EmployeeController::class, 'create']);
    Route::patch('/update/{id}', [EmployeeController::class, 'update']);
    Route::delete('/delete/{id}', [EmployeeController::class, 'delete']);
    Route::get('/get/{id}', [EmployeeController::class, 'get']);
    Route::get('/get-all', [EmployeeController::class, 'getAll']);
});
