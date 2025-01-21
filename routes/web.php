<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftController;

Route::resource('shifts', ShiftController::class);

Route::get('/', function () {
    return view('welcome');
});
