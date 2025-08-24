<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/employee')->group(function () {
    Route::post('/create', [EmployeeController::class, 'create']);
});
