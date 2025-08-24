<?php

use Illuminate\Support\Facades\Route;

Route::post('/employee', function () {
    return response()->json('Employee created');
});
